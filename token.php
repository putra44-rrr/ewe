<?php
include "function.php";
date_default_timezone_set('Asia/Jakarta');
echo color("white","☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞\n");
echo color("red","  [♡]  Time  : ".date('[d-m-Y] [H:i:s]')."   \n");
echo color("white","   [♡] TOLONG DIBACA DULU SEBELUM MENGGUNAKAN SC \n");
echo color("red","[♡] NGETIK NOMORNYA BEGINI YA 62xxxxxxxxxx \n");
echo color("white","  [♡] JANGAN LUPA FOLLOW IG GUE YA : @Bananacreamy \n");
echo color("red","[♡] SCRIPT INI BERGUNA UNTUK MENGAMBIL TOKEN LO \n");
echo color("white"," [♡] NEMU KENDALA? CHAT TELEGRAM @BANANACREAMY \n");
echo color("red"," [♡] BACA DOA DULU SEBELUM MULAI , OKAY?^.^ \n");
echo color("white","☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞\n");
	echo "\n";
$secret = '83415d06-ec4e-11e6-a41b-6c40088ab51e';
$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'X-AppVersion: 3.48.2';
$headers[] = "X-Uniqueid: ac94e5d0e7f3f" . rand(111, 999);
$headers[] = 'X-Location: id_ID';
ulang:
 echo "[+] MASUKIN NOMOR LO DISINI : ";
 $number = trim(fgets(STDIN));
 $login = curl('https://api.gojekapi.com/v3/customers/login_with_phone', '{"phone":"+' . $number . '"}', $headers);
 $logins = json_decode($login[0]);
 if ($logins->success == true) {
     otp:
         echo "[+] MASUKIN OTP LO DISINI CUK : ";
         $otp = trim(fgets(STDIN));
         $data1 = '{"scopes":"gojek:customer:transaction gojek:customer:readonly","grant_type":"password","login_token":"' . $logins->data->login_token . '","otp":"' . $otp . '","client_id":"gojek:cons:android","client_secret":"' . $secret . '"}';
         $verif = curl('https://api.gojekapi.com/v3/customers/token', $data1, $headers);
         $verifs = json_decode($verif[0]);
         if ($verifs->success == true) {
             $token = $verifs->data->access_token;
             $headers[] = 'Authorization: Bearer ' . $token;
             $live = "token-akun.txt";
             $fopen1 = fopen($live, "a+");
             $fwrite1 = fwrite($fopen1, "Token Kamu : " . $token . "
NOMOR GOJEK LO : " . $number . "
");
             fclose($fopen1);
             echo "
";
             echo "Token Kamu : " . $token . "
";
             echo "TOKEN DISIMPAN DI FILE YA " . $live . " 
";
             echo "
";
         } else {
             echo "
";
             echo "OTP NYA SALAH ANJAY, YANG BENER DONG CUK
";
             echo "
";
             goto otp;
         }
     } else {
         echo "
";
         echo "NOMOR LO GA TERDAFTAR YA KAMPRET, CAPE YA GUA MARAH MARAH MOLO
";
         echo "
";
         goto ulang;
     }

function curl($url, $fields = null, $headers = null) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  if ($fields !== null) {
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
  }
  if ($headers !== null) {
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  }
  $result = curl_exec($ch);
  $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);
  return array($result, $httpcode);
  }
