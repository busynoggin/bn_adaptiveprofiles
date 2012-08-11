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
 * FUNCTION DOCUMENTATION.
 */
function fiftyone_degrees_finalMatcher(&$user_agent, &$results) {
  $results = fiftyone_degrees_sort_results($results);
  $highest_position = 0;
  $subset = array();
  foreach ($results as $result) {
    $resultua = $result[4];
    $pos = strspn($user_agent ^ $resultua, "\0");
    if ($pos > $highest_position) {
      $highest_position = $pos;
      unset($subset);
      $subset[] = $result;
    }
    elseif ($pos == $highest_position) {
      $subset[] = $result;
    }
  }
  if (count($subset) == 1) {
    return $subset[0];
  }
  if (count($subset) > 1) {
    return fiftyone_degrees_match_tails($user_agent, $highest_position, $subset);
  }
  return NULL;
}

/**
 * FUNCTION DOCUMENTATION.
 */
function fiftyone_degrees_match_tails(&$useragent, &$pos, &$devices) {
  $longest_subset = 0;
  $tails = array();
  foreach ($devices as $tail) {
    $tail = substr($tail[4], $pos, (strlen($tail[4]) - $pos));
    $tails[] = $tail;
    if (strlen($tail) > $longest_subset) {
      $longest_subset = strlen($tail);
    }
  }
  $amount = 0;
  if (($longest_subset + $pos) < strlen($useragent)) {
    $amount = $longest_subset;
  }
  else {
    $amount = strlen($useragent) - $pos;
  }
  $useragent_tail = substr($useragent, $pos, $amount);
  $closest_tail = NULL;
  $min_distance = PHP_INT_MAX;
  for ($i = 0; $i < count($tails); $i++) {
    $current = $tails[$i];
    $current_distance = fiftyone_degrees_edit_distance($useragent_tail, $current, $min_distance);
    if ($current_distance < $min_distance) {
      $min_distance = $current_distance;
      $closest_tail = $tails[$i];
    }
  }
  $to_return = NULL;
  foreach ($devices as $dev) {
    if (!isset($to_return)) {
      if (fiftyone_degrees_ends_with($dev[4], $closest_tail)) {
        $to_return = $dev;
      }
    }
  }
  if (!is_null($to_return)) {
    return $to_return;
  }
  return $devices[0];
}

/**
 * FUNCTION DOCUMENTATION.
 */
function fiftyone_degrees_ends_with($full_string, $find) {
  $length = strlen($find);
  $start = $length * -1;
  return (substr($full_string, $start) === $find);
}

/**
 * FUNCTION DOCUMENTATION.
 */
function fiftyone_degrees_sort_results($results) {
  $to_sort = array();
  $di = 0;
  foreach ($results as $device) {
    $to_sort[] = $device[0] . '-' . $device[1] . '-' . $device[2] . '-' . $device[3] . '-' . $di;
    $di++;
  }
  sort($to_sort);
  $returning = array();
  foreach ($to_sort as $sorted) {
    $res = explode('-', $sorted);
    $returning[] = $results[$res[4]];
  }
  return $returning;
}
