<?php /* Smarty version 2.6.26, created on 2017-05-22 08:57:19
         compiled from email/email_from_add.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo @ACT; ?>
/EmailSend/email_from_add/" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);">
    <div class="pageFormContent" layoutH="56">
   
      <p>
        <label>分组：</label>
        <?php echo $this->_tpl_vars['groupoption']; ?>

        <span class="info">&nbsp;邮件地址分组选择</span> 
      </p>
      <p>
        <label>帐号：</label>
        <input type="text"  name="account" class="required"  value="" alt="请输名称"/>
        <span class="info">&nbsp;邮件地址</span> 
      </p>
      <p>
        <label>密码：</label>
        <input type="text" value="" name="password" class="required">
        <span class="info">&nbsp;邮件密码</span> </p>
      <p>
        <label>smtp服务器：</label>
        <input type="text" value="" name="server" class="required">
        <span class="info">&nbsp;邮件服务器 </span> </p>
      <p>
        <label>smtp 端口：</label>
        <input type="text" value="" name="port" class="required">
        <span class="info">&nbsp;邮件服务器端口</span></p>
      <p>
        <label>备注：</label>
        <input type="text" value="" name="intro" class="">
        <span class="info">&nbsp;备注说明</span> </p>
        <p> <span class="info">说明：地址池的范围不介意设置太大</span></p>
    </div>
    <div class="formBar">
      <ul>
        <!--<li><a class="buttonActive" href="javascript:;"><span>保存</span></a></li>-->
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit">保存</button>
            </div>
          </div>
        </li>
        <li>
          <div class="button">
            <div class="buttonContent">
              <button type="button" class="close">取消</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </form>
</div>