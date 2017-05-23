<?php /* Smarty version 2.6.26, created on 2017-04-14 17:52:00
         compiled from cst_filing/cst_filing_add.html */ ?>
<div class="pageContent">
	<form method="post" action="<?php echo @ACT; ?>
/CstFiling/cst_filing_add/" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);">
		<div class="pageFormContent" layoutH="56">
			<fieldset>
			<legend>基础信息：</legend>
			<p>
				<label>客户名称：</label>
				<input id="cusID" name="org.id" value="" type="hidden"/>
				<input name="org.name" type="text" class="required"/>
				<a class="btnLook" href="<?php echo @ACT; ?>
/Customer/lookup_search/" lookupGroup="org">选择供应商</a>	
			</p>
			
			<p>
				<label>联系人：</label>
				<input name="linkman.id" value="" type="hidden"/>
				<input class="required" name="linkman.name" type="text" postField="keyword" suggestFields="name" 
					suggestUrl="<?php echo @ACT; ?>
/CstLinkman/cst_linkman_select/cusID/{cusID}/" warn="请选择客户名称" lookupGroup="linkman"/>
			</p>
			<p>
				<label>销售机会：</label>
				<input name="chance.id" value="" type="hidden"/>
				<input name="chance.title" type="text" postField="keyword" suggestFields="title" 
					suggestUrl="<?php echo @ACT; ?>
/CstChance/cst_chance_select/cusID/{cusID}/" warn="请选择客户名称" lookupGroup="chance"/>
			</p>
			<p>
				<label>我方代表：</label>
				<input id="applicant_userID" name="our.id" value="" type="hidden"/>
				<input name="our.name" type="text" class="required"/>
				<a class="btnLook" href="<?php echo @ACT; ?>
/User/lookup_search/" lookupGroup="our">选择客户</a>	
			</p>
			</fieldset>
			<div class="divider"></div>			
		
			<fieldset>
				<legend>主题：</legend>
					<dl class="nowrap">
						<input name="title" class="required" type="text" size="50" value="<?php echo $this->_tpl_vars['one']['title']; ?>
" alt="请输联系主题内容"/>
					</dl>	
				<legend>项目介绍：</legend>
					<dl class="nowrap">
						<textarea name="intro" cols="80" rows="5"><?php echo $this->_tpl_vars['one']['intro']; ?>
</textarea>
					</dl>	
				<legend>所需支持：</legend>
					<dl class="nowrap">
						<textarea name="support" cols="80" rows="5"><?php echo $this->_tpl_vars['one']['support']; ?>
</textarea>
					</dl>	
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