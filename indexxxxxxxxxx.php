<?php
ob_start();
@session_start();

if(isset($_GET["Menu"]))
{ $Menu = $_GET["Menu"]; }
else{ $Menu = ""; }



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>E-Requisition Online</title>

		<meta name="description" content="E-Requisition Online" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/select2.min.css" />
		
		<!-- slide list it css -->
		<link rel="stylesheet" href="assets/css/slide-list-it.css" />
        
        
        		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/datepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="assets/css/colorpicker.min.css" />
		
		<!-- text fonts -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		
		<?php
		if( $Menu =="Dashboard")
		{
		?>
			<!-- Theme style -->
	    	<link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
	    	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	    	<link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
		<?Php
		}else{
		?>
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<?php
		}
		?>
		
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
        
        <style type="text/css">
		#Vpdf {
			width: 200px;
			height: 50px;
			margin: 2em auto;
		}

		#Vpdf object {
  			display: block;
   			border: solid 1px #666;
		}
		.cssTH {
			font-family:Verdana, Geneva, sans-serif;
			font-size:14px;
			font-weight:normal;
			padding-left:5px;
		}
		.cssTH1 {
			font-family:Verdana, Geneva, sans-serif;
			font-size:14px;
			font-weight:normal;
			padding-left:0px;
		}
</style>
        <script type="text/javascript">
			var Emp_ID=null;
			var AGR_COMPANY=null;
			var Full_Name_Thai=null;
			var Full_Name_Eng=null;
			var Position_Emp=null;
			var Section_Emp=null;
			var Department_Emp=null;
			var Ext_Phone=null;			
			var Address_NO=null;
			var Province=null;
			var District=null;
			var Sub_District=null;
			var Zipcode_Emp=null;
			var Home_Phone=null;
			var Mobile_phone=null;
			var Sup_Name=null;
			var Sup_Position=null;
			var email=null;
			var U_Just=null;
			var E_Just=null;
			var INTERNET_LEVEL=null;
			var I_Just=null;
			
			var Chk_RSelect=null;
			function PreviewI()
			{
				/* User Profile */
				Emp_ID=document.getElementById('Emp_ID').value;
				AGR_COMPANY=document.getElementById('AGR_COMPANY').value;
				Full_Name_Thai=document.getElementById('Full_Name_Thai').value;
				Full_Name_Eng=document.getElementById('Full_Name_Eng').value;
				Position_Emp=document.getElementById('Position_Emp').value;
				Section_Emp=document.getElementById('Section_Emp').value;
				Department_Emp=document.getElementById('Department_Emp').value;
				Ext_Phone=document.getElementById('Ext_Phone').value;
				Address_NO=document.getElementById('Address_NO').value;
				Province=document.getElementById('Province').value;
				District=document.getElementById('District').value;
				Sub_District=document.getElementById('Sub_District').value;
				Zipcode_Emp=document.getElementById('Zipcode_Emp').value;
				Home_Phone=document.getElementById('Home_Phone').value;
				Mobile_phone=document.getElementById('Mobile_phone').value;
				Sup_Name=document.getElementById('Sup_Name').value;
				Sup_Position=document.getElementById('Sup_Position').value;
				email=document.getElementById('email').value;
				

				document.getElementById('DEmp_ID').innerHTML=Emp_ID;
				document.getElementById('DAGR_COMPANY').innerHTML=AGR_COMPANY;
				document.getElementById('DFull_Name_Thai').innerHTML=Full_Name_Thai;
				document.getElementById('DFull_Name_Eng').innerHTML=Full_Name_Eng;
				document.getElementById('DPosition_Emp').innerHTML=Position_Emp;
				document.getElementById('DSection_Emp').innerHTML=Section_Emp;
				document.getElementById('DDepartment_Emp').innerHTML=Department_Emp;
				document.getElementById('DExt_Phone').innerHTML=Ext_Phone;
				document.getElementById('DAddress_NO').innerHTML=Address_NO;
				document.getElementById('DProvince').innerHTML=Province;
				document.getElementById('DDistrict').innerHTML=District;
				document.getElementById('DSub_District').innerHTML=Sub_District;
				document.getElementById('DZipcode_Emp').innerHTML=Zipcode_Emp;
				document.getElementById('DHome_Phone').innerHTML=Home_Phone;
				document.getElementById('DMobile_phone').innerHTML=Mobile_phone;
				document.getElementById('DSup_Name').innerHTML=Sup_Name;
				document.getElementById('DHome_Phone').innerHTML=Home_Phone;
				document.getElementById('DSup_Position').innerHTML=Sup_Position;		
				
				/* USER AD */
				U_Just=document.getElementById('U_Just').value;
				document.getElementById('DU_Just').innerHTML=U_Just;		
																																																												
			}
			
			
		</script>
        <script type="text/javascript">
			var Vlue;
			function SC(x)
			{
				switch(x){
					case 1:
						Vlue='<object data="agreement/pdf/agr-en.pdf" type="application/pdf" style="width:100%; height:550px;"></object>';
					break;
					case 2:
						Vlue='<object data="agreement/pdf/agr-th.pdf" type="application/pdf" style="width:100%; height:550px;"></object>';
					break;
					default:
						Vlue='xxxxxxxxxxxxxxxxxxxxxxx';
				}
				document.getElementById('newsContent').style.display = 'block';
				document.getElementById('newsContent').innerHTML=Vlue;
			}
		</script>
	
	
	<script type="text/javascript">

	function Disabled_List_IT()
	{
		document.getElementById('btnSubmitLitITs').disabled = true;
	}
		
	</script>
	
	<script type="text/javascript">
		var USER		=	false;
		var REMAIL		=	false;
		var INTERNET	=	false;
		var PRINTER		=	false;
		var REUSB		=	false;
		var PHONE		=	false;
		var VPN			=	false;
		var EmpType;
	function ChkListIT()
	{
		//alert(EmpType);
		if(EmpType=="New")
	  	{
			USER		=	document.getElementById('CHK_IT1x').checked;			
	  	}else
		{
			USER		=	document.getElementById('CHK_IT1').checked;
		}
		//alert(USER);
		REMAIL		=	document.getElementById('CHK_IT2').checked;
		INTERNET	=	document.getElementById('CHK_IT3').checked;
		PRINTER		=	document.getElementById('CHK_IT4').checked;
		REUSB		=	document.getElementById('CHK_IT5').checked;
		PHONE		=	document.getElementById('CHK_IT6').checked;
		VPN			=	document.getElementById('CHK_IT7').checked;
		
		if( (USER==true) || (INTERNET==true) || (PRINTER==true) || (REUSB==true) || (PHONE==true) || (VPN==true) || (REMAIL==true))
		{
			document.getElementById('btnSubmitLitITs').disabled = false;
		}else
		{
			document.getElementById('btnSubmitLitITs').disabled = true;
		}
	}

	</script>
    
    
    
	</head>

<!--disListChk();-->
	<body class="no-skin" onload="Disabled_List_IT();disListChk();">

	<!--------------- Include Menu Top Bar --------------------------------->
	<?php		include('Menu-Bar-Top.php');  ?>
	
	<!--------------- Include Open tag main-container ---------------------->
	<div class="main-container" id="main-container">

	<!--------------- Include Menu Left Bar -------------------------------->
	<?php	include('Menu-Bar-Left.php'); 	?>
	
	<!--------------- Include Page ----------------------------------------->	
	<?php
		if($Menu =="" or $Menu =="IT-Requisition")
		{
			include('Form-it-list-requisition.php');
		}
		
		if($Menu =="" or $Menu =="IT-Requisition1")
		{
			include('Form-it-list-requisition1.php');
		}
		
		if($Menu =="Home")
		{
			include('Home.php');	
		}
		
		if($Menu =="IT-Flow-Requisition")
		{
			include('Form-it-requisition.php');
		}
		
		if($Menu =="IT-Preview")
		{
			include('IT-Preview.php');
		}

		if($Menu =="Oracle-Requisition")
		{
			include('Home.php');	
		}
		
		if($Menu =="Search-Requisition")
		{
			include('Search-Requisition.php');	
		}
		
		if($Menu =="Dashboard")
		{
			include('dashboard.php');	
		}


	?>

	
	
	
	<!--------------- Include Footer Bar ------------------------------------->
	<?php include('Footer.php'); ?>
	
	<!--------------- Include Close tag main-container ---------------------->
	</div><!-- /.main-container -->
	</body>
</html>
