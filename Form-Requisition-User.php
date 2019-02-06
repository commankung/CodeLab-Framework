<div class="step-pane" data-step="<?php echo $Step_Page; ?>">
	<div class="row">
		<div class="col-xs-12">
		<!----------------------- Username Login ------------------------------->
			<div class="timeline-container">
				<!--------- Flag Internet Level ------->
				<div class="timeline-label">
					<span class="label label-success arrowed-in-right label-lg">
						<b>Username Logon / <span class="cssTH">ชื่อแสดงตนเข้าใช้ระบบ</span></b>
					</span>
				</div>
				
				<!--------- Internet Level A Description ---------->
				<div class="timeline-items">
					<div class="timeline-item clearfix">
						<div class="timeline-info">
							<i class="timeline-indicator ace-icon fa fa-user  btn btn-success no-hover"></i>
						</div>
						<div class="widget-box widget-color-green2">
							<div class="widget-header widget-header-small">
								<h5 class="widget-title smaller">Username Logon / ชื่อแสดงตนเข้าใช้ระบบ</h5>
								<span class="widget-toolbar">
								<a href="#" data-action="collapse">
									<i class="ace-icon fa fa-chevron-up"></i>
								</a>
								</span>
							</div>
							<div class="widget-body">
								<div class="widget-main">
									- User name  for identified to access to AAPICO Group Network. 
									<br>
									- <span class="cssTH">ชื่อเพื่อแสดงตนเข้าใช้งานระบบเครือข่ายของกลุ่มบริษัทอาปิโก</span>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.timeline-items -->
			</div><!-- /.timeline-container -->
		</div>
	</div>
	<form class="form-horizontal " id="validation-form-user" method="get">
		<h3 class="header blue lighter smaller">
			<i class="ace-icon fa fa-user smaller-90"></i>
			Username Logon Requisition
		</h3>
		<div class="form-group">
			<label class="control-label col-xs-12 col-sm-4 no-padding-right" >Justification / <span class="cssTH">อธิบายเหตุุผล</span>:</label>
			<div class="col-xs-12 col-sm-4">
				<div class="clearfix">
					<textarea class="input-xlarge" name="User_Jus" id="User_Jus" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;"></textarea>
				</div>
			</div>
		</div>
	</form>
</div>
