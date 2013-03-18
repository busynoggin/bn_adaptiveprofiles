<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public License,
 * v. 2.0.
 *
 * If a copy of the MPL was not distributed with this file, You can obtain one
 * at http://mozilla.org/MPL/2.0/.
 *
 * This Source Code Form is "Incompatible With Secondary Licenses", as defined
 * by the Mozilla Public License, v. 2.0.
 */

$_51d = fiftyone_degrees_Detect();

/**
 * Returns array of properties associated with the device.
 *
 * If no input is provided the current UserAgent header
 * will be used as the user agent. If the 51D key is present
 * in the session this value will be returned.
 *
 * string $input
 *  Optional useragent to detect.
 * return array
 *  Array of properties and values.
 */
function fiftyone_degrees_Detect($input = NULL) {
  if (!session_id() || !$_SESSION['51D']) {

    // Record the start time of the matching process.
    $time = microtime();
    $time = explode(' ', $time);
    $time = $time[1] + $time[0];
    $start = $time;

    // The maximum length of a row in the profile csv files.
    define("MAX_ROW_LENGTH", "29");

    $_51d = array();
    $devices = array();
    $final = NULL;
    $base_location = substr(__FILE__, 0, strlen(__FILE__) - 18);

    include_once "Handlers/Calculations/EditDistance.php";
    include_once "Handlers/Calculations/RegexSegment.php";
    include_once "Handlers/DetectHandler.php";

    // Get the useragent string to be processed.
    if (!is_array($input)) {
      if (is_string($input)) {
        $useragent = $input;
      }
      else {
        $useragent = fiftyone_degrees_GetUserAgent();
      }
    }
    else {
      $useragent = $input['UserAgent'];
    }

    // Get a list of handlers which are suitable for detecting
    // this device.
    $handlers = fiftyone_degrees_DetectHandlers($useragent);

    // Request each handler to provide matching devices, if any.
    foreach ($handlers as $handler_number => $confidence) {
      include_once "Handlers/" . $handler_number . ".php";
      $device = call_user_func("_H" . $handler_number, $useragent);
      if ($device != NULL) {
        $devices[] = $device;
      }
    }

    // If devices have been found reduce them to a single device.
    if (isset($devices[0])) {

      // Produce an array of final devices.
      $final_devices = array();
      foreach ($devices as $device) {
        foreach ($device as $fin) {
          $final_devices[] = $fin;
        }
      }

      if (count($final_devices) == 1) {
        // If there is only one device found then use this one.
        $final = $final_devices[0];
      }
      else {
        // If more than one device has been found then use the
        // final matcher to reduce to a single device.
        include_once "Handlers/Calculations/FinalMatcher.php";
        $final = fiftyone_degrees_finalMatcher($useragent, $final_devices);
      }
    }

    // If a final single device is found then read property data and
    // add performance measures to the output.
    if (isset($final)) {

      // Read the profile data from each of the profiles found. The
      // profile files are pipe (|) seperated lists of values.
      // Column 0 is the name of the property.
      // Column 1 is 0 if the property contains a single value, or
      // is 1 if the property is a list of values as an array.
      // Columns 1+x are the values for the property.
      foreach (array_slice($final, 0, 4) as $file) {
        if (($handle = fopen($base_location . "Profiles/" . $file . ".csv", "r")) !== FALSE) {
          while (($data = fgetcsv($handle, MAX_ROW_LENGTH, "|")) !== FALSE) {
            switch ($data[1]) {
              // This is a single value property.
              case "0":
                $_51d[$data[0]] = $data[2];
                break;

              // The is a list property with multiple values.
              case "1":
                $_51d[$data[0]] = array_slice($data, 3);
                break;

            }
          }
          fclose($handle);
        }
      }

      // Record the time the matching process took to complete.
      $time = explode(' ', microtime());
      $time = $time[1] + $time[0];
      $finish = $time;
      $total_time = round(($finish - $start), 4);
      $_51d['DetectionTime'] = $total_time * 1000;

      // Set the device ID based on the 4 profile ids provided.
      $_51d['DeviceID'] = $final[0] . '-' . $final[1] . '-' . $final[2] . '-' . $final[3];

      // Record the user agent of the device matched against.
      $_51d['MatchedUserAgent'] = $final[4];
    }

    // If there is a session record the results for future requests.
    if (session_id()) {
      $_SESSION['51D'] = $_51d;
    }
  }
  else {
    // The session already holds the results of a previous match.
    // Use that one and set the detection time to zero.
    $_51d = $_SESSION['51D'];
    if ($_51d['DetectionTime'] != 0.00) {
      $_51d['DetectionTime'] = 0.00;
      $_SESSION['51D'] = $_51d;
    }
  }
  return $_51d;
}

/**
 * Gets the useragent associated with the current request.
 *
 * Checks other header fields for the presence of original
 * user agent values and returns the most appropriate one.
 *
 * return string
 *  The most relevent UserAgent string for the current request.
 */
function fiftyone_degrees_GetUserAgent() {
  if (function_exists('getallheaders')) {
    $input = getallheaders();
    $header_ua = "User-Agent";
    $transcoder_ua = array(
      "x-Device-User-Agent",
      "X-Device-User-Agent",
      "X-OperaMini-Phone-UA"
    );
    if (isset($input[$header_ua])) {
      return trim($input[$header_ua]);
    }
    else {
      foreach ($transcoder_ua as $trans_ua) {
        if (isset($input[$trans_ua])) {
          return trim($input[$trans_ua]);
        }
      }
    }
    return "";
  }
  else {
    if (isset($_SERVER['HTTP_X_DEVICE_USER_AGENT'])) {
      return $_SERVER['HTTP_X_DEVICE_USER_AGENT'];
    }
    if (isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])) {
      return $_SERVER['HTTP_X_OPERAMINI_PHONE_UA'];
    }
    return $_SERVER['HTTP_USER_AGENT'];
  }
}
