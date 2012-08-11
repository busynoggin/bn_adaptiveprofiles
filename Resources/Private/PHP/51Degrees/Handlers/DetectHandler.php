<?php
/**
 * @file
 * Auto Generated Code - DO NOT EDIT
 *
 * See http://51degrees.mobi/Support/Documentation/PHP#AutoGeneratedSourceCode for more details.*
 */

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

/**
 * @file
 * Determines if a handler can be used with a useragent.
 *
 * @param array $positive
 *   An array of patterns that must match.
 * @param array $negative
 *   An array of patterns that must fail.
 * @param string $useragent
 *   The useragent to test.
 * @param $segments
 *   If provided at least one of these must also match.
 * @return bool
 *   TRUE If the useragent matches the patterns, otherwise FALSE.
 */

/**
 * Function Description.
 */
function fiftyone_degrees_CheckHandler($positive, $negative, $useragent, $segments) {
  return ($positive == NULL || fiftyone_degrees_IsMatchPatterns($positive, $useragent)) &&
    ($negative == NULL || fiftyone_degrees_IsMatchPatterns($negative, $useragent) == FALSE) &&
    fiftyone_degrees_IsMatchSegments($segments, $useragent);
}

/**
 * Determines if the patterns provided match the useragent string.
 *
 * @param array $patterns
 *   An array of regular expression patterns and possible children.
 * @param string $useragent
 *   The useragent to compare the regular expressions against.
 * @return bool
 *   TRUE if the useragent matches the patterns, otherwise FALSE.
 */
function fiftyone_degrees_IsMatchPatterns($patterns, $useragent) {
  foreach ($patterns as $pattern => $children) {
    if ($pattern == NULL || preg_match($pattern, $useragent)) {
      return $children == NULL ||
        fiftyone_degrees_IsMatchPatterns($children, $useragent);
    }
  }
  return FALSE;
}

/**
 * Checks an array of regular expressions for at least one match of an empty array.
 *
 * @param array $segments
 *   Array of patterns to check.
 * @param string $useragent
 *   The useragent to compare the regular expressions against.
 * @return bool
 *   TRUE if at least one pattern matches or the $segments array is empty,
 *   otherwise FALSE.
 */
function fiftyone_degrees_IsMatchSegments($segments, $useragent) {

  // If there aren't any segments return TRUE.
  if ($segments == NULL) {
    return TRUE;
  }

  // There are segments and at least one of them has to match.
  foreach ($segments as $segment) {
    if (preg_match($segment, $useragent)) {
      return TRUE;
    }
  }

  return FALSE;
}

/**
 * Finds the handlers that are capable of determining results for the useragent provided.
 *
 * @param string $useragent
 *   A useragent to find handlers for.
 * @return array
 *   An array of handlers to try.
 */
function fiftyone_degrees_DetectHandlers($useragent) {
  $h = array();
  if (fiftyone_degrees_CheckHandler(
    array('#(?i)bot|spider|crawler|slurp#' => NULL),
    NULL,
    $useragent,
    array('#(?i)bot|spider|crawler|slurp|[^\\s]+(?=bot|spider|crawler|slurp)[^\\s]+#',
      '#.+#'))) {
    $h[27] = 10;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#W3C_Validator#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[88] = 10;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Silk-Accelerated#' => NULL),
    NULL,
    $useragent,
    array('#(?<=Silk/)\\d+\\.\\d+#'))) {
    $h[96] = 10;
  }
  if (count($h) > 0) {
    return $h;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android( |)2\\.2\\.1#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[7] = 9;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android( |)2\\.2\\.2#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[8] = 9;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android( |)2\\.2\\.3#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[9] = 9;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android( |)2\\.3\\.1#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[11] = 9;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android( |)2\\.3\\.2#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[12] = 9;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android( |)2\\.3\\.3#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#',
      '#(?<=UCBrowser)\\d+\\.\\d+#',
      '#(?<=UCBrowser/)\\d+\\.\\d+#'))) {
    $h[13] = 9;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android( |)2\\.3\\.4#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[14] = 9;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android( |)2\\.3\\.5#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[15] = 9;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android( |)2\\.3\\.6#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[16] = 9;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android( |)2\\.3\\.7#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[17] = 9;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Chrome#' => NULL),
    array('#Android#' => NULL),
    $useragent,
    array('#(?<=Chrome/)\\d+\\.\\d+#',
      '#(?<=\\(|;|,)[^\\);]+#',
      '#(?<=RockMelt/)\\d+\\.\\d+#',
      '#Ubuntu/\\d+\\.\\d+#'))) {
    $h[35] = 9;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Opera/#' => NULL),
    array('#Opera Mini|Opera Mobi#' => NULL,
      '#MIDP|CLDC#' => NULL),
    $useragent,
    array('#(?<=Opera/)[\\d+.]+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=\\()[^;]+#',
      '#(?<=Opera/\\d\\.\\d \\()[^;\\)]+#'))) {
    $h[62] = 9;
  }
  if (count($h) > 0) {
    return $h;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android#' => NULL),
    array('#Android \\d|Android\\d#' => NULL),
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[2] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android 1|Android1#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[3] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android 2\\.0|Android2\\.0#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[4] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android 2\\.1|Android2\\.1#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[5] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android 2\\.2|Android2\\.2#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[6] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android 2\\.3|Android2\\.3#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[10] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android 2\\.4|Android2\\.4#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[18] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android 3|Android3#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#(?<=Chrome/)\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[19] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Android 4|Android4#' => NULL),
    NULL,
    $useragent,
    array('#(?<=;)([^;\\)]+)(?=Build/)#',
      '#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#',
      '#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UP\\.Browser)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Opera Mobi/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#',
      '#(?<=CrMo/)\\d+#',
      '#Chrome/\\d+#',
      '#(?<=AppleWebKit/)[\\d\\.\\+]+#',
      '#(?<=Mobile Safari/)[\\d\\.]+#'))) {
    $h[20] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#\\((iPhone|iPad|iPod)#' => NULL),
    NULL,
    $useragent,
    array('#(?<=\\()iPhone|iPad|iPod#',
      '#(?<=OS )[\\d_]+#',
      '#(?<=Version/)[\\d\\.]+#',
      '#(?<=AppleWebKit/)[\\d\\.]+#',
      '#(?<=Mobile/)[\\d\\w]+#',
      '#(?<=Safari/)[\\d\\.]+#'))) {
    $h[22] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#BOLT#' => NULL),
    array('#mac#' => NULL,
      '#win#' => NULL),
    $useragent,
    array('#(?<=BOLT/)[\\d\\.]+#'))) {
    $h[26] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Firefox|Iceweasel#' => array('#\\(Macintosh;|\\(Windows|\\(X11;#' => NULL)),
    array('#Fennec|Linux Mint|Thunderbird#' => NULL),
    $useragent,
    array('#(?<=Firefox/)\\d+\\.\\d+#',
      '#(?<=Mozilla/)\\d\\.\\d#',
      '#(?<=Mozilla/\\d\\.\\d \\()[^;\\)]+#',
      '#Windows NT \\d\\.\\d(?=;)|Mac OS X [^\\s]+(?=;)|Ubuntu|X11|SunOS|OpenBSD|FreeBSD#',
      '#Fedora/\\d+\\.\\d+#',
      '#Nutch#',
      '#Debian-\\d\\.\\d#',
      '#\\w(U|u)buntu/\\d+\\.\\d+#',
      '#X Ubuntu/\\d+\\.\\d+#',
      '#(?<=\\((U|u)buntu-)[^\\)]+#'))) {
    $h[37] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Fennec/#' => NULL),
    NULL,
    $useragent,
    array('#(?<=Mozilla/)[\\d\\.]+#',
      '#(?<=Fennec/)[\\d\\.]+#',
      '#Fennec#',
      '#(?<=\\()[^\\)]+#',
      '#(?<=Gecko/)[\\d]+#',
      '#(?<=Firefox/)[\\d\\.]+#'))) {
    $h[38] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#MSIE#' => array('#compatible#' => NULL, '#Windows XP#' => NULL, '#Windows NT#' => NULL, '#Windows ME#' => NULL, '#Win32#' => NULL, '#Windows [\\d\\.]+#' => NULL, '#Windows NT [\\d\\.]+#' => NULL, '#Mac_PowerPC#' => NULL, '#PPC Mac OS#' => NULL)),
    array('#Mobile#' => NULL,
      '#Windows CE#' => NULL,
      '#Phone#' => NULL,
      '#UC(\\.| ||)Browser#' => NULL,
      '#MIDP|CLDC#' => NULL,
      '#Opera#' => NULL,
      '#(?i)LG-|LG_|SC-|Toshiba|XV\\d+|Nokia|LGE|PalmOS|POLARIS|PalmSource|Nutch#' => NULL,
      '#HTC#' => NULL),
    $useragent,
    array('#(?<=MSIE\\s)[\\d\\.]+#',
      '#(?<=Mozilla/)\\d\\.\\d#',
      '#(?<=Mozilla/\\d\\.\\d \\()[^;\\)]+#',
      '#(?<=Windows)[\\s\\w\\d\\.]+#',
      '#Windows NT \\d\\.\\d(?=;)|Mac OS X [^\\s]+(?=;)|Ubuntu|X11#',
      '#chromeframe#',
      '#Media Center PC#',
      '#(?<=Sleipnir/)[\\d\\.]+#',
      '#Zune#'))) {
    $h[55] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Nokia#' => array('#Series40#' => NULL)),
    NULL,
    $useragent,
    array('#(?<=Nokia)[^/]+#',
      '#(?<=Series40)[^;]+#',
      '#(?<=U(C|P)\\.Browser/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=S40OviBrowser/)\\d+\\.\\d+\\.\\d+#'))) {
    $h[59] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Nokia#' => array('#Series60#' => NULL)),
    NULL,
    $useragent,
    array('#(?<=Nokia)[^/]+#',
      '#(?<=Series60/)[\\w\\d\\.]+#',
      '#(?<=U(C|P)\\.Browser/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#'))) {
    $h[60] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Mozilla#' => array('#Safari#' => array('#Windows|Macintosh|X11#' => NULL))),
    array('#Chrome/#' => NULL,
      '#Silk-Accelerated#' => NULL),
    $useragent,
    array('#(?<=Safari/)\\d+\\.\\d+#',
      '#(?<=Mozilla/)\\d\\.\\d#',
      '#(?<=Mozilla/\\d\\.\\d \\()[^;\\)]+#',
      '#Windows NT \\d\\.\\d(?=;)|Mac OS X [^\\s]+(?=;)|Ubuntu|X11#',
      '#Version/\\d\\.\\d#',
      '#(?<=Mac OS X 10_\\d_\\d;)[^;\\)]+#'))) {
    $h[72] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Skyfire/#' => NULL),
    NULL,
    $useragent,
    array('#(?<=Mozilla/)[\\d\\.]+#',
      '#(?<=Skyfire/)[\\d\\.]+#',
      '#(?<=AppleWebKit/)[\\d\\.]+#',
      '#(?<=Safari/)[\\d\\.]+#',
      '#(?<=Version/)[\\d\\.]+#'))) {
    $h[81] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#MSIE#' => array('#Windows Phone OS#' => NULL)),
    array('#Windows NT#' => NULL),
    $useragent,
    NULL)) {
    $h[90] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^WordPress/#' => NULL),
    NULL,
    $useragent,
    array('#(?<=http://)\\w+#'))) {
    $h[91] = 8;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Thunderbird#' => array('#\\(Macintosh;|\\(Windows|\\(X11;#' => NULL)),
    array('#Firefox|Iceweasel|Fennec|Linux Mint|Ubuntu#' => NULL),
    $useragent,
    array('#(?<=Thunderbird/)\\d+\\.\\d+#',
      '#(?<=Mozilla/)\\d\\.\\d#',
      '#(?<=Mozilla/\\d\\.\\d \\()[^;\\)]+#',
      '#Windows NT \\d\\.\\d(?=;)|Mac OS X [^\\s]+(?=;)|Ubuntu|X11#',
      '#(?<=(Fedora)/)\\d+\\.\\d+#'))) {
    $h[95] = 8;
  }
  if (count($h) > 0) {
    return $h;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#(?i)alcatel#' => NULL),
    NULL,
    $useragent,
    array('#(?<=Alcatel-)[^/\\s]+#',
      '#.+#'))) {
    $h[0] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Amoi#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[1] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Apple#' => array('#CoreMedia#' => NULL)),
    NULL,
    $useragent,
    NULL)) {
    $h[21] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^AUDIOVOX#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[23] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Avant#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[24] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#BenQ#' => NULL,
      '#BENQ#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[25] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^BIRD#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[28] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Bing#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[29] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Black[B|b]erry#' => NULL),
    array('#^Mozilla/#' => array('#BlackBerry#' => array('#Version/\\d+#' => NULL))),
    $useragent,
    array('#(?<=Black[B|b]erry)[^/]+#',
      '#(?<=Black[B|b]erry\\w{4}/)\\d+\\.\\d+\\.\\d+|(?<=Black[B|b]erry\\w{5}/)\\d+\\.\\d+\\.\\d+#',
      '#(?<=UP.Browser/)\\d+\\.\\d+#'))) {
    $h[30] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Mozilla/#' => array('#BlackBerry#' => array('#Version/\\d+#' => NULL))),
    NULL,
    $useragent,
    array('#(?<=BlackBerry)[^;]+#',
      '#(?<=Version/)\\d+\\.\\d+\\.\\d+#'))) {
    $h[31] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^DoCoMo#' => NULL),
    NULL,
    $useragent,
    array('#(?<=DoCoMo/)\\d+\\.\\d+#',
      '#(?<=DoCoMo/\\d\\.\\d[\\s|/])[\\w\\d]+#'))) {
    $h[36] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Fly|^FLY#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[39] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Grundig|^GRUNDIG#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[40] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^HD2|HTC#' => NULL),
    NULL,
    $useragent,
    array('#(?<=\\sHTC[\\s|_])[^;\\s]+#',
      '#.+#'))) {
    $h[41] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#(?i)Huawei#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[42] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^KDDI#' => NULL),
    NULL,
    $useragent,
    array('#KDDI-\\w+#'))) {
    $h[43] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^kyocera|^QC-|^KWC-#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[44] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^LCT#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[45] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Lenovo#' => NULL),
    NULL,
    $useragent,
    array('#(?<=^Lenovo[-_])[\\w\\d]+#',
      '#.+#'))) {
    $h[46] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^LG/#' => NULL),
    NULL,
    $useragent,
    array('#(?<=^LG/)[\\w\\d]+#',
      '#(?<=^LG(-|/))[^\\s/]+#',
      '#(?<=NovarraVision)\\d\\.\\d#',
      '#(?<=Browser/Teleca-)[^\\s]+#',
      '#(?<=UCBrowser)\\d\\.\\d#',
      '#(?<=Browser/Obigo-)[^/]+/[\\d\\.]+#'))) {
    $h[47] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^LG-#' => NULL),
    NULL,
    $useragent,
    array('#(?<=^LG-)[\\w\\d]+#',
      '#(?<=^LG(-|/))[^\\s/]+#',
      '#(?<=Browser/Obigo-)[^/]+/[\\d\\.]+#',
      '#(?<=Browser/Teleca-)[^\\s]+#',
      '#(?<=UP.Browser/)\\d+\\.\\d+#'))) {
    $h[48] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^LGE-#' => NULL),
    NULL,
    $useragent,
    array('#(?<=^LGE-)[\\w\\d]+#',
      '#(?<=^LGE-)[^\\s/]+#',
      '#(?<=Browser/Obigo-)[^/]+/[\\d\\.]+#',
      '#(?<=Browser/Teleca-)[^\\s]+#',
      '#(?<=UP.Browser/)\\d+\\.\\d+#'))) {
    $h[49] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Maemo Browser#' => array('#N[\\d]+#' => NULL)),
    NULL,
    $useragent,
    NULL)) {
    $h[50] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Maxon#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[51] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Mitsu#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[52] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^MOT-#' => NULL),
    NULL,
    $useragent,
    array('#(?<=^MOT-)[^/]+#',
      '#(?<=UP\\.Browser/)[\\d\\.]+#',
      '#\\([^\\)]+\\)#'))) {
    $h[53] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^MOT-MOTOROLA#' => NULL),
    NULL,
    $useragent,
    array('#(?<=^MOT-MOTOROLA )[^/]+#',
      '#\\([^\\)]+\\)#'))) {
    $h[54] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^NEC|KGT#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[56] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Nexian|^NEXIAN#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[57] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#(?i)nokia#' => NULL),
    array('#Series(40|60)#' => NULL),
    $useragent,
    array('#(?<=Nokia)[^/]+#',
      '#(?<=U(C|P)\\.Browser/)\\d+\\.\\d+#',
      '#(?<=UC Browser)\\d+\\.\\d+#',
      '#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=S40OviBrowser/)\\d+\\.\\d+.\\d+#',
      '#(?<=UCBrowser)\\d+\\.\\d+#'))) {
    $h[58] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Palm#' => NULL,
      '#Palm(S|s)ource#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[65] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Panasonic#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[66] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Pantech|^PT-|^PANTECH|^PG-#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[67] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Philips|^PHILIPS#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[68] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Qtek#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[70] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Mozilla#' => array('#Safari#' => NULL)),
    array('#iPhone|iPod|iPad|Nokia|BlackBerry|Android|Skyfire#' => NULL,
      '#Silk-Accelerated#' => NULL),
    $useragent,
    array('#(?<=Mozilla/\\d\\.\\d \\()[^)]+#',
      '#(?<=AppleWebKit/)[\\d\\.]+#',
      '#(?<=Version/)[\\d\\.]+#',
      '#(?<=Safari/)[\\d\\.]+#'))) {
    $h[71] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Sagem|^SAGEM#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[73] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#(?i)SAMSUNG|SEC-|SCH-#' => NULL),
    array('#Series60/#' => array('#Samsung/#' => NULL),
      '#SAMSUNG-GT-#' => NULL),
    $useragent,
    array('#(?i)(?<=SAMSUNG-|SEC-|SCH-)[^/]+#',
      '#(?<=Bada/)\\d+\\.\\d+#',
      '#(?<=Dolfin/)\\d+\\.\\d+#',
      '#(?<=Jasmine/)\\d+\\.\\d+#',
      '#(?<=NetFront/)[\\d\\.]+#',
      '#(?<=UC\\.Browser/)\\d+\\.\\d+#',
      '#(?<=UP.Browser/)\\d+\\.\\d+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=Windows)\\w+;#'))) {
    $h[74] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#SAMSUNG-GT-#' => NULL),
    array('#Series60/#' => array('#Samsung/#' => NULL)),
    $useragent,
    array('#(?<=SAMSUNG-GT-)[^/-]+#',
      '#(?<=Bada/)\\d+\\.\\d+#',
      '#(?<=Jasmine/)\\d+\\.\\d+#',
      '#(?<=Dolfin/)\\d+\\.\\d+#',
      '#(?<=UC\\.Browser/)\\d+\\.\\d+#',
      '#(?<=NetFront/)[\\d\\.]+#',
      '#(?<=UP.Browser/)\\d+\\.\\d+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#'))) {
    $h[75] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Series60/#' => array('#Samsung/#' => NULL)),
    NULL,
    $useragent,
    array('#(?<=Samsung/)[^/]+#',
      '#(?<=Series60/)[\\d\\.]+#',
      '#(?<=SymbianOS/)[\\d\\.]+#',
      '#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#',
      '#(?<=Opera Mini/)\\d+\\.\\d+#',
      '#(?<=\\()[^\\)]+#'))) {
    $h[76] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Sanyo|^SANYO#' => NULL,
      '#Sanyo#' => NULL,
      '#SCP#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[77] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Sendo#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[78] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Sharp|^SHARP#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[79] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^SIE-#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[80] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^SoftBank|^Vodafone|^J-PHONE#' => NULL),
    NULL,
    $useragent,
    array('#(SoftBank|Vodafone|J-PHONE)\\/\\d\\.\\d\\/\\w+#'))) {
    $h[82] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#SonyEricsson#' => NULL),
    NULL,
    $useragent,
    array('#(?<=SonyEricsson)[^/]+#',
      '#(?<=NetFront/)[\\d\\.]+#',
      '#(?<=Opera )[^\\s]+#',
      '#(?<=SEMC-Browser/)[^\\s]+#',
      '#(?<=TelecaBrowser/)[^\\s]+#',
      '#(?<=SymbianOS/)[^;]+ #',
      '#(?<=Series60/)[^\\s]+#',
      '#(?<=U(C|P)\\.Browser/)\\d+\\.\\d+#'))) {
    $h[83] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^TIANYU-KTOUCH#' => NULL),
    NULL,
    $useragent,
    array('#(?<=TIANYU-KTOUCH/)[^/\\b]+#',
      '#.+#'))) {
    $h[84] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Toshiba#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[85] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Vodafone#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[86] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#webOS#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[87] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Mozilla/#' => array('#Windows CE#' => NULL)),
    array('#HTC#' => NULL),
    $useragent,
    array('#(?<=\\(|;|\\))[^;\\)]+#'))) {
    $h[89] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^ZTE#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[92] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^Mozilla#' => array('#(?i)Webkit#' => array('#Windows|Macintosh|X11#' => NULL))),
    array('#Chrome|Safari|Android|Nokia|BlackBerry#' => NULL),
    $useragent,
    array('#(?<=Mozilla/)\\d\\.\\d#',
      '#(?<=Mozilla/\\d\\.\\d \\()[^;\\)]+#',
      '#Windows NT \\d\\.\\d(?=;)|Mac OS X [^\\s]+(?=;)|Ubuntu|X11#'))) {
    $h[93] = 7;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Gecko#' => array('#\\(Macintosh;|\\(Windows|\\(X11;#' => NULL)),
    array('#Fennec|Linux Mint|Firefox|IceWeasel|Thunderbird|WebKit#' => NULL),
    $useragent,
    array('#(?<=Mozilla/)\\d\\.\\d#',
      '#(?<=Mozilla/\\d\\.\\d \\()[^;\\)]+#',
      '#Windows NT \\d\\.\\d(?=;)|Mac OS X [^\\s]+(?=;)|Ubuntu|X11|Linux i686#'))) {
    $h[94] = 7;
  }
  if (count($h) > 0) {
    return $h;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Opera#' => NULL),
    array('#Opera Mini|Opera Mobi#' => NULL),
    $useragent,
    array('#(?<=Opera/)[\\d+.]+|(?<=Opera )[\\d\\.]+#',
      '#(?<=\\()[^;]+#',
      '#(?<=Presto/)\\d+\\.\\d+#',
      '#(?<=Version/)\\d+\\.\\d+#'))) {
    $h[61] = 6;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Opera Mini#' => NULL),
    NULL,
    $useragent,
    array('#(?<=Opera Mini/att/)\\d(/|\\.)\\d#',
      '#^[^;]+#',
      '#(?<=Opera Mini/)\\d(/|\\.)\\d#'))) {
    $h[63] = 6;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#Opera Mobi#' => NULL),
    NULL,
    $useragent,
    array('#(?<=Version/)\\d+\\.\\d+#',
      '#(?<=\\()[^;]+#'))) {
    $h[64] = 6;
  }
  if (count($h) > 0) {
    return $h;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#^portalmmm#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[69] = 5;
  }
  if (count($h) > 0) {
    return $h;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#\\w+#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[32] = 1;
  }
  if (fiftyone_degrees_CheckHandler(
    array('#WAP|MIDP|CLDC|Teleca-|Screen-|mobile#' => NULL),
    NULL,
    $useragent,
    NULL)) {
    $h[33] = 1;
  }
  if (count($h) > 0) {
    return $h;
  }
}