<?php	 
class FinPayRecord extends Action{	
	private $cacheDir='';//缓存目录
	public function __construct() {
		_instance('Action/Auth');
	}	
	public function fin_pay_record(){
		$currentPage = $this->_REQUEST("pageNum");//第几页
		$numPerPage  = $this->_REQUEST("numPerPage");//每页多少条
		$currentPage = empty($currentPage)?1:$currentPage;
		$numPerPage  = empty($numPerPage)?$GLOBALS["pageSize"]:$numPerPage;
		$countSql    = 'select id from fin_pay_record';
		$totalCount  = $this->C($this->cacheDir)->countRecords($countSql);	//计算记录数
		
		$moneySql    = 'select sum(money) as sum_money from fin_pay_record';
		$moneyRs	 = $this->C($this->cacheDir)->findOne($moneySql);
		$beginRecord = ($currentPage-1)*$numPerPage;
		$sql		 = "select * from fin_pay_record  order by id desc limit $beginRecord,$numPerPage";	
		$list		 = $this->C($this->cacheDir)->findAll($sql);
		//供应商
		$supplier= array();
		$posorder= array();
		if(is_array($list)){
			foreach($list as $key=>$row){
				$list[$key]["create_user"]	  = $this->L("User")->user_get_name($row['create_userID']);
				$list[$key]["blankaccount"]	  = $this->L("FinBankAccount")->fin_bank_accoun_get_name($row['blankID']);
				$supplier[$row['id']] = $this->L("Supplier")->supplier_get_name($row['supID']);
				$posorder[$row['id']] = $this->L("PosOrder")->pos_order_get_name($row['posID']);
			}
		}
		$assignArray = array('list'=>$list,'total_money'=>$moneyRs["sum_money"],
								'supplier'=>$supplier,'posorder'=>$posorder,'supplier'=>$supplier,'supplier'=>$supplier,
							"numPerPage"=>$numPerPage,"totalCount"=>$totalCount,"currentPage"=>$currentPage);	
		return $assignArray;
	}
	public function fin_pay_record_show(){
			$list	 = $this->fin_pay_record();
			$smarty  = $this->setSmarty();
			$smarty->assign($list);//框架变量注入同样适用于smarty的assign方法
			$smarty->display('fin_pay_record/fin_pay_record_show.html');	
	}		
	
	public function fin_pay_record_add(){
		if(empty($_POST)){
			$smarty  = $this->setSmarty();
			//$smarty->assign();//框架变量注入同样适用于smarty的assign方法
			$smarty->display('fin_pay_record/fin_pay_record_add.html');	
		}else{
			$id			=$this->_REQUEST("id");;
			$posID		=$this->_REQUEST("order_id");
			$supID		=$this->_REQUEST("org_id");
			$blankID	=$this->_REQUEST("blank_id");
			$stages		=$this->_REQUEST("stages");
			$paydate	=$this->_REQUEST("paydate");
			$paymoney	=$this->_REQUEST("pay_money");	
			$intro		=$this->_REQUEST("intro");	
			
			$sql= "insert into fin_pay_record(posID,supID,paydate,money,stages,blankID,intro,adt,create_userID) 
								values('$posID','$supID','$plandate','$paymoney','$stages','$blankID','$intro','".NOWTIME."','".SYS_USER_ID."');";
			if($this->C($this->cacheDir)->update($sql)>0){
				$this->L("PosOrder")->pos_order_pay_modify($posID,$new_money=$paymoney);
				$this->L("Common")->ajax_json_success("操作成功","0","/FinPayRecord/fin_pay_record_show/");	
			}
		}
	}		
	public function fin_pay_record_del(){
		$id=$this->_REQUEST("ids");
		$sql="delete from fin_pay_record where id in ($id)";
		$this->C($this->cacheDir)->update($sql);	
		$this->L("Common")->ajax_json_success("操作成功","1","/FinPayRecord/fin_pay_record_show/");	
	}
	
	//付款记录添加付款计划 to 付款记录
	public function fin_pay_plan_record_add($planID,$posID,$supID,$blankID,$paydate,$money,$stages,$intro){
		$sql= "insert into fin_pay_record(
					planID,posID,supID,blankID,paydate,money,stages,intro,adt,create_userID) 
				values(
					'$planID','$posID','$supID','$blankID','$paydate','$money','$stages','$intro','".NOWTIME."','".SYS_USER_ID."');";
		if($this->C($this->cacheDir)->update($sql)>0){
			$this->L("PosOrder")->pos_order_pay_modify($posID,$new_money=$money);
			return true;
		}else{
			return false;	
		}	
	}
		
}//
?>