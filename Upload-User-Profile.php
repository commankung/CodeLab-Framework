<?php
header ("Content-Type: text/html; charset=tis-620");//set display ajax text to thai 
//include('DB_Configuration.php');
	if($_FILES['fileUpload']!="")
	{
		$sourcePath = $_FILES['fileUpload']['tmp_name'];
		$targetPath = "myfile/".$_FILES['fileUpload']['name']; 
		move_uploaded_file($sourcePath,$targetPath);
		
		//*** Get Document Path ***//
		$strPath = realpath(basename(getenv($_SERVER["SCRIPT_NAME"]))); // C:/AppServ/www/myphp
		$OpenFile = $targetPath;
		$xlApp = new COM("Excel.Application");
	
		$xlBook = $xlApp->Workbooks->Open($strPath."/".$OpenFile);
		$xlSheet1 = $xlBook->Worksheets(1);	
		$count_all_row = $xlSheet1->UsedRange->Rows->Count(); 
		
		
		include('DB_Configuration.php');

		for($i=2;$i<=$count_all_row;$i++){
				$emp=str_replace(' ','',$xlSheet1->Cells->Item($i,2));
				$title=str_replace('.','',str_replace(' ','',$xlSheet1->Cells->Item($i,3)));

				$sqlProfile = "SELECT * FROM TBL_TRAINING_PROFILE_USER WHERE EmpID = '".$emp."'";
				$qProfile = mssql_query($sqlProfile);
				$rowProfile = mssql_num_rows($qProfile);
				if($rowProfile > 0)
				{
					$sqlUpdate = "UPDATE TBL_TRAINING_PROFILE_USER SET Name_TH ='".$xlSheet1->Cells->Item($i,5)."',Name_EN ='".$xlSheet1->Cells->Item($i,4)."',Position ='".$xlSheet1->Cells->Item($i,6)."',Department ='".$xlSheet1->Cells->Item($i,7)."',Company ='".$xlSheet1->Cells->Item($i,8)."',Title_Name ='$title' WHERE EmpID = '".$emp."'";
					$sqlQuery = mssql_query($sqlUpdate);
				}
				else
				{
					$sqlInsert = "INSERT INTO TBL_TRAINING_PROFILE_USER(EmpID,Name_TH,Name_EN,Position,Department,Company,Title_Name) VALUES('".$emp."','".$xlSheet1->Cells->Item($i,5)."','".$xlSheet1->Cells->Item($i,4)."','".$xlSheet1->Cells->Item($i,6)."','".$xlSheet1->Cells->Item($i,7)."','".$xlSheet1->Cells->Item($i,8)."','".$title."') ";
					$sqlQuery = mssql_query($sqlInsert);
				}
				
		}
		
		//*** Close & Quit ***//
		$xlApp->Application->Quit();
		$xlApp = null;
		$xlBook = null;
		$xlSheet1 = null;
		
		$finish = unlink($targetPath);
		if($finish)
		{
			echo 1;
		}
			
	}
	else 
	{
		echo 0;
	}
?>