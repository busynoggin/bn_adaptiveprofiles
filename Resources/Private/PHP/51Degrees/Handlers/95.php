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
function E95($target, $test, $ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 100000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 100000, $score);
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
  fiftyone_degrees_calculate_segment_score($target[4], $test[4], $ls, 10000, $score);
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
function _H95($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=Thunderbird/)\\d+\\.\\d+#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=Mozilla/)\\d\\.\\d#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#(?<=Mozilla/\\d\\.\\d \\()[^;\\)]+#', $useragent),
    3 => fiftyone_degrees_preg_match_all('#Windows NT \\d\\.\\d(?=;)|Mac OS X [^\\s]+(?=;)|Ubuntu|X11#', $useragent),
    4 => fiftyone_degrees_preg_match_all('#(?<=(Fedora)/)\\d+\\.\\d+#', $useragent));
  $ns = E95($segments, array(0 => array(0 => '0.9'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows'), 3 => array(0 => 'Windows NT 5.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,17470,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/X Thunderbird/0.9');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '2.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows'), 3 => array(0 => 'Windows NT 5.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,18199,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/X Thunderbird/2.0.0.6');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '2.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows'), 3 => array(0 => 'Windows NT 5.2'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,18199,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.8.1.23) Gecko/X Thunderbird/2.0.0.23');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '2.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Macintosh'), 3 => array(0 => 'Mac OS X Mach-O'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,18120,18199,18092, 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.8.1.24) Gecko/X Thunderbird/2.0.0.24');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '2.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Macintosh'), 3 => NULL, 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,18120,18199,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.19) Gecko/X Thunderbird/2.0.0.19');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '11.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 5.1'), 3 => array(0 => 'Windows NT 5.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,18329,18092, 'Mozilla/5.0 (Windows NT 5.1; rv:11.0) Gecko/X Thunderbird/11.0');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '11.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 5.2'), 3 => array(0 => 'Windows NT 5.2'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,18329,18092, 'Mozilla/5.0 (Windows NT 5.2; WOW64; rv:11.0) Gecko/X Thunderbird/11.0.1 Lightning/1.3');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '3.1'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows'), 3 => array(0 => 'Windows NT 6.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,7133,18198,18092, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.28) Gecko/X Lightning/1.0b2 Thunderbird/3.1.20');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '2.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'X11'), 3 => array(0 => 'X11'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,18199,18092, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.16) Gecko/X Thunderbird/2.0.0.16');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '2.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows'), 3 => array(0 => 'Windows NT 6.0'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17285,18199,18092, 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1.17) Gecko/X Thunderbird/2.0.0.17');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '3.1'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows'), 3 => array(0 => 'Windows NT 5.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,18198,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.9.2.28) Gecko/X Thunderbird/3.1.20');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '3.1'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows'), 3 => array(0 => 'Windows NT 6.0'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17285,18198,18092, 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2.28) Gecko/X Thunderbird/3.1.20');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '3.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows'), 3 => array(0 => 'Windows NT 6.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,7133,18197,18092, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.5) Gecko/X Thunderbird/3.0');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '3.1'), 1 => array(0 => '5.0'), 2 => array(0 => 'X11'), 3 => array(0 => 'X11'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,18198,18092, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.28) Gecko/X Thunderbird/3.1.20');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '10.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 6.0'), 3 => array(0 => 'Windows NT 6.0'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17285,18191,18092, 'Mozilla/5.0 (Windows NT 6.0; WOW64; rv:10.0.2) Gecko/X Thunderbird/10.0.2 Lightning/1.2.1');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '9.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 6.0'), 3 => array(0 => 'Windows NT 6.0'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17285,18192,18092, 'Mozilla/5.0 (Windows NT 6.0; WOW64; rv:9.0) Gecko/X Thunderbird/9.0.1');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '8.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Macintosh'), 3 => array(0 => 'Mac OS X 10.7'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17297,18368,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:8.0) Gecko/X Thunderbird/8.0');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '8.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 6.0'), 3 => array(0 => 'Windows NT 6.0'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17285,18368,18092, 'Mozilla/5.0 (Windows NT 6.0; WOW64; rv:8.0) Gecko/X Thunderbird/8.0');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '8.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Macintosh'), 3 => array(0 => 'Mac OS X 10.6'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18368,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:8.0) Gecko/X Thunderbird/8.0 Lightning/1.0');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '3.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'X11'), 3 => array(0 => 'X11'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,18197,18092, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.12) Gecko/X Lightning/1.0b1 Thunderbird/3.0.8');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '3.1'), 1 => array(0 => '5.0'), 2 => array(0 => 'Macintosh'), 3 => array(0 => 'Mac OS X 10.6'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18198,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.8) Gecko/X Thunderbird/3.1.2');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '3.1'), 1 => array(0 => '5.0'), 2 => array(0 => 'Macintosh'), 3 => array(0 => 'Mac OS X 10.5'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17295,18198,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.2.15) Gecko/X Lightning/1.0b2 Thunderbird/3.1.9');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '2.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows'), 3 => array(0 => 'Windows NT 6.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,7133,18199,18092, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.23) Gecko/X Thunderbird/2.0.0.23');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '3.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Macintosh'), 3 => array(0 => 'Mac OS X 10.5'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17295,18197,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1.9) Gecko/X Thunderbird/3.0.4');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '1.5'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows'), 3 => array(0 => 'Windows NT 5.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,18201,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.10) Gecko/X Thunderbird/1.5.0.10');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '10.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 6.1'), 3 => array(0 => 'Windows NT 6.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,7133,18191,18092, 'Mozilla/5.0 (Windows NT 6.1; rv:10.0.1) Gecko/X Thunderbird/10.0.1 Lightning/1.2.1');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '3.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows'), 3 => array(0 => 'Windows NT 5.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,18197,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.9.1.16) Gecko/X Thunderbird/3.0.11');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '3.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows'), 3 => array(0 => 'Windows NT 5.2'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,18197,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9.1.16) Gecko/X Thunderbird/3.0.11');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '10.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'X11'), 3 => array(0 => 'X11'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,18191,18092, 'Mozilla/5.0 (X11; Linux x86_64; rv:10.0) Gecko/X Thunderbird/10.0');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '9.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'X11'), 3 => array(0 => 'X11'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,18192,18092, 'Mozilla/5.0 (X11; Linux x86_64; rv:9.0) Gecko/X Thunderbird/9.0 Lightning/1.1');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '9.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Macintosh'), 3 => array(0 => 'Mac OS X 10.7'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17297,18192,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:9.0) Gecko/X Thunderbird/9.0.1 Lightning/1.1.1');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '6.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 6.0'), 3 => array(0 => 'Windows NT 6.0'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17285,18194,18092, 'Mozilla/5.0 (Windows NT 6.0; WOW64; rv:6.0.2) Gecko/X Thunderbird/6.0.2');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '6.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Macintosh'), 3 => array(0 => 'Mac OS X 10.7'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17297,18194,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:6.0.2) Gecko/X Thunderbird/6.0.2');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '9.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Macintosh'), 3 => array(0 => 'Mac OS X 10.5'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17295,18192,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.5; rv:9.0) Gecko/X Thunderbird/9.0.1 Lightning/1.1.1');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '9.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 6.1'), 3 => array(0 => 'Windows NT 6.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,7133,18192,18092, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:9.0) Gecko/X Thunderbird/9.0.1 OracleBeehiveExtension/1.0.0.4-OracleInternal Lightning/1.1.1');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '10.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Macintosh'), 3 => array(0 => 'Mac OS X 10.6'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18191,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:10.0) Gecko/X Thunderbird/10.0 Lightning/1.2.1');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '6.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 6.1'), 3 => array(0 => 'Windows NT 6.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,7133,18194,18092, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:6.0.2) Gecko/X Thunderbird/6.0.2');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '7.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'X11'), 3 => array(0 => 'X11'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,18193,18092, 'Mozilla/5.0 (X11; Linux i686; rv:7.0) Gecko/X Thunderbird/7.0');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '9.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 5.2'), 3 => array(0 => 'Windows NT 5.2'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,18192,18092, 'Mozilla/5.0 (Windows NT 5.2; WOW64; rv:9.0) Gecko/X Thunderbird/9.0.1 Lightning/1.1.1');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '9.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 5.1'), 3 => array(0 => 'Windows NT 5.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,18192,18092, 'Mozilla/5.0 (Windows NT 5.1; rv:9.0) Gecko/X Thunderbird/9.0 Lightning/1.1.1');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '3.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows'), 3 => array(0 => 'Windows NT 6.0'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17285,18197,18092, 'Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.1.9) Gecko/X Thunderbird/3.0.4');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '10.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 5.1'), 3 => array(0 => 'Windows NT 5.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,18191,18092, 'Mozilla/5.0 (Windows NT 5.1; rv:10.0) Gecko/X Thunderbird/10.0');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '10.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 5.2'), 3 => array(0 => 'Windows NT 5.2'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,18191,18092, 'Mozilla/5.0 (Windows NT 5.2; WOW64; rv:10.0.2) Gecko/X Thunderbird/10.0.2 Lightning/1.2.1');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '6.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 5.1'), 3 => array(0 => 'Windows NT 5.1'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,18194,18092, 'Mozilla/5.0 (Windows NT 5.1; rv:6.0.2) Gecko/X Thunderbird/6.0.2 OracleBeehiveExtension/1.0.0.4-OracleInternal Lightning/1.0b5');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '10.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Macintosh'), 3 => array(0 => 'Mac OS X 10.5'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17295,18191,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.5; rv:10.0.1) Gecko/X Thunderbird/10.0.1');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '1.5'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows'), 3 => array(0 => 'Windows NT 6.0'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17285,18201,18092, 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.0.10) Gecko/X Thunderbird/1.5.0.10');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Windows NT 5.0'), 3 => array(0 => 'Windows NT 5.0'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,7127,18196,18092, 'Mozilla/5.0 (Windows NT 5.0; rv:5.0) Gecko/X Thunderbird/5.0');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '10.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Macintosh'), 3 => array(0 => 'Mac OS X 10.7'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17297,18191,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:10.0) Gecko/X Thunderbird/10.0 Lightning/1.2');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '6.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'X11'), 3 => array(0 => 'X11'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,18194,18092, 'Mozilla/5.0 (X11; Linux i686; rv:6.0.2) Gecko/X Thunderbird/6.0.2');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '3.1'), 1 => array(0 => '5.0'), 2 => array(0 => 'Macintosh'), 3 => array(0 => 'Mac OS X 10.7'), 4 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17297,18198,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.7; en-US; rv:1.9.2.18) Gecko/X Thunderbird/3.1.11');
    $ls = $ns;
  }
  $ns = E95($segments, array(0 => array(0 => '3.1'), 1 => array(0 => '5.0'), 2 => array(0 => 'X11'), 3 => array(0 => 'X11'), 4 => array(0 => '3.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17866,18198,18092, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.17) Gecko/X Fedora/3.1.10-1.fc14 Thunderbird/3.1.10');
    $ls = $ns;
  }
  return $dl;
}
