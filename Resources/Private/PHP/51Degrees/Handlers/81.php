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
function E81($target, $test, $ls) {
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
function _H81($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'Philips X116';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(212979,139063,16149,841, $ua);
  }
  $ua = 'PHILIPS9A9W ObigoInternetBrowser/QO3C Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(268886,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS9@9H ObigoInternetBrowser/2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(268886,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS9@9V ObigoInternetBrowser/2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(268886,226924,16149,841, $ua);
  }
  $ua = 'Philips292 / Obigo Browser 2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(248487,248559,16149,841, $ua);
  }
  $ua = 'PHILIPS 355 / Obigo Internet Browser 2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439722,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS355j ObigoInternetBrowser/2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439722,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS 355 / Obigo Internet Browser 2.2';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439722,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS-Az@lis288/2.1 UP/4.1.19m UP.Browser/4.1.19m-XXXX';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439440,226924,425845,841, $ua);
  }
  $ua = 'PHILIPS-Az@lis288 UP/4.1.19l UP.Browser/4.1.19l-XXXX';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439440,226924,425845,841, $ua);
  }
  $ua = 'PHILIPS 162';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439580,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS 163 / Obigo Internet Browser 2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439580,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS 330';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439651,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS 330 / Obigo Internet Browser 2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439651,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS362-1';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439866,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS362-2';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439866,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS 639';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440226,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS 639/Obigo Internet Browser 2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440226,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS650';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440370,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS650 ObigoInternetBrowser/2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440370,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS755';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440514,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS755 ObigoInternetBrowser/2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440514,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS760';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440586,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS760 ObigoInternetBrowser/2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440586,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS855';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(441018,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS855 ObigoInternetBrowser/2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(441018,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS 768 UP.Browser/6.2.3.9.d.1 (GUI) MMP/2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(226931,226924,18014,841, $ua);
  }
  $ua = 'PHILIPS-Az@lis288 UP/4.1.19m';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439440,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS-Fisio 121/2.1 UP/4.1.19m UP.Browser/4.1.19m-XXXX';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439510,226924,425845,841, $ua);
  }
  $ua = 'PHILIPS-Fisio 121';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439510,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS-FISIO 330/3.14 UP.Browser/5.0.3.5 (GUI)';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439651,226924,49054,841, $ua);
  }
  $ua = 'PHILIPS 350 / Obigo Internet Browser 2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439794,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS 535 / Obigo Internet Browser 2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(439938,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS 530';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440010,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS 636 / Obigo Internet Browser 2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440082,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS 630 / Obigo Internet Browser 2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440154,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS568/1.0 UP.Browser/6.1.0.7.8 (GUI) MMP/1.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440298,226924,194008,841, $ua);
  }
  $ua = 'PHILIPS655 ObigoInternetBrowser/2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440442,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS-FISIO 820/3';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440658,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS661';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440730,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS-FISIO 820/3.14 UP.Browser/5.0.1.11';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440658,226924,49054,841, $ua);
  }
  $ua = 'PHILIPS-FISIO 822/3.14 UP.Browser/5.0.3.5 (GUI)';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440802,226924,49054,841, $ua);
  }
  $ua = 'PHILIPS-FISIO 825/3.14 UP.Browser/5.0.2.3 (GUI)';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440874,226924,49054,841, $ua);
  }
  $ua = 'PHILIPS-FISIO 826/3.14 UP.Browser/5.0.3.5 (GUI)';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(440946,226924,49054,841, $ua);
  }
  $ua = 'PHILIPS 855 / Obigo Internet Browser 2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(441090,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS859 ObigoInternetBrowser/2.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(441162,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS 960';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(441234,226924,16149,841, $ua);
  }
  $ua = 'PHILIPS289 ObigoInternetBrowser/Q03C EGE/1.0';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(460410,226924,117741,841, $ua);
  }
  $ua = 'PHILIPS766 IACWAPBrowser1.2';
  $ns = E81($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(464163,226924,16149,841, $ua);
  }
  return $dl;
}
