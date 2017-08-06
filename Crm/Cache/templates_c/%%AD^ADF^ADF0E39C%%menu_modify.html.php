<?php /* Smarty version 2.6.26, created on 2017-08-06 12:49:29
         compiled from menu/menu_modify.html */ ?>
<div class="pageContent">
	<form method="post" action="<?php echo @ACT; ?>
/Menu/menu_modify/id/<?php echo $this->_tpl_vars['one']['id']; ?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);">
		<div class="pageFormContent" layoutH="56">
			<p>
				<label>中文栏目名称：</label>
				<input name="name" class="required" type="text" size="30" value="<?php echo $this->_tpl_vars['one']['name']; ?>
" alt="请输栏目中文名称"/>
			</p>
			<p>
				<label>英文栏目名称：</label>
				<input name="name_en" class="required" type="text" size="30" value="<?php echo $this->_tpl_vars['one']['name_en']; ?>
" alt="请输栏目英文名称"/>
			</p>
			<p>
				<label>链接地址：</label>
				<input name="url" class="required" type="text" size="30" value="<?php echo $this->_tpl_vars['one']['url']; ?>
" alt="请输链接地址"/>
			</p>
			<p>
				<label>父级栏目：</label>
				<?php echo $this->_tpl_vars['parentID']; ?>


			</p>
			<p>
				<label>排位序号：</label>
				<input type="text" value="<?php echo $this->_tpl_vars['one']['sort']; ?>
" name="sort" class="required digits">
			</p>
			<p>
				<label>是否启用：</label>
				<input type="checkbox" name="visible" value="1" <?php if ($this->_tpl_vars['one']['visible'] == 1): ?> checked <?php endif; ?> />
			</p>
		
			
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