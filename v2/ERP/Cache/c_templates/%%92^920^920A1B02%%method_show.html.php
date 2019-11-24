<?php /* Smarty version 2.6.26, created on 2019-09-29 18:16:47
         compiled from sysmanage/method_show.html */ ?>
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
          <h5><i class="fa fa-home"></i>栏目分类</h5>
        </div>
        <div class="ibox-content">
          <div class="row">
            <div class="col-sm-3">
              <div id="treeview12" class="test"></div>
            </div>
            <div class="col-sm-9">
              <div class="ibox-content">
                <div class="row">
                  <form id="pagerForm" method="post" class="form-inline">
                    <input type="hidden" name="menu_id" id="menu_id" value="">
                    <div class="col-sm-2"> <a href="javascript:void(0)" id="add_menu_id" class="btn btn-info single_operation" data-act="add" data-id="">添加</a> </div>
                    <div class="col-sm-10 m-b-xs text-right">
                      <div class="input-group pd-b-5">
                        <input type="text" name="keywords" placeholder="输入方法名称关键字搜索" class="form-control">
                      </div>
                      <div class="input-group"> <span class="input-group-btn">
                        <button type="button" class="btn btn-primary ajaxSearchForm"><i class="fa fa-search"></i> 搜索</button>
                        </span> </div>
                    </div>
                  </form>
                </div>
                <table class="table  table-hover sorttable 07fly-table" width="100%">
                  <thead>
                    <tr>
                      <th width="80"><span>方法名称</span></th>
                      <th width="200"><span>方法参数</span></th>
                      <th width="80"><span>排序</span></th>
                      <th width="80"><span>启用</span></th>
                      <th width="80"><span>操作</span></th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot class="ibox-content">
                    <tr>
                      <td colspan="7" align="center"></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
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
		<td><input type="text" name="name" class="form-control modifyName" value="<%=list[i]['name']%>" data-id="<%=list[i]['id']%>"></td>
		<td><input type="text" name="value" class="form-control modifyValue" value="<%=list[i]['value']%>" data-id="<%=list[i]['id']%>"></td>
		<td><input type="text" name="sort" class="form-control modifySort" value="<%=list[i]['sort']%>" data-id="<%=list[i]['id']%>"></td>
     <td>
	 	<div class="onoffswitch">
       		<input type="checkbox" class="onoffswitch-checkbox" data-id="<%=list[i]['id']%>"  id="switch_<%=list[i]['id']%>"  <%if(list[i]['visible']==1){%> checked  <%}%>  >
	   		<label class="onoffswitch-label" for="switch_<%=list[i]['id']%>"> 
	   			<span class="onoffswitch-inner"></span> 
				 <span class="onoffswitch-switch"></span> 
			 </label>
      </div>
		</td>
		<td><a href="javascript:void(0)" class="single_operation" data-id="<%=list[i]['id']%>" data-act="del">删除</a></td>
	</tr>
<% } %>
</script>
<script src="<?php echo @APP; ?>
/View/template/js/plugins/treeview/bootstrap-treeview.js"></script>
<script src="<?php echo @APP; ?>
/View/template/js/content.js?v=1.0.0"></script>
<script type="text/javascript">
var ajaxUrl='<?php echo @ACT; ?>
/sysmanage/Method/method_json/';
$(document).ready(function () {
	turnPage(1);//页面加载时初始化分页
	$('.chosen-select').chosen({search_contains: true});
	$('.chosen-select').chosen().change(function(){
		ajaxSearchFormData = $("form").serialize();
		turnPage(1);
	});
	//商品数据加载
	$.ajax({
		type: "POST",
		url: "<?php echo @ACT; ?>
/sysmanage/Menu/menu_left_json/",
		data:'',
		dataType:"json",
		success: function(jsondata){
			console.log(jsondata);
		   $('#treeview12').treeview({
			   data: jsondata, 
			   levels:1,
				onNodeSelected: function (event, node) {
					 // alert(node.text);
					   $("#menu_id").val(node.tags);
					   $("#add_menu_id").attr('data-id',node.tags);
						ajaxSearchFormData = $("form").serialize();
						turnPage(1);
				 }
			});
		}
	});

	$("body").on("click", ".onoffswitch-checkbox", function() {
		id		 =$(this).attr("data-id")
		ischecked=$(this).prop('checked');
		if(ischecked){
		   visible='1';
		}else{
			visible='0';
		}
		$.ajax({
			type: "POST",
			url: "<?php echo @ACT; ?>
/sysmanage/Method/method_modify_visible/",
			data:{"visible":visible,"id":id},
			dataType:"json",
			success: function(data){
				if(data.rtnstatus=='success'){
					layer.msg('操作成功', {icon: 1});   
				}
				console.log(data.rtnstatus);
			}
		});
	});
	//更改名称
	$("body").on("blur", ".modifyName", function() {
		id =$(this).attr("data-id");
		name =$(this).val();
		$.ajax({
			type: "POST",
			url: "<?php echo @ACT; ?>
/sysmanage/Method/method_modify_name/",
			data:{"name":name,"id":id},
			dataType:"json",
			success: function(data){
				if(data.statusCode=='200'){
					layer.msg('操作成功', {icon: 1});   
				}
				console.log(data.rtnstatus);
			}
		});
	});
	//更改排序
	$("body").on("blur", ".modifySort", function() {
		id =$(this).attr("data-id");
		sort =$(this).val();
		$.ajax({
			type: "POST",
			url: "<?php echo @ACT; ?>
/sysmanage/Method/method_modify_sort/",
			data:{"sort":sort,"id":id},
			dataType:"json",
			success: function(data){
				if(data.statusCode=='200'){
					layer.msg('操作成功', {icon: 1});   
				}
				console.log(data.rtnstatus);
			}
		});
	});	
	//更改参数值
	$("body").on("blur", ".modifyValue", function() {
		id =$(this).attr("data-id");
		value =$(this).val();
		$.ajax({
			type: "POST",
			url: "<?php echo @ACT; ?>
/sysmanage/Method/method_modify_value/",
			data:{"value":value,"id":id},
			dataType:"json",
			success: function(data){
				if(data.statusCode=='200'){
					layer.msg('操作成功', {icon: 1});   
				}
				console.log(data.rtnstatus);
			}
		});
	});
	
	$("body").on("click", ".single_operation", function() {
		menu_id =$(this).attr("data-id");
		single_act =$(this).attr("data-act");
		if(single_act=="add"){
			act_url="<?php echo @ACT; ?>
/sysmanage/Method/method_add/";
			layer.open({
				type: 2,
				title: '添加菜单',
				shadeClose: true,
				fixed: false, //不固定
				area: ['800px', '500px'],
				content: '<?php echo @ACT; ?>
/sysmanage/Method/method_add/menu_id/'+menu_id+'/',
				end:function(){
					turnPage(1);
				}
			});			
			return false;	
		}else if(single_act=="del"){
			act_url="<?php echo @ACT; ?>
/sysmanage/Method/method_del/";
			$.ajax({
				type: "POST",
				url: act_url,
				data:{"id":menu_id},
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