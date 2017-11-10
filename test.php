<?php
$dbc=mysql_connect('127.0.0.1','root','connmysqlpass');
mysql_select_db('resume',$dbc);
mysql_query("SET NAMES 'utf8'");

$mysql="SELECT * FROM zhuanxiang WHERE shaixuan_id=(SELECT MAX(shaixuan_id) FROM zhuanxiang)";
if ($result=mysql_query($mysql,$dbc)){
   print "aaaaaaaaaaaaaaaaaaaa";
}
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 9:10
 */
?>