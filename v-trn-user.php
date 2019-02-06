 <?php
//header ("Content-Type: text/html; charset=tis-620");//set display ajax text to thai 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);
include('DB_Configuration.php');

	$sPe ="select * from View_Training_Log1 where EmpID='".str_replace(' ','',$_POST['EID'])."' order by CID DESC";
	//$sPe ="select * FROM TBL_TRAINING_REGISTER where (Reg_Status='Approved') and EmpID='".$_POST['EID']."'";
	$qPe = mssql_query($sPe);
	
	$i=0;
	
	while($rse=mssql_fetch_array($qPe))
	{
		$data0[$i] = $rse['CID'];
		$data1[$i] = iconv("tis-620","utf-8",$rse['TITLE']);
		$data2[$i] = $rse['TDATE'];
		$data3[$i] = $rse['BRANCH'];
		$data4[$i] = $rse['EmpID'];
		$data5[$i] = iconv("tis-620","utf-8",$rse['Name_TH']);
		$data6[$i] = $rse['Name_EN'];
		
		$i++;
	}
	
	for($j=0 ; $j<$i ; $j++)
	{
		$ArrayData[]		=	$data0[$j];
		$ArrayData[]		=	$data1[$j];
		$ArrayData[]		=	$data2[$j];
		$ArrayData[]		=	$data3[$j];
		
		$ArrayData[]		=	$data4[$j];
		$ArrayData[]		=	$data5[$j];
		$ArrayData[]		=	$data6[$j];
	
	}
	$countRow = count($ArrayData);
	//echo json_encode($ArrayData);
?>
	 <div class="alert alert-success" role="alert" style="margin-bottom:10px;">
	 <i class="fa fa-user"></i>&nbsp;
	 <span id="dEmployee" name="dEmployee" style="font-family:Verdana, Geneva, sans-serif; font-size:16px; font-weight:normal; color:#03F;" ><?php echo $ArrayData[4];?> <?php echo $ArrayData[5];?> <?php echo "(".$ArrayData[6].")";?></span>
	 <i class="fa fa-flag"></i>
	 </div> 

	 <table id="dynamic-table" class="table table-striped table-bordered table-hover" style="margin-bottom:0px; margin-top:5px; padding-bottom:0px;">
			<thead>
				<tr>
					<th class="center">
					Course ID
					</th>
					<th>Training Course</th>
					<th>Training Date</th>
					<th>Venue</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$c=0;
				
				for($i=0 ;$i<$countRow/7 ;$i++)
				{
				?>
				
				<tr>
					<td class="center">
						<span id="CID"><?php echo $ArrayData[$c];?> </span>
					</td>
					<?php $c++;?>
					<td>
						<span style="font-family:Verdana, Geneva, sans-serif;font-weight:400; color:#333;" id="CourseN">
						<?php echo $ArrayData[$c];?>
						</span>
					</td>
					<?php $c++;?>
					<td>
					<span id="trn-date"><?php echo $ArrayData[$c];?></span>
					</td>
					<?php $c++;?>
					<td>
					<span id="trn-venue"><?php echo $ArrayData[$c];?></span>
					</td>
					<?php $c++;?>
				</tr> 
					<?php $c=$c+3;?>
				
				<?php
				}
				?>
			</tbody>
	 </table>                                 