<?php
session_start();
?>
 
<h3 class="header smaller lighter blue" style="margin-bottom:2px; margin-top:10px;">
	<i class="ace-icon glyphicon glyphicon-user" style="color:#C3C"></i>
	<font color="#669900">เพิ่มข้อมูลพนักงาน</font>  
	<i class="fa fa-star-o" style="color:#C3F;"></i>
	<i class="fa fa-star-o" style="color:#C3F;"></i>
	<i class="fa fa-star-o" style="color:#C3F;"></i>&nbsp;&nbsp;
	<font color="#0000FF">Login by admin&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;:  <?php echo str_replace(' ','',$_SESSION['sesusertrn']);?></font>
</h3>

<br><br><br>
<div class="page-content">
<div id="user-profile-2" class="user-profile" style="margin-top:5px;">
	<div class="col-xs-3">
	</div>
	<div class="col-xs-6">
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Excel File</h4>
			</div>
			<form id="frmUpload" name="frmUpload" method="post" enctype="multipart/form-data">
			<div class="widget-body">
				<div class="widget-main">
					<br>
					<div class="form-group">
						<div class="col-xs-12">
							<input type="file" id="id-input-file-2" name="fileUpload"/>
						</div>
					</div>
					<div class="form-group">
						<div align="center">
							<button class="btn btn-success" onclick="return ExecuteOnSubmit();">
								<i class="ace-icon fa fa-floppy-o bigger-140"></i>
								Save
							</button>
						</div>
					</div>
				</div>
			</div>
			</form>
			
		</div>
	</div>

</div>
</div>	                                                             