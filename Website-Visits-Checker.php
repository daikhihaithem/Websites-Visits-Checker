<html>
<head><title> Website Visits Checker : Daikhi</title>
<style type="text/css">
body{
   background-color: #f5f9fd;
   font-family: courier new;
   font-size:11px;
   color:#1b2653;
   scrollbar-face-color: #FFFFFF;
   scrollbar-highlight-color: #000000;
   scrollbar-shadow-color: #000000;
   scrollbar-3dlight-color: #FFFFFF;
   scrollbar-arrow-color: #FFFFFF;
   scrollbar-track-color: #FFFFFF;
   scrollbar-darkshadow-color: #FFFFFF;
}
input,textarea{
   font-family: courier new;
   font-size:20px;
   color:#1b2653;
   background-color: #f5f9fd;
   border:2px solid #1b2653;
}
</style>
</head>
<body>
<center>
<h2>Website Visits Checker c0oded by Daikhi</h2><br>

<form name="" method="post">
<textarea name="logins" class="input" cols="50"  rows="10"></textarea><br><h4>Copyright &copy;  2019 by Daikhi</h4><br>
<input type="submit" value="Check!">
</form>
<?php
								/////////////////////DEVELOPED BY : ## Daikhi ## \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
				//________________________________________________\\


				
error_reporting(0);
set_time_limit(0);

if(isset($_POST['logins'])){
   $logins = trim($_POST['logins']);
   flush(); ob_flush();
   $logins = split("\n", $logins);
   $jum =  count($logins);
   flush(); ob_flush();
   print "<hr><b>Checking ".$jum." target now...<br>Please wait...</b><br>";
   flush(); ob_flush();
   for($x = 0; $x < $jum; $x++) {
      $logins = str_replace(" ", "", $logins);
      $logins = str_replace("\r", "", $logins);
      $logins = str_replace("\n", "", $logins);
      list($cc) = split(":", $logins[$x]);
      $num = $x + 1;
     
      flush(); ob_flush();
	  
	 





$a = _curl($cc,'','');



$s=round($a['visits'][0]['visits']);



echo $cc." <span style=Color:red><strong>".$s."</strong></span><br>";










ob_flush();
}}


function _curl($url,$post,$cabesalho){
require('key.php');



$requesturl='https://api.similarweb.com/v1/website/'.$url.'/total-traffic-and-engagement/visits?api_key='.$key.'&main_domain_only=false&granularity=monthly';
$ch=curl_init($requesturl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$cexecute=curl_exec($ch);
curl_close($ch);
$result = json_decode($cexecute,true);

curl_close($ch);
return $result;
}

/// Final funР“В§Р“Р€o Curl
function GetStr($string, $start, $end)
{
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

?>
</center>