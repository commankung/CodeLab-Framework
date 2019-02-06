<?php
session_start();
$_SESSION['PageMenu'] = '';

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
include('DB_Configuration.php');

$CID = str_replace(' ','',$_POST['CourseID']);

$ss = "SELECT * FROM TBL_TRAINING WHERE CID='$CID' ";
$qs = mssql_query($ss);
$rs= mssql_fetch_array($qs);

if(str_replace(' ','',$rs['S_STATUS'])=="ON"){ ?>
	<div class="btn-group btn-toggle">
    <button class="btn btn-xs btn-success active">OPEN</button><button class="btn btn-xs btn-default">CLOSE</button>
    </div>
<?php }else{ ?>
	<div class="btn-group btn-toggle">
    	<button class="btn btn-xs btn-default">OPEN</button><button class="btn btn-xs btn-danger active">CLOSE</button>
      </div>
<?php } ?>
