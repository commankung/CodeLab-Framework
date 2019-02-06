 <?php
header ("Content-Type: text/html; charset=tis-620");//set display ajax text to thai 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);
include('DB_Configuration.php');
	$sPe ="select * from TBL_TRAINING where ID='".$_POST['EID']."' order by ID DESC";
	$qPe = mssql_query($sPe);
	$rse=mssql_fetch_array($qPe);
	//echo $rse['TITLE'];
	
	if($rse['S_STATUS']=="ON"){
		$s_status="checked";
	}else
	{
		$s_status="";
	}
	
	
	$ArrayData[]		=	iconv("tis-620","utf-8",$rse['TITLE']);
	$ArrayData[]		=	$rse['BRANCH'];
	$ArrayData[]		=	iconv("tis-620","utf-8",$rse['ROOM']);
	$ArrayData[]		=	$rse['TDATE'];
	$ArrayData[]		=	$rse['S_TIME'];
	$ArrayData[]		=	$rse['E_TIME'];
	$ArrayData[]		=	iconv("tis-620","utf-8",$rse['DETAILS']);
	$ArrayData[]		=	$rse['S_DATE']." - ".$rse['E_DATE'];
	$ArrayData[]		=	$rse['N_NUMBER'];
	$ArrayData[]		=	$rse['S_NUMBER'];
	$ArrayData[]		=	$rse['ID'];
	$ArrayData[]		=	$s_status;
	$ArrayData[]		=	iconv("tis-620","utf-8",$rse['Trainee']);
	$ArrayData[]		=	$rse['course_trn_id'];
	$ArrayData[]		=	$rse['Other'];
	$ArrayData[]		=	$rse['scores'];
	echo json_encode($ArrayData);
 
?>
 

                                    
                                    