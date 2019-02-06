<div class="step-pane" data-step="<?php echo $Step_Page; ?>">
	<div class="row">
		<div class="col-xs-12">
				<div class="timeline-container">
					<!--------- Flag Internet Level ------->
					<div class="timeline-label">
						<span class="label label-success arrowed-in-right label-lg">
							<b>Removable Drive Information / <span class="cssTH">ประเภทข้อมูลอุปกรณ์ที่ต้องการใช้งาน</span></b>
						</span>
					</div>
					
					<!--------- Internet Level A Description ---------->
					<div class="timeline-items">
						<div class="timeline-item clearfix">
							<div class="timeline-info">
								<i class="timeline-indicator ace-icon fa fa-hdd-o btn btn-success no-hover"></i>
							</div>
							<div class="widget-box widget-color-green2">
								<div class="widget-header widget-header-small">
									<h5 class="widget-title smaller">Drive : External HDD. / Flash Drive </h5>
								</div>
							</div>
						</div>
					</div><!-- /.timeline-items -->
				
					<!--------- Internet Level B Description ---------->
					<div class="timeline-items">
						<div class="timeline-item clearfix">
							<div class="timeline-info">
								<i class="timeline-indicator ace-icon fa fa-camera btn btn-primary no-hover"></i>
							</div>
							<div class="widget-box widget-color-blue2">
								<div class="widget-header widget-header-small">
									<h5 class="widget-title smaller">Camera : Compact Camera / DSLR Camera / Mirrorless Camera </h5>
								</div>
							</div>
						</div>
					</div><!-- /.timeline-items -->
					
					<!--------- Internet Level C Description ---------->
					<div class="timeline-items">
						<div class="timeline-item clearfix">
							<div class="timeline-info">
								<i class="timeline-indicator ace-icon fa fa-mobile btn btn-danger no-hover"></i>
							</div>
							<div class="widget-box widget-color-red2">
								<div class="widget-header widget-header-small">
									<h5 class="widget-title smaller">Mobile Phone : Android OS. / IOS.</h5>
								</div>
							</div>
						</div>
					</div><!-- /.timeline-items -->
			</div><!-- /.timeline-container -->
		</div>
	</div>
	
			<form class="form-horizontal " id="validation-form-USB" method="get">
			<h3 class="header blue lighter smaller">
				<i class="ace-icon fa fa-hdd-o smaller-90"></i>
				Removable Media Requisition Requisition
			</h3>
			<!------ Type Removable Media ------>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="Company">Removable Type / <span class="cssTH">ประเภทอุปกรณ์</span>:</label>
				<div class="col-xs-12 col-sm-8">
					<select id="TYPE_REMOVABLE"  name="TYPE_REMOVABLE" class="select2" data-placeholder="Click to Choose Removable Type....">
						<option value=""></option>
						<option value="HDD">External HDD. / Flash Drive</option>
						<option value="Camera">Camera</option>
						<option value="Mobile Phone">Mobile Phone</option>
					</select>
				</div>
			</div>
			
			<!------ Computer Name ------>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-4 no-padding-right" >Computer Name / <span class="cssTH">ชื่อเครื่องคอมพิวเตอร์</span>:</label>
				<div class="col-xs-12 col-sm-7">
					<div class="clearfix">
						<input type="text" class="col-xs-12 col-sm-6" name="Computer_Name" id="Computer_Name" title="ชื่อคอมพิวเตอร์ที่ต้องการจะปลดล๊อค" >
					</div>
				</div>
			</div>

			
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-4 no-padding-right" >Justification / <span class="cssTH">อธิบายเหตุุผล</span>:</label>
				<div class="col-xs-12 col-sm-4">
					<div class="clearfix">
						<textarea class="input-xlarge" name="USB_Jus" id="USB_Jus" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;"></textarea>					</div>
				</div>
			</div>

		</form>

	
</div>
