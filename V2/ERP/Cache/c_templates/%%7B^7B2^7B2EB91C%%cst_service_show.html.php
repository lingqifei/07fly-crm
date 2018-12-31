<?php /* Smarty version 2.6.26, created on 2018-12-31 16:34:15
         compiled from crm/cst_service_show.html */ ?>
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
          <h5><i class="fa fa-home"></i> 服务记录列表</h5>
          <div class="ibox-tools"><a href="?">
            <button type="button" class="btn btn-xs btn-danger"> <i class="fa fa-refresh"></i>刷新</button>
            </a> </div>
        </div>
        <div class="ibox-content table-responsive">
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
                  <input type="text" name="content" placeholder="搜索内容" class="form-control">
				  		</div>
                <div class="btn-group">
                  <button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></button>
                  <div class="dropdown-menu">
                    <div class="ibox-content">
                      <div class="form-group">
                        <label>客户名称</label>
                        <input type="text" name="customer_name" placeholder="搜索客户名称" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>通信地址</label>
                        <input type="text" name="address" placeholder="搜索通信地址" class="form-control">
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary btn-xs btn-block ajaxSearchForm"><i class="fa fa-search"></i> 搜索</button>
                      </div>
                    </div>
                  </div>
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
                <th width="150" orderField="by_customer" class="sort-filed"><span>客户名称</span></th>
				  		<th width="120"><span>服务类型</span></th>
				  		<th width="120"><span>服务方式</span></th>
                <th width="120" orderField="by_service" class="sort-filed"><span>服务时间</span></th>
                <th width="100"><span>花费时间</span></th>
                <th><span>服务内容</span></th>
                <th width="100">操作</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
			<table class="table 07fly-table"><tfoot class="ibox-content"><tr><td align="center" class="pagestring"></td></tr></tfoot></table>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script id="tableListTpl" type="text/html">
<% for(var i=0;i<list.length;i++) { %>
	<tr>
		<td><input name="service_id" class="checkboxCtrlId" value="<%=list[i]['service_id']%>" type="checkbox"></td>
		<td><%=list[i]['customer_name']%></td>
		<td><%=list[i]['services_name']%></td>
		<td><%=list[i]['servicesmodel_name']%></td>
		<td><%=list[i]['service_time']%></td>
		<td><%=list[i]['tlen']%></td>
		<td class="overflow-td"><%=list[i]['content']%></td>	
		<td width='10'>
			<div class="btn-group">
				<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">操作 <span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li class="divider"></li>
					<li><a href="javascript:void(0)" class="single_operation" data-id="<%=list[i]['service_id']%>" data-act="modify">修改</a></li>
					<li><a href="javascript:void(0)" class="single_operation" data-id="<%=list[i]['service_id']%>" data-act="del">删除</a></li>
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
/index.php/crm/CstService/cst_service_json/';
$(document).ready(function () {
	 
	turnPage(1);//页面加载时初始化分页
	
	$("body").on("click", ".batch_operation", function() {
		batch_act =$(this).attr("data-act")
		var chk_value =[]; 
    	$("tbody input[class='checkboxCtrlId']:checked").each(function(){ 
        chk_value.push($(this).val()); 
		}); 
		service_id_txt=chk_value.join(",");
		if(batch_act=="recommend"){
		   act_url="<?php echo @ACT; ?>
/crm/CstService/cst_service_modify_recommend/";
		}else if(batch_act=="del"){
			act_url="<?php echo @ACT; ?>
/crm/CstService/cst_service_del/";
			$.ajax({
				type: "POST",
				url: act_url,
				data:{"service_id":service_id_txt},
				dataType:"json",
				success: function(data){
					if(data.statusCode=='200'){
						layer.msg('操作成功', {icon: 1}); 
						turnPage(1);//页面加载时初始化分页
					}
				}
			});
		}
    //alert(chk_value.length==0 ?'你还没有选择任何内容！':chk_value); 

	});
	
	$("body").on("click", ".single_operation", function() {
		service_id =$(this).attr("data-id");
		single_act =$(this).attr("data-act")
		if(single_act=="add"){
			layer.open({
				type: 2,
				title: '添加服务记录',
				shadeClose: true,
				fixed: false, //不固定
				area: ['90%', '90%'],
				content: '<?php echo @ACT; ?>
/index.php/crm/CstService/cst_service_add/',
				end: function () {
					turnPage(1);//页面加载时初始化分页
				}
			});			
			return false;		
		}else if(single_act=="modify"){
			layer.open({
				type: 2,
				title: '修改服务记录',
				shadeClose: true,
				fixed: false, //不固定
				area: ['90%', '90%'],
				content: '<?php echo @ACT; ?>
/index.php/crm/CstService/cst_service_modify/service_id/'+service_id+'/',
				end: function () {
					turnPage(1);//页面加载时初始化分页
				}
			});			
			return false;	
		}else if(single_act=="del"){
			act_url="<?php echo @ACT; ?>
/index.php/crm/CstService/cst_service_del/";
			$.ajax({
				type: "POST",
				url: act_url,
				data:{"service_id":service_id},
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