<?php

	if($Menu =="Home")
	{
		$Home_Active			=	"active";
		$Form_Active			=	"";
		$Form_IT_Active			=	"";
		$Form_Oracle_Active		=	"";
		$Search_Active			=	"";
		$Form_Ser_Requisition	=	"";
		$Dashboard_Active		=	"";
	}
	if($Menu =="" or $Menu =="IT-Requisition" or $Menu =="IT-Flow-Requisition" or $Menu =="IT-Preview" )
	{
		$Home_Active			=	"";
		$Form_Active			=	"active";
		$Form_IT_Active			=	"active";
		$Form_Oracle_Active		=	"";
		$Search_Active			=	"";
		$Form_Ser_Requisition	=	"";
		$Dashboard_Active		=	"";
	}
	if($Menu =="Search-Requisition")
	{
		$Home_Active			=	"";
		$Form_Active			=	"";
		$Form_IT_Active			=	"";
		$Form_Oracle_Active		=	"";	
		$Search_Active			=	"active";
		$Form_Ser_Requisition	=	"active";
		$Dashboard_Active		=	"";		
	}
	if($Menu =="Dashboard")
	{
		$Home_Active			=	"";
		$Form_Active			=	"";
		$Form_IT_Active			=	"";
		$Form_Oracle_Active		=	"";	
		$Search_Active			=	"";
		$Form_Ser_Requisition	=	"";
		$Dashboard_Active		=	"active";		
	}

?>


<script type="text/javascript">
	try{ace.settings.check('main-container' , 'fixed')}catch(e){}
</script>
<div id="sidebar" class="sidebar responsive">
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
	</script>
	<ul class="nav nav-list">
		<!------------- Home Menu -------------->
		<!--
		<li class="<?php echo $Home_Active ?>">
			<a href="index.php?Menu=Home">
				<i class="menu-icon fa fa-home"></i>
				<span class="menu-text"> Home </span>
			</a>
			<b class="arrow"></b>
		</li>
		-->
		<!------------- Form Requisition Menu -------------->		
		<li class="<?php echo $Form_Active; ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-pencil-square-o"></i>
				<span class="menu-text">Forms Requisition</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="<?php echo $Form_IT_Active ?>">
					<a href="index.php?Menu=IT-Requisition">
						<i class="menu-icon fa fa-caret-right"></i>
						IT Requisition
					</a>
					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		
		<!------------- Dashboard Menu -------------->
        <!--
		<li class="<?php echo $Dashboard_Active; ?>">
			<a href="index.php?Menu=Dashboard">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>
			<b class="arrow"></b>
		</li>	
        -->
		
		<!------------- Search Menu -------------->
        <!--
		<li class="<?php echo $Search_Active; ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-search "></i>
				<span class="menu-text">Search</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="<?php echo $Form_Ser_Requisition ?>">
					<a href="index.php?Menu=Search-Requisition">
						<i class="menu-icon fa fa-caret-right"></i>
						Search Requisition
					</a>
					<b class="arrow"></b>
				</li>
			</ul>
		</li>
        -->
        		
	</ul><!-- /.nav-list -->
	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
	</script>
</div>