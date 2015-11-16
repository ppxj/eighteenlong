<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jquery validation 验证</title>
<meta name="keywords" content="validation, jquery插件" />
<meta name="description" content="Helloweba演示平台，演示XHTML、CSS、jquery、PHP案例和示例" />
<link rel="stylesheet" type="text/css" href="../css/main.css" />
<style type="text/css">
.demo{width:850px; margin:10px auto; padding:20px; background:#fff; color:#333}
.input{width:220px; height:18px; padding:2px 2px 0 2px; border:1px solid #ccc}
.btn{width:68px; height:22px; border:none; background:url(images/btn.gif) no-repeat; cursor:pointer}
.mytable{width:760px; margin:20px auto; border:2px solid #ccc}
.mytable td{padding:4px 6px; border-bottom:1px dotted #d3d3d3; color:#333}
.mytable td p{line-height:16px; color:#999}
.table_title{height:30px; line-height:30px; background:#f7f7f7; font-weight:bold; font-size:14px}

label.error{color:#ea5200; margin-left:4px; padding:0px 20px; background:url(images/unchecked.gif) no-repeat 2px 0 }
label.right{margin-left:4px; padding-left:20px; background:url(images/checked.gif) no-repeat 2px 0}
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/validate-ex.js"></script>
<script type="text/javascript">
$(function(){	   
	var validate = $("#myform").validate({
		rules:{
			user:{
				maxlength:20,
				minlength:6,
				userName:true,
				remote: { 
                   url: "chk_user.php", 
                   type: "post", 
                   data: { user: function() { return encodeURIComponent($("#user").val());}} 
               } 
			},
			pass:{
				maxlength:20,
				minlength:8
			},
			repass:{
				maxlength:20,
				minlength:8,
				equalTo:"#pass"
			}
		},
		messages:{
			user:{
				remote:"该用户名已存在，请换个其他的用户名！"
			},
			repass:{
				equalTo:"两次密码输入不一致！"
			}
		},
	    success: function(label) {
		   label.html("&nbsp;").addClass("right");
	    }			  
	});	
});
</script>
</head>

<body>
<div id="header">
   <div id="logo"><h1><a href="http://www.helloweba.com" title="返回helloweba首页">helloweba</a></h1></div>
</div>
<div id="main">
   
<form id="myform" action="#" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="mytable">
  <tr class="table_title">
    <td colspan="2">jquery.validation 表单验证</td>
  </tr>
  <tr>
    <td width="22%" align="right">用户名：</td>
    <td><input type="text" name="user" id="user" class="input required" />
   
  </tr>
  <tr>
    <td align="right">密码：</td>
    <td><input type="password" name="pass" id="pass" class="input required" />
   
    </td>
  </tr>
  <tr>
    <td align="right">确认密码：</td>
    <td><input type="password" name="repass" class="input required" /></td>
  </tr>
  <tr>
    <td height="42">&nbsp;</td>
    <td><input type="submit" class="btn" value="提 交" /> </td>
  </tr>
</table>
</form>
</div>
</div>

<a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=KRgfGBobHRwYaVhYB0pGRA" style="text-decoration:none;"><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_02.png"/></a>



</body>
</html>
