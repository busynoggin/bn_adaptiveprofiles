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
function E31($target, $test, $ls) {
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
function _H31($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'AppleCoreMedia/1.0.0.11C74 (Macintosh; U; Intel Mac OS X 10_7_2; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.11A511a (Macintosh; U; Intel Mac OS X 10_7; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.11D50 (Macintosh; U; Intel Mac OS X 10_7_3; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.11D50b (Macintosh; U; Intel Mac OS X 10_7_3; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.11A511 (Macintosh; U; Intel Mac OS X 10_7; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.11D50d (Macintosh; U; Intel Mac OS X 10_7_3; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.11E53 (Macintosh; U; Intel Mac OS X 10_7_4; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.11C2002 (Macintosh; U; Intel Mac OS X 10_7_2; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.11D2001 (Macintosh; U; Intel Mac OS X 10_7_3; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.11E2620 (Macintosh; U; Intel Mac OS X 10_7_4; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.11E2705 (Macintosh; U; Intel Mac OS X 10_7_4; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.11E2617 (Macintosh; U; Intel Mac OS X 10_7_4; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.11G63 (Macintosh; U; Intel Mac OS X 10_7_5; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.11G56 (Macintosh; U; Intel Mac OS X 10_7_5; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.11G63b (Macintosh; U; Intel Mac OS X 10_7_5; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,369522,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.12A269 (Macintosh; U; Intel Mac OS X 10_8; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,572140,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.12B19 (Macintosh; U; Intel Mac OS X 10_8_1; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,572140,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.12C54 (Macintosh; U; Intel Mac OS X 10_8_2; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,572140,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.12C60 (Macintosh; U; Intel Mac OS X 10_8_2; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,572140,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.12C3006 (Macintosh; U; Intel Mac OS X 10_8_2; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,572140,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.12C3012 (Macintosh; U; Intel Mac OS X 10_8_2; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,572140,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.12C2034 (Macintosh; U; Intel Mac OS X 10_8_2; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,572140,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.12C60 (Macintosh; U; Intel Mac OS X 10_8_2; de_de)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,572140,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.12C3103 (Macintosh; U; Intel Mac OS X 10_8_2; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,572140,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.12D78 (Macintosh; U; Intel Mac OS X 10_8_3; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,572140,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.9B830 (Apple?TV; U; CPU OS 5_1_1 like Mac OS X; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,139753,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.10A406e (Apple TV; U; CPU OS 6_0 like Mac OS X; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,139753,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0.10A831 (Apple TV; U; CPU OS 6_0_1 like Mac OS X; en_us)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(60425,139753,104419,841, $ua);
  }
  $ua = 'AppleCoreMedia/1.0.0. (AAS-2.2.2; U; Windows NT 6.1)';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,114029,104419,841, $ua);
  }
  $ua = 'Apple+iPhone+OS+v3.1.2+CoreMedia+v1.0.0.7D11';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(105356,88488,104419,841, $ua);
  }
  $ua = 'Apple iPhone v1.1.4 CoreMedia v1.0.0.4A102';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(105356,88488,104419,841, $ua);
  }
  $ua = 'Apple iPhone v1.1.5 CoreMedia v1.0.0.4B1';
  $ns = E31($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(105356,88488,104419,841, $ua);
  }
  return $dl;
}
