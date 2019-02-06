<div class="step-pane" data-step="<?php echo $Step_Page; ?>">
	<div class="row">
		
		<!--------------------- Start  Detail Symbol ----------------------->
		<div class="col-xs-12">
			<div class="timeline-container">
				<!--------- Flag Internet Level ------->
				<div class="timeline-label">
					<span class="label label-success arrowed-in-right label-lg">
						<b><span class="cssTH">เครื่องพิมพ์ในระบบเครื่อข่าย</span> / Network Printer</b>
					</span>
				</div>
								
				<!--------- Internet Level A Description ---------->
				<div class="timeline-items">
					<div class="timeline-item clearfix">
						<div class="timeline-info">
							<i class="timeline-indicator ace-icon fa fa-print  btn btn-success no-hover"></i>
						</div>
						<div class="widget-box widget-color-green2">
							<div class="widget-header widget-header-small">
								<h5 class="widget-title smaller">รายละเอียดการพิมพ์ - สำเนา เอกสาร / Print & Coppy Detail</h5>
								<span class="widget-toolbar">
								<a href="#" data-action="collapse">
									<i class="ace-icon fa fa-chevron-up"></i>
								</a>
								</span>
							</div>
							<div class="widget-body">
								<div class="widget-main">
									- <span class="cssTH">รหัสและสิทธิ์ในการพิมพ์เอกสาร  สำเนาเอกสาร สำหรับเครื่องพิมพ์ในระบบเครือข่าย การแสกนเอกสารทั้งสีและขาวดำสามารถใช้งานได้เลยโดยไม่ต้องมีรหัส</span>
									<br>
									- Pass code for print and copy document, Scan document don't have pass code.  
	
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.timeline-items -->


		</div><!-- /.timeline-container -->
		<!--------------------- End  Detail Symbol ----------------------->
		</div>
	</div>
	
	<!--------------------- Start Select Print ----------------------->
	<form class="form-horizontal " id="validation-form-Printer" >
		<h3 class="header blue lighter smaller">
			<i class="ace-icon fa fa-map-marker smaller-90"></i>
			กรุณาเลือกพื้นที่ที่ท่านต้องการใช้งานเครื่องพิมพ์ / Please choose printer location.
		</h3>
		
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


		
        
     
    		<!------ Type Print ------>
            <!--
		<div class="form-group">
			<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="Company">Type Print / ประเภทการพิมพ์:</label>
			<div class="col-xs-12 col-sm-4">
				<select id="TYPE_PRINT" name="TYPE_PRINT" class="select2" data-placeholder="Click to Choose Type Print...." >
					<option value="">&nbsp;</option>
					<option value="Black-White">Black - White</option>
					<option value="Color">COLOR</option>
				</select>
			</div>
		</div>	
        -->

		<div id="task-tab" class="tab-pane active">
			        <!--<h4 class="smaller lighter green">
				<i class="ace-icon fa fa-list"></i>
				Sortable Lists Location Company
			</h4>
			<ul id="tasks" class="item-list">
				
			</ul> -->
		</div>
		
	</form>
</div>

<script language="javascript" type="text/javascript">

function DP(str) {

	if(document.getElementById("CHK_PRINTER"+str).checked==true){
		document.getElementById("justification"+str).style.display='block';	
	}else
	{
		document.getElementById("justification"+str).style.display='none';	
	}
}

</script>