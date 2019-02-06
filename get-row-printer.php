<?php
header ("Content-Type: text/html; charset=utf-8");//set display ajax text to thai 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 

$objConnect = mssql_connect("agrdb01","dev","dev@agrdb01") or die("cannot");
mssql_query("SET NAMES tis620" );
$objDB = mssql_select_db("EFORM");

if(isset($_GET['AGR']))
{ $AGR	=	str_replace(" ","",$_GET['AGR']);	}
else{ $AGR	="";	}

//echo $AGR;


$Ayutthaya		=	array("AH","AHP","AHT","AITS");
$ShowroomAM		=	array("NV","LP");
$ShowroomNESC	=	array("RM","SM");
$rayong			=	array("APR","AHR");
$samutprakarn	=	array("AP");
$asico			=	array("AS");
$chonburi		=	array("AA","AA");
$edsha			=	array("EA");
$al				=	array("AL");
$af				=	array("AF");

//------- IF : Place ---------------
if(in_array($AGR,$Ayutthaya) == true )
{
	$Place	="ayutthaya";
}

if(in_array($AGR,$ShowroomAM) == true )
{
	$Place	="Showroom-AM";
}

if(in_array($AGR,$ShowroomNESC) == true )
{
	$Place	="Showroom-NESC";
}

if(in_array($AGR,$rayong) == true )
{
	$Place	="rayong";
}

if(in_array($AGR,$samutprakarn) == true )
{
	$Place	="samutprakarn";
}

if(in_array($AGR,$chonburi) == true )
{
	$Place	="chonburi";
}

if(in_array($AGR,$asico) == true )
{
	$Place	="Asico";
}

if(in_array($AGR,$edsha) == true )
{
	$Place	="EA";
}

if(in_array($AGR,$al) == true )
{
	$Place	="AL";
}

if(in_array($AGR,$af) == true )
{
	$Place	="AF";
}

//------ Close Tag IF : Place -----



$STR_MS_PRINTER		=	"SELECT * FROM TBL_MASTER_PRINTER where PLACE='$Place' or PLACE ='other' order by ID ASC";
$QUERY_MS_PRINTER	=	MSSQL_QUERY($STR_MS_PRINTER);

echo (mssql_num_rows($QUERY_MS_PRINTER)-1);
?>