<?php
$web_url = 'http:120.194.141.154:8080';
$ch = curl_init($web_url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec($ch);
curl_close($ch);
if($contents === false){
    header("Location:http://192.168.13.252");
}else{
    header("Location:http://120.194.141.154:8080");
}


?>

