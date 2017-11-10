<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>简历管理系统首页</title>
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
            background: #edf7ff;
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
            margin: 40px auto 0 auto; /*上右下左*/
            text-align: left;
            text-align: center;
            font-size: 24px;
            float:left;
            font-family: "黑体";
        }
        #box2
        {
            width: 760px;
            height: 600px;
            margin: 20px auto 0 auto; /*上右下左*/
            text-align: center;
            font-size: 18px;
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
    <a href="edit_announce.php"><input type="button" id="inputbtn2" class="inputsubmit1" value="修改公告"></a>
    <a href="set_zhuanxiang.php"><input type="button" id="inputbtn3" class="inputsubmit1" value="设置专项招聘"></a>
    <a href="logout.php"><input type="button" id="inputbtn4" class="inputsubmit2" value="退出"></a>
</div>

<div id="box1">
    <?php
        if (isset($_COOKIE['userid'])&&isset($_COOKIE['passwd'])){
            setcookie('userid',FALSE,time()-6000);
            setcookie('passwd',FALSE,time()-6000);
            print "已经安全退出，请关闭当前页面。";

        }
    ?>

</div>

</body>
</html>
