<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改公告</title>
<style>
        table{
        
        text-align: center;
        width: 1500px;
           } 
        th{
        border-bottom:2px solid #808080;
        border-top:4px solid #808080;

           }
        td{
        border-bottom:1px solid #808080;

           }

        body
        {   
            width: 1600px;
            margin: 0;
            padding: 0;
            background: #FFFFFF;
            font-size: 12px;
            color: #444444;
            line-height: 150%;

            overflow: scroll;
            background-size:1600px 100%;
            background-attachment:fixed;

        }

        #banner
        {
            width:1600px;
            height:100px;
            line-height:35px;
            text-align: center;
            margin: 0 auto;
            background:#FFFFF0;
            float: left;
        }
        #box1
        {
            width: 1600px;
            margin: 0 auto 0 auto; /*上右下左*/
            text-align: left;
        }
        #box2
        {
            width: 760px;
            height: 600px;
            margin: 0 auto 0 0; /*上右下左*/
            text-align: center;
            font-size: 16px;
            float:left;
            font-family: "黑体";
        }
        #box3
        {
            width: 760px;
            height: 600px;
            margin: 0 auto 0 60px; /*上右下左*/
            text-align: left;
            font-size: 16px;
            float:left;
            font-family: "黑体";

        }
        #title1
        {
            
            height:40px;
            color:#388347;
            font-size:24px;
            font-family: "黑体";
            margin:20px auto 10px auto;
            text-align: center;

        }
        .boxes{
            font-size:16px;

        }

.inputsubmit{width:120px;height:40px;color:#36434E;border:0px;cursor:pointer;font-size:16px;font-family: "黑体";margin: auto 10px 0 160px;}
.inputsubmit1{width:120px;height:40px;color:#36434E;border:0px;cursor:pointer;font-size:16px;font-family: "黑体";margin: auto 10px 0 5px;}
.inputsubmit2{width:120px;height:40px;color:#388347;border:0px;cursor:pointer;font-size:16px;font-family: "黑体";margin: auto 10px 0 5px;}
.inputsubmit3{width:78px;height:30px;color:#36434E;border:0px;cursor:pointer;font-size:16px;font-family: "黑体";margin: 12px 22px 0 22px;}
.inputsubmit:hover{background-position:0 -21px;font-size:12px;}
.inputsubmit1:hover{background-position:0 -21px;font-size:12px;}
.inputsubmit2:hover{background-position:0 -21px;font-size:12px;}
.inputsubmit3:hover{background-position:0 -21px;font-size:12px;}
    </style>
</head>

<body style="margin: 0px;">

    <div id="banner">
                <img src="/images/logo.png">
                <a href="admin_index.php"><input type="button" id="inputbtn1" class="inputsubmit" value="查看简历"></a>
                <a href="edit_announce.php"><input type="button" id="inputbtn2" class="inputsubmit2" value="修改公告"></a>
                <a href="set_zhuanxiang.php"><input type="button" id="inputbtn3" class="inputsubmit1" value="设置专项招聘"></a>
                <a href="logout.php"><input type="button" id="inputbtn4" class="inputsubmit1" value="退出"></a>
    </div>

    <div id="box1">
        <?php
        if (isset($_COOKIE['userid'])&&isset($_COOKIE['passwd'])){
            ini_set('display_errors', 1);
            $file='announce.txt';
            

            if ($_SERVER['REQUEST_METHOD']=='POST')
            {
		$str=$_POST['announ'];
                if(is_writable($file))
                {
                    $fp=fopen($file, 'w');
                    fwrite($fp,$_POST['announ'].PHP_EOL);
                    fclose($fp);
                }
                # code...

                # code...
            }    /* 文件写入 */
            $file='announce.txt';
            $count=filesize($file);
            $fp=fopen($file, 'r+');
            if (filesize($file)!=0) {
                $data=fread($fp,$count);
                $data=str_replace("\r\n", "</br>", $data);
                $data=stripcslashes($data);
                $data="&nbsp&nbsp&nbsp$data";
                print "<div id='box3'>
                <div id='title1'>当前公告内容：</div>
                $data
            </div>";

                print "<div id='box2'>
            <div id='title1'>修改公告：</div>
            <form action='edit_announce.php' method='post'>
            <div style='text-align: center'><textarea class='boxes' name='announ' cols='60' rows='18' value=''></textarea></div>
            <input type='submit' id='inputbtn4' class='inputsubmit3' value='修改'>
            <input type='reset' id='inputbtn5' class='inputsubmit3' value='清空'>
            </form>
        </div>";
                # code...
            }

        }else{
            print "<script type='text/javascript'>alert('你还没登录，请登录后再试！')</script>";
        }


?>

    </div>
   
</body>
</html>
