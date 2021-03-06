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
function E121($target, $test, $ls) {
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
function _H121($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'curl/7.19.2 (i386-pc-win32) libcurl/7.19.2 OpenSSL/0.9.8i zlib/1.2.3';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.15.5';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.21.0 (amd64-pc-win32) libcurl/7.21.0 OpenSSL/0.9.8o zlib/1.2.3';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.21.1 (i386-pc-win32) libcurl/7.21.1 OpenSSL/1.0.0 zlib/1.2.5';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.19.7';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.16.4 (i386-apple-darwin9.0) libcurl/7.16.4 OpenSSL/0.9.7l zlib/1.2.3';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.18.0 (i586-pc-mingw32msvc) libcurl/7.18.0 zlib/1.2.3';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.10.4 (win32) libcurl/7.10.4 zlib/1.1.4';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.22.0 (i386-pc-win32) libcurl/7.22.0 zlib/1.2.5';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.24.0 (i686-pc-cygwin) libcurl/7.24.0 OpenSSL/1.0.1b zlib/1.2.5 libidn/1.22 libssh2/1.4.0';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.26.0';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.10.8 (win32) libcurl/7.10.8 OpenSSL/0.9.7c';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.16.3 (powerpc-apple-darwin9.0) libcurl/7.16.3 OpenSSL/0.9.7l zlib/1.2.3';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.23.1 (x86_64-pc-win32) libcurl/7.23.1 OpenSSL/0.9.8r zlib/1.2.5';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.24.0 (x86_64-apple-darwin12.0) libcurl/7.24.0 OpenSSL/0.9.8r zlib/1.2.5';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,21108,16149,841, $ua);
  }
  $ua = 'curl/7.15.5 (x86_64-redhat-linux-gnu) libcurl/7.15.5 OpenSSL/0.9.8b zlib/1.2.3 libidn/0.6.5';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.15.5 (i686-redhat-linux-gnu) libcurl/7.15.5 OpenSSL/0.9.8b zlib/1.2.3 libidn/0.6.5';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.19.7 (x86_64-pc-linux-gnu) libcurl/7.19.7 OpenSSL/0.9.8k zlib/1.2.3.3 libidn/1.15';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.19.7 (i486-pc-linux-gnu) libcurl/7.19.7 OpenSSL/0.9.8k zlib/1.2.3.3 libidn/1.15';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.21.0 (x86_64-pc-linux-gnu) libcurl/7.21.0 OpenSSL/0.9.8o zlib/1.2.3.4 libidn/1.15 libssh2/1.2.6';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.21.0 (i486-pc-linux-gnu) libcurl/7.21.0 OpenSSL/0.9.8o zlib/1.2.3.4 libidn/1.15 libssh2/1.2.6';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.19.7 (x86_64-unknown-linux-gnu) libcurl/7.19.7 NSS/3.12.6.2 zlib/1.2.3 libidn/1.18 libssh2/1.2.2';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.19.7 (x86_64-redhat-linux-gnu) libcurl/7.19.7 NSS/3.13.1.0 zlib/1.2.3 libidn/1.18 libssh2/1.2.2';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.21.6 (x86_64-pc-linux-gnu) libcurl/7.21.6 OpenSSL/1.0.0e zlib/1.2.3.4 libidn/1.22 librtmp/2.3';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.22.0 (x86_64-pc-linux-gnu) libcurl/7.22.0 OpenSSL/1.0.1 zlib/1.2.3.4 libidn/1.23 librtmp/2.3';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.15.5 (i386-redhat-linux-gnu) libcurl/7.15.5 OpenSSL/0.9.8b zlib/1.2.3 libidn/0.6.5';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.22.0 (i686-pc-linux-gnu) libcurl/7.22.0 OpenSSL/1.0.1 zlib/1.2.3.4 libidn/1.23 librtmp/2.3';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.19.4 (i386-redhat-linux-gnu) libcurl/7.19.4 NSS/3.12.2.0 zlib/1.2.3 libidn/0.6.14 libssh2/0.18';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.19.5 (x86_64-pc-linux-gnu) libcurl/7.19.4 OpenSSL/0.9.8o zlib/1.2.3.4 libidn/1.22 libssh2/1.1';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.24.0 (x86_64-redhat-linux-gnu) libcurl/7.24.0 NSS/3.12.10.0 zlib/1.2.5 libidn/1.18 libssh2/1.2.2';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(27547,139063,16149,841, $ua);
  }
  $ua = 'curl/7.18.2 (x86_64-pc-linux-gnu) libcurl/7.18.2 OpenSSL/0.9.8g zlib/1.2.3.3 libidn/1.8 (FlipboardProxy/1.1; +http://flipboard.com/browserproxy)';
  $ns = E121($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(292268,139063,16149,841, $ua);
  }
  return $dl;
}
