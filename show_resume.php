<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>查看简历投递信息</title>
<style>
        body
        {
            margin: 0;
            padding: 0;
            background: #edf7ff url("images/login_bg2.jpg") top repeat-x;
            font-size: 12px;
            color: #666666;
            line-height: 150%;
        }
        #wrapper
        {
            width: 100%;
            height: 600px;
            margin: 0 auto;
            text-align: center;
            background: #edf7ff url("images/login_bg1.jpg") top repeat-x;
        }
        #box1
        {
            width: 585px;
            height: 386px;
            margin: 250px auto 0 auto;
            text-align: left;
        }
        #logo
        {
            width: 350px;
            height: 42px;
            background: url("images/title1.png") no-repeat;
            text-indent: -9999px;
            margin: 0 0 20px 0;
        }
        #login_box
        {
            width: 300px;
        }
        .fi
        {
            margin-top: 10px;
            text-align: left;
        }
        .fi-nolb
        {
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
        .btn
        {
            background-image: url("images/login_btn.gif");
            background-color: transparent;
            background-repeat: no-repeat;
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
            width: 100%;
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
.inputsubmit{width:74px;height:21px;color:#36434E;border:0px;cursor:pointer;font-size:12px;}
.inputsubmit:hover{background-position:0 -21px;font-size:12px;}
    </style>
</head>

<body>

<script type="text/javascript">
	function show_re(){
		document.tiaojian.action="show_resume.php";
		document.forms['tiaojian'].submit();
	}
	function export_re(){
		document.tiaojian.action="export_resume.php";
		document.forms['tiaojian'].submit();
	}</script>


<div id="wrapper">
<p><b>选择筛选条件</b></p>
	<form  name="tiaojian" method="post">
			<table align="center" width="80%" border="1" style="text-align: center;">   <!--根据条件筛选简历-->
			<tr>
				<td>
				姓&nbsp&nbsp&nbsp&nbsp名：<input type="text" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>">
				</td>
				<td>
				提交日期：<input type="date" name="starttime" style="width: 90px" value="<?php if(isset($_POST['starttime'])){echo $_POST['starttime'];}?>">——<input type="date" name="endtime" style="width: 90px" value="<?php if(isset($_POST['endtime'])){echo $_POST['endtime'];}?>">
				</td>
			</tr>

			<tr>
				<td>
				<input type="button" style="align:center;" name="show_resume" value="确定" onclick="show_re();">
				</td>

				<td>
				<input type="button" name="export_resume" value="批量导出" onclick="export_re();">
				</td>
			</tr>
			</table>			
    		</form>

		
<?php
	$userid=$_COOKIE['userid'];
	$passwd=$_COOKIE['passwd'];
	$name=$_POST['name'];
	$starttime=$_POST['starttime'];
	$endtime=$_POST['endtime'];

	$dbc=mysql_connect('127.0.0.1','root','connmysqlpass');
	mysql_select_db('resume',$dbc);
	mysql_query("SET NAMES 'utf8'");    //设置mysql默认utf-8


	if ($name!=""&&$starttime!=""&&$endtime!="") {
		$query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,c.zhiyezige,a.edittime
		FROM jibenxinxi a,study b,ability c
		WHERE a.resume_id=b.resume_id
		AND b.resume_id=c.resume_id
		AND a.xingming='$name'
		AND a.edittime>='$starttime'
		AND a.edittime<='$endtime'";
		# code...
	}else if ($name==""&&$starttime!=""&&$endtime!="") {
		$query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,c.zhiyezige,a.edittime
		FROM jibenxinxi a,study b,ability c
		WHERE a.resume_id=b.resume_id
		AND b.resume_id=c.resume_id
		AND a.edittime>='$starttime'
		AND a.edittime<='$endtime'";
		# code...
	}else if ($name!=""&&$starttime==""&&$endtime!="") {
		$query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,c.zhiyezige,a.edittime
		FROM jibenxinxi a,study b,ability c
		WHERE a.resume_id=b.resume_id
		AND b.resume_id=c.resume_id
		AND a.xingming='$name'
		AND a.edittime<='$endtime'";
		# code...
	}else if ($name!=""&&$starttime!=""&&$endtime=="") {
		$query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,c.zhiyezige,a.edittime
		FROM jibenxinxi a,study b,ability c
		WHERE a.resume_id=b.resume_id
		AND b.resume_id=c.resume_id
		AND a.xingming='$name'
		AND a.edittime>='$starttime'";

		# code...
	}else if ($name==""&&$starttime==""&&$endtime!="") {
		$query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,c.zhiyezige,a.edittime
		FROM jibenxinxi a,study b,ability c
		WHERE a.resume_id=b.resume_id
		AND b.resume_id=c.resume_id
		AND a.edittime<='$endtime'";
		# code...
	}else if ($name==""&&$starttime!=""&&$endtime=="") {
		$query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,c.zhiyezige,a.edittime
		FROM jibenxinxi a,study b,ability c
		WHERE a.resume_id=b.resume_id
		AND b.resume_id=c.resume_id
		AND a.edittime>='$starttime'";
		# code...
	}else if ($name!=""&&$starttime==""&&$endtime=="") {
		$query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,c.zhiyezige,a.edittime
		FROM jibenxinxi a,study b,ability c
		WHERE a.resume_id=b.resume_id
		AND b.resume_id=c.resume_id
		AND a.xingming='$name'";
		# code...
	}else {
		$query="SELECT a.resume_id,a.laiyuan,a.xingming,a.xingbie,a.shengri,b.cengci1,b.cengci2,b.cengci3,b.school1,b.major1,b.school2,b.major2,b.school3,b.major3,b.endtime1,b.endtime2,b.endtime3,a.jiguan,a.dianhua,c.zhiyezige,a.edittime
		FROM jibenxinxi a,study b,ability c
		WHERE a.resume_id=b.resume_id
		AND b.resume_id=c.resume_id";
		# code...
	}

	
		if ($result=mysql_query($query,$dbc)) {

			print "
					<table border=1 border-style:dotted style='text-align:center ' width='100%'>	
					<tr>
							<th width=37>
							简历序号						
							</th>	

							<th width=37>
							简历来源
							</th>

							<th width=54>
							姓名
							</th>
							<th width=32>
							性别
							</th>
							
							<th width=68>
							出生年月
							</th>
							<th width=54>
							学历
							</th>
							

							<th width=130>
							毕业院校
							</th>
							<th width=130>
							专业
							</th>
							<th width=88>
							毕业时间
							</th>
							
							
							<th width=74>
							籍贯
							</th>
							<th width=97>
							联系电话
							</th>
							<th width=58>
							执业情况
							</th>
							<th width=68>
							操作
							</th>

						</tr>";
		while($row=mysql_fetch_array($result))
			{
				
				
				print "
					<table border=1 style='text-align:center' width='100%'>	
					<tr>
							<td width=37>
							{$row['resume_id']}						
							</td>	

							<td width=37>
							{$row['laiyuan']}
							</td>

							<td width=54>
							{$row['xingming']}
							</td>
							<td width=32>
							{$row['xingbie']}
							</td>
							
							<td width=68>
							{$row['shengri']}
							</td>
							<td width=54>
							{$row['cengci1']}</br>{$row['cengci2']}</br>{$row['cengci3']}
							</td>
							<td width=130>
							{$row['school1']}</br>{$row['school2']}</br>{$row['school3']}
							</td>
							<td width=130>
							{$row['major1']}</br>{$row['major2']}</br>{$row['major3']}
							</td>
							<td width=88>
							{$row['endtime1']}</br>{$row['endtime2']}</br>{$row['endtime3']}
							</td>
							
							
							
							<td width=74>
							{$row['jiguan']}
							</td>
							
							<td width=97>
							{$row['dianhua']}
							</td>
							<td width=58>
							{$row['zhiyelezige']}
							</td>
							<td width=68>
							<a href=\"show_detail.php?number={$row['resume_id']}\">详细信息</a></br>
							
							<a href=\"export.php?number={$row['resume_id']}\">下载附件</a>
							</td>

						</tr>";	
			}

		# code...
		}


mysql_close($dbc);
?>
</div>


</body>
</html>
