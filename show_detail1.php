<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>个人简历详细信息</title>
    <style type="text/css">
        body{
            font-size: 14px;
            line-height:150%;
        }
        table{
            border-collapse:collapse;border:none;
        }
        tr{

            text-align: center;
            border:solid #000 1px;

        }
        a{
            text-decoration: none;
        }
        td{

            text-align: center;
            border:solid #000 1px;

        }
        .content1{
            margin:5px 4px 20px 6px;
            line-height: 150%;
        }
        .title1{
            margin:5px 6px 10px 6px;
            line-height: 150%;
            text-align: center;
            font-size: 22px;
            font-weight:bold;
        }
        .title2{
            line-height: 150%;
            text-align: left;
            font-size: 20px;
            font-weight:bold;
            margin: 0 0 0 18px;
        }
        .inputsubmit{
            margin:36px ;

        }

    </style>

</head>
<script language="javascript">
    function printdiv(printpage)
    {
        var headstr = "<html><head><title></title></head><body>";
        var footstr = "</body>";
        var newstr = document.all.item(printpage).innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr+newstr+footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
    }

    function sumbit_sure(){
        var gnl=confirm("确定要提交?");
        if (gnl==true){
            return true;
        }else{
            return false;
        }
    }
</script>


<body>
<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    $resume_id=$_GET['number'];
    $flag=0;
}
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $resume_id=$_POST['resume_id'];
    $zhuangtai=$_POST['zhuangtai'];
    $flag=1;
}



$dbc=mysql_connect('127.0.0.1','root','connmysqlpass');
mysql_select_db('resume',$dbc);
mysql_query("SET NAMES 'utf8'");

if ($flag==1){
    $query="UPDATE jibenxinxi SET zhuangtai='$zhuangtai' WHERE resume_id='$resume_id'";
    mysql_query($query,$dbc);
}

$query="SELECT a.*,b.*,d.*,e.* 
    FROM jibenxinxi a,study b,work1 d,ability e
    WHERE a.resume_id=b.resume_id 
    AND b.resume_id=d.resume_id 
    AND d.resume_id=e.resume_id
    AND a.resume_id='$resume_id'";
if ($result=mysql_query($query,$dbc))
{
    while ($row=mysql_fetch_array($result)){

        $name=$row['xingming'];
        $dir="./fujian/$resume_id/$name-照片.jpg";
        print "<div id='div_print'>";
        print "<div class='title1'>个人简历</div>";
        print "<table border='1' cellpadding='0' cellspacing='0' align='center'>
        <tr>
        <td style='width: 72px;height: 34px;'>应聘岗位</td><td colspan='3' style='width: 204px;height: 34px;'>{$row['gang']}</td>";
        if ($row['zigezheng']=='有'){
            if ($row['zhiyezige']!='无'){
                print "<td style='width: 60px;height: 34px;'>执业资格</td><td colspan='2' style='height: 34px;'><a href='show_fujian.php?id=zhiyezige&&resume_id=$resume_id' target='_BLANK'>{$row['zhiyezige']}</a></td>";
                print "<td style='width: 130px;height: 34px;'><a href='show_fujian.php?id=zigezheng&&resume_id=$resume_id'>资格证</a></td>";
            }
            else{
                print "<td style='width: 60px;height: 34px;'>执业资格</td><td colspan='2' style='height: 34px;'>{$row['zhiyezige']}</td>";
                print "<td style='width: 130px;height: 34px;'><a href='show_fujian.php?id=zigezheng&&resume_id=$resume_id'>资格证</a></td>";
            }
        }elseif ($row['zigezheng']=='无'){
            if ($row['zhiyezige']!='无'){
                print "<td style='width: 60px;height: 34px;'>执业资格</td><td colspan='3' style='height: 34px;'><a href='show_fujian.php?id=zhiyezige&&resume_id=$resume_id'>{$row['zhiyezige']}</a></td>";
            }
            else{
                print "<td style='width: 60px;height: 34px;'>执业资格</td><td colspan='3' style='height: 34px;'>{$row['zhiyezige']}</td>";
            }
        }




         print "
        <td rowspan='4' style='width: 96px;height: 128px;'><a href='show_fujian.php?id=zhaopian&&resume_id=$resume_id'><img src='$dir' style='width: 104px;height: 140px'></a></td>
        </tr>
        <tr>
        <td style='width: 48px;height: 34px;'>姓名</td><td style='width: 72px;height: 34px;'>{$row['xingming']}</td>
        <td style='width: 60px;height: 34px;'>性别</td><td style='width: 72px;height: 34px;'>{$row['xingbie']}</td>
        <td style='width: 72px;height: 34px;'>民族</td><td style='width: 60px;height: 34px;'>{$row['minzu']}</td>
        <td style='width: 72px;height: 34px;'>出生年月</td><td style='width: 130px;height: 34px;'>{$row['shengri']}</td>
        
        </tr>
        <tr>
        
        <td style='width: 60px;height: 34px;'>是否毕业</td><td style='width: 56px;height: 34px;'>{$row['yingjie']}</td>
        <td style='width: 60px;height: 34px;'>籍贯</td><td style='width: 60px;height: 34px;'>{$row['jiguan']}</td>
        <td style='width: 60px;height: 34px;'>身份证号</td><td colspan='3' style='height: 34px;'><a href='show_fujian.php?id=shenfenzheng&&resume_id=$resume_id'>{$row['shenfenzheng']}</a></td>
        </tr>
        <tr>
        <td style='width: 60px;height: 34px;'>联系电话</td><td colspan='2'>{$row['dianhua']}</td>
        <td style='width: 60px;height: 34px;'>电子邮箱</td><td colspan='2'>{$row['youjian']}</td>
        <td style='width: 74px;height: 34px;'>微信号</td><td>{$row['weixin']}</td>
        </tr>
        <tr>
        <td style='width: 74px;height: 34px;'>家庭住址</td><td colspan='9'>{$row['dizhi']}</td>
        </tr>
        </table>";
        print "<table border='1' cellspacing='0' cellpadding='0' align='center' style='border-top: hidden;'>
            <tr>
                <th colspan='6' style='height:37px;width: 727px;'>
                <div class='title2'>教育经历</div>
                 
                </th>
            </tr>
            <tr>
                <td style='width: 74px;height: 34px;'>学历层次</td>
                <td style='width: 100px;height: 34px;'>入学时间</td>
                <td style='width: 100px;height: 34px;'>毕业时间</td>
                <td style='width: 100px;height: 34px;'>毕业院校</td>
                <td style='width: 74px;height: 34px;'>毕业专业</td>
                <td style='width: 52px;height: 34px;'>学历性质</td>                        
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

            for($j=1;$j<4;$j++){

                $name1="cengci";$name1=$name1.$j;
                $name2="starttime";$name2=$name2.$j;
                $name3="endtime";$name3=$name3.$j;
                $name4="school";$name4=$name4.$j;
                $name5="major";$name5=$name5.$j;
                $name6="xingzhi";$name6=$name6.$j;
                print "<tr>
                                <td style='width: 74px;height: 34px;'><a href='show_fujian.php?id=$name1&&resume_id=$resume_id'>{$row[$name1]}</a></td>
                                <td style='width: 100px;height: 34px;'>{$row[$name2]}</td>
                                <td style='width: 100px;height: 34px;'>{$row[$name3]}</td>
                                <td style='width: 100px;height: 34px;'>{$row[$name4]}</td>
                                <td style='width: 74px;height: 34px;'>{$row[$name5]}</td>
                                <td style='width: 52px;height: 34px;'>{$row[$name6]}</td>
                                    </tr>";
            }



        print "</table>";

        print "<table border='1' cellspacing='0' cellpadding='0' align='center' style='border-top: hidden;'>
                <tr>
                <th colspan='6' style='height:37px;width: 727px;'>
                    <div class='title2'>工作经历</div>
                </th>
                </tr>";

            print "<tr>
                <td style='width: 64px;height: 34px;'>开始时间</td>
                <td style='width: 64px;height: 34px;'>结束时间</td>
                <td style='width: 100px;height: 34px;'>所在单位</td>
                <td style='width: 72px;height: 34px;'>所在科室</td>
                <td style='width: 60px;height: 34px;'>职称职务</td>
                <td style='width: 40px;height: 34px;'>备注</td>                        
                </tr>";
            print "<tr>
                <td style='width: 64px;height: 34px;'>{$row['getwork1']}</td>
                <td style='width: 64px;height: 34px;'>{$row['endwork1']}</td>
                <td style='width: 100px;height: 34px;'>{$row['danwei1']}</td>
                <td style='width: 72px;height: 34px;'>{$row['keshi1']}</td>
                <td style='width: 60px;height: 34px;'>{$row['zhiwu1']}</td>
                <td style='width: 40px;height: 34px;'>{$row['comment1']}</td>    
                </tr>";
        print "<tr>
                <td style='width: 64px;height: 34px;'>{$row['getwork2']}</td>
                <td style='width: 64px;height: 34px;'>{$row['endwork2']}</td>
                <td style='width: 100px;height: 34px;'>{$row['danwei2']}</td>
                <td style='width: 72px;height: 34px;'>{$row['keshi2']}</td>
                <td style='width: 60px;height: 34px;'>{$row['zhiwu2']}</td>
                <td style='width: 40px;height: 34px;'>{$row['comment2']}</td>    
                </tr>";
        print "<tr>
                <td style='width: 64px;height: 34px;'>{$row['getwork3']}</td>
                <td style='width: 64px;height: 34px;'>{$row['endwork3']}</td>
                <td style='width: 100px;height:34px;'>{$row['danwei3']}</td>
                <td style='width: 72px;height: 34px;'>{$row['keshi3']}</td>
                <td style='width: 60px;height: 34px;'>{$row['zhiwu3']}</td>
                <td style='width: 40px;height: 34px;'>{$row['comment3']}</td>    
                </tr>";

        print "</table>";

        print "<table border='1' cellspacing='0' cellpadding='0' align='center' style='border-top: hidden;'>
                <tr>
                <th colspan='6' style='height:37px;width: 727px;'>
                <div class='title2'>专业能力</div>
                </th>
                </tr>";

        print "<tr>
            <td style='width: 72px;height: 34px;'>职称</td>
            <td style='height: 34px;width: 108px;'>{$row['zhicheng']}</td>
            <td style='width: 72px;height: 34px;'>取得时间</td>
            <td style='height: 34px;width: 108px;'>{$row['qudetime']}</td>
            </tr>";
        print "<tr> <td style='width: 72px;height: 34px;'>专业</td>
            <td style='height: 34px;width: 108px;'>{$row['zhuan_ye']}</td>
            <td style='width: 72px;height: 34px;'>专业特长</td>
            <td style='height: 34px;width: 108px;'>{$row['techang']}</td>
            </tr>";
        print "<tr>
            <td style='width: 72px;height: 34px;'>进修时间</td>
            <td style='height: 34px;width: 108px;'>{$row['startjinxiu']}</td>
            <td style='width: 72px;height: 34px;'>结束时间</td>
            <td style='height: 34px;width: 108px;'>{$row['endjinxiu']}</td>
            </tr>";
        print "<tr>
            <td colspan='4' style='width: 718px;text-align:left;'>
            
            <label style='font-size: 16px;font-weight: bold;line-height: 180%;'>进修经历描述：</label></br>
            <div class='content1'>&nbsp&nbsp&nbsp&nbsp{$row['miaoshu']}</div>
            
            </td>
            </tr></table>";

    }
    print "</div>";
    print "<div style='text-align: center;margin: 16px auto auto auto;'>
            <form name='edit_status' id='edit_status' method='post' action='show_detail1.php' onsubmit='return sumbit_sure()'>
            <input type='hidden' name='resume_id' value='$resume_id' >
            <select name='zhuangtai'>
            <option value='未设置' selected>未设置</option>
            <option value='正在审核中'>正在审核中</option>
            <option value='审核未通过，不符合条件'>审核未通过，不符合条件</option>
            <option value='初审通过，请密切关注通知'>初审通过，请密切关注通知</option>
            <option value='审核未通过，请继续完善简历'>审核未通过，请继续完善简历</option>
            </select>
            <input type='submit' name='queren' value='确&nbsp&nbsp认'>
            </br>
            <textarea name='huifu' id='huifu'></textarea>
            
        </form>
        </div>";

}


?>
<div style="text-align: center;margin:16px auto auto auto">
<input type='button' name='queren' value='打&nbsp&nbsp印'  onClick="printdiv('div_print');">
<a href='admin_index.php'><input type='button' name='fanhui' value='返&nbsp&nbsp回'></a>
</div>
</body>
</html>




