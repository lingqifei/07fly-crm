<?php /* Smarty version 2.6.26, created on 2018-12-31 17:12:13
         compiled from sysmanage/user_modify.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>员工修改</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="shortcut icon" href="favicon.ico">
<link href="<?php echo @APP; ?>
/View/template/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<link href="<?php echo @APP; ?>
/View/template/css/font-awesome.css?v=4.4.0" rel="stylesheet">
<link href="<?php echo @APP; ?>
/View/template/css/plugins/iCheck/custom.css" rel="stylesheet">
<link href="<?php echo @APP; ?>
/View/template/css/animate.css" rel="stylesheet">
<link href="<?php echo @APP; ?>
/View/template/css/style.css?v=4.1.0" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
 <div class="row">
  <div class="col-sm-12">
   <div class="ibox float-e-margins">
    <div class="ibox-title">
     <h5>员工修改</h5>
     <div class="ibox-tools">
      <button type="button" class="btn btn-xs btn-primary btn-back-reply"><i class="fa fa-reply"></i> 返回</button>
     </div>
    </div>
    <div class="ibox-content">
     <form class="form-horizontal" method="post" action="<?php echo @ACT; ?>
/sysmanage/User/user_modify/id/<?php echo $this->_tpl_vars['one']['id']; ?>
/">
		 <div class="form-group">
       <label class="col-sm-2 control-label">帐号</label>
       <div class="col-sm-8">
        <input name="account" class="form-control" type="text" value="<?php echo $this->_tpl_vars['one']['account']; ?>
" placeholder="请输入帐号" required/>
        <span class="help-block m-b-none"></span> </div>
      </div>
		 <div class="form-group">
       <label class="col-sm-2 control-label">密码</label>
       <div class="col-sm-8">
        <input name="password" class="form-control" type="text" value="<?php echo $this->_tpl_vars['one']['password']; ?>
" placeholder="请输入密码" required/>
        <span class="help-block m-b-none"></span> </div>
      </div>
      <div class="form-group">
       <label class="col-sm-2 control-label">姓名</label>
       <div class="col-sm-8">
        <input name="name" class="form-control" type="text" value="<?php echo $this->_tpl_vars['one']['name']; ?>
" placeholder="请输入名称" required/>
        <span class="help-block m-b-none"></span> </div>
      </div>
		<div class="form-group">
       <label class="col-sm-2 control-label">姓别</label>
       <div class="col-sm-8">
        <div class="radio i-checks">
          	<input type="radio" name="gender" value="1" <?php if ($this->_tpl_vars['one']['gender'] == 1): ?> checked="checked" <?php endif; ?> />男
				<input type="radio" name="gender" value="2" <?php if ($this->_tpl_vars['one']['gender'] == 2): ?> checked="checked" <?php endif; ?> />女
        </div>
       </div>
      </div>
		 
      <div class="form-group">
       <label class="col-sm-2 control-label">部门</label>
       <div class="col-sm-8"> <?php echo $this->_tpl_vars['dept']; ?>
 <span class="help-block m-b-none"></span> </div>
      </div>
		 <div class="form-group">
       <label class="col-sm-2 control-label">职位</label>
       <div class="col-sm-8"> <?php echo $this->_tpl_vars['position']; ?>
 <span class="help-block m-b-none"></span> </div>
      </div>
		 <div class="form-group">
       <label class="col-sm-2 control-label">角色</label>
       <div class="col-sm-8"> <?php echo $this->_tpl_vars['role']; ?>
 <span class="help-block m-b-none"></span> </div>
      </div>
      <div class="form-group">
       <label class="col-sm-2 control-label">手机</label>
       <div class="col-sm-8">
        <input name="mobile" class="form-control" type="text" value="<?php echo $this->_tpl_vars['one']['mobile']; ?>
" placeholder="输入手机号"/>
        <span class="help-block m-b-none"></span> </div>
      </div>
		 <div class="form-group">
       <label class="col-sm-2 control-label">QQ</label>
       <div class="col-sm-8">
        <input name="qicq" class="form-control" type="text" value="<?php echo $this->_tpl_vars['one']['qicq']; ?>
" placeholder="输入QQ号码"/>
        <span class="help-block m-b-none"></span> </div>
      </div>
		 <div class="form-group">
       <label class="col-sm-2 control-label">邮箱</label>
       <div class="col-sm-8">
        <input name="email" class="form-control" type="email" value="<?php echo $this->_tpl_vars['one']['email']; ?>
" placeholder="输入邮箱地址"/>
        <span class="help-block m-b-none"></span> </div>
      </div>
		 <div class="form-group">
       <label class="col-sm-2 control-label">介绍</label>
       <div class="col-sm-8">
        <textarea name="intro" class="form-control" cols="80" rows="2"><?php echo $this->_tpl_vars['one']['intro']; ?>
</textarea>
        <span class="help-block m-b-none"></span> </div>
      </div>
      <div class="form-group">
       <div class="col-sm-offset-2 col-sm-8">
        <button class="btn  btn-w-m btn-info" type="submit">保存数据</button>
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>
<!-- 全局js --> 
<script src="<?php echo @APP; ?>
/View/template/js/jquery.min.js?v=2.1.4"></script> 
<script src="<?php echo @APP; ?>
/View/template/js/bootstrap.min.js?v=3.3.6"></script> 

<!-- 自定义js --> 
<script src="<?php echo @APP; ?>
/View/template/js/content.js?v=1.0.0"></script> 

<!-- iCheck --> 
<script src="<?php echo @APP; ?>
/View/template/js/plugins/iCheck/icheck.min.js"></script> 
<script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>
</html>