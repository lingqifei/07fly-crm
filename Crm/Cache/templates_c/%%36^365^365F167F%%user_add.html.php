<?php /* Smarty version 2.6.26, created on 2016-10-26 22:40:14
         compiled from user/user_add.html */ ?>
<div class="divider"></div>
<div class="pageContent">
	<form method="post" action="<?php echo @ACT; ?>
/User/user_add/" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);">
		<div class="pageFormContent" layoutH="56">
			<fieldset>
				<legend>基础信息：</legend>
			<p>
				<label>帐号：</label>
				<input type="text"  name="account" class="required">
			</p>
			<p>
				<label>密码：</label>
				<input type="password"  name="password" class="required">
			</p>
			<p>
				<label>姓名：</label>
				<input type="text" value="" name="name" class="required">
			</p>
			<p>
				<label>性别：</label>
				<input type="radio" name="gender" value="1" checked="checked" />男
				<input type="radio" name="gender" value="1" />女
			</p>
			<p>
				<label>所在部门：</label>
				<?php echo $this->_tpl_vars['dept']; ?>

			</p>
			<p>
				<label>所在职位：</label>
				<?php echo $this->_tpl_vars['position']; ?>

			</p>
			<p>
				<label>所属权限：</label>
				<?php echo $this->_tpl_vars['role']; ?>

			</p>
			<p>
				<label>手机：</label>
					<input type="text" value="" name="mobile" class="required phone">
			</p>

			<p>
				<label>联系电话：</label>
				<input type="text" value="" name="tel" class="phone">
			</p>	
			<p>
				<label>QQ：</label>
				<input type="text" value="" name="qicq">
			</p>	
			<p>
				<label>邮箱：</label>
				<input type="text" value="" name="email" class="email">
			</p>	
			<p>
				<label>邮编：</label>
				<input type="text" value="" name="zipcode">
			</p>	
			<p>
				<label>联系地址：</label>
				<input type="text" value="" name="address" >
			</p>
			<div class="divider"></div>
			<fieldset>
				<legend>介绍：</legend>
					<dl class="nowrap">
						<textarea name="intro" cols="80" rows="5"><?php echo $this->_tpl_vars['one']['intro']; ?>
</textarea>
					</dl>	
			</fieldset>	
			</fieldset>	
		</div>
		<div class="formBar">
			<ul>
				<!--<li><a class="buttonActive" href="javascript:;"><span>保存</span></a></li>-->
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li>
					<div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
				</li>
			</ul>
		</div>
	</form>
</div>