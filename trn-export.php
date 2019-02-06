<?php
session_start();

include('DB_Configuration.php');

$CID= str_replace(' ','',$_GET['CID']); 


	


$File_xls = $CID.".xls";
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename='.$File_xls);

$sra = "SELECT * FROM View_Training_Register where CourseID='".$CID."' order by ReID ASC";
$qra = mssql_query($sra);

$sra1 = "SELECT * FROM TBL_TRAINING where CID='".$CID."'";
$qra1 = mssql_query($sra1);
$rs1=mssql_fetch_array($qra1);


 ?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">
<HTML>
<HEAD>
<meta http-equiv="Content-type" content="text/html;charset=tis-620" />
</HEAD>
<BODY>
<TABLE  x:int BORDER="1">
<tr>
<td colspan="10" align="center" height="30" valign="middle">
<font face="Verdana, Geneva, sans-serif" color="#0033FF" size="3"><b>
<?php echo $rs1['TITLE']; ?>
</b>
</font>
</td>
</tr>
<tr>
<td colspan="10" align="center" height="25" valign="middle">
<font face="Verdana, Geneva, sans-serif" color="#0033FF" size="2"><b>
วันที่ <?php echo $rs1['TDATE']; ?> เวลา  <?php echo $rs1['S_TIME']." - ".$rs1['E_TIME']."   @".$rs1['BRANCH']; ?>
</b>
</font>
</td>
</tr>
<TR>
							<TD align="center" bgcolor="green" ><font color="#FFFFFF"><b>
							ID</b></font></TD>
							<TD align="center" bgcolor="green" ><font color="#FFFFFF"><b>
							Register Date</b></font></TD>		
							<TD align="center" bgcolor="green" ><font color="#FFFFFF"><b>
							Approve Date</b></font></TD>							
							<TD align="center" bgcolor="green"><font color="#FFFFFF"><b>
							EmpID</b></font></TD>
							<TD align="center" bgcolor="green"><font color="#FFFFFF"><b>
							Name-Thai</b></font></TD>
							<TD align="center" bgcolor="green"><font color="#FFFFFF"><b>
							Name-Eng</b></font></TD>
							<TD align="center" bgcolor="green"><font color="#FFFFFF"><b>
							Position</b></font></TD>
							<TD align="center" bgcolor="green"><font color="#FFFFFF"><b>
							Department</b></font></TD>
							<TD align="center" bgcolor="green"><font color="#FFFFFF"><b>
							Company</b></font></TD>
							<TD align="center" bgcolor="green"><font color="#FFFFFF"><b>
							Mobile</b></font></TD>
							<TD align="center" bgcolor="green"><font color="#FFFFFF"><b>
							Status</b></font></TD>
							<TD align="center" bgcolor="green"><font color="#FFFFFF"><b>
							จุดขึ้นรถ</b></font></TD>
							
					</TR>
					  <?php
					  	$i = 0;
						while($rs=mssql_fetch_array($qra))
						{	
							if(str_replace(' ','',$rs['Title_Name'])=="Mr")
							{
								$tN="นาย";
							}else if(str_replace(' ','',$rs['Title_Name'])=="Mrs")
							{
								$tN="นาง";
							}else if(str_replace(' ','',$rs['Title_Name'])=="Ms")
							{
								$tN="นางสาว";
							}
							
							$i++;
					  ?>
                    			<TR>
                              <TD><?php echo $i; ?></TD>
							  <TD><?php echo $rs['Reg_Date'].' '.$rs['Reg_Time']; ?></TD>
							  <TD><?php echo $rs['DT_Approval']; ?></TD>
								<TD><?php echo $rs['EmpID']; ?></TD>
								<TD><?php echo $tN.$rs['Name_TH'];?></TD>
								<TD><?php echo $rs['Title_Name'].". ".$rs['Name_EN'];?></TD>
								<TD><?php echo $rs['Position'];?></TD>
								<TD><?php echo $rs['Department'];?></TD>
								<TD><?php echo $rs['Company'];?></TD>
								<TD><?php echo $rs['Mobile'];?></TD>
								<TD><?php echo $rs['Reg_Status'];?></TD>
	                    		<TD><?php echo $rs['Point_Car'];?></TD>
							</TR>
                    			  <?php
                    				}
								?>
</TABLE>
</BODY>
</HTML>   
