<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>导出简历信息</title>
</head>

<body>
<?php

$name=$_POST['name'];
$starttime=$_POST['starttime'];
$endtime=$_POST['endtime'];
$file='E:/resume/apache/htdocs/jianli/result.xls';
print $file;
if (file_exists($file)) {
    $test=unlink($file);
    print "删除成功";
    # code...
}else{
    print "无指定文件。";
}



if ($dbc=mysql_connect('127.0.0.1','root','connmysqlpass')) {
    print 'OK';
    # code...
}

if (mysql_select_db('resume',$dbc)) {
    print 'been selected.';
    # code...
}
else{
    print '未正确选择.mysql_error($dbc)';
}
mysql_query("SET NAMES 'utf8'");    //设置mysql默认utf-8


if ($name!=""&&$starttime!=""&&$endtime!=""){
    $query="SELECT a.resume_id,convert(a.laiyuan using gb2312),convert(a.xingming using gb2312),convert(a.xingbie using gb2312),a.shengri,convert(b.degree using gb2312),convert(b.cengci1 using gb2312),convert(b.school1 using gb2312),convert(b.major1 using gb2312),b.endtime1,convert(b.cengci2 using gb2312),convert(b.school2 using gb2312),convert(b.major2 using gb2312),b.endtime2,convert(b.cengci3 using gb2312),convert(b.school3 using gb2312),convert(b.major3 using gb2312),b.endtime3,convert(a.jiguan using gb2312),a.dianhua,convert(d.zhiyezige using gb2312) 
		FROM jibenxinxi a,study b,ability d
		WHERE a.resume_id=b.resume_id&&b.resume_id=d.resume_id
		AND a.xingming='$name'
		AND a.edittime>='$starttime'
		AND a.edittime<='$endtime'
		INTO OUTFILE '$file'";
}else if ($name==""&&$starttime!=""&&$endtime!=""){
    $query="SELECT a.resume_id,convert(a.laiyuan using gb2312),convert(a.xingming using gb2312),convert(a.xingbie using gb2312),a.shengri,convert(b.degree using gb2312),convert(b.cengci1 using gb2312),convert(b.school1 using gb2312),convert(b.major1 using gb2312),b.endtime1,convert(b.cengci2 using gb2312),convert(b.school2 using gb2312),convert(b.major2 using gb2312),b.endtime2,convert(b.cengci3 using gb2312),convert(b.school3 using gb2312),convert(b.major3 using gb2312),b.endtime3,convert(a.jiguan using gb2312),a.dianhua,convert(d.zhiyezige using gb2312) 
		FROM jibenxinxi a,study b,ability d
		WHERE a.resume_id=b.resume_id&&b.resume_id=d.resume_id
		AND a.edittime>='$starttime'
		AND a.edittime<='$endtime'
		INTO OUTFILE '$file'";
}else if ($name!=""&&$starttime==""&&$endtime!=""){
    $query="SELECT a.resume_id,convert(a.laiyuan using gb2312),convert(a.xingming using gb2312),convert(a.xingbie using gb2312),a.shengri,convert(b.degree using gb2312),convert(b.cengci1 using gb2312),convert(b.school1 using gb2312),convert(b.major1 using gb2312),b.endtime1,convert(b.cengci2 using gb2312),convert(b.school2 using gb2312),convert(b.major2 using gb2312),b.endtime2,convert(b.cengci3 using gb2312),convert(b.school3 using gb2312),convert(b.major3 using gb2312),b.endtime3,convert(a.jiguan using gb2312),a.dianhua,convert(d.zhiyezige using gb2312) 
		FROM jibenxinxi a,study b,ability d
		WHERE a.resume_id=b.resume_id&&b.resume_id=d.resume_id
		AND a.xingming='$name'
		AND a.edittime<='$endtime'
		INTO OUTFILE '$file'";
}else if ($name!=""&&$starttime!=""&&$endtime==""){
    $query="SELECT a.resume_id,convert(a.laiyuan using gb2312),convert(a.xingming using gb2312),convert(a.xingbie using gb2312),a.shengri,convert(b.degree using gb2312),convert(b.cengci1 using gb2312),convert(b.school1 using gb2312),convert(b.major1 using gb2312),b.endtime1,convert(b.cengci2 using gb2312),convert(b.school2 using gb2312),convert(b.major2 using gb2312),b.endtime2,convert(b.cengci3 using gb2312),convert(b.school3 using gb2312),convert(b.major3 using gb2312),b.endtime3,convert(a.jiguan using gb2312),a.dianhua,convert(d.zhiyezige using gb2312) 
		FROM jibenxinxi a,study b,ability d
		WHERE a.resume_id=b.resume_id&&b.resume_id=d.resume_id
		AND a.xingming='$name'
		AND a.edittime>='$starttime'
		INTO OUTFILE '$file'";
}else if ($name==""&&$starttime==""&&$endtime!=""){
    $query="SELECT a.resume_id,convert(a.laiyuan using gb2312),convert(a.xingming using gb2312),convert(a.xingbie using gb2312),a.shengri,convert(b.degree using gb2312),convert(b.cengci1 using gb2312),convert(b.school1 using gb2312),convert(b.major1 using gb2312),b.endtime1,convert(b.cengci2 using gb2312),convert(b.school2 using gb2312),convert(b.major2 using gb2312),b.endtime2,convert(b.cengci3 using gb2312),convert(b.school3 using gb2312),convert(b.major3 using gb2312),b.endtime3,convert(a.jiguan using gb2312),a.dianhua,convert(d.zhiyezige using gb2312) 
		FROM jibenxinxi a,study b,ability d
		WHERE a.resume_id=b.resume_id&&b.resume_id=d.resume_id
		AND a.edittime<='$endtime'
		INTO OUTFILE '$file'";
}else if ($name==""&&$starttime!=""&&$endtime==""){
    $query="SELECT a.resume_id,convert(a.laiyuan using gb2312),convert(a.xingming using gb2312),convert(a.xingbie using gb2312),a.shengri,convert(b.degree using gb2312),convert(b.cengci1 using gb2312),convert(b.school1 using gb2312),convert(b.major1 using gb2312),b.endtime1,convert(b.cengci2 using gb2312),convert(b.school2 using gb2312),convert(b.major2 using gb2312),b.endtime2,convert(b.cengci3 using gb2312),convert(b.school3 using gb2312),convert(b.major3 using gb2312),b.endtime3,convert(a.jiguan using gb2312),a.dianhua,convert(d.zhiyezige using gb2312) 
		FROM jibenxinxi a,study b,ability d
		WHERE a.resume_id=b.resume_id&&b.resume_id=d.resume_id
		AND a.edittime>='$starttime'
		INTO OUTFILE '$file'";
}else if ($name!=""&&$starttime==""&&$endtime==""){
    $query="SELECT a.resume_id,convert(a.laiyuan using gb2312),convert(a.xingming using gb2312),convert(a.xingbie using gb2312),a.shengri,convert(b.degree using gb2312),convert(b.cengci1 using gb2312),convert(b.school1 using gb2312),convert(b.major1 using gb2312),b.endtime1,convert(b.cengci2 using gb2312),convert(b.school2 using gb2312),convert(b.major2 using gb2312),b.endtime2,convert(b.cengci3 using gb2312),convert(b.school3 using gb2312),convert(b.major3 using gb2312),b.endtime3,convert(a.jiguan using gb2312),a.dianhua,convert(d.zhiyezige using gb2312) 
		FROM jibenxinxi a,study b,ability d
		WHERE a.resume_id=b.resume_id&&b.resume_id=d.resume_id
		AND a.xingming='$name'
		INTO OUTFILE '$file'";
}else
{
    $query="SELECT a.resume_id,convert(a.laiyuan using gb2312),convert(a.xingming using gb2312),convert(a.xingbie using gb2312),a.shengri,convert(b.degree using gb2312),convert(b.cengci1 using gb2312),convert(b.school1 using gb2312),convert(b.major1 using gb2312),b.endtime1,convert(b.cengci2 using gb2312),convert(b.school2 using gb2312),convert(b.major2 using gb2312),b.endtime2,convert(b.cengci3 using gb2312),convert(b.school3 using gb2312),convert(b.major3 using gb2312),b.endtime3,convert(a.jiguan using gb2312),a.dianhua,convert(d.zhiyezige using gb2312) 
		FROM jibenxinxi a,study b,ability d
		WHERE a.resume_id=b.resume_id&&b.resume_id=d.resume_id
		INTO OUTFILE '$file'";
}

if (mysql_query($query,$dbc)) {
    $file='E:/resume/apache/htdocs/jianli/result.xls';
    $fp=fopen($file, "r");
    clearstatcache();
    $file_size=filesize($file);   //pdf文件8017723

    $name='简历基本情况汇总.xls';
    $name=iconv("utf-8","gb2312",$name); /*中文名显示*/
    Header("Content-type:application/octet-stream");
    Header("Accept-Ranges:bytes");
    Header("Accept-Length:$file_size");
    Header("Content-Disposition:attachment;filename=$name");
    echo file_get_contents($file);


    # code...
}else
{
    print mysql_error($dbc);
}







/*	if ($dbc) {

		$query="SELECT a.resume_id,convert(a.laiyuan using gb2312),convert(a.xingming using gb2312),convert(a.xingbie using gb2312),a.shengri,convert(b.degree using gb2312),convert(b.cengci1 using gb2312),convert(b.school1 using gb2312),convert(b.major1 using gb2312),b.endtime1,convert(b.cengci2 using gb2312),convert(b.school2 using gb2312),convert(b.major2 using gb2312),b.endtime2,convert(b.cengci3 using gb2312),convert(b.school3 using gb2312),convert(b.major3 using gb2312),b.endtime3,convert(a.jiguan using gb2312),a.dianhua,convert(c.zhicheng using gb2312)
		FROM jibenxinxi a,study b,ability c
		WHERE a.resume_id=b.resume_id&&b.resume_id=c.resume_id
		AND a.resume_id='1'
		INTO OUTFILE 'F:/task/project/apache/upload_files/result.xls'";
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
mysql_close($dbc);


?>

</body>
</html>
