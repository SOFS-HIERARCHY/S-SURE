<?php
include_once("db.config.php");
$PREFIX=DB_PREFIX;
defined('TBL_CAREER_CONTACT') ? null : define('TBL_CAREER_CONTACT',$PREFIX.'career_contact' );
defined('TBL_CAREER') ? null : define('TBL_CAREER',$PREFIX.'career' );
?>