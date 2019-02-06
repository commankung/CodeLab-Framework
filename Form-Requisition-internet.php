<div class="step-pane" data-step="<?php echo $Step_Page; ?>">
	<div class="row">
		<div class="col-xs-12">
			<div class="timeline-container">
				<!--------- Flag Internet Level ------->
				<div class="timeline-label">
					<span class="label label-success arrowed-in-right label-lg">
						<b>Internet Accessibility Level / <span class="cssTH">ระดับของการใช้งานอินเตอร์เน็ต</span></b>
					</span>
				</div>
				
				<!--------- Internet Level A Description ---------->
				<div class="timeline-items">
					<div class="timeline-item clearfix">
						<div class="timeline-info">
							<i class="timeline-indicator ace-icon fa fa-building btn btn-success no-hover"></i>
						</div>
						<div class="widget-box widget-color-green2">
							<div class="widget-header widget-header-small">
								<h5 class="widget-title smaller">Level A (VIP Group) / ระดับ A (กลุ่มผู้บริหาร)</h5>
								<span class="widget-toolbar">
								<a href="#" data-action="collapse">
									<i class="ace-icon fa fa-chevron-up"></i>
								</a>
								</span>
							</div>
							<div class="widget-body">
								<div class="widget-main">
									- For the top management, executive and managerial level.  
																		<br>
									- <span class="cssTH">สำหรับผู้บริหาร หรือผู้จัดการ โดยจะสามารถเข้าใช้งานอินเทอร์เน็ตได้อย่างอิสระ</span>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.timeline-items -->
			
				<!--------- Internet Level B Description ---------->
				<div class="timeline-items">
					<div class="timeline-item clearfix">
						<div class="timeline-info">
							<i class="timeline-indicator ace-icon fa fa-users btn btn-primary no-hover"></i>
						</div>
						<div class="widget-box widget-color-blue2">
							<div class="widget-header widget-header-small">
								<h5 class="widget-title smaller">Level B (Key User Group) / ระดับ B (กลุ่มพนักงานที่ใช้อินเตอร์เน็ตเป็นประจำ)</h5>
								<span class="widget-toolbar">
								<a href="#" data-action="collapse">
									<i class="ace-icon fa fa-chevron-up"></i>
								</a>
								</span>
							</div>
							<div class="widget-body">
								<div class="widget-main">
									- This level can access any websites but can’t access inappropriate websites and have to time control access some websites.
									<br>
									- <span class="cssTH">สำหรับพนักงานที่มีการค้นหาข้อมูลเป็นประจำหรือมีการใช้งานอินเทอร์เน็ตที่หลากหลาย โดยจะสามารถเข้าใช้งานเว็บไซต์ได้เป็นส่วนมาก ยกเว้นเว็บไซต์ที่ไม่เหมาะสมและมีการควบคุม </span>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.timeline-items -->
				
				<!--------- Internet Level C Description ---------->
				<div class="timeline-items">
					<div class="timeline-item clearfix">
						<div class="timeline-info">
							<i class="timeline-indicator ace-icon fa fa-user btn btn-danger no-hover"></i>
						</div>
						<div class="widget-box widget-color-red2">
							<div class="widget-header widget-header-small">
								<h5 class="widget-title smaller">User C (General User) / ระดับ C (กลุ่มผู้ใช้งานทั่วไป)</h5>
								<span class="widget-toolbar">
								<a href="#" data-action="collapse">
									<i class="ace-icon fa fa-chevron-up"></i>
								</a>
								</span>
							</div>
							<div class="widget-body">
								<div class="widget-main">
									- This level can access specified relate our business websites only such as government  website, customer website etc.
									<br>
									- <span class="cssTH">พนักงานจะสามารถเข้าใช้งานอินเทอร์เน็ตได้เฉพาะเว็บไซต์งานที่ได้ถูกระบุไว้เท่านั้น ตัวอย่างเช่น เว็บไซต์ของหน่วยงานราชการ รัฐวิสาหกิจ, เว็บไซต์ของลูกค้า เป็นต้น</span>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.timeline-items -->
		</div><!-- /.timeline-container -->
		</div>
	</div>
		<form class="form-horizontal " id="validation-form-Internet" method="get">
			<h3 class="header blue lighter smaller">
				<i class="ace-icon fa fa-laptop smaller-90"></i>
				Internet Accessibility Level Requisition
			</h3>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-4 no-padding-right" for="Company">Internet Level / <span class="cssTH">ระดับการใช้งานอินเตอร์เน็ต</span>:</label>
				<div class="col-xs-12 col-sm-8">
					<select id="INTERNET_LEVEL"  name="INTERNET_LEVEL" class="select2" data-placeholder="Click to Choose Internet Level....">
						<option value=""></option>
						<option value="A">Level A</option>
						<option value="B">Level B</option>
						<option value="C">Level C</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-4 no-padding-right" >Justification / <span class="cssTH">อธิบายเหตุุผล</span>:</label>
				<div class="col-xs-12 col-sm-4">
					<div class="clearfix">
						<textarea class="input-xlarge" name="Inter_Jus" id="Inter_Jus" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;"></textarea>
					</div>
				</div>
			</div>

		</form>

</div>
