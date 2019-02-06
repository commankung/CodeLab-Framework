<div class="main-content" style="background-color:#eceff4">
	<div class="main-content-inner">
		<div class="breadcrumbs" id="breadcrumbs">
			<script type="text/javascript">
				try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-tachometer"></i>
					<a href="#">Dashboard</a>
				</li>	
			</ul><!-- /.breadcrumb -->
		</div>
		<section class="content">
			<!----------- Widget New Requisition ------>
			<div class="row">
				<div class="col-md-7">
						<div class="row">
						<!------------- USER AD --------------->
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="info-box">
								<span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>
								<div class="info-box-content">
									<span class="info-box-text">New User AD</span>
									<span class="info-box-number">74</span>
								</div><!-- /.info-box-content -->
							</div><!-- /.info-box -->
						</div><!-- /.col -->
						
						<!------------- Email --------------->
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="info-box">
								<span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span>
								<div class="info-box-content">
									<span class="info-box-text">New Email</span>
									<span class="info-box-number">84</span>
								</div><!-- /.info-box-content -->
							</div><!-- /.info-box -->
						</div><!-- /.col -->
		
						<!------------- Internet --------------->
		           		<div class="col-md-6 col-sm-6 col-xs-12">
		              		<div class="info-box">
		                		<span class="info-box-icon bg-green"><i class="fa fa-laptop"></i></span>
		                		<div class="info-box-content">
		                  			<span class="info-box-text">New Internet level</span>
		                  			<span class="info-box-number">50</span>
		                		</div><!-- /.info-box-content -->
		              		</div><!-- /.info-box -->
		            	</div><!-- /.col -->
		            	
		            	<!------------- PRINTER --------------->
		           		<div class="col-md-6 col-sm-6 col-xs-12">
		              		<div class="info-box">
		                		<span class="info-box-icon bg-yellow"><i class="fa fa-print"></i></span>
		                		<div class="info-box-content">
		                			<span class="info-box-text">New Printer</span>
		               				<span class="info-box-number">32</span>
		                		</div><!-- /.info-box-content -->
		              		</div><!-- /.info-box -->
		            	</div><!-- /.col -->
		            
		            	<!------------- Removable Device --------------->
		           		<div class="col-md-6 col-sm-6 col-xs-12">
		              		<div class="info-box">
		                		<span class="info-box-icon bg-blue"><i class="fa fa-hdd-o"></i></span>
		                		<div class="info-box-content">
		                			<span class="info-box-text">New Removeable Device</span>
		               				<span class="info-box-number">18</span>
		                		</div><!-- /.info-box-content -->
		              		</div><!-- /.info-box -->
		            	</div><!-- /.col -->
		            	
		            	<!------------- Telephone --------------->
		           		<div class="col-md-6 col-sm-6 col-xs-12">
		              		<div class="info-box">
		                		<span class="info-box-icon bg-purple"><i class="fa fa-phone"></i></span>
		                		<div class="info-box-content">
		                			<span class="info-box-text">New Telephone</span>
		               				<span class="info-box-number">24</span>
		                		</div><!-- /.info-box-content -->
		              		</div><!-- /.info-box -->
		            	</div><!-- /.col -->
	            	</div><!-- /.row -->
            	</div><!-- /.col -->
            	<div class="col-md-5">
				<div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Showroom</h3>
                  <div class="box-tools pull-right"></div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="chart-responsive">
                        <canvas id="pieChart" height="150"></canvas>
                      </div><!-- ./chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-4">
                      <ul class="chart-legend clearfix">
                        <li><i class="fa fa-circle-o text-red"></i> Able Motor (NV)</li>
                        <li><i class="fa fa-circle-o text-green"></i> Able Motor (LP)</li>
                        <li><i class="fa fa-circle-o text-yellow"></i> New Era Sale (RM)</li>
                        <li><i class="fa fa-circle-o text-aqua"></i> New Era Sale (SM)</li>
                      </ul>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class="box-footer no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">Able Motor<span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                    <li><a href="#">New Era Sale<span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a></li>
                  
                  </ul>
                </div><!-- /.footer -->
              </div><!-- /.box -->

            	</div>
          	</div><!-- /.row -->
          	
			<!----------- Close Widget New Requisition ------>
			<div class="row">
            	<div class="col-md-12">
              		<div class="box box-danger">
                		<div class="box-header with-border">
                  			<h3 class="box-title">Monthly Report Requisition</h3>
                  			<div class="box-tools pull-right"></div>
                		</div><!-- /.box-header -->
                		<div class="box-body">
                  			<div class="row">
                  				<!---------- Show Chart ---------->
                    			<div class="col-md-8">
                      				<p class="text-center">
                        				<strong>Requisition: 1 May, 2015 - 31 May, 2015</strong>
                      				</p>
                      				<div class="chart">
                        				<!-- Sales Chart Canvas -->
                        				<canvas id="salesChart" height="180"></canvas>
                     				 </div><!-- /.chart-responsive -->
                    			</div><!-- /.col -->
                    			<div class="col-md-4">
                      				<p class="text-center">
                        				<strong>Requisition By Company</strong>
                      				</p>
                      				<!-------- AAPICO HITECH ------->
                      				<div class="progress-group">
                        				<span class="progress-text">AAPICO HITECH</span>
                        				<span class="progress-number"><b>40</b>/100</span>
                        				<div class="progress sm">
                          					<div class="progress-bar progress-bar-aqua" style="width: 40%"></div>
                        				</div>
                      				</div><!-- /.progress-group -->
                      				<!-------- AAPICO HITECH PARTS ------->
                      				<div class="progress-group">
                        				<span class="progress-text">AAPICO HITECH PARTS</span>
                        				<span class="progress-number"><b>34</b>/100</span>
                        				<div class="progress sm">
                          					<div class="progress-bar progress-bar-red" style="width: 34%"></div>
                        				</div>
                      				</div><!-- /.progress-group -->
                      				<!-------- AAPICO HITECH TOOLING ------>
                      				<div class="progress-group">
                        				<span class="progress-text">AAPICO HITECH TOOLING</span>
                        				<span class="progress-number"><b>43</b>/100</span>
                        				<div class="progress sm">
                          					<div class="progress-bar progress-bar-green" style="width: 43%"></div>
                        				</div>
                      				</div><!-- /.progress-group -->
                      				<!-------- ASICO --------->
                      				<div class="progress-group">
                        				<span class="progress-text">ASICO</span>
                        				<span class="progress-number"><b>50</b>/100</span>
                        				<div class="progress sm">
                          					<div class="progress-bar progress-bar-yellow" style="width: 50%"></div>
                        				</div>
                      				</div><!-- /.progress-group -->
                    			</div><!-- /.col -->
                  			</div><!-- /.row -->
                		</div><!-- ./box-body -->
                		<!------ Tag Footer Chart -------->		
                		<div class="box-footer">
                  			<div class="row">
                  				<!------ TAG FOOTER 1 ------>
                    			<div class="col-sm-3">
                      				<div class="description-block border-right">
                        				<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                        				<h5 class="description-header">$35,210.43</h5>
                        				<span class="description-text">TOTAL REVENUE</span>
                      				</div><!-- /.description-block -->
                    			</div><!-- /.col -->
                    			<!------ TAG FOOTER 2 ------>
                    			<div class="col-sm-3 col-xs-6">
                      				<div class="description-block border-right">
                        				<span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                        				<h5 class="description-header">$10,390.90</h5>
                        				<span class="description-text">TOTAL COST</span>
                      				</div><!-- /.description-block -->
                    			</div><!-- /.col -->
                    			<!------ TAG FOOTER 3 ------>
                    			<div class="col-sm-3 col-xs-6">
                      				<div class="description-block border-right">
                        				<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                        				<h5 class="description-header">$24,813.53</h5>
                        				<span class="description-text">TOTAL PROFIT</span>
                      				</div><!-- /.description-block -->
                    			</div><!-- /.col -->
                    			<!------ TAG FOOTER 4 ------>
                    			<div class="col-sm-3 col-xs-6">
                      				<div class="description-block">
                       					<span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                        				<h5 class="description-header">1200</h5>
                        				<span class="description-text">GOAL COMPLETIONS</span>
                      				</div><!-- /.description-block -->
                    			</div>
                  			</div><!-- /.row -->
                		</div><!-- /.box-footer -->
              		</div><!-- /.box -->
            	</div><!-- /.col -->
			</div><!-- /.row -->
		</section>
	</div><!-- /.page-content -->
</div><!-- /.main-content -->

<!--[if !IE]> -->
<script src="assets/js/jquery.2.1.1.min.js"></script>
<!-- <![endif]-->
<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->
<!--[if !IE]> -->
<script type="text/javascript">
	window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
</script>
<!-- <![endif]-->
<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- page specific plugin scripts -->
<!--[if lte IE 8]>
	<script src="assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/jquery.sparkline.min.js"></script>
<script src="assets/js/jquery.flot.min.js"></script>
<script src="assets/js/jquery.flot.pie.min.js"></script>
<script src="assets/js/jquery.flot.resize.min.js"></script>

<!-- SlimScroll 1.3.0 -->
<script src="assets/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- ChartJS 1.0.1 -->
<script src="assets/chartjs/Chart.min.js" type="text/javascript"></script>


<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js" type="text/javascript"></script>


<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
