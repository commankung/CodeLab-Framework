<?php
session_start();
include('DB_Configuration.php');


$Page = $_POST["Page"];
$kword = $_POST["kword"];

if(str_replace(' ','',$kword)=="")
{
	$sPe ="select * from TBL_TRAINING order by CID DESC";
}else
{
	$sPe ="select * from TBL_TRAINING where TITLE like '%".$kword."%' Collate SQL_Latin1_General_CP1_CI_AS order by CID DESC";
}

//echo "kword".$kword;
$qPe = mssql_query($sPe);

$Num_Rows_L= mssql_num_rows($qPe);


$Per_Page = 10;   // Per Page
$Prev_Page = $Page-1;
$Next_Page = $Page+1;
$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows_L<=$Per_Page)
{
	$Num_Pages =1;
}
else if(($Num_Rows_L % $Per_Page)==0)
{
	$Num_Pages =($Num_Rows_L/$Per_Page) ;
}
else
{
	$Num_Pages =($Num_Rows_L/$Per_Page)+1;
	$Num_Pages = (int)$Num_Pages;
}
$Page_End = $Per_Page * $Page;
if($Page_End > $Num_Rows_L)
{
	$Page_End = $Num_Rows_L;
}
$total_p=ceil($Num_Rows_L/$Per_Page);   
$before_p=($Page*$Per_Page)+1;  
if(mssql_num_rows($qPe)>=1){   
	$plus_p=($Page*$Per_Page)+mssql_num_rows($qPe);   
}else{   
	$plus_p=($Page*$Per_Page);       
}	

	
/*	
for($i=$Page_Start;$i<$Page_End;$i++){
	echo $i."<br>";
}
	
*/	
	
function page_navigator($before_p,$plus_p,$total,$total_p,$chk_page){   
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
		echo "<li><a href='JavaScript:AjaxCourse($pPrev)'>Previous</a></li>";
		//echo "<a  href='JavaScript:AjaxCourse($qx,$pPrev)' class='naviPN'>Prev</a>";
	}
	if($total_p>=7){
		if($chk_page>=5){
			echo "<li $nClass><a href='JavaScript:AjaxCourse(1)' >1</a><a>...</a></li>";  
			//echo "<a $nClass href='JavaScript:AjaxCourse($qx,1)' >1</a><a class='SpaceC'>. . .</a>";  
		}
		if($chk_page<5){
			for($i=0;$i<$total_p;$i++){  
				$nClass=($chk_page==($i+1))?"class='active'":"";//$nClass=($chk_page==($i+1))?"class='selectPage'":"";
				if($i<=4){
					$xi =$i+1;
				echo "<li $nClass><a  href='JavaScript:AjaxCourse($xi)' >".($i+1)."</a></li> ";   
				//echo "<a $nClass href='JavaScript:AjaxCourse($qx,$i)' >".($i+1)."</a> ";   
				}
				if($i==$total_p-1 ){ 
				$iad=intval($i+1);			
				echo "<li $nClass><a>...</a><a href='JavaScript:AjaxCourse($iad)'>".($i+1)."</a></li> ";   
				//echo "<a class='SpaceC'>. . .</a><a $nClass href='JavaScript:AjaxCourse($qx,".intval($i+1).")'>".($i+1)."</a> ";   				
				}		
			}
		}
		if($chk_page>=5 && $chk_page<$lt_page){
			$st_page=$chk_page-4;
			for($i=0;$i<=4;$i++){
				$ist=intval($st_page+$i+2);
				$nClass=($chk_page==($st_page+($i+2)))?"class='active'":"";//$nClass=($chk_page==($st_page+($i+2)))?"class='selectPage'":"";
				echo "<li $nClass><a href='JavaScript:AjaxCourse($ist)'>$ist</a></li> ";   	
				//echo "<a $nClass href='JavaScript:AjaxCourse($qx,".intval($st_page+$i).")'>".$st_page."</a> ";   					
			}
			for($i=0;$i<$total_p;$i++){  
				if($i==$total_p-1 ){ 
				$iad=intval($i+1);		
				$nClass=($chk_page==($i+1))?"class='active'":"";
				echo "<li $nClass><a>...</a><a href='JavaScript:AjaxCourse($iad)'>$iad</a></li> ";   
				//echo "<a class='SpaceC'>. . .</a><a $nClass href='JavaScript:AjaxCourse($qx,".intval($i+1).")'>".($i+1)."</a> ";   				
				}		
			}									
		}	
		if($chk_page>=$lt_page){
			for($i=0;$i<=2;$i++){
				$istd=intval($lt_page+($i));				
				$nClass=($chk_page==($lt_page+($i)))?"class='active'":"";//$nClass=($chk_page==($lt_page+($i)))?"class='selectPage'":"";
				echo "<li $nClass><a href='JavaScript:AjaxCourse($istd)'>$istd</a></li> ";   
				//echo "<a $nClass href='JavaScript:AjaxCourse($qx,".intval($lt_page+$i-1).")'>".$lt_page."</a> ";  			
			}
		}		 
	}else{
		for($i=0;$i<$total_p;$i++){  
			$iadl=intval($i+1);	
			$nClass=($chk_page==($i+1))?"class='active'":"";//$nClass=($chk_page==($i+1))?"class='selectPage'":"";
			echo "<li $nClass><a href='JavaScript:AjaxCourse($iadl)'>".intval($i+1)."</a></li> ";  //show number box
			//echo "<a href='JavaScript:AjaxCourse($qx,".intval($i-1).")' $nClass>".intval($i+1)."</a> ";   
		}		
	} 	
	//if($chk_page<$total_p-1){
	if($chk_page<$total_p){
		echo "<li><a href='JavaScript:AjaxCourse($pNext)'>Next</a></li>";
		//echo "<a href='JavaScript:AjaxCourse($qx,$pNext)'  class='naviPN'>Next</a>";		
	}
}	
	
	
?>


                                        <table id="dynamic-table" class="table table-striped table-bordered table-hover" style="margin-bottom:0px; margin-top:10px; padding-bottom:0px;">
												<thead>
													<tr>
														<th class="center">
														Course ID
														</th>
														<th>Training Course</th>
														<th>Start Date</th>
														<th class="hidden-480">Finish Date</th>

														<th class="hidden-480">
															Post & Update By
														</th>
														<th class="hidden-480">Status</th>

														<th></th>
													</tr>
												</thead>
                                                <tbody>

                                                <?php //while($rFe=mssql_fetch_array($qPe)){ 
												?>
                                                <?php for($i=$Page_Start;$i<$Page_End;$i++){ ?>
													<tr>
														<td class="center">
															<?php echo mssql_result($qPe,$i,"CID");?>
														</td>

														<td>
															<span style="font-family:Verdana, Geneva, sans-serif;font-weight:400; color:#333;">
															<?php echo iconv('tis-620','utf-8',mssql_result($qPe,$i,"TITLE"));?>
                                                            </span>
														</td>
														<td><?php echo mssql_result($qPe,$i,"S_DATE");?></td>
														<td class="hidden-480"><?php echo mssql_result($qPe,$i,"E_DATE");?></td>
														<td><?php echo mssql_result($qPe,$i,"U_ADMIN");?></td>

														<td class="hidden-480">
                                                        <?php 
														if(mssql_result($qPe,$i,"S_STATUS")=="OFF"){
														?>
                                                        <label>
													<span class="label label-sm label-inverse arrowed arrowed-righ" style="background-color:#666"><?php echo mssql_result($qPe,$i,"S_STATUS");?></span>
													</label>
                                                    <?php }if(mssql_result($qPe,$i,"S_STATUS")=="ON"){ ?>
                                                        <label>
														<span class="label label-sm label-success arrowed arrowed-righ" style="background-color:#390"><?php echo mssql_result($qPe,$i,"S_STATUS");?></span>
													</label>
                                                    <?php } ?>                                                    
														</td>

														<td>
                                                        
															<div class="hidden-sm hidden-xs action-buttons" id="bootbox-regular">
                                                          
                                                          <a class="green tooltip-warning" id="lcheck" href="#checkUser-modal" data-course-id="<?php echo mssql_result($qPe,$i,"CID");?>" data-rel="tooltip" title="Check User Training" data-toggle="modal">
																	<i class="ace-icon fa fa-check-square-o bigger-130"></i>
																</a>
                                                                
																<a class="blue tooltip-info" href="http://intranet.aapico.com/aapico-2014/new/blog-single-training.php?ID=<?php echo mssql_result($qPe,$i,"ID");?>" data-rel="tooltip" title="Detail course" target="_blank">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green tooltip-success" id="ledit" href="#edit-modal" data-course-id="<?php echo mssql_result($qPe,$i,"ID");?>" data-rel="tooltip" title="Edit course" data-toggle="modal">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>
															<?php
															if(mssql_result($qPe,$i,"S_STATUS")=="ON"){
															?>
																<a class="red tooltip-error" href="#delete-modal" id="btnDelete" data-course-id="<?php echo mssql_result($qPe,$i,"CID");?>" data-rel="tooltip" title="Delete course"  data-toggle="modal">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
                                                                <?php }else{ ?>
                                                                 &nbsp;<i class="ace-icon fa fa-trash-o bigger-130" style="color:#CCC;"></i>
                                                                <?php } ?>
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

 if(($Num_Rows_L>0) && ($Num_Rows_L>$Per_Page)){ 
  page_navigator($before_p,$plus_p,$Num_Rows_L,$total_p,$Page);
}
?>
</ul>
</div>
    
    </td>
    <td width="44%" align="right" valign="middle" style="padding-right:5px;">
      <div class="bsr_boxreportrow" style="width:92%"><font color="#333333"><font color="#000000"><b>
		  </b></font>&nbsp;Total&nbsp;:&nbsp;<b style="font-size:12px"><?php echo number_format($Num_Rows_L);?></b>&nbsp;Rows</div></td>
  </tr>
</table>


  