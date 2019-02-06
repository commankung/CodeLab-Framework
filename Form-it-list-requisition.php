<div class="main-content" onload="">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-pencil-square-o home-icon"></i>
								<a href="#">Form Requisition</a>
							</li>
							<li class="active">IT Requisition</li>
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>IT Requisition Form</h1>        
            <h3>By INFORMATION TECHNOLOGY Department</h3>
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>We are smart</h1>        
            <h3>YOU CAN REQUEST ANYWHERE ANYTIME</h3>
        </hgroup>       
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>We are amazing</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
      </div>
    </div>
  </div> 
</div>
							</div>
						</div>

						<div class="row" style="margin-top:7px">
							<div class="col-xs-12">

								<div class="widget-box">
									<div class="widget-header widget-header-blue widget-header-flat">
										<h4 class="widget-title bolder">แบบคำขอใช้ทรัพยากรด้านเทคโนโลยีสารสนเทศ / Information Technology Resource Requisition Form</h4>
									</div>


            
									<div class="widget-body">
										<div class="widget-main">
											<div class="step-pane" data-step="4">
		<!--------------------- Start  Detail Symbol ----------------------->


		
	<!--------------------- Start Select Print ----------------------->
	<form class="form-horizontal " id="Form_printing" name="Form_printing" action="index.php?Menu=IT-Flow-Requisition" method="post">
    <span style="display:none">
    <input type="checkbox" name="CHK_IT[]" id="CHK_IT1x" value="USER" class="ace">
    </span>
		<!--
		<h3 class="header blue lighter smaller" style="margin-top:0" >
			<i class="ace-icon fa fa-laptop smaller-90"></i>
			IT Function Requisition 
		</h3>
		-->
        
  		<!------ Select Employee Type ------>
       
			<div class="form-group" align="left">
            <h4 class="smaller lighter red">
				<label class="control-label col-xs-12 col-sm-6 no-padding-right" for="Company"><i class="ace-icon fa fa-male"></i> <i class="ace-icon fa fa-female"></i> <b>Employee Type / <span class="cssTH">ประเภทพนักงาน</span>:</b></label>
               </h4>
				<div class="col-xs-12 col-sm-6">
					<select id="EmpType" name="EmpType" class="select2" data-placeholder="Click to Choose Employee Type...." onchange="EmpSelect(this.value);">
						<option value="">Choose Employee Type&nbsp;&nbsp;</option>
						<option value="New">New Employee</option>
						<option value="Old">Old Employee</option>
					</select>
				</div>
			</div>      
        
		<div id="task-tab" class="tab-pane active">
			<h4 class="smaller lighter green" style="margin-top:2px">
				<i class="ace-icon fa fa-list"></i>
				กรุณาเลือกหัวข้อที่ท่านต้องการ / Please choose item as below . 
			</h4>
			<!-- class:item-red,item-default,item-orange,item-blue,item-grey,item-pink,item-green --->
			<ul id="tasks" class="item-list">
				
				<!-------------------- User -------------------->
				<li class="item-grey clearfix">
					<label class="inline">
						<input type="checkbox" id="CHK_IT1" name="CHK_IT[]" value="USER" class="ace" onclick="ChkListIT();" >
						<span class="lbl" style="font-weight:bold">&nbsp;&nbsp;&nbsp;User ID : </span><span class="cssTH">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อเพื่อแสดงตนเข้าใช้งานระบบเครือข่ายของกลุ่มบริษัทอาปิโก / User name  for identified to access to AAPICO Group Network.</span>
					</label>&nbsp;
					<div class="pull-right action-buttons">
						<a href="#" class="grey">
							<i class="ace-icon fa fa-user bigger-130"></i>
						</a>
					</div>
				</li>
				
				<!-------------------- Email -------------------->
				<li class="item-red clearfix">
					<label class="inline">
						<input type="checkbox" id="CHK_IT2" name="CHK_IT[]" value="EMAIL" class="ace" onclick="ChkListIT();" >
						<span class="lbl" style="font-weight:bold">&nbsp;&nbsp;&nbsp;E-mail : </span><span class="cssTH">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จดหมายอิเล็กทรอนิกส์ ใช้เพื่อติต่อสื่อสารทั้งภายในและภายนอกองค์กร / Electronic mail for communication internal and external</span>
					</label>&nbsp;
					<div class="pull-right action-buttons">
						<a href="#" class="red">
							<i class="ace-icon fa fa-envelope-o bigger-130"></i>
						</a>
					</div>
				</li>
				
				<!-------------------- Internet ------------------------->
				<li class="item-blue clearfix">
					<label class="inline">
						<input type="checkbox" id="CHK_IT3" name="CHK_IT[]" value="Internet" class="ace" onclick="ChkListIT();" >
						<span class="lbl" style="font-weight:bold">&nbsp;&nbsp;&nbsp;Internet : </span><span class="cssTH">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สิทธิ์ในการเข้าถึงการใช้งานอินเตอร์เน็ตโดยจะแบ่งเป็น 3 ระดับ / Authority for access to internet, Separate to 3 Level</span>
					</label>
					<div class="pull-right action-buttons">
						<a href="#" class="blue">
							<i class="ace-icon fa fa-laptop bigger-130"></i>
						</a>
					</div>
				</li>
				
				<!-------------------- Printer ------------------------->
				<li class="item-green clearfix">
					<label class="inline">
						<input type="checkbox" id="CHK_IT4" name="CHK_IT[]" value="Printer" class="ace" onclick="ChkListIT();" >
						<span class="lbl" style="font-weight:bold">&nbsp;&nbsp;&nbsp;Printer : </span><span class="cssTH">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รหัสและสิทธิ์ในการพิมพ์เอกสาร  สำเนาเอกสาร สำหรับเครื่องพิมพ์ในระบบเครือข่าย / Pass code for print and copy document</span>
					</label>
					<div class="pull-right action-buttons">
						<a href="#" class="green">
							<i class="ace-icon fa fa-print bigger-130"></i>
						</a>
					</div>
				</li>
				
				<!-------------------- Removabe USB ------------------------->
				<li class="item-purple clearfix">
					<label class="inline">
						<input type="checkbox" id="CHK_IT5" name="CHK_IT[]" value="REUSB" class="ace" onclick="ChkListIT();" >
						<span class="lbl" style="font-weight:bold">&nbsp;&nbsp;&nbsp;Removable Device : </span><span class="cssTH">&nbsp;&nbsp;&nbsp;&nbsp;อุปกรณ์สำรองข้อมูลที่มีการเคลื่อนย้ายได้ เช่น USB , External HDD. / Storage device (USB , External HDD , Camera)</span>
					</label>
					<div class="pull-right action-buttons">
						<a href="#" class="purple">
							<i class="ace-icon fa fa-hdd-o bigger-130"></i>
						</a>
					</div>
				</li>
				
				<!-------------------- Telephone Passcode ------------------------->
				<li class="item-pink clearfix">
					<label class="inline">
						<input type="checkbox" id="CHK_IT6" name="CHK_IT[]" value="Telephone" class="ace" onclick="ChkListIT();" >
						<span class="lbl" style="font-weight:bold">&nbsp;&nbsp;&nbsp;Telephone : </span><span class="cssTH">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รหัสและสิทธิ์สำหรับการโทรออกภายนอกบริษัท / Pass code for call to external</span>
					</label>
					<div class="pull-right action-buttons">
						<a href="#" class="pink">
							<i class="ace-icon fa fa-phone bigger-130"></i>
						</a>
					</div>
				</li>

				<!-------------------- VPN (Vitual Private Network) ------------------------->
				<li class="item-orange clearfix">
					<label class="inline">
						<input type="checkbox" id="CHK_IT7" name="CHK_IT[]" value="VPN" class="ace" onclick="ChkListIT();" >
						<span class="lbl" style="font-weight:bold">&nbsp;&nbsp;&nbsp;VPN : </span><span class="cssTH">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สิทธิ์ในการเข้าถึงระบบเครือข่ายเสมือนจริงจากระยะไกล / Authority for access to AAPICO Group Network via Virtual Private Network</span>
					</label>
					<div class="pull-right action-buttons">
						<a href="#" class="orange">
							<i class="ace-icon fa fa-globe bigger-130"></i>
						</a>
					</div>
				</li>
			</ul>
		</div>
		<br>

	</form>
</div>
											
											
										
											<div class="wizard-actions">

												<button id="btnSubmitLitITs" name="btnSubmitLitITs" class="btn btn-success btn-next" onclick="document.Form_printing.submit();" >
													Submit
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>
											</div>
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								</div>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			

<!-- basic scripts -->
<!--[if !IE]> -->
	<script src="assets/js/jquery.2.1.1.min.js"></script>
<!-- <![endif]-->
<!--[if IE]>
	<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->
<!--[if !IE]> -->
	<script type="text/javascript">
		window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
	</script>
<!-- <![endif]-->
<!--[if IE]>
	<script type="text/javascript">
	 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
	</script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
	<script src="assets/js/bootstrap.min.js"></script>
	
	<!-- page specific plugin scripts -->
	<script src="assets/js/fuelux.wizard.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/additional-methods.min.js"></script>
	<script src="assets/js/bootbox.min.js"></script>
	<script src="assets/js/jquery.maskedinput.min.js"></script>
	<script src="assets/js/select2.min.js"></script>

	<!-- ace scripts -->
	<script src="assets/js/ace-elements.min.js"></script>
	<script src="assets/js/ace.min.js"></script>
		
	<!--[if lte IE 8]>
	<script src="assets/js/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/js/jquery-ui.custom.min.js"></script>
	<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/js/chosen.jquery.min.js"></script>
	<script src="assets/js/fuelux.spinner.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/js/bootstrap-timepicker.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/daterangepicker.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="assets/js/jquery.knob.min.js"></script>
	<script src="assets/js/jquery.autosize.min.js"></script>
	<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
	<script src="assets/js/jquery.maskedinput.min.js"></script>
	<script src="assets/js/bootstrap-tag.min.js"></script>

		<!-- inline scripts related to this page -->
        
<script language="javascript" type="text/javascript">
function EmpSelect(str) {
//alert(str);
 EmpType=document.getElementById("EmpType").value;
  if (str=="") {
    disListChk();
    return;
  } else
  {
	  enaListChk();
	  if(document.getElementById("EmpType").value=="New")
	  {
		 document.getElementById("CHK_IT1").checked=true;
		 document.getElementById("CHK_IT1").disabled=true;
		 document.getElementById("CHK_IT1x").checked=true;
		 ChkListIT();
	  }else
	  {
		  USERx="";
		 document.getElementById("CHK_IT1").checked=false; 
		 document.getElementById("CHK_IT1").disabled=false;
		 document.getElementById("CHK_IT1x").checked=false;
		 document.getElementById("CHK_IT1x").disabled=true;
		 ChkListIT();
	  }
  }
  ChkListIT();

}

function disListChk()
{
	document.getElementById("CHK_IT1x").checked=false;
	document.getElementById("CHK_IT1").checked=false; 
	document.getElementById("CHK_IT2").checked=false;
	document.getElementById("CHK_IT3").checked=false;
	document.getElementById("CHK_IT4").checked=false;
	document.getElementById("CHK_IT5").checked=false;
	document.getElementById("CHK_IT6").checked=false;
	document.getElementById("CHK_IT7").checked=false;	
		
	document.getElementById("CHK_IT1x").disabled=true;				
	document.getElementById("CHK_IT1").disabled=true;
	document.getElementById("CHK_IT2").disabled=true;
	document.getElementById("CHK_IT3").disabled=true;
	document.getElementById("CHK_IT4").disabled=true;
	document.getElementById("CHK_IT5").disabled=true;
	document.getElementById("CHK_IT6").disabled=true;
	document.getElementById("CHK_IT7").disabled=true;
	ChkListIT();
}
function enaListChk()
{
	document.getElementById("CHK_IT1x").disabled=false;
	document.getElementById("CHK_IT1").disabled=false;
	document.getElementById("CHK_IT2").disabled=false;
	document.getElementById("CHK_IT3").disabled=false;
	document.getElementById("CHK_IT4").disabled=false;
	document.getElementById("CHK_IT5").disabled=false;
	document.getElementById("CHK_IT6").disabled=false;
	document.getElementById("CHK_IT7").disabled=false;
	ChkListIT();
}


</script>
		
		