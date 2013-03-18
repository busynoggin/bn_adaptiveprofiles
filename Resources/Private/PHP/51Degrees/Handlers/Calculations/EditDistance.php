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

/**
 * @file
 * Calculates the levenshtein or Edit Distance between
 * two strings.
 *
 * @package   fiftyone_degrees
 * @author    51Degrees.mobi
 * @copyright 2012
 * @license   http://51Degrees.mobi
 * @link      http://drupal.org/node/1623266
 */

define("LEVENSHTEIN_MAX_LENGTH", 255);

 /**
 * Function Documentation
 */
function fiftyone_degrees_edit_distance($str1, $str2, $ls) {
  // If the lowest score is zero then these strings must
  // match exactly to return the same score.
  if ($ls == 0) {
    if ($str1 === $str2) {
      return 0;
    }
    return PHP_INT_MAX;
  }

  // Check the string lengths to see if the difference
  // in length makes it not worth checking them with
  // levenshtein.
  $str1_len = strlen($str1);
  $str2_len = strlen($str2);
  if (abs($str1_len - $str2_len) > $ls) {
    return PHP_INT_MAX;
  }

  // Reduce the length of the strings if more than max length
  // then perform the final check.
  if ($str1_len > LEVENSHTEIN_MAX_LENGTH) {
    $str1 = substr($str1, 0, LEVENSHTEIN_MAX_LENGTH);
  }
  if ($str2_len > LEVENSHTEIN_MAX_LENGTH) {
    $str2 = substr($str2, 0, LEVENSHTEIN_MAX_LENGTH);
  }
  return levenshtein($str1, $str2);
}

