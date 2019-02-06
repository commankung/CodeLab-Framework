<?php  
header("Content-type: application/xhtml+xml; charset=utf-8");   
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1  
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past  
include('DB_Configuration.php');
if(isset($_GET['PROVINCEID']) and $_GET['PROVINCEID']!="")
{
?>  
	<option value="">&nbsp;</option>  
<?php  
	$STR_DISTRICT		=	"SELECT * FROM TBL_MASTER_DISTRICT WHERE ProvinceId='".$_GET['PROVINCEID']."' ORDER BY AmphurId ASC";  
	$QUERY_DISTRICT		=	mssql_query($STR_DISTRICT);  
	while($DISTRICT		=	mssql_fetch_array($QUERY_DISTRICT))
	{  
?>  
		<option value="<?php  echo $DISTRICT['AmphurId']; ?>" ><?php echo iconv("tis-620", "utf-8",$DISTRICT['AmphurName']); ?></option>  
<?php 
	} 
	}else{ 
?>  
      		<option value="">&nbsp;</option>    
<?php 
	} 
?>  