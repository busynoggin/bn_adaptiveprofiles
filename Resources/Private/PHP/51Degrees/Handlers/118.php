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
function E118($target, $test, $ls) {
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
function _H118($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'FeedDemon/3.1 (http://www.feeddemon.com/; Microsoft Windows)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'FeedDemon/4.0 (http://www.feeddemon.com/; Microsoft Windows)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'FeedDemon/2.7 (http://www.newsgator.com/; Microsoft Windows)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'FeedDemon/3.0 (http://www.feeddemon.com/; Microsoft Windows)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'FeedDemon/4.1 (http://www.feeddemon.com/; Microsoft Windows)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'FeedDemon/3.1 (http://www.feeddemon.com/; Microsoft Windows XP)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,44793,16149,841, $ua);
  }
  $ua = 'FeedDemon/2.7 (http://www.newsgator.com/; Microsoft Windows XP)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,44793,16149,841, $ua);
  }
  $ua = 'FeedDemon/4.0 (http://www.feeddemon.com/; Microsoft Windows XP)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,44793,16149,841, $ua);
  }
  $ua = 'FeedDemon/3.0 (http://www.feeddemon.com/; Microsoft Windows XP)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,44793,16149,841, $ua);
  }
  $ua = 'FeedDemon/4.1 (http://www.feeddemon.com/; Microsoft Windows XP)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,44793,16149,841, $ua);
  }
  return $dl;
}
