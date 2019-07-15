<?php
	$serverName = 'sql6006.site4now.net';   
	$uid = 'DB_A2BC29_BhadaDB_admin';
	$pwd = 'bhadaappdb30';    
	$databaseName = 'DB_A2BC29_BhadaDB';   
	   
	$connection = array( 'UID'=>$uid,                              
                         'PWD'=>$pwd,                              
                         'Database'=>$databaseName,
                     	 'ReturnDatesAsStrings'=>true);

	$connect = sqlsrv_connect($serverName, $connection);
?>