  <?php
ob_start();
define('API_KEY','توكن البوت');
$Ali = "توكن الاجباري";
$sudo = 1165017371;
$admin = "1165017371";
$bot_id       = 1246261350;
$idbot = $bot_id;
$username="Snizkbot";
$botid       = $bot_id;
$botid = $botid;
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$g = str_replace('http://','',$SAIEDZip14);
$SAIEDZip14 = "alivrx.tk/nizk";
//»»»»»»»»»»»»»»»»»»
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$from_id = $message->from->id;
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
 $aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
$text = $message->text;
$name = $message->from->first_name;
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$ch = file_get_contents("ch.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$hkok = file_get_contents("hkok.txt");
$g = file_get_contents('server.txt');
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$photo = $update->message->photo;
$video = $update->message->video;
$sticker = $update->message->sticker;
$file = $update->message->document;
$music = $update->message->audio;
$voice = $update->message->voice;
$caption = $message->caption;
$photo_id = $update->message->photo[0]->file_id;
$video_id= $update->message->video->file_id;
$sticker_id = $update->message->sticker->file_id;
$file_id = $update->message->document->file_id;
$music_id = $update->message->audio->file_id;
$voice_id = $update->message->voice->file_id;
 $ch1 = file_get_contents("https://api.telegram.org/bot".$Ali."/getChatMember?chat_id=$ch&user_id=$from_id");
$ch2 = file_get_contents("https://api.telegram.org/bot".$Ali."/getChatMember?chat_id=$ch&user_id=".$from_id);
$tv1 = file_get_contents("https://api.telegram.org/bot".$Ali."/getChatMember?chat_id=$tv&user_id=$from_id");
$tv2 = file_get_contents("https://api.telegram.org/bot".$Ali."/getChatMember?chat_id=$tv&user_id=".$from_id);
#$export1 = json_decode(file_get_contents("https://api.telegram.org/bot".$Ali."/exportChatInviteLink?chat_id=$tv"));
#$linkchannel1 = $export1->result;
#$export2 = json_decode(file_get_contents("https://api.telegram.org/bot".$Ali."/exportChatInviteLink?chat_id=$ch"));
#$linkchannel2 = $export2->result;
if ($message && !in_array($from_id, $members)) {
    file_put_contents("members.txt", $from_id."\n",FILE_APPEND);
  }
$tvp = str_replace('@','',$tv);
if($message && (strpos($tv1,'"status":"left"') or strpos($tv1,'"Bad Request: USER_ID_INVALID"') or strpos($tv1,'"status":"kicked"') or strpos($tv2,'"status":"left"') or strpos($tv2,'"Bad Request: USER_ID_INVALID"') or strpos($tv2,'"status":"kicked"'))!== false){
$linktv=file_get_contents("linktv.txt");
if($linktv==null){
$linktv="https://t.me/$tvp";
}
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"*👨‍💻¦ لا تستطيع استخدام البوت ؛🍂
📬¦ عليڪك الاشتراڪك في قنوات البوت ؛ 🕸
📡¦ القناهہ •⊱ @$tvp ⊰•️
–––––––––––––––
- عند الاشتراڪك ارسل { /start }*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'٠ اضغط هنا للاشتراك¹ ✅','url'=>"$linktv"]
],
]])
]);return false;}
$chp = str_replace('@','',$ch);
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$linkch=file_get_contents("linkch.txt");
if($linkch==null){
$linkch="https://t.me/$chp";
}
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*👨‍💻¦ لا تستطيع استخدام البوت ؛🍂
📬¦ عليڪك الاشتراڪك في قنوات البوت ؛ 🕸
📡¦ القناهہ •⊱ @$chp ⊰•️
–––––––––––––––
- عند الاشتراڪك ارسل { /start }*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'٠ اضغط هنا للاشتراك² ✅' ,'url'=>"$linkch"]
],
]])
]);return false;}
if($user == null){}else{$user5 = $user;}
if ($message && !in_array($from_id, $members)) {
    file_put_contents("members.txt", $from_id."\n",FILE_APPEND);
  }
//»»»»»»»»»»»»
$baageel = file_get_contents("baageel.txt");
if($text == "〽️┇› تفعيل البوت" and $chat_id == $admin){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮¦ تم تفعيل البوت بنجاح ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("baageel.txt","on");
}
if($text == "⚠️┇› تعطيل البوت" and $chat_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"📮¦ تم بنجاح تعطيل البوت ✓",
]);
file_put_contents("baageel.txt","off");
} 
if($message and $baageel =="off" and $chat_id != $admin ){
 bot("sendmessage",[
 "chat_id"=>$from_id,
 "text"=>"*👨🏻‍💻 ¦ مرحبا بك عزيزي 
⚠️ ¦ #نعتذر عن التوقف للبوت
⚙ ¦ فقط تحت الصيانة والتحديث
⏰ ¦ سيتم اعادته للخدمة الساعات القادمة
✓*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[
],
]])
]);return false;}
//»»»»»»»»»»»»»»»»»»
if($user == null){}else{$user5 = $user;}
if($message and in_array($user5, $band_user) and $user != null) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
  if($message && in_array($from_id, $band_id)) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
$update=json_decode(file_get_contents('php://input'));
$message=$update->message;
$chat_id=$message->chat->id;
$name=$message->from->first_name; 
$sub=substr($name,0,10)." ..."; 
if($text == '/start' or $text == '🏡┇› الصفحة الرئيسية'){
	$start = str_replace('الاسم',$name,$start);
bot('sendMessage',[
        'chat_id'=>$from_id,
        'text'=>$start,
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"💰┇› لـ شراء نسخة مميزة.","url"=>"https://t.me/$buy"]],
[["text"=>"📡┇› Channel","url"=>"https://t.me/$channel"]],
]  
])
]);}
//»»»»»»»»»»»»»»»»»»
if($text == "/admin" or $text == "back 🔙" or $text == "❌┇› الغاء الامر"  or $text == 'رجوع 🔙' or $text =="/ADMIN"){
if($from_id == $admin)
	bot('sendmessage',[
	'chat_id'=>$from_id, 
	'text' =>"🙋🏻‍♂️ ¦› أهلا بك عزيزي الأدمن 🔱
⚙️ ¦› هذه الاعدادات الخاصة بك 🌚
",'reply_to_message_id'=>$message_id,
 'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🗃┇› تعيين رسالة /start"]
],
[
['text'=>"🚸┇› وضع قناة الاشتراك¹"],['text'=>"🚸┇› وضع قناة الاشتراك²"]
],
[
['text'=>"🗑┇› حذف قناة الاشتراك¹"],['text'=>"🗑┇› حذف قناة الاشتراك²"]
],
[
['text'=>"🔱┇› تفعيل التنبيه"],['text'=>"⚠️┇› تعطيل التنبيه"]
], 
[
['text'=>"〽️┇› تفعيل البوت"],['text'=>"⚠️┇› تعطيل البوت"]
],
[
['text'=>"🔂┇› تفعيل التوجية"],['text'=>"🔁┇› تعطيل التوجية"]
], 
[
['text'=>"🚷┇› حظر خاص"],['text'=>"🚫┇› الغاء حظر الخاص"]
],
[
['text'=>"🎯┇› قسم الاذاعة"]
],
[
['text'=>"💤┇› حظر بالمعرف"],['text'=>"🌀┇› الغاء الحظر بالمعرف"]
],
[
['text'=>"📊┇› الاحصائيات"],['text'=>"🔍┇› وضع تعليمات"]
],
[
['text'=>"💬┇› تفعيل التواصل"],['text'=>"💬┇› تعطيل التواصل"]
],
[
['text'=>"📮┇› المشتركين"],['text' =>"📁┇› جلب نسخة"]
],
[
['text'=>"🗂┇› رفع نسخة للاعضاء"],['text'=>""]
],
], 
])
]);} 
//»»»»»»»»»»»»»»»»»»
if($text == "🚸┇› وضع قناة الاشتراك¹" and $from_id == $admin){
	file_put_contents("sting.txt","knat");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🔰¦ أرسل معرف القناة العام الان
👨🏻‍💻¦ اذكانت خاصة قم بتوجيه منشور .*
",'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text == "إلغاء ❌" and $sting =="knat" and  $from_id == $admin) {
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌¦تم إلغاء الأمر بنجاح 🗳️" 
]) ;
unlink("sting.txt");} 
if($message->forward_from_chat and $sting =="knat" and $from_id == $admin){
file_put_contents("sting.txt","link1");
$idchannel= $message->forward_from_chat->id;
file_put_contents("tv.txt","$idchannel"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*🎫 ¦ تم حفظ ايدي القناة بنجاح √
🎟 ¦ ايدي القناة : *$idchannel*
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ قم بارسال الرابط الخاص بالقناة*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
}
if($text!=null and $text != "إلغاء ❌" and $sting =="link1" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("linktv.txt","$text"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "- مرحبا بك عزيزي 💁‍♂
🎫 ¦ تم حفظ رابط القناة بنجاح √
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ الرابط الخاص بك $text
",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($text!=null and $text != "إلغاء ❌" and $sting =="knat" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("tv.txt","$text"); 
unlink("linktv.txt"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" =>"*- مرحبا بك عزيزي 💁‍♂
🌀 ¦ تم حفظ معرف القناة بنجاح √
🔘 ¦ فضلا تأكد ان البوت أدمن في القناة *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
//********♥*****//
if($text == "🗑┇› حذف قناة الاشتراك¹" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🖥️¦تم حذف القناة بنجاح ☑️*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tv.txt");}
//»»»»»»»»»»»»»»»»»»
if ($text == "🚸┇› وضع قناة الاشتراك²" and $from_id == $admin) {
file_put_contents("sting.txt","sting");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*- مرحبا بك عزيزي↯
🌀 ¦ أرسل معرف القناة العام الان
♻️ ¦ اذكانت خاصة قم بتوجيه منشور .*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text == "إلغاء ❌" and $sting =="sting" and  $from_id == $admin) {
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌¦تم إلغاء الأمر بنجاح 🗳️" 
]) ;
unlink("sting.txt");} 
if($message->forward_from_chat and $sting =="sting" and $from_id == $admin){
unlink("sting.txt");
$idchannel= $message->forward_from_chat->id;
file_put_contents("ch.txt","$idchannel"); 
file_put_contents("sting.txt","link2"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*🎫 ¦ تم حفظ ايدي القناة بنجاح √
🎟 ¦ ايدي القناة : *$idchannel*
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ قم بارسال الرابط الخاص بالقناة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);
}
if($text!=null and $text != "إلغاء ❌" and $sting =="link2" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("linkch.txt","$text"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "- مرحبا بك عزيزي 💁‍♂
🎫 ¦ تم حفظ رابط القناة بنجاح √
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ الرابط الخاص بك $text
",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if( $text !=null and $text != "إلغاء ❌" and $sting =="sting" and $from_id == $admin and !$message->forward_from_chat ){
file_put_contents("ch.txt","$text"); 
unlink("linkch.txt");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*- مرحبا بك عزيزي↯
🌀 ¦ أرسل معرف القناة العام الان
♻️ ¦ اذكانت خاصة قم بتوجيه منشور .*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($text =="🗑┇› حذف قناة الاشتراك²" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🖥️¦ تم حذف القناة بنجاح ☑️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("ch.txt") ;
} 
//»»»»»»»»»»»»»»»»»»
if($text == "💤┇› حظر بالمعرف" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"💤¦› حسنا ارسل المعرف العضو الذي تريد حظرة من البوت 
"]) ;
file_put_contents("sting.txt","bandu");
} 
if(preg_match('/^(@)(\S{5,32})/i',$text) and $sting == "bandu" and $from_id == $admin){
$tf = str_replace("@","",$text);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"🚷 ¦› تم حظر العضو بنجاح
[$text](https://t.me/$tf) 
",'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>"$text", 
'text'=>"🚸 ¦› عذرا عزيزي
📛 ¦› لقد تم حظرك من البوت
👨‍✈️ ¦› بواسطة المطور الاساسي
"]);$tf = str_replace("@","",$text);
file_put_contents("band_user.txt",$tf."\n",FILE_APPEND);
unlink("sting.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text =="🌀┇› الغاء الحظر بالمعرف" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لالغاء الحظر
"]);file_put_contents("sting.txt","unkband1");} 

if($text =="$text" and $sting == "unkband1" and $from_id == $admin) {
$tf = str_replace("@","",$text);
	$a = str_replace("$tf","",file_get_contents("band_user.txt"));
        file_put_contents("band_user.txt",$a);
$tf = str_replace("@","",$text);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"🚫 ¦› تم الغاء الحظر بنجاح √
[$text](https://t.me/$tf) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي العضو
🚫 ¦› لقد تم رفع القيود عنك
🤖 ¦› يمكنك الان استخدام البوت
",]);unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
$rt = $update->message->reply_to_message;
$id = $message->reply_to_message->forward_from->id;
if($tw == "tw" and $from_id != $admin){
	if($text != "/start"){
	bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
	}
	if($tw == "tw" and $rt and $from_id == $admin){
		bot("sendMessage",[
"chat_id"=>$id,
"text"=>"
$text
"
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📮¦› تم الارسال بنجاح √
"]);}
if($text == "💬┇› تعطيل التواصل" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"❎ ¦› تم تعطيل التواصل بنجاح
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tw.txt") ;
	}
if($text == "💬┇› تفعيل التواصل" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"💬 ¦› تم تفعيل التواصل بنجاح 
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents('tw.txt','tw');	}
/*
if($text == "📮┇› المشتركين" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>" *📊¦› عدد مشتركين البوت هو $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);} 
if($text == "عدد البوتات 🔰" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>count($ok)
	, 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
*/
if($text =="🔱┇› تفعيل التنبيه" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔔¦› تم تفعيل التنبيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("onstart.txt","start");
} 
if($text =="⚠️┇› تعطيل التنبيه" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔕¦› تم تعطيل ❎ التنبيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])
]);
unlink("onstart.txt");
} 
//»»»»»»»»»»»»»»»»»»
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$name = $message->from->first_name;
$username = $message->from->username;
$chat_id = $message->chat->id;
$text = $message->text;
$from_id = $message->from->id;
$tkk = json_decode(file_get_contents('tkk.json'),true);
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
 
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $message_id2 = $update->callback_query->message->message_id; $chat_id2 = $update->callback_query->message->chat->id;
$from_id2 = $update->callback_query->from->id; $message_id = $update->callback_query->message->message_id; $data = $update->callback_query->data;
$info_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo"); $info_tokens = json_decode($info_token);
$get_files = file_get_contents('yhya.php'); $get_done = file_get_contents('infos/explode.php');
$done = explode("\n", $get_done);
$get_id = file_get_contents('infos/yhyahloobotsyria.txt'); $get_ids = explode("\n", $get_id);
$from_id = $message->from->id;
mkdir("infos");
mkdir("geme");
//======================================================//
$index="<html>
<meta HTTP-EQUIV='REFRESH' content='0; url=https://t.me/dTH3SS'/>
<a href='https://t.me/dTH3SS'> متجر لمسات </a> 
<a href='https://t.me/dTH3SS'>متجر لمساات </a> 
<a href='https://t.me/thtss'>ملفات خدميه  </a> 
</html>";
$urls="https://alivrx.tk/nizk";//http://vzhsbd.ml
//»»»»»»»»»»»»»»»»»»
if($text == '/start' and !in_array($from_id, $get_ids)){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*
👨‍✈️ ⁞ مرحبا بك *[$name](tg://user?id=$from_id)* ؛ 
📟 ⁞ في المصنع الرسمي لسورس النيزك ؛
✔️ ⁞ افضل مصنع حماية خالي من الحقوق ؛ 
🛠 ⁞ اصنع بوتك الان مجانا واحمي مجموعتك ؛ 
🤖 ⁞ فقط قم بالدخول للبوت ثم اضغط /start ؛
💤 ⁞ جميع التعليمات في البوت سهلة ومتوفرة ؛
┄─━━━━━━━─┄
📡┇› لمـعرفهہ‌‏ المزيد تابع @THTSS،
👨🏽‍🔧┇› مـطـور آلبوت @TH3SS،
ـ @TH1BS🛒،*
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🤖┊› أصنع بوتك الان','callback_data'=>'addbot'],['text'=>'🗑┊› احذف بوتك الان','callback_data'=>'delete']],
[['text'=>'🗑┊› قناة البوت الرسمية','url'=>'https://t.me/thtss']],
[['text'=>'🛠┊› كيف انشى بوت','callback_data'=>'help'],['text'=>'🖲┊› تحديث البوت', 'callback_data'=>"hkt"]],
[['text'=>'📬 المطور','url'=>'https://t.me/th3ss']],],])]);}
if($data == 'addbot' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){file_put_contents('infos/yhyahloobotsyria.txt', "\n" . $chat_id2 . "\n",FILE_APPEND); bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"*
👨‍✈️┊› مرحبا عزيزي *[المشترك](tg://user?id=$from_id)*
🛠┊› قم بارسال التوكن الخاص بك الان؛
🌈┊› قم بانشائة الان من بوت *@BotFather* ؛
√*
",'parse_mode'=>"markdown",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'🔄┊› العودة','callback_data'=>'cancle']]]])]);}

if($data == 'addbot' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('infos/yhyahloobotsyria.txt', "\n" . $chat_id2 . "\n",FILE_APPEND); 
bot('editMessageText',
['chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*👨‍✈️┊› مرحبا عزيزي *[المشترك](tg://user?id=$from_id)*
🛠┊› قم بارسال التوكن الخاص بك الان؛
🌈┊› قم بانشائة الان من بوت *@BotFather ؛*
√*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'🔄┊› العـودة','callback_data'=>'cancle']]]])]);}

if($data == 'addbot' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,
'text'=>"
👨‍✈️┊› عدرا عزيزي $name
🛠┊› لايمكنك انشاء اكثر من بوت واحد ؛
🌈┊› يمكنك انشاء البوت من حساب اخر ؛
",'show_alert'=>true]);}
if($text and in_array($from_id, $get_ids) and $info_tokens->ok == "true" ){
    if($info_tokens->ok == "true"){
for($i = $mid - 3; $i < $mid; $i++){bot('deleteMessage',[
'chat_id'=>$chat_id,'message_id'=>$i]);}
$str = str_replace($from_id, '', $get_id);    
file_put_contents('infos/yhyahloobotsyria.txt', $str);    
file_put_contents('infos/explode.php', $from_id . "\n", FILE_APPEND);
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*
🎭 ⁞ مرحبا بك عزيزي *[المطور](tg://user?id=$from_id)*👨‍✈️ ؛
🔅 ⁞ مبروك تم إنشاء البوت الخاص بنجاح ؛
🤖 ⁞ للدخول إلى البوت الخاص بك *[اضغـط هنا](t.me/$userr)* ؛
*",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'👾┊› اضغط هنا لدخول الئ بوتك','url'=>"https://t.me/$userr"]],
[['text'=>'🏠️┊› الصفحة الرئيسية','callback_data'=>"home"]],
]])]); 




bot('sendMessage',['chat_id'=>$admin,'text'=>"*
👋┊› مرحبا بك عزيزي المطور ؛
👤┊›  هناك عضوا قام بانشاء بوت ؛
🔘┊› هذه معلومات العضو والبوت ادناه ؛ 
ـ┄─━━━━━━━─┄
👮‍♂┊›  العضو ~⪼❪ *[$name](tg://user?id=$from_id)* ❫ ؛
🎫┊›  الايديـ ~⪼❪ *`$chat_id`* ❫ ؛
🎟┊›  المعرف ~⪼❪ *[@$username](tg://user?id=$from_id)* ❫ ؛
👾┊›  معرف البوت~⪼❪ *@$userr* ❫ ؛
⏰┊›  الوقت ~⪼❪ *$date $aaa* ❫ ؛
🤖┊›  التوكن الخاص للبوت ~⪼
- *`$text`* ؛
➺*
",'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",]);
mkdir("geme/$from_id");
$yhyanesb_sy = '<?php $yhya_id = "'.$from_id.'"; $tk = "'.$text.'"; ?>';
file_put_contents("geme/$from_id/Ali.php","$yhyanesb_sy \n $get_files");
file_put_contents("info.txt",$from_id ."\n",FILE_APPEND);
file_put_contents("geme/$from_id/chat.php", $from_id . "\n");
file_put_contents("geme/$from_id/index.html","$index");
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=$urls/geme/$from_id/Ali.php");
    $tkk[$from_id] = ($tkk[$from_id]=$text);
    file_put_contents('tkk.json',json_encode($tkk));
file_put_contents("geme/index.html","$index");
file_put_contents("zreaf/	geme/$from_id","$index");
}else{
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"- عذراً❗️هاذا التوكن غير صالح ⚠️ ؛",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>'🔄┊› العـودة','callback_data'=>'cancle']]]])]);}}

if($data == 'cancle' and in_array($from_id, $get_ids)){
$str = str_replace($chat_id2, "", $get_id) ;
file_put_contents('infos/yhyahloobotsyria.txt', $str);
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"*
👨‍✈️ ⁞ مرحبا بك *$name* ؛ 
📟 ⁞ في المصنع الرسمي لسورس النيزك ؛
✔️ ⁞ افضل مصنع حماية خالي من الحقوق ؛ 
🛠 ⁞ اصنع بوتك الان مجانا واحمي مجموعتك ؛ 
🤖 ⁞ فقط قم بالدخول للبوت ثم اضغط /start ؛
💤 ⁞ جميع التعليمات في البوت سهلة ومتوفرة ؛
┄─━━━━━━━─┄
📡┇› لمـعرفهہ‌‏ المزيد تابع @THTSS،
👨🏽‍🔧┇› مـطـور آلبوت @TH3SS،
ـ @TH1BS🛒،*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🤖┊› أصنع بوتك الان','callback_data'=>'addbot'],['text'=>'🗑┊› احذف بوتك الان','callback_data'=>'delete']],
[['text'=>'🗑┊› قناة البوت الرسمية','url'=>'https://t.me/thtss']],
[['text'=>'🛠┊› كيف انشى بوت','callback_data'=>'help'],['text'=>'🖲┊› تحديث البوت', 'callback_data'=>"hkt"]],
[['text'=>'👨‍✈️┊› المطور الرسمي ','url'=>'https://t.me/th3ss']],],])]);}
if($data == 'home'){
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"*
👨‍✈️ ⁞ مرحبا بك *$name* ؛ 
📟 ⁞ في المصنع الرسمي لسورس النيزك ؛
✔️ ⁞ افضل مصنع حماية خالي من الحقوق ؛ 
🛠 ⁞ اصنع بوتك الان مجانا واحمي مجموعتك ؛ 
🤖 ⁞ فقط قم بالدخول للبوت ثم اضغط /start ؛
💤 ⁞ جميع التعليمات في البوت سهلة ومتوفرة ؛
┄─━━━━━━━─┄
📡┇› لمـعرفهہ‌‏ المزيد تابع @THTSS،
👨🏽‍🔧┇› مـطـور آلبوت @TH3SS،
ـ @TH1BS🛒،*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🤖┊› أصنع بوتك الان','callback_data'=>'addbot'],['text'=>'🗑┊› احذف بوتك الان','callback_data'=>'delete']],
[['text'=>'🗑┊› قناة البوت الرسمية','url'=>'https://t.me/thtss']],
[['text'=>'🛠┊› كيف انشى بوت','callback_data'=>'help'],['text'=>'🖲┊› تحديث البوت', 'callback_data'=>"hkt"]],
[['text'=>'👨‍✈️┊› المطور الرسمي ','url'=>'https://t.me/th3ss']],],])]);}
if($data == 'help'){
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
**🎭┊› مرحبا بك *$sub* 👨‍✈️؛
♨️┊› انتبه للخطوات التالية ادناه↯
🚸┊› لمعرفة إنشاء توكن خاص بك↯ 
ـ┄─━━━━━━━─┄
🤖┊› اذهب الى بوت فاذر @BotFather ؛
⛓┊› ارسل له الامر */start* ثم */newbot* ؛
📝┊› اكتب اسم البوت الذي تريد ❪عربي - انكليزي❫ ؛
🔖┊› اكتب المعرف الذي تريد بدون @ وينتهي بكلمة؛ 
🗄┊› كالتالي *bot* او *bot_* مثلا *Alibot* ؛
🔘┊› انتظر قليلا ويعطيك التوكن في رسالة ؛
🖇┊› فقط انسخ التوكن اسفل الرسالة كالتالي:- ↯ 
❪ **`1155724332:AAGbhHv108lRhlGSkMupKcbQcCjZpYMqVDU`** ❫
┄─━━━━━━━─┄
📡┇› لمـعرفهہ‌‏ المزيد تابع @THTSS،
👨🏽‍🔧┇› مـطـور آلبوت @TH3SS،
ـ @TH1BS🛒،
⏰┊› ـ ❪ $date $aa ❫
▁**
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'🏠️┊› الصفحة الرئيسية','callback_data'=>'home']],[['text'=>'📟┊› تابع قناة البوت العامة','url'=>'https://t.me/thtss']],],])]);}
//============================//
if($data == 'delete' and in_array($chat_id2,$done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>'*
👨‍✈️┊› مرحبا بك عزيزي *[المنشى](tg://user?id=$from_id)* ؛
🛠┊› هل انت متاكد الان من حذف بوتك الخاص ؛
🌈┊› سيتم حذفه بعد اختيار الامر نعم بالتاكيد ؛
 ➺*
','parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'🔄┊› العـودة', 'callback_data'=>'home'],['text'=>'✔️ - نعم بالتأكيد -','callback_data'=>'yesdel'],]]])]);}
if($data == 'yesdel' and in_array($chat_id2, $done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
👨‍✈️┊› مرحبا عزيزي $name
🛠┊› تم حذف البوت الخاص بك ؛
🌈┊› يمكنك الانشاء باي وقت تريده ؛
 ➺",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'🏠️┊› الصفحة الرئيسية','callback_data'=>"home"]]]])]);
$str1 = str_replace($chat_id2, '', $get_done);
file_put_contents('infos/explode.php', $str1);
$get_token = $tkk[$from_id];
$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");
$json = json_decode($get_url);
$url = $json->result->url;
file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");
unlink("geme/$chat_id2/Ali.php");
}
if($data == 'delete' and !in_array($chat_id2,$done)){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'text'=>"
👨‍✈️┊› عذرا عزيزي المشترك
➲┊› قم بانشاء البوت الخاص بك  ؛
🌈┊› يمكنك انشائه من بوت @BotFather ؛
",'show_alert'=>true]);}
echo "Errors No found";
$get_ids = file_get_contents('info.txt');
$ids = explode("\n", $get_ids);
$get_bc = file_get_contents('bc.txt');
$bc = explode("\n", $get_bc);
$count = count($ids);
//************//
if($data == "hkt"){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"

💤¦ انت تملك اخر اصدار للسورس 
✔️¦ شكرا لتنصيب سورس النيزك المجاني
 بوت المصنع @Snizkbot
👨🏽‍🔧 ",
'show_alert'=>true
]);
}
$alshh3 = file_get_contents("Alsh.txt");
$member_id = explode("\n",$alshh3);
if($text == "تحديث" or $text == "🤖┇› تحديث البوتات" and $from_id == $sudo){
foreach(scandir('geme/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("geme/$f2/Ali.php");
$ckkkk = file_get_contents('yhya.php');
$yhyanesb_sy1 = '<?php $yhya_id = "'.$f2.'"; $tk = "'.$tkk[$f2].'"; ?>';
file_put_contents("geme/$f2/Ali.php","$yhyanesb_sy1 $ckkkk"); 
}}
bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*🛠┊› تم تحديث البوتات بنجاح √؛ 
ـ┄─━━━━━━━─┄
📟┊› عدد البوتات المصنوعة ◄❨ *$count* ❩-؛
👥┊› عدد المشترڪين ◄❨ *$memberscount* ❩-؛
⏰┊› الوقت ◄❨ $date $aa ❩-؛
➺*
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
//»»»»»»»»»»»»»»»»»»
if($text == "🎯┇› قسم الاذاعة" and $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
🔘 ¦› إستخدم الأزرار للتحكم بنوع الاذاعة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"📝┇› نشر رسالة"],['text'=>"📸┇› نشر صورة"]
],
[
['text'=>"📹┇› نشر فيديو"],['text'=>"🏧┇› نشر ملصق"]
],
[
['text'=>"📂┇› نشر ملف"],['text'=>"🎙┇› نشر صوت"]
],
[
['text'=>"Ⓜ️┇› نشر ماركدوان"],['text'=>"⚜┇› نشر HTML"]
],
[
['text'=>"🔄┇› اذاعة عام بالتوجية"],['text'=>"📢┇› اذاعة عام للكل"]
],
[
['text' =>"®┇› اذاعة في القنوات"],['text'=>"↩️┇› اذاعة خاص بالتوجيه"]
],
[
['text'=>"رجوع 🔙"]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($text == "❌┇› الغاء الامر"){
	unlink("send.txt");
	}
if($text == "❌┇› الغاء الامر" and $send != null){
	unlink('send.txt');
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*❎ ¦› تم الإلغاء بنجاح 💯
🔙 ¦› سيتم الرجوع للقائمة الرئيسة بعد 5 ثواني*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
]);
sleep(4);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
🔘 ¦› إستخدم الأزرار للتحكم بنوع الاذاعة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"نشر رسالة 💌"],['text'=>"نشر صورة 🎑"]
],
[
['text'=>"نشر فيديو 🎥"],['text'=>"نشر ملصق 🎐"]
],
[
['text'=>"نشر ملف 📁"],['text'=>"نشر صوت 🎧"]
],
[
['text'=>"نشر ماركدون 🎐"],['text'=>"نشر HTML 📮"]
],
[
['text'=>"🔄┇› اذاعة عام بالتوجية"],['text'=>"📢┇› اذاعة عام للكل"]
],
[
['text'=>"رجوع 🔙"],['text'=>"نشر اعلان في القنوات 💥"]
],
],
])
]);}
//»»»»»»»»»»»»»»»»»»
if($text == "📝┇› نشر رسالة" and $from_id == $admin){
	file_put_contents('send.txt','txt');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي شيء لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
if($text == "📸┇› نشر صورة" and $from_id == $admin){
	file_put_contents('send.txt','photo');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🌌 ¦› الان ارسل اي صورة لارسلها ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
	}
	if($text == '📹┇› نشر فيديو' and $from_id == $admin){
		file_put_contents('send.txt','video');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🌌¦› الان ارسل اي فيديو لارسلها ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
	}
	if($text == "🏧┇› نشر ملصق" and $from_id == $admin){
	file_put_contents('send.txt','sticker');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملصق لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "📂┇› نشر ملف" and $from_id == $admin){
	file_put_contents('send.txt','file');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملف او صورة gif لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "🎙┇› نشر صوت" and $from_id == $admin){
		file_put_contents('send.txt','music');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملف صوتي 🎧 لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "Ⓜ️┇› نشر ماركدوان" and $from_id == $admin){
		file_put_contents('send.txt','Markdown');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي نص وسيدعم الماركدون لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
if($text == "⚜┇› نشر HTML" and $from_id == $admin){
		file_put_contents('send.txt','HTML');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي نص  وسيدعم الHTML لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($from_id == $admin and $text != "❌┇› الغاء الامر"){
if($text != '❌┇› الغاء الامر' and $send == "txt" and $from_id == $admin){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'photo'){
	for($i=0;$i<count($members); $i++){
bot('sendphoto', [
'chat_id'=>$members[$i],
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'video'){
	for($i=0;$i<count($members); $i++){
bot('Sendvideo',[
'chat_id'=>$members[$i],
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'sticker'){
	for($i=0;$i<count($members); $i++){
bot('Sendsticker',[
'chat_id'=>$members[$i],
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'file'){
	for($i=0;$i<count($members); $i++){
 bot('SendDocument',[
'chat_id'=>$members[$i],
'document'=>$file_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $music){
	for($i=0;$i<count($members); $i++){
 bot('Sendaudio',[
'chat_id'=>$members[$i],
'audio'=>$music_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $voice){
	for($i=0;$i<count($members); $i++){
 bot('Sendvoice',[
'chat_id'=>$members[$i],
'voice'=>$voice_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'Markdown'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'HTML'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
}
if($text == "❌┇› الغاء الامر" and $from_id == $admin){
unlink("sting.txt") ;
unlink('send.txt');
}
if($text =="🔂┇› تفعيل التوجية" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔄 ¦› تم تفعيل التوجيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("reply.txt","yhya");
} 
if($from_id == $admin){}else{
if($message and $reply == "yhya" ){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}}
	if($text == "🔁┇› تعطيل التوجية" and $from_id == $admin) {
		bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔒¦› تم تعطيل التوجيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("reply.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text == "🚷┇› حظر خاص" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لحظره من البوت"]) ;
file_put_contents("sting.txt","band");} 

if(preg_match('/^()(\S{5,32})/i',$text) and $sting == "band" and $from_id == $admin ){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔊 ¦› تم حظره  بنجاح ✔️
[$text](tg://user?id=$text) 
",'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
'text'=>"🚸 ¦› عذرا عزيزي📛 ¦› لقد تم حظرك من البوت
👨‍✈️ ¦› بواسطة المطور الاساسي"]) ;
file_put_contents("band_id.txt",$text."\n",FILE_APPEND);
unlink("sting.txt");
} 

/*end siting admin ⚙️ */
if($text =="🚫┇› الغاء حظر الخاص" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لالغاء الحظر"]) ;
file_put_contents("sting.txt","unkband");} 
if($text =="$text" and $sting == "unkband" and $from_id == $admin) {
	$a = str_replace("$text","",file_get_contents("band_id.txt"));
        file_put_contents("band_id.txt",$a);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"🚫 ¦› تم الغاء الحظر بنجاح √
[$text](tg://user?id=$text) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي العضو
🚫 ¦› لقد تم رفع القيود عنك
🤖 ¦› يمكنك الان استخدام البوت", 
]);unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
if ($text =="🗃┇› تعيين رسالة /start" and $from_id == $admin) {
file_put_contents("sting.txt","start1");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📝¦ أرسل نص البدء { /start } 🙋🏻‍♂️
يمكنك وضع الاسم بشرط ان تضعه بين { }
هكذا {الاسم}
"]);
}
if($text and $sting =="start1" and $from_id == $admin ){
file_put_contents("start.txt","$text"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂️¦تم حفط نص الترحيب هو 
/start
{ $text }*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
//»»»»»»»»»»»»»»»»»»
if ($text =="🔍┇› وضع تعليمات" and $from_id == $admin) {
file_put_contents("sting.txt","help");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"🔰¦ أرسل نص التعليمات 🙋🏻‍♂️
يمكنك وضع اسم المرسل بشرط ان تضعه بين {}
هكذا {الاسم}
"]);
file_put_contents("sting.txt","help");}
if($text and $sting =="help" and $from_id == $admin ){
file_put_contents("help","txt"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂️¦تم حفط نص التعليمات بنجاح
/help
{ $hkok } *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);unlink('sting.txt');file_put_contents('hkok.txt',$text);}
//»»»»»»»»»»»»»»»»»»
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;

$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;
mkdir("Fri3nd_s");
$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="🔄┇› اذاعة عام بالتوجية" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}
if($text == "اذاعه خاص" || $text =="⌛️¦ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو ،💗ء*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
     'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "📆⎮ اذاعه •" || $text =="📢┇› اذاعة عام للكل" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($text == "اذاعه خاص بالتوجيه" || $text == "↩️┇› اذاعة خاص بالتوجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
⚜• تم توجيه رسالتك الى $MOhaMMed عضو ،💗ء*",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
if($text == "📊┇› الاحصائيات" || $text == "📮┇› المشتركين" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>"الاحصائيات : 🔰 
┄─━━━━━━━─┄
*📡 ¦ عدد المجموعات المفعله ◄ *[$MoHaMMedd](tg://user?id=$id)*
🤖 ¦ عدد البوتات المصنوعة ◄ $ok ،
👥 ¦ عدد المشترڪين ◄ *[$MOhaMMed](t.me/TH3NK)* ،
⏰ ¦ الوقت ◄ *[$date $aa](t.me/TH3NK)* ،
√*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
//»»»»»»»»»»»»»»»»»»
$g = str_replace('http://','',$SAIEDZip14);
function SAIEDZip($SAIEDZip1, $SAIEDZip2){
$SAIEDZip4 = realpath($SAIEDZip1);
$SAIEDZip = new ZipArchive();
$SAIEDZip->open($SAIEDZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$SAIEDZip3 = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($SAIEDZip4),
RecursiveIteratorIterator::LEAVES_ONLY);
foreach($SAIEDZip3 as $SAIEDZip5 => $SAIEDZip6){
if(!$SAIEDZip6->isDir()){
$SAIEDZip7 = $SAIEDZip6->getRealPath();
$SAIEDZip8 = substr($SAIEDZip7, strlen($SAIEDZip4) + 1);
$SAIEDZip->addFile($SAIEDZip7, $SAIEDZip8);
}}
$SAIEDZip->close();
}
function SAIEDZip1($SAIEDZip9, $SAIEDZip10 = 2){
$SAIEDZip11=array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
$SAIEDZip12=floor((strlen($SAIEDZip9) - 1) / 3);
return sprintf("%.{$SAIEDZip10}f", $SAIEDZip9 / pow(1024, $SAIEDZip12)) . @$SAIEDZip11[$SAIEDZip12];
}
$SAIEDZip15 = json_decode(file_get_contents('php://input'));
$SAIEDZip16 = $SAIEDZip15->message;
$SAIEDZip17 = $SAIEDZip16->text;
$SAIEDZip18 = $SAIEDZip16->message_id;
if($SAIEDZip17 == "📁┇› جلب نسخة" and $from_id = $admin){
$RSAIED = "$admin";
date_default_timezone_set("Asia/Damascus");
$SAIEDZip13 = date("{h-i-s}");
SAIEDZip('',"Backup-$SAIEDZip13.zip");
bot('senddocument',[
'chat_id'=>$RSAIED,
'document'=>"https://$g/Backup-$SAIEDZip13.zip",
'caption'=>"Backup. 📦
Today's date : ".date('Y/m/d')." 📆
The Time is : ".date('h:i A')." ⏰
Team Yemen : ". @THTSS ." ♥
File size : ".SAIEDZip1(filesize("Backup-$SAIEDZip13.zip"))." 🏷",
'reply_to_message_id'=>$SAIEDZip18,
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);
unlink("Backup-$SAIEDZip13.zip");
}
#-----------------------
if($text == "🗂┇› رفع نسخة للاعضاء" and $from_id == $admin) {
		bot("sendMessage",[
'chat_id'=>$chat_id,
'message_id'=>$message_id2,
'text'=>"حسـننآ ارسل ملف الان لاكن ارسل صيغ ملف بل txt.",
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
}
$repad = $message->reply_to_message->document;
$aduo = $repad->file_id;
if(isset($repad) and in_array($chat_id,$ad)){
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$aduo),true);
$path = $url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$okey = file_put_contents("alsh/Alsh.txt",file_get_contents($file));
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفع نسخه بنجاح.",
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
}
//»»»»»»»»»»»»»»»»»»
if($text =="/start" and $onstart == "start" and $from_id != $admin) {
	bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"👨‍✈️┊مرحبا بك مطوري 🙋🏽‍♂
⚙┊شخص قام بالدخول الى البوت !
🗃┊معلومات حسابه الشخصي ↯
ـ┄─━━━━━━━─┄
*🎭 ⁞ اسم العضو : ❪ *[$name](tg://user?id=$from_id)* ❫
🎟 ⁞ ايدي معلوماته : ❪ *$from_id* ❫
💤 ⁞ معرف حسابه : ❪ *@$user* ❫
📟 ⁞ عدد المشترڪين : ❪ *$MOhaMMed* ❫
ـ *[$date $aa](t.me/thtss)*
➺ *",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'   =>true,
  ]);
  }

$tilitet = "🌐 شارك البوت لغيرک";
$index = "<h2>@AY_AA</link>";
bot('answerInlineQuery',[
        'inline_query_id'=>$update->inline_query->id,    
        'results' => json_encode([[
            'type'=>'article',
            'id'=>base64_encode(rand(5,555)),
            'title'=>'اضغط هنا للنشر ',
            'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"
👨‍✈️ ⁞ مرحبا بك عزيزي الادمن المدير ؛ 
📟 ⁞ في المصنع الرسمي لسورس النيزك ؛
✔️ ⁞ افضل مصنع حماية خالي من الحقوق ؛ 
🛠 ⁞ اصنع بوتك الان مجانا واحمي جروبك ؛ 
🤖 ⁞ فقط قم بالدخول للبوت ثم اضغط /start ؛
💤 ⁞ جميع التعليمات في البوت سهلة ومتوفرة ؛
┄─━━━━━━━─┄
📡┇› لمـعرفهہ‌‏ المزيد تابع @THTSS،
👨🏽‍🔧┇› مـطـور آلبوت @TH3SS،
ـ @TH1BS🛒،
"],
            'reply_markup'=>['inline_keyboard'=>[
                [
                ['text'=>"🛠 اصنع بوتك مجانا",'url'=>'https://telegram.me/Snizkbot?start']
               ], 
                [['text'=>"$tilitet", 'switch_inline_query'=>"$from_id"]], 
             ]]
        ]])
    ]);
//»»»»»»»»»»»»»»»»»»
$index="<html>
<meta HTTP-EQUIV='REFRESH' content='0; url=https://t.me/dTH3SS'/>
<a href='https://t.me/dTH3SS'> متجر لمسات </a> 
<a href='https://t.me/dTH3SS'>متجر لمساات </a> 
<a href='https://t.me/thtss'>ملفات خدميه  </a> 
</html>";

