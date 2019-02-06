<?php
session_start();
if($_SESSION['sqsTrn']!="OK")
{
	header("location:index.php");
}
include('DB_Configuration.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Training Application</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/datepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="assets/css/colorpicker.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        
        <script src="assets/js/jquery.js"></script> <!-- jQuery -->

  <script src="alert/dist/sweetalert-dev.js"></script>
   <link rel="stylesheet" href="alert/dist/sweetalert.min.js">
  <link rel="stylesheet" href="alert/dist/sweetalert.css">
  
  <!--pagination-->
  <link rel="stylesheet" href="assets/css/pagination.css">

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

    
        
<script type="text/javascript">

	   var HttPCourse = false;
	    var Pagex1;
		var kword1;
	   function AjaxCourse(Pagexs,kword) {
		  Pagex1=Pagexs;
		  kword1=document.getElementById("kword").value;
		  //alert("kword="+kword1);
		  HttPCourse = false;
		  if (window.XMLHttpRequest) { // Mozilla, Safari,...
			 HttPCourse = new XMLHttpRequest();
			 if (HttPCourse.overrideMimeType) {
				HttPCourse.overrideMimeType('text/html');
			 }
		  } else if (window.ActiveXObject) { // IE
			 try {
				HttPCourse = new ActiveXObject("Msxml2.XMLHTTP");
			 } catch (e) {
				try {
				   HttPCourse = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {}
			 }
		  } 
		  if (!HttPCourse) {
			 alert('Cannot create XMLHTTP instance');
			 return false;
		  }	

			var url1 = 'list-course.php';
			var pmeters1 = 'Page='+Pagexs+'&kword='+kword1;
			HttPCourse.open('POST',url1,true);
			HttPCourse.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			HttPCourse.setRequestHeader("Content-length", pmeters1.length);
			HttPCourse.setRequestHeader("Connection", "close");
			HttPCourse.send(pmeters1);		
	
			HttPCourse.onreadystatechange = function()
			{
				 if(HttPCourse.readyState == 4) // Return Request
				  {
					 if(HttPCourse.status == 200)
					  {
				  	 	document.getElementById("display-list-course").innerHTML = HttPCourse.responseText;
					  }
				  }			
			}
	   }
	</script>        
 
 
 <script type="text/javascript">

	   var HttPSEm = false;
	    var PageEm;
		var kwordEM;
	   function AjaxSEmp(Pagee,kworde) {
		  PageEm=Pagee;
		  kwordEM=kworde;
		  HttPSEm = false;
		  if (window.XMLHttpRequest) { // Mozilla, Safari,...
			 HttPSEm = new XMLHttpRequest();
			 if (HttPSEm.overrideMimeType) {
				HttPSEm.overrideMimeType('text/html');
			 }
		  } else if (window.ActiveXObject) { // IE
			 try {
				HttPSEm = new ActiveXObject("Msxml2.XMLHTTP");
			 } catch (e) {
				try {
				   HttPSEm = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {}
			 }
		  } 
		  if (!HttPSEm) {
			 alert('Cannot create XMLHTTP instance');
			 return false;
		  }	

			var urlEm = 'list-trn-emp.php';
			var pEm = 'PageE='+Pagee+'&kwordE='+kwordEM;
			HttPSEm.open('POST',urlEm,true);
			HttPSEm.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			HttPSEm.setRequestHeader("Content-length", pEm.length);
			HttPSEm.setRequestHeader("Connection", "close");
			HttPSEm.send(pEm);		
	
			HttPSEm.onreadystatechange = function()
			{
				 if(HttPSEm.readyState == 4) // Return Request
				  {
					 if(HttPSEm.status == 200)
					  {
				  	 	document.getElementById("display-list-trn-Emp").innerHTML = HttPSEm.responseText;
					  }
				  }			
			}
	   }
	</script>        
        
	</head>

	<body class="no-skin">
		

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse"  style="margin-top:5px;">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                   <!-- <img src="assets/images/logo-Aapico.png" width="40"> -->
                    
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
                        
                       
					</div>
				</div><!-- /.Menu list -->

				<ul class="nav nav-list">
                    <!--
                    <?php
					if($_GET['m']=="dashboard"){
					?>
					<li class="active open hover">
                    <?php }else{ ?>
                    <li class="hover">
                    <?php } ?>
						<a href="main-admin.php?m=dashboard">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>
                    -->
                    <?php
					if($_GET['m']=="course"){
					?>
					<li class="active open hover">
                    <?php }else{ ?>
                    <li class="hover">
                    <?php } ?>
						<a href="main-admin.php?m=course">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Course Management
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
					</li>
                    
                    <?php
					if($_GET['m']=="loguser"){
					?>
					<li class="active open hover">
                    <?php }else{ ?>
                    <li class="hover">
                    <?php } ?>
						<a href="main-admin.php?m=loguser">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text">
								Log Users Training
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
					</li>  

					<?php
					if($_GET['m']=="importemp"){
					?>
					<li class="active open hover">
                    <?php }else{ ?>
                    <li class="hover">
                    <?php } ?>
						<a href="main-admin.php?m=importemp">
							<i class="menu-icon ace-icon fa fa-download"></i>
							<span class="menu-text">
								Import Users Profile
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
					</li>
                    
                   <li class="hover">
						<a href="logout.php">
							<i class="menu-icon fa fa-power-off" style="color:#F00"></i>
							<span class="menu-text" style="color:#F00">
								Log Out
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
					</li>            

				</ul>
				<!-- Menu /.nav-list -->

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
                            
								<!-- PAGE CONTENT BEGINS -->
                               
								<?php
								  if($_GET['m']=="course"){
								 	include('course2.php'); //กลับมาแก้ด้วย
									?>
                                    <script type="text/javascript">
										AjaxCourse(1,'');
									</script>
                                    <?php
								  }
								  else  if($_GET['m']=="dashboard"){
									 // include('dashboard.php');
									 echo "<br><center><font face='Verdana, Geneva, sans-serif' size='3' color='#0066FF'>รออับเดตเวอร์ชั่นถัดไป...</font></center>";
								  }
								  else  if($_GET['m']=="loguser"){
									  include('loguser.php');
								?>
                                    <script type="text/javascript">
										AjaxSEmp(1,'');
									</script>
                                    <?php
								  }
								  else  if($_GET['m']=="importemp"){
									  include('importemp.php');
								?>
                                    <script type="text/javascript">
										//AjaxSEmp(1,'');
									</script>
                                    <?php
								  }
								 ?>
                                <!--
                                <script type="text/javascript">
								AjaxCourse();
								</script>
								-->
								<!-- PAGE CONTENT ENDS -->
                                
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Training</span>
							Application &copy; 2015
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
     

        

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

		<script src="assets/js/bootbox.js"></script>
		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.tableTools.min.js"></script>
		<script src="assets/js/dataTables.colVis.min.js"></script>


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
		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>


		<!-- inline scripts related to this page -->
		<script type="text/javascript">

			jQuery(function($) {

			$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				if(!ace.vars['touch']) {
					$('.chosen-select').chosen({allow_single_deselect:true}); 
					//resize the chosen on window resize
			
					$(window)
					.off('resize.chosen')
					.on('resize.chosen', function() {
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					}).trigger('resize.chosen');
					//resize chosen on sidebar collapse/expand
					$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
						if(event_name != 'sidebar_collapsed') return;
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					});
			
			
					$('#chosen-multiple-style .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
						 else $('#form-field-select-4').removeClass('tag-input-style');
					});
				}
				
					$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
				
				
				$('#id-input-file-1 , #id-input-file-2, #id-input-file-3').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Browse',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				
				$('input[name=date-range-picker1]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				}).prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('input[name=date-range-picker2]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				}).prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('input[name=date-range-picker3]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				}).prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('input[name=date-range-picker4]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				}).prev().on(ace.click_event, function(){
					$(this).next().focus();
				});				
			
				
				$('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$(".knob").knob();
				///////////
				$(document).one('ajaxloadstart.page', function(e) {
					$.gritter.removeAll();
					$('.modal').modal('hide');
				});
			
				$(".knob").knob();
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				//$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				$('[data-rel=tooltip]').tooltip();
				$('[data-rel=popover]').popover({html:true});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			})
		</script>
		
<!-- importemp.php -->	
<script type="text/JavaScript">
function ExecuteOnSubmit()
{
	var res = confirm("Are you sure you want to submit data ?");
	if(res)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>    
	
<script type="text/JavaScript">
//form when insert finished to show alert and save
  jQuery(function($) {
	$("form#frmUpload").submit(function(event){
		event.preventDefault();
		//grab all form data
		var formData1 = new FormData($(this)[0]);
			
		$.ajax({
			url: "Upload-User-Profile.php",
			type: 'POST',
			data: formData1,
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			success: function (returndata1) {
				
			//alert(returndata1);
		if(returndata1==1)
		{
			//alert("บันทึกข้อมูลเรียบร้อยแล้ว");
			swal("Successfully!", "เพิ่มข้อมูลสำเร็จ", "success");
			
		}
		else if(returndata1==0)
		{
			//alert("บันทึกข้อมูลเรียบร้อยแล้ว");
			swal("Error!", "เพิ่มข้อมูลล้มเหลว", "error");
			
		}
		$("#frmUpload")[0].reset();
	}
  });
 
  return false;
	});
});
</script> 
<!-- importemp.php -->	   

 
	</body>
</html>
