<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-pencil-square-o home-icon"></i>
					<a href="#">Form Requisition</a>
				</li>
				<li class="active">IT Preview</li>
			</ul><!-- /.breadcrumb -->
		</div>
		<div class="page-content">	
		<!--------- Internet Level A Description ---------->
			<div class="row">
				<div class="col-xs-12">
					
					<?php
					include("DB_Configuration.php");			
					$EmpID		=	$_POST['Emp_ID_AG'];
					//------------------ TOP 1 REQ_ID ---------------------------------
					$STR_REQ	=	"SELECT TOP 1 * FROM TBL_REQ_ID WHERE REQ_EMP_ID ='$EmpID' order by REQ_ID desc";	
					$QUERY_REQ	=	mssql_query($STR_REQ);
					$RE_REQ		=	mssql_fetch_array($QUERY_REQ);
					$REQ_ID		=	$RE_REQ['REQ_ID'];
					?>
					<center>
						<object data="pdf-it-requisition.php?empid=<?php echo $EmpID;?>&req_id=<?php echo $REQ_ID; ?>" type="application/pdf" style="width:95%; height:800px;"></object>
					</center>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->
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


			
