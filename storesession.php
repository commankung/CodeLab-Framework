<?php 
session_start();
include('DB_Configuration.php');
header ("Content-Type: text/html; charset=utf-8");//set display ajax text to thai 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);

$empID=$_GET['sendValEmp'];

if ( stristr($_SERVER["HTTP_ACCEPT"],"application/xhtml+xml"))
{
	header("Content-type: application/xhtml+xml;charset=utf-8");
}else{
	header("Content-type: text/xml;charset=utf-8");
}
$et = ">";
echo "<?xml version='1.0' encoding='utf-8'?$et\n";
echo "<rows>";
					  

			/*   User AD */
				$STR_USER		=	"SELECT * FROM TBL_REQ_AD WHERE EMP_ID ='$empID' order by ID DESC ";
				$QUERY_USER		=	mssql_query($STR_USER);
				if(mssql_num_rows($QUERY_USER)>0)
				{				
					while($rAD=mssql_fetch_array($QUERY_USER))
					{
						echo "<row>";			
						echo "<cell>User AD</cell>";
						echo "<cell>$rAD[REQ_DATE]</cell>";
						echo "<cell>$rAD[REQ_ID]</cell>";
						echo "</row>";
					}					
				}
				


			/*  E-Mail */
				$STR_EM		=	"SELECT * FROM TBL_REQ_EMAIL WHERE EMP_ID ='$empID' order by ID DESC ";
				$QUERY_EM		=	mssql_query($STR_EM);
				if(mssql_num_rows($QUERY_EM)>0)
				{				
					while($rAD=mssql_fetch_array($QUERY_EM))
					{
						echo "<row>";			
						echo "<cell>E-Mail</cell>";
						echo "<cell>$rAD[REQ_DATE]</cell>";
						echo "<cell>$rAD[REQ_ID]</cell>";
						echo "</row>";
					}					
				}
				
			/*  Internet */
				$STR_IN		=	"SELECT * FROM TBL_REQ_INTERNET WHERE EMP_ID ='$empID' order by ID DESC ";
				$QUERY_IN		=	mssql_query($STR_IN);
				if(mssql_num_rows($QUERY_IN)>0)
				{				
					while($rAD=mssql_fetch_array($QUERY_IN))
					{
						echo "<row>";			
						echo "<cell>Internet ($rAD[NLEVEL])</cell>";
						echo "<cell>$rAD[REQ_DATE]</cell>";
						echo "<cell>$rAD[REQ_ID]</cell>";
						echo "</row>";
					}					
				}

			/*  Printer */
				$STR_PR		=	"SELECT * FROM V_REQ_PRINTER WHERE EMP_ID ='$empID' order by ID DESC ";
				$QUERY_PR		=	mssql_query($STR_PR);
				if(mssql_num_rows($QUERY_PR)>0)
				{				
					while($rAD=mssql_fetch_array($QUERY_PR))
					{
						echo "<row>";			
						echo "<cell>$rAD[NAME] ($rAD[TYPE_TICK])</cell>";
						echo "<cell>$rAD[REQ_DATE]</cell>";
						echo "<cell>$rAD[REQ_ID]</cell>";
						echo "</row>";
					}					
				}

			/*  Removeable */
				$STR_RE		=	"SELECT * FROM TBL_REQ_REMOVABLE WHERE EMP_ID ='$empID' order by ID DESC ";
				$QUERY_RE		=	mssql_query($STR_RE);
				if(mssql_num_rows($QUERY_RE)>0)
				{				
					while($rAD=mssql_fetch_array($QUERY_RE))
					{
						echo "<row>";			
						echo "<cell>$rAD[COM_NAME] ($rAD[TYPE_REMOVABLE])</cell>";
						echo "<cell>$rAD[REQ_DATE]</cell>";
						echo "<cell>$rAD[REQ_ID]</cell>";
						echo "</row>";
					}					
				}


			/*  Telephone */
				$STR_TP		=	"SELECT * FROM TBL_REQ_TEL_PASSCODE WHERE EMP_ID ='$empID' order by ID DESC ";
				$QUERY_TP		=	mssql_query($STR_TP);
				if(mssql_num_rows($QUERY_TP)>0)
				{				
					while($rAD=mssql_fetch_array($QUERY_TP))
					{
						echo "<row>";			
						echo "<cell>PASS CODE ($rAD[TYPE_TEL])</cell>";
						echo "<cell>$rAD[REQ_DATE]</cell>";
						echo "<cell>$rAD[REQ_ID]</cell>";
						echo "</row>";
					}					
				}


			/*  VPN */
				$STR_VN		=	"SELECT * FROM TBL_REQ_VPN WHERE EMP_ID ='$empID' order by ID DESC ";
				$QUERY_VN		=	mssql_query($STR_VN);
				if(mssql_num_rows($QUERY_VN)>0)
				{				
					while($rAD=mssql_fetch_array($QUERY_VN))
					{
						echo "<row>";			
						echo "<cell>VPN</cell>";
						echo "<cell>$rAD[REQ_DATE]</cell>";
						echo "<cell>$rAD[REQ_ID]</cell>";
						echo "</row>";
					}					
				}								
				
echo "</rows>";	

?>
