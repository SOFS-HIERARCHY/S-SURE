<?php
include_once("db.config.php");
$PREFIX=DB_PREFIX;
defined('TBL_CAREER') ? null : define('TBL_CAREER',$PREFIX.'career' );
defined('TBL_CONTACT') ? null : define('TBL_CONTACT',$PREFIX.'contact' );
defined('TBL_NEWSLETTER') ? null : define('TBL_NEWSLETTER',$PREFIX.'newsletter' );
defined('TBL_HOME') ? null : define('TBL_HOME',$PREFIX.'home' );
?>