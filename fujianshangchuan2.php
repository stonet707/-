<?php

function deldir($dir) {
//先删除目录下的文件：
    $dh=opendir($dir);
    while ($file=readdir($dh)) {
        if($file!="." && $file!="..") {
            $fullpath=$dir."/".$file;
            if(!is_dir($fullpath)) {
                unlink($fullpath);
            } else {
                deldir($fullpath);
            }
        }
    }
    closedir($dh);
//删除当前文件夹：
    if(rmdir($dir)) {
        return true;
    } else {
        return false;
    }
}

    $dbc=mysql_connect('127.0.0.1','root','connmysqlpass');
    mysql_select_db('resume',$dbc);
    mysql_query("SET NAMES 'utf8'");



    if($_SERVER['REQUEST_METHOD']=='POST'){
        $yingjie=$_POST['yingjie'];
        $shenfenzheng=$_POST['shenfenzheng'];
	$xingming=$_POST['xingming'];
        print "$shenfenzheng</br>$yingjie";

        $query= "SELECT a.resume_id,a.xingming,b.cengci1,b.cengci2,b.cengci3 
        FROM jibenxinxi a,study b 
        WHERE a.resume_id=b.resume_id 
        AND a.shenfenzheng='$shenfenzheng'
	AND a.xingming='$xingming'";

        $result=mysql_query($query,$dbc);
        $row=mysql_fetch_array($result);
        $resume_id=$row['resume_id'];
        $cengci1=$row['cengci1'];
        $cengci2=$row['cengci2'];
        $cengci3=$row['cengci3'];
        $dir='./fujian/';
        $file_xingming=iconv("utf-8","gb2312",$resume_id);
        $dir="$dir$file_xingming";
        
        print "$dir</br>";
        if (is_dir($dir)){
            deldir($dir);
        }
        print "$dir</br>";
        mkdir($dir,0777,true);



        print "$resume_id</br>$xingming</br>$shenfenzheng</br>$yingjie</br>$cengci1</br>$cengci2</br>$cengci3";
	$dir="$dir/";

       if ($cengci3==NULL){
            if ($yingjie=='是'){

                $xingming1=$xingming.'-照片';
                $xingming2=$xingming.'-第一学历电子学历注册备案表';
                $xingming3=$xingming.'-第一学历毕业证';
                $xingming4=$xingming.'-第一学历学位证';
                $xingming5=$xingming.'-资格证';
                $xingming6=$xingming.'-执业证';
                $xingming7=$xingming.'-身份证';
                $xingming1=iconv("utf-8","gb2312",$xingming1);
                $xingming2=iconv("utf-8","gb2312",$xingming2);
                $xingming3=iconv("utf-8","gb2312",$xingming3);
                $xingming4=iconv("utf-8","gb2312",$xingming4);
                $xingming5=iconv("utf-8","gb2312",$xingming5);
                $xingming6=iconv("utf-8","gb2312",$xingming6);
                $xingming7=iconv("utf-8","gb2312",$xingming7);

                if (!empty($_FILES['zhaopian']['tmp_name'])){
                    move_uploaded_file($_FILES['zhaopian']['tmp_name'],"$dir$xingming1.jpg");
                }
                if (!empty($_FILES['xuelizhuce1']['tmp_name'])){
                    move_uploaded_file($_FILES['xuelizhuce1']['tmp_name'],"$dir$xingming2.pdf");
                }
                if (!empty($_FILES['biyezheng1']['tmp_name'])){
                    move_uploaded_file($_FILES['biyezheng1']['tmp_name'],"$dir$xingming3.jpg");
                }
                if (!empty($_FILES['xueweizheng1']['tmp_name'])){
                    move_uploaded_file($_FILES['xueweizheng1']['tmp_name'],"$dir$xingming4.jpg");
                }
                if (!empty($_FILES['zigezheng']['tmp_name'])){
                    move_uploaded_file($_FILES['zigezheng']['tmp_name'],"$dir$xingming5.jpg");
                    $query="UPDATE jibenxinxi SET zigezheng='有' WHERE resume_id='$resume_id'";
                    mysql_query($query,$dbc);

                }else{
                    $query="UPDATE jibenxinxi SET zigezheng='无' WHERE resume_id='$resume_id' ";
                    mysql_query($query,$dbc);
                }
                if (!empty($_FILES['zhiyezheng']['tmp_name'])){
                    move_uploaded_file($_FILES['zhiyezheng']['tmp_name'],"$dir$xingming6.jpg");
                }
                if (!empty($_FILES['shenfen']['tmp_name'])){
                    move_uploaded_file($_FILES['shenfen']['tmp_name'],"$dir$xingming7.jpg");
                }
            }
            else{
                $xingming1=$xingming.'-照片';
                $xingming2=$xingming.'-第一学历学籍在线验证报告';
                $xingming3=$xingming.'-资格证';
                $xingming4=$xingming.'-执业证';
                $xingming5=$xingming.'-身份证';

                $xingming1=iconv("utf-8","gb2312",$xingming1);
                $xingming2=iconv("utf-8","gb2312",$xingming2);
                $xingming3=iconv("utf-8","gb2312",$xingming3);
                $xingming4=iconv("utf-8","gb2312",$xingming4);
                $xingming5=iconv("utf-8","gb2312",$xingming5);

                if (!empty($_FILES['zhaopian']['tmp_name'])){
                    move_uploaded_file($_FILES['zhaopian']['tmp_name'],"$dir$xingming1.jpg");
                }
                if (!empty($_FILES['xueli1']['tmp_name'])){
                    move_uploaded_file($_FILES['xueli1']['tmp_name'],"$dir$xingming2.pdf");
                }

                if (!empty($_FILES['zigezheng']['tmp_name'])){
                    move_uploaded_file($_FILES['zigezheng']['tmp_name'],"$dir$xingming3.jpg");
                    $query="UPDATE jibenxinxi SET zigezheng='有' WHERE resume_id='$resume_id' ";
                    mysql_query($query,$dbc);
                }else{
                    $query="UPDATE jibenxinxi SET zigezheng='无' WHERE resume_id='$resume_id'";
                    mysql_query($query,$dbc);
                }
                if (!empty($_FILES['zhiyezheng']['tmp_name'])){
                    move_uploaded_file($_FILES['zhiyezheng']['tmp_name'],"$dir$xingming4.jpg");
                }
                if (!empty($_FILES['shenfen']['tmp_name'])){
                    move_uploaded_file($_FILES['shenfen']['tmp_name'],"$dir$xingming5.jpg");
                }


            }

        }elseif ($cengci2==NULL){
            if ($yingjie=='是'){
                $xingming1=$xingming.'-照片';
                $xingming2=$xingming.'-第一学历电子学历注册备案表';
                $xingming3=$xingming.'-第一学历毕业证';
                $xingming4=$xingming.'-第一学历学位证';
                $xingming5=$xingming.'-最高学历电子学历注册备案表';
                $xingming6=$xingming.'-最高学历毕业证';
                $xingming7=$xingming.'-最高学历学位证';
                $xingming8=$xingming.'-资格证';
                $xingming9=$xingming.'-执业证';
                $xingming10=$xingming.'-身份证';

                $xingming1=iconv("utf-8","gb2312",$xingming1);
                $xingming2=iconv("utf-8","gb2312",$xingming2);
                $xingming3=iconv("utf-8","gb2312",$xingming3);
                $xingming4=iconv("utf-8","gb2312",$xingming4);
                $xingming5=iconv("utf-8","gb2312",$xingming5);
                $xingming6=iconv("utf-8","gb2312",$xingming6);
                $xingming7=iconv("utf-8","gb2312",$xingming7);
                $xingming8=iconv("utf-8","gb2312",$xingming8);
                $xingming9=iconv("utf-8","gb2312",$xingming9);
                $xingming10=iconv("utf-8","gb2312",$xingming10);

                if (!empty($_FILES['zhaopian']['tmp_name'])){
                    move_uploaded_file($_FILES['zhaopian']['tmp_name'],"$dir$xingming1.jpg");

                }
                if (!empty($_FILES['xuelizhuce1']['tmp_name'])){
                    move_uploaded_file($_FILES['xuelizhuce1']['tmp_name'],"$dir$xingming2.pdf");
                }

                if (!empty($_FILES['biyezheng1']['tmp_name'])){
                    move_uploaded_file($_FILES['biyezheng1']['tmp_name'],"$dir$xingming3.jpg");

                }
                if (!empty($_FILES['xueweizheng1']['tmp_name'])){
                    move_uploaded_file($_FILES['xueweizheng1']['tmp_name'],"$dir$xingming4.jpg");
                }
                if (!empty($_FILES['xuelizhuce3']['tmp_name'])){
                    move_uploaded_file($_FILES['xuelizhuce3']['tmp_name'],"$dir$xingming5.pdf");

                }
                if (!empty($_FILES['biyezheng3']['tmp_name'])){
                    move_uploaded_file($_FILES['biyezheng3']['tmp_name'],"$dir$xingming6.jpg");

                }
                if (!empty($_FILES['xueweizheng3']['tmp_name'])){
                    move_uploaded_file($_FILES['xueweizheng3']['tmp_name'],"$dir$xingming7.jpg");

                }
                if (!empty($_FILES['zigezheng']['tmp_name'])){
                    move_uploaded_file($_FILES['zigezheng']['tmp_name'],"$dir$xingming8.jpg");
                    $query="UPDATE jibenxinxi SET zigezheng='有' WHERE resume_id='$resume_id'";
                    mysql_query($query,$dbc);
                }else{
                    $query="UPDATE jibenxinxi SET zigezheng='无' WHERE resume_id='$resume_id'";
                    mysql_query($query,$dbc);
                }
                if (!empty($_FILES['zhiyezheng']['tmp_name'])){
                    move_uploaded_file($_FILES['zhiyezheng']['tmp_name'],"$dir$xingming9.jpg");

                }
                if (!empty($_FILES['shenfen']['tmp_name'])){
                    move_uploaded_file($_FILES['shenfen']['tmp_name'],"$dir$xingming10.jpg");

                }
            }
            else{
                $xingming1=$xingming.'-照片';
                $xingming2=$xingming.'-第一学历电子学历注册备案表';
                $xingming3=$xingming.'-第一学历毕业证';
                $xingming4=$xingming.'-第一学历学位证';
                $xingming5=$xingming.'-最高学历学籍在线验证报告';
                $xingming6=$xingming.'-资格证';
                $xingming7=$xingming.'-执业证';
                $xingming8=$xingming.'-身份证';
                $xingming1=iconv("utf-8","gb2312",$xingming1);
                $xingming2=iconv("utf-8","gb2312",$xingming2);
                $xingming3=iconv("utf-8","gb2312",$xingming3);
                $xingming4=iconv("utf-8","gb2312",$xingming4);
                $xingming5=iconv("utf-8","gb2312",$xingming5);
                $xingming6=iconv("utf-8","gb2312",$xingming6);
                $xingming7=iconv("utf-8","gb2312",$xingming7);
                $xingming8=iconv("utf-8","gb2312",$xingming8);

                if (!empty($_FILES['zhaopian']['tmp_name'])){
                    move_uploaded_file($_FILES['zhaopian']['tmp_name'],"$dir$xingming1.jpg");

                }
                if (!empty($_FILES['xuelizhuce1']['tmp_name'])){
                    move_uploaded_file($_FILES['xuelizhuce1']['tmp_name'],"$dir$xingming2.pdf");

                }
                if (!empty($_FILES['biyezheng1']['tmp_name'])){
                    move_uploaded_file($_FILES['biyezheng1']['tmp_name'],"$dir$xingming3.jpg");

                }
                if (!empty($_FILES['xueweizheng1']['tmp_name'])){
                    move_uploaded_file($_FILES['xueweizheng1']['tmp_name'],"$dir$xingming4.jpg");

                }
                if (!empty($_FILES['xueli3']['tmp_name'])){
                    move_uploaded_file($_FILES['xueli3']['tmp_name'],"$dir$xingming5.pdf");

                }
                if (!empty($_FILES['zigezheng']['tmp_name'])){
                    move_uploaded_file($_FILES['zigezheng']['tmp_name'],"$dir$xingming6.jpg");
                    $query="UPDATE jibenxinxi SET zigezheng='有' WHERE resume_id='$resume_id' ";
                    mysql_query($query,$dbc);
                }else{
                    $query="UPDATE jibenxinxi SET zigezheng='无' WHERE resume_id='$resume_id'";
                    mysql_query($query,$dbc);
                }

                if (!empty($_FILES['zhiyezheng']['tmp_name'])){
                    move_uploaded_file($_FILES['zhiyezheng']['tmp_name'],"$dir$xingming7.jpg");

                }
                if (!empty($_FILES['shenfen']['tmp_name'])){
                    move_uploaded_file($_FILES['shenfen']['tmp_name'],"$dir$xingming8.jpg");

                }

            }
        }else{
            if ($yingjie=='是'){
                $xingming1=$xingming.'-照片';
                $xingming2=$xingming.'-第一学历电子学历注册备案表';
                $xingming3=$xingming.'-第一学历毕业证';
                $xingming4=$xingming.'-第一学历学位证';
                $xingming5=$xingming.'-中间学历电子学历注册备案表';
                $xingming6=$xingming.'-中间学历毕业证';
                $xingming7=$xingming.'-中间学历学位证';
                $xingming8=$xingming.'-最高学历电子学历注册备案表';
                $xingming9=$xingming.'-最高学历毕业证';
                $xingming10=$xingming.'-最高学历学位证';
                $xingming11=$xingming.'-资格证';
                $xingming12=$xingming.'-执业证';
                $xingming13=$xingming.'-身份证';
                $xingming1=iconv("utf-8","gb2312",$xingming1);
                $xingming2=iconv("utf-8","gb2312",$xingming2);
                $xingming3=iconv("utf-8","gb2312",$xingming3);
                $xingming4=iconv("utf-8","gb2312",$xingming4);
                $xingming5=iconv("utf-8","gb2312",$xingming5);
                $xingming6=iconv("utf-8","gb2312",$xingming6);
                $xingming7=iconv("utf-8","gb2312",$xingming7);
                $xingming8=iconv("utf-8","gb2312",$xingming8);
                $xingming9=iconv("utf-8","gb2312",$xingming9);
                $xingming10=iconv("utf-8","gb2312",$xingming10);
                $xingming11=iconv("utf-8","gb2312",$xingming11);
                $xingming12=iconv("utf-8","gb2312",$xingming12);
                $xingming13=iconv("utf-8","gb2312",$xingming13);
                if (!empty($_FILES['zhaopian']['tmp_name'])){
                    move_uploaded_file($_FILES['zhaopian']['tmp_name'],"$dir$xingming1.jpg");

                }
                if (!empty($_FILES['xuelizhuce1']['tmp_name'])){
                    move_uploaded_file($_FILES['xuelizhuce1']['tmp_name'],"$dir$xingming2.pdf");

                }
                if (!empty($_FILES['biyezheng1']['tmp_name'])){
                    move_uploaded_file($_FILES['biyezheng1']['tmp_name'],"$dir$xingming3.jpg");

                }
                if (!empty($_FILES['xueweizheng1']['tmp_name'])){
                    move_uploaded_file($_FILES['xueweizheng1']['tmp_name'],"$dir$xingming4.jpg");

                }
                if (!empty($_FILES['xuelizhuce2']['tmp_name'])){
                    move_uploaded_file($_FILES['xuelizhuce2']['tmp_name'],"$dir$xingming5.pdf");

                }
                if (!empty($_FILES['biyezheng2']['tmp_name'])){
                    move_uploaded_file($_FILES['biyezheng2']['tmp_name'],"$dir$xingming6.jpg");

                }

                if (!empty($_FILES['xueweizheng2']['tmp_name'])){
                    move_uploaded_file($_FILES['xueweizheng2']['tmp_name'],"$dir$xingming7.jpg");

                }
                if (!empty($_FILES['xuelizhuce3']['tmp_name'])){
                    move_uploaded_file($_FILES['xuelizhuce3']['tmp_name'],"$dir$xingming8.pdf");

                }
                if (!empty($_FILES['biyezheng3']['tmp_name'])){
                    move_uploaded_file($_FILES['biyezheng3']['tmp_name'],"$dir$xingming9.jpg");

                }
                if (!empty($_FILES['xueweizheng3']['tmp_name'])){
                    move_uploaded_file($_FILES['xueweizheng3']['tmp_name'],"$dir$xingming10.jpg");

                }
                if (!empty($_FILES['zigezheng']['tmp_name'])){
                    move_uploaded_file($_FILES['zigezheng']['tmp_name'],"$dir$xingming11.jpg");
                    $query="UPDATE jibenxinxi SET zigezheng='有' WHERE resume_id='$resume_id'";
                    mysql_query($query,$dbc);
                }else{
                    $query="UPDATE jibenxinxi SET zigezheng='无' WHERE resume_id='$resume_id'";
                    mysql_query($query,$dbc);
                }
                if (!empty($_FILES['zhiyezheng']['tmp_name'])){
                    move_uploaded_file($_FILES['zhiyezheng']['tmp_name'],"$dir$xingming12.jpg");

                }
                if (!empty($_FILES['shenfen']['tmp_name'])){
                    move_uploaded_file($_FILES['shenfen']['tmp_name'],"$dir$xingming13.jpg");

                }
            }
            else{

                $xingming1=$xingming.'-照片';
                $xingming2=$xingming.'-第一学历电子学历注册备案表';
                $xingming3=$xingming.'-第一学历毕业证';
                $xingming4=$xingming.'-第一学历学位证';
                $xingming5=$xingming.'-中间学历电子学历注册备案表';
                $xingming6=$xingming.'-中间学历毕业证';
                $xingming7=$xingming.'-中间学历学位证';
                $xingming8=$xingming.'-最高学历学籍在线验证报告';
                $xingming9=$xingming.'-资格证';
                $xingming10=$xingming.'-执业证';
                $xingming11=$xingming.'-身份证';
                $xingming1=iconv("utf-8","gb2312",$xingming1);
                $xingming2=iconv("utf-8","gb2312",$xingming2);
                $xingming3=iconv("utf-8","gb2312",$xingming3);
                $xingming4=iconv("utf-8","gb2312",$xingming4);
                $xingming5=iconv("utf-8","gb2312",$xingming5);
                $xingming6=iconv("utf-8","gb2312",$xingming6);
                $xingming7=iconv("utf-8","gb2312",$xingming7);
                $xingming8=iconv("utf-8","gb2312",$xingming8);
                $xingming9=iconv("utf-8","gb2312",$xingming9);
                $xingming10=iconv("utf-8","gb2312",$xingming10);
                $xingming11=iconv("utf-8","gb2312",$xingming11);

                if (!empty($_FILES['zhaopian']['tmp_name'])){
                    move_uploaded_file($_FILES['zhaopian']['tmp_name'],"$dir$xingming1.jpg");

                }
                if (!empty($_FILES['xuelizhuce1']['tmp_name'])){
                    move_uploaded_file($_FILES['xuelizhuce1']['tmp_name'],"$dir$xingming2.pdf");

                }
                if (!empty($_FILES['biyezheng1']['tmp_name'])){
                    move_uploaded_file($_FILES['biyezheng1']['tmp_name'],"$dir$xingming3.jpg");

                }
                if (!empty($_FILES['xueweizheng1']['tmp_name'])){
                    move_uploaded_file($_FILES['xueweizheng1']['tmp_name'],"$dir$xingming4.jpg");

                }
                if (!empty($_FILES['xuelizhuce2']['tmp_name'])){
                    move_uploaded_file($_FILES['xuelizhuce2']['tmp_name'],"$dir$xingming5.pdf");

                }
                if (!empty($_FILES['biyezheng2']['tmp_name'])){
                    move_uploaded_file($_FILES['biyezheng2']['tmp_name'],"$dir$xingming6.jpg");

                }
                if (!empty($_FILES['xueweizheng2']['tmp_name'])){
                    move_uploaded_file($_FILES['xueweizheng2']['tmp_name'],"$dir$xingming7.jpg");

                }
                if (!empty($_FILES['xueli3']['tmp_name'])){
                    move_uploaded_file($_FILES['xueli3']['tmp_name'],"$dir$xingming8.pdf");

                }
                if (!empty($_FILES['zigezheng']['tmp_name'])){
                    move_uploaded_file($_FILES['zigezheng']['tmp_name'],"$dir$xingming9.jpg");
                    $query="UPDATE jibenxinxi SET zigezheng='有' WHERE resume_id='$resume_id'";
                    mysql_query($query,$dbc);
                }else{
                    $query="UPDATE jibenxinxi SET zigezheng='无' WHERE resume_id='$resume_id'";
                    mysql_query($query,$dbc);
                }
                if (!empty($_FILES['zhiyezheng']['tmp_name'])){
                    move_uploaded_file($_FILES['zhiyezheng']['tmp_name'],"$dir$xingming10.jpg");

                }
                if (!empty($_FILES['shenfen']['tmp_name'])){
                    move_uploaded_file($_FILES['shenfen']['tmp_name'],"$dir$xingming11.jpg");

                }
            }
        }

        header("Location:basicinfo1.php?xingming=$xingming&&shenfenzheng=$shenfenzheng");
        //2017-10-12下午

    }

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 10:28
 */
?>