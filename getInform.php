<?php
session_start();
header ("Content-Type: text/html; charset=utf-8");//set display ajax text to thai 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 

$AGR=str_replace(' ','',$_GET['AGR']);
//echo "xxx ".$AGR;
$IDP	=	0;

$Ayutthaya		=	array("AH","AHP","AHT","AITS");
$ShowroomAM		=	array("NV","LP");
$ShowroomNESC	=	array("RM","SM");
$rayong			=	array("APR","AHR");
$samutprakarn	=	array("AP");
$asico			=	array("AS");
$chonburi		=	array("AA","AA");
$edsha			=	array("EA");
$al				=	array("AL");
$af				=	array("AF");

//------- IF : Place ---------------
if(in_array($AGR,$Ayutthaya) == true )
{
	$Place	="ayutthaya";
}

if(in_array($AGR,$ShowroomAM) == true )
{
	$Place	="Showroom-AM";
}

if(in_array($AGR,$ShowroomNESC) == true )
{
	$Place	="Showroom-NESC";
}

if(in_array($AGR,$rayong) == true )
{
	$Place	="rayong";
}

if(in_array($AGR,$samutprakarn) == true )
{
	$Place	="samutprakarn";
}

if(in_array($AGR,$chonburi) == true )
{
	$Place	="chonburi";
}

if(in_array($AGR,$asico) == true )
{
	$Place	="Asico";
}

if(in_array($AGR,$edsha) == true )
{
	$Place	="EA";
}

if(in_array($AGR,$al) == true )
{
	$Place	="AL";
}

if(in_array($AGR,$af) == true )
{
	$Place	="AF";
}

//------ Close Tag IF : Place -----




$objConnect = mssql_connect("agrdb01","dev","dev@agrdb01") or die("cannot");
mssql_query("SET NAMES tis620" );
$objDB = mssql_select_db("EFORM");

$sbt = "select * from  TBL_MASTER_PRINTER where PLACE='$Place' or PLACE ='other' order by ID ASC";
$ebt = mssql_query($sbt);

?>
               
<!--<div id="task-tab" class="tab-pane active">-->
<h4 class="smaller lighter green">
	<i class="ace-icon fa fa-list"></i>
	กรุณาเลือกเครื่องพิมพ์ที่ท่านต้องการ / Please choose printer as below.
</h4>
<!-- class:item-red,item-default,item-orange,item-blue,item-grey,item-pink,item-green --->
<ul id="tasks" class="item-list">
	<?php
		while($rsbt = mssql_fetch_array($ebt))
		{
			$IDP++;
	?>
   			<li class="item-blue clearfix">
				<label class="inline">
					<input type="checkbox" class="ace" id="CHK_PRINTER<?php echo $IDP;?>" value="<?php echo $IDP;?>" onclick="DP(this.value);">
						<span id="spprinter<?php echo $IDP;?>" class="lbl" style="width:300px; margin-right:5px; padding-left:4px;"><?php echo $rsbt['NAME'];?></span>                        
                        <span style="padding-left:5px;">
                        <?php
							if($rsbt['TYPE']=="Color")
							{
						?>
                 				<label style=" color:#F00;">Type Print: </label>    
                  				<select onchange="Printer_alertbox(this.value);" id="TYPE_PRINT<?php echo $IDP;?>" name="TYPE_PRINT<?php echo $IDP;?>" class="select2" data-placeholder="Click to Choose Type Print...." style="background-color:#FF9;">
									<option value="Black-White">Black - White</option>
									<option value="Color">COLOR</option>
								</select>
               			<?php 
               				}
               				else 
               				{ 
               			?>
                        		<label style=" color:#F00;">Type Print: </label>  
               					<select id="TYPE_PRINT<?php echo $IDP;?>" name="TYPE_PRINT<?php echo $IDP;?>" class="select2" data-placeholder="Click to Choose Type Print...." style="background-color#CCC;">
									<option value="Black-White">Black - White</option>
								</select>
                		<?php 
                			} 
                		?>
                        </span>
				</label>
				<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
						<?php
							if($rsbt['TYPE']=="Color")
							{
						?>
								<span class="percent" style="color:#30F;">Black-White, <?php echo $rsbt['TYPE'];?></span>
                       <?php 
                       		}
                       		else
                       		{ 
                       	?>
                       			<span class="percent" style="color:#30F;"><?php echo $rsbt['TYPE'];?></span>
                       <?php 
                       		} 
                       ?>
					</div>
				<div class="form-group" style="display:none; background-color:#FFC; width:97%; margin-left:15px; margin-right:50px;" id="justification<?php echo $IDP;?>">
        			<h4 class="header blue lighter smaller"  style="padding-left:50px;padding-left:50px padding-top:0px; margin-top:0px;">
						<i class="ace-icon fa fa-print smaller-90"></i>
						<?php if($rsbt['PLACE'] != "Other"){ ?>
			 			<font color="#0033FF">โปรดระบุเหตุผลที่ท่านต้องการใช้งาน  /Please specify justification</font> 
			 			<?php }else{	?>
			 			<font color="#0033FF">โปรดระบุยี่ห้อและรุ่นเครื่องพิมพ์ / Please specify printer brand & model</font> 
			 			<?php } ?>
					</h4>
					<div class="col-xs-12 col-sm-4"  style="padding-left:70px; padding-top:0px; margin-top:0px;">
						<div class="clearfix">
                			<span class="lbl">
							<textarea style="width:310px" class="form-control limited" id="P_Just<?php echo $IDP;?>" maxlength="140" style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:normal;">เพื่อใช้พิมพ์เอกสารต่าง ๆ เกี่ยวกับงาน</textarea>
                   			<br/>
						</div>
						<div class="clearfix"><input type="hidden" id="txtid<?php echo $IDP; ?>" value="<?php echo $rsbt['ID'];?>"></div>
					</div>
				</div>
			</li>         
	<?php 
		} 
	?>
            <!--
			<li class="item-orange clearfix">
					<label class="inline">
						<input type="checkbox" class="ace" id="CHK_PRINTER" >
						<span class="lbl">Fuji Xerox DCC2060 (AH Office, 1 Fl.)</span>
					</label>
					<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
						<span class="percent">Black - White</span>
					</div>
				</li>
				<li class="item-red clearfix">
					<label class="inline">
						<input type="checkbox" class="ace" id="CHK_PRINTER">
						<span class="lbl">Fuji Xerox DCC3370 (AH Office, 2 Fl.) </span>
					</label>
					<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
						<span class="percent">Color</span>
					</div>
				</li>
				<li class="item-default clearfix">
					<label class="inline">
						<input type="checkbox" class="ace" id="CHK_PRINTER">
						<span class="lbl">Fuji Xerox DCC3370 (AH Office, 3 Fl.)</span>
					</label>
					<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
						<span class="percent">Color</span>
					</div>
				</li>
				<li class="item-blue clearfix">
					<label class="inline">
						<input type="checkbox" class="ace" id="CHK_PRINTER">
						<span class="lbl">Fuji Xerox AP6000 (AHP Office 2 Fl.)</span>
					</label>
					<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
						<span class="percent">Black - White</span>
					</div>
				</li>
				<li class="item-grey clearfix">
					<label class="inline">
						<input type="checkbox" class="ace" id="CHK_PRINTER">
						<span class="lbl">Fuji Xerox AP6000 (AHP Office 2 Fl.)</span>
					</label>
					<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
						<span class="percent">Black - White</span>
					</div>
				</li>
				<li class="item-green clearfix">
					<label class="inline">
						<input type="checkbox" class="ace" id="CHK_PRINTER">
						<span class="lbl">Fuji Xerox DCC6000 (AH Production.) </span>
					</label>
					<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
						<span class="percent">Black - White</span>
					</div>
				</li>
				<li class="item-pink clearfix">
					<label class="inline">
						<input type="checkbox" class="ace" id="CHK_PRINTER">
						<span class="lbl">Konica Minolta C252 (AITS) </span>
					</label>
					<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
						<span class="percent">Black - White</span>
					</div>
				</li>	
                -->			
			</ul>
		<!--</div>-->

