<?php /* Smarty version 2.6.26, created on 2019-01-02 14:27:36
         compiled from sysmanage/user_show.html */ ?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-sm-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5><i class="fa fa-home"></i>员工管理</h5>
					<div class="ibox-tools"> <a href="?" class="btn btn-xs btn-danger"><i class="fa fa-refresh"></i>刷新</a> </div>
				</div>
				<div class="ibox-content">
					<div class="row">
            <form id="pagerForm" method="post" class="form-inline">
              <div class="col-sm-3 m-b-xs"> 
				  		<a class="btn btn-info single_operation" data-act="add" href="javascript:void(0)"><i class="fa fa-plus"></i>添加</a>
                <div class="btn-group">
                  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">批量操作 <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="javascript:void(0)" class="batch_operation" data-act="online">批量发短信</a></li>
                    <li><a href="javascript:void(0)" class="batch_operation" data-act="offline">批量发邮件</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0)" class="batch_operation" data-act="del">批量删除</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-9 m-b-xs text-right">
				  		<div class="input-group pd-b-5">
                  <input type="text" name="keywords" placeholder="输入主题关键字搜索" class="form-control">
				  		</div>
                <div class="input-group">
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-primary ajaxSearchForm"><i class="fa fa-search"></i> 搜索</button>
                  </span> </div>
              </div>
            </form>
          </div>
					<table class="table table-hover sorttable 07fly-table" width="100%">
						<thead>
							<tr>
								<th width="22"><input type="checkbox" group="ids" class="checkboxCtrl"></th>
								<th width="120">帐号</th>
								<th width="80">姓名</th>
								<th width="60">性别</th>
								<th width="120">手机</th>
								<th width="120">QQ</th>
								<th width="150">邮箱</th>
								<th width="120">部门</th>
								<th width="120">职务</th>
								<th width="120">角色</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
						<tfoot class="ibox-content">
							<tr>
								<td colspan="11" align="center"></td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script id="tableListTpl" type="text/html">
<% for(var i=0;i<list.length;i++) { %>
	<tr>
		<td><input name="user_id" class="checkboxCtrlId" value="<%=list[i]['id']%>" type="checkbox"></td>
		<td><%=list[i]['account']%></td>
		<td><%=list[i]['name']%></td>
		<td>
			<% if(list[i]['gender']==1){%>
				男
			<%}else{%>
				女
			<%}%>			
		</td>
		<td><%=list[i]['mobile']%></td>
		<td><%=list[i]['qicq']%></td>
		<td><%=list[i]['email']%></td>
		<td><%=list[i]['dept_name']%></td>
		<td><%=list[i]['position_name']%></td>
		<td><%=list[i]['role_name']%></td>
		<td>
			<div class="btn-group">
				<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">操作 <span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li class="divider"></li>
					<li><a href="javascript:void(0)" class="single_operation" data-id="<%=list[i]['id']%>" data-act="modify">修改</a></li>
					<li><a href="javascript:void(0)" class="single_operation" data-id="<%=list[i]['id']%>" data-act="del">删除</a></li>
				</ul>
			</div>
		</td>
	</tr>
<% } %>
</script> 
<script src="<?php echo @APP; ?>
/View/template/js/content.js?v=1.0.0"></script>
<script type="text/javascript">
var ajaxUrl='<?php echo @ACT; ?>
/sysmanage/User/user_show_json/';
$(document).ready(function () {
	turnPage(1);//页面加载时初始化分页

	$("body").on("click", ".batch_operation", function() {
		batch_act =$(this).attr("data-act")
		var chk_value =[]; 
    	$("tbody input[class='checkboxCtrlId']:checked").each(function(){ 
        chk_value.push($(this).val()); 
		}); 
		user_id_txt=chk_value.join(",");
		if(batch_act=="del"){
			act_url="<?php echo @ACT; ?>
/index.php/sysmanage/User/user_del/";
			$.ajax({
				type: "POST",
				url: act_url,
				data:{"user_id":user_id_txt},
				dataType:"json",
				success: function(data){
					if(data.statusCode=='200'){
						layer.msg('操作成功', {icon: 1}); 
						turnPage(1);
					}
				},
				complete: function () {//完成响应
				}
			});
		}
    //alert(chk_value.length==0 ?'你还没有选择任何内容！':chk_value); 

	});
	
	$("body").on("click", ".single_operation", function() {
		user_id =$(this).attr("data-id");
		single_act =$(this).attr("data-act")
		if(single_act=="add"){
			layer.open({
				type: 2,
				title: '添加用户',
				shadeClose: true,
				fixed: false, //不固定
				area: ['90%', '90%'],
				content: '<?php echo @ACT; ?>
/index.php/sysmanage/User/user_add/',
				end: function () {
					turnPage(1);
				}
			});			
			return false;		
		}else if(single_act=="modify"){
			layer.open({
				type: 2,
				title: '修改用户',
				shadeClose: true,
				fixed: false, //不固定
				area: ['90%', '90%'],
				content: '<?php echo @ACT; ?>
/index.php/sysmanage/User/user_modify/user_id/'+user_id+'/',
				end: function () {
					turnPage(1);
				}
			});			
			return false;	
		}else if(single_act=="del"){
			act_url="<?php echo @ACT; ?>
/index.php/sysmanage/User/user_del/";
			$.ajax({
				type: "POST",
				url: act_url,
				data:{"user_id":user_id},
				dataType:"json",
				success: function(data){
					if(data.statusCode=='200'){
						layer.msg('操作成功', {icon: 1}); 
						turnPage(1);
					}
				}
			});
		}

	});
	
	
});
</script> 
</body>

<!-- Mirrored from www.upfine.cn/theme/hplus/table_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:01 GMT -->
</html>