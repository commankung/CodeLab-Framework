<?php
	include('DB_Configuration.php');
	$ForList	=	0;
	foreach($_POST['CHK_IT'] as $LISTIT)
	{
		$ForList++;
		if($ForList < count($_POST['CHK_IT']) )
		{
			$TXTLIST	.=	$LISTIT."/";
		}else
		{
			$TXTLIST	.=	$LISTIT;
		}
	}
	
?>


<div class="main-content">
	
				<!---------- Keep Value Select Function IT --------------->
				<input type="hidden" value="<?php echo $TXTLIST; ?>" id="TXTLIST" name="TXTLIST">

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

								<div class="widget-box">
									<div class="widget-header widget-header-blue widget-header-flat">
																				<h4 class="widget-title bolder">แบบคำขอใช้ทรัพยากรด้านเทคโนโลยีสารสนเทศ / Information Technology Resource Requisition Form</h4>										<!---  Switch Validation ----->
										<!--
										<div class="widget-toolbar">
					
											<label>
												<small class="green">
													<b>Validation</b>
												</small>

												<input id="skip-validation" type="checkbox" class="ace ace-switch ace-switch-4" />
												<span class="lbl middle"></span>
											</label>
										</div>
										-->
									</div>

									<div class="widget-body">
										<div class="widget-main">
											<div id="fuelux-wizard-container">
												<div>
													<ul class="steps">
														<li data-step="1" class="active">
															<span class="step">1</span>
															<span class="title">Employee Profile</span>
														</li>
														<!------------------ Start Loop For Step -------------->
														<?php
														$Step_Flow		=	1;
														$Step_Page		=	1;
														$Total_Function = count($_POST['CHK_IT'])+1;
														for($i=0;$i<=$Total_Function;$i++)
														{		
															$Step_Flow++;
															if( $_POST['CHK_IT'][$i] =="USER"){
															?>
															<li data-step="<?php echo $Step_Flow; ?>">
																<span class="step"><?php echo $Step_Flow; ?></span>
																<span class="title">User</span>
															</li>
															
															<?php
															}
															if( $_POST['CHK_IT'][$i] =="EMAIL"){
															?>
															<li data-step="<?php echo $Step_Flow; ?>">
																<span class="step"><?php echo $Step_Flow; ?></span>
																<span class="title">Email</span>
															</li>

															<?php
															}												
															if( $_POST['CHK_IT'][$i] =="Internet"){
															?>
															<li data-step="<?php echo $Step_Flow; ?>">
																<span class="step"><?php echo $Step_Flow; ?></span>
																<span class="title">Internet Level</span>
															</li>
															<?php
															}
															if( $_POST['CHK_IT'][$i] =="Printer"){
															?>
															<li data-step="<?php echo $Step_Flow; ?>">
																<span class="step"><?php echo $Step_Flow; ?></span>
																<span class="title">Printer</span>
															</li>
															<?php
															}
															if( $_POST['CHK_IT'][$i] =="REUSB"){
															?>
															<li data-step="<?php echo $Step_Flow; ?>">
																<span class="step"><?php echo $Step_Flow; ?></span>
																<span class="title">Removable Device</span>
															</li>
															<?php
															}
															if( $_POST['CHK_IT'][$i] =="Telephone"){
															?>
															<li data-step="<?php echo $Step_Flow; ?>">
																<span class="step"><?php echo $Step_Flow; ?></span>
																<span class="title">Telephone</span>
															</li>
															<?php
															}
															if( $_POST['CHK_IT'][$i] =="VPN"){
															?>
															<li data-step="<?php echo $Step_Flow; ?>">
																<span class="step"><?php echo $Step_Flow; ?></span>
																<span class="title">VPN</span>
															</li>	
															<?php
															}
															if( ($Total_Function-1) == $i )
															{
															?>
															<li data-step="<?php echo $Step_Flow; ?>">
																<span class="step"><?php echo $Step_Flow; ?></span>
																<span class="title">Preview</span>
															</li>
															<?php
															}
															if( $Total_Function == $i )
															{
															?>
															<li data-step="<?php echo $Step_Flow; ?>">
																<span class="step"><?php echo $Step_Flow; ?></span>
																<span class="title">Agreement</span>
															</li>
														<?php 
															} 
														}
														?>
														<!------------------ End Loop For Step -------------->
													</ul>
												</div>

												<hr/>
												<div class="step-content pos-rel">
												<!------------------ data-Step 1 ( Profile)			----------------------->
												<?php include('Form-Requistion-Profile.php');	?>
												
												<!------------------ Start Loop For Page -------------->
												<?php for($y=0;$y<=$Total_Function;$y++) { $Step_Page++; ?>	
												<!------------------ data-Step 2 ( Internet level ) ----------------------->
												<?php 
												if( $_POST['CHK_IT'][$y] =="USER")
												{
													include('Form-Requisition-User.php'); 
												}
												?>

												
												<?php 
												if( $_POST['CHK_IT'][$y] =="EMAIL")
												{
													include('Form-Requisition-Email.php'); 
												}
												?>

												
												<!------------------ data-Step 3 ( Internet level ) ----------------------->
												<?php 
												if( $_POST['CHK_IT'][$y] =="Internet")
												{
													include('Form-Requisition-internet.php'); 
												}
												?>
												
												<!------------------ data-Step 4 (Printer Network ) ----------------------->
												<?php 
												if( $_POST['CHK_IT'][$y] =="Printer")
												{
													include('Form-Requisition-Printer.php'); 
												}
												?>
												
												<!------------------ data-Step 5 (Removable Media Requisition ) ----------->
												<?php 
												if( $_POST['CHK_IT'][$y] =="REUSB")
												{
													include('Form-Requisition-Remove-Device.php'); 
												}
												?>
												
												<!------------------ data-Step 6 (Telephone-Passcode ) -------------------->
												<?php 
												if( $_POST['CHK_IT'][$y] =="Telephone")
												{
													include('Form-Requisition-telephone.php'); 
												}
												?>
												
												<!------------------ data-Step 6 (Telephone-Passcode ) -------------------->
												<?php 
												if( $_POST['CHK_IT'][$y] =="VPN")
												{
													include('Form-Requisition-VPN.php'); 
												}
												?>
												
												<!------------------ data-Step 7 (Agreement) -------------------->
												<?php
												if( ($Total_Function-1) == $y )
												{
													include('Form-Requisition-Preview.php');
												}
												?>
												
												<!------------------ data-Step 8 (Agreement) -------------------->
												<?php
												if( $Total_Function == $y )
												{
													include('Form-Requisition-Agreement.php');
												}
												?>
												
												<?php } ?>
												<!------------------ End Loop For Page -------------->
												</div>
											</div>
											<hr/>
											<div class="wizard-actions">
											<!--
												<button id="btn_back_list" class="btn  btn-danger pull-left">
													<i class="ace-icon fa fa-list"></i>
													Function list
												</button>
											-->
												<button class="btn btn-prev">
													Prev
													<i class="ace-icon fa fa-arrow-left"></i>
												</button>

												<button class="btn btn-success btn-next" data-last="Finish">
													Next
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
	<script src="assets/js/fuelux.tree.min.js"></script>


		<!-- inline scripts related to this page -->
		<script type="text/javascript">
		$(document).ready(function() {
  			document.getElementById('ENG_Agreement').style.display  = 'none';
			document.getElementById('TH_Agreement').style.display  = 'block';
			document.getElementById('CHK_TH').checked = true;
			document.getElementById('CHK_ENG').checked = false;
		});
		
		function Printer_alertbox(Ptype)
		{
			if(Ptype == "Color")
			{
				// Color, approve by president & CEO.
				bootbox.dialog({
						message: "<font size='2' face='Verdana, Geneva, sans-serif' style='font-weight:bold'>การพิมพ์หรือสำเนาสี :</font> <font size='2' face='Verdana, Geneva, sans-serif'>ต้องได้รับการอนุมัติโดยประธานหรือประธานเจ้าหน้าที่บริหารหรือผู้ที่ได้รับมอบหมาย </font><br/><font size='2' face='Verdana, Geneva, sans-serif' style='font-weight:bold'> Color print & coppy,</font><font size='2' face='Verdana, Geneva, sans-serif' > Must be approve by president or CEO or representative.</font>", 
						buttons: {
						"success" : {
										"label" : "Close",
										"className" : "btn-sm btn-primary"
									}
								}
							});

			}
		}
		
			jQuery(function($) {

				 $("select#Province").change(function(){  
			        var datalist2 = $.ajax({    // รับค่าจาก ajax เก็บไว้ที่ตัวแปร datalist2  
			              url: "Select-data-district.php", // ไฟล์สำหรับการกำหนดเงื่อนไข  
			              data:"PROVINCEID="+$(this).val(), // ส่งตัวแปร GET ชื่อ list1 ให้มีค่าเท่ากับ ค่าของ list1  
			              async: false  
			        }).responseText;       
			        $("select#District").html(datalist2); // นำค่า datalist2 มาแสดงใน listbox ที่ 2 ที่ชื่อ list2  
			        // ชื่อตัวแปร และ element ต่างๆ สามารถเปลี่ยนไปตามการกำหนด  
			    });
			    
			     $("select#District").change(function(){  
			        var datalist3 = $.ajax({    // รับค่าจาก ajax เก็บไว้ที่ตัวแปร datalist2  
			              url: "Select-data-sub-district.php", // ไฟล์สำหรับการกำหนดเงื่อนไข  
			              data:"DistrictID="+$(this).val(), // ส่งตัวแปร GET ชื่อ list1 ให้มีค่าเท่ากับ ค่าของ list1  
			              async: false  
			        }).responseText;       
			        $("select#Sub_District").html(datalist3); // นำค่า datalist2 มาแสดงใน listbox ที่ 2 ที่ชื่อ list2  
			        // ชื่อตัวแปร และ element ต่างๆ สามารถเปลี่ยนไปตามการกำหนด  
			    });  
			    
			    $("#ResultAuto").click(function(){
			    	    $.ajax({
					    			type: "POST",
					    			dataType: "json",
					    			url: "get-data-profile.php", //Relative or absolute path to response.php file
					    			data: 'EmpID='+$('#Emp_ID').val(),
					      			success: function(data) 
					      			{	
										//alert(data[1]);
					      				$('#Emp_ID').val(data[0]);
					      				$("#AGR_COMPANY").val(data[1]);
				      					$('#Full_Name_Thai').val(data[2]);
					      				$('#Full_Name_Eng').val(data[3]);
					      				$('#Position_Emp').val(data[4]);
					      				$('#Section_Emp').val(data[5]);
					      				$('#Department_Emp').val(data[6]);
					      				$('#Ext_Phone').val(data[7]);
					      				$('#Address_NO').val(data[8]);
					      				$('#Zipcode_Emp').val(data[12]);
					      				$('#Home_Phone').val(data[13]);
					      				$('#Mobile_phone').val(data[14]);
					      				$('#Sup_Name').val(data[15]);
					      				$('#Sup_Position').val(data[16]);
					      				$('#email').val(data[17]);
					      			}
					   		  });
			    });


				$("#CHK_TH").click(function(){
					if(document.getElementById('CHK_TH').checked == true)
					{
						document.getElementById('ENG_Agreement').style.display  = 'none';
						document.getElementById('TH_Agreement').style.display  = 'block';
						document.getElementById('CHK_ENG').checked = false;
					}else
					{
						document.getElementById('ENG_Agreement').style.display  = 'block';
						document.getElementById('TH_Agreement').style.display  = 'none';
						document.getElementById('CHK_ENG').checked = true;

					}
				});
				
				$("#CHK_ENG").click(function(){
					if(document.getElementById('CHK_ENG').checked == true)
					{
						document.getElementById('ENG_Agreement').style.display  = 'block';
						document.getElementById('TH_Agreement').style.display  = 'none';
						document.getElementById('CHK_TH').checked = false;
					}else
					{
						document.getElementById('ENG_Agreement').style.display  = 'none';
						document.getElementById('TH_Agreement').style.display  = 'block';
						document.getElementById('CHK_TH').checked = true;

					}
				});

			
			
				$('[data-rel=tooltip]').tooltip();
			
				$(".select2").css('width','280px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				}); 
						
				var $validation = true; //ตัวกำหนดค่า Validation ในการแสดงค่่าว่าง
				$('#fuelux-wizard-container')
				.ace_wizard({
					//step: 2, //optional argument. wizard will jump to step "2" at first
					//buttons: '.wizard-actions:eq(0)'
				})
				
				.on('actionclicked.fu.wizard' , function(e, info){
				
					var	JListIT			=	$('#TXTLIST').val();
					var	ArrayListIT		=	JListIT.split("/");
					//alert(ArrayListIT.length);
					
					var i;
					var loopStep =	1;
					var EndloopStep	=	ArrayListIT.length + 2;
					if(info.step == 1 && $validation) {
						 if(!$('#validation-profile').valid()) e.preventDefault();
						 //if(!$('#validation-form-Internet').valid()) e.preventDefault();
						 //if(!$('#validation-form-user').valid()) e.preventDefault();
						 //if(!$('#validation-form-USB').valid()) e.preventDefault();
						 //if(!$('#validation-form-Email').valid()) e.preventDefault();
						 //if(!$('#validation-form-telephone').valid()) e.preventDefault();
						 //if(!$('#validation-form-vpn').valid()) e.preventDefault();

						 $("#DEmp_ID").html($('#Emp_ID').val());
						 $("#TDEmp_ID").val($('#Emp_ID').val());
						 $("#Emp_ID_AG").val($('#Emp_ID').val());
						 
						 $("#DAGR_COMPANY").html($('#AGR_COMPANY').val());
						 $("#TDAGR_COMPANY").val($('#AGR_COMPANY').val());
						 
						 $("#DFull_Name_Thai").html($('#Full_Name_Thai').val());
						 $("#TDFull_Name_Thai").val($('#Full_Name_Thai').val());
						 
						 $("#DFull_Name_Eng").html($('#Full_Name_Eng').val());
						 $("#TDFull_Name_Eng").val($('#Full_Name_Eng').val());
						 
						 $("#DPosition_Emp").html($('#Position_Emp').val());
						 $("#TDPosition_Emp").val($('#Position_Emp').val());
						 
						 $("#DSection_Emp").html($('#Section_Emp').val());
						 $("#TDSection_Emp").val($('#Section_Emp').val());
						 
						 $("#DDepartment_Emp").html($('#Department_Emp').val());
						 $("#TDDepartment_Emp").val($('#Department_Emp').val());

						 $("#DExt_Phone").html($('#Ext_Phone').val());
						 $("#TDExt_Phone").val($('#Ext_Phone').val());
						 
						 $("#DAddress_NO").html($('#Address_NO').val());
						 $("#TDAddress_NO").val($('#Address_NO').val());
						 
						 $("#DProvince").html($("#Province option:selected").text());
						 $("#TDProvince").val($("#Province option:selected").text());
						 
						 $("#DDistrict").html($("#District option:selected").text());
						 $("#TDDistrict").val($("#District option:selected").text());
						 
						 $("#DSub_District").html($("#Sub_District option:selected").text());
						 $("#TDSub_District").val($("#Sub_District option:selected").text());
						 
						 $("#DZipcode_Emp").html($('#Zipcode_Emp').val());
						 $("#TDZipcode_Emp").val($('#Zipcode_Emp').val());
						 
						 $("#DHome_Phone").html($('#Home_Phone').val());
						 $("#TDHome_Phone").val($('#Home_Phone').val());
						 
						 $("#DMobile_phone").html($('#Mobile_phone').val());
						 $("#TDMobile_phone").val($('#Mobile_phone').val());
						 
						 $("#DSup_Name").html($('#Sup_Name').val());
						 $("#TDSup_Name").val($('#Sup_Name').val());
						 
						 $("#DSup_Position").html($('#Sup_Position').val());
						 $("#TDSup_Position").val($('#Sup_Position').val());
						 
						 $("#Demail").html($('#email').val());
						 $("#TDemail").val($('#email').val());
					}
					for (i=1;i<=EndloopStep;i++) 
					{
						loopStep++;
					    if(info.step == loopStep && $validation)
					    {
					    	if( i <= ArrayListIT.length)
					    	{
						    	if(ArrayListIT[i-1] =="USER")
						    	{
						    		if(!$('#validation-form-user').valid()) e.preventDefault();
						    		 $("#Juser").html($('#User_Jus').val());
						    		 $("#TJuser").val($('#User_Jus').val());
						    	}
						    	
						    	if(ArrayListIT[i-1] =="EMAIL")
						    	{
						    		if(!$('#validation-form-Email').valid()) e.preventDefault();
						    		$("#Jemail").html($('#Email_Jus').val());
						    		$("#TJemail").val($('#Email_Jus').val());
						    		
						    	}
						    	
						    	if(ArrayListIT[i-1] =="Internet")
						    	{
						    		if(!$('#validation-form-Internet').valid()) e.preventDefault();
						    		$("#DINTERNET_LEVEL").html($("#INTERNET_LEVEL option:selected").text());
						    		$("#TDINTERNET_LEVEL").val($("#INTERNET_LEVEL option:selected").text());
						    		
						    		$("#Jinternet").html($('#Inter_Jus').val());
						    		$("#TJinternet").val($('#Inter_Jus').val());						    	
						    	}
						    	
						    	if(ArrayListIT[i-1] =="Printer")
						    	{
									//if(!$('#validation-form-Printer').valid()) e.preventDefault();
									$('#printer_infor').empty();
						    		$.ajax({  
										type: "GET",  
										url: "get-row-printer.php", 
										data: "AGR="+ pCM,//$('#AGR_COMPANY').val(),
										success: function(response) {
												//alert(response);
									    		var checkedValue	= null; 
									    		var array_model		= [];
									    		var array_type		= [];
									    		var array_jus		= [];
									    		var array_id_prinr	= [];
									    		position_array		= 0;
									    		poElement			= 0;
												var inputElements 	= document.getElementsByClassName('ace');
												for(var i=0; i<=response; ++i)
												{
													poElement++;
												      if(inputElements[i].checked){
												      		var poar	=	position_array++;
												           //checkedValue = inputElements[i].value;
												           //alert(checkedValue);
												          	array_model[poar]	= $('#spprinter'+poElement).text();
												          	array_type[poar] 	= $('#TYPE_PRINT'+poElement).val();
												          	array_jus[poar]		= $('#P_Just'+poElement).val();
												          	array_id_prinr[poar]= $('#txtid'+poElement).val();
												      }
												}
												//alert(array_model.length);
												//alert(array_model.valueOf());
												//alert(array_type.valueOf());
												//alert(array_jus.valueOf());
												
												for(var y=0; y<=(array_model.length-1); y++ )
												{
													$("#printer_infor").append("<dt>Model :</dt>");
													$("#printer_infor").append("<dd>"+array_model[y]+"</dd>");
													$("#printer_infor").append("<dt>Type :</dt>");
													$("#printer_infor").append("<dd>"+array_type[y]+"</dd>");
													$("#printer_infor").append("<dt>Justification :</dt>");
													$("#printer_infor").append("<dd>"+array_jus[y]+"</dd>");
													$("#printer_infor").append("<hr>");
												}


												
												$("#TMprint").val(array_model.valueOf());
												$("#TTprint").val(array_type.valueOf());
												$("#TJprint").val(array_jus.valueOf());
												$("#TDprint").val(array_id_prinr.valueOf());
										    }
										});

						    	}
						    	
						    	if(ArrayListIT[i-1] =="REUSB")
						    	{
						    		if(!$('#validation-form-USB').valid()) e.preventDefault();
						    		$("#DTYPE_REMOVABLE").html($("#TYPE_REMOVABLE option:selected").text());
						    		$("#TDTYPE_REMOVABLE").val($("#TYPE_REMOVABLE option:selected").text());
						    		
						    		$("#InComputerName").html($('#Computer_Name').val());
						    		$("#TInComputerName").val($('#Computer_Name').val());
						    		
						    		$("#Jusb").html($('#USB_Jus').val());	
						    		$("#TJusb").val($('#USB_Jus').val());						    		
						    	}
						    	
						    	if(ArrayListIT[i-1] =="Telephone")
						    	{
						    		if(!$('#validation-form-telephone').valid()) e.preventDefault();
						    		$("#DTYPE_TELEPHONE").html($("#TYPE_TELEPHONE option:selected").text());
						    		$("#TDTYPE_TELEPHONE").val($("#TYPE_TELEPHONE option:selected").text());
						    		
						    		$("#Jtelephone").html($('#Telephone_Jus').val());	
						    		$("#TJtelephone").val($('#Telephone_Jus').val());
						    	}
						    	
						    	if(ArrayListIT[i-1] =="VPN")
						    	{
						    		if(!$('#validation-form-vpn').valid()) e.preventDefault();
						    		$("#Jvpn").html($('#VPN_Jus').val());
						    		$("#TJvpn").val($('#VPN_Jus').val());

						    	}
						    }
					    }
					}

					
					
					
				})
				
				.on('finished.fu.wizard', function(e) {
					if(!$('#validation-form-agreement').valid())
					{					
					 	e.preventDefault();
					}else{ 
						$.ajax({
									type: "POST",
									url: $('#Form_save').attr('action'),
									data: $('#Form_save').serialize(),
									success: function( response )
									{
										$("#Form-Submit-preview").submit();
										/*
											bootbox.dialog({
											message: "Thank you! Your information was successfully saved!", 
											buttons: {
												"success" : {
													"label" : "Preview",
													"className" : "btn-sm btn-primary",
													callback: function () { 
														$("#Form-Submit-preview").submit();
													}
												}
											}
										});
										*/
									}
						   });
					
							/*
							bootbox.dialog({
								message: "Thank you! Your information was successfully saved!", 
								buttons: {
									"success" : {
										"label" : "Preview",
										"className" : "btn-sm btn-primary",
										callback: function () { 
											$("#Form-Submit-preview").submit();
										}
									}
								}
							});
							*/
					}
					
				})
				
				.on('stepclick.fu.wizard', function(e){
					//e.preventDefault();//this will prevent clicking and selecting steps
				});
			
			
				//jump to a step
				/**
				var wizard = $('#fuelux-wizard-container').data('fu.wizard')
				wizard.currentStep = 3;
				wizard.setState();
				*/
			
				//determine selected step
				//wizard.selectedItem().step
			
				/*---------------------- Show Tootip Justification limit  ---------------------- */
				$('textarea.input-xlarge').inputlimiter({
					remText: '%n character%s remaining..',
					limitText: 'max allowed : %n.'
				});
				
				//hide or show the other form which requires validation
				//this is for demo only, you usullay want just one form in your application

			
			
			
				//documentation : http://docs.jquery.com/Plugins/Validation/validate
				
				$.mask.definitions['~']='[+-]';
				$('#Home_Phone').mask('(999) 999-999');
				$('#Mobile_phone').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("Home_Phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{3}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
				jQuery.validator.addMethod("Mobile_phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");

				
				
				//-------------------- Validation Profile --------------------
				$('#validation-profile').validate
				({
					errorElement	: 'div',
					errorClass		: 'help-block',
					focusInvalid	: false,
					ignore			: "",
					rules			:	{
											AGR_COMPANY		: 		{	required: true							},
											Full_Name_Thai	: 		{	required: true							},
											Full_Name_Eng	:		{	required: true							},
											Emp_ID			:		{	required: true,minlength:8,maxlength:10	},
											Position_Emp	:		{	required: true							},
											Section_Emp		:		{	required: true							},
											Department_Emp	:		{	required: true							},	
											Ext_Phone		:		{	required: true							},
											Address_NO		:		{	required: true							},
											Province		:		{	required: true							},
											District		:		{	required: true							},
											Sub_District	:		{	required: true							},
											Zipcode_Emp		:		{	required: true							},
											Mobile_phone	:		{	required: true,Mobile_phone:'required'	},
											Sup_Name		:		{	required: true							},
											Sup_Position	:		{	required: true							},
											email			:		{	required: true,email:'required'			}
										},
			
					messages		:	{			
											AGR_COMPANY		: "Please choose Company.",
					  						Full_Name_Thai 	: "Please input Fullname Thai.",
					  						Full_Name_Eng 	: "Please input Fullname Eng.",
					  						Emp_ID			: "Please input Employee ID.",
					  						Position_Emp	: "Please input Employee Position.",
					  						Section_Emp		: "Please input Employee Section.",
					  						Department_Emp	: "Please input Employee Department.",
					  						Ext_Phone		: "Please input Ext Phone.",
					  						Address_NO		: "Please input your address.",
					  						Province		: "Please choose Province. ",
					  						District		: "Please choose District. ",
					  						Sub_District	: "Please choose sub District.",
					  						Zipcode_Emp		: "Please input Zipcode. ",
					  						Sup_Name		: "Please input your supervisor name. ",
					  						Sup_Position	: "Please input your supervisor position. ",
											email			: {
																required: "Please provide a valid email.",
																email: "Format Email : xxxxxxx@aapico.com"
															   },
						  				},
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
				
				//-------------------- Validation Username --------------------
				$('#validation-form-user').validate
				({
					errorElement	: 'div',
					errorClass		: 'help-block',
					focusInvalid	: false,
					ignore			: "",
					rules			:	{
											User_Jus			:	{	required: true	}
										},
					messages		:	{			
											User_Jus		: "Please input Justification for User AD requirement."
					},
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
				
				//-------------------- Validation Email --------------------
				$('#validation-form-Email').validate
				({
					errorElement	: 'div',
					errorClass		: 'help-block',
					focusInvalid	: false,
					ignore			: "",
					rules			:	{
											Email_Jus			:	{	required: true	}
										},
					messages		:	{			
											Email_Jus		: "Please input Justification for E-mail requirement."
					},
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});

				//-------------------- Validation Internet --------------------
				$('#validation-form-Internet').validate
				({
					errorElement	: 'div',
					errorClass		: 'help-block',
					focusInvalid	: false,
					ignore			: "",
					rules			:	{
											INTERNET_LEVEL	: 		{	required: true	},
											Inter_Jus			:	{	required: true	}
										},
			
					messages		:	{			
											INTERNET_LEVEL	: "Please choose Company.",
											Inter_Jus	: "Please input Justification for internet requirement."
						  				},
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
				
				//-------------------- Validation Removable USB --------------------
				$('#validation-form-USB').validate
				({
					errorElement	: 'div',
					errorClass		: 'help-block',
					focusInvalid	: false,
					ignore			: "",
					rules			:	{
											TYPE_REMOVABLE	:	{	required: true	},
											Computer_Name	:	{	required: true	},
											USB_Jus			:	{	required: true	}
										},
					messages		:	{			
											TYPE_REMOVABLE	:	"Please choose type removable.",
											Computer_Name	:	"Please input computer name",
											USB_Jus	:	"Please input Justification for removable requirement."
						  				},

			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
				
				//-------------------- Validation Telephone --------------------
				$('#validation-form-telephone').validate
				({
					errorElement	: 'div',
					errorClass		: 'help-block',
					focusInvalid	: false,
					ignore			: "",
					rules			:	{
											TYPE_TELEPHONE			: 	{	required: true	},
											Telephone_Jus			:	{	required: true	}
										},
			
					messages		:	{			
											TYPE_TELEPHONE	: "Please choose type account code level.",
											Telephone_Jus	: "Please input Justification for account code requirement."
											
						  				},
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
				
				//-------------------- Validation Telephone --------------------
				$('#validation-form-vpn').validate
				({
					errorElement	: 'div',
					errorClass		: 'help-block',
					focusInvalid	: false,
					ignore			: "",
					rules			:	{
											VPN_Jus			:	{	required: true	}
										},
					messages		:	{			
											VPN_Jus		: "Please input Justification for VPN requirement."
					},
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
				
				//-------------------- Validation Agreement --------------------
				$('#validation-form-agreement').validate
				({
					errorElement	: 'div',
					errorClass		: 'help-block',
					focusInvalid	: false,
					ignore			: "",
					rules			:	{
											agree:{	required: true	}
										},
					messages		:	{
											agree: "Please accept our policy"
										},

			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});

				
				
				
			
				
				
				
				
				
				
				
				
				$('#modal-wizard-container').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
				
				
				/**
				$('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				
				$('#mychosen').chosen().on('change', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				*/
				
				$( "#Computer_Name" ).tooltip({
					show: {
						effect: "slideDown",
						delay: 250
					}
				});

				
				
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					$('[class*=select2]').remove();
				});
				
				
				var sampleData = initiateDemoData();//see below


	$('#tree1').ace_tree({
		dataSource: sampleData['dataSource1'],
		multiSelect: true,
		cacheItems: true,
		'open-icon' : 'ace-icon tree-minus',
		'close-icon' : 'ace-icon tree-plus',
		'selectable' : true,
		'selected-icon' : 'ace-icon fa fa-check',
		'unselected-icon' : 'ace-icon fa fa-times',
		loadingHTML : '<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>'
	});
	
	$('#tree2').ace_tree({
		dataSource: sampleData['dataSource2'] ,
		loadingHTML:'<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>',
		'open-icon' : 'ace-icon fa fa-folder-open',
		'close-icon' : 'ace-icon fa fa-folder',
		'selectable' : false,
		multiSelect: false,
		'selected-icon' : null,
		'unselected-icon' : null
	});
	

	
	function initiateDemoData(){

		var dataSource1 = function(options, callback){
			var $data = null
			if(!("text" in options) && !("type" in options)){
				$data = tree_data;//the root tree
				callback({ data: $data });
				return;
			}
			else if("type" in options && options.type == "folder") {
				if("additionalParameters" in options && "children" in options.additionalParameters)
					$data = options.additionalParameters.children || {};
				else $data = {}//no data
			}
			
			if($data != null)//this setTimeout is only for mimicking some random delay
				setTimeout(function(){callback({ data: $data });} , parseInt(Math.random() * 500) + 200);
		}




		var tree_data_2 = {
			/*'pictures' : {text: 'Pictures', type: 'folder', 'icon-class':'red'}	,
			'music' : {text: 'Music', type: 'folder', 'icon-class':'orange'}	,
			'video' : {text: 'Video', type: 'folder', 'icon-class':'blue'}	,
			'documents' : {text: 'Documents', type: 'folder', 'icon-class':'green'}	,
			'backup' : {text: 'Backup', type: 'folder'}	,
			*/
			'documents1' : {text: 'E-mail & User AD', type: 'folder', 'icon-class':'green'}	,
			'documents2' : {text: 'Internet', type: 'folder', 'icon-class':'blue'}	,
			/*'readme' : {text: '<i class="ace-icon fa fa-file-text grey"></i> <a href="#">ReadMe.txt</a>', type: 'item'},
			'manual' : {text: '<i class="ace-icon fa fa-book blue"></i> Manual.html', type: 'item'}
			*/
		}

		tree_data_2['documents1']['additionalParameters'] = {
			'children' : [
				{text: '<i class="ace-icon fa fa-file-text red"></i> <a href="#" Onclick="SC(1)">agreement-en.pdf</a>', type: 'item'},
				{text: '<i class="ace-icon fa fa-file-text grey"></i> <a href="#" Onclick="SC(2)">agreement-th.pdf</a>', type: 'item'}
			]
		}
		tree_data_2['documents2']['additionalParameters'] = {
			'children' : [
				{text: '<i class="ace-icon fa fa-file-text red"></i> <a href="#" Onclick="SC(3)">agreement-en.pdf</a>', type: 'item'},
				{text: '<i class="ace-icon fa fa-file-text grey"></i> <a href="#" Onclick="SC(4)">agreement-th.pdf</a>', type: 'item'}
			]
		}

		var dataSource2 = function(options, callback){
			var $data = null
			if(!("text" in options) && !("type" in options)){
				$data = tree_data_2;//the root tree
				callback({ data: $data });
				return;
			}
			else if("type" in options && options.type == "folder") {
				if("additionalParameters" in options && "children" in options.additionalParameters)
					$data = options.additionalParameters.children || {};
				else $data = {}//no data
			}
			
			if($data != null)//this setTimeout is only for mimicking some random delay
				setTimeout(function(){callback({ data: $data });} , parseInt(Math.random() * 500) + 200);
		}

		
		return {'dataSource1': dataSource1 , 'dataSource2' : dataSource2}
	}


			})
		</script>
        
         <script language="javascript" type="text/javascript">
var pCM;
function getInform(str) {
//alert(str);
	pCM=str;
	//alert(pCM);
  if (str=="") {
    document.getElementById("DivInform").innerHTML="";
	document.getElementById("DivInform").style.display='none';	
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("task-tab").innerHTML=xmlhttp.responseText;
    }
  }
	//document.getElementById("TP").style.display='none';	
  xmlhttp.open("GET","getInform.php?AGR="+str,true);
  xmlhttp.send();
}
function Scompany(str) {
	pCM=str;
	//alert(pCM);
}

</script>
		