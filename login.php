<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>鹤壁市人民医院简历投递管理</title>
<style>
        body
        {
            margin: 0;
            padding: 0;
            background: #edf7ff;
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
            background: #edf7ff;
        }
        #box1
        {
            width: 585px;
            height: 386px;
            margin: 100px auto 0 auto;
            text-align: left;
        }
        #logo
        {	
        	font-size: 24px;
            width: 350px;
            height: 42px;
      
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

<body style="margin: 0px;">
<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$userid=$_POST['userid'];
	$passwd=$_POST['passwd'];
	$ip = $_SERVER["REMOTE_ADDR"];
	if ($userid!=NULL&&$passwd!=NULL) {
		setcookie('userid',$_POST['userid']);
		setcookie('passwd',$_POST['passwd']);
		$dbc=mysql_connect('127.0.0.1','root','connmysqlpass');
    	mysql_select_db('resume',$dbc);

    	mysql_query("SET NAMES 'utf8'");
    
    	$query="SELECT passwd FROM admininfo WHERE userid='$userid'";/*少了个单引号半天没看出来*/
    	if($result=mysql_query($query,$dbc)){
    	$row=mysql_fetch_array($result);
    	
    	if($passwd!=$row['passwd']){
    		print "<script type='text/javascript'>
    		alert('用户名或者密码不正确，请重新输入。');</script>";

    	} else{
    		ob_end_clean();
    		header("Location:admin_index.php?");
    		exit();
    	}/*2017-9-8 17:25*/
    	
    	
    }

		# code...
	}else{
		print "<script type='text/javascript'>
		alert('请输入用户名和密码。');
		</script>";
	}


	# code...
}

?>
	<div id="wrapper">
		<div id="box1">
		<h1 id="logo">
                鹤壁市人民医院简历管理系统</h1>
			<div id="login_box">
			<form action="login.php" method="post">
                <div class="fi">
                    <label class="lb ">
                        用户名：</label>
                    <input name="userid" type="text" id="userid" class="ipt-t" style="width: 200px;" />
                </div>
                <div class="fi">
                    <label class="lb">
                        密&nbsp;&nbsp;码：</label>
                    <input name="passwd" type="password" id="passwd" class="ipt-t" style="width: 200px;" />
                </div>
                <div class="fi fi-nolb">
                    <label class="lb">
                    </label>
                        <input type="submit" name="ImageButton2" value="登 录" id="ImageButton2" class="inputsubmit" />
				<input type="reset" class="inputsubmit" value="重  置" /> 

                </div>
                </form>
		</div>
	</div>

</body>
</html>
