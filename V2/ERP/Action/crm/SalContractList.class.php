<?php
/*
 *
 * crm.ContractList  客户销售合同管理   
 *
 * =========================================================
 * 零起飞网络 - 专注于网站建设服务和行业系统开发
 * 以质量求生存，以服务谋发展，以信誉创品牌 !
 * ----------------------------------------------
 * @copyright	Copyright (C) 2017-2018 07FLY Network Technology Co,LTD (www.07FLY.com) All rights reserved.
 * @license    For licensing, see LICENSE.html or http://www.07fly.top/crm/license
 * @author ：kfrs <goodkfrs@QQ.com> 574249366
 * @version ：1.0
 * @link ：http://www.07fly.top 
 */	
class SalContractList extends Action{	
	private $cacheDir='';//缓存目录
	public function __construct() {
		_instance('Action/sysmanage/Auth');
		$this->contract=_instance('Action/crm/SalContract');
	}	
	
	public function sal_contract_list(){
		$contract_id= $this->_REQUEST("contract_id");
		$totalSql	= "select sum(num) as total_num,sum(goods_money) as total_goods_money 
						from sal_contract_list where contract_id='$contract_id'";	
		$totalOne	= $this->C($this->cacheDir)->findOne($totalSql);
		
		$sql	= "select * from sal_contract_list where contract_id='$contract_id'";	
		$list	= $this->C($this->cacheDir)->findAll($sql);
		return array('list'=>$list,'totalCount'=>$totalOne);
	}

	public function sal_contract_list_json(){
		$assArr = $this->sal_contract_list();
		echo json_encode($assArr);
	}		

	public function sal_contract_list_add(){
		$contract_id= $this->_REQUEST("contract_id");
		if(empty($_POST)){
			$list['contract']=$this->contract->sal_contract_get_one($contract_id);
			$smarty = $this->setSmarty();
			$smarty->assign($list);
			$smarty->display('crm/sal_contract_list_add.html');	
		}else{
			
			
			$sku_id		= $this->_REQUEST("sku_id");
			$sku_name	= $this->_REQUEST("sku_name");
			$goods_id	= $this->_REQUEST("goods_id");
			$goods_name	= $this->_REQUEST("goods_name");
			$sale_price	= $this->_REQUEST("sale_price");
			$num		= $this->_REQUEST("num");
			$goods_money= $this->_REQUEST("goods_money");
			$remarks	= $this->_REQUEST("remarks");
			$total_goods_money=array_sum($goods_money);
			
			$contract_money= $this->_REQUEST("contract_money");
			if($contract_money<$total_goods_money){
				$this->L("Common")->ajax_json_error("明细商品总金额不能超过合同金额");
				return false;
			}
			
			//删除数据
			$this->C($this->cacheDir)->delete('sal_contract_list',"contract_id='$contract_id'");
			
			foreach($sku_id as $i=>$sku_one_id){
				$into_data=array(
					'contract_id'=>$contract_id,
					'sku_id'=>$sku_id[$i],
					'sku_name'=>$sku_name[$i],
					'goods_id'=>$goods_id[$i],
					'goods_name'=>$goods_name[$i],
					'sale_price'=>$sale_price[$i],
					'num'=>$num[$i],
					'goods_money'=>$goods_money[$i],
					'remarks'=>$remarks[$i],
					'create_time'=>NOWTIME,
					'create_user_id'=>SYS_USER_ID,
				);	
				$this->C($this->cacheDir)->insert('sal_contract_list',$into_data);
			}
			$this->L("Common")->ajax_json_success("操作成功");
		}
	}	

	public function sal_contract_list_del($contract_id){
		$this->C($this->cacheDir)->delete('sal_contract_list',"contract_id in ($contract_id)");
	}
		
}
?>