
<?php
include('DB_Configuration.php');
	$sPe ="select * from TBL_TRAINING order by ID DESC";
	$qPe = mssql_query($sPe);
	$rw=mssql_num_rows($qPe);
?>
										<h3 class="header smaller lighter blue" style="margin-bottom:2px; margin-top:5px;"><i class="ace-icon fa fa-graduation-cap" style="color:#C3C"></i> <font color="#669900">รายการข้อมูล Course Training</font>  <i class="fa fa-star-o" style="color:#C3F;"></i><i class="fa fa-star-o" style="color:#C3F;"></i><i class="fa fa-star-o" style="color:#C3F;"></i>
                                        </h3>
										<div class="table-header" style="margin-top:2px;">
                                        <span class="label label-lg label-light arrowed-right"><i class="fa fa-hand-o-right"></i></span>
										<a class="white" href="#" data-rel="tooltip" title="Add new record" data-toggle="modal" data-target="#modal-add"><span class="label label-lg label-yellow arrowed-in arrowed-in-right"><b>Add New Record</b></span></a><span class="label label-lg label-light arrowed"><i class="fa fa-hand-o-left"></i></span>
										</div>

                                        <table id="dynamic-tablex" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
														Course ID
														</th>
														<th>Training Course</th>
														<th>Start Date</th>
														<th class="hidden-480">Finish Date</th>

														<th class="hidden-480">
															Post By
														</th>
														<th class="hidden-480">Status</th>

														<th></th>
													</tr>
												</thead>
                                                <tbody>

                                                <?php while($rFe=mssql_fetch_array($qPe)){ ?>
													<tr>
														<td class="center">
															<?php echo $rFe['CID'];?>
														</td>

														<td>
															<span style="font-family:Verdana, Geneva, sans-serif;font-weight:400; color:#333;"><?php echo iconv('tis-620','utf-8',$rFe['TITLE']);?></span>
														</td>
														<td><?php echo $rFe['S_DATE'];?></td>
														<td class="hidden-480"><?php echo $rFe['E_DATE'];?></td>
														<td><?php echo $rFe['U_ADMIN'];?></td>

														<td class="hidden-480">
                                                        <?php 
														if($rFe['S_STATUS']=="OFF"){
														?>
                                                        <label>
													<span class="label label-sm label-inverse arrowed arrowed-righ" style="background-color:#666"><?php echo $rFe['S_STATUS'];?></span>
													</label>
                                                    <?php }if($rFe['S_STATUS']=="ON"){ ?>
                                                        <label>
														<span class="label label-sm label-success arrowed arrowed-righ" style="background-color:#390"><?php echo $rFe['S_STATUS'];?></span>
													</label>
                                                    <?php } ?>                                                    
														</td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons" id="bootbox-regular">
 																<!--
                                                                <a class="orange tooltip-warning" href="#" data-rel="tooltip" title="List user register" >
																	<i class="ace-icon fa fa-list bigger-130" ></i>
																</a>
                                                               -->                                                            
																<a class="blue tooltip-info" href="http://intranet.aapico.com/aapico-2014/new/blog-single-training1.php?ID=<?php echo $rFe['ID'];?>" data-rel="tooltip" title="Detail course" target="_blank">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green tooltip-success" id="ledit" href="#edit-modal" data-course-id="<?php echo $rFe['ID'];?>" data-rel="tooltip" title="Edit course" data-toggle="modal">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red tooltip-error" href="#delete-modal" id="btnDelete" data-course-id="<?php echo $rFe['ID'];?>" data-rel="tooltip" title="Delete course"  data-toggle="modal">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>
														</td>
													</tr>
													<?php }//close while ?>
													  </tbody>
                                        </table>
