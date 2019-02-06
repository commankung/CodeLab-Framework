	<div class="step-pane active" data-step="1">
		<form class="form-horizontal " id="validation-profile" method="get">
														
			<!--------- Employee Information Label ---------->
			<h3 class="header blue lighter smaller">
				<i class="ace-icon fa fa-building-o smaller-90"></i>
				Employee Information ( ข้อมูลพนักงาน )
			</h3>
            															
			<!------ Employee ID ------>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right">Employee ID / <span class="cssTH">รหัสพนักงาน</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<div class="clearfix">
						<div class="input-group">
							<input class="form-control" style="width:280px" type="text" id="Emp_ID" name="Emp_ID">

								<button id="ResultAuto" class="btn btn-sm btn-success" style="padding-top:2px;padding-bottom:2px" type="button">
									<i class="ace-icon fa fa-search bigger-110"></i>
									GO
								</button>
						</div>
					</div>
				</div>
			</div>
            
			<!------ AGR Company ------>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="Company">Company / <span class="cssTH">บริษัท</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<select id="AGR_COMPANY" name="AGR_COMPANY" class="select2" data-placeholder="Click to Choose Company...." onchange="getInform(this.value);">
						<option value="">&nbsp;</option>
						<option value="AA">AAPICO AMATA</option>
						<option value="AF">AAPICO FORGING</option>
						<option value="AH">AAPICO HITECH</option>
						<option value="AHP">AAPICO HITECH PART</option>
						<option value="AHR">AAPICO HITECH RAYONG</option>
						<option value="AHT">AAPICO HITECH TOOLING</option>
						<option value="AITS">AAPICO ITS</option>
						<option value="AL">AAPICO LAMTECH</option>
						<option value="AP">AAPICO PLASTIC</option>
						<option value="APR">AAPICO PLASTIC RAYONG</option>
						<option value="AS">ABLE SANOH (ASICO)</option>
						<option value="ASP">AAPICO STURCTURAL PRODUCTS</option>
						<option value="LP">ABLE MOTOR LADPROA</option>
						<option value="NV">ABLE MOTOR NAVANAKORN</option>
						<option value="EA">EDSHA AAPICO</option>
						<option value="RM">NEW ERA RAMINTRA</option>
						<option value="SM">NEW ERA SAMUTPRAKARN</option>
					</select>
				</div>
			</div>
															
			<!------ Full Name Thai ------>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" >Full Name (THAI) / <span class="cssTH">ชื่อ-สกุล (ไทย)</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<div class="clearfix">
						<input type="text" class="col-xs-12 col-sm-6"  name="Full_Name_Thai" id="Full_Name_Thai" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;">
					</div>
				</div>
			</div>
															
			<!------ Full Name Eng ------>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" >Full Name (Eng) / <span class="cssTH">ชื่อ-สกุล (อังกฤษ)</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<div class="clearfix">
						<input type="text" class="col-xs-12 col-sm-6"  name="Full_Name_Eng" id="Full_Name_Eng" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;" >
					</div>
				</div>
			</div>
																																													
			<!------ Position Employee ------>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" >Position / <span class="cssTH">ตำแหน่ง</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<div class="clearfix">
						<input type="text" class="col-xs-12 col-sm-6" name="Position_Emp" id="Position_Emp" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;">
					</div>
				</div>
			</div>

			<!------ Section Employee ------>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" >Section / <span class="cssTH">แผนก</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<div class="clearfix">
						<input type="text" class="col-xs-12 col-sm-6" name="Section_Emp" id="Section_Emp" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;">
					</div>
				</div>
			</div>
															
			<!------ Department Employee ------>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" >Department / <span class="cssTH">ฝ่าย</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<div class="clearfix">
						<input type="text" class="col-xs-12 col-sm-6"  name="Department_Emp" id="Department_Emp" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;">
					</div>
				</div>
			</div>
			
			<!------ Telephone Ext ------>										
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Ext / <span class="cssTH">เบอร์ติดต่อภายใน</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="ace-icon fa fa-phone"></i>
						</span>
						<input type="tel" style="width:250px"  id="Ext_Phone" name="Ext_Phone" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;">
					</div>
				</div>
			</div>
			
			<!------ Address Label ------>
			<h3 class="header blue lighter smaller">
				<i class="ace-icon fa fa-home smaller-90"></i>
				Address ( ตามทะเบียนบ้าน )
			</h3>
															
			<!------ Address No. ------>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" >Address No. / <span class="cssTH">บ้านเลขที่</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<div class="clearfix">
						<input type="text" class="col-xs-12 col-sm-6"  name="Address_NO" id="Address_NO"style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;" >
					</div>
				</div>
			</div>
															
			<!------ Province ------>
			<?php
			
				$STR_PROVINCE		=	"SELECT * FROM TBL_MASTER_PROVINCE ORDER BY ProvinceId ASC";
				$QUERY_PROVINCE		=	MSSQL_QUERY($STR_PROVINCE);
			?>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="Company">Province / <span class="cssTH">จังหวัด</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<select id="Province" name="Province" class="select2" data-placeholder="Click to Choose Province...." style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;">
						<option value="">&nbsp;</option>
						<?php
							while($PROVINCE	=	mssql_fetch_array($QUERY_PROVINCE))
							{
						?>
								<option value="<?php echo $PROVINCE['ProvinceId']; ?>" ><?php echo iconv("tis-620", "utf-8",$PROVINCE['ProvinceName']); ?></option>
						<?php
							}
						?>
					</select>
				</div>
			</div>
															
			<!------ District ------>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="Company">District / <span class="cssTH">อำเภอ</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<select id="District" name="District" class="select2" data-placeholder="Click to Choose District...." style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;">
						<option value="">&nbsp;</option>
					</select>
				</div>
			</div>
															
			<!------Sub District ------>
			<?php
				$STR_SUB_DISTRICT		=	"SELECT TOP 100 * FROM TBL_MASTER_SUB_DISTRICT";
				$QUERY_SUB_DISTRICT		=	MSSQL_QUERY($STR_SUB_DISTRICT);
			?>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="Company">Sub District / <span class="cssTH">ตำบล</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<select id="Sub_District" name="Sub_District" class="select2" data-placeholder="Click to Choose Sub District...." style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;">
						<option value="">&nbsp;</option>
						<?php
							while($SUB_DISTRICT	=	mssql_fetch_array($QUERY_SUB_DISTRICT))
							{
						?>
								<option value="<?php echo $SUB_DISTRICT['DistrictCode']; ?>"><span class="cssTH"><?php echo iconv("tis-620", "utf-8",$SUB_DISTRICT['DistrictName']); ?></span></option>
						<?php
							}
						?>
					</select>
				</div>
			</div>
			
			<!------ Postcode Employee ------>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" >Zip Code / <span class="cssTH">รหัสไปรษณีย์</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<div class="clearfix">
						<input type="text" class="col-xs-12 col-sm-6" maxlength="5"  name="Zipcode_Emp" id="Zipcode_Emp" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;">
					</div>
				</div>
			</div>

															
			<!------ Telephone ----->
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Telephone / <span class="cssTH">เบอร์โทรศัพท์บ้าน</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="ace-icon fa fa-phone"></i>
						</span>
						<input type="tel" style="width:245px" id="Home_Phone" name="Home_Phone"style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;" >
					</div>
				</div>
			</div>
			
			<!------ Mobile Phone ----->
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Mobile Phone / <span class="cssTH">เบอร์โทรศัพท์มือถือ</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="ace-icon fa fa-mobile"></i>
						</span>
						<input type="tel" style="width:250px" id="Mobile_phone" name="Mobile_phone" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;">
					</div>
				</div>
			</div>
		
			<!--------- Supervisor Label --------->
			<h3 class="header blue lighter smaller">
				<i class="ace-icon fa fa-users smaller-90"></i>
				Supervisor ( หัวหน้างาน )
			</h3>

			<!------ Supervisor ------>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" >Supervisor name/ <span class="cssTH">ชื่อหัวหน้า (ไทย)</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<div class="clearfix">
						<input type="text" class="col-xs-12 col-sm-6"  name="Sup_Name" id="Sup_Name" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;">
					</div>
				</div>
			</div>
															
			<!------ Supervisor Position ------>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" >Supervisor Position / <span class="cssTH">ตำแหน่ง</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<div class="clearfix">
						<input type="text" class="col-xs-12 col-sm-6"  name="Sup_Position" id="Sup_Position" >
					</div>
				</div>
			</div>
					
			<!------ Supervisor Email ------>										
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email Address / <span class="cssTH">อีเมล</span>:</label>
				<div class="col-xs-12 col-sm-6">
					<div class="clearfix">
						<input type="email" name="email" id="email" class="col-xs-12 col-sm-6" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;"/>
					</div>
				</div>
			</div>

		</form>
	</div>
    
