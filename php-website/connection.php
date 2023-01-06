<?php

$dbhost = "localhost";
$dbuser = "id18605253_db_2022";
$dbpass = "Fxl=TomDeV2022";
$dbname = "id18605253_local_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
