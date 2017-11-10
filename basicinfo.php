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
			function() { 
			$("#myform").submit(function(){ 
			if($("#gangwei").val().length<1||$("#gangwei").val()=='请输入岗位信息'){
			alert('岗位不能为空，请输入岗位信息');
			 $("#gangwei").focus(); 
             return false; 
			}
			else if($("#shengri").val().length<1){
				 alert('请输入出生年月');
				 $("#shengri").focus(); 
                  return false; 
				}
			else if($("#minzu").val().length<1||$("#minzu").val()=='例：汉'){
				 alert('请输入民族');
				 $("#minzu").focus(); 
                  return false; 
				}

        else if($("#sheng").val().length<1){
         alert('请输入户口所在地信息');
         $("#sheng").focus(); 
                  return false; 
        }

        else if($("#shi").val().length<1){
         alert('请输入户口所在地信息');
         $("#shi").focus(); 
                  return false; 
        }
			else if($("#dianhua").val()==''|| ( $("#dianhua").val()!="" && !/^\d{11}$/.test($("#dianhua").val()))){
					 alert("电话不能为空或者电话位数不是11位");
					 $("#dianhua").focus(); 
                     return false; 
			    }
          
                
			else if($("#youjian").val()=="" ||$("#youjian").val()=="Email" || ( $("#youjian").val()!="" && !/^\w{1,}@\w+\.\w+$/.test($("#youjian").val()))){
				alert('邮箱不能为空或者邮箱格式不正确.');
			    $("#youjian").focus(); 
			    return false;
				}
        else if($("#weixin").val().length<1){
         alert('请输入微信号');
         $("#weixin").focus(); 
                  return false; 
        }else if($("#dizhi").val().length<1){
         alert("家庭住址不能为空");
         $("#dizhi").focus(); 
         return false; 
          }
	 else if($("#cengci1").val()=="未选择"){
                alert("请输入学历信息");
                $("#cengci1").focus();
                return false;
            }

          
			}); 
			}); 	 
     </script>   







   <div class="main2_right">
       <div class="main2_right_title">您所在的位置：<a href="http://www.hbrmyy.com"></a><a href='http://www.hbrmyy.com/'>鹤壁市人民医院</a> > <a href='/hiring/'>人力资源</a> > <a href='/hiring/yingpinbiaoge/'>应聘表格</a></div>
       <form id="myform" name="addcontent" action="get_form1.php" method="post" enctype="multipart/form-data" onsubmit="return checkSubmit();">
       <div class="cand">
            <div class="cand1">
                 <dl>
                     
                      <dd><b>*应聘岗位：</b><input name="gangwei" type="text" id="gangwei" value="请输入岗位信息" maxlength="50" class="intxt" onfocus="inputAutoClear(this)"/></dd>
                      <dt><b>1. 个人基本信息</b>（*为必填）</dt>
                      <?php

                            $dbc=mysql_connect('127.0.0.1','root','connmysqlpass');
                            mysql_select_db('resume',$dbc);
                            mysql_query("SET NAMES 'utf8'");    //设置mysql默认utf-8

                            if($_SERVER['REQUEST_METHOD']=='GET'){
                              $xingming=$_GET['xingming'];
                              $shenfenzheng=$_GET['shenfenzheng'];
                              print "<input type='hidden' name='xingming' value='$xingming'>";
                              print "<input type='hidden' name='shenfenzheng' value='$shenfenzheng'>";

                              print "<dd>*姓&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp名&nbsp：$xingming</dd>";
                              print "<dd>*身份证号：$shenfenzheng</dd>";
                            }
                     ?>

                     
                     <dd>*性&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp别&nbsp：<input type='radio' name='xingbie' class='n' value='男' checked>男
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='radio' name='xingbie' class='n' value='女'>女</dd>
                     <dd>*出生日期：<input type='date' name='shengri' id='shengri'   class='y' value='' /></dd>
                     <dd>*民&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp族：<input type='text' name='minzu' id='minzu'   class='y' value="例：汉" onfocus="inputAutoClear(this)" /></dd>
                     <dd>*户口所在地：<input type='text' name='sheng' id='sheng' class='cm' value=''>省<input type='text' name='shi' id='shi' class='cm' vlue=''>市(县)</dd>
                     <dd>*是否毕业：<input type='radio' name='yingjie' class='n' value='是' checked>是
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='radio' name='yingjie' class='n' value='否'>否</dd>

                     <dd>&nbsp执业资格:&nbsp&nbsp&nbsp<input type='text' name='zhiyezige' id='zhiyezige' class='ads' value='无'></dd>
                     
                     <dd>*联系方式：<input type='text' name='dianhua' id='dianhua' class='ads' value='' /></dd>
                    
                     <dd>*电子邮件：<input type='text' name='youjian' id='youjian' class='ads' value='' /></dd>
                     <dd>*微信号：&nbsp&nbsp&nbsp<input type='text' name='weixin' id='weixin' class='ads' value='' /></dd>
                     <dd>*家庭住址：</dd>
                     <textarea name='dizhi' id='dizhi' rows='2' style="width:96%"></textarea>
                     
                 </dl>
            </div>


            <div class="cand2">
                 <p>2. 教育经历（高中毕业之后的学习经历）</p>
                 <div class="cand2_td">
                      <ul>
                          <li><div class="cand2_td1"></div>
                              <div class="cand2_td1"><b>学历层次</b></div>
                              <div class="cand2_td5"><b>入学时间</b></div>
                              <div class="cand2_td5"><b>毕业时间</b></div>
                              <div class="cand2_td5"><b>毕业院校</b></div>
                              <div class="cand2_td5"><b>毕业专业</b></div>
                              <div class="cand2_td1"><b>学历性质</b></div>
                          </li>
                          <li>
                            <div class="cand2_td1">第一学历</div>

                            <select name='cengci1' class='td1' id='cengci1'>
                                <option value="未选择" selected>未选择</option>
                                      <option value="1">中专</option>
                                      <option value="2">大专</option>
                                      <option value="3">本科</option>
                                      <option value="4">硕士</option>
                                      <option value="5">博士</option>
                            </select>

                            <input type='date' name='starttime1' id='starttime1' class='td3' value='' />
                            
                            <input type='date' name='endtime1' id='endtime1' class='td3' value='' />

                            <input type="text" name='school1' id='school1' class='td3' value=''>

                            <input type="text" name='major1' id='major1' class='td3' value=''>

                            <select name='xingzhi1' class='td4'>
                                <option value="未选择" selected>未选择</option>
                                      <option value="全日制">全日制</option>
                                      <option value="自考">自考</option>
                                      <option value="成人教育">成人教育</option>
                                      <option value="网络教育">网络教育</option> 
                                      <option value="夜大">夜大</option>
                                      <option value="广播电视大学">广播电视大学</option>
                                      <option value="党校">党校</option>     
                            </select>
                            

                          </li>
                          <li>
                              
                              <div class="cand2_td1">中间学历</div>

                            <select name='cengci2' class='td1'>
                                <option value="未选择" selected>未选择</option>
                                      <option value="1">中专</option>
                                      <option value="2">大专</option>
                                      <option value="3">本科</option>
                                      <option value="4">硕士</option>
                                      <option value="5">博士</option>
                            </select>

                            <input type='date' name='starttime2' id='starttime2' class='td3' value='' />
                            
                            <input type='date' name='endtime2' id='endtime2' class='td3' value='' />

                            <input type="text" name='school2' id='school2' class='td3' value=''>

                            <input type="text" name='major2' id='major2' class='td3' value=''>

                            <select name='xingzhi2' class='td4'>
                                <option value="未选择" selected>未选择</option>
                                      <option value="全日制">全日制</option>
                                      <option value="自考">自考</option>
                                      <option value="成人教育">成人教育</option>
                                      <option value="网络教育">网络教育</option>
                                      <option value="夜大">夜大</option>
                                      <option value="广播电视大学">广播电视大学</option>
                                      <option value="党校">党校</option>     
                            </select>
                            
                          </li>
                          <li>
                             
                             <div class="cand2_td1">最高学历</div>

                            <select name='cengci3' class='td1'>
                                <option value="未选择" selected>未选择</option>
                                      <option value="1">中专</option>
                                      <option value="2">大专</option>
                                      <option value="3">本科</option>
                                      <option value="4">硕士</option>
                                      <option value="5">博士</option>
                            </select>

                            <input type='date' name='starttime3' id='starttime3' class='td3' value='' />
                            
                            <input type='date' name='endtime3' id='endtime3' class='td3' value='' />

                            <input type="text" name='school3' id='school3' class='td3' value=''>

                            <input type="text" name='major3' id='major3' class='td3' value=''>

                            <select name='xingzhi3' class='td4'>
                                <option value="未选择" selected>未选择</option>
                                      <option value="全日制">全日制</option>
                                      <option value="自考">自考</option>
                                      <option value="成人教育">成人教育</option>
                                      <option value="网络教育">网络教育</option>
                                      <option value="夜大">夜大</option>
                                      <option value="广播电视大学">广播电视大学</option>
                                      <option value="党校">党校</option>     
                            </select>
                            

                          </li>

                      </ul>
                 </div>
            </div>


            <div class="skill">
                 <p>3. 工作经历</p>
                 <div class="skill_td">
                      <ul>
                          <li>
                              <div class="skill_td1"><b>开始时间</b></div>
                              <div class="skill_td1"><b>结束时间</b></div>
                              <div class="skill_td2"><b>所在单位</b></div>
                              <div class="skill_td3"><b>所在科室</b></div>
                              <div class="skill_td4"><b>职称职务</b></div>
                              <div class="skill_td3"><b>备注</b></div></li>
                          <li>
                              <input type='date' name='getwork1' id='getwork1' class='skill_td1' value='' />
                              <input type='date' name='endwork1' id='endwork1' class='skill_td1' value='' />
                              <input type='text' name='danwei1'  id='danwei1'  class='skill_td2' value='' />
                              <input type='text' name='keshi1'   id='keshi1'   class='skill_td3' value='' />
                              <input type='text' name='zhiwu1'   id='zhiwu1'   class='skill_td4' value='' />
                              <input type='text' name='comment1' id='comment1' class='skill_td3' value='' /></li>
                          <li>
                              
                              <input type='date' name='getwork2' id='getwork2' class='skill_td1' value='' />
                              <input type='date' name='endwork2' id='endwork2' class='skill_td1' value='' />
                              <input type='text' name='danwei2'  id='danwei2'  class='skill_td2' value='' />
                              <input type='text' name='keshi2'   id='keshi2'   class='skill_td3' value='' />
                              <input type='text' name='zhiwu2'   id='zhiwu2'   class='skill_td4' value='' />
                              <input type='text' name='comment2' id='comment2' class='skill_td3' value='' /></li>
                          <li>
                              
                              <input type='date' name='getwork3' id='getwork3' class='skill_td1' value='' />
                              <input type='date' name='endwork3' id='endwork3' class='skill_td1' value='' />
                              <input type='text' name='danwei3'  id='danwei3'  class='skill_td2' value='' />
                              <input type='text' name='keshi3'   id='keshi3'   class='skill_td3' value='' />
                              <input type='text' name='zhiwu3'   id='zhiwu3'   class='skill_td4' value='' />
                              <input type='text' name='comment3' id='comment3' class='skill_td3' value='' /></li>
                      </ul>
                 </div>
            </div>


            <div class="zhuanye">
              <p>4. 专业能力</p>
              <div class="zhuanye_td">
                <ul>
                    <li>
                        <div class="zhuanye_td1">职&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp称：</div>
                        <input type='text' name='zhicheng' id='zhicheng' class='zhuanye_td2' value='' >

                        <div class="zhuanye_td3">&nbsp&nbsp&nbsp&nbsp取得时间:</div>
                        <input type='date' name='qudetime' id='qudetime' class='zhuanye_td2' value=''>

                    </li>

                    <li>
                        <div class="zhuanye_td1">专&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp业：</div>
                        <input type='text' name='zhuan_ye' id='zhuan_ye' class='zhuanye_td2' value=''>

                        <div class="zhuanye_td3">&nbsp&nbsp&nbsp&nbsp专业特长:</div>
                        <input type='text' name='techang' id='techang' class='zhuanye_td2' value=''>

                    </li>

                    <li>
                      <div class="zhuanye_td5"><b>最重要的进修经历：</b></div>
                    </li>

                    <li>
                      <div class="zhuanye_td1">开始时间:</div>
                      <input type='date' name='startjinxiu' id='startjinxiu' class='zhuanye_td2' value=''>

                      <div class="zhuanye_td1">&nbsp&nbsp&nbsp&nbsp结束时间:</div>
                      <input type='date' name='endjinxiu' id='endjinxiu' class='zhuanye_td2' value='' >
                    </li>

                    <li>
                      <div class="zhuanye_td5">进修经历描述:</div>
                    </li>
          
                    <textarea name='miaoshu' rows="4" style="width: 656px;"></textarea>


                  
                    <div class="sum">
                      <input type="submit" name="submit"  value="提交">
                      <input type="reset" name="reset" value="重置" onclick="location.reload();">
                    </div>


                   
                </ul>
              </div>
            </div>
       </div>
       
       </form>
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
