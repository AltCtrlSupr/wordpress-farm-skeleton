<?php

$db_host = 'localhost';
$db_name = 'acspanel_databasename';
$db_user = 'acspanel_username';
$db_password = 'acspanel_password';

$link = mysql_connect($db_host, $db_user, $db_password);

if (!$link) {
    die('Could not connect: ' . mysql_error());
}

//select a database to work with
$selected = mysql_select_db($db_name, $link) 
  or die("Could not select database");

$req_host = $_SERVER['HTTP_HOST'];

$sql = "SELECT dbu.username, dbu.password, db.name, ip.ip
	FROM wp_setup AS wp
	INNER JOIN httpd_host AS hh ON wp.httpd_host_id = hh.id
	INNER JOIN domain AS dom ON hh.domain_id = dom.id
	INNER JOIN database_user AS dbu ON wp.database_user_id = dbu.id
	INNER JOIN db AS db ON dbu.database_id = db.id
	INNER JOIN service AS serv ON db.service_id = serv.id
	INNER JOIN ip_address AS ip ON serv.ip_id = ip.id
	WHERE dom.domain = '$req_host' ";

// echo $sql;

$query = mysql_query($sql, $link);

$results =  mysql_fetch_assoc($query);

// print_r($results);

define( 'DB_NAME', $results['name'] );
define( 'DB_USER', $results['username'] );
define( 'DB_PASSWORD', $results['password'] );
define( 'DB_HOST', $results['ip'] ); // Probably 'localhost'

mysql_close($link);
