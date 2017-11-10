<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <style type="text/css">
        body{
            font-size: 13px;
            line-height:150%;
        }
        table{
            border-collapse:collapse;border:none;
        }
        tr{

            text-align: center;
            border:solid #000 1px;

        }
        td{

            text-align: center;
            border:solid #000 1px;

        }
    </style>
</head>

<body>
<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    $resume_id=$_GET['number'];
}

$dbc=mysql_connect('127.0.0.1','root','connmysqlpass');
mysql_select_db('resume',$dbc);
mysql_query("SET NAMES 'utf8'");

$query="SELECT a.*,b.*,d.*,e.* 
    FROM jibenxinxi a,study b,work1 d,ability e
    WHERE a.resume_id=b.resume_id 
    AND b.resume_id=d.resume_id 
    AND d.resume_id=e.resume_id
    AND a.resume_id='$resume_id'";
if ($result=mysql_query($query,$dbc))
{
    while ($row=mysql_fetch_array($result)){

        print "<h1 style='text-align: center'>个人简历</h1>";
        print "<table border='1' cellpadding='0' cellspacing='0' align='center'>
        <tr>
        <td colspan='2' style='width: 72px;height: 30px;'>应聘岗位</td><td colspan='7' style='width: 434px;height: 30px;'>{$row['gangwei']}</td>
        <td rowspan='4' style='width: 96px;height: 128px;'><img src='./fujian/79/ask%20me-照片.jpg' style='width: 96px;height: 128px'></td>
        </tr>
        <tr>
        <td style='width: 48px;height: 30px;'>姓名</td><td style='width: 72px;height: 30px;'>{$row['xingming']}</td>
        <td style='width: 60px;height: 30px;'>性别</td><td style='width: 72px;height: 30px;'>{$row['xingbie']}</td>
        <td style='width: 72px;height: 30px;'>民族</td><td style='width: 60px;height: 30px;'>{$row['minzu']}</td>
        <td style='width: 72px;height: 30px;'>出生年月</td><td style='width: 130px;height: 30px;'>{$row['shengri']}</td>
        
        </tr>
        <tr>
        
        <td style='width: 60px;height: 30px;'>是否毕业</td><td style='width: 56px;height: 30px;'>{$row['yingjie']}</td>
        <td style='width: 60px;height: 30px;'>籍贯</td><td style='width: 60px;height: 30px;'>{$row['jiguan']}</td>
        <td style='width: 60px;height: 30px;'>身份证号</td><td colspan='3' style='height: 30px;'>{$row['shenfenzheng']}</td>
        </tr>
        <tr>
        <td style='width: 60px;height: 30px;'>联系电话</td><td colspan='2'>{$row['dianhua']}</td>
        <td style='width: 60px;height: 30px;'>电子邮箱</td><td colspan='2'>{$row['youjian']}</td>
        <td style='width: 74px;height: 30px;'>微信号</td><td>{$row['weixin']}</td>
        </tr>
        <tr>
        <td style='width: 74px;height: 30px;'>家庭住址</td><td colspan='9'>{$row['dizhi']}</td>
        </tr>
        </table>";
        print "<table border='1' cellspacing='0' cellpadding='0' align='center' style='border-top: hidden;'>
            <tr>
                <th colspan='6' style='height:33px;width: 718px;'>
                    <label style='font-size: 18px;font-weight: bold'>教育经历</label>
                </th>
            </tr>
            <tr>
                <td style='width: 74px;height: 30px;'>学历层次</td>
                <td style='width: 100px;height: 30px;'>入学时间</td>
                <td style='width: 100px;height: 30px;'>毕业时间</td>
                <td style='width: 74px;height: 30px;'>毕业院校</td>
                <td style='width: 74px;height: 30px;'>毕业专业</td>
                <td style='width: 74px;height: 30px;'>学历性质</td>                        
            </tr>
            
            ";
        $temp=0;
        for($i=1;$i<4;$i++){
            $t="cengci";
            $t=$t.$i;

            if ($row[$t]=='1'){
                $row[$t]='中专';
            }elseif ($row[$t]=='2'){
                $row[$t]='大专';
            }elseif ($row[$t]=='3'){
                $row[$t]='本科';
            }elseif ($row[$t]=='4'){
                $row[$t]='硕士';
            }elseif ($row[$t]=='5'){
                $row[$t]='博士';
            }elseif ($row[$t]==NULL){
                $temp=$i;
            }
        }
        if ($temp==0){
            for($j=1;$j<4;$j++){

                                  $name1="cengci";$name1=$name1.$j;
                                    $name2="starttime";$name2=$name2.$j;
                                    $name3="endtime";$name3=$name3.$j;
                                    $name4="school";$name4=$name4.$j;
                                    $name5="major";$name5=$name5.$j;
                                    $name6="xingzhi";$name6=$name6.$j;
                                    print "<tr>
                                <td style='width: 74px;height: 30px;'>{$row[$name1]}</td>
                                <td style='width: 100px;height: 30px;'>{$row[$name2]}</td>
                                <td style='width: 100px;height: 30px;'>{$row[$name3]}</td>
                                <td style='width: 74px;height: 30px;'>{$row[$name4]}</td>
                                <td style='width: 74px;height: 30px;'>{$row[$name5]}</td>
                                <td style='width: 74px;height: 30px;'>{$row[$name6]}</td>
                                    </tr>";

            }

        }elseif ($temp==2){
            print "<tr>
                <td style='width: 74px;height: 30px;'>{$row['cengci1']}</td>
                <td style='width: 100px;height: 30px;'>{$row['starttime1']}</td>
                <td style='width: 100px;height: 30px;'>{$row['endtime1']}</td>
                <td style='width: 74px;height: 30px;'>{$row['school1']}</td>
                <td style='width: 74px;height: 30px;'>{$row['major1']}</td>
                <td style='width: 74px;height: 30px;'>{$row['xingzhi1']}</td> 
                    </tr>
                <tr>
                <td style='width: 74px;height: 30px;'>{$row['cengci3']}</td>
                <td style='width: 100px;height: 30px;'>{$row['starttime3']}</td>
                <td style='width: 100px;height: 30px;'>{$row['endtime3']}</td>
                <td style='width: 74px;height: 30px;'>{$row['school3']}</td>
                <td style='width: 74px;height: 30px;'>{$row['major3']}</td>
                <td style='width: 74px;height: 30px;'>{$row['xingzhi3']}</td> 
                </tr>";

        }
        elseif($temp==3){
            print "<tr>
                <td style='width: 74px;height: 30px;'>{$row['cengci1']}</td>
                <td style='width: 100px;height: 30px;'>{$row['starttime1']}</td>
                <td style='width: 100px;height: 30px;'>{$row['endtime1']}</td>
                <td style='width: 74px;height: 30px;'>{$row['school1']}</td>
                <td style='width: 74px;height: 30px;'>{$row['major1']}</td>
                <td style='width: 74px;height: 30px;'>{$row['xingzhi1']}</td> 
                    </tr>";

        }
        print "</table>";

        print "<table border='1' cellspacing='0' cellpadding='0' align='center' style='border-top: hidden;'>
                <tr>
                <th colspan='6' style='height:33px;width: 718px;'>
                    <label style='font-size: 18px;font-weight: bold'>工作经历</label>
                </th>
                </tr>";
            if($row['getwork1']!=NULL){
                print "<tr>
                <td style='width: 64px;height: 30px;'>开始时间</td>
                <td style='width: 64px;height: 30px;'>结束时间</td>
                <td style='width: 100px;height: 30px;'>所在单位</td>
                <td style='width: 72px;height: 30px;'>所在科室</td>
                <td style='width: 60px;height: 30px;'>职称职务</td>
                <td style='width: 40px;height: 30px;'>备注</td>                        
                </tr>";
                print "<tr>
                <td style='width: 64px;height: 30px;'>{$row['getwork1']}</td>
                <td style='width: 64px;height: 30px;'>{$row['endwork1']}</td>
                <td style='width: 100px;height: 30px;'>{$row['danwei1']}</td>
                <td style='width: 72px;height: 30px;'>{$row['keshi1']}</td>
                <td style='width: 60px;height: 30px;'>{$row['zhiwu1']}</td>
                <td style='width: 40px;height: 30px;'>{$row['comment1']}</td>    
                </tr>";
            }
        if($row['getwork2']!=NULL){
            print "<tr>
                <td style='width: 64px;height: 30px;'>{$row['getwork2']}</td>
                <td style='width: 64px;height: 30px;'>{$row['endwork2']}</td>
                <td style='width: 100px;height: 30px;'>{$row['danwei2']}</td>
                <td style='width: 72px;height: 30px;'>{$row['keshi2']}</td>
                <td style='width: 60px;height: 30px;'>{$row['zhiwu2']}</td>
                <td style='width: 40px;height: 30px;'>{$row['comment2']}</td>    
                </tr>";
        }
        if($row['getwork3']!=NULL){
            print "<tr>
                <td style='width: 64px;height: 30px;'>{$row['getwork3']}</td>
                <td style='width: 64px;height: 30px;'>{$row['endwork3']}</td>
                <td style='width: 100px;height: 30px;'>{$row['danwei3']}</td>
                <td style='width: 72px;height: 30px;'>{$row['keshi3']}</td>
                <td style='width: 60px;height: 30px;'>{$row['zhiwu3']}</td>
                <td style='width: 40px;height: 30px;'>{$row['comment3']}</td>    
                </tr>";
        }

        if($row['getwork1']==NULL&&$row['getwork2']==NULL&&$row['getwork3']==NULL){
            print "<tr>
            <td colspan='6' style='height:33px;width: 718px;'>
                    没有填写工作经历
                </td>
            </tr>";

        }
        print "</table>";

        print "<table border='1' cellspacing='0' cellpadding='0' align='center' style='border-top: hidden;'>
                <tr>
                <th colspan='6' style='height:33px;width: 718px;'>
                    <label style='font-size: 18px;font-weight: bold'>专业能力</label>
                </th>
                </tr>";


        if($row['miaoshu']=="专业能力信息未填写"){
            print "<tr>
            <td colspan='6' style='height:33px;width: 718px;'>
                    没有填写专业能力信息
                </td>
            </tr>";
        }
        elseif($row['zhicheng']!=NULL) {
            print "<tr>
            <td style='width: 72px;height: 30px;'>职称</td>
            <td style='height: 30px;width: 108px;'>{$row['zhicheng']}</td>
            <td style='width: 72px;height: 30px;'>取得时间</td>
            <td style='height: 30px;width: 108px;'>{$row['qudetime']}</td>
            </tr>";
            print "<tr> <td style='width: 72px;height: 30px;'>专业</td>
            <td style='height: 30px;width: 108px;'>{$row['zhuan_ye']}</td>
            <td style='width: 72px;height: 30px;'>专业特长</td>
            <td style='height: 30px;width: 108px;'>{$row['techang']}</td>
            </tr>";

        }
        if ($row['startjinxiu']!=NULL){
            print "<tr>
            <td style='width: 72px;height: 30px;'>进修时间</td>
            <td style='height: 30px;width: 108px;'>{$row['startjinxiu']}</td>
            <td style='width: 72px;height: 30px;'>结束时间</td>
            <td style='height: 30px;width: 108px;'>{$row['endjinxiu']}</td>
            </tr>";
            print "<tr>
            <td colspan='4' style='width: 718px;text-align: left;'>
            <label style='font-size: 14px;font-weight: bold'>进修经历描述：</label></br>
            &nbsp&nbsp&nbsp&nbsp{$row['miaoshu']}</td>
            </tr>";

        }

    }
}

?>
</body>
</html>




