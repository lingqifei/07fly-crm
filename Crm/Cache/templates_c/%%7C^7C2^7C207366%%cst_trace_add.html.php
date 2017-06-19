<?php /* Smarty version 2.6.26, created on 2017-06-19 09:57:56
         compiled from cst_trace/cst_trace_add.html */ ?>
<div class="pageContent">
	<form method="post" action="<?php echo @ACT; ?>
/CstTrace/cst_trace_add/" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);">
		<div class="pageFormContent" layoutH="56">
			<fieldset>
			<legend>基础信息：</legend>
			<p>
				<label>客户名称：</label>
				<input id="cusID" name="org.id" value="<?php echo $this->_tpl_vars['cusID']; ?>
" type="hidden"/>
				<input name="org.name" type="text" value="<?php echo $this->_tpl_vars['cus_name']; ?>
" class="required"/>
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
				<label>沟通阶段：</label>
				<input name="salestage.id" value="" type="hidden"/>
				<input class="required" name="salestage.name" type="text" postField="keyword" suggestFields="name" 
					suggestUrl="<?php echo @ACT; ?>
/CstDict/cst_dict_select/type/salestage/" lookupGroup="salestage"/>
			</p>
			<p>
				<label>沟通方式：</label>
				<input name="salemode.id" value="" type="hidden"/>
				<input class="required" name="salemode.name" type="text" postField="keyword" suggestFields="name" 
					suggestUrl="<?php echo @ACT; ?>
/CstDict/cst_dict_select/type/salemode/" lookupGroup="salemode"/>
			</p>
			<p>
				<label>沟通时间：</label>
				<input type="text" name="bdt" class="date" dateFmt="yyyy-MM-dd HH:mm:ss" readonly="true"/>
				<a class="inputDateButton" href="javascript:;">选择</a>
			</p>
			<p>
				<label>当前状态：</label>
				<?php echo $this->_tpl_vars['status']; ?>

			</p>
            <p>
            <label>沟通主题：</label>
               <input name="title" class="required" type="text" size="30" value="" alt="请输联系主题内容"/>
            </p>	
			</fieldset>
            <fieldset>	
				<legend>备注：</legend>
                <dl class="nowrap">
                    <textarea name="intro" cols="80" rows="3"><?php echo $this->_tpl_vars['one']['intro']; ?>
</textarea>
                </dl>	
			</fieldset>	
			<div class="divider"></div>			
			<fieldset>
				<legend>计划下次沟通：</legend>
			<p>
				<label>下次沟通时间：</label>
				<input type="text" name="nextbdt" class="date" dateFmt="yyyy-MM-dd HH:mm:ss" readonly="true"/>
				<a class="inputDateButton" href="javascript:;">选择</a>
			</p>
            <p>
            <label>下次沟通主题：</label>
               <input name="nexttitle" class="" type="text"  size="30" alt="请输下次计划联系主题内容"/>	
            </p>
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