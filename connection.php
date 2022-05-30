<?php

$serverName = "servermase.database.windows.net";
$connectionOptions = [
	"Database"=>"dbMASE",
	"Uid"=>"adminmase",
	"PWD"=>"Parola1!"
];
$conn = sqlsrv_connect($serverName, $connectionOptions);
if($conn == false)
	die(print_r(sqlsrv_errors(), true));
else echo 'Conectare reusita!';
