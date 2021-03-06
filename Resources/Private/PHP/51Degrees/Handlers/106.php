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
function E106($target, $test, $ls) {
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
function _H106($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'ZTE-TU960s_TD/1.0 Linux/2.6.35 Android/2.3 Release/9.25.2011 Browser/AppleWebKit533.1';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,98592,109236,841, $ua);
  }
  $ua = 'ZTEU880s_TD/1.0 Linux/2.6.35 Android/2.3 Release/2.10.2012 Browser/AppleWebKit533.1';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,98592,109236,841, $ua);
  }
  $ua = 'ZTEU788_TD/1.0 Linux/2.6.35 Android/2.3 Release/12.25.2011 Browser/AppleWebKit533.1';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,98592,109236,841, $ua);
  }
  $ua = 'ZTEU885_TD/1.0 Linux/2.6.35 Android/2.3 Release/2.25.2012 Browser/AppleWebKit533.1';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,98592,109236,841, $ua);
  }
  $ua = 'ZTE U950_TD/1.0 Linux/3.1.10 Android/4.0 Release/8.1.2012 Browser/AppleWebKit534.30';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,98592,558836,841, $ua);
  }
  $ua = 'ZTE-TU812_TD/1.0 Linux/2.6.32 Android/2.2 Release/07.25.2011 Browser/AppleWebKit533.1';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,98592,920,841, $ua);
  }
  $ua = 'ZTE-TU802_TD/1.0 Linux/2.6.32 Android/2.2 Release/1.1.2011 Browser/AppleWebKit530.17 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,98592,920,841, $ua);
  }
  $ua = 'ZTE-T95 NetFront/3.5 QTV5.1 Profile/MIDP-2.1 Configuration/CLDC-1.1 firmware/T95 T03 Novarra-Vision/8.0';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(350247,118820,16998,841, $ua);
  }
  $ua = 'ZTE-T95 NetFront/3.5 QTV5.1 Profile/MIDP-2.1 Configuration/CLDC-1.1 firmware/T95 T03';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(350247,118820,16998,841, $ua);
  }
  $ua = 'ZTE-E520/1.0 SMIT-Browser/2.0.0';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(179902,179896,179974,841, $ua);
  }
  $ua = 'ZTE-E520/1.0 SMIT-Browser/2.0.0 Novarra-Vision/8.0';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(179902,179896,179974,841, $ua);
  }
  $ua = 'ZTE-TU880_TD/1.0 Linux/2.6.32 Android/2.2 Release/5.25.2011 Browser/AppleWebKit533.1';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(346140,98592,920,841, $ua);
  }
  $ua = 'ZTE-T54 NetFront/3.5 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 firmware/T54 T04';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(381439,118820,16998,841, $ua);
  }
  $ua = 'ZTE-T54 NetFront/3.5 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 firmware/T54 T04 Novarra-Vision/8.0';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(381439,118820,16998,841, $ua);
  }
  $ua = 'ZTE U930_TD/1.0 Linux/2.6.39 Android/4.0 Release/3.5.2012 Browser/AppleWebKit534.30';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(742699,98592,558836,841, $ua);
  }
  $ua = 'ZTE-T930 NetFront/3.5 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 firmware/T930 T06';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(329035,118820,16998,841, $ua);
  }
  $ua = 'ZTE-T870 NetFront/3.5 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 firmware/T870 T06';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(329611,118820,16998,841, $ua);
  }
  $ua = 'ZTE U970_TD/1.0 Linux/2.6.39 Android/4.0 Release/2.21.2012 Browser/AppleWebKit534.30';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(690000,98592,558836,841, $ua);
  }
  $ua = 'ZTEU880E_TD/1.0 Linux/2.6.35 Android/2.3 Release/12.15.2011 Browser/AppleWebKit533.1';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(703969,98592,109236,841, $ua);
  }
  $ua = 'ZTE Bluebelt/v2/1.0.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(328387,6643,13185,841, $ua);
  }
  $ua = 'ZTE Bluebelt/1.0.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(328387,6643,13185,841, $ua);
  }
  $ua = 'ZTE-C78/1.0 SMIT-Browser/2.0.0 Novarra-Vision/8.0';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(225268,179896,179974,841, $ua);
  }
  $ua = 'ZTE-C78/1.0 SMIT-Browser/2.0.0';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(225268,179896,179974,841, $ua);
  }
  $ua = 'ZTE U985_TD/1.0 Linux/3.1.10 Android/4.0 Release/8.1.2012 Browser/AppleWebKit534.30';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(796558,98592,558836,841, $ua);
  }
  $ua = 'ZTE-T165i/1.0 ACS-NF/3.4 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(209238,21108,22353,841, $ua);
  }
  $ua = 'ZTE-T165i/1.0 ACS-NF/3.4 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(209238,21108,22353,841, $ua);
  }
  $ua = 'ZTE silverbelt/1.0.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(328675,6643,5635,841, $ua);
  }
  $ua = 'ZTE Bluebelt II/1.0.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(328387,6643,5635,841, $ua);
  }
  $ua = 'ZTE-C79/1.0 SMIT-Browser/2.0.0';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(233138,179896,179974,841, $ua);
  }
  $ua = 'ZTE-W X60/1.0.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(306331,6643,5635,841, $ua);
  }
  $ua = 'ZTE-W N61/1.0.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(352344,6643,13185,841, $ua);
  }
  $ua = 'ZTE-T165i/1.0 ACS-NF/3.2 QTV5.02 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E106($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(209238,21108,46102,841, $ua);
  }
  return $dl;
}
