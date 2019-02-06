<div class="step-pane" data-step="<?php echo $Step_Page; ?>">
<form class="form-horizontal " id="Form-Agreement-Change" method="get">
			<div class="form-group">
					<div class="col-xs-12 col-sm-3"></div>
					<div class="col-xs-12 col-sm-3">
					<label>
						<input  id="CHK_TH" name="language1" type="checkbox" class="ace" >
						<span class="lbl"> <span class="cssTH"><b>ภาษาไทย</b></span></span>
					</label>
				</div>
				<div class="col-xs-12 col-sm-3">
					<label>
						<input  id="CHK_ENG" name="language2" type="checkbox" class="ace" >
						<span class="lbl"> <b>English Language</b></span>
					</label>
				</div>
				<div class="col-xs-12 col-sm-3"></div>

			</div>
			<hr>
</form>

	<center>
		<object id="TH_Agreement"  data="agreement/pdf/agr-th.pdf" type="application/pdf" style="width:95%; height:450px;"></object>
		<object id="ENG_Agreement" data="agreement/pdf/agr-en.pdf" type="application/pdf" style="width:95%; height:450px;"></object>
	</center>
	<br/>
	<form class="form-horizontal " id="validation-form-agreement" >
		<div class="form-group">
			<div align="center" class="col-xs-12 col-sm-6 col-sm-offset-3">
				<label>
					<input name="agree" id="agree" type="checkbox" class="ace" >
					<span class="lbl">&nbsp;I accept the policy and aggreements</span> <!-- ยอมรับและคำสัญญาร่วม -->
				</label>
			</div>
		</div>
	</form>
	
	<form class="form-horizontal " id="Form-Submit-preview" action="index.php?Menu=IT-Preview" method="post" >
		<input type="hidden" id="Emp_ID_AG" name="Emp_ID_AG">
	</form>

</div>