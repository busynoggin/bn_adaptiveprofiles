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
 * Calculates the matching score between the two strings for this handler.
 *
 * &$target string
 *   The string we're trying to find the closest value to.
 * $test string
 *   The string that we're testing against.
 * $ls integer
 *   The lowest score we've found so far.
 * return integer
 *   The score between the two strings.
 */
function E58($target, $test, $ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 100000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 1, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  return $score;
}

/**
 * Returns the details of the devices that are closest to the
 * useragent string provided.
 *
 * $useragent string
 *   The useragent we're trying to find.
 * return array
 *   An array of device details for the closest devices.
 */
function _H58($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=^Lenovo[-_])[\\w\\d]+#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#.+#', $useragent));
  $ns = E58($segments, array(0 => array(0 => 'ET860'), 1 => array(0 => 'Lenovo_ET860/Lenovo WindowsMobile/6 Release/4.22.2007 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7)')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(34682,6643,13185,841, 'Lenovo_ET860/Lenovo WindowsMobile/6 Release/4.22.2007 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7)');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'ET600'), 1 => array(0 => 'Lenovo_ET600/Lenovo WindowsMobile/6 Release/4.22.2007 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(34682,6643,14193,841, 'Lenovo_ET600/Lenovo WindowsMobile/6 Release/4.22.2007 (compatible; MSIE 6.0; Windows CE; IEMobile 6.12)');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'A60'), 1 => array(0 => 'Lenovo-A60/S100 Linux/2.6.35.7 Android/2.3.3 Release/04.19.2011 Browser/AppleWebKit533.1 Profile/ Configuration/')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(349527,98592,109236,841, 'Lenovo-A60/S100 Linux/2.6.35.7 Android/2.3.3 Release/04.19.2011 Browser/AppleWebKit533.1 Profile/ Configuration/');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => NULL, 1 => array(0 => 'LenovoS899t_TD/1.0 Android/4.0 Release/02.01.2012 Browser/WAP2.0 appleWebkit/534.30')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(143914,98592,558836,841, 'LenovoS899t_TD/1.0 Android/4.0 Release/02.01.2012 Browser/WAP2.0 appleWebkit/534.30');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'A750'), 1 => array(0 => 'Lenovo-A750/S102 Linux/2.6.35.7 Android/2.3 Release/12.12.2011 Browser/AppleWebKit533.1 Profile/ Configuration/')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(652689,98592,109236,841, 'Lenovo-A750/S102 Linux/2.6.35.7 Android/2.3 Release/12.12.2011 Browser/AppleWebKit533.1 Profile/ Configuration/');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => NULL, 1 => array(0 => 'Lenovo A750/S102 Linux/2.6.35.7 Android/2.3 Release/12.12.2011 Browser/AppleWebKit533.1 Profile/ Configuration/')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(652689,98592,109236,841, 'Lenovo A750/S102 Linux/2.6.35.7 Android/2.3 Release/12.12.2011 Browser/AppleWebKit533.1 Profile/ Configuration/');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => NULL, 1 => array(0 => 'Lenovo P700iLenovo-P700i/S101 Linux/3.0.13 Android/4.0 Release/05.28.2012 Browser/AppleWebKit533.1 Profile/ Configuration/')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(447710,98592,558836,841, 'Lenovo P700iLenovo-P700i/S101 Linux/3.0.13 Android/4.0 Release/05.28.2012 Browser/AppleWebKit533.1 Profile/ Configuration/');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => NULL, 1 => array(0 => 'Lenovo A789/S210 Linux/3.0.13 Android/4.0 Release/05.11.2012 Browser/AppleWebKit533.1 Profile/ Configuration/')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(701867,98592,558836,841, 'Lenovo A789/S210 Linux/3.0.13 Android/4.0 Release/05.11.2012 Browser/AppleWebKit533.1 Profile/ Configuration/');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'P618'), 1 => array(0 => 'Lenovo-P618/2008.01.15 P618_S022_080115/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,56517,56596,841, 'Lenovo-P618/2008.01.15 P618_S022_080115/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'i328TD'), 1 => array(0 => 'Lenovo-i328TD/S100 LMP/LML Release/2010.2.28 Profile/MIDP2.1 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,56517,56596,841, 'Lenovo-i328TD/S100 LMP/LML Release/2010.2.28 Profile/MIDP2.1 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'i817'), 1 => array(0 => 'Lenovo-i817/CMCC_S114 LMP/XM Release/2007.07.31 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,56517,56596,841, 'Lenovo-i817/CMCC_S114 LMP/XM Release/2007.07.31 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'A689'), 1 => array(0 => 'Lenovo_A689/(2008.12.15)S012/WAP2.0Profile/MIDP-2.0 Configuration/CLDC-1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,56517,56596,841, 'Lenovo_A689/(2008.12.15)S012/WAP2.0Profile/MIDP-2.0 Configuration/CLDC-1.0');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'S520'), 1 => array(0 => 'Lenovo-S520/S100 LMP/LML Release/2010.01.25 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,56517,56596,841, 'Lenovo-S520/S100 LMP/LML Release/2010.01.25 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'i350'), 1 => array(0 => 'Lenovo-i350/S111 LMP/LML Release/2010.10.12 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,56517,56596,841, 'Lenovo-i350/S111 LMP/LML Release/2010.10.12 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'TD16'), 1 => array(0 => 'Lenovo-TD16/S100 LMP/LML Release/2010.7.30 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,56517,56596,841, 'Lenovo-TD16/S100 LMP/LML Release/2010.7.30 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'A65'), 1 => array(0 => 'Lenovo-A65/S204 Linux/2.6.35.7 Android/2.3 Release/12.07.2011 Browser/AppleWebKit533.1 Profile/ Configuration/')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(646063,98592,109236,841, 'Lenovo-A65/S204 Linux/2.6.35.7 Android/2.3 Release/12.07.2011 Browser/AppleWebKit533.1 Profile/ Configuration/');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'P50'), 1 => array(0 => 'Lenovo-P50/S041 LMP/LML Release/2009.12.10 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(474564,56517,56596,841, 'Lenovo-P50/S041 LMP/LML Release/2009.12.10 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'P50'), 1 => array(0 => 'Lenovo-P50/S045 LMP/LML Release/2010.03.08 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(474564,56517,56596,841, 'Lenovo-P50/S045 LMP/LML Release/2010.03.08 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'P50'), 1 => array(0 => 'Lenovo-P50-VN/S010 LMP/LML Release/2010.03.03 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(474564,56517,56596,841, 'Lenovo-P50-VN/S010 LMP/LML Release/2010.03.03 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'P50'), 1 => array(0 => 'Lenovo-P50-VN/S014 LMP/LML Release/2010.05.06 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(474564,56517,56596,841, 'Lenovo-P50-VN/S014 LMP/LML Release/2010.05.06 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => NULL, 1 => array(0 => 'Lenovo A780/1.0 Linux/2.6.35.7 Android/2.3.5 Browser/AppleWebKit533.1 Configuration')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(339508,98592,109236,841, 'Lenovo A780/1.0 Linux/2.6.35.7 Android/2.3.5 Browser/AppleWebKit533.1 Configuration');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'i300_VN'), 1 => array(0 => 'Lenovo-i300_VN/S102 LMP/LML Release/2009.08.13 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(179388,56517,56596,841, 'Lenovo-i300_VN/S102 LMP/LML Release/2009.08.13 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'i300_VN'), 1 => array(0 => 'Lenovo-i300_VN/S101 LMP/LML Release/2009.08.03 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(179388,56517,56596,841, 'Lenovo-i300_VN/S101 LMP/LML Release/2009.08.03 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'i300_VN'), 1 => array(0 => 'Lenovo-i300_VN/S102 Profile/MIDP-2.0 Configuration/CLDC-1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(179388,56517,56596,841, 'Lenovo-i300_VN/S102 Profile/MIDP-2.0 Configuration/CLDC-1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'i300'), 1 => array(0 => 'Lenovo-i300/S003 LMP/LML Release/2009.03.19 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(179388,56517,56596,841, 'Lenovo-i300/S003 LMP/LML Release/2009.03.19 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'A800'), 1 => array(0 => 'Lenovo-A800/S100 Linux/3.0.13 Android/4.0 Release/07.19.2012 Browser/AppleWebKit533.1 Profile/ Configuration/ Safari/533.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(794249,98592,558836,841, 'Lenovo-A800/S100 Linux/3.0.13 Android/4.0 Release/07.19.2012 Browser/AppleWebKit533.1 Profile/ Configuration/ Safari/533.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'P629'), 1 => array(0 => 'Lenovo-P629/S118 LMP/LML Release/2010.04.22 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(526364,56517,56596,841, 'Lenovo-P629/S118 LMP/LML Release/2010.04.22 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'E268'), 1 => array(0 => 'Lenovo-E268/VN_S105 LMP/LML Release/2010.10.25 Browser/Obigo_Q03c')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(329971,56517,56596,841, 'Lenovo-E268/VN_S105 LMP/LML Release/2010.10.25 Browser/Obigo_Q03c');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'E268'), 1 => array(0 => 'Lenovo-E268/CMCC_S100 LMP/LML Release/2009.10.12 Browser/Obigo_Q03c')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(329971,56517,56596,841, 'Lenovo-E268/CMCC_S100 LMP/LML Release/2009.10.12 Browser/Obigo_Q03c');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'TD39t_TD'), 1 => array(0 => 'Lenovo-TD39t_TD/S100 LMP/LML Release/2011.04.15 Browser/Opera Profile/MIDP2.0 Configuration/CLDC1.1 MBBMS/2.0 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; zh-CN) Presto/2.5.28 Version/10.10')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,56517,158296,841, 'Lenovo-TD39t_TD/S100 LMP/LML Release/2011.04.15 Browser/Opera Profile/MIDP2.0 Configuration/CLDC1.1 MBBMS/2.0 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; zh-CN) Presto/2.5.28 Version/10.10');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'i325wg'), 1 => array(0 => 'Lenovo-i325wg/S119 LMP/LML Release/2010.07.13 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(189704,56517,56596,841, 'Lenovo-i325wg/S119 LMP/LML Release/2010.07.13 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'i325wg'), 1 => array(0 => 'Lenovo-i325wg/S123 LMP/LML Release/2010.11.24 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(189704,56517,56596,841, 'Lenovo-i325wg/S123 LMP/LML Release/2010.11.24 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'i325wg'), 1 => array(0 => 'Lenovo-i325wg/S123 LMP/LML Release/2010.12.07 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(189704,56517,56596,841, 'Lenovo-i325wg/S123 LMP/LML Release/2010.12.07 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'i325wg'), 1 => array(0 => 'Lenovo-i325wg/S120 LMP/LML Release/2010.08.16 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(189704,56517,56596,841, 'Lenovo-i325wg/S120 LMP/LML Release/2010.08.16 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'i325wg'), 1 => array(0 => 'Lenovo-i325wg/S118 LMP/LML Release/2010.07.12 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(189704,56517,56596,841, 'Lenovo-i325wg/S118 LMP/LML Release/2010.07.12 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'S700'), 1 => array(0 => 'Lenovo-S700/S300 LMP/LML Release/2009.06.11 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(197969,56517,56596,841, 'Lenovo-S700/S300 LMP/LML Release/2009.06.11 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'S700'), 1 => array(0 => 'Lenovo-S700/CMCC_S101 LMP/LML Release/2008.12.24 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(197969,56517,56596,841, 'Lenovo-S700/CMCC_S101 LMP/LML Release/2008.12.24 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'TD30t'), 1 => array(0 => 'Lenovo-TD30t/S100 LMP/LML Release/2009.10.15 Profile/MIDP2.1 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(374887,56517,56596,841, 'Lenovo-TD30t/S100 LMP/LML Release/2009.10.15 Profile/MIDP2.1 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'P580'), 1 => array(0 => 'Lenovo-P580/CMCC_S017 BMP/F2 Release/2008.11.18 Browser/TelecaQ03C Profile/MIDP-2.0 Configuration/CLDC-1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(389465,56517,56596,841, 'Lenovo-P580/CMCC_S017 BMP/F2 Release/2008.11.18 Browser/TelecaQ03C Profile/MIDP-2.0 Configuration/CLDC-1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => NULL, 1 => array(0 => 'Lenovo A60')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(349527,56517,56596,841, 'Lenovo A60');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'TD36t'), 1 => array(0 => 'Lenovo-TD36t/S100 LMP/LML Release/2010.08.25 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(238532,56517,56596,841, 'Lenovo-TD36t/S100 LMP/LML Release/2010.08.25 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'X1m'), 1 => array(0 => 'Lenovo-X1m/S102 LMP/LML Release/2008.11.21 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(368010,56517,56596,841, 'Lenovo-X1m/S102 LMP/LML Release/2008.11.21 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'P650WG'), 1 => array(0 => 'Lenovo-P650WG/S100 LMP/LML Release/2010.02.22 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(375895,56517,56596,841, 'Lenovo-P650WG/S100 LMP/LML Release/2010.02.22 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'P80'), 1 => array(0 => 'Lenovo-P80/CMCC_S101 LMP/XM Release/2008.08.26 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(390473,56517,56596,841, 'Lenovo-P80/CMCC_S101 LMP/XM Release/2008.08.26 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'i909'), 1 => array(0 => 'Lenovo-i909/S155 Release/2008.08.20 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(350536,56517,56596,841, 'Lenovo-i909/S155 Release/2008.08.20 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'i909'), 1 => array(0 => 'Lenovo-i909/S141 Release/2007.11.28 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(350536,56517,56596,841, 'Lenovo-i909/S141 Release/2007.11.28 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'E218'), 1 => array(0 => 'Lenovo-E218/CMCC_S101 LMP/LML Release/2009.05.20')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(227436,56517,56596,841, 'Lenovo-E218/CMCC_S101 LMP/LML Release/2009.05.20');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'E228'), 1 => array(0 => 'Lenovo-E228/CMCC BMP/F2 Release/2008.09.10 Browser/TelecaQ03C')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(294090,56517,56596,841, 'Lenovo-E228/CMCC BMP/F2 Release/2008.09.10 Browser/TelecaQ03C');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'P82'), 1 => array(0 => 'Lenovo-P82/S103 LMP/LML Release/2009.05.19 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(305610,56517,56596,841, 'Lenovo-P82/S103 LMP/LML Release/2009.05.19 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'P612'), 1 => array(0 => 'Lenovo-P612/2009.08.12 P612_S112_090812/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(396377,56517,56596,841, 'Lenovo-P612/2009.08.12 P612_S112_090812/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => NULL, 1 => array(0 => 'LenovoI389_CMCC/S100 LMP/SH Release/2008.07.30 Profile/MIDP-2.0 Configuration/CLDC-1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(200200,56517,56596,841, 'LenovoI389_CMCC/S100 LMP/SH Release/2008.07.30 Profile/MIDP-2.0 Configuration/CLDC-1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => NULL, 1 => array(0 => 'LenovoI389_CMCC/S100 LMP/SH Release/2009.03.04 Profile/MIDP-2.0 Configuration/CLDC-1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(200200,56517,56596,841, 'LenovoI389_CMCC/S100 LMP/SH Release/2009.03.04 Profile/MIDP-2.0 Configuration/CLDC-1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'P609'), 1 => array(0 => 'Lenovo-P609/2008.12.16 R002_QCY_LANG_C_V0.1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(355543,56517,56596,841, 'Lenovo-P609/2008.12.16 R002_QCY_LANG_C_V0.1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1');
    $ls = $ns;
  }
  $ns = E58($segments, array(0 => array(0 => 'S710'), 1 => array(0 => 'Lenovo-S710/S100 LMP/LML Release/2010.05.22 Profile/MIDP2.0 Configuration/CLDC1.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(364845,56517,56596,841, 'Lenovo-S710/S100 LMP/LML Release/2010.05.22 Profile/MIDP2.0 Configuration/CLDC1.1');
    $ls = $ns;
  }
  return $dl;
}
