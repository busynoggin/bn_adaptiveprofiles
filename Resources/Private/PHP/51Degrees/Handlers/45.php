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
function E45($target, $test, $ls) {
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
function _H45($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'LCT_L300B_01/L3PM510/WAP2.0 Profile';
  $ns = E45($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15341,17017,17470,18092, $ua);
  }
  $ua = 'LCT_X880B_01/1.0 Nucleus/1.13.21 MTK6225/07A Release/5.1.2008 Browser/TelecaQ03C1 Profile/MIDP-2.0';
  $ns = E45($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,3807,18092, $ua);
  }
  $ua = 'LCT_X880B_01/1.0 Nucleus/1.13.21 MTK6225/07A Release/5.1.2008 Browser/TelecaQ03C1 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E45($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,3807,18092, $ua);
  }
  $ua = 'LCT-W660/1.0SH NetFront/3.4 SMM-MMS/1.2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0';
  $ns = E45($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14542,17017,3976,18092, $ua);
  }
  $ua = 'LCTW660 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E45($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14542,17017,3976,18092, $ua);
  }
  $ua = 'LCT-W660/1.0SH NetFront/3.4 SMM-MMS/1.2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E45($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14542,17017,3976,18092, $ua);
  }
  return $dl;
}