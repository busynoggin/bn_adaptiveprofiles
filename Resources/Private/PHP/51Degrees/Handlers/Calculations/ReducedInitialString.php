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
 * Insert Function Doc comment here.
 */
function fiftyone_degrees_ReducedInitialString($ua_to_test, $max_initial_string, $tolerance) {
  if ((fiftyone_degrees_StartsWith($_SERVER['HTTP_USER_AGENT'], $ua_to_test) || fiftyone_degrees_StartsWith($ua_to_test, $_SERVER['HTTP_USER_AGENT'])) && $max_initial_string < strlen($ua_to_test)) {
    return strlen($ua_to_test);
  }
  return NULL;
}

/**
 * Insert Function Doc comment here.
 */
function fiftyone_degrees_StartsWith($haystack, $needle) {
  $length = strlen($needle);
  return (substr($haystack, 0, $length) === $needle);
}
