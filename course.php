<?php
session_start();
?>

<h3 class="header smaller lighter blue" style="margin-bottom:2px; margin-top:10px;"><i class="ace-icon fa fa-graduation-cap" style="color:#C3C"></i> <font color="#669900">รายการข้อมูล Course Training</font>  <i class="fa fa-star-o" style="color:#C3F;"></i><i class="fa fa-star-o" style="color:#C3F;"></i><i class="fa fa-star-o" style="color:#C3F;"></i>&nbsp;&nbsp;
										<font color="#0000FF">Login by admin&nbsp;&nbsp;<i class="fa fa-user"></i>
                                &nbsp;&nbsp;:  <?php echo str_replace(' ','',$_SESSION['sesusertrn']);?>
                                </font>
                                        </h3>
										<div class="table-header" style="margin-top:2px;">
                                        <span class="label label-lg label-light arrowed-right"><i class="fa fa-hand-o-right"></i></span>
										<a class="white" href="#" data-rel="tooltip" title="Add new record" data-toggle="modal" data-target="#modal-add"><span class="label label-lg label-yellow arrowed-in arrowed-in-right"><b>Add New Record</b></span></a><span class="label label-lg label-light arrowed"><i class="fa fa-hand-o-left"></i></span>
										</div>
                                        
                                        <form class="form-search" role="form" id="frmsrh" name="form" enctype="multipart/form-data">
									<div class="row">
										<div class="col-xs-12 col-sm-4"></div>
										<div class="col-xs-12 col-sm-4">
											<div class="input-group" style="padding-top:15px;">

												<span class="input-group-addon">
													<i class="ace-icon fa fa-newspaper-o green"></i>
												</span>
												<input type="text" class="form-control search-query" id="kword" name="kword" placeholder="Course Subject" style="font-family:Verdana, Geneva, sans-serif; font-size:14px" onkeyup="AjaxCourse(1);" onchange="Avalchange(this.value);"/>
												<span class="input-group-btn">
													<button type="submit" class="btn btn-primary btn-sm" id="btnSearch">
														<span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
														Search
													</button>
												</span>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4">
										</div>
									</div>
								</form>

<div id="display-list-course"></div>                                                    

 
 <!-- Modal Add -->                                
 <div id="modal-add" class="modal fade" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="margin-bottom:0px;padding-bottom:0px;background-color:#FFC; padding-top:5px;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="mclose" style="color:#F00;">×</button>
				<h4 style="margin-bottom:0px;padding-bottom:10px; padding-left:6px; color:#03F;"><i class="fa fa-graduation-cap"></i> New Course Record</h4>
			</div>
            <form class="form-horizontal" role="form" id="frm" enctype="multipart/form-data">
			<div class="modal-body" style="margin-top:0px;padding-top:20px;width:100%">

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Course ID </label>

										<div class="col-sm-9">
											<input type="text" id="course_trn_id" name="course_trn_id" class="col-xs-10 col-sm-10" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;" />
										</div>
									</div>
									<div class="space-4"></div>
                                    

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Course Name </label>

										<div class="col-sm-9">
											<input type="text" id="course_name" name="course_name" class="col-xs-10 col-sm-10" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;" />
										</div>
									</div>
									<div class="space-4"></div>
                                    
 									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainee </label>

										<div class="col-sm-9">
											<input type="text" id="Trainee" name="Trainee" class="col-xs-10 col-sm-10" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;"/>
										</div>
									</div>
									<div class="space-4"></div>                                     
                                    
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Venue </label>

										<div class="col-sm-9">
											<!--<input type="text" id="Tbranch" class="col-xs-10 col-sm-10" maxlength="150" />-->
 <select class="col-xs-10 col-sm-10" id="Tbranch" name="Tbranch" onChange="showHideOther();">
                                                <option value="-">---- COMPANY ----</option>
                        <option value="AH">AAPICO HITECH</option>
						<option value="AA">AAPICO AMATA</option>
						<option value="AF">AAPICO FORGING</option>
						<option value="AP">AAPICO PLASTIC</option>
                        <option value="KR">KUNGNAM RESORT</option>
                        <option value="OTHER">OTHER</option>

                                        </select>                                           
                                                                                        
										</div>
									</div>
									<div class="space-4"></div> 
                                    
                                    
                             <!-- Other-->       
							<div id="d_other" style="display:none;">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Other Detail </label>
										<div class="col-sm-9">
											<input type="text" id="txt_other" name="txt_other" class="col-xs-10 col-sm-10" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal; background-color:#FFC;"/>
										</div>
									</div>
									<div class="space-4"></div>     
                             </div>
                             
                                                                    

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Training Room </label>

										<div class="col-sm-9">
											<input type="text" id="Trn_room" name="Trn_room" class="col-xs-10 col-sm-10" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;" />
										</div>
									</div>
									<div class="space-4"></div>                                     
                                    
                                    
 									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Training Date </label>

										<div class="col-sm-6">
																<div class="input-group">
																	<input class="col-xs-10 col-sm-5" type="text" name="date-range-picker1" id="date-range-picker1" style="width:312px;font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
										</div>
									</div>
									<div class="space-4"></div> 
                                    
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Start Time </label>

										<div class="col-sm-6">
											<div class="input-group bootstrap-timepicker">
															<input id="timepicker1" name="timepicker1" type="text" class="form-control" style="width:310px;font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;" />
															<span class="input-group-addon">
																<i class="fa fa-clock-o bigger-110"></i>
															</span>
														</div>                                  
										</div>
									</div>
									<div class="space-4"></div>   
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Finish Time </label>

										<div class="col-sm-6">
											<div class="input-group bootstrap-timepicker">
															<input id="timepicker2" name="timepicker2" type="text" class="form-control"  style="width:310px;font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;"/>
															<span class="input-group-addon">
																<i class="fa fa-clock-o bigger-110"></i>
															</span>
														</div>                                  
										</div>
									</div>
									<div class="space-4"></div>                                                                                         
                                                        
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Description </label>

										<div class="col-sm-9">
                                            
											<textarea class="col-xs-10 col-sm-10 limited" id="description" name="description" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;"></textarea>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Register Date Range </label>

										<div class="col-sm-6">
											<div class="input-group">
											<input class="col-xs-10 col-sm-5" type="text" name="date-range-picker2" id="date-range-picker2" style="width:312px;font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;" />
                                            <span class="input-group-addon">
													<i class="fa fa-calendar bigger-110"></i>
											</span>
											</div>
					
										</div>
									</div>
									<div class="space-4"></div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Users Quota </label>

										<div class="col-sm-9">
											<input type="text" id="uq" name="uq" class="col-xs-10 col-sm-10" value="30" maxlength="3" />
										</div>
									</div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Substitution </label>

										<div class="col-sm-9">
											<input type="text" id="sb" name="sb" class="col-xs-10 col-sm-10" value="5" maxlength="2" />
										</div>
									</div>
									<div class="space-4"></div>
                                    
									<div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Upload Poster </label>
										<div class="col-sm-4">
											<input type="file" name="file" id="id-input-file-2" class="form-control" style="width:312px;"/>
										</div>
									</div>
  
			</div>
									<div class="modal-footer">
											<button class="btn btn-success" type="submit" id="submit" name="submit" onClick="return ExecuteOnSubmit();">
												<i class="ace-icon fa fa-floppy-o bigger-110"></i>
												Submit
											</button>
                                           <button class="btn" data-dismiss="modal" aria-hidden="true" id="mclose">
					<i class="ace-icon fa fa-undo bigger-110"></i>
						Cencel
					</button>
									</div>            
            </form>
		</div>
	</div>
</div>


 
 <!-- Modal Edit   -->                             
 <div id="edit-modal" class="modal fade" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="margin-bottom:0px;padding-bottom:0px; padding-top:5px; background-color:#FFC;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="mclose" style="color:#F00;">×</button>
				<h4 style="margin-bottom:0px;padding-bottom:10px; padding-left:6px; color:#03F;"><i class="fa fa-pencil-square-o"></i> Edit Course Record</h4>
			</div>
            <form class="form-horizontal" role="form" id="frm1" name="form" enctype="multipart/form-data">
			<div class="modal-body" style="margin-top:0px;padding-top:20px;width:100%">

 									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Course Status </label>

										<div class="col-sm-9">
										<input name="chkOnOff" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" id="chkOnOff" value="ON" />
                                        <span class="lbl"></span>
										</div>
									</div>                                           
 
 									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Course ID </label>

										<div class="col-sm-9">
											<input type="text" id="course_trn_id1" name="course_trn_id1" class="col-xs-10 col-sm-10" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;" />
										</div>
									</div>
									<div class="space-4"></div>
                        
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Course Name </label>

										<div class="col-sm-9">
											<input type="text" id="course_name1" name="course_name1" class="col-xs-10 col-sm-10" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;"/>
                                            <input type="hidden" id="eid" name="eid"/>
										</div>
									</div>
									<div class="space-4"></div>
                                    
 									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainee </label>

										<div class="col-sm-9">
											<input type="text" id="Trainee1" name="Trainee1" class="col-xs-10 col-sm-10" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;"/>
										</div>
									</div>
									<div class="space-4"></div>                                     
                                    
                                    
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Venue </label>

										<div class="col-sm-9">
											<!--<input type="text" id="Tbranch" class="col-xs-10 col-sm-10" maxlength="150" />-->
 <select class="col-xs-10 col-sm-10" id="Tbranch1" name="Tbranch1"  onChange="showHideOther1();">
                          <option value="-">---- COMPANY ----</option>
                        <option value="AH">AAPICO HITECH</option>
						<option value="AA">AAPICO AMATA</option>
						<option value="AF">AAPICO FORGING</option>
						<option value="AP">AAPICO PLASTIC</option>
 						<option value="KR">KUNGNAM RESORT</option>
                        <option value="OTHER">OTHER</option>
                         </select>                                           
                                                                                        
										</div>
									</div>
									<div class="space-4"></div> 
                                    
                             <!-- Other-->       
							<div id="d_other1" style="display:none;">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Other Detail </label>
										<div class="col-sm-9">
											<input type="text" id="txt_other1" name="txt_other1" class="col-xs-10 col-sm-10" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal; background-color:#FFC;"/>
										</div>
									</div>
									<div class="space-4"></div>     
                             </div>                                    
                                    

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Training Room </label>

										<div class="col-sm-9">
											<input type="text" id="Trn_room1" name="Trn_room1" class="col-xs-10 col-sm-10" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;"/>
										</div>
									</div>
									<div class="space-4"></div>                                     
                                    
                                    
 									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Training Date </label>

										<div class="col-sm-6">
											<div class="input-group">
											<input class="col-xs-10 col-sm-5" type="text" name="date-range-picker3" id="date-range-picker3" style="width:312px;" />
                                            <span class="input-group-addon">
													<i class="fa fa-calendar bigger-110"></i>
											</span>
											</div>
					
										</div>
									</div>
									<div class="space-4"></div> 
                                    
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Start Time </label>

										<div class="col-sm-6">
											<div class="input-group bootstrap-timepicker">
															<input id="timepicker3" name="timepicker3" type="text" class="form-control" style="width:310px;font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;" />
															<span class="input-group-addon">
																<i class="fa fa-clock-o bigger-110"></i>
															</span>
														</div>                                  
										</div>
									</div>
									<div class="space-4"></div>   
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Finish Time </label>

										<div class="col-sm-6">
											<div class="input-group bootstrap-timepicker">
															<input id="timepicker4" name="timepicker4" type="text" class="form-control"  style="width:310px;font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;" value="" />
															<span class="input-group-addon">
																<i class="fa fa-clock-o bigger-110"></i>
															</span>
														</div>                                  
										</div>
									</div>
									<div class="space-4"></div>                                                                                         
                                                        
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Description </label>

										<div class="col-sm-9">
                                            
											<textarea class="col-xs-10 col-sm-10 limited" id="description1" name="description1" maxlength="150" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; font-weight:normal;"></textarea>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Register Date Range </label>

										<div class="col-sm-6">
											<div class="input-group">
											<input class="col-xs-10 col-sm-5" type="text" name="date-range-picker4" id="date-range-picker4" style="width:312px;" />
                                            <span class="input-group-addon">
													<i class="fa fa-calendar bigger-110"></i>
											</span>
											</div>
					
										</div>
									</div>
									<div class="space-4"></div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Users Quota </label>

										<div class="col-sm-9">
											<input type="text" id="uq1" name="uq1" class="col-xs-10 col-sm-10" value="30" maxlength="3"/>
										</div>
									</div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Substitution </label>

										<div class="col-sm-9">
											<input type="text" id="sb1" name="sb1" class="col-xs-10 col-sm-10" value="5" maxlength="2" />
										</div>
									</div>
									<div class="space-4"></div>
                                    
									<div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Upload Poster </label>
										<div class="col-sm-4">
											<input type="file" name="file1" id="id-input-file-3" class="col-xs-10 col-sm-10" style="width:312px;"/>
										</div>
									</div>
                                                                         
			</div>
            									<div class="modal-footer">
											<button class="btn btn-warning" type="submit" id="submit" name="submit" onClick="return ExecuteOnUpdate();">
												<i class="ace-icon fa fa-floppy-o bigger-110"></i>
												Update
											</button>
                                            
                                           <button class="btn" data-dismiss="modal" aria-hidden="true" id="mclose">
					<i class="ace-icon fa fa-undo bigger-110"></i>
						Cencel
					</button>
									</div> 
            </form> 
		</div>
	</div>
</div>


<!-- form Delete -->
 <div id="delete-modal" class="modal fade" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="margin-bottom:0px;padding-bottom:0px; padding-top:5px; background-color:#FFC;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="mclose" style="color:#F00;">×</button>
				<h4 style="margin-bottom:0px;padding-bottom:10px; padding-left:6px; color:#03f;"><i class="fa fa-trash-o"></i> Delete Course Record</h4>
			</div>
            <form class="form-horizontal" role="form" id="frm_delete" name="form" enctype="multipart/form-data">
			<div class="modal-body" style="margin-top:0px;padding-top:20px;width:100%">              

  					<p>
                    <h4 class="lighter purple">
   					 Are you sure to delete course ID=
                     <span id="courseIDd" style="color:#F00; font-weight:bold;"></span> 
                     ?
                     </h4>
                     <input type="hidden" id="courseIDt" name="courseIDt"/>
  					</p>
              
			</div>
            <div class="modal-footer">
					<button class="btn btn-danger" type="submit" id="submit" name="submit" onClick="return ConfirmDelete();">
					<i class="ace-icon fa fa-trash-o bigger-110"></i>
						Delete
					</button>
                    
                    <button class="btn" data-dismiss="modal" aria-hidden="true" id="mclose">
					<i class="ace-icon fa fa-undo bigger-110"></i>
						Cencel
					</button>
			</div>
            </form>
			</div>

		</div>
	</div>
</div>



 <!-- Modal list user traning course   -->                             
 <div id="checkUser-modal" class="modal fade" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog"  style="width:70%;">
		<div class="modal-content">
			<div class="modal-header" style="margin-bottom:0px;padding-bottom:0px; padding-top:5px; background-color:#FFC;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="mclose" style="color:#F00;">×</button>
				<h4 style="margin-bottom:0px;padding-bottom:10px; padding-left:6px; color:#03F;"><i class="fa fa-bar-chart"></i> Check Status User Training</h4>
			</div>
            <form class="form-horizontal" role="form" id="frm-chk-ok-user" name="form" enctype="multipart/form-data">
			<div class="modal-body" style="margin-top:0px;padding-top:20px;width:100%">
            	<div id="d-chk-user-trn"></div>
            
			</div> 
            </form> 
		</div>
	</div>
</div>


<script src="assets/js/jquery.js"></script> <!-- jQuery -->


 <script type="text/javascript">
 var chboxReturn=null;
$(document).ready(function() {
	
	$('#checkUser-modal').on('show.bs.modal', function(e) {
    				var CID = $(e.relatedTarget).data('course-id');
					//alert(CID);
					    	    $.ajax({
									cache: false,
					    			type: "GET",
    								async: false,
   									cache: false,
    								contentType: false,
    								processData: false,
					    			url: "chk-user-ok.php", //Relative or absolute path to response.php file
					    			data: 'CID=' + CID,
					      			success: function(data1) 
					      			{	
										//alert(data1);
										document.getElementById("d-chk-user-trn").innerHTML = data1;
									}
					   		  });

			});
		
			
});
    </script>


 <script type="text/javascript">
function UpdateChkTrn(cid,empid,ic)
 {
	 var chkic=document.getElementById("StatusChk"+ic).checked;
	 $.ajax({
     url: 'save-update-user-trn.php',
     type: 'GET',
     data: 'CID=' + cid+'&EmpID='+empid+'&chktrn='+chkic,
     async: false,
     cache: false,
     contentType: false,
     processData: false,
     success: function (returndata) {
		//alert(returndata);
	   //swal("Save Course", "Save information successfully !!!", "success");
     }
   });
	 //alert(cid+" "+empid+" "+document.getElementById("StatusChk"+ic).checked);
 }
 
$(document).ready(function() {
	$('#timepicker1').datetimepicker({
      pickDate: false,
	   use24hours: true,
        format: 'HH:mm'
    });
	
	$('#timepicker2').datetimepicker({
      pickDate: false,
	   use24hours: true,
        format: 'HH:mm'
    });
	
	$('#timepicker3').datetimepicker({
      pickDate: false,
	   use24hours: true,
        format: 'HH:mm'
    });
	
	$('#timepicker4').datetimepicker({
      pickDate: false,
	   use24hours: true,
        format: 'HH:mm'
    });
	
	
	$('#edit-modal').on('show.bs.modal', function(e) {
		//$('#ledit').tooltip('hide');
		var $modal = $(this);
    	var courseID = $(e.relatedTarget).data('course-id');
		
					    	    $.ajax({
									cache: false,
					    			type: "POST",
					    			dataType: "json",
					    			url: "editcourse.php", //Relative or absolute path to response.php file
					    			data: 'EID=' + courseID,
					      			success: function(data1) 
					      			{	
					      				$('#course_name1').val(data1[0]);
										$('#Trainee1').val(data1[12]);
					      				$("#Tbranch1").val(data1[1]);
				      					$('#Trn_room1').val(data1[2]);
					      				$('#date-range-picker3').val(data1[3]);
					      				$('#timepicker3').val(data1[4]);
					      				$('#timepicker4').val(data1[5]);
										$('#description1').val(data1[6]);
										$('#date-range-picker4').val(data1[7]);
										$('#uq1').val(data1[8]);	
										$('#sb1').val(data1[9]);	
										$('#eid').val(data1[10]);	
										$('#course_trn_id1').val(data1[13]);	
										$('#txt_other1').val(data1[14]);
										txt_other1_c=data1[14];
										//if(data1[14]!="-")
										//{
											showHideOther1();
										//}
										//$('#chkOnOff').val(data1[11]);	
										//alert(data1[11]);
										if(data1[11]=="checked")
										{
											document.getElementById("chkOnOff").checked = true;
											//document.getElementById("chkOnOff").value="ON";
										}else
										{
											document.getElementById("chkOnOff").checked = false;
											//document.getElementById("chkOnOff").value="OFF";
										}
										//alert(data1[11]);			
					      			}
					   		  });

			});
			
	$('#delete-modal').on('show.bs.modal', function(e) {
    	var courseID = $(e.relatedTarget).data('course-id');
		$('#courseIDd').text(courseID);	
		$('#courseIDt').val(courseID);	
/*		
					    	    $.ajax({
									cache: false,
					    			type: "POST",
					    			dataType: "json",
					    			url: "delete-course.php", //Relative or absolute path to response.php file
					    			data: 'EID=' + courseID,
					      			success: function(dataR) 
					      			{		
										alert(dataR);		
					      			}
					   		  });
		
		*/
		
	});			
			
});
    </script>


 <script type="text/JavaScript">
 var kword2="";
  $(document).ready(function() {
	$("form#frmsrh").submit(function(event){
		kword2=document.getElementById("kword").value;
		AjaxCourse(Pagex1);
		return false;
	});
	  
	  
$("form#frm_delete").submit(function(event){
  //disable the default form submission
  event.preventDefault();

  //grab all form data
  var formDatal = new FormData($(this)[0]);
 
  $.ajax({
    url: 'delete-course.php',
    type: 'POST',
    data: formDatal,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndataD) {
	  swal("Delete Course", "Delete information successfully !!!", "success");
	  AjaxCourse(Pagex1);
	 setTimeout($('#delete-modal').modal('hide'), 700);
	 //window.location.reload();
    }
  });
 
  return false;
});

});
function ConfirmDelete()
{
		var res = confirm("Are you sure you want to delete data ?");
		if(res){
			return true;
			}
		else
		{
			return false;
		}
}

</script>



<link rel="stylesheet" href="assets/css/pagination.css">

<script src="assets/js/jquery.js"></script> <!-- jQuery -->

<script>
var txt_other1_c="-";
function showHideOther()
{ 
	if (document.getElementById("Tbranch").value!="OTHER") //Hide others drop-down list if myself is selected
	{
		document.getElementById("d_other").style.display='none';
		document.getElementById("txt_other").value="-";	
	}
	else if (document.getElementById("Tbranch").value=="OTHER")
	{
		document.getElementById("d_other").style.display='block';
		document.getElementById("txt_other").value="";	
	}
}


function showHideOther1()
{ 
	if (document.getElementById("Tbranch1").value!="OTHER") //Hide others drop-down list if myself is selected
	{
		document.getElementById("d_other1").style.display='none';
		document.getElementById("txt_other1").value="-";	
	}
	else if (document.getElementById("Tbranch1").value=="OTHER")
	{
		document.getElementById("d_other1").style.display='block';
		if(txt_other1_c!="-")
		{
			document.getElementById("txt_other1").value=txt_other1_c;
		}else
		{
			document.getElementById("txt_other1").value="";
		}
	}
}

</script>


 <script type="text/JavaScript">
$("form#frm").submit(function(event){
  //disable the default form submission
  event.preventDefault();

  //grab all form data
  var formData = new FormData($(this)[0]);
 
  $.ajax({
    url: 'save-training.php',
    type: 'POST',
    data: formData,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata) {
	  swal("Save Course", "Save information successfully !!!", "success");
	 AjaxCourse(Pagex1);
	  $("#frm")[0].reset(); 
	  //$('.tooltip-info,.tooltip-success,.tooltip-error,.white').tooltip('hide');
	 setTimeout($('#modal-add').modal('hide'), 700);
	 //window.location.reload();
    }
  });
 
  return false;
});

</script>


 <script type="text/JavaScript">
 
 	/* bootbox.confirm("Are you sure?", function(result) {
  		Example.show("Confirm result: "+result);
	}); 
	*/
 
 $(document).ready(function() {
	 
	$("form#frm1").submit(function(event){
  //disable the default form submission
	 event.preventDefault();

  //grab all form data
  var formData1 = new FormData($(this)[0]);
 
  $.ajax({
    url: 'update-training.php',
    type: 'POST',
    data: formData1,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata1) {
		swal("Edit Course", "Update information successfully !!!", "success");
      //alert("บันทึกการแก้ไขข้อมูลเสร็จเรียบร้อยแล้ว จ้าาาาาาาา");
	  //alert("p="+Pagex1+", w="+kword2);
	  AjaxCourse(Pagex1);
	  //$("#frm1")[0].reset(); 
	 //alert(returndata1);
	  //$('#ledit').tooltip('hide');
	  //$('.tooltip-info,.tooltip-success,.tooltip-error,.white').tooltip('hide');
	 setTimeout($('#edit-modal').modal('hide'), 700);
	// window.location.reload();
    }
  });
 
  return false;
	});
});

</script>


 <script type="text/JavaScript">
function ExecuteOnSubmit()
{
var status = chkFieldadd();
	if(status == true)
	{
		var res = confirm("Are you sure you want to submit data ?");
		if(res){
			return true;
			}
		else
			return false;
	}else
	{
		return false;
	}
}
function chkFieldadd(){ 
 var ret = true;
	if(document.getElementById("course_trn_id").value.replace(' ','') == ""){
		ret = false;
		alert("Please input course id");
		document.getElementById("course_trn_id").focus();
	}else if(document.getElementById("course_name").value.replace(' ','') == ""){
		ret = false;
		alert("Please input course name");
		document.getElementById("course_name").focus();
	}else if(document.getElementById("Trainee").value == ""){
		ret = false;
		alert("Please input trainee");
		document.getElementById("Trainee").focus();
	}else if(document.getElementById("Tbranch").value == "-"){
		ret = false;
		alert("Please input training location");
		document.getElementById("Tbranch").focus();
	}else if(document.getElementById("txt_other").value == ""){
		ret = false;
		alert("Please input other detail");
		document.getElementById("txt_other").focus();
	}else if(document.getElementById("Trn_room").value == ""){
		ret = false;
		alert("Please input training room");
		document.getElementById("Trn_room").focus();
	}else if(document.getElementById("date-range-picker1").value == ""){
		ret = false;
		alert("Please input training date");
		document.getElementById("date-range-picker1").focus();
	}else if(document.getElementById("timepicker1").value == ""){
		ret = false;
		alert("Please input start time training");
		document.getElementById("timepicker1").focus();
	}else if(document.getElementById("timepicker2").value == ""){
		ret = false;
		alert("Please input finish time training");
		document.getElementById("timepicker2").focus();
	}else if(document.getElementById("description").value == ""){
		ret = false;
		alert("Please input description");
		document.getElementById("description").focus();
	}else if(document.getElementById("date-range-picker2").value == ""){
		ret = false;
		alert("Please input register date rang");
		document.getElementById("date-range-picker2").focus();
	}else if(document.getElementById("uq").value == ""){
		ret = false;
		alert("Please input Users Quota");
		document.getElementById("uq").focus();
	}else if(document.getElementById("sb").value == ""){
		ret = false;
		alert("Please input Substitution");
		document.getElementById("sb").focus();
	}else if(document.getElementById("id-input-file-2").value == ""){
		ret = false;
		alert("Please input file poster");
		document.getElementById("id-input-file-2").focus();
	}
 return ret;
};
</script>


<script type="text/JavaScript">

function Avalchange(str)
{
	kword2=str;
}


function ExecuteOnUpdate()
{
var status = chkFieldadd1();
	if(status == true)
	{
		var res = confirm("Are you sure you want to update data ?");
		if(res){
			return true;
			}
		else
			return false;
	}else
	{
		return false;
	}
}
function chkFieldadd1(){ 
 var ret = true;
	if(document.getElementById("course_trn_id1").value.replace(' ','') == ""){
		ret = false;
		alert("Please input course id");
		document.getElementById("course_trn_id1").focus();
	}else if(document.getElementById("course_name1").value.replace(' ','') == ""){
		ret = false;
		alert("Please input course name");
		document.getElementById("course_name1").focus();
	}else if(document.getElementById("Trainee1").value == ""){
		ret = false;
		alert("Please input trainee");
		document.getElementById("Trainee1").focus();
	}else if(document.getElementById("Tbranch1").value == "-"){
		ret = false;
		alert("Please input training location");
		document.getElementById("Tbranch1").focus();
	}else if(document.getElementById("txt_other1").value == ""){
		ret = false;
		alert("Please input other detail");
		document.getElementById("txt_other1").focus();
	}else if(document.getElementById("Trn_room1").value == ""){
		ret = false;
		alert("Please input training room");
		document.getElementById("Trn_room1").focus();
	}else if(document.getElementById("date-range-picker3").value == ""){
		ret = false;
		alert("Please input training date");
		document.getElementById("date-range-picker3").focus();
	}else if(document.getElementById("timepicker3").value == ""){
		ret = false;
		alert("Please input start time training");
		document.getElementById("timepicker3").focus();
	}else if(document.getElementById("timepicker4").value == ""){
		ret = false;
		alert("Please input finish time training");
		document.getElementById("timepicker4").focus();
	}else if(document.getElementById("description1").value == ""){
		ret = false;
		alert("Please input description");
		document.getElementById("description1").focus();
	}else if(document.getElementById("date-range-picker4").value == ""){
		ret = false;
		alert("Please input register date rang");
		document.getElementById("date-range-picker4").focus();
	}else if(document.getElementById("uq1").value == ""){
		ret = false;
		alert("Please input Users Quota");
		document.getElementById("uq1").focus();
	}else if(document.getElementById("sb1").value == ""){
		ret = false;
		alert("Please input Substitution");
		document.getElementById("sb1").focus();
	}
 return ret;
};
</script>

 
                                                                           