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
function E108($target, $test, $ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 100000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[2], $test[2], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[3], $test[3], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[4], $test[4], $ls, 1000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[5], $test[5], $ls, 1000, $score);
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
function _H108($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=Mozilla/)\\d\\.\\d#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=Mozilla/\\d\\.\\d \\()[^;\\)]+#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#Windows NT \\d\\.\\d(?=;)|Mac OS X [^\\s]+(?=;)|Ubuntu|X11|Linux i686#', $useragent),
    3 => fiftyone_degrees_preg_match_all('#Win\\d(\\d|x)#', $useragent),
    4 => fiftyone_degrees_preg_match_all('#Fedora#', $useragent),
    5 => fiftyone_degrees_preg_match_all('#(?<=StumbleUpon/)\\d\\.\\d#', $useragent));
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => NULL, 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(60425,139753,291419,841, 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X; pl-PL; rv:1.0.1) Gecko/X Chimera/0.6');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X Mach-O'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(60425,139753,291419,841, 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.5) Gecko/X Firebird/0.7');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,21108,16149,841, 'Mozilla/5.0 (X11; U; IRIX64 IP35; en-US; rv:1.4.3) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,139063,16149,841, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.2) Gecko Shiretoko/3.5.2');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => NULL, 2 => array(0 => 'X11', 1 => 'Linux i686'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,139063,16149,841, 'Mozilla/5.0 Galeon/1.2.0 (X11; Linux i686; U;) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,139063,16149,841, 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:7.0.1) Gecko/ /7.0.1');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => NULL, 2 => array(0 => 'X11'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,139063,16149,841, 'Mozilla/5.0+(X11;+U;+Linux+i686;+en-US;+rv:1.7.3)+Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10.7'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(60425,369522,291419,841, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.7; en-US; rv:1.9.2.10) Gecko Expeditor 6.2.2.X-1115 Gecko/X-1115');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10.6'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(60425,191337,291419,841, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.10) Gecko Expeditor 6.2.2.X-1115 Gecko/X-1115');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => NULL, 1 => NULL, 2 => array(0 => 'Windows NT 5.1'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,44793,16149,841, 'K-Meleon/0.6 (Windows; U; Windows NT 5.1; en-US; rv:0.9.5) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0', 1 => '4.8'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.1', 1 => 'Windows NT 5.1'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,44793,16149,841, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/X Mozilla/4.8 [en] (Windows NT 5.1; U)');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.2'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,44793,16149,841, 'Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.7.2) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.1'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,44793,16149,841, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.0.1) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows NT 5.1'), 2 => array(0 => 'Windows NT 5.1'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,44793,16149,841, 'Mozilla/5.0 (Windows NT 5.1; rv:12.0) Gecko/ /12.0');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10.8'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(60425,572140,291419,841, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.8; en-US; rv:1.9.2.10) Gecko Expeditor 6.2.2.X-1115 Gecko/X-1115');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 6.1'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,114029,16149,841, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows NT 6.1'), 2 => array(0 => 'Windows NT 6.1'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,114029,16149,841, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:12.0) Gecko/ /12.0');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL, 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,114029,16149,841, 'Mozilla/5.0 (Windows; U; Windows NT 6.1) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 6.1', 1 => 'Windows NT 6.1'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,114029,416808,841, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.13) Gecko/X Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.7.62 Version/11.01');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.0'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,65677,16149,841, 'Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.5b) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL, 3 => array(0 => 'Win9x'), 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,287763,16149,841, 'Mozilla/5.0 (Windows; U; Win9x; en; Stable) Gecko/X Beonex/0.8.1-stable');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL, 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,287763,16149,841, 'Mozilla/5.0 (Windows; U; BeOS; en-US; rv:1.9.0.7) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10.5'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(60425,61354,291419,841, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.2.10) Gecko Expeditor 6.2.2.X-1115 Gecko/X-1115');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => NULL, 2 => NULL, 3 => array(0 => 'Win98'), 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,240627,16149,841, 'Mozilla/5.0(Windows;N;Win98;m18)Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL, 3 => array(0 => 'Win98'), 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,240627,16149,841, 'Mozilla/5.0 (Windows; U; Win98; fr; rv:1.7.3) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '4.0'), 1 => array(0 => 'Windows'), 2 => NULL, 3 => array(0 => 'Win98'), 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,240627,16149,841, 'Mozilla/4.0 (Windows; U; Win98; en-US; rv:1.7.2) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL, 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,240627,16149,841, 'Mozilla/5.0 (Windows; U; Win 9x 4.90; en-US; rv:1.7.5) Gecko/X K-Meleon/0.9');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL, 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(34682,16143,16149,841, 'Mozilla/5.0 (Windows; U; Windows CE 5.2; rv:1.8.1.4pre) Gecko/20070327 Minimo/0.020');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL, 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(34682,16143,16149,841, 'Mozilla/5.0 (Windows; U; Windows CE 4.21; rv:1.8b4) Gecko/X Minimo/0.007');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,506044,16149,841, 'Mozilla/5.0 (X11; U; SunOS sun4u; de-DE; rv:1.7) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows NT 6.0'), 2 => array(0 => 'Windows NT 6.0'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,64735,16149,841, 'Mozilla/5.0 (Windows NT 6.0; rv:12.0) Gecko/ /12.0');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 6.0'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,64735,16149,841, 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.11) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,139063,692050,841, 'Mozilla/5.0 (X11; Linux x86_64) KHTML/4.9.3 (like Gecko) Konqueror/4.9');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,139063,692050,841, 'Mozilla/5.0 (X11; Linux i686) KHTML/4.9.3 (like Gecko) Konqueror/4.9');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL, 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,353937,16149,841, 'Mozilla/5.0 (Windows; U; WinNT4.0; de-AT; rv:1.1) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => NULL, 2 => array(0 => 'X11'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,509648,16149,841, 'Mozilla/5.0 http://fairshare.cc (X11; U; FreeBSD i386; en-US; rv:1.2a) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,509648,16149,841, 'Mozilla/5.0 (X11; U; FreeBSD i386; ja-JP; rv:1.7.2) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => NULL, 1 => NULL, 2 => array(0 => 'X11'), 3 => NULL, 4 => array(0 => 'Fedora'), 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,502325,16149,841, 'Seamonkey-1.1.13-1(X11; U; GNU Fedora fc 10) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11'), 3 => NULL, 4 => array(0 => 'Fedora'), 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,502325,16149,841, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.13) Gecko Fedora/1.9.2.13-3.el5');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686'), 3 => NULL, 4 => array(0 => 'Fedora'), 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,502325,16149,841, 'Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.9.2.18) Gecko Fedora/1.9.2.18-1.fc14');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Ubuntu', 2 => 'Linux i686'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,558756,16149,841, 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:15.0) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 6.2'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,303357,16149,841, 'Mozilla/5.0 (Windows; U; Windows NT 6.2; en-US; rv:1.9.2.3) Gecko/X Namoroka/3.6.3');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows NT 6.2'), 2 => array(0 => 'Windows NT 6.2'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,303357,16149,841, 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:12.0) Gecko/ /12.0');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,504144,16149,841, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.7) Gecko/X Ubuntu/9.04 (jaunty) Shiretoko/3.5.7');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Ubuntu'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,504144,16149,841, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.1) Gecko/X Ubuntu/9.04 (jaunty) Shiretoko/3.5.1');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686'), 3 => NULL, 4 => array(0 => 'Fedora'), 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,502325,692050,841, 'Mozilla/5.0 (X11; Linux i686) KHTML/4.9.2 (like Gecko) Konqueror/4.9 Fedora/4.9.2-5.fc17');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11'), 3 => NULL, 4 => array(0 => 'Fedora'), 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,502325,692050,841, 'Mozilla/5.0 (X11; Linux x86_64) KHTML/4.9.5 (like Gecko) Konqueror/4.9 Fedora/4.9.5-2.fc17');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,539206,16149,841, 'Mozilla/5.0 (X11; U; OpenBSD i386; en-US; rv:1.7.0.13) Gecko/X');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(105356,139063,16149,841, 'Mozilla/5.0 (X11; iPhone; Mobile; Linux i686; chrome://navigator/locale/navigator.properties; rv:1.8.0.6) Gecko/X Skylight');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.1'), 3 => NULL, 4 => NULL, 5 => array(0 => '1.9')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,44793,185962,841, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/X Waterunicorn/0.10 StumbleUpon/1.998');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.1'), 3 => NULL, 4 => NULL, 5 => array(0 => '1.6')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,44793,185962,841, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.4b) Gecko/X Mozilla Firebird/0.5+ StumbleUpon/1.63');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Ubuntu'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,509641,16149,841, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.18pre) Gecko/X Ubuntu/10.04 (lucid) Namoroka/3.6.18pre');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,509641,16149,841, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.8pre) Gecko/X Ubuntu/10.04 (lucid) Namoroka/3.6.8pre');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Ubuntu'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,502318,16149,841, 'Mozilla/5.0 (X11; U; Linux x86_64; ru; rv:1.9.2.14pre) Gecko/X Ubuntu/10.10 (maverick) Namoroka/3.6.14pre SmartLinksAddon');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,502318,16149,841, 'Mozilla/5.0 (X11; U; Linux i686; ru; rv:1.9.2.15pre) Gecko/X Ubuntu/10.10 (maverick) Namoroka/3.6.15pre');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0', 1 => '4.0'), 1 => array(0 => 'X11', 1 => 'compatible'), 2 => array(0 => 'X11', 1 => 'Ubuntu'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,503201,64742,841, 'Mozilla/5.0 (X11; U; Linux x86_64; de; rv:1.9.0.6) Gecko/X Ubuntu/8.10 (intrepid) Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.03 [de]');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,511525,16149,841, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.2pre) Gecko/X Ubuntu/9.10 (karmic) Namoroka/3.6.2pre');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,513328,16149,841, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.18pre) Gecko/X Ubuntu/8.04 (hardy) Namoroka/3.6.18pre');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,503201,16149,841, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.3pre) Gecko/X Ubuntu/8.10 (intrepid) Namoroka/3.6.3pre');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10.5'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(60425,61354,16149,841, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1b3pre) Gecko/X Shiretoko/3.1b3pre');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(533300,139063,16149,841, 'Mozilla/5.0 (X11; Linux i686; U; en-US) Gecko/X Vision-Browser/8.1 381x214 Pantech CDM8999');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(41906,8508,41978,841, 'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 (X11; U; Linux i686; en) Gecko/UCWEB7.1.0.42/69/300');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.1'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47039,8508,41978,841, 'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725/UCWEB7.1.0.42/69/351');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(94771,8508,41978,841, 'Nokia2730c-1/2.0 (10.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 (X11; U; Linux i686; en) Gecko/UCWEB7.1.0.42/69/300');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(533372,139063,16149,841, 'Mozilla/5.0 (X11; Linux i686; U; en-US) Gecko/X Vision-Browser/8.1 301x200 LG VN530');
    $ls = $ns;
  }
  $ns = E108($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu'), 3 => NULL, 4 => NULL, 5 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27547,283431,16149,841, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.3) Gecko/X MEGAUPLOAD 1.0 (Ubuntu-feisty)');
    $ls = $ns;
  }
  return $dl;
}
