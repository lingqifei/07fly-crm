<?php /* Smarty version 2.6.26, created on 2019-09-29 16:02:03
         compiled from erp/chart_sale_show.html */ ?>
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
                    <h5><i class="fa fa-home"></i> 销售汇总列表</h5>
                    <div class="ibox-tools"><a href="?">
                        <button type="button" class="btn btn-xs btn-info"><i class="fa fa-refresh"></i>刷新</button>
                    </a></div>
                </div>
                <div class="ibox-content table-responsive">
                    <div class="row">
                        <form id="pagerForm" method="post" class="form-inline">
                            <div class="col-sm-3 m-b-xs">
                            </div>
                            <div class="col-sm-9 m-b-xs text-right">
                                <div class="form-group text-left  pd-b-5">
                                    <select data-placeholder="回款状态..." name="back_status" class="chosen-select"
                                        style="width: 120px;">
                                        <option value="0">所有回款</option>
                                        <option value="1">未付</option>
                                        <option value="2">部分</option>
                                        <option value="3">已付</option>
                                    </select>
                                </div>
                                <div class="form-group text-left  pd-b-5">
                                    <select data-placeholder="订单状态..." name="status" class="chosen-select"
                                        style="width: 120px;">
                                        <option value="0">所有合同状态</option>
                                        <option value="1">临时合同</option>
                                        <option value="2">执行合同</option>
                                        <option value="3">已完合同</option>
                                        <option value="4">撤消合同</option>
                                    </select>
                                </div>
                                <div class="form-group text-left pd-b-5 fly-form-select">
                                    <select name="date_type" class="form-control">
                                        <option value="1">创建日期</option>
                                        <option value="2">开始日期</option>
                                        <option value="3">结束日期</option>
                                    </select>
                                </div>
                                <div class="input-group pd-b-5">
                                    <input type="text" name="date_b" class="form-control datepicker"
                                        style="width: 100px;">
                                </div>
                                至
                                <div class="input-group pd-b-5">
                                    <input type="text" name="date_e" class="form-control datepicker"
                                        style="width: 100px;">
                                </div>
                                <div class="input-group"> <span class="input-group-btn">
                  <button type="button" class="btn btn-primary ajaxSearchForm"><i class="fa fa-search"></i> 搜索</button>
                  </span></div>
                            </div>
                        </form>
                    </div>
                    <table class="table table-hover sorttable 07fly-table" width="100%">
                        <thead>
                        <tr>
                            <th width="22"><input type="checkbox" group="ids" class="checkboxCtrl"></th>
                            <th width="150"><span>销售人员</span></th>
                            <th width="100" orderField="by_total_money" class="sort-filed"><span>销售总金额</span></th>
                            <th width="100" orderField="by_total_back_money" class="sort-filed"><span>实收总金额</span></th>
                            <th width="100" orderField="by_total_owe_money" class="sort-filed"><span>未收总金额</span></th>
                            <th width="100" orderField="by_total_total_num" class="sort-filed"><span>合同总数</span></th>
                            <th width="100" orderField="by_total_deliver_money" class="sort-filed"><span>交付总金额</span></th>
                            <th width="100" orderField="by_total_zero_money" class="sort-filed"><span>去零总金额</span></th>
                            <th width="100" orderField="by_total_invoice_money" class="sort-filed"><span>开票总金额</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <table class="table 07fly-table">
                        <tfoot class="ibox-content">
                        <tr>
                            <td align="center" class="pagestring"></td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script id="tableListTpl" type="text/html">
    <%
    for(var i=0;i
    <list.length;i++) {
    
    list[i]=null2zero(list[i]);
    %>
    
    <tr>
        <td><input name="record_id" class="checkboxCtrlId" value="<%=list[i]['record_id']%>" type="checkbox"></td>
        <td><%=list[i]['name']%></td>
        <td><%=Number(list[i]['total_money'])%></td>
        <td><%=Number(list[i]['total_back_money'])%></td>
        <td><%=Number(list[i]['total_owe_money'])%></td>
        <td><%=Number(list[i]['total_num'])%></td>
        <td><%=Number(list[i]['total_deliver_money'])%></td>
        <td><%=Number(list[i]['total_zero_money'])%></td>
        <td><%=Number(list[i]['total_invoice_money'])%></td>
    </tr>
    <% } %>
    <tr style="color:#f00;">
        <td></td>
        <td>小计</td>
        <td><%=moneyRs['total_money']%></td>
        <td><%=Number(moneyRs['total_back_money'])%></td>
        <td><%=Number(moneyRs['total_owe_money'])%></td>
        <td><%=Number(moneyRs['total_num'])%></td>
        <td><%=Number(moneyRs['total_deliver_money'])%></td>
        <td><%=Number(moneyRs['total_zero_money'])%></td>
        <td><%=Number(moneyRs['total_invoice_money'])%></td>
    </tr>
</script>
<script src="<?php echo @APP; ?>
/View/template/js/content.js?v=1.0.0"></script>
<script type="text/javascript">
    var ajaxUrl = '<?php echo @ACT; ?>
/erp/ChartSale/chart_sale_json/';
    $(document).ready(function () {
        $('.chosen-select').chosen({search_contains: true});
        $('.chosen-select').chosen().change(function () {
            ajaxSearchFormData = $("form").serialize();
            turnPage(1);
        });
        turnPage(1);//页面加载时初始化分页

        $("body").on("click", ".batch_operation", function () {
            batch_act = $(this).attr("data-act")
            var chk_value = [];
            $("tbody input[class='checkboxCtrlId']:checked").each(function () {
                chk_value.push($(this).val());
            });
            record_id_txt = chk_value.join(",");
            if (batch_act == "delete") {
                act_url = "<?php echo @ACT; ?>
/erp/FinBackRecord/fin_back_record_del/";
            } else if (batch_act == "export") {
                act_url = "<?php echo @ACT; ?>
/erp/FinBackRecord/fin_back_record_del/";
            }
            //alert(chk_value.length==0 ?'你还没有选择任何内容！':chk_value);
            $.ajax({
                type: "POST",
                url: act_url,
                data: {"record_id": record_id_txt},
                dataType: "json",
                success: function (data) {
                    if (data.statusCode == '200') {
                        layer.msg('操作成功', {icon: 1});
                    }
                },
                complete: function () {//完成响应
                    turnPage(1);//页面加载时初始化分页
                }
            });
        });

        $("body").on("click", ".single_operation", function () {
            record_id = $(this).attr("data-id");
            single_act = $(this).attr("data-act")
            if (single_act == "add") {
                layer.open({
                    type: 2,
                    title: '添加回款记录',
                    shadeClose: true,
                    fixed: false, //不固定
                    area: ['90%', '90%'],
                    content: '<?php echo @ACT; ?>
/erp/FinBackRecord/fin_back_record_add/',
                    end: function () {
                        turnPage(1);//页面加载时初始化分页
                    }
                });
                return false;
            } else if (single_act == "delete") {
                act_url = "<?php echo @ACT; ?>
/erp/FinBackRecord/fin_back_record_del/";
                $.ajax({
                    type: "POST",
                    url: act_url,
                    data: {"record_id": record_id},
                    dataType: "json",
                    success: function (data) {
                        if (data.statusCode == '200') {
                            layer.msg('操作成功', {icon: 1});
                        }
                    },
                    complete: function () {//完成响应
                        turnPage(1);//页面加载时初始化分页
                    }
                });
            } else if (single_act == "audit") {
                act_url = "<?php echo @ACT; ?>
/erp/FinBackRecord/fin_back_record_audit/";
                $.ajax({
                    type: "POST",
                    url: act_url,
                    data: {"record_id": record_id},
                    dataType: "json",
                    success: function (data) {
                        if (data.statusCode == '200') {
                            layer.msg('操作成功', {icon: 1});
                        }
                    },
                    complete: function () {//完成响应
                        turnPage(1);//页面加载时初始化分页
                    }
                });
            }
        });


    });
</script>