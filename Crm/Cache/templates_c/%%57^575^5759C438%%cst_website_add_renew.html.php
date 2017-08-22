<?php /* Smarty version 2.6.26, created on 2017-07-31 14:14:45
         compiled from cst_website/cst_website_add_renew.html */ ?>
<div class="pageContent">
	<form method="post" action="<?php echo @ACT; ?>
/CstWebsite/cst_website_add_renew/" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">
		<div class="pageFormContent" layoutH="56">
			<fieldset>
			<legend>基础信息：</legend>
			<p>
				<label>合同编号：</label>
				<input type="text" value="<?php echo $this->_tpl_vars['number']; ?>
" name="con_number" class="required" >
			</p>
			<p>
				<label>主题：</label>
				<input type="text" value="<?php echo $this->_tpl_vars['website']['name']; ?>
续费" name="title" class="required">
                <input type="hidden" value="<?php echo $this->_tpl_vars['website']['id']; ?>
" name="websiteID" class="required">
			</p>	
			<p>
				<label>金额：</label>
				<input type="text" value="" name="money" class="required digits">
			</p>		
				
			
			<p>
				<label>联系人：</label>
                <input id="cusID" name="cus.id" value="<?php echo $this->_tpl_vars['website']['cusID']; ?>
" type="hidden"/>
				<input name="linkman.id" value="" type="hidden"/>
				<input class="required" name="linkman.name" type="text" postField="keyword" suggestFields="name" 
					suggestUrl="<?php echo @ACT; ?>
/CstLinkman/cst_linkman_select/cusID/{cusID}/" warn="请选择客户名称" lookupGroup="linkman"/>
			</p>
			<p>
				<label>有效期起始：</label>
				<input type="text" name="bdt" value="<?php echo $this->_tpl_vars['website']['edt']; ?>
" class="date required" readonly="true"/>
				<a class="inputDateButton" href="javascript:;">选择</a>
			</p>
			<p>
				<label>有效期终止：</label>
				<input type="text" name="edt" class="date required" readonly="true"/>
				<a class="inputDateButton" href="javascript:;">选择</a>
			</p>
			<p>
				<label>我方代表：</label>
				<input id="our_userID" name="our.id" value="<?php echo $this->_tpl_vars['one']['our_userID']; ?>
" type="hidden"/>
				<input name="our.name" type="text" class="required" value="<?php echo $this->_tpl_vars['users'][$this->_tpl_vars['one']['our_userID']]; ?>
" />
				<a class="btnLook" href="<?php echo @ACT; ?>
/User/lookup_search/" lookupGroup="our">选择客户</a>	
			</p>
			<p>
				<label>合同类型：</label>
				<input type="radio"	name="renew_status" value="1"/>新增&nbsp;&nbsp;
                <input type="radio"	name="renew_status" value="2"  checked="checked"  />续费
			</p>
			</fieldset>
			<div class="divider"></div>			
		
			<fieldset>
				<legend>备注：</legend>
					<dl class="nowrap">
						<textarea name="intro" cols="80" rows="5"><?php echo $this->_tpl_vars['one']['intro']; ?>
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