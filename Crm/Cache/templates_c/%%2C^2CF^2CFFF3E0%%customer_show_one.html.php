<?php /* Smarty version 2.6.26, created on 2016-06-13 17:33:42
         compiled from customer/customer_show_one.html */ ?>
<div class="tabs">
		<div class="tabsHeader">
			<div class="tabsHeaderContent">
				<ul>
					<li><a href="javascript:;"><span>实验室检测</span></a></li>
					<li><a href="javascript:;"><span>病人处方</span></a></li>
					<li><a href="javascript:;"><span>病人服药情况</span></a></li>
					<li><a href="javascript:;"><span>基线调查</span></a></li>
					<li><a href="javascript:;"><span>随访</span></a></li>
				</ul>
			</div>
		</div>
		<div class="tabsContent">
			<div>
	
				<div layoutH="146" style="float:left; display:block; overflow:auto; width:240px; border:solid 1px #CCC; line-height:21px; background:#fff">
				    <ul class="tree treeFolder">
						<li><a href="javascript">实验室检测</a>
							<ul>
								<li><a href="<?php echo @ACT; ?>
/Customer/customer_show/" target="ajax" rel="jbsxBox">尿检</a></li>
								<li><a href="demo/pagination/list1.html" target="ajax" rel="jbsxBox">HIV检测</a></li>
								<li><a href="demo/pagination/list1.html" target="ajax" rel="jbsxBox">HCV检测</a></li>
								<li><a href="demo/pagination/list1.html" target="ajax" rel="jbsxBox">TB检测</a></li>
							</ul>
						</li>
						
				     </ul>
				</div>
				
				<div id="jbsxBox" class="unitBox" style="margin-left:246px;">
					<!--#include virtual="list1.html" -->
				</div>
	
			</div>
			
			<div>病人处方</div>
			
			<div>病人服药情况</div>
			
			<div>基线调查</div>
			
			<div>随访</div>
		</div>
		<div class="tabsFooter">
			<div class="tabsFooterContent"></div>
		</div>
	</div>