<?php 
/*
 * 后台登录类
 *
 */	
class Login extends Action{	
	private $cacheDir='';//缓存目录
	private $auth;
	public function __construct() {
		//$this->auth=_instance('Action/sysmanage/Auth');
	}		
	public function login(){
		$config =$this->get_sys_config();
		if(empty($_POST)){
			$smarty = $this->setSmarty();
			$smarty->assign(array('sys'=>$config));
			$smarty->display('sysmanage/login.html');		
		}
	}
	
	//登录验证
	public function login_auth(){
		$account	= $this->_REQUEST("account");
		$password 	= $this->_REQUEST("password");
		
		if(empty($account) || empty($password)){
			$this->L("Common")->ajax_json_error("帐号密码不能为空");	
			exit;
		}
		
		$sql 		= "select * from fly_sys_user where account='$account' and password='$password'";	
		$one 		= $this->C($this->cacheDir)->findOne($sql);
		if(!empty($one)){
			//定义SESSION变量值
			$_SESSION["CRM"]["USER"]["account"]		= $one["account"];
			$_SESSION["CRM"]["USER"]["userID"]		= $one["id"];
			
			//得色这个用户色权限,得到一个三维数组
			$role=_instance('Action/sysmanage/User')->user_get_power($one["id"]);
			
			//权限返回值为一维数组，为系统用户私有数据
			$_SESSION["CRM"]["USER"]["menu"]		= explode(",",implode(",",($role["SYS_MENU"]) ) );
			$_SESSION["CRM"]["USER"]["menustr"]		= implode(",",($role["SYS_MENU"]) );
			
			/*$_SESSION["CRM"]["USER"]["area"]		= explode(",",implode(",",($role["SYS_AREA"]) ) );
			$_SESSION["CRM"]["USER"]["areastr"]		= implode(",",($role["SYS_AREA"]) );*/
			
			$_SESSION["CRM"]["USER"]["method"]		= explode(",",implode(",",($role["SYS_METHOD"]) ));
			$_SESSION["CRM"]["USER"]["methodstr"]	= implode(",",($role["SYS_METHOD"]) );			
			
			//得到下组用户的管理权限
			$_SESSION["CRM"]["USER"]["viewID"]		= implode(",",$this->L("sysmanage/User")->user_get_sub_user($one["id"]));
			
			//这是得到系统权限需要检查的总表
			$_SESSION["CRM"]["NEED"]["menu"] 		= $this->L("sysmanage/Menu")->menu_auth_arr();
			$_SESSION["CRM"]["NEED"]["method"] 		= $this->L("sysmanage/Method")->method_auth_arr();
			

			@define('SYS_USER_ACCOUNT',$_SESSION["CRM"]["USER"]["account"]);//定义
			@define('SYS_USER_ID', $_SESSION["CRM"]["USER"]["userID"]);//定义
			@define('SYS_USER_VIEW',$_SESSION["CRM"]["USER"]["viewID"]);//定义查看下级用户的权限						
			$this->L("Common")->ajax_json_success(ACT."/sysmanage/Index/");
		}else{
			$this->L("Common")->ajax_json_error("帐号密码输入错误");	
		}
	}
	
	//登出
	public function logout(){	
		unset($_SESSION["CRM"]);
		$this->location("",'/sysmanage/Login/login',0);		
	}
	
	public function version(){
		 $this->show('version'); 	 		 
	}

	//得到系统配置参数
	public function get_sys_config(){
		$sql 	= "select * from fly_sys_config;";
		$list	= $this->C($this->cacheDir)->findAll($sql);
		
		if(is_array($list)){
			foreach($list as $key=>$row){
				$assArr[$row["name"]] = $row["value"];
			}
		}
		return $assArr;		
	}

}//end Class

?> 