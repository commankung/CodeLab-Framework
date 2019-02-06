<?php

include('DB_Configuration.php');

//-------------- List IT Function ------------------
if(isset($_POST["PTXTLIST"]))
{ $PTXTLIST = $_POST["PTXTLIST"]; }
else{ $PTXTLIST = ""; }

$ArrayIT	=	explode("/",$PTXTLIST);

//--------------- Employee Profile -----------------
if(isset($_POST["TDEmp_ID"]))
{ $TDEmp_ID = $_POST["TDEmp_ID"]; }
else{ $TDEmp_ID = ""; }

if(isset($_POST["TDAGR_COMPANY"]))
{ $TDAGR_COMPANY = $_POST["TDAGR_COMPANY"]; }
else{ $TDAGR_COMPANY = ""; }

if(isset($_POST["TDFull_Name_Thai"]))
{ $TDFull_Name_Thai = iconv("utf-8","tis-620",$_POST["TDFull_Name_Thai"]); }
else{ $TDFull_Name_Thai = ""; }

if(isset($_POST["TDFull_Name_Eng"]))
{ $TDFull_Name_Eng = $_POST["TDFull_Name_Eng"]; }
else{ $TDFull_Name_Eng = ""; }

if(isset($_POST["TDPosition_Emp"]))
{ $TDPosition_Emp = iconv("utf-8","tis-620",$_POST["TDPosition_Emp"]); }
else{ $TDPosition_Emp = ""; }

if(isset($_POST["TDSection_Emp"]))
{ $TDSection_Emp = iconv("utf-8","tis-620",$_POST["TDSection_Emp"]); }
else{ $TDSection_Emp = ""; }

if(isset($_POST["TDDepartment_Emp"]))
{ $TDDepartment_Emp = iconv("utf-8","tis-620",$_POST["TDDepartment_Emp"]); }
else{ $TDDepartment_Emp = ""; }

if(isset($_POST["TDExt_Phone"]))
{ $TDExt_Phone = $_POST["TDExt_Phone"]; }
else{ $TDExt_Phone = ""; }

// ------------- Address No ----------------------
if(isset($_POST["TDAddress_NO"]))
{ $TDAddress_NO = iconv("utf-8","tis-620",$_POST["TDAddress_NO"]); }
else{ $TDAddress_NO = ""; }

if(isset($_POST["TDSub_District"]))
{ $TDSub_District = iconv("utf-8","tis-620",$_POST["TDSub_District"]); }
else{ $TDSub_District = ""; }

if(isset($_POST["TDDistrict"]))
{ $TDDistrict = iconv("utf-8","tis-620",$_POST["TDDistrict"]); }
else{ $TDDistrict = ""; }

if(isset($_POST["TDProvince"]))
{ $TDProvince = iconv("utf-8","tis-620",$_POST["TDProvince"]); }
else{ $TDProvince = ""; }

if(isset($_POST["TDZipcode_Emp"]))
{ $TDZipcode_Emp= $_POST["TDZipcode_Emp"]; }
else{ $TDZipcode_Emp= ""; }

if(isset($_POST["TDHome_Phone"]))
{ $TDHome_Phone= $_POST["TDHome_Phone"]; }
else{ $TDHome_Phone= ""; }

if(isset($_POST["TDDMobile_phone"]))
{ $TDDMobile_phone = $_POST["TDDMobile_phone"]; }
else{ $TDDMobile_phone = ""; }

// ------------- Supervisor ----------------------
if(isset($_POST["TDSup_Name"]))
{ $TDSup_Name = iconv("utf-8","tis-620",$_POST["TDSup_Name"]); }
else{ $TDSup_Name = ""; }

if(isset($_POST["TDSup_Position"]))
{ $TDSup_Position= iconv("utf-8","tis-620",$_POST["TDSup_Position"]); }
else{ $TDSup_Position= ""; }

if(isset($_POST["TDemail"]))
{ $TDemail= $_POST["TDemail"]; }
else{ $TDemail= ""; }

function generateREQID()
{
		//SO mean is SHIP ORDER
		mssql_connect("10.10.10.105","dev","dev@agrdb01"); //AGRDB01
		mssql_select_db("EFORM");
		$YM					=	date('ym'); // $YM mean Year+Month : 1503
		$STR_REQ_ID			=	"SELECT TOP 1 REQ_ID FROM TBL_REQ_ID ORDER BY REQ_ID DESC ";
		$Query_REQ_ID		=	mssql_query($STR_REQ_ID);
		$Result_REQ_ID		=	mssql_fetch_array($Query_REQ_ID);
		if(mssql_num_rows($Query_REQ_ID) < 1)
		{
			$REQ_ID	=	"RF-".$YM."0001";
		}else{
			
			$YM_REQ		=	substr($Result_REQ_ID['REQ_ID'],3,4);
			$RUN_REQ	=	substr($Result_REQ_ID['REQ_ID'],7,4);
			
			if( $YM_REQ == $YM)
			{				
				$REQ_ID_Number	=	"RF-".$YM.Count_REQ_ID($RUN_REQ+1);
			}else if( $YM_REQ != $YM) {
				$REQ_ID_Number	=	"RF-".$YM."0001";
			}
		}
		return $REQ_ID_Number;
}

function Count_REQ_ID($REQ_Number)
{
		if(strlen($REQ_Number) == 1)
		{
			return "000".$REQ_Number;
		}else if(strlen($REQ_Number) == 2)
		{
			return "00".$REQ_Number;
		}else if(strlen($REQ_Number) == 3)
		{
			return "0".$REQ_Number;
		}else if(strlen($REQ_Number) == 4)
		{
			return $REQ_Number;
		}
}



$ID_REQ	=	generateREQID(); // Generate REQ ID.
if( strlen($ID_REQ) == 0)
{ $ID_REQ	=	"RF-".date('ym')."0001"; }
else{ $ID_REQ	=	generateREQID();  }
$Today	=	date('d/m/y');
$Time	=	date('H:i');

$STR_SELECT_PROFILE		=	"SELECT * FROM TBL_MASTER_EMP_PROFILE WHERE EMP_ID='$TDEmp_ID'	";
$QUERY_SELECT_PROFILE	=	MSSQL_QUERY($STR_SELECT_PROFILE);
if(mssql_num_rows($QUERY_SELECT_PROFILE) < 1)
{
	$STR_PROFILE	 =	"INSERT INTO TBL_MASTER_EMP_PROFILE (EMP_ID,COMPANY_EMP,NAME_TH,NAME_EN,POSITION,";
	$STR_PROFILE	.=	"SECTION,DEPT,EXT_NUMBER,ADDRESS,TAMBOL,DISTRICT,PROVINCE,ZIPCODE,TEL,MOBILE,";
	$STR_PROFILE	.=	"SUP_NAME,SUP_POSITION,SUP_EMAIL) VALUES";
	$STR_PROFILE	.=	"('$TDEmp_ID','$TDAGR_COMPANY','$TDFull_Name_Thai','$TDFull_Name_Eng',";
	$STR_PROFILE	.=	"'$TDPosition_Emp','$TDSection_Emp','$TDDepartment_Emp','$TDExt_Phone',";
	$STR_PROFILE	.=	"'$TDAddress_NO','$TDSub_District','$TDDistrict','$TDProvince','$TDZipcode_Emp',";
	$STR_PROFILE	.=	"'$TDHome_Phone','$TDDMobile_phone','$TDSup_Name','$TDSup_Position','$TDemail')";
	
	$QUERY_PROFILE	 =	mssql_query($STR_PROFILE);
	
	if($QUERY_PROFILE)
	{
		$STR_REQ_ID		=	"INSERT INTO TBL_REQ_ID VALUES('$ID_REQ','$TDEmp_ID','$Today','$Time')";
		$QUERY_REQ_ID	=	mssql_query($STR_REQ_ID);
		if($QUERY_REQ_ID)
		{
			echo $PTXTLIST;;
		}else
		{
			echo "Fail REQ ID";
		}	
	}else{
		//echo "Fail";
	}
}else if(mssql_num_rows($QUERY_SELECT_PROFILE) > 0)
{
	$UP_PROFILE		 =	"UPDATE TBL_MASTER_EMP_PROFILE SET "; 
	$UP_PROFILE		.=	"COMPANY_EMP ='$TDAGR_COMPANY',NAME_TH ='$TDFull_Name_Thai',";			
	$UP_PROFILE		.=	"NAME_EN ='$TDFull_Name_Eng',POSITION ='$TDPosition_Emp', ";
	$UP_PROFILE		.=	"SECTION ='$TDSection_Emp',DEPT ='$TDDepartment_Emp',";
	$UP_PROFILE		.=	"EXT_NUMBER ='$TDExt_Phone',ADDRESS ='$TDAddress_NO',";
	$UP_PROFILE		.=	"TAMBOL ='$TDSub_District',DISTRICT ='$TDDistrict',";
	$UP_PROFILE		.=	"PROVINCE ='$TDProvince',ZIPCODE ='$TDZipcode_Emp',";
	$UP_PROFILE		.=	"TEL ='$TDHome_Phone',MOBILE ='$TDDMobile_phone',";
	$UP_PROFILE		.=	"SUP_NAME ='$TDSup_Name',SUP_POSITION ='$TDSup_Position',";
	$UP_PROFILE		.=	"SUP_EMAIL ='$TDemail' WHERE EMP_ID ='$TDEmp_ID'";
	
	$QUERY_UP_PROFILE	=	mssql_query($UP_PROFILE);
	
	if($QUERY_UP_PROFILE)
	{
		$STR_REQ_ID		=	"INSERT INTO TBL_REQ_ID VALUES('$ID_REQ','$TDEmp_ID','$Today','$Time')";
		$QUERY_REQ_ID	=	mssql_query($STR_REQ_ID);
		if($QUERY_REQ_ID)
		{
			echo $PTXTLIST;
		}else
		{
			echo "Fail REQ ID";
		}
	}
}


if(in_array("USER",$ArrayIT) == true)
{
	
	if(isset($_POST["TJuser"]))
	{ $TJuser= iconv("utf-8","tis-620",$_POST["TJuser"]); }
	else{ $TJuser= ""; }
	
	$STR_USER	 	 =	"INSERT INTO TBL_REQ_AD (EMP_ID,JUSTIFICATION,REQ_ID,STATUS,REQ_DATE) VALUES ";
	$STR_USER		.=	"('$TDEmp_ID','$TJuser','$ID_REQ','NO','".date('d-m-Y')."')";
	$QUERY_USER		 =	mssql_query($STR_USER);
	
}

if(in_array("EMAIL",$ArrayIT) == true)
{
	if(isset($_POST["TJemail"]))
	{ $TJemail= iconv("utf-8","tis-620",$_POST["TJemail"]); }
	else{ $TJemail= ""; }
	
	$STR_EMAIL	 	 =	"INSERT INTO TBL_REQ_EMAIL (EMP_ID,JUSTIFICATION,REQ_ID,STATUS,REQ_DATE) VALUES ";
	$STR_EMAIL		.=	"('$TDEmp_ID','$TJemail','$ID_REQ','NO','".date('d-m-Y')."')";
	$QUERY_EMAIL	 =	mssql_query($STR_EMAIL);
}

if(in_array("Internet",$ArrayIT) == true)
{
	if(isset($_POST["TDINTERNET_LEVEL"]))
	{ $TDINTERNET_LEVEL= iconv("utf-8","tis-620",$_POST["TDINTERNET_LEVEL"]); }
	else{ $TDINTERNET_LEVEL= ""; }
	
	if(isset($_POST["TJinternet"]))
	{ $TJinternet= iconv("utf-8","tis-620",$_POST["TJinternet"]); }
	else{ $TJinternet= ""; }

	
	$STR_INTERNET	 	 =	"INSERT INTO TBL_REQ_INTERNET (EMP_ID,NLEVEL,JUSTIFICATION,REQ_ID,STATUS,REQ_DATE) VALUES ";
	$STR_INTERNET		.=	"('$TDEmp_ID','$TDINTERNET_LEVEL','$TJinternet','$ID_REQ','NO','".date('d-m-Y')."')";
	$QUERY_INTERNET	 =	mssql_query($STR_INTERNET);
}

if(in_array("Printer",$ArrayIT) == true)
{
	if(isset($_POST["TMprint"]))
	{ $TMprint= iconv("utf-8","tis-620",$_POST["TMprint"]); }
	else{ $TMprint= ""; }
	
	if(isset($_POST["TTprint"]))
	{ $TTprint= iconv("utf-8","tis-620",$_POST["TTprint"]); }
	else{ $TTprint= ""; }
	
	if(isset($_POST["TJprint"]))
	{ $TJprint= iconv("utf-8","tis-620",$_POST["TJprint"]); }
	else{ $TJprint= ""; }
	
	if(isset($_POST["TDprint"]))
	{ $TDprint= $_POST["TDprint"]; }
	else{ $TDprint= ""; }
	
	$Array_Print_ID		=	explode(",",$TDprint);
	$Array_Print_TY		=	explode(",",$TTprint);
	$Array_Print_TJ		=	explode(",",$TJprint);
	$Ptotal_loop		=	count($Array_Print_ID)-1;
	for($i=0;$i<=$Ptotal_loop;$i++)
	{
		$STR_PRINTER	 	 =	"INSERT INTO TBL_REQ_PRINTER (EMP_ID,PRINTER_ID,TYPE_TICK,STATUS,JUSTIFICATION,REQ_ID,REQ_DATE) VALUES ";
		$STR_PRINTER		.=	"('$TDEmp_ID','$Array_Print_ID[$i]','$Array_Print_TY[$i]','NO','$Array_Print_TJ[$i]','$ID_REQ','".date('d-m-Y')."')";
		$QUERY_PRINTER	 	 =	mssql_query($STR_PRINTER);
	}
}


if(in_array("REUSB",$ArrayIT) == true)
{
	if(isset($_POST["TDTYPE_REMOVABLE"]))
	{ $TDTYPE_REMOVABLE= iconv("utf-8","tis-620",$_POST["TDTYPE_REMOVABLE"]); }
	else{ $TDTYPE_REMOVABLE= ""; }
	
	if(isset($_POST["TInComputerName"]))
	{ $TInComputerName= iconv("utf-8","tis-620",$_POST["TInComputerName"]); }
	else{ $TInComputerName= ""; }
	
	if(isset($_POST["TJusb"]))
	{ $TJusb= iconv("utf-8","tis-620",$_POST["TJusb"]); }
	else{ $TJusb= ""; }

	
	$STR_REUSB	 	 =	"INSERT INTO TBL_REQ_REMOVABLE (EMP_ID,TYPE_REMOVABLE,COM_NAME,JUSTIFICATION,REQ_ID,STATUS,REQ_DATE) VALUES ";
	$STR_REUSB		.=	"('$TDEmp_ID','$TDTYPE_REMOVABLE','$TInComputerName','$TJusb','$ID_REQ','NO','".date('d-m-Y')."')";
	$QUERY_REUSB	 =	mssql_query($STR_REUSB);
}

if(in_array("Telephone",$ArrayIT) == true)
{
	if(isset($_POST["TDTYPE_TELEPHONE"]))
	{ $TDTYPE_TELEPHONE= iconv("utf-8","tis-620",$_POST["TDTYPE_TELEPHONE"]); }
	else{ $TDTYPE_TELEPHONE= ""; }
	
	if(isset($_POST["TJtelephone"]))
	{ $TJtelephone= iconv("utf-8","tis-620",$_POST["TJtelephone"]); }
	else{ $TJtelephone= ""; }

	
	$STR_TEL	 	 =	"INSERT INTO TBL_REQ_TEL_PASSCODE (EMP_ID,TYPE_TEL,JUSTIFICATION,REQ_ID,STATUS,REQ_DATE) VALUES ";
	$STR_TEL		.=	"('$TDEmp_ID','$TDTYPE_TELEPHONE','$TJtelephone','$ID_REQ','NO','".date('d-m-Y')."')";
	$QUERY_TEL	 	=	mssql_query($STR_TEL);
}

if(in_array("VPN",$ArrayIT) == true)
{
	if(isset($_POST["TJvpn"]))
	{ $TJvpn= iconv("utf-8","tis-620",$_POST["TJvpn"]); }
	else{ $TJvpn= ""; }
	
	$STR_EMAIL	 	 =	"INSERT INTO TBL_REQ_VPN (EMP_ID,JUSTIFICATION,REQ_ID,STATUS,REQ_DATE) VALUES ";
	$STR_EMAIL		.=	"('$TDEmp_ID','$TJvpn','$ID_REQ','NO','".date('d-m-Y')."')";
	$QUERY_EMAIL	 =	mssql_query($STR_EMAIL);
}

mssql_close($Connect_Host);

?>


<?php

//save stats connect new database
$coN = mssql_connect("ahdb01","sa","it@101");
$dbCon = mssql_select_db("INTRANET",$coN);

$datecurrent=date("dmY");
$ss = "SELECT * FROM TBL_STAT_EFORM WHERE CDATE='$datecurrent' ";
$qs = mssql_query($ss,$coN);
$row=mssql_num_rows($qs);

if($row>0)
{
	$rsc = mssql_fetch_array($qs);
	$new_click = (int)$rsc['CLICK'] + 1;
	$ups= "update TBL_STAT_EFORM set CLICK='$new_click' where CDATE='$datecurrent' ";
	mssql_query($ups,$coN);
}else
{
	$ins= "insert TBL_STAT_EFORM(CDATE,CLICK) values('$datecurrent','1')";
	mssql_query($ins,$coN);
}
mssql_close($coN);
?>


