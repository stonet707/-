<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>人力资源  /  应聘表格_鹤壁市人民医院</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/css/index.css" rel="stylesheet" type="text/css" />
<link href="/member/templets/style/base.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/member/templets/js/j.js"></script>
<script language='javascript' src="/member/templets/js/main.js"></script>
<script type="text/javascript" src="/member/templets/js/inputAutoClear.js"></script>
<script type="text/javascript" src="/member/templets/js/load.js"></script>
<script type="text/javascript" src="/member/templets/js/leftmenu.js"></script>
<script type="text/javascript" src="/member/templets/js/checkSubmit.js"></script>
</head>
<script type="text/javascript">
function bodyLoad(){

var dateTime=new Date();
var hh=dateTime.getHours();//小时
var mm=dateTime.getMinutes();//分钟
var ss=dateTime.getSeconds();//秒钟

var yy=dateTime.getFullYear();//年份
var MM=dateTime.getMonth()+1; //月份-因为1月这个方法返回为0，所以加1
var dd=dateTime.getDate();//日数

var week=dateTime.getDay();//周(0~6,0表示星期日)
var days=[ "日 ", "一 ", "二 ", "三 ", "四 ", "五 ", "六 ",]

document.getElementById("date").innerHTML=yy+"年"+MM+"月"+dd+"日 "+"星期"+days[week] ;


setTimeout(bodyLoad,1000);
}
</script>
<script language="javascript" type="text/javascript" src="/ie_include/dedeajax2.js"></script>
<script type="text/javascript">
function CheckLogin(){
    var taget_obj = document.getElementById('_userlogin');
    myajax = new DedeAjax(taget_obj,false,false,'','','');
    myajax.SendGet2("/member/ajax_loginsta.php");
    DedeXHTTP = null;
  }
</script>

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/work.js"></script>
<script type="text/javascript" src="/js/videocommon.js"></script>
<SCRIPT type="text/javascript" src="/js/jcarousellite_1.0.1.js"></SCRIPT>
<script type="text/javascript">
$(document).ready(function() {
  jQuery.jqtab = function(tabtit,tab_conbox,shijian) {
    $(tab_conbox).find("li").hide();
    $(tabtit).find("li:first").addClass("thistab").show(); 
    $(tab_conbox).find("li:first").show();
  
    $(tabtit).find("li").bind(shijian,function(){
      $(this).addClass("thistab").siblings("li").removeClass("thistab"); 
      var activeindex = $(tabtit).find("li").index(this);
      $(tab_conbox).children().eq(activeindex).show().siblings().hide();
      return false;
    });
  
  };
  /*调用方法如下：*/
  $.jqtab("#tabs","#tab_conbox","click");
  
});
</script>
<script type="text/javascript" src="/js/jquery.rollGallery_yeso.js"></script>
<script type="text/javascript">
$(document).ready(function($){
  
  $("#toplist").rollGallery({
    direction:"top",
    speed:3000,
    showNum:3
  });
  
  
});
</script>
<script type="text/javascript" src="/js/jquery.slide.js"></script>
<script type="text/javascript">
$(function (){
  
  /* 用按钮控制图片左右滚动 */
  $(".hotPic .JQ-slide").Slide({
    effect:"scroolLoop",
    autoPlay:false,
    speed:"normal",
    timer:3000,
    steps:1
  });
  
  
});
</script>
<script type="text/javascript">
$(function(){
  $("#closepiaofu").click(function () {
    $("#wzsse").hide();
  });
})
</script>
<body onLoad="bodyLoad()">
<div class="header">
     <div class="top_maining">
         <div class="top_main">
              <div class="top">
                   <div class="top_left">欢迎光临鹤壁市人民医院官方网站<span class="dt2">今天是</span><span id="date" ></span></div>
                   <div class="top_right">
                      <ul>
                          <div id="_userlogin">
                          <div class="userlogin">
                           <form name="userlogin" action="/member/index_do.php" method="POST">
                            <input type="hidden" name="fmdo" value="login" />
                            <input type="hidden" name="dopost" value="login" />
                            <input type="hidden" name="keeptime" value="604800" />
                             <li class="user_name"><span>用户名：</span><input type="text" name="userid"></li>
                            <li class="password"><span>密码：</span><input type="password" name="pwd"></li>
                            <div class="submit">
                           <li><input id="btnSignCheck" type="submit" value=' ' class="bt"></li>
                           <li class="forget"><a href="/member/resetpassword.php">忘记密码？</a>|<a href="/member/index_do.php?fmdo=user&dopost=regnew">免费注册</a></li> </div>
                           </form>
                          </div>
                         </div> 
                        <script language="javascript" type="text/javascript">CheckLogin();</script>
                      </ul>
                   </div>
              </div>
         </div>
     </div>
     <div class="logo">
          <div class="logo_left"><a href="/"><img src="/images/logo.png"></a></div>
          <div class="logo_right">
               <div class="logo_right1"><a href="/patientserve/tesekeshi/" class="t1">特色科室</a><a href="/tijianzhongxin/" class="t2">健康体检</a><a href="/member/index.php" class="t3">院务邮箱</a></div>              
                <form  name="formsearch" action="/ie_plus/search.php">
               <div class="logo_right2"><input type="text" class="it1" id="search-keyword" name='keyword'><input type="submit" class="it2" value="搜索"></div>
               </form>
          </div>
     </div>
     <div class="navbg">
        <div class="col960">
            <ul id="navul" class="cl">
              <li class="navhome"><a href="/"  class="nav">网站首页</a></li>
              
              <li><a href="/profile/about/" class="nav">医院概况</a>
              
                <ul>
                
                  <li><a href="/profile/about/">医院简介</a></li>
                
                  <li><a href="/profile/lingdaotuandui/">领导团队</a></li>
                
                  <li><a href="/profile/yiyuanrongyu/">医院荣誉</a></li>
                
                  <li><a href="/profile/yiyuanwenhua/">文化活动</a></li>
                
                  <li><a href="/profile/xianjinshebei/">先进设备</a></li>
                
                  <li><a href="/profile/chengcheluxian/">乘车路线</a></li>
                
                </ul>
              </li>
              
              <li><a href="/news/" class="nav">新闻动态</a>
              
                <ul>
               
                  <li><a href="/news/yiyuanxinwen/" >医院新闻</a></li>
               
                  <li><a href="/news/yiyuangonggao/" >医院公告</a></li>
               
                  <li><a href="/news/yiyuanyuanbao/" >医院院报</a></li>
               
                  <li><a href="/news/shipinbaodao/" >视频报道</a></li>
               
               </ul>
              </li>
              
              <li><a href="/department/" class="nav">科室导航</a>
              
                <ul class="dh">
               <div class="ChildNavIn">
          <div class="NavDeptIn">
                        <div class="NavDeptInList">
                        
                        <a href="/department/yaojike/">药剂科</a>
                        
                        <a href="/department/laonianbingnake/">老年病内科</a>
                        
                        <a href="/department/xiaohuaxueyenake/">消化血液内科</a>
                        
                        <a href="/department/xinxueguannake/">心血管内科</a>
                        
                        <a href="/department/huxinake/">呼吸内科</a>
                        
                        <a href="/department/shenjingnake/">神经内科</a>
                        
                        <a href="/department/nafenmike/">内分泌科</a>
                        
                        <a href="/department/shennake/">肾内科</a>
                        
                        <a href="/department/zhongliunayike/">肿瘤内一科</a>
                        
                        <a href="/department/zhongliunaerke/">肿瘤内二科</a>
                        
                        <a href="/department/jingshenke/">精神科（精神心理卫生中心）</a>
                        
                        <a href="/department/erke/">儿科</a>
                        
                        <a href="/department/zhongyike/">中医科</a>
                        
                        <a href="/department/zhongyizhenggu/">中医正骨</a>
                        
                        <a href="/department/zhongliuxiongwaike/">肿瘤胸外科</a>
                        
                        <a href="/department/zhongliupuwaike/">肿瘤普外科</a>
                        
                        <a href="/department/xiongxindaxueguanwaike/">胸心大血管外科</a>
                        
                        <a href="/department/puwaike/">普外一病区</a>
                        
                        <a href="/department/miniaowaike/">泌尿外科</a>
                        
                        <a href="/department/shenjingwaike/">神经外科</a>
                        
                        <a href="/department/guke/">骨科</a>
                        
                        
                        <a href="/department/fayike/">法医科</a>
                        
                        <a href="/department/mazuike/">麻醉科</a>
                        
                        <a href="/department/ICU/">ICU</a>
                        
                        <a href="/department/fuchanke/">妇产科</a>
                        
                        <a href="/department/yanke/">眼科</a>
                        
                        <a href="/department/kouqiangke/">口腔科</a>
                        
                        <a href="/department/erbihouke/">耳鼻喉科</a>
                        
                        <a href="/department/pifuke/">皮肤科</a>
                        
                        <a href="/department/jizhenke/">急诊科</a>
                        
                        <a href="/department/gongnenke/">功能科</a>
                        
                        <a href="/department/heyixueke/">核医学科</a>
                        
                        <a href="/department/dianshenglike/">电生理科</a>
                        
                        <a href="/department/binglike/">病理科</a>
                        
                        <a href="/department/liliaoke/">理疗科</a>
                        
                        <a href="/department/jianyanke/">检验科</a>
                        
                        <a href="/department/fangsheke/">放射科</a>
                        
                        
                        <a href="/department/CTshi/">CT室</a>
                        
                        <a href="/department/heci/">核磁</a>
                        
                        <a href="/department/fangliaoke/">放疗科</a>
                        
                        <a href="/department/yiwuke/">医教部</a>
                        
                        <a href="/department/xianweiwaike/">显微外科</a>
                        
                        <a href="/department/zhongyifuke/">中医妇科</a>
                        
                        <a href="/department/hulibu/">护理部</a>
                        
                        <a href="/department/shenjingwaikeerbingqu/">神经外科二病区</a>
                        
                        <a href="/department/puwaierbingqu/">普外二病区</a>
                        
                        <a href="/department/jiankangguanlizhongxin/">健康管理中心</a>
                        
                        <a href="/department/xiongwaike/">胸外科</a>
                        
                        </div>
                        <div class="NavDeptInList" >
                        
                        <a href="/xingzheng/jiankang/">科研教学</a>
                        
                        <a href="/xingzheng/falv/">法律事务室</a>
                        
                        </div>
                    </div>
                    <div class="gd"><a href="/department">查看更多>></a></div>
        </div>
                </ul>
              </li>
              
              <li><a href="/experts/" class="nav">专家团队</a>
              
              </li>
              
              <li><a href="/patientserve/jiuyizhinan/" class="nav">患者服务</a>
              
                <ul>
                
                  <li><a href="/patientserve/jiuyizhinan/">就医指南</a></li>
                
                  <li><a href="/patientserve/tesekeshi/">特色科室</a></li>
                
                  <li><a href="/patientserve/lianxifangshi/">联系方式</a></li>
                
                  <li><a href="/patientserve/jiaotongzhinan/">交通指南</a></li>
                
                  <li><a href="/patientserve/fangweizhinan/">方位指南</a></li>
                
                  <li><a href="/patientserve/jiankangtijian/">健康体检</a></li>
                
                  <li><a href="/patientserve/jiuyizhinan/wangshangtousu/">网上投诉</a></li>
                
                </ul>
              </li>
              
              <li><a href="/healthtalk/kepuwenzhang/" class="nav">健康讲座</a>
              
                <ul>
                
                  <li><a href="/healthtalk/kepuwenzhang/">科普文章</a></li>
                
                  <li><a href="/healthtalk/yixuezhishi/">医学知识</a></li>
                
                  <li><a href="/healthtalk/binglizhuanti/">病例专题</a></li>
                
                  <li><a href="/healthtalk/yiqingkongzhi/">疫情控制</a></li>
                
                  <li><a href="/healthtalk/yongyaochangshi/">用药常识</a></li>
                
                  <li><a href="/healthtalk/kepuwenzhang/gankongmokuai/">感控模块</a></li>
                
                </ul>
              </li>
              
              <li><a href="/partywork/dangtuanlingdao/" class="nav">党群工作</a>
              
                <ul>
                
                  <li><a href="/partywork/dangtuanlingdao/">党团领导</a></li>
                
                  <li><a href="/partywork/gongzuodongtai/">工作动态</a></li>
                
                  <li><a href="/partywork/jicengdangjian/">基层党建</a></li>
                
                  <li><a href="/partywork/jijianjiancha/">纪检监察</a></li>
                
                  <li><a href="/partywork/shehuigongzuo/">社会工作</a></li>
                
                </ul>
              </li>
              
              <li><a href="/create/" class="nav">三甲创建</a>
               
              </li>
   
              <li><a href="/xingzheng/jiankang/" class="nav">科研教学</a>
 
                <ul>
                
                  <li><a href="/xingzheng/jiankang/dengjichuangjian/">等级创建</a></li>
                
                  <li><a href="/xingzheng/jiankang/yuanchengyixuezhongxin/">远程医学中心</a></li>
                
                  <li><a href="/xingzheng/jiankang/quankeyishiguipei/">全科医生规培</a></li>
                
                  <li><a href="/xingzheng/jiankang/zhuyuanyishiguipei/">学科建设</a></li>
                
                  <li><a href="/xingzheng/jiankang/xueshengjiaoyu/">科教动态</a></li>
                
                  <li><a href="/xingzheng/jiankang/boshihouyanfajidi/">科研天地</a></li>
                
                  <li><a href="/xingzheng/jiankang/jixujiaoyu/">学术论文</a></li>
                
                  <li><a href="/xingzheng/jiankang/peixunxinxi/">培训信息</a></li>
                
                  <li><a href="/xingzheng/jiankang/keyanchengguo/">继续教育</a></li>
                
                  <li><a href="/xingzheng/jiankang/kejiaodongtai/">博士后研发基地</a></li>
                
                  <li><a href="/xingzheng/jiankang/yanjiushengshalong/">研究生沙龙</a></li>
                
                  <li><a href="/xingzheng/jiankang/xueshulunwen/">学生教育</a></li>
                
                  <li><a href="/xingzheng/jiankang/xuekejianshe/">住院医师规培</a></li>
                
                  <li><a href="/xingzheng/jiankang/tongzhigonggao/">通知公告</a></li>
                
                  <li><a href="/xingzheng/jiankang/gongxukemupeixun/">公需科目培训</a></li>
                
                </ul>
              </li>
              
              <li><a href="/hiring/">人力资源</a>
              
                <ul>
                
                  <li><a href="/hiring/zhichenyingyukaoshi/">职称英语考试</a></li>
                
                  <li><a href="/hiring/shengteshujintierenxuan/">其他工作</a></li>
                
                  <li><a href="/hiring/shehuibaoxian/">社会保险</a></li>
                
                  <li><a href="/hiring/yuangongpeixun/">员工培训</a></li>
                
                  <li><a href="/hiring/gongzuoxinxi/">工作信息</a></li>
                
                  <li><a href="/hiring/gangweishezhi/">岗位设置</a></li>
                
                  <li><a href="/hiring/gongkao/">工考</a></li>
                
                  <li><a href="/hiring/xuelirenzheng/">学历认证</a></li>
                
                  <li><a href="/hiring/zhichenkaoshi/">职称考试</a></li>
                
                  <li><a href="/hiring/zhichenpinren/">职称聘任</a></li>
                
                  <li><a href="/hiring/biaogexiazai/">表格下载</a></li>
                
                  <li><a href="/hiring/rencaizhaopin/">人才招聘</a></li>
                
                  <li><a href="/hiring/gongxukemupeixun/">公需科目培训</a></li>
                
                </ul>
              </li>
            </ul>
        </div>
     </div>
</div>
<div class="main">

<div class="banner">
<img alt="" src="/uploads/130828/1-130RP9454H54.jpg" style="width: 1000px; height: 250px;" />
</div>


<div class="online">
    <div class="online1"><a href="javascript:;" onClick="window.open('http://65502.fy.kf.qycn.com/vclient/chat/?websiteid=65502&clerkid=740886&clienturl=http%3A%2F%2Fhnhbyy.iestart.cn&originPageTitle='+encodeURIComponent(window.document.title)+'&originPageUrl='+encodeURIComponent(document.referrer), '_blank', 'toolbar=no,scrollbars=yes,menubar=no,status=no,resizable=yes,location=no,width=650,height=530,top=100,left=200');return false;" style='border:none;cursor:pointer'>在线客服</a></div>
    <div class="online2"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes">QQ客服</a></div>
    <div class="online4"><a target="_blank" href="/xingzheng/falv/tousu/">网上投诉</a></div>
    <div class="online3"><img src="/images/tel_on.png"></div>
</div>
<div class="nav_b">
     <ul>
         <li class="nav_b1"><a href="/patientserve/yuyueguahao/">网络挂号</a></li>
         <li class="nav_b2"><a href="/experts/">专家团队</a></li>
         <li class="nav_b3"><a href="/patientserve/jiuyizhinan/">就医指南</a></li>
         <li class="nav_b4"><a href="/patientserve/jiaotongzhinan/">交通指南</a></li>
         <li class="nav_b5"><a href="javascript:;" onClick="window.open('http://65502.fy.kf.qycn.com/vclient/chat/?websiteid=65502&clerkid=740886&clienturl=http%3A%2F%2Fhnhbyy.iestart.cn&originPageTitle='+encodeURIComponent(window.document.title)+'&originPageUrl='+encodeURIComponent(document.referrer), '_blank', 'toolbar=no,scrollbars=yes,menubar=no,status=no,resizable=yes,location=no,width=650,height=530,top=100,left=200');return false;" style='border:none;cursor:pointer'>在线咨询</a></li>
         <li class="nav_b6"><a href="/tijianzhongxin/index.html">体检中心</a></li>
     </ul>
</div>

<div class="main2">
    <div class="main2_left">
          <div class="news">
               <div class="news_title">人才招聘</div>
               <div class="news_main">
                    <ul>
                    <li><a href="/hiring/">人力资源</a></li> 
                       
                        <li><a href="/hiring/zhichenyingyukaoshi/">职称英语考试</a></li>
                       
                        <li><a href="/hiring/shengteshujintierenxuan/">其他工作</a></li>
                       
                        <li><a href="/hiring/shehuibaoxian/">社会保险</a></li>
                       
                        <li><a href="/hiring/yuangongpeixun/">员工培训</a></li>
                       
                        <li><a href="/hiring/gongzuoxinxi/">工作信息</a></li>
                       
                        <li><a href="/hiring/gangweishezhi/">岗位设置</a></li>
                       
                        <li><a href="/hiring/gongkao/">工考</a></li>
                       
                        <li><a href="/hiring/xuelirenzheng/">学历认证</a></li>
                       
                        <li><a href="/hiring/zhichenkaoshi/">职称考试</a></li>
                       
                        <li><a href="/hiring/zhichenpinren/">职称聘任</a></li>
                       
                        <li><a href="/hiring/biaogexiazai/">表格下载</a></li>
                       
                        <li><a href="/hiring/rencaizhaopin/">人才招聘</a></li>
                       
                        <li><a href="/hiring/gongxukemupeixun/">公需科目培训</a></li>
                    
                    </ul>
               </div>
          </div>
          <div class="xu">
              <div class="contact_z">
                                          <div class="ct_top">联系我们</div>
                   <div class="contact1">
                        <p>淇滨区地址：河南省鹤壁市淇滨区九州路115号</p>
                        <p>淇滨区电话：0392-3327557</p>
                        <p>山城区地址：河南省鹤壁市山城区朝霞街中段</p>
                        <p>山城区电话：0392-2693509</p>
                   </div>
                   <div class="contact2">
                        <p>南院区地址：鹤煤大道人民医院南院区</p>
                        <p>南院区电话：0392-3357892 </p>
                        <p>北院区地址：华山路北段157号</p>
                        <p>北院区电话：0392-3357020</p>
                   </div>
                   <div class="contact3">
                        <p>医院网址：</p>
                        <p>http://www.hbrmyy.com </p>
                        <p>邮箱：</p>
                   </div>

              </div>
         </div>




   </div>

<script type="text/javascript">
	$(document).ready(
		function(){
			$("#form1").submit(function(){
				if($("#xingming").val().length<1){
					alert('请输入姓名信息。');
					$("#xingming").focus(); 
             		return false; 
				}else if($("#shenfenzheng").val().length<1||$("#shenfenzheng").val()=='请输入身份证号'||($("#shenfenzheng").val()!=""&&!/^[1-9][0-9]{5}(19[0-9]{2}|20[0-9]{2})(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01])[0-9]{3}[0-9xX]$/.test($("#shenfenzheng").val()))){
      			alert('身份证号不能为空或者输入格式不正确，请重新输入');
       			$("#shenfenzheng").focus(); 
             	return false; 
      			}

				});
			$("#form2").submit(function(){
				if($("#mima").val().length<1){
					alert('请输入密码。');
					$("#mima").focus(); 
             		return false; 
				}else if($("#queren").val().length<1){
      				alert('请再次输入密码。');
       				$("#queren").focus(); 
             		return false; 
      			}else if($("#mima").val()!=$("#queren").val()){
      				alert('两次输入密码不一致，请重新输入。');
      				$("#mima").focus();
      				return false;
      			}

				});

			
		}
		);
</script>




   <div class="main2_right">
       <div class="main2_right_title">您所在的位置：<a href="http://www.hbrmyy.com"></a><a href='http://www.hbrmyy.com/'>鹤壁市人民医院</a> > <a href='/hiring/'>人力资源</a> > <a href='/jianli/'>应聘表格</a> > </div>
<?php

    $file='announce.txt';
    $count=filesize($file);
    $fp=fopen($file, 'r+');
    if (filesize($file)!=0) {
        $data = fread($fp, $count);
        $data = str_replace("\r\n", "</br>", $data);
        $data = stripcslashes($data);
        $data = "&nbsp&nbsp&nbsp$data";
        print "<div class='title1'>填写须知</div>";
        print "<div class='announ'>$data</div>";
    }
    print "<div class='title2'>用户登陆/注册</div>";

        print "<form id='form1' name='form1' action=index1.php method='post' onsubmit='return checkSubmit();'>
            <div class='box1'>
           请输入姓名：<input type='text'  name='xingming' id='xingming' value=''/></div> 
           <div class='box1'>
           身&nbsp份&nbsp证&nbsp号：<input type='text' name='shenfenzheng' id='shenfenzheng' value='' onfocus='inputAutoClear(this)'/></br>
           </div> 
           <div class='box1'>
                <input type='submit' name='tijiao' class='inputsubmit' value='确认'>
           </div>
       </form>";
?>
  </div>


</div>










<div class="bottom">
         <div class="bottom_left"><a href="/"><img src="/images/logo_bottom.png"></a></div>
         <div class="bottom_right">
              <div class="bottom_nav"><a href="/profile/about/">医院简介</a><span>|</span><a href="/profile/lingdaotuandui/">领导团队</a><span>|</span><a href="/profile/yiyuanrongyu/">医院荣誉</a><span>|</span><a href="/profile/yiyuanwenhua/">医院文化</a><span>|</span><a href="/profile/chengcheluxian/">乘车路线</a><span>|</span><a href="/patientserve/lianxifangshi/">联系方式</a></div>
              <div class="copy">
                   <ul>
                       <li>版权所有  鹤壁市人民医院</li>
                       <li><span>豫ICP备13020106号</span></li>
                       <li>Copyright © 2013 hbrmyy.com, All Rights Reserved <br>技术支持：<a href="http://hb.114chn.com" target=blank>中国114黄页鹤壁分站</a>   <a href=http://s.114chn.com/hebi target=blank>鹤壁生活网 </a>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src=" + _bdhmProtocol + "hm.baidu.com/h.js%3Fa97424fec69329bdb6cd820cb2c55890 type=text/javascript%3E%3C/script%3E"));
</script></li>
                   </ul>
              </div>
         </div>
  </div>
</body>
</html>
