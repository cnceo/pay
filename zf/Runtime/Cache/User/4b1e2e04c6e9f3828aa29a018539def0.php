<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商户中心-<?php echo C("WEB_NAME");?></title>
<link rel="stylesheet" type="text/css" href="/Public/User/css/css.css" />
<script type="text/javascript" src="/Public/User/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="/Public/User/js/js.js"></script>
<script type="text/javascript" src="/Public/User/js/pcasunzip.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $("#menu div").addClass("menu_bg_y");
	$("#menu div:eq(4)").addClass("menu_bg");
	
	$("#menu_x > div > div:eq(2)").css("background-image","url(/Public/User/images/menumenu.gif)");
	$("#menu_x > div > div:eq(2) a").css("color","#F60");
	
	$("#zfyminput").click(function(e) {
        mypayurlname = $("#mypayurlname").val();
		if(mypayurlname == ""){
			alert("二级地址名称不能为空！");
			return false;
		}else{
			//////////////////////////////////////////////////////////////////////
			$.ajax({
			  type:'POST',
			  url:'/User_Index_addskym.html',
			  data:"mypayurlname="+mypayurlname,
			  dataType:'text',
			  success:function(str){
				   if(str == "1"){
					   alert("名称已存在，请选择其它名称");
					   $("#mypayurlname").focus();
					   }else{
						   if(str == "2"){
							   alert("二级地址名称不能为空！");
							   $("#mypayurlname").focus();
							   }else{
								   if(str == "3"){
									   alert("修改成功！");
									   location.href = location.href;
									   }else{
									   alert("修改失败！");
									   }
								   }
						   }
				  },
			  error:function(){
				  alert("处理失败！");
				  }	
			  });
			/////////////////////////////////////////////////////////////////////
		}
    });
});
</script>
</head>

<body>







<div class="xgjcxx">
<div style="border:1px solid #ccc; background-image:url(/Public/User/images/menu_bg_x.jpg); width:1000px; height:40px; line-height:40px; font-size:15px; text-align:left; font-weight:bold; color:#333">
&nbsp;&nbsp;&nbsp;&nbsp;收款页面
</div>

<div style="width:1000px; height:auto; border:1px solid #CCC; border-top:0px">
<?php if($if == 0): ?><div class="jbxx" style="height:50px; line-height:50px;">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请输入支付页面二级地址名称：<span style="color:#999; font-size:30px;">http://<?php echo ($web_url); ?>/</span><input type="text" class="input_text" name="mypayurlname" id="mypayurlname" style="width:200px;" value="" style="vertical-align:middle; color:#06F" />
    &nbsp;&nbsp;&nbsp;&nbsp;
    </div>
     <div class="jbxx" style="text-align:center; height:50px; line-height:50px;">
    <input type="image" src="/Public/User/images/qrxg.gif" style="vertical-align:middle" id="zfyminput">
   &nbsp;<span style="color:#F00">（一旦确认后不能再修改！）</span>
   
    </div>
 <?php else: ?>
  <div class="jbxx" style="height:50px; line-height:50px;">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;此地址支持电脑手机端访问,可使用网银、支付宝、微信、QQ钱包、财付通，进行在线收款。
    </div>
  <div class="jbxx" style="height:50px; line-height:50px;">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;支付地址：<a href="<?php echo ($weburl); ?>" target="_blank"><?php echo ($weburl); ?></a>
    </div><?php endif; ?>   
</div>





</body>
</html>