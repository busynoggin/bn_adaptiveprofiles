<?php
/**
 * @file
 * Auto Generated Code - DO NOT EDIT
 *
 * See http://51degrees.mobi/Support/Documentation/PHP#AutoGeneratedSourceCode for more details.*
 */

/**
 * See LICENSE.TXT for terms of use and copyright.
 */

/**
 * Calculates the matching score between the two strings for this handler.
 *
 * &$target string
 *   The string we're trying to find the closest value to.
 * $test string
 *   The string that we're testing against.
 * $ls integer
 *   The lowest score we've found so far.
 * return integer
 *   The score between the two strings.
 */
function E18($target, $test, $ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 100000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[2], $test[2], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[3], $test[3], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[4], $test[4], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[5], $test[5], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[6], $test[6], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[7], $test[7], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[8], $test[8], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[9], $test[9], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[10], $test[10], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[11], $test[11], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[12], $test[12], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[13], $test[13], $ls, 1, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[14], $test[14], $ls, 1, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[15], $test[15], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  return $score;
}

/**
 * Returns the details of the devices that are closest to the
 * useragent string provided.
 *
 * $useragent string
 *   The useragent we're trying to find.
 * return array
 *   An array of device details for the closest devices.
 */
function _H18($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=;)([^;\\)]+)(?=Build/)#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#', $useragent),
    3 => fiftyone_degrees_preg_match_all('#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#', $useragent),
    4 => fiftyone_degrees_preg_match_all('#(?<=UC Browser)\\d+\\.\\d+#', $useragent),
    5 => fiftyone_degrees_preg_match_all('#(?<=UP\\.Browser)[\\d\\.]+#', $useragent),
    6 => fiftyone_degrees_preg_match_all('#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#', $useragent),
    7 => fiftyone_degrees_preg_match_all('#(?<=Opera Mini/)\\d+\\.\\d+#', $useragent),
    8 => fiftyone_degrees_preg_match_all('#(?<=Opera Mobi/)\\d+\\.\\d+#', $useragent),
    9 => fiftyone_degrees_preg_match_all('#(?<=Version/)\\d+\\.\\d+#', $useragent),
    10 => fiftyone_degrees_preg_match_all('#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#', $useragent),
    11 => fiftyone_degrees_preg_match_all('#(?<=CrMo/)\\d+#', $useragent),
    12 => fiftyone_degrees_preg_match_all('#(?<=Chrome/)\\d+#', $useragent),
    13 => fiftyone_degrees_preg_match_all('#(?<=AppleWebKit/)[\\d\\.\\+]+#', $useragent),
    14 => fiftyone_degrees_preg_match_all('#(?<=Mobile Safari/)[\\d\\.]+#', $useragent),
    15 => fiftyone_degrees_preg_match_all('#(?<=Flipboard/)\\d+\\.\\d+#', $useragent));

  return $dl;
}
