<?php /* Smarty version 2.6.26, created on 2017-05-22 08:57:15
         compiled from email/email_receiver_group_modify.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo @ACT; ?>
/EmailSend/email_receiver_group_modify/id/<?php echo $this->_tpl_vars['one']['id']; ?>
/" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);">
    <div class="pageFormContent" layoutH="56">
      <p>
        <label>帐号：</label>
        <input type="text"  name="name" class="required"  value="<?php echo $this->_tpl_vars['one']['name']; ?>
" alt="请输名称"/>
        <span class="info">&nbsp;邮件地址</span> 
      </p>
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