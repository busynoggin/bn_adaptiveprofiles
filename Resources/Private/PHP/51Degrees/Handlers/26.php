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
function E26($target, $test, $ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 1, $score);
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
function _H26($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=BOLT/)[\\d\\.]+#', $useragent));
  $ns = E26($segments, array(0 => array(0 => '2.800')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,17317,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; BOLT/2.800) AppleWebKit/534.6 (KHTML, like Gecko) Version/5.0 Safari/534.6.3');
    $ls = $ns;
  }
  $ns = E26($segments, array(0 => array(0 => '2.690')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,17317,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; BOLT/2.690) AppleWebKit/534.6 (KHTML, like Gecko) Version/5.0 Safari/534.6.3');
    $ls = $ns;
  }
  $ns = E26($segments, array(0 => array(0 => '2.702')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,17317,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; BOLT/2.702) AppleWebKit/534.6 (KHTML, like Gecko) Version/5.0 Safari/534.6.3');
    $ls = $ns;
  }
  $ns = E26($segments, array(0 => array(0 => '1.600')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,17316,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; BOLT/1.600) AppleWebKit/530+ (KHTML, like Gecko) Version/4.0 Safari/530.17');
    $ls = $ns;
  }
  return $dl;
}