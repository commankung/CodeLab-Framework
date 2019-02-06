	<?php
	session_start();
	?>
	<?php include('DB_Configuration.php'); ?>
    <?php
	if(str_replace(' ','',$rs['S_STATUS'])=="ON")
	{
		$btnActive="";
	}else
	{
		$btnActive="disabled='disabled'";
	}
	
	?>


 <div class="formy well" style="margin-bottom:10px; margin-top:15px; background-color:#dff0d8; border-color:#70ab57;">
                    <!-- <h4 class="title"><i class="icon-search"></i> Search</h4>-->
                                  <div class="form">
                                      <!-- Register form (not working)-->
                                      <form class="form-horizontal" id="frm1x" name="form" enctype="multipart/form-data">
 <!--
                                             <div class="form-group form-group-sm ">
                                            <label class="control-label col-md-3" for="em1">User AD</label>
                                            <div class="col-md-7">
                                              <input type="text" class="form-control" id="User_AD" name="User_AD" placeholder="User AD Ex. lalana.k">
                                            </div>
                                            
                                            <button type="button" class="btn btn-primary btn-sm" id="ResultAutoAD" <?php echo $btnActive;?>>
                                            <span class="icon-search" aria-hidden="true"></span>
                                            </button>

                                          </div>  
                                          -->
                                          <h6 class="title" style="color:#0065a9;"><i class="icon-search"></i> Search by Employee ID or User ID</h6>  
              
                                            <div class="form-group form-group-sm ">
                                            <!--<label class="control-label col-md-2" for="em1"></label>-->
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="Emp_ID_S" name="Emp_ID_S" placeholder="Example: 10000960" onkeyup="autoSearchEmp();">
                                            </div>
                                            
                                            <button type="button" class="btn btn-primary btn-sm" id="ResultAutoEmp" <?php echo $btnActive;?>>
                                            <span class="icon-search" aria-hidden="true"></span> ค้นหา
                                            </button>

                                          </div>
 
                                         
                                          </div>
                                      </form>
									  <div class="clearfix"></div>
                                    </div> 
                                  </div>





                  <div class="formy well" style="background-color:#f2dede; border-color:#d4a0a8; margin-top:5px;">
                     <h4 class="title"><i class="icon-edit"></i> Registration for Course Training</h4>
                                  <div class="form">
                                      <!-- Register form (not working)-->
                                      <form class="form-horizontal" id="frm1" name="form" enctype="multipart/form-data">
                                            <div class="form-group form-group-sm ">
                                            <label class="control-label col-md-3" for="em1">Emp.NO</label>
                                            <div class="col-md-7">
                                              <input type="text" class="form-control" id="Emp_ID" name="Emp_ID" placeholder="Employee ID">
                                             <input type="hidden" class="form-control" id="CourseID" name="CourseID" value="<?php echo $rs['CID'];?>">
                                            </div>

                                          </div>
 
                                           <!-- Name Title -->
                                          <div class="form-group form-group-sm">
                                            <label class="control-label col-md-3" for="name-title" style="font-weight:normal;">Title</label>
                                            <div class="col-md-7">
											 <select class="form-control" id="Title_name" name="Title_name">
                                                <option value="-">--- TITLE NAME ---</option>
                                                <option value="Mr">Mr / นาย</option>
                                                <option value="Mrs">Mrs / นาง</option>
                                                <option value="Miss">Miss / นางสาว</option>
                                                </select>  
                                            </div>
                                           </div>
                                                      
              
                                          <!-- Name EN -->
                                          <div class="form-group form-group-sm">
                                            <label class="control-label col-md-3" for="name1" style="font-weight:normal;">Name-EN</label>
                                            <div class="col-md-7">
                                              <input type="text" class="form-control" name="Full_Name_En" id="Full_Name_En">
                                            </div>
                                           </div>
                                           
                                          <!-- Name TH -->
                                          <div class="form-group form-group-sm">
        
                                            <label class="control-label col-md-3" for="name2" style="font-weight:normal;">Name-TH</label>
                                            <div class="col-md-7">
                                              <input type="text" class="form-control" name="Full_Name_Thai" id="Full_Name_Thai">
                                            </div>
                                           </div>
                                            
                                          <!-- Name EN -->
                                          <!--
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="name2">Name [EN]</label>
                                            <div class="col-md-6">
                                              <input type="text" class="form-control" name="Full_Name_Eng" id="Full_Name_Eng">
                                            </div>
                                          </div>   
                                          -->                                           
                                              
                                          <!-- Position -->
                                          <div class="form-group form-group-sm">
                                            <label class="control-label col-md-3" for="Position_Emp" style="font-weight:normal;">Position</label>
                                            <div class="col-md-7">
                                              <input type="text" class="form-control" name="Position_Emp" id="Position_Emp">
                                            </div>
                                          </div>
                                                          
                                          <!-- Department -->
                                          <div class="form-group form-group-sm">
                                            <label class="control-label col-md-3" for="Department_Emp" style="font-weight:normal;">Dept.</label>
                                            <div class="col-md-7">
                                              <input type="text" class="form-control" name="Department_Emp" id="Department_Emp">
                                            </div>
                                          </div>
                                          
                          				<!-- Select box -->
                                          <div class="form-group form-group-sm">
                                            <label class="control-label col-md-3" style="font-weight:normal;">Company</label>
                                            <div class="col-md-7">                               
                                                <select class="form-control" id="AGR_COMPANY" name="AGR_COMPANY">
                                                <option value="-">---- COMPANY ----</option>
												<option value="AH">AAPICO HITECH</option>
												<option value="AA">AAPICO AMATA</option>
												<option value="AF">AAPICO FORGING</option>
												<option value="APC">AAPICO PRECISION</option>
												<option value="AHP">AAPICO HITECH PARTS</option>
												<!--<option value="AHD">AAPICO HITECH DIE MAKING</option>-->
												<option value="AHR">AAPICO HITECH RAYONG</option>
												<option value="AHT">AAPICO HITECH TOOLING</option>
												<option value="AITS">AAPICO ITS</option>
												<option value="AERP">AERP</option>
												<option value="AL">AAPICO LAMTECH</option>
												<option value="AP">AAPICO PLASTICS</option>
												<option value="APR">AAPICO PLASTIC RAYONG</option>
												<option value="AS">ABLE SANOH (ASICO)</option>
												<option value="ASP">AAPICO STURCTURAL PRODUCTS</option>
												<option value="AM">ABLE MOTORS</option>
												<option value="EA">EDSHA AAPICO</option>
												<option value="NESC">NEW ERA SALES</option>
                                                </select>  
                                            </div>
                                          </div> 


                                          <!-- Mobile -->
                                          <div class="form-group form-group-sm">
                                            <label class="control-label col-md-3" for="Mobile"  style="font-weight:normal;">Mgr.Approve</label>
                                            <div class="col-md-7">
                                              <input type="text" class="form-control" name="emrg" id="emrg"> 
                                            </div>
                                            * E-mail
                                          </div>

                                          <!-- Mobile -->
                                          <div class="form-group form-group-sm">
                                            <label class="control-label col-md-3" for="Mobile"  style="font-weight:normal;">Mobile</label>
                                            <div class="col-md-7">
                                              <input type="text" class="form-control" name="Mobile_Emp" id="Mobile_Emp">
                                            </div>
                                          </div>
                                          
                                           <!-- Mobile -->
                                          <div class="form-group form-group-sm">
                                            <label class="control-label col-md-3" for="Mobile"  style="font-weight:normal;">จุดขึ้นรถ</label>
                                            <div class="col-md-7">
                                              <input type="text" class="form-control" name="pcar" id="pcar">
                                              <input type="hidden" class="form-control" name="statusSubmit" id="statusSubmit">
                                              <input type="hidden" class="form-control" name="Profile_ID" id="Profile_ID">
                                            </div>
                                          </div>                                                                                  
                                                
                                          <!-- Buttons -->

                                          <div class="form-actions">
                                             <!-- Buttons -->
                                             <?php
											    if(str_replace(' ','',$_SESSION['sesusertrn'])!="")
												{
													$msoffse=1;
												}else
												{
													$msoffse=3;
												}
											 ?>
											 <div class="col-md-12 col-md-offset-<?php echo $msoffse;?>">
												<button type="submit" class="btn btn-primary" onclick="return ExecuteOnSubmit();" id="SaveRegister" <?php echo $btnActive;?>>
                                                <span class="icon-ok-circle" aria-hidden="true"></span> Register
                                                </button>
                                                &nbsp;
                                                <?php
                                                if(str_replace(' ','',$_SESSION['sesusertrn'])!="")
												{
												?>
                                                <button type="submit" class="btn btn-warning" onclick="return UpdateOnSubmit();" id="UpdateRegister" <?php echo $btnActive;?>>
                                                <span class="icon-save" aria-hidden="true"></span> Edit
                                                </button>
                                                &nbsp;
                                                <?php } ?>
												<button type="reset" class="btn btn-danger" <?php echo $btnActive;?>>
                                                <span class="icon-remove-circle" aria-hidden="true"></span> Reset
                                                </button>
											</div>
                                          </div>
                                      </form>
									  <div class="clearfix"></div>
                                    </div> 
                                  </div>

 <script type="text/JavaScript">
function ExecuteOnSubmit()
{
var status = chkFieldadd();
	if(status == true)
	{
		var res = confirm("Are you sure you want to submit data ?");
		if(res){
			document.getElementById("statusSubmit").value="Register";
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
	if(document.getElementById("Emp_ID").value == ""){
		ret = false;
		alert("Please input your Employee ID");
		document.getElementById("Emp_ID").focus();
	}else if(document.getElementById("Title_name").value == "-"){
		ret = false;
		alert("Please input your title name");
		document.getElementById("Title_name").focus();
	}else if(document.getElementById("Full_Name_En").value == ""){
		ret = false;
		alert("Please input your name english");
		document.getElementById("Full_Name_En").focus();
	}else if(document.getElementById("Full_Name_Thai").value == ""){
		ret = false;
		alert("Please input your name thai");
		document.getElementById("Full_Name_Thai").focus();
	}else if(document.getElementById("Position_Emp").value == ""){
		ret = false;
		alert("Please input your position");
		document.getElementById("Position_Emp").focus();
	}else if(document.getElementById("Department_Emp").value == ""){
		ret = false;
		alert("Please input your department");
		document.getElementById("Department_Emp").focus();
	}else if(document.getElementById("AGR_COMPANY").value == "-"){
		ret = false;
		alert("Please select your company");
		document.getElementById("AGR_COMPANY").focus();
	}else if(document.getElementById("Mobile_Emp").value == ""){
		ret = false;
		alert("Please input your mobile for contact");
		document.getElementById("Mobile_Emp").focus();
	}else if(document.getElementById("emrg").value == ""){
		ret = false;
		alert("Please input e-mail your supervisor");
		document.getElementById("emrg").focus();
	}else if(document.getElementById("emrg").value != ""){

		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    	if (!filter.test(document.getElementById("emrg").value)) {
			ret = false;
    		alert('Please provide a valid email address');
			document.getElementById("emrg").focus();
		}
	}

 return ret;
};
</script>

 <script type="text/JavaScript">
function UpdateOnSubmit()
{
var status = chkFieldUpdate();
	if(status == true)
	{
		var res = confirm("Are you sure you want to update data ?");
		if(res){
			document.getElementById("statusSubmit").value="Edit";
			return true;
			}
		else
			return false;
	}else
	{
		return false;
	}
}
function chkFieldUpdate(){ 
 var ret = true;
	if(document.getElementById("Emp_ID").value == ""){
		ret = false;
		alert("Please input your Employee ID");
		document.getElementById("Emp_ID").focus();
	}else if(document.getElementById("Title_name").value == "-"){
		ret = false;
		alert("Please input your title name");
		document.getElementById("Title_name").focus();
	}else if(document.getElementById("Full_Name_En").value == ""){
		ret = false;
		alert("Please input your name english");
		document.getElementById("Full_Name_En").focus();
	}else if(document.getElementById("Full_Name_Thai").value == ""){
		ret = false;
		alert("Please input your name thai");
		document.getElementById("Full_Name_Thai").focus();
	}else if(document.getElementById("Position_Emp").value == ""){
		ret = false;
		alert("Please input your position");
		document.getElementById("Position_Emp").focus();
	}else if(document.getElementById("Department_Emp").value == ""){
		ret = false;
		alert("Please input your department");
		document.getElementById("Department_Emp").focus();
	}else if(document.getElementById("AGR_COMPANY").value == "-"){
		ret = false;
		alert("Please select your company");
		document.getElementById("AGR_COMPANY").focus();
	}else if(document.getElementById("Mobile_Emp").value == ""){
		ret = false;
		alert("Please input your mobile for contact");
		document.getElementById("Mobile_Emp").focus();
	}else if(document.getElementById("emrg").value == ""){
		ret = false;
		alert("Please input e-mail your supervisor");
		document.getElementById("emrg").focus();
	}else if(document.getElementById("emrg").value != ""){

		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    	if (!filter.test(document.getElementById("emrg").value)) {
			ret = false;
    		alert('Please provide a valid email address');
			document.getElementById("emrg").focus();
		}
	}

 return ret;
};
</script>

