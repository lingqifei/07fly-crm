<?php /* Smarty version 2.6.26, created on 2018-12-31 17:52:11
         compiled from sysmanage/login.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $this->_tpl_vars['sys']['title']; ?>
</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="shortcut icon" href="favicon.ico">
<link href="<?php echo @APP; ?>
/View/template/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<link href="<?php echo @APP; ?>
/View/template/css/font-awesome.css?v=4.4.0" rel="stylesheet">
<link href="<?php echo @APP; ?>
/View/template/css/animate.css" rel="stylesheet">
<link href="<?php echo @APP; ?>
/View/template/css/style.css?v=4.1.0" rel="stylesheet">
<link href="<?php echo @APP; ?>
/View/template/css/07fly.css" rel="stylesheet">
<!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
<script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg">
<div class="middle-box text-center loginscreen  animated fadeInDown">
 <div>
  <div>
   <h1 class="logo-name" style="font-size: 100px;">07FLY</h1>
  </div>
  <h3><?php echo $this->_tpl_vars['sys']['companyname']; ?>
</h3>
  <form class="m-t" role="form" action="<?php echo @ACT; ?>
/sysmanage/Login/login/" method="post">
   <div class="form-group">
    <input type="text" name="account" class="form-control" placeholder="用户名" value="admin" required="">
   </div>
   <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="密码" value="admin123456" required="">
   </div>
   <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
   <p class="text-muted text-center"> <a href="#">版权所有:成都零起飞网络工作室 </a> </p>
  </form>
 </div>
</div>

<!-- 全局js --> 
<script src="<?php echo @APP; ?>
/View/template/js/jquery.min.js?v=2.1.4"></script> 
<script src="<?php echo @APP; ?>
/View/template/js/bootstrap.min.js?v=3.3.6"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6cbae336ef2e6fc07bbcab9a0872e082";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>