<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$yingjie=$_POST['yingjie'];
	$shenfenzheng=$_POST['shenfenzheng'];

	$dbc=mysql_connect('127.0.0.1','root','connmysqlpass');
    mysql_select_db('resume',$dbc);
    mysql_query("SET NAMES 'utf8'");

    $query= "SELECT a.resume_id,a.xingming,b.cengci1,b.cengci2,b.cengci3 
    FROM jibenxinxi a,study b 
    WHERE a.resume_id=b.resume_id 
    AND a.shenfenzheng='$shenfenzheng'";
    $result=mysql_query($query,$dbc);
    $row=mysql_fetch_array($result);
    $resume_id=$row['resume_id'];
    $xingming=$row['xingming'];
    $cengci1=$row['cengci1'];
    $cengci2=$row['cengci2'];
    $cengci3=$row['cengci3'];
/*
    $query= "SELECT resume_id,xingming FROM jibenxinxi WHERE shenfenzheng='$shenfenzheng'";
    $result=mysql_query($query,$dbc);
    $row=mysql_fetch_array($result);
    $resume_id=$row['resume_id'];
    $xingming=$row['xingming'];
*/
    $dir='./fujian/';
    $file_xingming=iconv("utf-8","gb2312",$resume_id);
    mkdir($dir.$file_xingming);
    $dir="$dir$file_xingming/";

	

	
      if ($_SERVER['REQUEST_METHOD']=='POST') {
      	if ($cengci3==NULL) {
      		if ($yingjie=='是') {
      			$xingming1=$xingming.'-照片';
        		$xingming2=$xingming.'-电子学历注册备案表';
        		$xingming3=$xingming.'-毕业证';
        		$xingming4=$xingming.'-学位证';
        		$xingming5=$xingming.'-资格证';
        		$xingming6=$xingming.'-职业证';
        		$xingming1=iconv("utf-8","gb2312",$xingming1);
        		$xingming2=iconv("utf-8","gb2312",$xingming2);
        		$xingming3=iconv("utf-8","gb2312",$xingming3);
        		$xingming4=iconv("utf-8","gb2312",$xingming4);
        		$xingming5=iconv("utf-8","gb2312",$xingming5);
        		$xingming6=iconv("utf-8","gb2312",$xingming6);
/*2017-8-16 17：45 文件命名及上传*/
      			# code...
      		}else{


      		}
      		# code...
      	}elseif ($cengci2==NULL) {
      		if ($yingjie=='是') {
      			# code...
      		}else{

      		}
      		# code...
      	}else{
      		if ($yingjie=='是') {
      			# code...
      		}else{

      		}
      	}

      	if ($yingjie=="是") {

        	$xingming1=$xingming.'-照片';
        	$xingming2=$xingming.'-电子学历注册备案表';
        	$xingming3=$xingming.'-毕业证';
        	$xingming4=$xingming.'-学位证';
        	$xingming5=$xingming.'-资格证';
        	$xingming6=$xingming.'-职业证';
        	$xingming1=iconv("utf-8","gb2312",$xingming1);
        	$xingming2=iconv("utf-8","gb2312",$xingming2);
        	$xingming3=iconv("utf-8","gb2312",$xingming3);
        	$xingming4=iconv("utf-8","gb2312",$xingming4);
        	$xingming5=iconv("utf-8","gb2312",$xingming5);
        	$xingming6=iconv("utf-8","gb2312",$xingming6);
        	print $dir;
        	if(!empty($_FILES['zhaopian']['tmp_name'])){
        		move_uploaded_file($_FILES['zhaopian']['tmp_name'],"$dir$xingming1.jpg");
        		$query="UPDATE study SET zhaopian='是' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}else{
        		$query="UPDATE study SET zhaopian='否' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}
        	if(!empty($_FILES['xuelizhuce']['tmp_name'])){
        		move_uploaded_file($_FILES['xuelizhuce']['tmp_name'],"$dir$xingming2.pdf");
        		$query="UPDATE study SET xuelizhuce='是' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}else{
        		$query="UPDATE study SET xuelizhuce='否' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}
        	if(!empty($_FILES['biyezheng']['tmp_name'])){
        		move_uploaded_file($_FILES['biyezheng']['tmp_name'],"$dir$xingming3.jpg");
        		$query="UPDATE study SET biyezheng='是' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}else{
        		$query="UPDATE study SET biyezheng='否' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}
        	if(!empty($_FILES['xueweizheng']['tmp_name'])){
        		move_uploaded_file($_FILES['xueweizheng']['tmp_name'],"$dir$xingming4.jpg");
        		$query="UPDATE study SET xueweizheng='是' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}else{
        		$query="UPDATE study SET xueweizheng='否' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}
        	if(!empty($_FILES['zigezheng']['tmp_name'])){
        		move_uploaded_file($_FILES['zigezheng']['tmp_name'],"$dir$xingming5.jpg");
        		$query="UPDATE study SET zigezheng='是' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}else{
        		$query="UPDATE study SET zigezheng='否' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}
        	if(!empty($_FILES['zhiyezheng']['tmp_name'])){
        		move_uploaded_file($_FILES['zhiyezheng']['tmp_name'],"$dir$xingming6.jpg");
        		$query="UPDATE study SET zhiyezheng='是' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}else{
        		$query="UPDATE study SET zhiyezheng='否' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}
        	$query="UPDATE study SET xueli='无' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc); 
        
      		# code...
      	}elseif ($yingjie=="否") {
      		$xingming1=$xingming.'-照片';
        	$xingming2=$xingming.'-学籍在线验证报告';
        	$xingming3=$xingming.'-资格证';
        	$xingming4=$xingming.'-职业证';
        	$xingming1=iconv("utf-8","gb2312",$xingming1);
        	$xingming2=iconv("utf-8","gb2312",$xingming2);
        	$xingming3=iconv("utf-8","gb2312",$xingming3);
        	$xingming4=iconv("utf-8","gb2312",$xingming4);
        	if(!empty($_FILES['zhaopian']['tmp_name'])){
        		move_uploaded_file($_FILES['zhaopian']['tmp_name'],"$dir$xingming1.jpg");
        		$query="UPDATE study SET zhaopian='是' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}else{
        		$query="UPDATE study SET zhaopian='否' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}
        	if(!empty($_FILES['xueli']['tmp_name'])){
        		move_uploaded_file($_FILES['xueli']['tmp_name'],"$dir$xingming2.pdf");
        		$query="UPDATE study SET xueli='是' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}else{
        		$query="UPDATE study SET xueli='否' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}
        	if(!empty($_FILES['zigezheng']['tmp_name'])){
        		move_uploaded_file($_FILES['zigezheng']['tmp_name'],"$dir$xingming3.jpg");
        		$query="UPDATE study SET zigezheng='是' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}else{
        		$query="UPDATE study SET zigezheng='否' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}
        	if(!empty($_FILES['zhiyezheng']['tmp_name'])){
        		move_uploaded_file($_FILES['zhiyezheng']['tmp_name'],"$dir$xingming4.jpg");
        		$query="UPDATE study SET zhiyezheng='是' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}else{
        		$query="UPDATE study SET zhiyezheng='否' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc);
        	}
        	$query="UPDATE study SET xuelizhuce='无',biyezheng='无'zigezheng='无' WHERE resume_id=$resume_id";
        		mysql_query($query,$dbc); 


      		# code...
      	}
        
        # code...
      }
   
 
mysql_close($dbc);
?>

</body>
</html>
