<?php /* Smarty version 2.6.26, created on 2018-12-31 17:47:17
         compiled from index.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<title>07FLY-CRM客户关系管理系统</title>
<meta name="keywords" content="零起飞,CRM,免费CRM,客户管理系统,客户管理软件,客户关系管理软件,客户关系管理系统,CRM软件,CRM系统">
<meta name="description" content="零起飞客户管理CRM系统针对企业不同阶段提供不同的客户管理CRM系统功能，以实现企业对客户管理的需要，网络中只需一台电脑安装本客户管理CRM系统，其它电脑均可通过浏览器使用。">
<!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
<link rel="shortcut icon" href="favicon.ico">
<link href="<?php echo @APP; ?>
/View/template/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<link href="<?php echo @APP; ?>
/View/template/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
<link href="<?php echo @APP; ?>
/View/template/css/animate.css" rel="stylesheet">
<link href="<?php echo @APP; ?>
/View/template/css/style.css?v=4.1.0" rel="stylesheet">
</head>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper"> 
  <!--左侧导航开始-->
  <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="nav-close"><i class="fa fa-times-circle"></i> </div>
    <div class="sidebar-collapse">
      <ul class="nav" id="side-menu">
        <li class="nav-header">
          <div class="dropdown profile-element"> <a data-toggle="dropdown" class="dropdown-toggle"  href="<?php echo @ACT; ?>
/sysmanage/Index/index/"> <span class="clear"> <span class="block m-t-xs" style="font-size:20px;"> <img src="<?php echo @APP; ?>
/View/template/img/logo.png" width="30" height="30"> <img src="<?php echo @APP; ?>
/View/template/img/logo1.png" height="31"> </span> </span> </a>
            <ul class="dropdown-menu animated fadeInRight">
              <!-- <li><a class="J_menuItem" href="form_avatar.html">修改头像</a> </li>-->
              <li><a class="J_menuItem" href="<?php echo @ACT; ?>
//sysmanage/Index/index/">管理中心</a> </li>
              <!--<li><a class="J_menuItem" href="mailbox.html">信箱</a> </li>-->
              <li class="divider"></li>
              <li><a href="<?php echo @ACT; ?>
/sysmanage/Login/logout/">安全退出</a> </li>
            </ul>
          </div>
          <div class="logo-element"><img src="<?php echo @APP; ?>
/View/template/img/logo.png" width="30" height="30"> </div>
        </li>
        <li class="line dk"></li>
        <?php $_from = $this->_tpl_vars['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v1']):
?><!--显示主模块-->
        <li> <a href="javascript:void(0)"><i class="fa fa-<?php echo $this->_tpl_vars['v1']['url']; ?>
"></i> <span class="nav-label"><?php echo $this->_tpl_vars['v1']['name']; ?>
 </span><span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <?php $_from = $this->_tpl_vars['v1']['parentID']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v2']):
?>
            <?php if ($this->_tpl_vars['v2']['parentID'] != null): ?>
            <li><a class="J_menuItem" href="javascript:void(0)"><?php echo $this->_tpl_vars['v2']['name']; ?>
<span class="fa arrow"></span></a>
              <ul class="nav nav-third-level">
                <?php $_from = $this->_tpl_vars['v2']['parentID']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v3']):
?>
                <li> <a class="J_menuItem" href="<?php echo @ACT; ?>
<?php echo $this->_tpl_vars['v3']['url']; ?>
"><?php echo $this->_tpl_vars['v3']['name']; ?>
</a> </li>
                <?php endforeach; endif; unset($_from); ?>
              </ul>
            </li>
            <?php else: ?>
            <li><a class="J_menuItem" href="<?php echo @ACT; ?>
<?php echo $this->_tpl_vars['v2']['url']; ?>
"><?php echo $this->_tpl_vars['v2']['name']; ?>
</a> <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?>
          </ul>
        </li>
        <?php endforeach; endif; unset($_from); ?>
      </ul>
    </div>
  </nav>
  <!--左侧导航结束--> 
  <!--右侧部分开始-->
  <div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="row border-bottom">
      <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header"> <a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"><i class="fa fa-bars"></i> </a>
          <form role="search" class="navbar-form-custom" method="post" action="?">
            <div class="form-group">
              <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
            </div>
          </form>
        </div>
        <ul class="nav navbar-top-links navbar-right">
          <li class="dropdown" id="status_all">
          <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#"> <i class="fa fa-bell"></i> <span class="label label-primary" id="status_0">5</span> </a>
          <ul class="dropdown-menu dropdown-alerts">
            <li><a class="J_menuItem" href="<?php echo @ACT; ?>
/admin/GoodsOrder/goods_order_show/">
              <div>未处理订单</div>
              </a> </li>
            <li class="divider"></li>
            </a>
            </li>
            <li class="divider"></li>
            <li>
              <div class="text-center link-block"><a class="J_menuItem" href="<?php echo @ACT; ?>
/admin/HotelOrder/hotel_order_show/"> <strong>查看所有 </strong> <i class="fa fa-angle-right"></i> </a> </div>
            </li>
          </ul>
          </li>
          <li><a class="dropdown-toggle count-info" href="<?php echo @ACT; ?>
/sysmanage/Login/logout/"> <i class="fa fa-user"></i> </a> </li>
        </ul>
      </nav>
    </div>
    <div class="row J_mainContent" id="content-main">
      <iframe name="J_iframe" id="J_iframe" width="100%" height="100%" src="" frameborder="0" data-id="<?php echo @ACT; ?>
/sysmanage/Index/index/" seamless></iframe>
    </div>
  </div>
  <!--右侧部分结束--> 
</div>

<!-- 全局js --> 
<script src="<?php echo @APP; ?>
/View/template/js/jquery.min.js?v=2.1.4"></script> 
<script src="<?php echo @APP; ?>
/View/template/js/jquery.cookie.js"></script> 
<script src="<?php echo @APP; ?>
/View/template/js/bootstrap.min.js?v=3.3.6"></script> 
<script src="<?php echo @APP; ?>
/View/template/js/plugins/metisMenu/jquery.metisMenu.js"></script> 
<script src="<?php echo @APP; ?>
/View/template/js/plugins/slimscroll/jquery.slimscroll.min.js"></script> 
<script src="<?php echo @APP; ?>
/View/template/js/plugins/layer/layer.min.js"></script> 

<!-- 自定义js --> 
<script src="<?php echo @APP; ?>
/View/template/js/hAdmin.js?v=4.1.0"></script> 
<script type="text/javascript" src="<?php echo @APP; ?>
/View/template/js/index.js"></script> 

<!-- 第三方插件 --> 
<script src="<?php echo @APP; ?>
/View/template/js/plugins/pace/pace.min.js"></script> 
<script>
document.onkeypress = function(e){
  if(e.keyCode == 116){
    e.preventDefault(); //组织默认刷新
    var iframeSrc = iframe.src;
    iframe.src = iframeSrc;
  }
}
$(document).ready(function () {
	$(".J_menuItem").on('click', function() {
		url=$(this).attr('href');
		$.cookie('url', url);
	});		
});	
	
var iframe = document.getElementById('J_iframe');
if(iframe.getAttribute('src')==''){
	iframe.setAttribute('src','<?php echo @ACT; ?>
/sysmanage/Index/index/');//判断第一次进入页面时，显示的是第一个页面，详见ps
 }
url=$.cookie('url');
if (typeof(url) != "undefined") { 
  iframe.setAttribute('src',url);//重新设置获取的url，实现刷新显示当前页面	
}  


/**
 * 
 * 获取当前时间
 */
function p(s) {
    return s < 10 ? '0' + s: s;
}

//调用计划任务执行程序
var func = function (){
    $.ajax({
        type:'POST',
        url:'<?php echo @ACT; ?>
/admin/HotelOrderLog/admin_order_reminding/',
        dataType:'json',
        success:function(data){
				if(data.code=='sucess'){
					$('#status_all').addClass('open');
				   playSound();
				}
				$('#status_0').html(data.count.cnt0);
				$('#status_1').html(data.count.cnt1);
				$('#status_3').html(data.count.cnt3);
           console.log(JSON.stringify(data));
        }
    });
}

var playSound = function () {
    var borswer = window.navigator.userAgent.toLowerCase();
    if ( borswer.indexOf( "ie" ) >= 0 )
    {
        //IE内核浏览器
        var strEmbed = '<embed name="embedPlay" src="/upload/video.wav" autostart="true" hidden="true" loop="false"></embed>';
        if ( $( "body" ).find( "embed" ).length <= 0 )
            $( "body" ).append( strEmbed );
        var embed = document.embedPlay;

        //浏览器不支持 audion，则使用 embed 播放
        embed.volume = 100;
        //embed.play();这个不需要
    } else
    {
        //非IE内核浏览器
        var strAudio = "<audio id='audioPlay' src='/upload/video.wav' hidden='true'>";

        if($("#audioPlay").length<=0){
            $( "body" ).append( strAudio );
        }

        var audio = document.getElementById( "audioPlay" );

        //浏览器支持 audio
        audio.play();
    }
}
//主动调用
//setInterval("func()", 60000);
</script>
</body>
</html>