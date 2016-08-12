<?php /* Smarty version 2.6.26, created on 2016-07-22 15:15:31
         compiled from customer/customer_show.html */ ?>

<div class="pageHeader">
  <form onsubmit="return navTabSearch(this);" action="<?php echo @ACT; ?>
/Customer/customer_show/" method="post">
    <div class="searchBar">
      <table class="searchContent">
        <tr>
          <td><select class="combox" name="searchKeyword">
              <option value="name">客户名称</option>
              <option value="tel">客户电话</option>
              <option value="zipcode">邮编</option>
              <option value="address">联系地址</option>
              <option value="intro">简介</option>
            </select>
          </td>
          <td><input type="text" name="searchValue" />
          </td>
          <td> 建档日期：
            <input type="text" class="date" name="bdt" size="15" readonly="true" />
            -
            <input type="text" class="date" name="edt" size="15" readonly="true" />
          </td>
          <td><ul>
              <li>
                <div class="buttonActive">
                  <div class="buttonContent">
                    <button type="submit">检索</button>
                  </div>
                </div>
              </li>
            </ul></td>
          <td><ul>
              <li><a class="button" href="<?php echo @ACT; ?>
/Customer/advanced_search/" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li>
            </ul></td>
        </tr>
      </table>
	  <div class="subBar"></div>
    </div>
  </form>
</div>
<div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
      <li><a class="add" href="<?php echo @ACT; ?>
/Customer/customer_add/" target="navTab"><span>添加</span></a></li>
      <li><a class="delete" href="<?php echo @ACT; ?>
/Customer/customer_del/" postType="string" title="确实要删除这些记录吗?" target="selectedTodo" rel="ids" ><span>批量删除</span></a></li>
      <li><a class="edit" href="<?php echo @ACT; ?>
/Customer/customer_modify/id/{sid_user}/" target="navTab"><span>修改</span></a></li>
      <li class="line">line</li>
      <li><a class="icon" href="#" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出</span></a></li>
      <li class="line">line</li>
      <li><a class="total" href="#" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>统计</span></a></li>
       <li><a class="email" href="#" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>邮件</span></a></li>
       <li><a class="export" href="#" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出</span></a></li>
       <li><a class="import" href="#" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导入</span></a></li>  <li><a class="total" href="#" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>统计</span></a></li>
    </ul>
  </div>
  <table class="table" width="100%" layoutH="138">
    <thead>
      <tr>
        <th width="22"><input type="checkbox" group="ids" class="checkboxCtrl"></th>
        <th width="120">客户名称</th>
        <th width="120">电话</th>
        <th width="120">传真</th>
        <th width="120">邮箱</th>
        <th width="80">等级</th>
        <th width="80">来源</th>
        <th width="100">经济类型</th>
        <th width="100">所属行业</th>
        <th width="150">地址</th>
        <th width="100">操作</th>
      </tr>
    </thead>
    <tbody>
    
    <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
    <tr target="sid_user" rel="<?php echo $this->_tpl_vars['v']['id']; ?>
">
      <td><input name="ids" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" type="checkbox"></td>
      <td><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
      <td><?php echo $this->_tpl_vars['v']['tel']; ?>
</td>
      <td><?php echo $this->_tpl_vars['v']['fax']; ?>
</td>
      <td><?php echo $this->_tpl_vars['v']['email']; ?>
</td>
      <td><?php echo $this->_tpl_vars['dict'][$this->_tpl_vars['v']['level']]; ?>
</td>
      <td><?php echo $this->_tpl_vars['dict'][$this->_tpl_vars['v']['source']]; ?>
</td>
      <td><?php echo $this->_tpl_vars['dict'][$this->_tpl_vars['v']['ecotype']]; ?>
</td>
      <td><?php echo $this->_tpl_vars['dict'][$this->_tpl_vars['v']['trade']]; ?>
</td>
      <td><?php echo $this->_tpl_vars['v']['address']; ?>
</td>
      <td>
      <a title="客户联系人" target="navTab" href="<?php echo @ACT; ?>
/CstLinkman/cst_linkman_show/cusID/<?php echo $this->_tpl_vars['v']['id']; ?>
/" class="btnAdd_tr">客户联系人</a> 
      <a title="客户报价管理" target="navTab" href="<?php echo @ACT; ?>
/CstQuoted/cst_quoted_show/cusID/<?php echo $this->_tpl_vars['v']['id']; ?>
/" class="btnInfo">客户报价管理</a> 
      
      <a target="dialog"  href="<?php echo @ACT; ?>
/Customer/customer_show_one/cusID/<?php echo $this->_tpl_vars['v']['id']; ?>
/" class="btnView" rel="dlg_page1" title="[自定义标题]" width="800" height="480">查看</a>
      </td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
    </tbody>
    
  </table>
  <div class="panelBar">
    <form id="pagerForm" method="post" action="<?php echo @ACT; ?>
/Customer/customer_show/">
      <input type="hidden" name="pageNum" value="1" />
      <input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['numPerPage']; ?>
" />
      <input type="hidden" name="orderField" value="${param.orderField}" />
    </form>
    <div class="pages"> <span>显示</span>
      <select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
        <option value="20">20</option>
        <option value="50">50</option>
        <option value="100">100</option>
        <option value="200">200</option>
      </select>
      <span>条，共<?php echo $this->_tpl_vars['totalCount']; ?>
条</span> </div>
    <div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['totalCount']; ?>
" numPerPage="<?php echo $this->_tpl_vars['numPerPage']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['currentPage']; ?>
"></div>
  </div>
</div>