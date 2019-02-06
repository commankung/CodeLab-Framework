<?php
ob_start();
session_start();
//header ("Content-Type: text/html; charset=utf-8");//set display ajax text to thai 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
include('DB_Configuration.php');

	$sPe ="select * from TBL_TRAINING order by ID DESC";
	$qPe = mssql_query($sPe);
	$rw=mssql_fetch_array($qPe);
	$cid=str_replace(' ','',$rw['CID']);

	$c_cid=intval(substr($cid,5,3))+1;
	if($c_cid<10)
	{
		$x_cid="00".$c_cid;
	}
	elseif($c_cid>9 && $c_cid<100)
	{
		$x_cid="0".$c_cid;
	}
	$r_cid='C'.date('ym').$x_cid;
	

function mssql_real_escape_string($s) {
	if(get_magic_quotes_gpc()) {
		$s = stripslashes($s);
	}
	$s = str_replace("'","",$s);
	return $s;
}


function resizeImg400($file)
{
	$images = "../AAPICO-2014/New/img/Training/thumbnail/".$file;
	if(GetimageSize($images)>401)
	{
	$new_images = "../../img/Training/thumbnail/".$file;
	$width=400; //*** Fix Width & Heigh (Autu caculate) ***//
	$size=GetimageSize($images);
	$height=round($width*$size[1]/$size[0]);
	$images_orig = ImageCreateFromJPEG($images);
	$photoX = ImagesX($images_orig);
	$photoY = ImagesY($images_orig);
	$images_fin = ImageCreateTrueColor($width, $height);
	ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
	ImageJPEG($images_fin,$new_images);
	ImageDestroy($images_orig);
	ImageDestroy($images_fin);
	}
	//return $new_images;
}


function resizeImg750($file)
{
	$images = "../AAPICO-2014/New/img/Training/picture/".$file;
	if(GetimageSize($images)>751)
	{
	$new_images = "../AAPICO-2014/New/img/Training/picture/".$file;
	$width=750; //*** Fix Width & Heigh (Autu caculate) ***//
	$size=GetimageSize($images);
	$height=round($width*$size[1]/$size[0]);
	$images_orig = ImageCreateFromJPEG($images);
	$photoX = ImagesX($images_orig);
	$photoY = ImagesY($images_orig);
	$images_fin = ImageCreateTrueColor($width, $height);
	ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
	//ImageJPEG($images_fin,$new_images);
	
	$type_file=explode(".",$file);
	
	if($type_file[1] == "jpg")
	{
		ImageJPEG($images_fin,$new_images);
	}
	else if($type_file[1] == "png")
	{
		$png_image = imagecreatefromjpeg($new_images);
		ImagePNG($png_image,$file);
	}
	
	ImageDestroy($images_orig);
	ImageDestroy($images_fin);
	}
	//return $new_images;
}

 $eid = str_replace(' ','',$_POST["eid"]);
 $chkOnOff = str_replace(' ','',$_POST["chkOnOff"]);
 $course_name = iconv('UTF-8','TIS-620',str_replace("'","''",$_POST["course_name1"]));
 $Trainee1 = iconv('UTF-8','TIS-620',str_replace("'","''",$_POST["Trainee1"]));
 $Trn_room = iconv('UTF-8','TIS-620',str_replace("'","''",$_POST["Trn_room1"]));
 $Tbranch = str_replace(' ','',$_POST["Tbranch1"]);
 $datepicker = str_replace(' ','',$_POST["date-range-picker3"]);
 $timepicker1 = str_replace(' ','',$_POST["timepicker3"]);
 $timepicker2 = str_replace(' ','',$_POST["timepicker4"]);
 $description = iconv('UTF-8','TIS-620',str_replace("'","''",$_POST["description1"]));
 $date_range_picker = str_replace(' ','',$_POST["date-range-picker4"]);
 $uq = str_replace(' ','',$_POST["uq1"]);
 $sb = str_replace(' ','',$_POST["sb1"]);
 $course_trn_id1 = str_replace(' ','',$_POST["course_trn_id1"]);
 $other1 = $_POST["txt_other1"];
 
  $scores_edit = str_replace(' ','',$_POST["scores_edit"]);
 
 $rang_date=explode('-',$date_range_picker);

 $newfile_name[2];
		
			
			
			if(!empty($_FILES["file1"]["tmp_name"]))
			{
				$fileRep=str_replace(' ','',$_FILES['file1']['name']);
				$fileRep=str_replace('-','',$fileRep);
				$fileRep=str_replace('&','',$fileRep);
				$fileRep=str_replace('+','',$fileRep);				
				
				$type_file=explode(".",$fileRep);
				// เช่น 12346.gif  ค่าที่ได้คือ 0 [123456] และ 1 [gif]
				$newfile_name[0]=date('Ymd').time().'1.'.$type_file['1'];
				
				//$file_name =str_replace(' ','',$_FILES['thumbnail']['name']);
				move_uploaded_file($_FILES["file1"]["tmp_name"],"../AAPICO-2014/New/img/Training/picture/".$newfile_name[0]);
				
				resizeImg750($newfile_name[0]);			
			}else{ $newfile_name[0]=""; }
			
			if(!empty($_FILES["file2"]["tmp_name"]))
			{
				$fileRep=str_replace(' ','',$_FILES['file2']['name']);
				$fileRep=str_replace('-','',$fileRep);
				$fileRep=str_replace('&','',$fileRep);
				$fileRep=str_replace('+','',$fileRep);		
				$fileRep=str_replace('"','',$fileRep);
				$fileRep=str_replace('.','',$fileRep);
				$fileRep=str_replace("'","",$fileRep);				
				
				
									
				
				$type_file=explode(".",$fileRep);
				// เช่น 12346.gif  ค่าที่ได้คือ 0 [123456] และ 1 [gif]
				$newfile_name[1]=date('Ymd').time().'.'.$type_file['1'];
				
				//$file_name =str_replace(' ','',$_FILES['thumbnail']['name']);
				move_uploaded_file($_FILES["file2"]["tmp_name"],"../AAPICO-2014/New/img/Training/picture/".$newfile_name[1]);
				
				resizeImg750($newfile_name[1]);			
			}else{ $newfile_name[1]=""; }
			//echo $newfile_name[0].$newfile_name[1];
			
			
			if(!empty($_FILES["banner"]["tmp_name"]))
			{
				$fileRep=str_replace(' ','',$_FILES['banner']['name']);
				$fileRep=str_replace('-','',$fileRep);
				$fileRep=str_replace('&','',$fileRep);
				$fileRep=str_replace('+','',$fileRep);	
				$fileRep=str_replace('"','',$fileRep);
				$fileRep=str_replace('.','',$fileRep);
				$fileRep=str_replace("'","",$fileRep);						
								
				$type_file=explode(".",$fileRep);
				$banner=date('Ymd').time().'.'.$type_file['1'];
				
				//$file_name =str_replace(' ','',$_FILES['thumbnail']['name']);
				move_uploaded_file($_FILES["banner"]["tmp_name"],"../AAPICO-2014/New/img/Training/thumbnail/".$banner);
				
				//resizeImg750($newfile_name[0]);			
			} 
			
			if($newfile_name[0]!="" and $newfile_name[1]!="")
			{
				$newfile_name_save=implode("|",$newfile_name);
			}else if ($newfile_name[0]=="")
			{
				$newfile_name_save=$newfile_name[1];
			}else if ($newfile_name[1]=="")
			{
				$newfile_name_save=$newfile_name[0];
			}
			
 if($chkOnOff=="ON")
 {
	 $sw_on_off="ON";
 }else
 {
	 $sw_on_off="OFF";
 }
//echo $sw_on_off;


/*if(!empty($_FILES["file1"]["tmp_name"]))
			{
$fileRep=str_replace(' ','',$_FILES['file1']['name']);
$fileRep=str_replace('-','',$fileRep);
$fileRep=str_replace('&','',$fileRep);
$fileRep=str_replace('+','',$fileRep);
				
				$type_file=explode(".",$fileRep);
				// เช่น 12346.gif  ค่าที่ได้คือ 0 [123456] และ 1 [gif]
				$newfile_name=date('Ymd').time().'.'.$type_file['1'];
				
				//$file_name =str_replace(' ','',$_FILES['thumbnail']['name']);
				move_uploaded_file($_FILES["file1"]["tmp_name"],"../AAPICO-2014/New/img/Training/picture/".$newfile_name);
				resizeImg750($newfile_name);			
			}else{ $newfile_name=""; } */

if($newfile_name_save=="" and $banner=="")
{			
	$sql="update TBL_TRAINING set TITLE='$course_name',DETAILS='$description',S_DATE='".$rang_date[0]."',E_DATE='".$rang_date[1]."',N_NUMBER='$uq',S_NUMBER='$sb',U_ADMIN='".$_SESSION['sesusertrn']."',UP_TIME='".date('H:i:s')."',BRANCH='$Tbranch',ROOM='$Trn_room',TDATE='".$datepicker."',S_TIME='".$timepicker1."',E_TIME='".$timepicker2."',S_STATUS='$sw_on_off',Trainee='$Trainee1',course_trn_id='$course_trn_id1',Other='$other1',scores='$scores_edit' where ID='".$eid."' ";
	mssql_query($sql);
}else if($banner=="")
{
	$sql="update TBL_TRAINING set TITLE='$course_name',DETAILS='$description',S_DATE='".$rang_date[0]."',E_DATE='".$rang_date[1]."',N_NUMBER='$uq',S_NUMBER='$sb',U_ADMIN='".$_SESSION['sesusertrn']."',UP_TIME='".date('H:i:s')."',BRANCH='$Tbranch',ROOM='$Trn_room',TDATE='".$datepicker."',S_TIME='".$timepicker1."',E_TIME='".$timepicker2."',PICTURE='$newfile_name_save',S_STATUS='$sw_on_off',Trainee='$Trainee1',course_trn_id='$course_trn_id1',Other='$other1',scores='$scores_edit' where ID='".$eid."' ";
	mssql_query($sql);	
}else if($newfile_name_save=="")
{
	$sql="update TBL_TRAINING set TITLE='$course_name',DETAILS='$description',S_DATE='".$rang_date[0]."',E_DATE='".$rang_date[1]."',N_NUMBER='$uq',S_NUMBER='$sb',U_ADMIN='".$_SESSION['sesusertrn']."',UP_TIME='".date('H:i:s')."',BRANCH='$Tbranch',ROOM='$Trn_room',TDATE='".$datepicker."',S_TIME='".$timepicker1."',E_TIME='".$timepicker2."',THUMBNAIL='$banner',S_STATUS='$sw_on_off',Trainee='$Trainee1',course_trn_id='$course_trn_id1',Other='$other1',scores='$scores_edit' where ID='".$eid."' ";
	mssql_query($sql);
}else if($newfile_name_save!="" and $banner!="")
{
	$sql="update TBL_TRAINING set TITLE='$course_name',DETAILS='$description',S_DATE='".$rang_date[0]."',E_DATE='".$rang_date[1]."',N_NUMBER='$uq',S_NUMBER='$sb',U_ADMIN='".$_SESSION['sesusertrn']."',UP_TIME='".date('H:i:s')."',BRANCH='$Tbranch',ROOM='$Trn_room',TDATE='".$datepicker."',S_TIME='".$timepicker1."',E_TIME='".$timepicker2."',THUMBNAIL='$banner',PICTURE='$newfile_name_save',S_STATUS='$sw_on_off',Trainee='$Trainee1',course_trn_id='$course_trn_id1',Other='$other1',scores='$scores_edit' where ID='".$eid."' ";
	mssql_query($sql);
}

?>


