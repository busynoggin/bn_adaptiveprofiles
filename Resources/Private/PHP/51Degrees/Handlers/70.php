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
function E70($target, $test, $ls) {
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
function _H70($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'Qtek8010 (Mozilla/4.0 compatible; MSIE 4.01; Windows CE; Smartphone; 176x220)';
  $ns = E70($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16070,5448,4578,18092, $ua);
  }
  $ua = 'Qtek9090; Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320)';
  $ns = E70($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16070,5448,4578,18092, $ua);
  }
  $ua = 'Qtek_9100/Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; PPC; 240x320)';
  $ns = E70($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16070,5448,4578,18092, $ua);
  }
  $ua = 'Qtek8020 (Mozilla\\4.0 compatible; MSIE 4.01; Windows CE; Smartphone; 176x220)';
  $ns = E70($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16070,5448,4578,18092, $ua);
  }
  $ua = 'Qtek S100';
  $ns = E70($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16070,17017,17470,18092, $ua);
  }
  $ua = 'Qtek8010';
  $ns = E70($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16070,17017,17470,18092, $ua);
  }
  $ua = 'Qtek8080';
  $ns = E70($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16070,17017,17470,18092, $ua);
  }
  $ua = 'Qtek8080/DBK (;; 4.20.13291.0; Windows Mobile 2003; Smartphone; 176x220)';
  $ns = E70($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16070,17017,17470,18092, $ua);
  }
  $ua = 'Qtek9090';
  $ns = E70($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16070,17017,17470,18092, $ua);
  }
  $ua = 'Qtek S200/2.9.7.122 Mozilla/4.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (Compatible; MSIE 4.01;Windows CE; PPC; 240X320) UP.Link/6.2.3.15.0 (compatible; MSIE 4.01; Windows     CE; PPC; 240x320)';
  $ns = E70($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16175,5448,4578,18092, $ua);
  }
  $ua = 'Qtek S200';
  $ns = E70($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16175,17017,17470,18092, $ua);
  }
  $ua = 'Qtek8020 (Mozilla\\\\4.0 compatible; MSIE 4.01; Windows CE; Smartphone; 176x220)Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 6.8) PPC; 240x320;SPV M3100; OpVer 14.211.1.613';
  $ns = E70($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16070,7238,15792,18092, $ua);
  }
  return $dl;
}