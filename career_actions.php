<?php 
error_reporting (E_ALL ^ E_NOTICE);
include_once 'libs/class.database.php';
/* include_once 'libs/class.session.php'; */
include_once 'libs/functions.php';
include_once 'libs/tables.config.php';
/* include_once 'libs/lang.php';
session_start();
$session= new Session();
if(!$session->has_logged_in())
{
	redirect_to("index.php");
} */
$target_path = "resumes/";

$mode=$_REQUEST["mode"];
$image_extensions_allowed = array('docx');

if($mode == "user")

{
	global $database, $db;
	$name=$database->escape_value ($_REQUEST["name"]);
	$email = $_REQUEST["email"];
	$contact = $_REQUEST["contact"];
	$location = $_REQUEST["location"];
	$details = $_REQUEST["details"];
	$resume = $_REQUEST["resume"];
	if(move_uploaded_file($_FILES['resume']['tmp_name'], $target_path. $_FILES["resume"]['name']))
	{
		$fileName = $_FILES['resume']['name'];
	}
	/* print_r($fileName);
	exit; */

				$qry_update="INSERT INTO `".TBL_CAREER."` (`name`,`email`,`contact`,`location`,`details`,`resume`)"
				                        . " VALUES ('".$name."','".$email."','".$contact."','".$location."','".$details."','".$fileName."');";
				$result_upload = $database->query( $qry_update );

				if($result_upload>0)
					{
					echo ("<SCRIPT LANGUAGE='JavaScript'>
					    window.alert('Email sent successfully')
					    window.location.href='career.php';
					    </SCRIPT>");
					}
				else
					{
					echo ("<SCRIPT LANGUAGE='JavaScript'>
					    window.alert('Email sent failed. Please contact support')
					    window.location.href='career.php';
					    </SCRIPT>");
					}

}
   
?>