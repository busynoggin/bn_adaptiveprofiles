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
function E69($target, $test, $ls) {
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
function _H69($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'portalmmm/2.0 S500i(c20;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17301,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 LG342i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17483,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 LG342i(c10;TJ)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17483,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 LG342i(c30;TD)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17483,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S400i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17298,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S400i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17298,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S400i(c100,TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17298,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S400i(c10,TJ)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17298,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S400i(c10;TC)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17298,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 K550im(c100;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15428,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 K550im(c20;TD)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15428,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 K550im(c100;TJ)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15428,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 K550im(c100;TC)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15428,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 Z650i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17230,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 Z650i(c20;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17230,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 Z650i(c100;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17230,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 Z650i(c300;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17230,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 Z320i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17284,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 Z320i(c100;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17284,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 Z320i(c30;TD)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17284,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 Z320i(c10;TJ)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17284,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S410i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17325,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S410i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17325,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S410i(c10;TC)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17325,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S410i(c10;TJ)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17325,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S410i(c30;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17325,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S401i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17244,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 SG345i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16813,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S342i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17328,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S342i(c30;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17328,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S342i(c100;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17328,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S501i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17268,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S501i(c20;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17268,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 SG342i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16784,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 SG342i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16784,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 my401Ci';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16548,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 my401Ci(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16548,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 SG321i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16751,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 SG321i (c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16751,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 SG321i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16751,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S720i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17171,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S720i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17171,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S730i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17169,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 S730i(c20;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17169,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 SG341i (c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16767,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 SG346i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16814,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 SG346i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16814,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 SG321i (c10;TB) Profile/DoCoMoProfile-1.5oe Configuration/CLDC-1.0 UP.Browser/7.0.0.1.102 (GUI)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16751,17658,4222,18092, $ua);
  }
  $ua = 'portalmmm/2.0 SG343i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16785,17017,17470,18092, $ua);
  }
  $ua = 'portalmmm/2.0 SG344i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16793,17017,17470,18092, $ua);
  }
  return $dl;
}