<?php
session_start();
?>
 
<h3 class="header smaller lighter blue" style="margin-bottom:2px; margin-top:10px;"><i class="ace-icon fa fa-male" style="color:#C3C"></i><i class="ace-icon fa fa-female" style="color:#C3C"></i> <font color="#669900">รายการข้อมูลพนักงานที่ได้รับการอบรมเรียบร้อยแล้ว </font>  <i class="fa fa-star-o" style="color:#C3F;"></i><i class="fa fa-star-o" style="color:#C3F;"></i><i class="fa fa-star-o" style="color:#C3F;"></i>&nbsp;&nbsp;
										<font color="#0000FF">Login by admin&nbsp;&nbsp;<i class="fa fa-user"></i>
										&nbsp;&nbsp;:  <?php echo str_replace(' ','',$_SESSION['sesusertrn']);?>
										</font>
                                        </h3>
										
								<form class="form-search" role="form" id="frmsrhEm" name="form" enctype="multipart/form-data">
								<div class="row">
									<div class="col-xs-12 col-sm-4"></div>
									<div class="col-xs-12 col-sm-4">
										<div class="input-group" style="padding-top:15px;">

											<span class="input-group-addon">
												<i class="ace-icon fa fa-credit-card green"></i>
											</span>
											<input type="text" class="form-control search-query" id="kword" name="kword" placeholder="Employee ID" style="font-family:Verdana, Geneva, sans-serif; font-size:14px" onkeyup="AjaxSEmp(1,this.value);" onchange="AvalchangeEm(this.value);"/>
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

<div id="display-list-trn-Emp"></div>                                             

 <!-- Modal list user traning course   -->                             
 <div id="v-trn-modal" class="modal fade" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="margin-bottom:0px;padding-bottom:0px; padding-top:5px; background-color:#FFC;"><!--/////////////////////-->
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="mclose" style="color:#F00;">×</button>   
				<h4 style="margin-bottom:0px;padding-bottom:10px; padding-left:6px; color:#03F;"><i class="fa fa-bar-chart"></i> Detail Course Record</h4>
			</div>
            <form class="form-horizontal" role="form" id="frm-v-trn" name="form" enctype="multipart/form-data">
			<div class="modal-body" style="margin-top:0px;padding-top:20px;width:100%">
            
             <div id="ModalEmployee"></div>
				
			</div> <!-- end modal-body-->
            </form> 
		</div>
	</div>
</div>


<script src="assets/js/jquery.js"></script> <!-- jQuery -->


<script type="text/javascript">
$(document).ready(function() {
	
	$('#v-trn-modal').on('show.bs.modal', function(e) {
		//$('#ledit').tooltip('hide');
		var $modal = $(this);
    	var EID = $(e.relatedTarget).data('emp-id');

					$.ajax({
						cache: false,
						type: "POST",
						//dataType: "json",
						url: "v-trn-user.php", //Relative or absolute path to response.php file
						data: 'EID=' + EID,
						success: function(data1) 
						{
							//alert(data1);
							//alert((Object.keys(data1).length)/7);
							document.getElementById("ModalEmployee").innerHTML = data1;
							
							/*c =0;
							for(i=0 ; i< (Object.keys(data1).length)/7 ;i++)
							{
								$('#CID'+i).text(data1[c]);
								c++;
								$("#CourseN"+i).text(data1[c]);
								c++;
								$('#trn-date'+i).text(data1[c]);
								c++;
								$('#trn-venue'+i).text(data1[c]);
								c++;
								$("#dEmployee").text(data1[4]+": "+data1[5]+" ("+data1[6]+")");
								c=c+3;
							}*/
						}
				  });

			});
			
});
</script>


 <script type="text/JavaScript">
 var kwordEmx="";
  $(document).ready(function() {
	$("form#frmsrhEm").submit(function(event){
		kwordEmx=document.getElementById("kword").value;
		//alert("xxx "+kwordEmx);
		AjaxSEmp(PageEm,kwordEmx);
		return false;
	});
	  

});

</script>



<link rel="stylesheet" href="assets/css/pagination.css">

<script src="assets/js/jquery.js"></script> <!-- jQuery -->


<script type="text/JavaScript">

function AvalchangeEm(str)
{
	kwordEmx=str;
}

</script>                                                                         