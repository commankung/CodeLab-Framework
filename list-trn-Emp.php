<?php
session_start();
include('DB_Configuration.php');


$Page = $_POST["PageE"];
$kword = $_POST["kwordE"];  

if(str_replace(' ','',$kword)=="" || $kword == "undefined")
{
	//$sPeE ="select DISTINCT EmpID, Name_TH, Position, Name_EN, Department, Company from View_Training_Register  where (Reg_Status='Approved') and Trn_Status='ON' order by EmpID ASC";
	$sPeE ="select * from TBL_TRAINING_PROFILE_USER order by EmpID ASC";
}
else
{
	$sPeE ="select * from TBL_TRAINING_PROFILE_USER  where ((EmpID like '%".$kword."%' Collate SQL_Latin1_General_CP1_CI_AS)
  or (Name_TH like '%".$kword."%' Collate SQL_Latin1_General_CP1_CI_AS)
  or (Name_EN like '%".$kword."%' Collate SQL_Latin1_General_CP1_CI_AS)
  or (Position like '%".$kword."%' Collate SQL_Latin1_General_CP1_CI_AS)
  or (Department like '%".$kword."%' Collate SQL_Latin1_General_CP1_CI_AS)
  or (Company like '%".$kword."%' Collate SQL_Latin1_General_CP1_CI_AS))
  order by EmpID ASC";
	/*$sPeE ="select DISTINCT EmpID, Name_TH, Position, Name_EN, Department, Company from View_Training_Register  where (Reg_Status='Approved') and (Trn_Status='ON') and ((EmpID like '%".$kword."%' Collate SQL_Latin1_General_CP1_CI_AS)
  or (Name_TH like '%".$kword."%' Collate SQL_Latin1_General_CP1_CI_AS)
  or (Name_EN like '%".$kword."%' Collate SQL_Latin1_General_CP1_CI_AS)
  or (Position like '%".$kword."%' Collate SQL_Latin1_General_CP1_CI_AS)
  or (Department like '%".$kword."%' Collate SQL_Latin1_General_CP1_CI_AS)
  or (Company like '%".$kword."%' Collate SQL_Latin1_General_CP1_CI_AS))
  order by EmpID ASC";*/
}



//echo "kword".$kword;
$qPeE = mssql_query($sPeE);
$Num_Rows_E= mssql_num_rows($qPeE);

$Per_Page = 10;   // Per Page
$Prev_Page = $Page-1;
$Next_Page = $Page+1;
$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows_E<=$Per_Page)
{
	$Num_Pages =1;
}
else if(($Num_Rows_E % $Per_Page)==0)
{
	$Num_Pages =($Num_Rows_E/$Per_Page) ;
}
else
{
	$Num_Pages =($Num_Rows_E/$Per_Page)+1;
	$Num_Pages = (int)$Num_Pages;
}

$Page_End = $Per_Page * $Page;
if($Page_End > $Num_Rows_E)
{
	$Page_End = $Num_Rows_E;
	
}

$total_p=ceil($Num_Rows_E/$Per_Page);   
$before_p=($Page*$Per_Page)+1;  
if(mssql_num_rows($qPeE)>=1){   
	$plus_p=($Page*$Per_Page)+mssql_num_rows($qPeE);   
}else{   
	$plus_p=($Page*$Per_Page);       
}		
/*	
for($i=$Page_Start;$i<$Page_End;$i++){
	echo $i."<br>";
}
	
*/	

function page_navigatorx($before_p,$plus_p,$total,$total_p,$chk_page){   
	global $urlquery_str;
	$pPrev=$chk_page-1;
	$pPrev=($pPrev>=0)?$pPrev:0;
	if($pPrev<=0)
	{
		$pPrev=1;
	}
	$pNext=$chk_page+1;
	//$pNext=($pNext>=$total_p)?$total_p-1:$pNext;
	$pNext=($pNext>=$total_p)?$total_p:$pNext;		
	$lt_page=$total_p-2;

	//if($chk_page>0){ 
	if($chk_page>1){ 
		echo "<li><a href='JavaScript:AjaxSEmp($pPrev)'>Previous</a></li>";
		//echo "<a  href='JavaScript:AjaxSEmp($qx,$pPrev)' class='naviPN'>Prev</a>";
	}
	if($total_p>=7){
		if($chk_page>=5){
			echo "<li $nClass><a href='JavaScript:AjaxSEmp(1)' >1</a><a>...</a></li>";  
			//echo "<a $nClass href='JavaScript:AjaxSEmp($qx,1)' >1</a><a class='SpaceC'>. . .</a>";  
		}
		if($chk_page<5){
			for($i=0;$i<$total_p;$i++){  
				$nClass=($chk_page==($i+1))?"class='active'":"";//$nClass=($chk_page==($i+1))?"class='selectPage'":"";
				if($i<=4){
					$xi =$i+1;
				echo "<li $nClass><a  href='JavaScript:AjaxSEmp($xi)' >".($i+1)."</a></li> ";   
				//echo "<a $nClass href='JavaScript:AjaxSEmp($qx,$i)' >".($i+1)."</a> ";   
				}
				if($i==$total_p-1 ){ 
				$iad=intval($i+1);	
				echo "<li $nClass><a>...</a><a href='JavaScript:AjaxSEmp($iad)'>".($i+1)."</a></li> ";   
				//echo "<a class='SpaceC'>. . .</a><a $nClass href='JavaScript:AjaxSEmp($qx,".intval($i+1).")'>".($i+1)."</a> ";   				
				}		
			}
		}
		if($chk_page>=5 && $chk_page<$lt_page){
			$st_page=$chk_page-4;
			for($i=0;$i<=4;$i++){
				$ist=intval($st_page+$i+2);
				$nClass=($chk_page==($st_page+($i+2)))?"class='active'":"";//$nClass=($chk_page==($st_page+($i+2)))?"class='selectPage'":"";
				echo "<li $nClass><a href='JavaScript:AjaxSEmp($ist)'>$ist</a></li> ";   	
				//echo "<a $nClass href='JavaScript:AjaxSEmp($qx,".intval($st_page+$i).")'>".$st_page."</a> ";   					
			}
			for($i=0;$i<$total_p;$i++){  
				if($i==$total_p-1 ){ 
				$iad=intval($i+1);		
				$nClass=($chk_page==($i+1))?"class='active'":"";
				echo "<li $nClass><a>...</a><a href='JavaScript:AjaxSEmp($iad)'>$iad</a></li> ";   
				//echo "<a class='SpaceC'>. . .</a><a $nClass href='JavaScript:AjaxSEmp($qx,".intval($i+1).")'>".($i+1)."</a> ";   				
				}		
			}									
		}	
		if($chk_page>=$lt_page){
			for($i=0;$i<=2;$i++){
				$istd=intval($lt_page+($i));				
				$nClass=($chk_page==($lt_page+($i)))?"class='active'":"";//$nClass=($chk_page==($lt_page+($i)))?"class='selectPage'":"";
				echo "<li $nClass><a href='JavaScript:AjaxSEmp($istd)'>$istd</a></li> ";   
				//echo "<a $nClass href='JavaScript:AjaxSEmp($qx,".intval($lt_page+$i-1).")'>".$lt_page."</a> ";  			
			}
		}		 
	}else{
		for($i=0;$i<$total_p;$i++){  
			$iadl=intval($i+1);	
			$nClass=($chk_page==($i+1))?"class='active'":"";//$nClass=($chk_page==($i+1))?"class='selectPage'":"";
			echo "<li $nClass><a href='JavaScript:AjaxSEmp($iadl)'>".intval($i+1)."</a></li> ";  //show number box
			//echo "<a href='JavaScript:AjaxSEmp($qx,".intval($i-1).")' $nClass>".intval($i+1)."</a> ";   
		}		
	} 	
	//if($chk_page<$total_p-1){
	if($chk_page<$total_p){
		echo "<li><a href='JavaScript:AjaxSEmp($pNext)'>Next</a></li>";
		//echo "<a href='JavaScript:AjaxSEmp($qx,$pNext)'  class='naviPN'>Next</a>";		
	}
}
		
$bgh="#66FF99";
?>

<table id="dynamic-table" class="table table-striped table-bordered table-hover" style="margin-bottom:0px; margin-top:10px; padding-bottom:0px;">
<thead>
	<tr>
		<th class="center label-success" style="color:#FFF" bgcolor="<?php echo $bgh;?>">#</th>
		<th class="center label-success" style="color:#FFF" bgcolor="<?php echo $bgh;?>">Emp.ID</th>
		<th class="center label-success" style="color:#FFF" bgcolor="<?php echo $bgh;?>">Name-Thai</th>
		<th class="center label-success" style="color:#FFF" bgcolor="<?php echo $bgh;?>">Name-Eng</th>
		<th class="center label-success" style="color:#FFF" bgcolor="<?php echo $bgh;?>">Position</th>
		<th class="center label-success" style="color:#FFF" bgcolor="<?php echo $bgh;?>">Department</th>
		<th class="center label-success" style="color:#FFF" bgcolor="<?php echo $bgh;?>">Company</th>
		<th class="center label-success" style="color:#FFF" bgcolor="<?php echo $bgh;?>">Training Total</th>
		<th class="center label-success" style="color:#FFF" bgcolor="<?php echo $bgh;?>">#</th>
	</tr>
</thead>
<tbody>

<?php //while($rFe=mssql_fetch_array($qPeE)){ 
//echo $Page_Start." ".$Page_End;
?>
<?php for($i=$Page_Start;$i<$Page_End;$i++){ ?>
	<tr>
		<td class="center">
			<?php echo $i+1;?>
		</td>
		<td class="center">
			
			<?php echo mssql_result($qPeE,$i,"EmpID");?>
		</td>

		<td>
			<span style="font-family:Verdana, Geneva, sans-serif;font-weight:400; color:#333;">
			<?php echo iconv('tis-620','utf-8',mssql_result($qPeE,$i,"Name_TH"));?>
			</span>
		</td>
		<td><?php echo mssql_result($qPeE,$i,"Name_EN");?></td>
		<td class="hidden-480"><?php echo mssql_result($qPeE,$i,"Position");?></td>
		<td><?php echo mssql_result($qPeE,$i,"Department");?></td>
		<td><?php echo mssql_result($qPeE,$i,"Company");?></td>

		<td  class="center">
		<span class="label label-success arrowed-in arrowed-in-right">
		<i class="ace-icon fa fa-check bigger-120"></i> 
		<?php
		//$sct="select count(EmpID) as ctotal FROM TBL_TRAINING_REGISTER where (Reg_Status='Approved') and EmpID='".mssql_result($qPeE,$i,"EmpID")."'";
		$sct="select count(EmpID) as ctotal FROM View_Training_Log where (Reg_Status='Approved') and EmpID='".mssql_result($qPeE,$i,"EmpID")."'";
		$qsct=mssql_query($sct);
		$rsct=mssql_fetch_array($qsct);
		echo "<strong>".$rsct['ctotal']."</strong>";
		?>
		 
		</span>                                          
		</td>

		<td  class="center">
			<div class="hidden-sm hidden-xs action-buttons" id="bootbox-regular">
				<a class="green tooltip-success" id="lview" href="#v-trn-modal" data-emp-id="<?php echo mssql_result($qPeE,$i,"EmpID");?>" data-rel="tooltip" title="View training course" data-toggle="modal">
					<i class="ace-icon fa fa-search-plus bigger-130"></i>
				</a>
			</div>
		</td>
		
	</tr>
	<?php }//close while ?>
 </tbody>
 </table>
 
<table width="100%" border="0" cellspacing="1" cellpadding="0">
  <tr style="padding-top:5px">
    <td width="51%" align="left" valign="middle">
		<div style="margin-top:1px; padding-top:1px">
			<ul class="pagination">
		<?php
			//echo $before_p." ".$plus_p." ".$Num_Rows_E." ".$total_p." ".$Page."++++";
		 if(($Num_Rows_E>0) && ($Num_Rows_E>$Per_Page)){ 
		  page_navigatorx($before_p,$plus_p,$Num_Rows_E,$total_p,$Page);
		}
		?>
		</ul>
		</div>
    </td>
    <td width="44%" align="right" valign="middle" style="padding-right:5px;">
      <div class="bsr_boxreportrow" style="width:92%"><font color="#333333"><font color="#000000"><b>
		  </b></font>&nbsp;Total&nbsp;:&nbsp;<b style="font-size:12px"><?php echo number_format($Num_Rows_E);?></b>&nbsp;Rows</div>
	</td>
  </tr>
</table> 