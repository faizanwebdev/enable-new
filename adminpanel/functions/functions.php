<?php
include "config-pdo.php";
define("encryption_method", "AES-128-CBC");
define("key", "enable@2022#$%");
define("iv", "enable@2022#$%^&");
function encrypt($data) {
    $key = key;
    $plaintext = $data;
    $ivlen = openssl_cipher_iv_length($cipher = encryption_method);
    $iv = iv;
    $ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
    $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
    $ciphertext = base64_encode($iv . $hmac . $ciphertext_raw);
    return $ciphertext;
}
function decrypt($data) {
    $key = key;
    $c = base64_decode($data);
    $ivlen = openssl_cipher_iv_length($cipher = encryption_method);
    $iv = iv;
    $hmac = substr($c, $ivlen, $sha2len = 32);
    $ciphertext_raw = substr($c, $ivlen + $sha2len);
    $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
    $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
    if (hash_equals($hmac, $calcmac))
    {
        return $original_plaintext;
    }
}
function postercount(){
	global $con;
	$voucher_count = "SELECT COUNT(id) AS poster_count FROM abstractanciapp WHERE abs_category = 'Poster' OR abs_category = 'e-Poster'";
	$stmt = $con->prepare($voucher_count);
	$stmt->execute();
	$run_count = $stmt->rowCount();
// 	if ($run_count) {
	  if ($run_count == 1) {
	    if ($row = $stmt->fetch()) {
	      $vouchers_number = $row->poster_count;
	      echo $vouchers_number;
	    }
	  }
// 	}
}

function todaycount(){
	global $con;
    $today = date('Y-m-d');
	$voucher_view_count = "SELECT COUNT(id) AS today_count FROM userdata WHERE date = '$today'";
	$stmt = $con->prepare($voucher_view_count);
	$stmt->execute();
	$run_view = $stmt->rowCount();
// 	if ($run_view) {
	  if ($run_view == 1) {
	    if ($row = $stmt->fetch()) {
	      $voucher_views = $row->today_count;
	      echo $voucher_views;
	    }
	  }
// 	}
}

function completecount(){
	global $con;
	$voucher_count = "SELECT COUNT(id) AS complete_count FROM userdata WHERE complete = '1'";
	$stmt = $con->prepare($voucher_count);
	$stmt->execute();
	$run_count = $stmt->rowCount();
// 	if ($run_count) {
	  if ($run_count == 1) {
	    if ($row = $stmt->fetch()) {
	      $vouchers_number = $row->complete_count;
	      echo $vouchers_number;
	    }
	  }
// 	}
}

function incompletecount(){
	global $con;
	$voucher_count = "SELECT COUNT(id) AS incomplete_count FROM userdata WHERE complete = '0'";
	$stmt = $con->prepare($voucher_count);
	$stmt->execute();
	$run_count = $stmt->rowCount();
// 	if ($run_count) {
	  if ($run_count == 1) {
	    if ($row = $stmt->fetch()) {
	      $vouchers_number = $row->incomplete_count;
	      echo $vouchers_number;
	    }
	  }
// 	}
}

function abstractcount(){
  global $con;
  $user_count = "SELECT COUNT(id) AS abstract_count FROM userdata";
  $stmt = $con->prepare($user_count);
  $stmt->execute();
  $run_users = $stmt->rowCount();
//   if ($run_users) {
    if ($run_users == 1) {
      if ($row = $stmt->fetch()) {
        $number_user = $row->abstract_count;
        echo $number_user;
      }
    }
//   }
}


function contactcount(){
  global $con;
  $contact_count = "SELECT COUNT(id) AS contact_count FROM contactform";
  $stmt = $con->prepare($contact_count);
  $stmt->execute();
  $run_count = $stmt->rowCount();
//   if ($run_count) {
    if ($run_count == 1) {
      if ($row = $stmt->fetch()) {
        $number_contact = $row->contact_count;
        echo $number_contact;
      }
    }
//   }
}

function filecount(){
  global $con;
  $file_count = "SELECT COUNT(id) AS file_count FROM websitefileanciapp";
  $stmt = $con->prepare($file_count);
  $stmt->execute();
  $run_count = $stmt->rowCount();
//   if ($run_count) {
    if ($run_count == 1) {
      if ($row = $stmt->fetch()) {
        $number_file = $row->file_count;
        echo $number_file;
      }
    }
//   }
}

function enablecount(){
  global $con;
  $file_count = "SELECT COUNT(id) AS file_count FROM websitefileanciapp WHERE disable = 0";
  $stmt = $con->prepare($file_count);
  $stmt->execute();
  $run_count = $stmt->rowCount();
//   if ($run_count) {
    if ($run_count == 1) {
      if ($row = $stmt->fetch()) {
        $number_file = $row->file_count;
        echo $number_file;
      }
    }
//   }
}

function disablecount(){
  global $con;
  $file_count = "SELECT COUNT(id) AS file_count FROM websitefileanciapp WHERE disable = 1";
  $stmt = $con->prepare($file_count);
  $stmt->execute();
  $run_count = $stmt->rowCount();
//   if ($run_count) {
    if ($run_count == 1) {
      if ($row = $stmt->fetch()) {
        $number_file = $row->file_count;
        echo $number_file;
      }
    }
//   }
}
?>