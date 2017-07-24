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

$mode=$_REQUEST["mode"];
if($mode == "user")

{
	global $database, $db;
	$name=$database->escape_value ($_REQUEST["name"]);
	$location = $_REQUEST["location"];
	$email = $_REQUEST["email"];
	$contact = $_REQUEST["contact"];
	$details = $_REQUEST["details"];
		
 /*  print_r($url);
	exit; */

				$qry_update="INSERT INTO `".TBL_CONTACT."` (`name`,`location`,`email`,`contact`,`details`)"
				                        . " VALUES ('".$name."','".$location."','".$email."','".$contact."','".$details."');";
				$result_upload = $database->query( $qry_update );

				if($result_upload>0)
					{
					echo ("<SCRIPT LANGUAGE='JavaScript'>
					    window.alert('Thanks for contacting us! Our support team will contact you shortly.')
					    window.location.href='contact.php';
					    </SCRIPT>");
					}
				else
					{
					echo ("<SCRIPT LANGUAGE='JavaScript'>
					    window.alert('Request failed. Please contact support')
					    window.location.href='contact.php';
					    </SCRIPT>");
					}

}
   
?>