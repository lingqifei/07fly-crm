<?php /* Smarty version 2.6.26, created on 2016-06-13 15:21:02
         compiled from upload/upload.html */ ?>

<h2 class="contentTitle">请选择需要上传的文件</h2>

<form action="<?php echo @ACT; ?>
/Upload/upload_img_save/" method="post" enctype="multipart/form-data" class="pageForm required-validate"  onsubmit="return iframeCallback(this, $.bringBack)">

<div class="pageContent">
	<div class="pageFormContent" layoutH="97">
		<dl>
			<dt>附件：</dt><dd><input type="file" name="filename" class="required" size="30" /></dd>
		</dl>
       
	</div>
	<div class="formBar">
		<ul>
			<li><div class="buttonActive"><div class="buttonContent"><button type="submit">上传</button></div></div></li>
			<li><div class="button"><div class="buttonContent"><button class="close" type="button">关闭</button></div></div></li>
		</ul>
	</div>
</div>
</form>