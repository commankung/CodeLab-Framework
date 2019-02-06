<?php
require('assets/FPDF/rotation.php');
define('FPDF_FONTPATH','font/');

class PDF extends PDF_Rotate
{	
	function REQ($EMP_ID)
	{
		mssql_connect("10.10.10.105","dev","dev@agrdb01");
		mssql_select_db("EFORM");
		
		
		//-------------------------- REQ PROFILE ------------------------
		$STR_PROFILE	=	"SELECT * FROM TBL_MASTER_EMP_PROFILE WHERE EMP_ID ='$EMP_ID' ";
		$QUERY_PROFILE	=	mssql_query($STR_PROFILE);
		$RE_PROFILE		=	mssql_fetch_array($QUERY_PROFILE);
		
		//-------------------------- REQ USERNAME ------------------------
		$STR_USER		=	"SELECT * FROM TBL_REQ_AD WHERE EMP_ID ='$EMP_ID' ";
		$QUERY_USER		=	mssql_query($STR_USER);
		$ROW_USER		=	mssql_num_rows($QUERY_USER);
		$RE_USER		=	mssql_fetch_array($QUERY_USER);
		
		//-------------------------- REQ EMAIL ------------------------
		$STR_EMAIL		=	"SELECT * FROM TBL_REQ_EMAIL WHERE EMP_ID ='$EMP_ID'";
		$QUERY_EMAIL	=	mssql_query($STR_EMAIL);
		$ROW_EMAIL		=	mssql_num_rows($QUERY_EMAIL);
		$RE_EMAIL		=	mssql_fetch_array($QUERY_EMAIL);
		
		//-------------------------- REQ INTERNET ------------------------
		$STR_INTER		=	"SELECT * FROM TBL_REQ_INTERNET WHERE EMP_ID ='$EMP_ID'";
		$QUERY_INTER	=	mssql_query($STR_INTER);
		$ROW_INTER		=	mssql_num_rows($QUERY_INTER);
		$RE_INTER		=	mssql_fetch_array($QUERY_INTER);
		
		//-------------------------- REQ USB -----------------------------
		$STR_USB		=	"SELECT * FROM TBL_REQ_REMOVABLE WHERE EMP_ID ='$EMP_ID'";
		$QUERY_USB		=	mssql_query($STR_USB);
		$ROW_USB		=	mssql_num_rows($QUERY_USB);
		$RE_USB			=	mssql_fetch_array($QUERY_USB);
		
		//-------------------------- REQ Telephone ------------------------
		$STR_TELE		=	"SELECT * FROM TBL_REQ_TEL_PASSCODE WHERE EMP_ID ='$EMP_ID'";
		$QUERY_TELE		=	mssql_query($STR_TELE);
		$ROW_TELE		=	mssql_num_rows($QUERY_TELE);
		$RE_TELE		=	mssql_fetch_array($QUERY_TELE);
		
		//-------------------------- REQ VPN ------------------------------
		$STR_VPN		=	"SELECT * FROM TBL_REQ_VPN WHERE EMP_ID ='$EMP_ID'";
		$QUERY_VPN		=	mssql_query($STR_VPN);
		$ROW_VPN		=	mssql_num_rows($QUERY_VPN);
		$RE_VPN			=	mssql_fetch_array($QUERY_VPN);
		
		//-------------------------- REQ VPN ------------------------------
		$STR_PRINTER	=	"SELECT * FROM V_REQ_PRINTER WHERE EMP_ID ='$EMP_ID'";
		$QUERY_PRINTER	=	mssql_query($STR_PRINTER);
		$ROW_PRINTER	=	mssql_num_rows($QUERY_PRINTER);

		
		//--------------------- Text Requester Information --------------------------------
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',16);
		$this->SetFillColor(166,166,166);
		$this->SetDrawColor(166,166,166);
		$this->Cell(185,7,iconv('UTF-8','TIS-620','ข้อมูลผู้ขอใช้ / Requester Information'),'1',0,'C',true);
		$this->ln(7);
		//--------------------- Owner Company  ------------------------------------------
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',16);
		$this->Cell(32,7,iconv('UTF-8','TIS-620','บริษัท / Company :'),'',0,'');
		$this->AddFont('angsa','','angsa.php');
		$this->SetFont('angsa','',16);
		$this->Cell(32,7,$RE_PROFILE['COMPANY_EMP'],'',0,'');
		$this->ln(7);
		//--------------------- Table Request Row 1  ------------------------------------------
		$this->SetDrawColor(180,180,180);
		$this->SetFillColor(217,217,217);
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',14);
		$this->Cell(42,7,iconv('UTF-8','TIS-620',' ชื่อ - สกุล (ไทย)'),'1',0,'L',true);
		$this->SetFillColor(255,255,255);
		$this->AddFont('angsa','','angsa.php');
		$this->SetFont('angsa','',14);
		$this->Cell(50,7,' '.$RE_PROFILE['NAME_TH'],'1',0,'L',true); // Employee Name Thai Value
		$this->SetFillColor(217,217,217);
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',14);
		$this->Cell(43,7,' Name-Surname (English)','1',0,'L',true);
		$this->SetFillColor(255,255,255);
		$this->AddFont('angsa','','angsa.php');
		$this->SetFont('angsa','',14);
		$this->Cell(50,7,' '.$RE_PROFILE['NAME_EN'],'1',0,'L',true); // Employee name ENG Value
		$this->ln();
		//--------------------- Table Request Row 2  ------------------------------------------
		$this->SetFillColor(217,217,217);
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',14);
		$this->Cell(42,7,iconv('UTF-8','TIS-620','รหัสพนักงาน / Employee ID'),'1',0,'L',true);
		$this->SetFillColor(255,255,255);
		$this->AddFont('angsa','','angsa.php');
		$this->SetFont('angsa','',14);
		$this->Cell(50,7,' '.$RE_PROFILE['EMP_ID'],'1',0,'L',true); // Employee ID Value
		$this->SetFillColor(217,217,217);
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',14);
		$this->Cell(43,7,iconv('UTF-8','TIS-620',' ตำแหน่ง / Position'),'1',0,'L',true);
		$this->SetFillColor(255,255,255);
		$this->AddFont('angsa','','angsa.php');
		$this->SetFont('angsa','',14);
		$this->Cell(50,7,' '.$RE_PROFILE['POSITION'],'1',0,'L',true); // Position Value
		$this->ln();
		//--------------------- Table Request Row 3  ------------------------------------------
		$this->SetFillColor(217,217,217);
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',14);
		$this->Cell(42,7,iconv('UTF-8','TIS-620','แผนก / Section'),'1',0,'L',true);
		$this->SetFillColor(255,255,255);
		$this->AddFont('angsa','','angsa.php');
		$this->SetFont('angsa','',14);
		$this->Cell(50,7,' '.$RE_PROFILE['SECTION'],'1',0,'L',true); // Section Value
		$this->SetFillColor(217,217,217);
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',14);
		$this->Cell(43,7,iconv('UTF-8','TIS-620',' ฝ่่าย / Department'),'1',0,'L',true);
		$this->SetFillColor(255,255,255);
		$this->AddFont('angsa','','angsa.php');
		$this->SetFont('angsa','',14);
		$this->Cell(50,7,' '.$RE_PROFILE['DEPT'],'1',0,'L',true); // Department Value
		$this->ln();
		//--------------------- Table Request Row 4  ------------------------------------------
		$this->SetFillColor(217,217,217);
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',14);
		$this->Cell(42,7,iconv('UTF-8','TIS-620','เบอร์ภายใน / Ext.'),'1',0,'L',true);
		$this->SetFillColor(255,255,255);
		$this->AddFont('angsa','','angsa.php');
		$this->SetFont('angsa','',14);
		$this->Cell(50,7,' '.$RE_PROFILE['EXT_NUMBER'],'1',0,'L',true); // Ext Value
		$this->SetFillColor(217,217,217);
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',14);
		$this->Cell(43,7,iconv('UTF-8','TIS-620',' เบอร์มือถือ / Mobile Phone'),'1',0,'L',true);
		$this->SetFillColor(255,255,255);
		$this->AddFont('angsa','','angsa.php');
		$this->SetFont('angsa','',14);
		$this->Cell(50,7,' '.$RE_PROFILE['MOBILE'],'1',0,'L',true); // Mobile Phone Value
		$this->ln();
		//--------------------- Table Request Row 4  ------------------------------------------
		$this->SetFillColor(217,217,217);
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',14);
		$this->Cell(42,7,iconv('UTF-8','TIS-620','ชื่อหัวหน้า / Supervisor'),'1',0,'L',true);
		$this->SetFillColor(255,255,255);
		$this->AddFont('angsa','','angsa.php');
		$this->SetFont('angsa','',14);
		$this->Cell(50,7,' '.$RE_PROFILE['SUP_NAME'],'1',0,'L',true); // Supervisor Value
		$this->SetFillColor(217,217,217);
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',14);
		$this->Cell(43,7,iconv('UTF-8','TIS-620',' ตำแหน่ง / Position'),'1',0,'L',true);
		$this->SetFillColor(255,255,255);
		$this->AddFont('angsa','','angsa.php');
		$this->SetFont('angsa','',14);
		$this->Cell(50,7,' '.$RE_PROFILE['SUP_POSITION'],'1',0,'L',true); // Supervisor Position Value
		$this->ln();
		//--------------------- Table Request Row 5  ------------------------------------------
		$this->SetFillColor(217,217,217);
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',14);
		$this->Cell(42,7,iconv('UTF-8','TIS-620','ที่อยู่ / Address'),'LTR',0,'L',true);
		$this->SetFillColor(255,255,255);
		$this->AddFont('angsa','','angsa.php');
		$this->SetFont('angsa','',14);
		$this->Cell(143,7,' '.$RE_PROFILE['ADDRESS'].'    '.iconv('UTF-8','TIS-620','ต.').$RE_PROFILE['TAMBOL'].'   '.iconv('UTF-8','TIS-620','อ.').$RE_PROFILE['DISTRICT'],'LTR',0,'L',true); // Addrees1  Value
		$this->ln();
		//--------------------- Table Request Row 6  ------------------------------------------
		$this->SetFillColor(217,217,217);
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',14);
		$this->Cell(42,6,iconv('UTF-8','TIS-620','(ตามทะเบียนบ้าน)'),'LBR',0,'L',true);
		$this->SetFillColor(255,255,255);
		$this->AddFont('angsa','','angsa.php');
		$this->SetFont('angsa','',14);
		$this->Cell(143,6,' '.iconv('UTF-8','TIS-620','จ.').$RE_PROFILE['PROVINCE'].'   '.iconv('UTF-8','TIS-620','รหัสไปรษณีย์  ').$RE_PROFILE['ZIPCODE'],'LBR',0,'L',true); // Addrees2  Value
		$this->ln(10);

		//--------------------- Text Request Information --------------------------------
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',16);
		$this->SetFillColor(166,166,166);
		$this->SetDrawColor(166,166,166);
		$this->Cell(185,7,iconv('UTF-8','TIS-620','ข้อมูลการข้อใช้ / Request Information'),'1',0,'C',true);
		$this->ln(9);
		
		//--------------------- Textbox Request Informtaion -----------------------------
		$this->SetDrawColor(0,0,0);
		//$this->SetDrawColor(180,180,180);
		$this->SetFillColor(255,255,255);
		$this->Cell(185,1,'','LTR','0','C',true);
		$this->ln();
		//--------------------- Row Approve ----------------------------------------------
		$this->AddFont('angsa','B','angsab.php');
		$this->SetFont('angsa','B',12);
		$this->ln();
		$this->Cell(185,2,'','LR','0','C',true);
		$this->ln();
		
		//--------------------- Row Query Database -----------------------------------------
		
		$RowF			=	0;
		$Position_Img	=	array();
		$SPosition_Img	=	120;
		$End_Table		=	192;
		//--------------------- Data Row 1 : User ----------------------------------------
		if($ROW_USER > 0)
		{
			$RowF++;
			if($RowF ==1)
			{
				$Position_Img[0] =  120;
				$Position_Img[1] =  129;
				$End_Table				=	$End_Table - 9;
			}else
			{
				$Position_Img[$RowF] 	= 	$Position_Img[$RowF-1] +9;
				$End_Table				=	$End_Table - 9;
			}
			
			$this->AddFont('angsa','B','angsab.php');
			$this->SetFont('angsa','B',14);
			$this->Cell(20,9,' '.$RowF.'.User ID','LB','0','L',true);
			$this->Cell(18,9,iconv('UTF-8','TIS-620','เหตุผล :'),'B','0','R',true); 
			$this->AddFont('angsa','','angsa.php');
			$this->SetFont('angsa','',14);
			$this->Cell(111,9,$RE_USER['JUSTIFICATION'],'B','0','L',true);
			$this->Cell(36,9,'','RB','0','C',true);
			//--------------------- Insert Empty Box png ---------------------------------------
			//$this->Image('assets/images/empty-box.png',174,120,3,3); // Insert Picture Empty-Box1
			//$this->Image('assets/images/empty-box.png',192,120,3,3); // Insert Picture Empty-Box2
			$this->ln();
		}
		
		
		//--------------------- Data Row 2 : Email ----------------------------------------
		if($ROW_EMAIL > 0)
		{
			$RowF++;
			if($RowF ==1)
			{
				$Position_Img[0] =  120;
				$Position_Img[1] =  129;
				$End_Table				=	$End_Table - 9;
			}else
			{
				$Position_Img[$RowF] 	=	$Position_Img[$RowF-1] +9;
				$End_Table				=	$End_Table - 9;
			}
			$this->AddFont('angsa','B','angsab.php');
			$this->SetFont('angsa','B',14);
			$this->Cell(20,9,' '.$RowF.'.Email','LB','0','L',true);
			$this->Cell(18,9,iconv('UTF-8','TIS-620','เหตุผล :'),'B','0','R',true); 
			$this->AddFont('angsa','','angsa.php');
			$this->SetFont('angsa','',14);
			$this->Cell(111,9,$RE_EMAIL['JUSTIFICATION'],'B','0','L',true);
			$this->Cell(36,9,'','BR','0','C',true);
			//--------------------- Insert Empty Box png ---------------------------------------
			//$this->Image('assets/images/empty-box.png',174,129,3,3); // Insert Picture Empty-Box1
			//$this->Image('assets/images/empty-box.png',192,129,3,3); // Insert Picture Empty-Box2
			$this->ln();
		}
		
		
		//--------------------- Data Row 3 : Internet ----------------------------------------
		if($ROW_INTER > 0)
		{
			$RowF++;
			if($RowF ==1)
			{
				$Position_Img[0] =  120;
				$Position_Img[1] =  138;
				$End_Table				=	$End_Table - 18;
			}else
			{
				$Position_Img[$RowF]	=	$Position_Img[$RowF-1] +18;
				$End_Table				=	$End_Table	-	18;
			}
			$this->AddFont('angsa','B','angsab.php');
			$this->SetFont('angsa','B',14);
			$this->Cell(20,9,' '.$RowF.'.Internet','L','0','L',true);
			$this->Cell(18,9,iconv('UTF-8','TIS-620','ระดับ :'),'','0','R',true);
			$this->AddFont('angsa','','angsa.php');
			$this->SetFont('angsa','',14);
			$this->Cell(111,9,$RE_INTER['NLEVEL'],'','0','L',true);
			$this->Cell(36,9,'','R','0','C',true);
			//--------------------- Insert Empty Box png ---------------------------------------
			//$this->Image('assets/images/empty-box.png',174,138,3,3); // Insert Picture Empty-Box1
			//$this->Image('assets/images/empty-box.png',192,138,3,3); // Insert Picture Empty-Box2
			$this->ln();
			$this->AddFont('angsa','B','angsab.php');
			$this->SetFont('angsa','B',14);
			$this->Cell(20,9,'','LB','0','L',true);
			$this->Cell(18,9,iconv('UTF-8','TIS-620','เหตุผล :'),'B','0','R',true);
			$this->AddFont('angsa','','angsa.php');
			$this->SetFont('angsa','',14);
			$this->Cell(147,9,$RE_INTER['JUSTIFICATION'],'BR','0','L',true);
			$this->ln();
		}
		
		//--------------------- Data Row 4 : Removable drive ----------------------------------------
		if($ROW_USB > 0)
		{
			$RowF++;
			if($RowF ==1)
			{
				$Position_Img[0] =  120;
				$Position_Img[1] =  138;
				$End_Table				=	$End_Table - 18;
			}else
			{
				$Position_Img[$RowF]	=	$Position_Img[$RowF-1]+18;
				$End_Table				=	$End_Table-18;
			}
			$this->AddFont('angsa','B','angsab.php');
			$this->SetFont('angsa','B',14);
			$this->Cell(20,9,' '.$RowF.'.USB','L','0','L',true);
			$this->Cell(18,9,iconv('UTF-8','TIS-620','ประเภท  :'),'','0','R',true);
			$this->AddFont('angsa','','angsa.php');
			$this->SetFont('angsa','',14);
			$this->Cell(28,9,$RE_USB['TYPE_REMOVABLE'],'','0','L',true); // value level B
			$this->AddFont('angsa','B','angsab.php');
			$this->SetFont('angsa','B',14);
			$this->Cell(35,9,iconv('UTF-8','TIS-620','ชื่อคอมพิวเตอร์  :'),'','0','R',true);
			$this->AddFont('angsa','','angsa.php');
			$this->SetFont('angsa','',14);
			$this->Cell(48,9,$RE_USB['COM_NAME'],'','0','L',true); // value level B
			$this->Cell(36,9,'','R','0','C',true);
			//--------------------- Insert Empty Box png ---------------------------------------
			//$this->Image('assets/images/empty-box.png',174,156,3,3); // Insert Picture Empty-Box1
			//$this->Image('assets/images/empty-box.png',192,156,3,3); // Insert Picture Empty-Box2
			$this->ln();
			$this->AddFont('angsa','B','angsab.php');
			$this->SetFont('angsa','B',14);
			$this->Cell(20,9,'','BL','0','L',true);
			$this->Cell(18,9,iconv('UTF-8','TIS-620','เหตุผล :'),'B','0','R',true);
			$this->AddFont('angsa','','angsa.php');
			$this->SetFont('angsa','',14);
			$this->Cell(147,9,$RE_USB['JUSTIFICATION'],'BR','0','L',true);
			$this->ln();
		}

		//--------------------- Data Row 5 : Telephone ----------------------------------------
		if($ROW_TELE > 0 )
		{
			$RowF++;
			if($RowF ==1)
			{
				$Position_Img[0] =  120;
				$Position_Img[1] =  138;
				$End_Table				=	$End_Table - 18;
			}else
			{
				$Position_Img[$RowF]	=	$Position_Img[$RowF-1]+18;
				$End_Table				=	$End_Table-18;
			}
			$this->AddFont('angsa','B','angsab.php');
			$this->SetFont('angsa','B',14);
			$this->Cell(20,9,' '.$RowF.'.Telephone','L','0','L',true);
			$this->Cell(18,9,iconv('UTF-8','TIS-620','ประเภท :'),'','0','R',true);
			$this->AddFont('angsa','','angsa.php');
			$this->SetFont('angsa','',14);
			$this->Cell(111,9,$RE_TELE['TYPE_TEL'],'','0','L',true);
			$this->Cell(36,9,'','R','0','C',true);
			//--------------------- Insert Empty Box png ---------------------------------------
			//$this->Image('assets/images/empty-box.png',174,174,3,3); // Insert Picture Empty-Box1
			//$this->Image('assets/images/empty-box.png',192,174,3,3); // Insert Picture Empty-Box2
			$this->ln();
			$this->AddFont('angsa','B','angsab.php');
			$this->SetFont('angsa','B',14);
			$this->Cell(20,9,'','BL','0','L',true);
			$this->Cell(18,9,iconv('UTF-8','TIS-620','เหตุผล :'),'B','0','R',true);
			$this->AddFont('angsa','','angsa.php');
			$this->SetFont('angsa','',14);
			$this->Cell(147,9,$RE_TELE['JUSTIFICATION'],'BR','0','L',true);
			$this->ln();
		}
		
		//--------------------- Data Row 6 : VPN ----------------------------------------
		if($ROW_VPN > 0)
		{
			$RowF++;
			if($RowF ==1)
			{
				$Position_Img[0] =  120;
				$Position_Img[1] =  129;
				$End_Table				=	$End_Table - 9;
			}else
			{
				$Position_Img[$RowF]	=	$Position_Img[$RowF-1] +9;
				$End_Table				=	$End_Table-9;
			}
			$this->AddFont('angsa','B','angsab.php');
			$this->SetFont('angsa','B',14);
			$this->Cell(20,9,' '.$RowF.'.VPN','LB','0','L',true);
			$this->Cell(18,9,iconv('UTF-8','TIS-620','เหตุผล :'),'B','0','R',true); 
			$this->AddFont('angsa','','angsa.php');
			$this->SetFont('angsa','',14);
			$this->Cell(111,9,$RE_VPN['JUSTIFICATION'],'B','0','L',true);
			$this->Cell(36,9,'','BR','0','C',true);
			//--------------------- Insert Empty Box png ---------------------------------------
			//$this->Image('assets/images/empty-box.png',174,192,3,3); // Insert Picture Empty-Box1
			//$this->Image('assets/images/empty-box.png',192,192,3,3); // Insert Picture Empty-Box2
			$this->ln();
		}
		
		//--------------------- Data Row 7 : Printer ----------------------------------------
		if($ROW_PRINTER > 0)
		{
			$C_Row_Print	=	0;
			while($RE_PRINTER	=	mssql_fetch_array($QUERY_PRINTER))
			{
				$RowF++;
				$C_Row_Print++;
				if($RowF ==1)
				{
					$Position_Img[0] =  120;
					$Position_Img[1] =  138;
					$End_Table				=	$End_Table - 18;
				}else
				{
					$Position_Img[$RowF]	=	$Position_Img[$RowF-1] +18;
					$End_Table				=	$End_Table-18;
				}
				$this->AddFont('angsa','B','angsab.php');
				$this->SetFont('angsa','B',14);
				if( $C_Row_Print == 1)
				{
					$this->Cell(20,9,' '.$RowF.'.Printer','L','0','L',true);
				}else
				{
					$this->Cell(20,9,'','L','0','L',true);
				}
				$this->Cell(18,9,iconv('UTF-8','TIS-620','รุ่น :'),'','0','R',true);
				$this->AddFont('angsa','','angsa.php');
				$this->SetFont('angsa','',14);
				$this->Cell(77,9,$RE_PRINTER['NAME'],'','0','L',true); // value level B
				$this->AddFont('angsa','B','angsab.php');
				$this->SetFont('angsa','B',14);
				$this->Cell(15,9,iconv('UTF-8','TIS-620','ประเภท  :'),'','0','R',true);
				$this->AddFont('angsa','','angsa.php');
				$this->SetFont('angsa','',14);
				$this->Cell(20,9,$RE_PRINTER['TYPE_TICK'],'','0','L',true); // value level B
				$this->Cell(35,9,'','R','0','C',true);
				//--------------------- Insert Empty Box png ---------------------------------------
				//$this->Image('assets/images/empty-box.png',174,156,3,3); // Insert Picture Empty-Box1
				//$this->Image('assets/images/empty-box.png',192,156,3,3); // Insert Picture Empty-Box2
				$this->ln();
				$this->AddFont('angsa','B','angsab.php');
				$this->SetFont('angsa','B',14);
				$this->Cell(20,9,'','L','0','L',true);
				$this->Cell(18,9,iconv('UTF-8','TIS-620','เหตุผล :'),'','0','R',true);
				$this->AddFont('angsa','','angsa.php');
				$this->SetFont('angsa','',14);
				$this->Cell(147,9,$RE_PRINTER['JUSTIFICATION'],'R','0','L',true);
				$this->ln();
			}
		}
		
		
			$this->Cell(185,$End_Table,'','LR','0','C',true);
			$this->ln();
			$this->Cell(185,1,'','LBR','0','C',true);
			$this->ln(3);
		//--------------------- Close Row Query Database -----------------------------------------
		
		

				



		
		
		



		

		
	}
}

include('DB_Configuration.php');
$EMP_ID	=	$_GET['empid1'];
//$EMP_ID		=	"10000759";
//$REQ_ID		=	"RF-15050006";
$pdf = new PDF('P','mm','A4');
$pdf->SetTopMargin(12);
$pdf->SetLeftMargin(17);
$pdf->SetAutoPageBreak('true','0');
$pdf->AddPage();
$pdf->REQ($EMP_ID);
$pdf->Output();



?>