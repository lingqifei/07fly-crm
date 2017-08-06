<?php
class Customer extends Action{	
	private $cacheDir='';//缓存目录
	public function __construct() {
		_instance('Action/Auth');
	}	
	
	public function customer(){
	
		//**获得传送来的数据作分页处理
		$currentPage = $this->_REQUEST("pageNum");//第几页
		$numPerPage  = $this->_REQUEST("numPerPage");//每页多少条
		$currentPage = empty($currentPage)?1:$currentPage;
		$numPerPage  = empty($numPerPage)?$GLOBALS["pageSize"]:$numPerPage;
		
		//**************************************************************************
		//**获得传送来的数据做条件来查询

		$name	   = $this->_REQUEST("name");
		$tel	   = $this->_REQUEST("tel");
		$linkman   = $this->_REQUEST("linkman");
		$ecotype   = $this->_REQUEST("ecotype_id");
		$trade     = $this->_REQUEST("trade_id");
		$trade_name= $this->_REQUEST("trade_name");
		$fax   	   = $this->_REQUEST("fax");
		$email     = $this->_REQUEST("email");
		$address   = $this->_REQUEST("address");	
		$bdt   	   = $this->_REQUEST("bdt");
		$edt   	   = $this->_REQUEST("edt");
		
		
		$where_str = " create_userID in (".SYS_USER_VIEW.")";
		
		$searchKeyword	   = $this->_REQUEST("searchKeyword");
		$searchValue	   = $this->_REQUEST("searchValue");
		if( !empty($searchValue) ){
			$where_str .=" and $searchKeyword like '%$searchValue%'";
		}
		
		if( !empty($name) ){
			$where_str .=" and name like '%$name%'";
		}
		if( !empty($tel) ){
			$where_str .=" and tel like '%$tel%'";
		}	
		if( !empty($linkman) ){
			$where_str .=" and linkman like '%$linkman%'";
		}	
		if( !empty($ecotype) ){
			$where_str .=" and ecotype ='$ecotype'";
		}	
		if( !empty($trade) ){
			$where_str .=" and trade ='$trade'";
		}	
		if( !empty($fax) ){
			$where_str .=" and fax like '%$fax%'";
		}	
		if( !empty($email) ){
			$where_str .=" and email like '%$email%'";
		}	
		if( !empty($address) ){
			$where_str .=" and address like '%$address%'";
		}	
		if( !empty($bdt) ){
			$where_str .=" and adt >= '$bdt'";
		}			
		if( !empty($edt) ){
			$where_str .=" and adt < '$edt'";
		}		
		//**************************************************************************
		$countSql    = "select id from cst_customer where $where_str";
		$totalCount  = $this->C($this->cacheDir)->countRecords($countSql);	//计算记录数
		$beginRecord = ($currentPage-1)*$numPerPage;
		$sql		 = "select * from cst_customer  where $where_str order by id desc limit $beginRecord,$numPerPage";	
		$list		 = $this->C($this->cacheDir)->findAll($sql);
		$assignArray = array('list'=>$list,
							"trade"=>$trade,"trade_name"=>$trade_name,"bdt"=>$bdt,"edt"=>$edt,
							"numPerPage"=>$numPerPage,"totalCount"=>$totalCount,"currentPage"=>$currentPage);	
		return $assignArray;
		
	}
	
	public function customer_show(){
			$assArr  		= $this->customer();
			$assArr["dict"] = $this->L("CstDict")->cst_dict_arr();
			$smarty  		= $this->setSmarty();
			$smarty->assign($assArr);
			$smarty->display('customer/customer_show.html');	
	}	
		
	//查看客户详细
	public function customer_show_one(){
			$cusID	    = $this->_REQUEST("cusID");
			$sql 		= "select * from cst_customer where id='$cusID'";
			$one 		= $this->C($this->cacheDir)->findOne($sql);	
			$linkman	= $this->L('CstLinkman')->cst_linkman();
			$smarty  	= $this->setSmarty();
			$dict	    = $this->L("CstDict")->cst_dict_arr();
			$rtnArr		= array("one"=>$one,"dict"=>$dict,"linkman"=>$linkman);
			$smarty->assign($rtnArr);
			$smarty->display('customer/customer_show_one.html');		
	}
	
	public function lookup_search(){
			$assArr  		= $this->customer();
			$assArr["dict"] = $this->L("CstDict")->cst_dict_arr();
			$smarty  		= $this->setSmarty();
			$smarty->assign($assArr);
			$smarty->display('customer/lookup_search.html');	
	}	
	
	//高级搜索
	public function advanced_search(){
		$smarty  = $this->setSmarty();
		$smarty->display('customer/advanced_search.html');	
	}	
	
	public function customer_add(){
		if(empty($_POST)){
			$smarty = $this->setSmarty();
			$smarty->display('customer/customer_add.html');	
		}else{
			$dt	     = date("Y-m-d H:i:s",time());
			$source  = $this->_REQUEST("source_id");
			$ecotype = $this->_REQUEST("ecotype_id");
			$trade   = $this->_REQUEST("trade_id");
			$level   = $this->_REQUEST("level_id");
			
			$sql     = "insert into cst_customer(name,source,level,ecotype,trade,linkman,mobile,
									website,tel,fax,email,
									zipcode,address,intro,adt,create_userID) 
								values('$_POST[name]','$source','$level','$ecotype','$trade','$_POST[linkman]','$_POST[mobile]',
								'$_POST[website]','$_POST[tel]',
								'$_POST[fax]','$_POST[email]','$_POST[zipcode]','$_POST[address]','$_POST[intro]','$dt','".SYS_USER_ID."');";
								
			$cusID=$this->C($this->cacheDir)->update($sql);	
			
			$sql     = "insert into cst_linkman(name,cusID,mobile,adt,create_userID) 
								values('$_POST[linkman]','$cusID','$_POST[mobile]','$dt','".SYS_USER_ID."');";	
			
			$this->C($this->cacheDir)->update($sql);
			$this->L("Common")->ajax_json_success("操作成功",'2',"/Customer/customer_show/");		
		}
	}		
	
	
	public function customer_modify(){
		$id	  	 = $this->_REQUEST("id");		
		if(empty($_POST)){
			$sql 		= "select * from cst_customer where id='$id'";
			$one 		= $this->C($this->cacheDir)->findOne($sql);	
			$smarty  	= $this->setSmarty();
			$dict	    = $this->L("CstDict")->cst_dict_arr();
			$smarty->assign(array("one"=>$one,"dict"=>$dict));
			$smarty->display('customer/customer_modify.html');	
		}else{//更新保存数据
			$source  = $this->_REQUEST("source_id");
			$ecotype = $this->_REQUEST("ecotype_id");
			$trade   = $this->_REQUEST("trade_id");
			$level   = $this->_REQUEST("level_id");
			$sql= "update cst_customer set 
							name='$_POST[name]',
							source='$source',level='$level',ecotype='$ecotype',trade='$trade',
							website='$_POST[website]',tel='$_POST[tel]',fax='$_POST[fax]',email='$_POST[email]',
							zipcode='$_POST[zipcode]',address='$_POST[address]',intro='$_POST[intro]'
			 		where id='$id'";
			$this->C($this->cacheDir)->update($sql);	
			$this->L("Common")->ajax_json_success("操作成功",'2',"/Customer/customer_show/");			
		}
	}
	
		
	public function customer_del(){
		$id	  = $this->_REQUEST("ids");
		$sql  = "delete from cst_customer where id in ($id)";
		$this->C($this->cacheDir)->update($sql);	
		$this->L("Common")->ajax_json_success("操作成功","2","/Customer/customer_show/");	
	}	
	
	
	//返回客户
	public function customer_arr(){
		$rtArr  =array();
		$sql	="select id,name from cst_customer";
		$list	=$this->C($this->cacheDir)->findAll($sql);
		if(is_array($list)){
			foreach($list as $key=>$row){
				$rtArr[$row["id"]]=$row["name"];
			}
		}
		return $rtArr;
	}		
	
	//返回客户名称
	public function customer_get_name($id){
		if(empty($id)) $id=0;
		$sql  ="select id,name from cst_customer where id in ($id)";	
		$list =$this->C($this->cacheDir)->findAll($sql);
		$str  ="";
		if(is_array($list)){
			foreach($list as $row){
				$str .= "|-".$row["name"]."&nbsp;";
			}
		}
		return $str;
	}		
	

	
	public function customer_select_business(){
		$order	=$this->L("SalOrder")->sal_order_select();
		$contr	=$this->L("SalContract")->sal_contract_select();
//		print_r($order);
//		print_r($contr);
/*            [id] => 4
            [name] => 100
            [money] => 1000
            [bill_money] => 0
            [zero_money] => 0
            [back_money] => 0
            [now_back_money] => 1000*/
		$rtnArr	=array();
		$key	=0;
		foreach($order as $row){
			$rtnArr[$key]			=$row;
			$rtnArr[$key]["type"]	="sal_order";
			$key++;
		}
		foreach($contr as $row){
			$rtnArr[$key]=$row;
			$rtnArr[$key]["type"]	="sal_contract";
			$key++;
		}
		//print_r($rtnArr);
		echo json_encode($rtnArr);
		
	}
		
}//
?>