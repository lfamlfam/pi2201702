<?php

$db_host = "lfamlfam.database.windows.net";
$db_name = "PI-2";
$db_user = "lfamlfam";
include('senha.php');//$db_pass = "senha";
$dsn = "Driver={SQL Server};Server=$db_host;Port=1433;Database=$db_name;";

if(!$db = odbc_connect($dsn, $db_user, $db_pass)){

	echo "ERRO AO CONECTAR AO BANCO DE DADOS";
	exit();
}
?>