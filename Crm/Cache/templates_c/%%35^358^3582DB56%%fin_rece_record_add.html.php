<?php /* Smarty version 2.6.26, created on 2017-05-22 15:40:16
         compiled from fin_rece_record/fin_rece_record_add.html */ ?>
<div class="pageContent">
	<form method="post" action="<?php echo @ACT; ?>
/FinReceRecord/fin_rece_record_add/" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">
		<div class="pageFormContent" layoutH="50">
			<fieldset>
			<legend>基础信息：</legend>	
			<p>
				<label>客户名称：</label>
				<input id="cusID" name="cus.id" value="" type="hidden" class="required"/>
				<input name="cus.name" type="text" class="required"/>
				<a class="btnLook" href="<?php echo @ACT; ?>
/Customer/lookup_search/" lookupGroup="cus">选择客户</a>		
			</p>
			
			<p>
				<label>合同订单：</label>
				<input name="order.id" value="" type="hidden"/>
                <input name="order.type" value="" type="hidden"/>
				<input class="required" name="order.name" type="text" postField="keyword" suggestFields="name" 
					suggestUrl="<?php echo @ACT; ?>
/FinReceRecord/fin_rece_get_customer_business/cusID/{cusID}/" warn="请选择订单" lookupGroup="order"/>
			</p>
			<p>
				<label>回款日期：</label>
				<input type="text" name="paydate" class="date required"/>
				<a class="inputDateButton" href="javascript:;">选择</a>
				<span class="info">年-月-日</span>
			</p>
			<p>
				<label>总金额：</label>
				<input type="text" name="order.money" class="required" readonly="true"/>
			</p>
 			<p>
				<label>回款期次：</label>
				<input type="text" name="stages" class="required"/>	
			</p>
			<p>
				<label>已付金额：</label>
				<input type="text" value="" name="order.back_money" readonly="true">
			</p>
			<p>
				<label>回款金额：</label>
				<input type="text" value="" name="order.now_back_money" class="required digits">
			</p>
			<p>
				<label>发票金额：</label>
				<input type="text" name="order.bill_money" class="required" readonly="true"/>	
			</p>
            <p>
            	<label>回款帐户：</label>
				<input name="blank.id" value="" type="hidden"/>
				<input class="required" name="blank.card" type="text" postField="keyword" suggestFields="card" 
					suggestUrl="<?php echo @ACT; ?>
/FinBankAccount/fin_bank_accoun_select/" warn="请选回款帐户" lookupGroup="blank"/>
            </p>	
			<p>
				<label>去零金额：</label>
				<input type="text" value="" name="order.zero_money" readonly="true">
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