<?php
session_start();
$_SESSION['PageMenu'] = '';

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
include('DB_Configuration.php');

$CourseID = str_replace(' ','',$_POST['CourseID']);
//echo $CourseID;

$strn = "SELECT * FROM TBL_TRAINING WHERE CID='$CourseID' ";
$qstrn = mssql_query($strn);
$rs_trn= mssql_fetch_array($qstrn);
$nquota=intval($rs_trn['N_NUMBER']);

$ss = "SELECT * FROM View_Training_Register WHERE CourseID='$CourseID' order by ReID ASC ";
$qs = mssql_query($ss);

/*
$ssx1 = "SELECT * FROM TBL_TRAINING_PROFILE_USER WHERE EmpID='$CourseID' order by ReID ASC ";
$qsx1 = mssql_query($ssx1);
*/

?>

            <table class="table">
              <thead>
                <tr bgcolor="#E9E9E9">
                  <th width="5%"><h6 style="color:#333">#</h6></th>
                  <th width="8%"><h6 style="color:#333">EmpID</h6></th>
                  <th width="20"><h6 style="color:#333">Name</h6></th>
                  <th width="15"><h6 style="color:#333">Position</h6></th>
                  <th width="20%"><h6 style="color:#333">Dept</h6></th>
                  <th width="10%"><h6 style="color:#333">Company</h6></th>
                  <th width="10%"><h6 style="color:#333">Status</h6></th>
                  <?php  if(str_replace(' ','',$_SESSION['sesusertrn'])!="" && $_SESSION['sqsTrn']=="OK"){ ?>
                  <th width="12%"><h6 style="color:#333">#</h6></th>
                  <?php } ?>
                </tr>
              </thead>
              <tbody>
              <?php
			  $i=0;
			  while($rs= mssql_fetch_array($qs)){
				  $i++;
					if($i%2==0)
					{
						$bg = "#f9f9f9";
					}
					else
					{
						$bg = "#FFFFFF";
					}
					
					if($i>$nquota)
					{
						//echo $i." ".$nquota;
			  ?>
              <tr onMouseOver="this.style.backgroundColor='#ffff66';" onMouseOut="this.style.backgroundColor='';" bgcolor="#FFFFCC">
              <?php }else{ ?>
                <tr onMouseOver="this.style.backgroundColor='#ffff66';" onMouseOut="this.style.backgroundColor='';" bgcolor="<?php echo $bg;?>">
               <?php } ?>
                  <td style="font-size:12px; color:#333;"><?php echo $i;?></td>
                  <td style="font-size:12px; color:#333;"><?php echo $rs['EmpID'];?></td>
                  <td style="font-size:12px; color:#333;"><?php echo $rs['Title_Name'].". ".$rs['Name_EN'];?></td>
                  <td style="font-size:12px; color:#333;"><?php echo $rs['Position'];?></td>
                   <td style="font-size:12px; color:#333;"><?php echo $rs['Department'];?></td>
                  <td style="font-size:12px; color:#333;"><?php echo $rs['Company'];?></td>
                  <td  style="font-size:12px; color:#333;">
                  <?php
				   	if(str_replace(' ','',$rs['Reg_Status'])=="Waiting"){
				   ?>
                   <span class="label label-sm label-inverse arrowed arrowed-righ" style="background-color:#666">Pending</span>
                   <?php }else if(str_replace(' ','',$rs['Reg_Status'])=="Approved") { ?>
                    <span class="label label-sm label-success arrowed arrowed-righ" style="background-color:#390">Approved</span>
				 <?php }else if(str_replace(' ','',$rs['Reg_Status'])=="NotApproved") { ?>
                    <span class="label label-sm label-success arrowed arrowed-righ" style="background-color:#F30">Not approved</span>
					<?php } ?>
                  </td>
                   <?php  if(str_replace(' ','',$_SESSION['sesusertrn'])!="" && $_SESSION['sqsTrn']=="OK"){ ?>
                  <td>
                  <?php
				   	if(str_replace(' ','',$rs['Reg_Status'])=="Waiting" || str_replace(' ','',$rs['Reg_Status'])=="NotApproved"){
				   ?>
                  <a class="green" href="#" title="Approval"  onclick="Approve('<?php echo $rs['ReID'];?>','<?php echo $rs['Reg_Status'];?>','<?php echo $rs['EmpID'];?>','<?php echo $rs['CourseID'];?>');" style="text-decoration:none;"><i class="icon-ok"></i></a>
                   <?php }else if(str_replace(' ','',$rs['Reg_Status'])=="Approved") { ?>
                  <a class="green" href="#" title="Re-status to pending"  onclick="Approve('<?php echo $rs['ReID'];?>','<?php echo $rs['Reg_Status'];?>','<?php echo $rs['EmpID'];?>','<?php echo $rs['CourseID'];?>');" style="text-decoration:none;"><i class="icon-undo"></i></a>
                  <?php } ?>
                  <a class="green" href="#" title="Not Approved"  onclick="NApprove('<?php echo $rs['ReID'];?>','<?php echo $rs['Reg_Status'];?>','<?php echo $rs['EmpID'];?>','<?php echo $rs['CourseID'];?>');" style="text-decoration:none;"><i class="icon-remove"></i></a>
                  <a class="green" href="#" title="Remove User"  onclick="DelUser('<?php echo $rs['ReID'];?>','<?php echo $rs['Reg_Status'];?>','<?php echo $rs['EmpID'];?>','<?php echo $rs['CourseID'];?>');" style="text-decoration:none;"><i class="icon-trash"></i></i></a>                  
                  
                  <!--
                  <a class="red" href="#delete-modal" id="btnDelete" title="Delete User" style="text-decoration:none;"><i class="icon-trash"></i></a>
                  -->
                  
                  </td>
                  <?php } ?>
                </tr>
				<?php } ?>     
              </tbody>
            </table>
