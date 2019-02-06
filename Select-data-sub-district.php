<?php  
header("Content-type: application/xhtml+xml; charset=utf-8");   
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1  
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past  
include('DB_Configuration.php');
if(isset($_GET['DistrictID']) and $_GET['DistrictID']!="")
{
?>  
	<option value="">&nbsp;</option>  
<?php  
	$STR_SUB_DISTRICT		=	"SELECT * FROM TBL_MASTER_SUB_DISTRICT WHERE AmphurId='".$_GET['DistrictID']."' ORDER BY AmphurId ASC";  
	$QUERY_SUB_DISTRICT		=	mssql_query($STR_SUB_DISTRICT);  
	while($SUB_DISTRICT		=	mssql_fetch_array($QUERY_SUB_DISTRICT))
	{  
?>  
		<option value="<?php  echo $SUB_DISTRICT['DistrictId']; ?>" ><?php echo iconv("tis-620", "utf-8",$SUB_DISTRICT['DistrictName']); ?></option>  
<?php 
	} 
	}else{ 
?>  
      		<option value="">&nbsp;</option>    
<?php 
	} 
?>  