<?php
session_start();
$_SESSION['PageMenu'] = '';

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
include('DB_Configuration.php');

$CourseID = 'CSR2018-01';


$ss = "SELECT * FROM TBL_CSR_REGISTER WHERE CourseID='$CourseID' order by ID ASC ";
$qs = mssql_query($ss);

/*
$ssx1 = "SELECT * FROM TBL_TRAINING_PROFILE_USER WHERE EmpID='$CourseID' order by ReID ASC ";
$qsx1 = mssql_query($ssx1);
*/

?>

            <table class="table">
              <thead>
                <tr bgcolor="#E9E9E9">
                  <th width="5%">
					<a href="../../TrainingApp/csr-export.php" style="text-decoration:none;color:#0cd602;" title="Export data to excel" target="_parent"><img src="images/excel24.jpg"></a>				  
				  </th>
                  <th width="10%"><h6 style="color:#333">รหัส</h6></th>
                  <th width="28%"><h6 style="color:#333">ชื่อ-นามสกุล</h6></th>
                  <!--<th width="15%"><h6 style="color:#333">ตำแหน่ง</h6></th>-->
                  <th width="20%"><h6 style="color:#333">แผนก</h6></th>
                  <th width="10%"><h6 style="color:#333">บริษัท</h6></th>
                  <!--<th width="13%"><h6 style="color:#333">โทรศัพท์</h6></th>-->
                  <th width="27%"><h6 style="color:#333">จุดขึ้นรถ</h6></th>
                </tr>
              </thead>
              <tbody>
              <?php
			  $i=0;
			  $nquota=100;
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
                  <td style="font-size:12px; color:#333;"><?php echo $rs['Title_Name'].".".$rs['Name_EN'];?></td>
                  <!--<td style="font-size:12px; color:#333;"><?php echo $rs['Position'];?></td>-->
                   <td style="font-size:12px; color:#333;"><?php echo $rs['Department'];?></td>
                  <td style="font-size:12px; color:#333;"><?php echo $rs['Company'];?></td>
                  <!--<td  style="font-size:12px; color:#333;"><?php echo $rs['Mobile'];?></td>-->
					<td  style="font-size:12px; color:#333;"><?php echo iconv('TIS-620','UTF-8',$rs['Point_Car']);?></td>
                </tr>
				<?php } ?>     
              </tbody>
            </table>
