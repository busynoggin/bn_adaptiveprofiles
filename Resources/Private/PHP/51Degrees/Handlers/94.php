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
function E94($target, $test, $ls) {
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
function _H94($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=Mozilla/)\\d\\.\\d#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=Mozilla/\\d\\.\\d \\()[^;\\)]+#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#Windows NT \\d\\.\\d(?=;)|Mac OS X [^\\s]+(?=;)|Ubuntu|X11|Linux i686#', $useragent));
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => NULL, 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,17470,18092, 'Mozilla/5.0 Galeon/1.0.2 (X11; Linux i686; U;) Gecko/X');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,17470,18092, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.2) Gecko Shiretoko/3.5.2');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,17470,18092, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9) Gecko');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => NULL, 1 => NULL, 2 => array(0 => 'Windows NT 5.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,17470,18092, 'K-Meleon/0.6 (Windows; U; Windows NT 5.1; en-US; rv:0.9.5) Gecko/X');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,17470,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9.1.7) Gecko/201');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,17470,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.17pre) Gecko K-Meleon/1.6.0');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0', 1 => '4.8'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.1', 1 => 'Windows NT 5.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,17470,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/X Mozilla/4.8 [en] (Windows NT 5.1; U)');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows NT 5.1'), 2 => array(0 => 'Windows NT 5.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,17470,18092, 'Mozilla/5.0 (Windows NT 5.1; rv:7.0.1) Gecko/X SeaMonkey/2.4.1');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,18120,17470,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.13) Gecko/X SeaMonkey/1.1.9');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X Mach-O')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,18120,17470,18092, 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.5b) Gecko/X Camino/0.7+');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17017,17470,18092, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.17) Gecko/X SeaMonkey/1.1.12 (Ubuntu-1.1.12+nobinonly-0ubuntu0.8.04.1)');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17017,17470,18092, 'Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.5) Gecko/X K-Meleon/0.8');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu', 3 => 'Ubuntu')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17017,17470,18092, 'Mozilla/5.0 (X11; U; Linux i686; en-GB; rv:1.7.6) Gecko/X Epiphany/1.6.1 (Ubuntu) (Ubuntu package 1.0.2)');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17017,17470,18092, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.4) Gecko/X (Debian-1.8.1.4-2ubuntu5)');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => NULL, 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17017,17470,18092, 'Mozilla/5.001 (X11; U; Linux i686; rv:1.8.1.6; de-ch) Gecko/X (ubuntu-feisty)');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10.6')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,17470,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:2.0.1) Gecko/X Gimme Bar');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 6.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,7133,17470,18092, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.17pre) Gecko K-Meleon/1.6.0');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows NT 6.1'), 2 => array(0 => 'Windows NT 6.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,7133,17470,18092, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:12.0) Gecko/X SeaMonkey/2.9');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17285,17470,18092, 'Mozilla/5.0 (Windows; U; Windows NT 6.0 x64; en-US; rv:1.9pre) Gecko/X Minefield/3.0.2pre');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 6.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17285,17470,18092, 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1.16) Gecko');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 6.1', 1 => 'Windows NT 6.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,7133,17217,18092, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.13) Gecko/X Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.7.62 Version/11.01');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17295,17470,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1.18) Gecko/X SeaMonkey/2.0.13');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,7127,17470,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.9.2a1pre) Gecko');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10.7')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17297,17470,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/X Yoono/1.8.16');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10.4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17294,17470,18092, 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.4; de; rv:1.9.1.19) Gecko/X SeaMonkey/2.0.14');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,6704,17470,18092, 'Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.4) Gecko Netscape/7.1 (ax)');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17017,17470,18092, 'Mozilla/5.0 (Macintosh; U; PPC; en-US; rv:1.2.1) Gecko/X');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(18088,5448,17470,18092, 'Mozilla/5.0 (Windows; U; Windows CE 5.2; rv:1.8.1.4pre) Gecko/20070327 Minimo/0.020');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(18088,5448,17470,18092, 'Mozilla/5.0 (Windows; U; Windows CE 4.21; rv:1.8b4) Gecko/X Minimo/0.007');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18146,17470,18092, 'Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.4) Gecko/X');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => NULL, 1 => NULL, 2 => array(0 => 'X11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17866,17470,18092, 'Seamonkey-1.1.13-1(X11; U; GNU Fedora fc 10) Gecko/X');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17866,17470,18092, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.13) Gecko Fedora/1.9.2.13-3.el5');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17866,17470,18092, 'Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.9.2.18) Gecko Fedora/1.9.2.18-1.fc14');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17837,17470,18092, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.14) Gecko/X Ubuntu/9.04 (jaunty) Shiretoko/3.5.14');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Ubuntu')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17837,17470,18092, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.3) Gecko/X Ubuntu/9.04 (jaunty) Shiretoko/3.5.3');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => NULL, 2 => array(0 => 'X11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18145,17470,18092, 'Mozilla/5.0 http://fairshare.cc (X11; U; FreeBSD i386; en-US; rv:1.2a) Gecko/X');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18145,17470,18092, 'Mozilla/5.0 (X11; U; FreeBSD amd64; en-US; rv:1.8.1.21) Gecko/X SeaMonkey/1.1.16');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(12280,18110,17470,18092, 'Mozilla/5.0 (X11; iPhone; Mobile; Linux i686; chrome://navigator/locale/navigator.properties; rv:1.8.0.6) Gecko/X Skylight');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(16568,18110,17470,18092, 'Mozilla/5.0 (X11; Linux i686; U; en-US) Gecko/X Vision-Browser/8.1 381x214 Pantech CDM8999');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(14862,5204,17348,18092, 'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 (X11; U; Linux i686; en) Gecko/UCWEB7.1.0.42/69/300');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(14708,5204,17348,18092, 'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725/UCWEB7.1.0.42/69/351');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(12473,5204,17348,18092, 'Nokia2730c-1/2.0 (10.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 (X11; U; Linux i686; en) Gecko/UCWEB7.1.0.42/69/300');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(16082,18110,17470,18092, 'Mozilla/5.0 (X11; Linux i686; U; en-US) Gecko/X Vision-Browser/8.1 301x200 LG VN530');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Ubuntu')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(18254,17017,18245,18163, 'Mozilla/5.0 (X11; U; Linux i586; en-US; rv:1.7.3) Gecko/X Epiphany/1.4.4 (Ubuntu)/Nutch-1.4');
    $ls = $ns;
  }
  return $dl;
}
