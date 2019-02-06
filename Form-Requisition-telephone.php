<div class="step-pane" data-step="<?php echo $Step_Page; ?>">
	<div class="row">
		<div class="col-xs-12">
			<div class="timeline-container">
				<!--------- Flag Internet Level ------->
				<div class="timeline-label">
					<span class="label label-success arrowed-in-right label-lg">
						<b>Account Code Level / <span class="cssTH">ระดับของรหัสผ่านการใช้งานโทรศัพท์</span></b>
					</span>
				</div>
				
				<!--------- Internet Level A Description ---------->
				<div class="timeline-items">
					<div class="timeline-item clearfix">
						<div class="timeline-info">
							<i class="timeline-indicator ace-icon fa fa-globe btn btn-success no-hover"></i>
						</div>
						<div class="widget-box widget-color-green2">
							<div class="widget-header widget-header-small">
								<h5 class="widget-title smaller">Oversea / โทรต่างประเทศ</h5>
								<span class="widget-toolbar">
								<a href="#" data-action="collapse">
									<i class="ace-icon fa fa-chevron-up"></i>
								</a>
								</span>
							</div>
							<div class="widget-body">
								<div class="widget-main">
									- They are the top management, executive and managerial level. This level can calling to 
									domestic and oversea.  
									<br>
									- <span class="cssTH">ระดับผู้บริหาร , ผู้จัดการ  กลุ่มผุ้ใช้งานดังกล่าวสามารถที่จะใช้รหัสการโทรออกไปยังภายในประเทศและต่างประเทศได้</span>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.timeline-items -->
				
				<!--------- Internet Level C Description ---------->
				<div class="timeline-items">
					<div class="timeline-item clearfix">
						<div class="timeline-info">
							<i class="timeline-indicator ace-icon fa fa-building-o btn btn-danger no-hover"></i>
						</div>
						<div class="widget-box widget-color-red2">
							<div class="widget-header widget-header-small">
								<h5 class="widget-title smaller">Domestic / โทรภายในประเทศ</h5>
								<span class="widget-toolbar">
								<a href="#" data-action="collapse">
									<i class="ace-icon fa fa-chevron-up"></i>
								</a>
								</span>
							</div>
							<div class="widget-body">
								<div class="widget-main">
									- These persons are can calling to domestic number only 
									<br>
									- <span class="cssTH">พนักงานกลุ่มนี้ได้รับมอบหมายโดยที่มีความจำเป็นต้องติดต่อกับบุคลภายนอกเกี่ยวข้องกับงาน
									สามารถโทรออกไปยังหมายเลขปลายทางภายในประเทศเท่านั้น</span>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.timeline-items -->
		</div><!-- /.timeline-container -->
		</div>
	</div>
		<form class="form-horizontal " id="validation-form-telephone" method="get">
			<h3 class="header blue lighter smaller">
				<i class="ace-icon fa fa-phone smaller-90"></i>
				Account Code Level Request 
			</h3>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="Company">Account Code Level / <span class="cssTH">ระดับการใช้งานโทรศัพท์</span>:</label>
				<div class="col-xs-12 col-sm-8">
					<select id="TYPE_TELEPHONE"  name="TYPE_TELEPHONE" class="select2" data-placeholder="Click to Choose Account Code Level....">
						<option value=""></option>
						<option value="Oversea">Oversea</option>
						<option value="Domestic">Domestic</option>

					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-4 no-padding-right" >Justification / <span class="cssTH">อธิบายเหตุุผล</span>:</label>
				<div class="col-xs-12 col-sm-4">
					<div class="clearfix">
						<textarea class="input-xlarge" name="Telephone_Jus" id="Telephone_Jus" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;"></textarea>
					</div>
				</div>
			</div>

		</form>

</div>
