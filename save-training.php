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
	
	$cid=str_replace('T','',$cid);


	if(substr($cid,2,2)==date('m'))
	{
		$c_cid=intval(substr($cid,5,3))+1;
	}else
	{
		$c_cid=1;
	}
	if($c_cid<10)
	{
		$x_cid="00".$c_cid;
	}
	elseif($c_cid>9 && $c_cid<100)
	{
		$x_cid="0".$c_cid;
	}
	$r_cid='T'.date('ym').$x_cid;
	

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
	ImageJPEG($images_fin,$new_images);
	ImageDestroy($images_orig);
	ImageDestroy($images_fin);
	}
	//return $new_images;
}


 $course_name = iconv('UTF-8','TIS-620',$_POST["course_name"]);
 $Trainee = iconv('UTF-8','TIS-620',$_POST["Trainee"]);
 $Trn_room = iconv('UTF-8','TIS-620',$_POST["Trn_room"]);
 $Tbranch = str_replace(' ','',$_POST["Tbranch"]);
 $datepicker = str_replace(' ','',$_POST["date-range-picker1"]);//Training date
 $timepicker1 = str_replace(' ','',$_POST["timepicker1"]);
 $timepicker2 = str_replace(' ','',$_POST["timepicker2"]);
 $description = iconv('UTF-8','TIS-620',$_POST["description"]);
 $description = str_replace("'","\'",$description);
 $date_range_picker = str_replace(' ','',$_POST["date-range-picker2"]); //date range register
 $uq = str_replace(' ','',$_POST["uq"]);
 $sb = str_replace(' ','',$_POST["sb"]);
 $course_trn_id = str_replace(' ','',$_POST["course_trn_id"]);
 $other = $_POST["txt_other"];
 
 $rang_date=explode('-',$date_range_picker);
 
//echo "file name =".$fileRep;

			if(!empty($_FILES["file"]["tmp_name"]))
			{
				$fileRep=str_replace(' ','',$_FILES['file']['name']);
				$fileRep=str_replace('"','',$fileRep);
				$fileRep=str_replace('.','',$fileRep);
				$fileRep=str_replace("'",'',$fileRep);
				$fileRep=str_replace('-','',$fileRep);
				$fileRep=str_replace('&','',$fileRep);
				$fileRep=str_replace('+','',$fileRep);				
				
				$type_file=explode(".",$fileRep);
				// เช่น 12346.gif  ค่าที่ได้คือ 0 [123456] และ 1 [gif]
				$newfile_name=date('Ymd').time().'.'.$type_file['1'];
				
				//$file_name =str_replace(' ','',$_FILES['thumbnail']['name']);
				move_uploaded_file($_FILES["file"]["tmp_name"],"../AAPICO-2014/New/img/Training/picture/".$newfile_name);
				resizeImg750($newfile_name);			
			}else{ $newfile_name=""; }

$sql = "insert into TBL_TRAINING(TITLE,DETAILS,PICTURE,VIEWS,THUMBNAIL,PDATE,S_DATE,E_DATE,N_NUMBER,S_NUMBER,S_STATUS,U_ADMIN,UP_TIME,CID,BRANCH,ROOM,TDATE,S_TIME,E_TIME,Trainee,course_trn_id,Other)values('$course_name','$description','$newfile_name','0','$newfile_name','".date('d-M-Y')."','".$rang_date[0]."','".$rang_date[1]."','$uq','$sb','ON','".$_SESSION['sesusertrn']."','".date('H:i:s')."','".$r_cid."','".$Tbranch."','".$Trn_room."','".$datepicker."','".$timepicker1."','".$timepicker2."','".$Trainee."','".$course_trn_id."','".$other."')";
mssql_query($sql);


?>


