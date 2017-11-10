<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>简历管理系统首页</title>
<style>
        table{
            text-align: center;
            width: 1500px;
            height:36px;
            border-right:1px solid black;
            border-left: 1px solid black;
            border-collapse: collapse;
           } 
        th{
            border-top:3px solid black;
            border-bottom: 2px solid black;
            border-right: 1px solid black;
            border-left: 1px solid black;

           }
        td{
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            border-left: 1px solid black;

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
            overflow:scroll;
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
            height: 66px;
            margin: 0 auto 0 100px; /*上右下左*/
            text-align: left;
        }
        #box2
        {
            width: 1600px;
            margin: 0 auto 0 auto; /*上右下左*/
            text-align: center;
            font-size: 16px;
            float:left;
        }

        #table1
        {
            width:1560px;
            text-align: center;
            font-size: 16px;
            float:left;

        }


        #title1
        {
            width:240px;
            height:40px;
            color:#388347;
            font-size:24px;
            font-family: "黑体";
            margin:16px 16px 0 0;
            float:left;

        }
       
        .fi1
        {   
            height:26px;
            width: 240px;
            margin: 10px 10px 10px 10px;
            text-align: left;
            float:left;
        }
        .fi2
        {   
            width: 480px;
            margin: 10px 10px 10px 10px;
            text-align: left;
            float:left;
        }
        .fi-nolb
        {
            height: 26px;
            width: 200px;
            padding: 10px 0 0 62px;
        }
        .lb
        {
            font-size: 14px;
            color: #526686;
        }
        .ipt-t
        {
            height: 24px;
            line-height: 24px;
            border: 1px solid #d4d9e1;
        }


        .btn_login
        {
            width: 101px;
            height: 35px;
            border: 0;
            cursor: pointer;
            background-position: 0 0;
        }
        .btn_login-hover, .btn_login:hover
        {
            background-position: 0 -35px;
        }
        .btn_login-active, .btn_login:active
        {
            background-position: 0 -70px;
        }
        .btn_reset
        {
            width: 67px;
            height: 35px;
            border: 0;
            cursor: pointer;
            background-position: -126px 0;
        }
        .btn_reset-hover, .btn_reset:hover
        {
            background-position: -126px -35px;
        }
        .btn_reset-active, .btn_reset:active
        {
            background-position: -126px -70px;
        }
        .copyright
        {
            width: 1600px;
            height: 40px;
            line-height: 40px;
            color: #666666;
            background: #bedaee;
            border-top: 1px solid #7abbe8;
            border-bottom: 1px solid #7abbe8;
            position: absolute;
            bottom: 10px;
            left: 0;
            text-align: center;
        }
        
        .login_div{text-align:center;margin-top:386px;}
.inputtext{width:100px;border:1px #404040 solid;font-size:9pt;padding:2px 0px 2px 5px;}
.inputsubmit{width:120px;height:40px;color:#36434E;border:0px;cursor:pointer;font-size:16px;font-family: "黑体";margin: auto 10px 0 5px;}
.inputsubmit1{width:120px;height:40px;color:#388347;border:0px;cursor:pointer;font-size:16px;font-family: "黑体";margin: auto 10px 0 160px;}
.inputsubmit2{width:78px;height:30px;color:#36434E;border:0px;cursor:pointer;font-size:16px;font-family: "黑体";margin: auto 17px 0 22px;float: left;}
.inputsubmit:hover{background-position:0 -21px;font-size:12px;}
.inputsubmit1:hover{background-position:0 -21px;font-size:12px;}
.inputsubmit2:hover{background-position:0 -21px;font-size:12px;}
    </style>
</head>

<body style="margin: 0px;">

<script type="text/javascript">
    function show_re(){
        document.tiaojian.action="admin_index.php";
        document.forms['tiaojian'].submit();
    }
    function export_re(){
        document.tiaojian.action="export_resume1.php";
        document.forms['tiaojian'].submit();
    }
</script>


    <div id="banner">
                <img src="/images/logo.png">
                <a href="admin_index.php"><input type="button" id="inputbtn1" class="inputsubmit1" value="查看简历"></a>
                <a href="edit_announce.php"><input type="button" id="inputbtn2" class="inputsubmit" value="修改公告"></a>
                <a href="set_zhuanxiang.php"><input type="button" id="inputbtn3" class="inputsubmit" value="设置专项招聘"></a>
                <a href="logout.php"><input type="button" id="inputbtn4" class="inputsubmit" value="退出"></a>
                </div>
    


        <div id="box2">
<?php
    if (isset($_COOKIE['userid'])&&isset($_COOKIE['passwd'])) {
        $userid=$_COOKIE['userid'];
        $passwd=$_COOKIE['passwd'];
        if (isset($_POST['name'])&&isset($_POST['starttime'])&&isset($_POST['endtime'])){
            $name=$_POST['name'];
            $starttime=$_POST['starttime'];
            $endtime=$_POST['endtime'];
            print "<div id='box1'>
            <div id='title1'>
                选择简历筛选条件:
            </div>
            <form name='tiaojian' method='post'>
                
                <div class='fi1'>
                    <label class='lb '>姓名：</label>
                    <input type='text' name='name' class='ipt-t' style='width: 150px;' value='$name'>  
                </div>

                <div class='fi2'>
                    <label class='lb'>提交日期：</label>
                    <input type='date' name='starttime' class='ipt-t' style='width: 150px;' value='$starttime'>
                    ——<input type='date' name='endtime' class='ipt-t' style='width: 150px;' value='$endtime'>
                </div>
                <div class='fi1'>
                        <input type='button' name='show_resume' value='确定' onclick='show_re();' style='height: 26px;' class='inputsubmit2' />
                <input type='button' class='inputsubmit2' name='export_resume' style='height: 26px;' onclick='export_re();' value='批量导出' /> 
                </div>
            </form>
        </div>";
        }else{
            print "<div id='box1'>
            <div id='title1'>
                选择简历筛选条件:
            </div>
            <form name='tiaojian' method='post'>
                
                <div class='fi1'>
                    <label class='lb '>姓名：</label>
                    <input type='text' name='name' class='ipt-t' style='width: 150px;' value=''>  
                </div>

                <div class='fi2'>
                    <label class='lb'>提交日期：</label>
                    <input type='date' name='starttime' class='ipt-t' style='width: 150px;' value=''>
                    ——<input type='date' name='endtime' class='ipt-t' style='width: 150px;' value=''>
                </div>
                <div class='fi1'>
                        <input type='button' name='show_resume' value='确定' onclick='show_re();' style='height: 26px;' class='inputsubmit2' />
                <input type='button' class='inputsubmit2' name='export_resume' style='height: 26px;' onclick='export_re();' value='批量导出' /> 
                </div>
            </form>
        </div>";
        }

        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $name=$_POST['name'];
            $starttime=$_POST['starttime'];
            $endtime=$_POST['endtime'];
            # code...
        }

        $dbc=mysql_connect('127.0.0.1','root','connmysqlpass');
        mysql_select_db('resume',$dbc);
        mysql_query("SET NAMES 'utf8'");


        if ($name!=""&&$starttime!=""&&$endtime!="") {
            $query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,a.zhiyezige,a.edittime
        FROM jibenxinxi a,study b,ability d
        WHERE a.resume_id=b.resume_id
        AND b.resume_id=d.resume_id
        AND a.xingming='$name'
        AND a.edittime>='$starttime'
        AND a.edittime<='$endtime'";

            # code...
        }else if ($name==""&&$starttime!=""&&$endtime!="") {
            $query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,a.zhiyezige,a.edittime
        FROM jibenxinxi a,study b,ability d
        WHERE a.resume_id=b.resume_id
        AND b.resume_id=d.resume_id
        AND a.edittime>='$starttime'
        AND a.edittime<='$endtime'";

            # code...
        }else if ($name!=""&&$starttime==""&&$endtime!="") {
            $query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,a.zhiyezige,a.edittime
        FROM jibenxinxi a,study b,ability d
        WHERE a.resume_id=b.resume_id
        AND b.resume_id=d.resume_id
        AND a.xingming='$name'
        AND a.edittime<='$endtime'";

            # code...
        }else if ($name!=""&&$starttime!=""&&$endtime=="") {
            $query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,a.zhiyezige,a.edittime
        FROM jibenxinxi a,study b,ability d
        WHERE a.resume_id=b.resume_id
        AND b.resume_id=d.resume_id
        AND a.xingming='$name'
        AND a.edittime>='$starttime'";


            # code...
        }else if ($name==""&&$starttime==""&&$endtime!="") {
            $query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,a.zhiyezige,a.edittime
        FROM jibenxinxi a,study b,ability d
        WHERE a.resume_id=b.resume_id
        AND b.resume_id=d.resume_id
        AND a.edittime<='$endtime'";

            # code...
        }else if ($name==""&&$starttime!=""&&$endtime=="") {
            $query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,a.zhiyezige,a.edittime
        FROM jibenxinxi a,study b,ability d
        WHERE a.resume_id=b.resume_id
        AND b.resume_id=d.resume_id
        AND a.edittime>='$starttime'";

            # code...
        }else if ($name!=""&&$starttime==""&&$endtime=="") {
            $query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,a.zhiyezige,a.edittime
        FROM jibenxinxi a,study b,ability d
        WHERE a.resume_id=b.resume_id
        AND b.resume_id=d.resume_id
        AND a.xingming='$name'";

            # code...
        }else {
            $query="SELECT a.*,b.*,d.*
            FROM jibenxinxi a,study b,ability d
        WHERE a.resume_id=b.resume_id
        AND b.resume_id=d.resume_id";

            # code...
        }

        if ($result=mysql_query($query,$dbc)) {


            print "<table align=center cellpadding='0'  cellspacing='0'>
        <tbody>
            <tr>
                <th style='width:37px;height:24px;'>
                    简历序号</th>
                <th style='width:37px;height:24px;'>
                    简历来源</th>
                <th style='width:54px;height:24px;'>
                    姓名</th>
                <th style='width:32px;height:24px;'>
                    性别</th>
                <th style='width:68px;height:24px;'>
                    出生年月</th>
                <th style='width:54px;height:24px;'>
                    学历</th>
                <th style='width:130px;height:24px;'>
                    毕业院校</th>
                <th style='width:130px;height:24px;'>
                    专业</th>
                <th style='width:88px;height:24px;'>
                    毕业时间</th>
                <th style='width:74px;height:24px;'>
                    籍贯</th>
                <th style='width:97px;height:24px;'>
                    联系电话</th>
                <th style='width:58px;height:24px;'>
                    执业情况</th>
                <th style='width:68px;height:24px;'>
                    操作</th>
            </tr>";

            while($row=mysql_fetch_array($result))
            {
                $cengci1=$row['cengci1'];
                $cengci2=$row['cengci2'];
                $cengci3=$row['cengci3'];
                if ($cengci1!=NULL) {
                    if ($cengci1 == 1) {
                        $cengci1 = "中专";
                    } elseif ($cengci1 == 2) {
                        $cengci1 = "大专";
                    } elseif ($cengci1 == 3) {
                        $cengci1 = "本科";
                    } elseif ($cengci1 == 4) {
                        $cengci1 = "硕士";
                    } elseif ($cengci1 == 5) {
                        $cengci1 = "博士";
                    }
                }
                if($cengci2!=NULL) {
                    if ($cengci2 == 1) {
                        $cengci2 = "中专";
                    } elseif ($cengci2 == 2) {
                        $cengci2 = "大专";
                    } elseif ($cengci2 == 3) {
                        $cengci2 = "本科";
                    } elseif ($cengci2 == 4) {
                        $cengci2 = "硕士";
                    } elseif ($cengci2 == 5) {
                        $cengci2 = "博士";
                    }
                }
                if($cengci3!=NULL) {
                    if ($cengci3 == 1) {
                        $cengci3 = "中专";
                    } elseif ($cengci3 == 2) {
                        $cengci3 = "大专";
                    } elseif ($cengci3 == 3) {
                        $cengci3 = "本科";
                    } elseif ($cengci3 == 4) {
                        $cengci3 = "硕士";
                    } elseif ($cengci3 == 5) {
                        $cengci3 = "博士";
                    }
                }

                print "<tr>
                            <td style='width:37px;height:24px;'>
                            {$row['resume_id']}                     
                            </td>   

                            <td style='width:37px;height:24px;'>
                            {$row['laiyuan']}
                            </td>

                            <td style='width:54px;height:24px;'>
                            {$row['xingming']}
                            </td>
                            <td style='width:32px;height:24px;'>
                            {$row['xingbie']}
                            </td>
                            <td style='width:68px;height:24px;'>
                            {$row['shengri']}
                            </td>
                            <td style='width:54px;height:24px;'>
                            {$cengci1}</br>{$cengci2}</br>{$cengci3}
                            </td>
                            <td style='width:130px;height:24px;'>
                            {$row['school1']}</br>{$row['school2']}</br>{$row['school3']}
                            </td>
                            <td style='width:130px;height:24px;'>
                            {$row['major1']}</br>{$row['major2']}</br>{$row['major3']}
                            </td>
                            <td style='width:88px;height:24px;'>
                            {$row['endtime1']}</br>{$row['endtime2']}</br>{$row['endtime3']}
                            </td>
                            
                            
                            
                            <td style='width:74px;height:24px;'>
                            {$row['jiguan']}
                            </td>
                            
                            <td style='width:97px;height:24px;'>
                            {$row['dianhua']}
                            </td>
                            <td style='width:58px;height:24px;'>
                            {$row['zhiyezige']}
                            </td>
                            <td style='width:68px;height:24px;'>
                            <a href=\"show_detail1.php?number={$row['resume_id']}\">详细信息</a></br>
                            
                            <a href=\"download.php?number={$row['resume_id']}\">下载附件</a>
                            <a ></a>
                            </td>

                        </tr>";




            }
            print "</tbody></table>";
        }
    }else{
        print "<script type='text/javascript'>
                        alert('您还没有登录，请登录后再试！');
                    </script>";
    }

            ?>
        </div>

</body>
</html>
