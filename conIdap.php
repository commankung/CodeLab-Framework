<?php
header ("Content-Type: text/html; charset=windows-874");//set display ajax text to thai 
@ob_start();
@session_start();

//----LDAP AUTHEN----------------------------------------
$ldaphost = "ahdomain";
$ldapport = 389;
$ds = ldap_connect($ldaphost, $ldapport)or die("Could not connect to $ldaphost<p>");	
	
//$user_name=htmlspecialchars($_POST['user_name'],ENT_QUOTES);
$user_name=strtolower(str_replace("@aapico.com","",str_replace(' ','',$_POST['user_name'])));
$pass=$_POST['password'];
$user=$user_name; 
$admin_arr = array('wassana.m','siraporn.c','preeyaporn.p','sittisak.p','witthaya.t','sureerat.p','natthapon.t','lalana.k','samira.c','sasithorn.y','panladar.k','raweewan.p','jiraphol.m','watthana.m','phongsakorn.m');

if(empty($user_name) || empty($pass))
{ 
	echo "no";
	$_SESSION["sqsTrn"]="";
}
else if(in_array($user,$admin_arr) )
{
	
	$ds = ldap_connect($ldaphost, $ldapport)or die("Could not connect to $ldaphost<p>");
	if ($ds)
		{
			$ldapbind = @ldap_bind($ds, $user_name."@aapico.com",$pass);	//µÃÇ¨ÊÍºÃËÑÊ¼èÒ¹
			if ($ldapbind) 
				{
					//ºÑ¹·Ö¡ user Å§ session
					$_SESSION['sesusertrn']=$user;
					$_SESSION['sespasswd']=$pass;
					echo 'yes';
					$_SESSION['sqsTrn']='OK';
				}else
				{
					$ds1 = ldap_connect("asdomain", $ldapport)or die("Could not connect to $ldaphost<p>");
					if($ds1)
					{
						$ldapbind1 = @ldap_bind($ds1, $user_name."@asico.co.th",$pass);	//µÃÇ¨ÊÍºÃËÑÊ¼èÒ¹
						if ($ldapbind1) 
						{
							//ºÑ¹·Ö¡ user Å§ session
							$_SESSION['sesusertrn']=$user;
							$_SESSION['sespasswd']=$pass;
							echo 'yes';
							$_SESSION['sqsTrn']='OK';
						}else
						{
							echo 'no';
							$_SESSION['sqsTrn']='';
							$_SESSION['sesusertrn']='';
							$_SESSION['sespasswd']='';
						}
					}
				}
		}
}
ldap_close($ds);
ldap_close($ds1);

?>