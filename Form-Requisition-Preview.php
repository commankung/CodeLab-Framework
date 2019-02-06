<div class="step-pane" data-step="<?php echo $Step_Page; ?>">

	<form id="Form_save" name="Form_save" action="save-it-requisition.php" >
	<input type="hidden" value="<?php echo $TXTLIST; ?>" id="PTXTLIST" name="PTXTLIST">
		

		<!---------- Employee Information -------------------->
		<h3 class="header blue lighter smaller">
			<i class="ace-icon fa fa-building-o smaller-90"></i>
			Employee Information
		</h3>
		<dl  class="dl-horizontal" style="font-size:14px">
			<!------- Employee ID --------------->
			<dt>Employee ID :</dt>
			<dd id="DEmp_ID"></dd>
				
			<!------- Company --------------->
			<dt>Company :</dt>
			<dd id="DAGR_COMPANY"></dd>
				
			<!------- Name Thai --------------->
			<dt>Full Name (THAI) :</dt>
			<dd id="DFull_Name_Thai" class="cssTH1"></dd>
				
			<!------- Name Eng --------------->
			<dt>Full Name (ENG) :</dt>
			<dd id="DFull_Name_Eng"></dd>
				
			<!------- Position --------------->
			<dt>Position :</dt>
			<dd id="DPosition_Emp"  class="cssTH1"></dd>
				
			<!------- Section --------------->
			<dt>Section :</dt>
			<dd id="DSection_Emp"  class="cssTH1"></dd>
				
			<!------- Department --------------->
			<dt>Department :</dt>
			<dd id="DDepartment_Emp"  class="cssTH1"></dd>
				
			<!------- Ext --------------->
			<dt>Ext :</dt>
			<dd id="DExt_Phone"></dd>
		</dl>
			<!---------------- Input Employee Profile ----------------->
			<input	type="hidden"	id="TDEmp_ID" 			name="TDEmp_ID" 		>
			<input	type="hidden"	id="TDAGR_COMPANY"		name="TDAGR_COMPANY"	>
			<input	type="hidden"	id="TDFull_Name_Thai"	name="TDFull_Name_Thai"	>
			<input	type="hidden"	id="TDFull_Name_Eng"	name="TDFull_Name_Eng"	>
			<input	type="hidden"	id="TDPosition_Emp"		name="TDPosition_Emp"	>
			<input	type="hidden"	id="TDSection_Emp"		name="TDSection_Emp"	>
			<input	type="hidden"	id="TDDepartment_Emp"	name="TDDepartment_Emp"	>
			<input	type="hidden"	id="TDExt_Phone"		name="TDExt_Phone"		>
			
		<!---------- Address Label ---------->
		<h3 class="header blue lighter smaller">
			<i class="ace-icon fa fa-home smaller-90"></i>
			Address
		</h3>
		<dl  class="dl-horizontal" style="font-size:14px">
			<!------- Address --------------->
			<dt>Address :</dt>
			<dd id="DAddress_NO" class="cssTH1"></dd>
				
			<!------- Sub District --------------->
			<dt>Sub District :</dt>
			<dd id="DSub_District" class="cssTH1"></dd>
				
			<!------- District  --------------->
			<dt>District :</dt>
			<dd id="DDistrict" class="cssTH1"></dd>
			
			<!------- Province  --------------->
			<dt>Province :</dt>
			<dd id="DProvince" class="cssTH1"></dd>
				
			<!------- Zipcode --------------->
			<dt>Zipcode :</dt>
			<dd id="DZipcode_Emp"></dd>
				
			<!------- Telephone --------------->
			<dt>Telephone :</dt>
			<dd id="DHome_Phone"></dd>
				
			<!------- Mobile Phone --------------->
			<dt>Mobile Phone :</dt>
			<dd id="DMobile_phone"></dd>			
		</dl>
		
			<!---------------- Input Employee Adrees ----------------->
			<input	type="hidden"	id="TDAddress_NO"		name="TDAddress_NO"		>
			<input	type="hidden"	id="TDSub_District"		name="TDSub_District"	>
			<input	type="hidden"	id="TDDistrict"			name="TDDistrict"		>
			<input	type="hidden"	id="TDProvince"			name="TDProvince"		>
			<input	type="hidden"	id="TDZipcode_Emp"		name="TDZipcode_Emp"	>
			<input	type="hidden"	id="TDHome_Phone"		name="TDHome_Phone"		>
			<input	type="hidden"	id="TDMobile_phone"		name="TDDMobile_phone"	>

		
		<!---------- Supervisor ---------->
		<h3 class="header blue lighter smaller">
			<i class="ace-icon fa fa-users smaller-90"></i>
			Supervisor
		</h3>
		<dl  class="dl-horizontal" style="font-size:14px">
			<!------- Address --------------->
			<dt>Supervisor name :</dt>
			<dd id="DSup_Name" class="cssTH1"></dd>
				
			<!------- Sub District --------------->
			<dt>Supervisor Position :</dt>
			<dd id="DSup_Position"  class="cssTH1">IT Manager</dd>
				
			<!------- Email --------------->
			<dt>Email Address :</dt>
			<dd id="Demail"></dd>	
		</dl>
		
			<!---------------- Input Supervisor ----------------->
			<input	type="hidden"		id="TDSup_Name"			name="TDSup_Name"		>
			<input	type="hidden"		id="TDSup_Position"		name="TDSup_Position"	>
			<input	type="hidden"		id="TDemail"			name="TDemail"			>
		
		<!---------- Username Requisition ---------->
		<?php 
			if(in_array("USER",$_POST['CHK_IT']) == true)
			{ 
		?>
				<h3 class="header blue lighter smaller">
					<i class="ace-icon fa fa-user smaller-90"></i>
					Username Logon Requisition
				</h3>
				<dl class="dl-horizontal" style="font-size:14px">
				<!------- Justification  Username --------------->
					<dt>Justification :</dt>
					<dd id="Juser" class="cssTH1"></dd>
				</dl>
				
				<!---------------- Input Username Requisition ----------------->
				<input	type="hidden"		id="TJuser"		name="TJuser"		>
				
		<?php
			}
		?>
		
		<!---------- Email ---------->
		<?php
			if(in_array("EMAIL",$_POST['CHK_IT']) == true)
			{ 
		?>
				<h3 class="header blue lighter smaller">
					<i class="ace-icon fa fa-envelope-o smaller-90"></i>
					Electronic Mail (E-Mail) Requisition
				</h3>
				<dl class="dl-horizontal" style="font-size:14px">
					<!------- Justification  Email --------------->
					<dt>Justification :</dt>
					<dd id="Jemail" class="cssTH1"></dd>
				</dl>
				
				<!---------------- Input Email Requisition ----------------->
				<input type="hidden"		id="TJemail"	name="TJemail">
		<?php
			}
		?>
		
		<!---------- Printer ---------->
		<?php
			if(in_array("Printer",$_POST['CHK_IT']) == true)
			{ 
		?>
				<h3 class="header blue lighter smaller">
					<i class="ace-icon fa fa-print smaller-90"></i>
					Printing Requisition
				</h3>
				<dl id="printer_infor" class="dl-horizontal" style="font-family:Verdana, Geneva, sans-serif;
			font-size:14px;
			font-weight:normal;
			padding-left:0px;">
					<!------- Justification  Email --------------->
				</dl>
				
				<!---------------- Input Email Requisition ----------------->
				<input type="hidden"		id="TMprint"	name="TMprint">
				<input type="hidden"		id="TTprint"	name="TTprint">
				<input type="hidden"		id="TJprint"	name="TJprint">
				<input type="hidden"		id="TDprint"	name="TDprint">

		<?php
			}
		?>

		
		<!---------- Internet Accessibility Level ---------->
		<?php
			if(in_array("Internet",$_POST['CHK_IT']) == true)
			{ 
		?>
				<h3 class="header blue lighter smaller">
					<i class="ace-icon fa fa-laptop smaller-90"></i>
					Internet Accessibility Level Requisition
				</h3>
				<dl class="dl-horizontal" style="font-size:14px">
					<!------- Internet Level --------------->
					<dt>Internet Level :</dt>
					<dd id="DINTERNET_LEVEL"></dd>
					
					<!------- Justification   Internet Level --------------->
					<dt>Justification :</dt>
					<dd id="Jinternet" class="cssTH1"></dd>
				</dl>
				
				<!---------------- Input Internet Accessibility Level Requisition ----------------->
				<input	type="hidden"		id="TDINTERNET_LEVEL"		name="TDINTERNET_LEVEL"		>
				<input	type="hidden"		id="TJinternet"				name="TJinternet"			>
		<?php
			}
		?>
		
		<!---------- Removable Media Requisition ---------->
		<?php
			if(in_array("REUSB",$_POST['CHK_IT']) == true)
			{ 
		?>
				<h3 class="header blue lighter smaller">
					<i class="ace-icon fa fa-hdd-o smaller-90"></i>
					Removable Media Requisition Requisition
				</h3>
				<dl class="dl-horizontal" style="font-size:14px">
					<!------- Removable Type --------------->
					<dt>Removable Type :</dt>
					<dd id="DTYPE_REMOVABLE"></dd>
					
					<!------- Computer Name --------------->
					<dt>Computer Name :</dt>
					<dd id="InComputerName"></dd>
					
					<!------- Justification Removable Type--------------->
					<dt>Justification :</dt>
					<dd id="Jusb" class="cssTH1"></dd>
				</dl>
				
				<!---------------- Input Removable Media Requisition ----------------->
				<input	type="hidden"		id="TDTYPE_REMOVABLE"		name="TDTYPE_REMOVABLE"	>
				<input	type="hidden"		id="TInComputerName"		name="TInComputerName"	>
				<input	type="hidden"		id="TJusb"					name="TJusb"			>
		<?php
			}
		?>
		
		<!---------- PassCode Level ---------->
		<?php
			if(in_array("Telephone",$_POST['CHK_IT']) == true)
			{ 
		?>
				<h3 class="header blue lighter smaller">
					<i class="ace-icon fa fa-phone smaller-90"></i>
					Account Code Level Request 
				</h3>
				<dl class="dl-horizontal" style="font-size:14px">
					<!------- Removable Type --------------->
					<dt>Account Code Level :</dt>
					<dd id="DTYPE_TELEPHONE"></dd>
								
					<!------- Justification Passcode--------------->
					<dt>Justification :</dt>
					<dd id="Jtelephone" class="cssTH1"></dd>
				</dl>
				
				<!---------------- Input Account Code Requisition ----------------->
				<input	type="hidden"		id="TDTYPE_TELEPHONE"		name="TDTYPE_TELEPHONE"	>
				<input	type="hidden"		id="TJtelephone"			name="TJtelephone"		>
				
		<?php
			}
		?>
		
		<!---------- VPN ---------->
		<?php
			if(in_array("VPN",$_POST['CHK_IT']) == true)
			{ 
		?>
		<h3 class="header blue lighter smaller">
			<i class="ace-icon fa fa-globe smaller-90"></i>
			Virtual Private Network (VPN) Access Requisition
		</h3>
		<dl class="dl-horizontal" style="font-size:14px">						
			<!------- Justification VPN--------------->
			<dt>Justification :</dt>
			<dd id="Jvpn" class="cssTH1"></dd>
			
			<!---------------- Input VPN Requisition ----------------->
			<input	type="hidden"		id="TJvpn"		name="TJvpn"		>
		</dl>
		<?php
			}
		?>
	</form>
</div>