<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>设置专项招聘</title>
<style>
        table{
            text-align: center;
            width: 840px;
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

            border-bottom: 1px solid #808080;
            border-right: 1px solid #808080;
            border-left: 1px solid #808080;
            font-size: 16px;
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
            width: 860px;
            height: 600px;
            margin: 0 auto 0 0; /*上右下左*/
            text-align: center;
            font-size: 18px;
            float:left;
            font-family: "黑体";
            font
        }
        #box3
        {
            width: 721px;
            height: 600px;
            margin: 0 auto 0 0; /*上右下左*/
            text-align: left;
            font-size: 16px;
            float:left;
            font-family: "黑体";

        }
        #box4
        {
            width: 660px;
            height: 32px;
            margin: 4px 10px 4px 10px; /*上右下左*/
            text-align: left;
            font-size: 18px;
            float:left;
            font-family: "黑体";

        }

        #table1
        {
            width:98%;
            text-align: center;
            font-size: 16px;
            float:left;

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
       
        .fi1
        {   
            height:30px;
            width: 100px;
            margin: 10px 10px 10px 120px;
            text-align: center;
            float:left;
            font-size: 20px;

        }
        .fi2
        {   
            width: 700px;
            height: 30px;
            margin: 10px 10px 10px 260px;
            text-align: left;
            float:left;
        }
        .fi3
        {
            width: 72px;
            height: 30px;
            margin: 10px 10px 10px 38px;
            text-align: left;
            float:left;
        }
        .fi4
        {
            width: 40px;
            height: 30px;
            margin: 10px 4px 10px 4px;
            text-align: left;
            float:left;
            font-size: 16px;
        }

        .ipt-t
        {
            width: 243px;
            height: 26px;
            line-height: 24px;
            border: 1px solid #d4d9e1;
            margin: 10px 10px 10px 10px;
            float: left;
            text-align: center;
        }
        .ipt-t1
        {
            width: 58px;
            height: 26px;
            line-height: 24px;
            border: 1px solid #d4d9e1;
            margin: 10px 4px 10px 10px;
            float: left;
            text-align: center;
        }
        .ipt-t2
        {
            height: 26px;
            line-height: 24px;
            margin: 10px 4px 10px 4px;
            float: left;
            text-align: center;
        }



        .inputsubmit{width:120px;height:40px;color:#36434E;border:0px;cursor:pointer;font-size:16px;font-family: "黑体";margin: auto 10px 0 160px;}
.inputsubmit1{width:120px;height:40px;color:#36434E;border:0px;cursor:pointer;font-size:16px;font-family: "黑体";margin: auto 10px 0 5px;}
.inputsubmit2{width:120px;height:40px;color:#388347;border:0px;cursor:pointer;font-size:16px;font-family: "黑体";margin: auto 10px 0 5px;}
.inputsubmit3{width:78px;height:30px;color:#36434E;border:0px;cursor:pointer;font-size:16px;font-family: "黑体";margin: 22px 22px 0 200px;}
.inputsubmit4{width:78px;height:30px;color:#36434E;border:0px;cursor:pointer;font-size:16px;font-family: "黑体";margin: 22px 22px 0 22px;}
        .inputsubmit:hover{background-position:0 -21px;font-size:12px;}
        .inputsubmit1:hover{background-position:0 -21px;font-size:12px;}
.inputsubmit2:hover{background-position:0 -21px;font-size:12px;}
.inputsubmit3:hover{background-position:0 -21px;font-size:12px;}
.inputsubmit4:hover{background-position:0 -21px;font-size:12px;}
    </style>
</head>

<body style="margin: 0px;">

    <div id="banner">
                <img src="/images/logo.png">
                <a href="admin_index.php"><input type="button" id="inputbtn1" class="inputsubmit" value="查看简历"></a>
                <a href="edit_announce.php"><input type="button" id="inputbtn2" class="inputsubmit1" value="修改公告"></a>
                <a href="set_zhuanxiang.php"><input type="button" id="inputbtn3" class="inputsubmit2" value="设置专项招聘"></a>
                <a href="logout.php"><input type="button" id="inputbtn4" class="inputsubmit1" value="退出"></a>
    </div>

    <div id="box1">

            <?php
                if (isset($_COOKIE['userid'])&&isset($_COOKIE['passwd'])){
                    ini_set('date.timezone','Asia/Shanghai');
                    $userid=$_COOKIE['userid'];
                    $passwd=$_COOKIE['passwd'];
                    print "<div id='box2'>
                    <div id='title1'>查看招聘条件：</div>";

                    $dbc=mysql_connect('127.0.0.1','root','connmysqlpass');
                    mysql_select_db('resume',$dbc);
                    mysql_query("SET NAMES 'utf8'");

                    print "<table align=center cellpadding='0'  cellspacing='0'>
                        <tbody>
                            <tr >
                                <th style='width:40px;height:36px;'>
                                    编号</th>
                                <th style='width:60px;height:36px;'>
                                    招聘类型</th>
                                <th style='width:40px;height:36px;'>
                                    年龄</th>
                                <th style='width:80px;height:36px;'>
                                    学历限制</th>
                                <th style='width:80px;height:36px;'>
                                    职业证</th>
                                <th style='width:80px;height:36px;'>
                                    开始日期</th>
                                <th style='width:80px;height:36px;'>
                                    截止日期</th>
                                <th style='width:80px;height:36px;'>
                                    编辑时间</th>
                                <th style='width:60px;height:36px;'>
                                    编辑人</th>
                            </tr>";

                    $query="SELECT * FROM zhuanxiang ORDER BY shaixuan_id DESC";
                    if ($result=mysql_query($query,$dbc)){
                        while ($row=mysql_fetch_array($result)){
                            $shaixuan_xueli=$row['xueli'];
                            if ($shaixuan_xueli==1){
                                $shaixuan_xueli='中专';
                            }elseif ($shaixuan_xueli==2){
                                $shaixuan_xueli='大专';
                            }elseif ($shaixuan_xueli==3){
                                $shaixuan_xueli='本科';
                            }elseif ($shaixuan_xueli==4){
                                $shaixuan_xueli='硕士';
                            }elseif ($shaixuan_xueli==5){
                                $shaixuan_xueli='博士';
                            }

                            print "<tr>
                                <td style='width:40px;height:24px;'>
                                    {$row['shaixuan_id']}</td>
                                <td style='width:60px;height:24px;'>
                                    {$row['leixing']}</td>
                                <td style='width:80px;height:24px;'>
                                    {$row['nianling']}</td>
                                <td style='width:60px;height:24px;'>
                                    {$shaixuan_xueli}</td>
                                <td style='width:60px;height:24px;'>
                                    {$row['zhiyezheng']}</td>
                                <td style='width:80px;height:24px;'>
                                    {$row['baomingtime1']}</td>
                                <td style='width:80px;height:24px;'>
                                    {$row['baomingtime2']}</td>
                                <td style='width:80px;height:24px;'>
                                    {$row['edittime']}</td>
                                <td style='width:60px;height:24px;'>
                                    {$row['editor']}</td>
                            </tr>";
                        }
                    }
                    print "</tbody>
                    </table>
                    </div>";

                    print "<div id='box3'>
                    <div id='title1'>设置招聘条件：</div>
                    <form id='shezhi' action='set_zhuanxiang.php' method='post'>
                    <div id='box4'>
                    <label class='fi2'>
                    <input type='radio' name='leixing' id='yiban' value='一般招聘' checked>一般招聘
                    <input type='radio' name='leixing' id='teshu' value='专项招聘'>专项招聘
                    </label>
                            
                    </div>
                    <div id='box4'>
                        <label class='fi1'>年&nbsp&nbsp&nbsp&nbsp龄：</label>
                        <input type='text' name='nian' class='ipt-t1'><label class='ipt-t2'>-</label>
                        <input type='text' name='yue' class='ipt-t1'><label class='ipt-t2'>-</label>
                        <input type='text' name='ri' class='ipt-t1'>
                    </div>
                    <div id='box4'>
                        <label class='fi1'>学历限制：</label>
                        <select name='xueli' class='ipt-t'>
                        <option value='未选择' selected>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp未选择</option>
                                      <option value='1'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp中专</option>
                                      <option value='2'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp大专</option>
                                      <option value='3'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp本科</option>
                                      <option value='4'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp硕士</option>
                                      <option value='5'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp博士</option>
                        </select>
                    </div>
                    <div id='box4'>
                        <label class='fi1'>职&nbsp业&nbsp证：</label>
                        <label class='fi3'>
                        <input type='radio' name='zhiyezheng' id='zhiyezheng1'   value='有' checked>有
                        </label>
                        <label class='fi3'>
                        <input type='radio' name='zhiyezheng' id='zhiyezheng2'   value='无'>无
                        </label>
                    </div>
                    <div id='box4'>
                        <label class='fi1'>开始日期：</label>
                        <input type='date' name='baomingtime1' id='baomingtime1' class='ipt-t' style='width: 240px;text-align: center;'>
                    </div>
                    <div id='box4'>
                        <label class='fi1'>截止日期：</label>
                        <input type='date' name='baomingtime2' id='baomingtime2' class='ipt-t' style='width: 240px;text-align: center;'>
                    </div>
                    <div id='box4'>
                        <input type='submit' name='queren' class='inputsubmit3' value='确定'>
                        <input type='reset' name='chongzhi' class='inputsubmit4' value='重置'>
                    </div>
                    </form>
                    </div>";


                    if ($_SERVER['REQUEST_METHOD']=='POST'){
                        unset($leixing);
                        unset($nianling);
                        unset($xueli);
                        unset($zhiyezheng);
                        unset($baomingtime1);
                        unset($baomingtime2);
                        unset($edittime);
                        unset($userid);
                        $leixing=$_POST['leixing'];
                        $nian=$_POST['nian'];
                        $yue=$_POST['yue'];
                        $ri=$_POST['ri'];
                        $nianling=$nian.-$yue.-$ri;
                        $nianling=date('Y-m-d',strtotime($nianling));

                        $xueli=$_POST['xueli'];
                        $zhiyezheng=$_POST['zhiyezheng'];
                        $baomingtime1=$_POST['baomingtime1'];
                        $baomingtime2=$_POST['baomingtime2'];
                        if($baomingtime1>$baomingtime2){
                            print "aaaaaaaaaaaaaaaaaaaa";
                        }
                        $edittime=date("Y-m-d H:i:s");
                        $userid=$_COOKIE['userid'];

                        $dbc=mysql_connect('127.0.0.1','root','connmysqlpass');
                        mysql_select_db('resume',$dbc);
                        mysql_query("SET NAMES 'utf8'");

                        if ($leixing=='一般招聘'){
                            $query="INSERT INTO zhuanxiang (leixing,edittime,editor) VALUES ('$leixing','$edittime','$userid')";
                        }
                        elseif ($leixing=='专项招聘'){
                            $query="INSERT INTO zhuanxiang (leixing,nianling,xueli,zhiyezheng,baomingtime1,baomingtime2,
edittime,editor)VALUES('$leixing','$nianling','$xueli','$zhiyezheng','$baomingtime1','$baomingtime2','$edittime','$userid')";
                        }
                        mysql_query($query,$dbc);
                        mysql_close($dbc);
                        ob_end_clean();
                       header('location:set_zhuanxiang.php');
                        }
                }else{
                    print "<script type='text/javascript'>
                        alert('您还没有登录，请登录后再试！');
                        
                    </script>";
                }
                mysql_close($dbc);
            ?>


    </div>
   
</body>
</html>
