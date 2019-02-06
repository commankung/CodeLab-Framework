 <?php
//header ("Content-Type: text/html; charset=tis-620");//set display ajax text to thai 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);
include('DB_Configuration.php');

	$sPe ="select * from View_Training_Register where Reg_Status='Approved' and CourseID='".str_replace(' ','',$_GET['CID'])."' order by ReID ASC";
	$qPe = mssql_query($sPe);
	//$rse=mssql_fetch_array($qPe);
	
	$sPex ="select * from TBL_TRAINING where CID='".str_replace(' ','',$_GET['CID'])."' order by ID ASC";
	$qPex = mssql_query($sPex);
	$rsex=mssql_fetch_array($qPex);
/*
	$ArrayData[]		=	iconv("tis-620","utf-8",$rsex['TITLE']);
	$ArrayData[]		=	$rsex['TDATE'];
	$ArrayData[]		=	$rsex['BRANCH'];
*/
?>
 <div class="alert alert-success" role="alert" style="margin-bottom:10px;">
             <i class="fa fa-check-square-o"></i>&nbsp;
             <span style="font-family:Verdana, Geneva, sans-serif; font-size:16px; font-weight:normal; color:#03F;">
             <?php echo iconv("tis-620","utf-8",$rsex['TITLE']).": ".$rsex['TDATE']." @".$rsex['BRANCH'];?>
             </span>
             </div> 

                                        <table id="dynamic-table" class="table table-striped table-bordered table-hover" style="margin-bottom:0px; margin-top:5px; padding-bottom:0px;">
												<thead>
													<tr>
														<th class="center">
														EmpID
														</th>
														<th>Name-TH</th>
														<th>Name-EN</th>
														<th>Position</th>
                                                        <th>Dept.</th>
                                                        <th>Company</th>
                                                        <th>Status Training</th>
													</tr>
												</thead>
                                                <tbody>
                                                <?php
												$ic=0;
										while($rse=mssql_fetch_array($qPe))
										{
											$ic++;
											?>
													<tr height="20">
														<td class="center">
															<?php echo $rse['EmpID'];?>
														</td>

														<td>
                                                        <font face="Verdana, Geneva, sans-serif" size="2">
														<?php echo iconv("tis-620","utf-8",$rse['Name_TH']);?>
                                                        </font>
														</td>
                                                        <td>
														<?php echo $rse['Name_EN'];?>
														</td>
														<td>
														<?php echo $rse['Position'];?>
                                                        </td>
														<td>
														<?php echo $rse['Department'];?>
                                                        </td>
                                                        <td>
														<?php echo $rse['Company'];?>
                                                        </td>
                                                       <td>
                                                       <?php
													   if(str_replace(' ','',$rse['Trn_Status'])=="ON"){
														?>
														<input name="StatusChk<?php echo $ic;?>" class="ace ace-switch ace-switch-5" type="checkbox" id="StatusChk<?php echo $ic;?>" onclick="UpdateChkTrn('<?php echo $_GET['CID'];?>','<?php echo $rse['EmpID'];?>','<?php echo $ic;?>')" checked="checked" style="padding:0px;margin-bottom:0px" /><span class="lbl" style="padding:0px;margin-bottom:0px"></span>
                                                        <?php }else{ ?>
														<input name="StatusChk<?php echo $ic;?>" class="ace ace-switch ace-switch-5" type="checkbox" id="StatusChk<?php echo $ic;?>" onclick="UpdateChkTrn('<?php echo $_GET['CID'];?>','<?php echo $rse['EmpID'];?>','<?php echo $ic;?>')" style="padding:0px;margin-bottom:0px" /><span class="lbl" style="padding:0px;margin-bottom:0px"></span>                                                        
                                                        <?php } ?>
                                                        </td>
													</tr>    
                                                    <?php } ?>              
     </tbody>
 </table>
<?php
/*	
	while($rse=mssql_fetch_array($qPe))
	{
		
	//employee
	$ArrayData[]		=	$rse['EmpID'];
	$ArrayData[]		=	iconv("tis-620","utf-8",$rse['Name_TH']);
	$ArrayData[]		=	$rse['Name_EN'];
	$ArrayData[]		=	$rse['Position'];
	$ArrayData[]		=	$rse['Department'];
	$ArrayData[]		=	$rse['Company'];

	$ArrayData[]		=	$rse['Trn_Status'];
	}
	echo json_encode($ArrayData);
 */
?>
 

                                    
                                    