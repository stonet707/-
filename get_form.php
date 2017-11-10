<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3org/1999/xhtml" xml:lang"en" lang="en">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>处理表单</title>
	</head>
<pre>
	<body>
<?php
    
//  header("Location:fujianshangchuan.php?userid=$shenfenzheng&&yingjie=$yingjie");

    $gangwei=$_POST['gangwei'];
    $xingming=$_POST['xingming'];
    $xingbie=$_POST['xingbie'];
    $shenfenzheng=$_POST['shenfenzheng'];
    $shengri=$_POST['shengri'];
    $minzu=$_POST['minzu'];
    $sheng=$_POST['sheng'];
    $shi=$_POST['shi'];
    $jiguan=$sheng.$shi;
    $yingjie=$_POST['yingjie'];
    $dianhua=$_POST['dianhua'];
    $youjian=$_POST['youjian'];
    $dizhi=$_POST['dizhi'];
    $weixin=$_POST['weixin'];
    date_default_timezone_set('Asia/Shanghai');
    $edittime=date('Y-m-d H:i:s');

    $laiyuan="网络";
    $zhuangtai="未导出";




    $cengci1=$_POST['cengci1'];
    $starttime1=$_POST['starttime1'];
    $endtime1=$_POST['endtime1'];
    $school1=$_POST['school1'];
    $major1=$_POST['major1'];
    $xingzhi1=$_POST['xingzhi1'];
/*    print "$cengci1</br>$starttime1</br>$endtime1</br>$school1</br>$major1</br>$xingzhi1</br>";
*/    
    $cengci2=$_POST['cengci2'];
    $starttime2=$_POST['starttime2'];
    $endtime2=$_POST['endtime2'];
    $school2=$_POST['school2'];
    $major2=$_POST['major2'];
    $xingzhi2=$_POST['xingzhi2'];

    $cengci3=$_POST['cengci3'];
    $starttime3=$_POST['starttime3'];
    $endtime3=$_POST['endtime3'];
    $school3=$_POST['school3'];
    $major3=$_POST['major3'];
    $xingzhi3=$_POST['xingzhi3'];
    $degree=$_POST['degree'];

/*    print "$cengci2</br>$starttime2</br>$endtime2</br>$school2</br>$major2</br>$xingzhi2</br>";
    print "$cengci3</br>$starttime3</br>$endtime3</br>$school3</br>$major3</br>$xingzhi3</br>";
*/
    $getwork1=$_POST['getwork1'];
    $endwork1=$_POST['endwork1'];
    $danwei1=$_POST['danwei1'];
    $keshi1=$_POST['keshi1'];
    $zhiwu1=$_POST['zhiwu1'];
    $comment1=$_POST['comment1'];
/*    print "$getwork1</br>$endwork1</br>$danwei1</br>$keshi1</br>$zhiwu1</br>$comment1</br>";
*/
    $getwork2=$_POST['getwork2'];

    $endwork2=$_POST['endwork2'];
    $danwei2=$_POST['danwei2'];
    $keshi2=$_POST['keshi2'];
    $zhiwu2=$_POST['zhiwu2'];
    $comment2=$_POST['comment2'];
/*    print "$getwork2</br>$endwork2</br>$danwei2</br>$keshi2</br>$zhiwu2</br>$comment2</br>";
*/
    $getwork3=$_POST['getwork3'];
    $endwork3=$_POST['endwork3'];
    $danwei3=$_POST['danwei3'];
    $keshi3=$_POST['keshi3'];
    $zhiwu3=$_POST['zhiwu3'];
    $comment3=$_POST['comment3'];
/*    print "$getwork3</br>$endwork3</br>$danwei3</br>$keshi3</br>$zhiwu3</br>$comment3</br>";
*/
    $zhicheng=$_POST['zhicheng'];
    $qudetime=$_POST['qudetime'];
    $zhuan_ye=$_POST['zhuan_ye'];
    $techang=$_POST['techang'];
    $zhiyezige=$_POST['zhiyezige'];
    $startjinxiu=$_POST['startjinxiu'];
    $endjinxiu=$_POST['endjinxiu'];
    $miaoshu=$_POST['miaoshu'];


    $dbc=mysql_connect('127.0.0.1','root','connmysqlpass');
    mysql_select_db('resume',$dbc);

	mysql_query("SET NAMES 'utf8'");    //设置mysql默认utf-8

	

//重置数据表

/*	$query="TRUNCATE TABLE jibenxinxi";
	mysql_query($query,$dbc);
	$query="TRUNCATE TABLE study";
	mysql_query($query,$dbc);
	$query="TRUNCATE TABLE work";
	mysql_query($query,$dbc);
	$query="TRUNCATE TABLE ability";
	mysql_query($query,$dbc);
*/


/*	$judge="SELECT COUNT(*) FROM jibenxinxi WHERE shenfenzheng=$shenfenzheng";
	if ($judge1=mysql_query($judge,$dbc)) {
		$query="DELETE a.*,b.*,c.*,d.* 
		FROM jibenxinxi a,study b,work c,ability d 
		WHERE a.resume_id=b.resume_id
		AND b.resume_id=c.resume_id
		AND c.resume_id=d.resume_id
		AND a.shenfenzheng='$shenfenzheng'";
		mysql_query($query,$dbc);
		# code...
	}

*/
    $mysql="SELECT * FROM zhuanxiang WHERE shaixuan_id=(SELECT MAX(shaixuan_id) FROM zhuanxiang)";
    $result=mysql_query($mysql,$dbc);
    $row=mysql_fetch_array($result);
    $shaixuan_time=$row['nianling'];
    $str=substr($shenfenzheng,6,8);
    $str=date("Y-m-d",strtotime($str));
    if ($str<$shaixuan_time){

        print "<script type='text/javascript'>
            alert('本次招聘要求年龄为$shaixuan_time,您的年龄不符合要求。');
            /*2017-10-8下午*/
        </script>";



    }

    $query="SELECT resume_id FROM jibenxinxi WHERE xingming='$xingming' AND shenfenzheng='$shenfenzheng'";
    if ($result=mysql_query($query,$dbc)){
        $row=mysql_fetch_array($result);
        $resume_id=$row['resume_id'];


    }









//插入基本信息

    $query="UPDATE jibenxinxi SET gang='$gang',xingbie='$xingbie',shengri='$shengri',minzu='$minzu',yingjie='$yingjie',
youjian='$youjian',dianhua='$dianhua',dizhi='$dizhi',jiguan='$jiguan',laiyuan='$laiyuan',zhuangtai='$zhuangtai',edittime='$edittime',weixin='$weixin'
WHERE resume_id='$resume_id'";

    /*2017-9-26下午*/
        mysql_query($query,$dbc);

		$query= "SELECT resume_id FROM jibenxinxi WHERE shenfenzheng='$shenfenzheng' AND xingming='$xingming'";
		$result=mysql_query($query,$dbc);
		$row=mysql_fetch_array($result);
		$resume_id=$row['resume_id'];



//插入学习经历
		if ($cengci1!='未选择') {
			$query="INSERT INTO study(resume_id,cengci1,starttime1,endtime1,school1,major1,xingzhi1,degree) VALUES ('$resume_id','$cengci1','$starttime1','$endtime1','$school1','$major1','$xingzhi1','$degree')";
            mysql_query($query,$dbc);
			# code...
		}
		if ($cengci2!='未选择') {
			$query="UPDATE study SET cengci2='$cengci2',starttime2='$starttime2',endtime2='$endtime2',school2='$school2',major2='$major2',xingzhi2='$xingzhi2' WHERE resume_id=$resume_id";
            mysql_query($query,$dbc);
			# code...
		}
		if ($cengci3!='未选择') {
			$query="UPDATE study SET cengci3='$cengci3',starttime3='$starttime3',endtime3='$endtime3',school3='$school3',major3='$major3',xingzhi3='$xingzhi3' WHERE resume_id=$resume_id";
            mysql_query($query,$dbc);
			# code...
		}


//插入工作经历
		
		


		if ($getwork1!=NULL) {
			$query="INSERT INTO work(resume_id,getwork1,endwork1,danwei1,keshi1,zhiwu1,comment1) VALUES ('$resume_id','$getwork1','$endwork1','$danwei1','$keshi1','$zhiwu1','$comment1')";
			mysql_query($query,$dbc);
			# code...
		}else{
			$query="INSERT INTO work(resume_id,comment1) VALUES ('$resume_id','$comment1')";
			mysql_query($query,$dbc);
		}
		if ($getwork2!=NULL) {
			$query="UPDATE work SET getwork2='$getwork2',endwork2='$endwork2',danwei2='$danwei2',keshi2='$keshi2',zhiwu2='$zhiwu2',comment2='$comment2' WHERE resume_id=$resume_id";
			mysql_query($query,$dbc);
			# code...
		}
		if ($getwork3!=NULL) {
			$query="UPDATE work SET getwork3='$getwork3',endwork3='$endwork3',danwei3='$danwei3',keshi3='$keshi3',zhiwu3='$zhiwu3',comment3='$comment3' WHERE resume_id=$resume_id";
			mysql_query($query,$dbc);
			# code...
		}
		
//插入专业能力信息
		if ($zhicheng!=NULL&&$startjinxiu!=NULL) {
			$query="INSERT INTO ability (resume_id,zhicheng,qudetime,zhuan_ye,techang,startjinxiu,endjinxiu,miaoshu,zhiyezige) VALUES ('$resume_id','$zhicheng','$qudetime','$zhuan_ye','$techang','$startjinxiu','$endjinxiu','$miaoshu','$zhiyezige')";
			mysql_query($query,$dbc);
			}
		else if ($zhicheng!=NULL) {
			$query="INSERT INTO ability (resume_id,zhicheng,qudetime,zhuan_ye,techang,zhiyezige) VALUES ('$resume_id','$zhicheng','$qudetime','$zhuan_ye','$techang','$zhiyezige')";
			mysql_query($query,$dbc);

		}
		else if ($startjinxiu!=NULL) {
			$query="INSERT INTO ability (resume_id,startjinxiu,endjinxiu,miaoshu) VALUES ('$resume_id','$startjinxiu','$endjinxiu','$miaoshu')";
			mysql_query($query,$dbc);
			# code...
		}else{
			$miaoshu="专业能力信息未填写";
			$query="INSERT INTO ability (resume_id,miaoshu) VALUES ('$resume_id','$miaoshu')";
			mysql_query($query,$dbc);
		}
/*		

		

		if ($dbc) {
			$query="SELECT resume_id,convert(laiyuan using gb2312),convert(gang using gb2312),convert(xingming using gb2312),convert(xingbie using gb2312),shengri FROM jibenxinxi INTO OUTFILE 'F:/task/project/apache/upload_files/result.xls' ";
			print "test1</br>";
			if (mysql_query($query,$dbc)) {
				print "成功导出";
				# code...
			}else
			{
				print mysql_error($dbc);
			}
		}
*/


/*
$dir='../fujian/';
	$file_xingming=iconv("utf-8","gb2312",$xingming);
	$file_name=$file_xingming.$shenfenzheng;
	print $file_name;
    mkdir($dir.$file_name);
    print "创建目录成功。";

*/








mysql_close($dbc);




?>
	</body>
</pre>
</html>