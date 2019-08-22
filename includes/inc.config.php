<?php
require_once("inc.db.php");

$timezone 		= 	"Asia/Colombo"; 
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone); 

mysql_query("SET SESSION time_zone = '+5:30'");

//define("SITE_NAME", "DoHajj.info");
//define("SITE_DOMAIN", "dohajj.info");
//define("ADMIN_URL", "http://www.dohajj.info/ecozadmin");
//define("AGENT_URL", "http://www.dohajj.info/agents");
?>
