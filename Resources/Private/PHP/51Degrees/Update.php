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

fiftyone_degrees_StartUpdate();

/**
 * Insert a function comment. Single line. Starts with capital, ends with fullstop.
 */
function fiftyone_degrees_StartUpdate() {
  @set_time_limit(500);
  $time = microtime();
  $time = explode(' ', $time);
  $time = $time[1] + $time[0];
  $start = $time;
  $dir = dirname(__FILE__);
  $body_post = "";
  $php_current = "phpCurrent=";
  $premium_license_key = fiftyone_degrees_get_licenses($dir);
  $keys_valid = TRUE;

  foreach ($premium_license_key as $key) {
    if (!preg_match("#^[A-Z\d]+$#", $key)) {
      $keys_valid = FALSE;
    }
  }

  $premium_license_key = implode('|', $premium_license_key);

  if ($keys_valid) {
    if ($premium_license_key !== "") {
      fiftyone_degrees_remove_old_files($dir);
      $url = 'https://51degrees.mobi/devicedata/getdelta.ashx?LicenseKeys=' . $premium_license_key;
      fiftyone_degrees_get_php_file_arrays($dir, $php_current);
      $update_file = fiftyone_degrees_download($url, $php_current, $dir);
      if (substr($update_file, 0, 8) == "[!FAILED") {
        $error_message = explode('|', $update_file);
        echo 'There has been a problem with the update. ' . $error_message[1];
      }
      elseif ($update_file != "") {
        fiftyone_degrees_do_update($php_current, $update_file, $url, $dir);
        echo "Updates have been applied, thank you for your patience!";
      }
      else {
        echo "No updates available. Please try again later.";
      }
    }
    else {
      echo "Please check that your license file(s) are included in the 51Degrees directory, the script has detected that there are no licenses.";
    }
  }
  else {
    echo "Please check your license(s), they appear to be invalid";
  }
  $time = microtime();
  $time = explode(' ', $time);
  $time = $time[1] + $time[0];
  $finish = $time;
  $total_time = round(($finish - $start), 4);
}

/**
 * Function Document.
 */
function fiftyone_degrees_get_licenses($dir) {
  $licenses = array();
  foreach (glob($dir . '/*.lic') as $file) {
    $licenses[] = file_get_contents($file);
  }
  return $licenses;
}

/**
 * Function Document.
 */
function fiftyone_degrees_get_php_file_arrays($dir, &$php_current) {
  $update_hashes_file = $dir . '/UpdateHash.txt';
  $update_lengths_file = $dir . '/UpdateLengths.txt';
  $current_hash = "";
  if (file_exists($update_hashes_file) && file_exists($update_lengths_file)) {
    $current_hash = file_get_contents($update_hashes_file);
  }

  if ($current_hash == "") {
    fiftyone_degrees_write_update_hash_file($dir, $current_hash);
  }

  $php_current .= $current_hash;
  return;
}

/**
 * Function Document.
 */
function fiftyone_degrees_write_update_hash_file($dir, &$current_hash) {
  $dirlengths = "";
  $filename = $dir . '/UpdateHash.txt';
  fiftyone_degrees_php_file_arrays_processor($dir, $current_hash, $dirlengths, FALSE);
  $fh = fopen($filename, 'w');
  fwrite($fh, $current_hash);
  fclose($fh);
  $dirlengths = fiftyone_degrees_shorten_lengths_var($dirlengths);
  $fh = @fopen($dir . '/UpdateLengths.txt', 'w+');
  fwrite($fh, $dirlengths);
  fclose($fh);
  if (!file_exists($filename) || !file_exists($dir . '/UpdateLengths.txt')) {
    die('You do not have permissions set to update these files. Please change your permissions and try again.');
  }
}

/**
 * Function Document.
 */
function fiftyone_degrees_php_file_arrays_processor($dir, &$current_hash, &$dirlengths, $is_subdir) {
  foreach (glob($dir . '/*') as $file) {
    if (is_dir($file)) {
      fiftyone_degrees_php_file_arrays_processor($file, $current_hash, $dirlengths, TRUE);
    }
    else {
      $file_with_dir = substr($file, 13);
      if ($is_subdir === TRUE || ($file_with_dir == "51Degrees.mobi.php"
          || $file_with_dir == "51Degrees.mobi.usage.php" || $file_with_dir == "51Degrees.mobi.metadata.php"
          || $file_with_dir == "License.txt")) {
        $this_hash = $file_with_dir . md5_file($file);
        $dirlengths .= (strlen($this_hash) - 32) . '-';
        $current_hash .= $this_hash;
      }
    }
  }
}

/**
 * Function Document.
 */
function fiftyone_degrees_shorten_lengths_var($dirlengths) {
  $ctr = 0;
  $vals = array();
  $prev = 0;
  foreach (explode('-', $dirlengths) as $len) {
    if ($prev != 0 && $len != $prev) {
      $vals[] = $prev . '*' . $ctr;
      $ctr = 1;
      $prev = $len;
    }
    elseif ($prev != 0) {
      $ctr++;
    }
    else {
      $prev = $len;
      $ctr++;
    }
  }
  return implode('|', $vals);
}

/**
 * Function Document.
 */
function fiftyone_degrees_download($url, $data, $dir, $optional_headers = NULL) {
  $params = array(
    'http' => array(
      'method' => 'POST',
      'content' => $data,
      'header' => "Content-type: application/x-www-form-urlencoded\r\n
        Content-Length: " . strlen($data) . "\r\n
        Hash-Length: " . file_get_contents($dir . '/UpdateLengths.txt') . "\r\n"
    ),
  );
  if ($optional_headers != NULL) {
    $params['http']['header'] = $optional_headers;
  }
  $ctx = stream_context_create($params);
  try {
    ini_set('user_agent', $_SERVER['HTTP_USER_AGENT']);
    $fp = @fopen($url, 'rb', FALSE, $ctx);
    $response = @stream_get_contents($fp);
  }
  catch (Exception $e) {
    echo 'There was a problem trying to run the update. Exception: ' . $e->getMessage();
  }
  return $response;
}

/**
 * Function Document.
 */
function fiftyone_degrees_do_update($php_current, &$update_file, $url, $dir) {
  fiftyone_degrees_double_check($php_current, $update_file, $url, $dir);
  $linevars = explode('!]', $update_file);
  array_pop($linevars);
  $delete_files = array();
  foreach ($linevars as $value) {
    $vals = explode('|', $value);
    if (trim($vals[0]) != "[!DELETE") {
      $text = array();
      for ($i = 2; $i < count($vals); $i++) {
        $text[] = $vals[$i];
      }
      $res = fiftyone_degrees_create_update_file($dir . '/' . $vals[1], implode('|', $text));
      if ($res != "") {
        fiftyone_degrees_rollback_update($dir);
        echo 'Problem occured while updating - ' . $res;
      }
    }
    else {
      $delete_files[] = $vals[1];
    }
  }
  try {
    fiftyone_degrees_delete_marked($delete_files);
  }
  catch (Exception $e) {
    echo 'Problem occured while updating - ' . $e->getMessage();
  }
  fiftyone_degrees_remove_old_files($dir);
  $current_hash = "";
  fiftyone_degrees_write_update_hash_file($dir, $current_hash);
}

/**
 * Function Document.
 */
function fiftyone_degrees_double_check($php_current, &$update_file, $url, $dir) {
  $checking = fiftyone_degrees_download($url, $php_current, $dir);
  if ($checking != $update_file) {
    $update_file = $checking;
    fiftyone_degrees_double_check($php_current, $update_file, $url, $dir);
  }
}

/**
 * Function Document.
 */
function fiftyone_degrees_create_update_file($file_directory, $file_contents) {
  try {
    $directory = explode('\\', $file_directory);
    $checking_dir = "";
    for ($i = 0; $i < count($directory) - 1; $i++) {
      $checking_dir .= '/' . $directory[$i];
      if (!is_dir($checking_dir)) {
        mkdir($checking_dir);
      }
    }
    if (file_exists($file_directory)) {
      $fh = @fopen($file_directory . 'upd', 'w+', FALSE) or die("Problem creating file: your permissions will not allow writing.");
      fwrite($fh, $file_contents);
      fclose($fh);
      if (file_exists($file_directory)) {
        rename($file_directory, $file_directory . 'old');
      }
      rename($file_directory . 'upd', $file_directory);
    }
    else {
      $fh = @fopen($file_directory, 'w+', FALSE) or die("Problem creating file: your permissions will not allow writing.");
      fwrite($fh, $file_contents);
      fclose($fh);
    }
    return "";
  }
  catch (Exception $e) {
    return $e->getMessage();
  }
}

/**
 * Function Document.
 */
function fiftyone_degrees_delete_marked($delete_files) {
  foreach ($delete_files as $to_delete) {
    if (file_exists($dir . '/' . $to_delete)) {
      unlink($dir . '/' . $to_delete);
    }
  }
}

/**
 * Function Document.
 */
function fiftyone_degrees_rollback_update($dir) {
  foreach (glob($dir . '/*') as $file) {
    if (is_dir($file)) {
      fiftyone_degrees_rollback_update($file);
    }
    else {
      if (substr($file, strlen($file) - 3, strlen($file)) == "old") {
        try {
          rename($file, substr($file, 0, strlen($file) - 3));
        }
        catch (Exception $e) {
        }
      }
    }
  }
}

/**
 * Function Document.
 */
function fiftyone_degrees_remove_old_files($dir) {
  foreach (glob($dir . '/*') as $file) {
    if (is_dir($file)) {
      fiftyone_degrees_remove_old_files($file);
    }
    else {
      if (substr($file, strlen($file) - 3, strlen($file)) == "old") {
        try {
          unlink($file);
        }
        catch (Exception $e) {
        }
      }
    }
  }
}
