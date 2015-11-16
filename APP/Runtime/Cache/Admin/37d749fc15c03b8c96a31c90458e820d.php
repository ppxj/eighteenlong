<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="../Public/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">表单</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>添加管理员</span></div>
     <form method="post" action="<?php echo U(GROUP_NAME.'/User/adduser');?>">
     <input type="hidden" name="id" value="<?php echo $_SESSION['uid']; ?>">

    <ul class="forminfo">
    <li><label>管理员名称</label><input name="UserName" type="text" class="dfinput" /><i>名称不能超过30个字符</i></li>
    <li><label>密码</label><input name="PassWord" type="modifiedPwd1" class="dfinput" /><i>名称不能超过30个字符</i></li>
    <li><label>确认密码</label><input name="Password" type="modifiedPwd2" class="dfinput" /><i>名称不能超过30个字符</i></li>
  
    
    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="确认保存"/></li>
    </ul>
    
    </form>
    </div>


</body>

</html>