<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>查看附件</title>
    <script type="text/javascript" src="js/pdfobject.js"></script>
</head>

<?php



    $id=$_GET['id'];
    $resume_id=$_GET['resume_id'];
    $dir='./fujian/';
    $file_xingming=iconv("utf-8","gb2312",$resume_id);
    $dir="$dir$file_xingming/";



    $dbc=mysql_connect('127.0.0.1','root','connmysqlpass');
    mysql_select_db('resume',$dbc);
    mysql_query("SET NAMES 'utf8'");

    $query="SELECT a.*,b.*
    FROM jibenxinxi a,study b
    WHERE a.resume_id=b.resume_id
    AND a.resume_id=$resume_id";

    $result=mysql_query($query,$dbc);
    $row=mysql_fetch_array($result);
    $xingming=$row['xingming'];



    $zhiyezige=$xingming.'-执业证.jpg';
    $zigezheng=$xingming.'-资格证.jpg';
    $zhaopian=$xingming.'-照片.jpg';
    $shenfenzheng=$xingming.'-身份证.jpg';
    $xuelizhuce1=$xingming.'-第一学历电子学历注册备案表.pdf';
    $biyezheng1=$xingming.'-第一学历毕业证.jpg';
    $xueweizheng1=$xingming.'-第一学历学位证.jpg';
    $xueli1=$xingming.'-第一学历学籍在线验证报告.pdf';

    $xuelizhuce2=$xingming.'-中间学历电子学历注册备案表.pdf';
    $biyezheng2=$xingming.'-中间学历毕业证.jpg';
    $xueweizheng2=$xingming.'-中间学历学位证.jpg';

    $xuelizhuce3=$xingming.'-最高学历电子学历注册备案表.pdf';
    $biyezheng3=$xingming.'-最高学历毕业证.jpg';
    $xueweizheng3=$xingming.'-最高学历学位证.jpg';
    $xueli3=$xingming.'-最高学历学籍在线验证报告.pdf';

    if ($id=='zhaopian'){
        print "<img src='$dir$zhaopian'>";
    }
    if ($id=='zigezheng'){
        print "<img src='$dir$zigezheng'>";
    }
    if ($id=='zhiyezige'){
        print "<img src='$dir$zhiyezige'>";
    }
    if ($id=='shenfenzheng'){
        print "<img src='$dir$shenfenzheng'>";
    }
    if ($id=='cengci1'){
        if ($row['yingjie']=='否'&&$row['cengci3']==NULL){
            print"<script type='text/javascript'>
            window.onload = function (){
                var success = new PDFObject({ url: '$dir$xueli1' }).embed('xueli1');
            };
    </script>";
            print "<a href='$dir$xueli1' target='_blank' id='xueli1'>学籍在线验证报告.pdf</a>";
        }else{

            print"<script type='text/javascript'>
            window.onload = function (){
                var success = new PDFObject({ url: '$dir$xuelizhuce1' }).embed('xuelizhuce1');
            };
    </script>";
            print "<a href='$dir$xuelizhuce1' target='_blank' id='xuelizhuce1'>第一学历电子学历注册备案表.pdf</a>";
            if (file_exists('$dir$xueweizheng1')){
                print "<img src='$dir$xueweizheng1'>";
            }
            print "<img src='$dir$biyezheng1'>";
        }
    }
    if ($id=='cengci2'){

        print"<script type='text/javascript'>
            window.onload = function (){
                var success = new PDFObject({ url: '$dir$xuelizhuce2' }).embed('xuelizhuce2');
            };
        </script>";
        print "<a href='$dir$xuelizhuce2' target='_blank' id='xuelizhuce2'>中间学历电子学历注册备案表.pdf</a>";

        if (file_exists('$dir$xueweizheng2')){
            print "<img src='$dir$xueweizheng2'>";
        }
            print "<img src='$dir$biyezheng2'>";
    }
    elseif ($id=='cengci3'){

        if ($row['yingjie']=='是'){

            print"<script type='text/javascript'>
            window.onload = function (){
                var success = new PDFObject({ url: '$dir$xuelizhuce3' }).embed('xuelizhuce3');
            };
    </script>";
            print "<a href='$dir$xuelizhuce3' target='_blank' id='xuelizhuce3'>最高学历电子学历注册备案表.pdf</a>";
            if (file_exists('$dir$xueweizheng2')){
                print "<img src='$dir$xueweizheng3'>";
            }
            print "<img src='$dir$biyezheng3'>";
        }else{
            print"<script type='text/javascript'>
            window.onload = function (){
                var success = new PDFObject({ url: '$dir$xueli3' }).embed('xueli3');
            };
            </script>";
            print "<a href='$dir$xueli3' target='_blank' id='xueli3'>最高学历电子学历注册备案表.pdf</a>";
            print "<img src='$dir$xueli3'>";
        }
    }


?>
<body>

</body>
</html>
