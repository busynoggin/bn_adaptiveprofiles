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
function E33($target, $test, $ls) {
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
function _H33($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'AUDIOVOX-PM8910KIT';
  $ns = E33($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(206566,21108,16149,841, $ua);
  }
  $ua = 'AUDIOVOX-SMT5600/Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; 176x220)';
  $ns = E33($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(425773,16143,82449,841, $ua);
  }
  $ua = 'AUDIOVOX-SMT5600/1.2 Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; 176x220)';
  $ns = E33($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(425773,16143,82449,841, $ua);
  }
  $ua = 'AUDIOVOX-PM8920KIT/T120SP0T17 UP.Browser/6.2.2.6.h.1.100 (GUI) MMP/2.0';
  $ns = E33($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(426782,21108,18014,841, $ua);
  }
  $ua = 'AUDIOVOX-PM8920KIT/T120SP0T12 UP.Browser/6.2.2.6.h.1.100 (GUI) MMP/2.0';
  $ns = E33($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(426782,21108,18014,841, $ua);
  }
  $ua = 'AUDIOVOX-9155GPX';
  $ns = E33($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(425701,21108,16149,841, $ua);
  }
  $ua = 'AUDIOVOX-SMT5600';
  $ns = E33($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(425773,21108,16149,841, $ua);
  }
  $ua = 'AUDIOVOX-9155GPX/07.13 UP.Browser/4.1.26c3';
  $ns = E33($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(425701,21108,425845,841, $ua);
  }
  $ua = 'AUDIOVOX-PM8920KIT';
  $ns = E33($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(426782,21108,16149,841, $ua);
  }
  return $dl;
}
