<?php
session_start();

include('DB_Configuration.php');

$CID='CSR2018-01'; 


	


$File_xls = $CID.".xls";
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename='.$File_xls);

$sra = "SELECT * FROM TBL_CSR_REGISTER where CourseID='".$CID."' order by ID ASC";
$qra = mssql_query($sra);


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
<td colspan="8" align="left" height="28" valign="middle">
<font face="Verdana, Geneva, sans-serif" color="#0033FF" size="3"><b>
�ç����ѡ��� ��١��Ҫ���Ź ��к�ԨҤ�ͧ��ҹ�ѡ����ҹ�û�� ��Шӻ� 2561
</b>
</font>
</td>
</tr>
<tr>
<td colspan="8" align="left" height="28" valign="middle">
<font face="Verdana, Geneva, sans-serif" color="#0033FF" size="3"><b>
�ѹ��� 24 ��Ȩԡ�¹ 2561 ���� 09.00-17.oo �. @ �.��ͧ⤹ �.��ط�ʧ����
</b>
</font>
</td>
</tr>
<TR>
							<TD align="center" valign="middle" height="25" bgcolor="#7b7b7b" ><font color="#FFFFFF"><b>
							�ӴѺ</b></font></TD>							
							<TD align="center" valign="middle" height="25"  bgcolor="#7b7b7b"><font color="#FFFFFF"><b>
							���ʾ�ѡ�ҹ</b></font></TD>
							<TD align="center" valign="middle" height="25"  bgcolor="#7b7b7b"><font color="#FFFFFF"><b>
							����-���ʡ��</b></font></TD>
							<TD align="center" valign="middle" height="25"  bgcolor="#7b7b7b"><font color="#FFFFFF"><b>
							���˹�</b></font></TD>
							<TD align="center" valign="middle" height="25"  bgcolor="#7b7b7b"><font color="#FFFFFF"><b>
							Ἱ�</b></font></TD>
							<TD align="center" valign="middle" height="25"  bgcolor="#7b7b7b"><font color="#FFFFFF"><b>
							����ѷ</b></font></TD>
							<TD align="center" valign="middle" height="25"  bgcolor="#7b7b7b"><font color="#FFFFFF"><b>
							���Ѿ��</b></font></TD>
							<TD align="center" valign="middle" height="25"  bgcolor="#7b7b7b"><font color="#FFFFFF"><b>
							�ش���ö</b></font></TD>
							
					</TR>
					  <?php
					  	$i = 0;
						while($rs=mssql_fetch_array($qra))
						{	
							
							$i++;
					  ?>
                    			<TR>
                              <TD align="center"><?php echo $i; ?></TD>
							  <TD align="center"><?php echo $rs['EmpID']; ?></TD>
							  <TD align="left"><?php echo $rs['Title_Name'].". ".$rs['Name_EN']; ?></TD>
								<TD align="left"><?php echo $rs['Position']; ?></TD>
								<TD align="left"><?php echo $rs['Department'];?></TD>
								<TD align="center"><?php echo $rs['Company'];?></TD>
								<TD align="left"><?php echo $rs['Mobile'];?></TD>
								<TD align="left"><?php echo $rs['Point_Car'];?></TD>
							</TR>
                    			  <?php
                    				}
								?>
</TABLE>
</BODY>
</HTML>   
