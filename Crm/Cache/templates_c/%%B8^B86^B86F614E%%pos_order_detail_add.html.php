<?php /* Smarty version 2.6.26, created on 2016-11-18 21:34:50
         compiled from pos_order_detail/pos_order_detail_add.html */ ?>
<form  action="<?php echo @ACT; ?>
/PosOrderDetail/pos_order_detail_add/id/<?php echo $this->_tpl_vars['one']['id']; ?>
/pos_number/<?php echo $this->_tpl_vars['one']['pos_number']; ?>
/" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone)">
<div class="pageContent">
	<div class="pageFormContent" layoutH="97">
			<fieldset>
			<legend>采购订单信息：</legend>
			<p>
				<label>采购订单主题：</label>
					<input name="title" class="required" type="text" value="<?php echo $this->_tpl_vars['one']['title']; ?>
" readonly="readonly"/>
			</p>
			<p>
				<label>采购总金额：</label>
					<input name="money" class="required" type="text" value="<?php echo $this->_tpl_vars['one']['money']; ?>
" readonly="readonly"/>
			</p>
			<p>
				<label>供应商名称：</label>
				<input id="supID" name="org.id" value="<?php echo $this->_tpl_vars['one']['supID']; ?>
" type="hidden" />
				<input name="org.name" value="<?php echo $this->_tpl_vars['supplier'][$this->_tpl_vars['one']['supID']]; ?>
" type="text" class="required" readonly="readonly"/>
			</p>
			
			<p>
				<label>联系人员：</label>
				<input name="linkman.id" value="<?php echo $this->_tpl_vars['one']['linkmanID']; ?>
" type="hidden"/>
				<input class="required" value="<?php echo $this->_tpl_vars['linkman'][$this->_tpl_vars['one']['linkmanID']]; ?>
" name="linkman.name" type="text" postField="keyword" suggestFields="name" 
					suggestUrl="<?php echo @ACT; ?>
/SupLinkman/pos_linkman_select/supID/{supID}/" warn="请选择供应商名称" lookupGroup="linkman" readonly="readonly"/>
			</p>

			<p>
				<label>采购订单时间：</label>
					<input name="title" class="required" type="text" value="<?php echo $this->_tpl_vars['one']['bdt']; ?>
" readonly="readonly"/>
			</p>
			<p>
				<label>预计到货时间：</label>
					<input name="title" class="required" type="text" value="<?php echo $this->_tpl_vars['one']['edt']; ?>
" readonly="readonly"/>
			</p>			
			<p>
				<label>我方代表：</label>
					<input name="our.id" value="<?php echo $this->_tpl_vars['one']['our_userID']; ?>
" type="hidden"/>
				<input class="required" value="<?php echo $this->_tpl_vars['users'][$this->_tpl_vars['one']['our_userID']]; ?>
" name="our.name" type="text" postField="keyword" suggestFields="title" 
					suggestUrl="<?php echo @ACT; ?>
/User/cst_chance_select/supID/{supID}/" warn="请选择供应商名称" lookupGroup="our" readonly="readonly"/>
			</p>
			<p>
				<label>建档时间：</label>
					<input name="title" class="required" type="text" value="<?php echo $this->_tpl_vars['one']['adt']; ?>
" readonly="readonly"/>
			</p>			
			</fieldset>
			<div class="divider"></div>			
		<div class="tabs">
			<div class="tabsHeader">
				<div class="tabsHeaderContent">
					<ul>
						<li class="selected"><a href="javascript:void(0)"><span>订单明细</span></a></li>
					</ul>
				</div>
			</div>
			<div class="tabsContent" style="height: 220px;">
				<div>
					<table class="list nowrap itemDetail" addButton="添加产品行数" width="100%">
						<thead>
							<tr>
								<th type="lookup" name="items.name[]" lookupGroup="items" lookupUrl="<?php echo @ACT; ?>
/Product/lookup_search/" suggestFields="name[],pro_number[],model[],norm[],price[]" fieldClass="required">产品名称</th>
								<th type="text" name="items.pro_number[]" size="12" fieldClass="required">产品编号</th>
								<th type="text" name="items.model[]"  size="12" >型号</th>
								<th type="text" name="items.norm[]"  size="12" >规格</th>
								<th type="calculate" name="items.price[]" size="5" fieldClass="digits required">单 价(￥)</th>
								<th type="calculate" name="items.orgCount[]" fieldClass="required digits" size="4">數 量</th>
								<th type="calculate" name="items.orgDiscount[]" size="2">折 扣(%)</th>
								<th type="text" name="items.orgTotal[]" size="8" readOnly>金 额(￥)</th>
								<th onclick="calculate(this,1)" type="del" fieldClass="refreshAmount">删行</th>
							</tr>
						</thead>
						<tbody>
						<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
							<tr class="unitBox">
								<td>
								<input  name="items.name[]" type="text" postField="keyword" suggestFields="items.name[],pro_number[],model[],norm[],price[]" fieldClass="required" suggestUrl="<?php echo @ACT; ?>
/Product/lookup_search/" lookupGroup="items" class="required" value="<?php echo $this->_tpl_vars['v']['name']; ?>
" size="12"/>
								<a class="btnLook" href="<?php echo @ACT; ?>
/Product/lookup_search/" lookupGroup="items" suggestFields="items.name[],pro_number[],model[],norm[],price[]" suffix="[]" >查找带回</a>									
								</td>
								<td><input type="text" name="items.pro_number[]" value="<?php echo $this->_tpl_vars['v']['pro_number']; ?>
" size="12" class="textInput"></td>
								<td><input type="text" name="items.model[]"  size="12" value="<?php echo $this->_tpl_vars['v']['model']; ?>
"></td>
								<td><input type="text" name="items.norm[]"  size="12" value="<?php echo $this->_tpl_vars['v']['norm']; ?>
"></td>
								<td><input type="text" name="items.price[]" size="5" value="<?php echo $this->_tpl_vars['v']['price']; ?>
" onkeyup="calculate(this, 0);"  Class="digits required"></td>
								<td><input type="text" name="items.orgCount[]" value="<?php echo $this->_tpl_vars['v']['number']; ?>
" onkeyup="calculate(this, 0);"  size="4" Class="digits required"> </td>
								<td><input type="text" name="items.orgDiscount[]"  value="<?php echo $this->_tpl_vars['v']['rebate']; ?>
" onkeyup="calculate(this, 0);"  size="2"></td>
								<td><input type="text" name="items.orgTotal[]" value="<?php echo $this->_tpl_vars['v']['money']; ?>
" size="8" readOnly></th>
								<td><a href="javascript:void(0)" onclick="calculate(this, 1);" class="btnDel"></a></th>	
						    </tr>
						  <?php endforeach; endif; unset($_from); ?>					
						</tbody>
					</table>
				</div>
				
				
			</div>
			<div class="tabsFooter">
				<div class="tabsFooterContent"></div>
			</div>
		</div>
		
	</div>
	<div class="formBar">
<label style="float:left">累计数量:<input name="total_nums" size="3" type="text" readonly="readonly" /></label>
    <label style="float:left">  折扣金额:<input name="odd_amount" size="5" type="text" /></label>
    <label style="float:left">  应付金额:<input name="total_amount" size="8" type="text" readonly="readonly" /></label>
    <label style="float:left">  实付金额:<input name="trade_amount" size="8" type="text" /></label>
<!--    <label style="float:left">  制单人:<input name="createMan" value="{$Think.session.loginUserName}" size="10" type="text" readonly="true" /></label>    
	<label style="float: left;">  入库:<input type="checkbox" id="goStock" name="goStock" value="1" checked="checked" /></label>
    <label style="float: left;">   付款:<input type="checkbox" id="goFunds" name="goFunds" value="1" checked="checked" /></label>
    <label style="float:left">   付款账户:
    <SELECT name="bankid">
     <volist id="vu" name="listBank">
	    <option value="{$vu.id}">{$vu.bankname}</option>
     </volist>
	</SELECT>-->
    </label>
		<ul>
			<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
			<li><div class="button"><div class="buttonContent"><button class="close" type="button">关闭</button></div></div></li>
		</ul>
	</div>
</div>
</form>
<script type="text/javascript">
<!--
var total_amount = $("input[name=total_amount]");
var trade_amount = $("input[name=trade_amount]");
var odd_amount = $("input[name=odd_amount]");
var total_nums = $("input[name=total_nums]");
$(function(){
    
    // 初始化應收金額和實收金額
	total_amount.val((0).toFixed(2));
	trade_amount.val((0).toFixed(2));
    total_nums.val(0);
	
	// 扣除零頭
	odd_amount.keyup(function(){
		trade_amount.val((total_amount.val() - $(this).val()).toFixed(2));
	});
});

function calculate(t, del){
    var tbody = $(t).parents('tbody');
    var total = 0;
    var totalnums = 0;
    var fix = 0; 
    var fixnums=0;// 刪除的話應該忽略本行
    if (del == 1){
        $(t).parents("tr:first").each(function(){
            var orgCount = 0;
            var price = 0;
            var orgDiscount = 1;
            var orgTotal = 0;
            $(this).find('input').each(function(){
                if (this.name == 'items.orgCount[]') orgCount = this.value == '' ? 0 : this.value;
                if (this.name == 'items.price[]') price = this.value == '' ? 0 : this.value;
                if (this.name == 'items.orgDiscount[]') orgDiscount = this.value == '' ? 1 : (1 - this.value/100);
                if (this.name == 'items.orgTotal[]'){
                    orgTotal = orgCount*price*orgDiscount;
                    if (orgTotal == 0){
                        this.value = '';
                    } else {
                        this.value = orgTotal.toFixed(2);
                    }
                }
            });
            fix = orgTotal;
            fixnums =orgCount;
        });
    }
    $(tbody).find('tr').each(function(){
        var orgCount = 0;
        var price = 0;
        var orgDiscount = 1;
        var orgTotal = 0;
        $(this).find('input').each(function(){
            if (this.name == 'items.orgCount[]') orgCount = this.value == '' ? 0 : 1*this.value;
            if (this.name == 'items.price[]') price = this.value == '' ? 0 : this.value;
            if (this.name == 'items.orgDiscount[]') orgDiscount = this.value == '' ? 1 : (1 - this.value/100);
            if (this.name == 'items.orgTotal[]'){
                orgTotal = orgCount*price*orgDiscount;
				hitTotal = orgCount*price;
                if (orgTotal == 0){
                    this.value = '';
                } else {
                    this.value = orgTotal.toFixed(2);
                }
            }
        });
        total += orgTotal;
        totalnums +=orgCount;
    });
    if (fix != 0){
        total -= fix;
        totalnums -= fixnums;
    }
    total_nums.val(totalnums);
    total_amount.val(total.toFixed(2));
    trade_amount.val((total - odd_amount.val()).toFixed(2));
}
//-->
</script>