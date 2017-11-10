<?php /* Smarty version 2.6.26, created on 2017-11-02 16:05:02
         compiled from cst_linkman/cst_linkman_show.html */ ?>
<div class="pageHeader">
  <form onsubmit="return navTabSearch(this);" action="<?php echo @ACT; ?>
/CstLinkman/cst_linkman_show/" method="post">
    <div class="searchBar">
      <table class="searchContent">
        <tr>
          <td><select class="combox" name="searchKeyword">
              <option value="name">联系人姓名</option>
              <option value="postion">职务</option>
              <option value="mobile">电话</option>
              <option value="zipcode">邮编</option>
              <option value="address">联系地址</option>
              <option value="intro">介绍</option>
            </select></td>
          <td><input type="text" name="searchValue" /></td>
          <td> 建档日期：
            <input type="text" class="date" readonly="true" /></td>
          <td><ul>
              <li>
                <div class="buttonActive">
                  <div class="buttonContent">
                    <button type="submit">检索</button>
                  </div>
                </div>
              </li>
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
/CstLinkman/cst_linkman_add/cusID/<?php echo $this->_tpl_vars['cusID']; ?>
/" target="dialog" rel="cst_linkman_add" width="850" height="450" title="添加<?php echo $this->_tpl_vars['cus_name']; ?>
联系人"><span>添加</span></a></li>
      <li class="line">line</li>
      <li><a class="delete" href="<?php echo @ACT; ?>
/CstLinkman/cst_linkman_del/" postType="string" title="确实要删除选择这些记录吗?" target="selectedTodo" rel="ids" ><span>删除</span></a></li>
      <li class="line">line</li>
      <li><a class="edit" href="<?php echo @ACT; ?>
/CstLinkman/cst_linkman_modify/id/{sid_user}/" target="dialog" rel="cst_linkman_modify" width="850" height="450"><span>修改</span></a></li>
      <li class="line">line</li>
    </ul>
  </div>
  <table class="table" width="100%" layoutH="138">
    <thead>
      <tr>
        <th width="22"><input type="checkbox" group="ids" class="checkboxCtrl"></th>
        <th width="220">客户</th>
        <th width="120">姓名</th>
        <th width="120">性别</th>
        <th width="120">职务</th>
        <th width="120">手机</th>
        <th width="120">座机</th>
        <th width="120">QQ</th>
        <th width="150">邮箱</th>
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
      <td><a target="dialog"  href="<?php echo @ACT; ?>
/Customer/customer_show_one/cusID/<?php echo $this->_tpl_vars['v']['cusID']; ?>
/" rel="customer_show_one_<?php echo $this->_tpl_vars['v']['id']; ?>
" title="<?php echo $this->_tpl_vars['v']['cst_name']; ?>
" width="880" height="480"><?php echo $this->_tpl_vars['v']['cst_name']; ?>
</a></td>
      <td><?php echo $this->_tpl_vars['v']['name']; ?>
</a></td>
      <td><?php if ($this->_tpl_vars['v']['gender'] == 1): ?> 男 <?php else: ?> 女 <?php endif; ?> </td>
      <td><?php echo $this->_tpl_vars['v']['postion']; ?>
</td>
      <td><?php echo $this->_tpl_vars['v']['mobile']; ?>
</td>
      <td><?php echo $this->_tpl_vars['v']['tel']; ?>
</td>
      <td><?php echo $this->_tpl_vars['v']['qicq']; ?>
</td>
      <td><?php echo $this->_tpl_vars['v']['email']; ?>
</td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
      </tbody>
    
  </table>
  <div class="panelBar">
    <form id="pagerForm" method="post" action="<?php echo @ACT; ?>
/CstLinkman/cst_linkman_show/">
      <input type="hidden" name="pageNum" value="1" />
      <input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['numPerPage']; ?>
" />
      <input type="hidden" name="orderField" value="${param.orderField}" />
    </form>
    <div class="pages"> <span>显示</span>
      <select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
      <option value="20" <?php if ($this->_tpl_vars['numPerPage'] == '20'): ?> selected="selected" <?php endif; ?>>20</option>
      <option value="50" <?php if ($this->_tpl_vars['numPerPage'] == '50'): ?> selected="selected" <?php endif; ?>>50</option>
      <option value="100" <?php if ($this->_tpl_vars['numPerPage'] == '100'): ?> selected="selected" <?php endif; ?>>100</option>
      <option value="200" <?php if ($this->_tpl_vars['numPerPage'] == '200'): ?> selected="selected" <?php endif; ?>>200</option>
      <option value="500" <?php if ($this->_tpl_vars['numPerPage'] == '500'): ?> selected="selected" <?php endif; ?>>500</option>
      </select>
      <span>条，共<?php echo $this->_tpl_vars['totalCount']; ?>
条</span> </div>
    <div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['totalCount']; ?>
" numPerPage="<?php echo $this->_tpl_vars['numPerPage']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['currentPage']; ?>
"></div>
  </div>
</div>