<?php

///////////////////////////////////
// Stat Counter by PDStudios.net
// Daily Statistics.
// Version 1.0
// http://www.pdstudios.net
//////////////////////////////////

// User Editable Info.
$ShowUniques = '1';   // Show number of unique Hits today.
$ShowVisits = '1';   // Show number of visit today.
$ShowRefferer = '1';   // Show which page the visitor came from.
$UrltoScript = 'http://www.domain.com/stats.php';   // Link to where the script is.
$TableName = 'stats';   // The table that holds the statistics in your database.
$DBHost = 'localhost';   // Database Host (Usually localhost).
$DBUsername = 'root';   // Database username.
$DBPassword = '';   // Database password.
$DBName = 'ampayeur';   // Database name.

//  Generate required info.
$CurrentPage = $_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF'].$_SERVER['REQUEST_URI'];
$Refferrer = $_SERVER['HTTP_REFERER'];

// Make connection to database
$Connect = mysql_connect($DBHost, $DBUsername, $DBPassword);
$Database = mysql_select_db($DBName, $Connect);
	if(!$Database)
	{
	echo 'Database could not be connected.';
	exit;
	}

// Insert this page view into database is this page was not been viewed yet.
	if($Refferrer !== $CurrentPage)
		{
$AddView = mysql_query("INSERT INTO `" . $TableName . "` 
(`Visit_IP`, `Visit_Referer`, `Visit_date`, `Visit_page`)
VALUES
('" . $_SERVER['REMOTE_ADDR'] . "', '" . $Refferrer . "', '" . date(dmy) . "', '" . $CurrentPage . "', )
");
	}
	
// Show Wanted Information.

if($ShowUniques == '1')
	{
	echo '<strong>Unique Visits</strong>';
	echo '<br />Unique Visits: '.mysql_num_rows(mysql_query("SELECT DISTINCT `Visit_IP` from `" . $TableName . "`"));
	echo '<br />Unique Visits Today: '.mysql_num_rows(mysql_query("SELECT DISTINCT `Visit_IP` from `" . $TableName . "` WHERE `Visit_date` = '" . date(dmy) . "' "));
	echo '<br />Unique Visits to this page: '.mysql_num_rows(mysql_query("SELECT DISTINCT `Visit_IP` from `" . $TableName . "` WHERE `Visit_page` = '" . $CurrentPage . "' "));
	}
if($ShowVisits == '1')
	{
	echo '<br /><strong>Page Views</strong>';
	echo '<br />Page Views: '.mysql_num_rows(mysql_query("SELECT `Visit_IP` from `" . $TableName . "`"));
	echo '<br />Page Views Today: '.mysql_num_rows(mysql_query("SELECT `Visit_IP` from `" . $TableName . "` WHERE `Visit_date` = '" . date(dmy) . "' "));
	echo '<br />Page Views to this page: '.mysql_num_rows(mysql_query("SELECT `Visit_IP` from `" . $TableName . "` WHERE `Visit_page` = '" . $CurrentPage . "' "));
	}
if($ShowRefferer == '1')
	{
	echo '<br /><strong>Referrer</strong>';
	echo '<br />You came from: '.$Refferrer;
	}
	

?>