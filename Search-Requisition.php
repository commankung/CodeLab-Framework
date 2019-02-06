<div class="main-content" onload="">
	<div class="main-content-inner">
		<div class="breadcrumbs" id="breadcrumbs">
			<script type="text/javascript">
				try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-search home-icon"></i>
						<a href="#">Search</a>
					</li>
				<li class="active">Serch Requisition</li>
			</ul><!-- /.breadcrumb -->
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<div class="widget-box">
						<div class="widget-header widget-header-blue widget-header-flat">
							<h4 class="widget-title bolder">ค้นหาคำขอใช้ทรัพยากรด้านเทคโนโลยีสารสนเทศ / Search Information Technology Resource Requisition Form</h4>
						</div>
						<div class="widget-body">
							<div class="widget-main">
								<form class="form-search">
									<div class="row">
										<div class="col-xs-12 col-sm-4"></div>
										<div class="col-xs-12 col-sm-4">
                                        
                                        <!--
                                        	<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-calendar bigger-110"></i>
												</span>
												<input class="form-control" type="text" name="date-range-picker" id="date_range" />
											</div>
                                        
                                            &nbsp;&nbsp;
                                            -->
											<div class="input-group" style="padding-top:15px;">

												<span class="input-group-addon">
													<i class="ace-icon fa fa-credit-card green"></i>
												</span>
												<input type="text" class="form-control search-query" id="SEMP_ID" name="SEMP_ID" placeholder="Employee ID" />
												<span class="input-group-btn">
													<button type="button" class="btn btn-primary btn-sm" id="btnSearch">
														<span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
														Search
													</button>
												</span>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4">
										</div>
									</div>
								</form>
							</div><!-- /.widget-main -->
						</div><!-- /.widget-body -->
					</div>
					<br>
				</div><!-- /.col -->
				
                <!-- Display Data -->
                <div id="disall" class="col-xs-12" align="center"></div>
                
                
				<!--<object id="REF_PDF"   type="application/pdf" style="width:100%; height:585px;"></object>-->
				
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
	<script type="text/javascript">
	$( document ).ready(function() {
    	//$("#SPDF").load('Show-search-pdf.php');
		$("#disall").load('Show-all.php');	
		
	});
	jQuery(function($) 
	{
		 $("#btnSearch").click(function(){
			// alert($('#date_range').val().split(' ').join(''));
		 	//$("#disall").load('Show-all.php?empid='+$('#SEMP_ID').val()+'&dtr='+$('#date_range').val().split(' ').join(''));
			$("#disall").load('Show-all.php?empid='+$('#SEMP_ID').val());
		 });	
		 
		 //to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
		$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
		 
	});
	//$("#SPDF").load('Show-search-pdf.php');
	</script>