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
 * Calculates the edit distance between the two strings.
 *
 * &$target string
 *   The string we're trying to find the closest value to.
 * $test string
 *   The string that we're testing against.
 * $ls integer
 *   The lowest score we've found so far.
 * return integer
 *   The edit distance between the two strings.
 */
function E113($target, $test, $ls) {
  return fiftyone_degrees_edit_distance($target, $test, $ls);
}

/**
 * Returns the details of the devices that are closest to the useragent string provided.
 *
 * $useragent string
 *   The useragent we're trying to find.
 * return array
 *   An array of device details for the closest devices.
 */
function _H113($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'iOS/5.1 (9B176) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'iOS/5.1 (9B179) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'iOS/5.0.1 (9A405) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'iOS/5.1.1 (9B206) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'iOS/6.0 (10A403) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'iOS/6.0.1 (10A523) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'iOS/6.0 (10A405) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'iOS/6.0.1 (10A525) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'iOS/6.0.2 (10A551) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'iOS/6.1 (10B143) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'iOS/6.1 (10B142) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'iOS/6.1 (10B141) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'iOS/6.1 (10B144) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'iOS/6.1.2 (10B146) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'iOS/6.1.3 (10B329) dataaccessd/1.0';
  $ns = E113($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  return $dl;
}
