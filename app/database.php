<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pk_bakery';

function db_connect ()
{
	$conn = mysqli_connect($servername,$username,$password,$dbname,3307);
	if (!$conn)
	{
		die("Could nor connect");
	}

	return $conn;
}


function db_query()
{
	$conn = db_connect();
	$result = $conn -> query($query);
	$conn -> close();

	return $result;
}
/*
$result = $conn->query('SHOW TABLES');
foreach ($result as $key =>$value) 
{
	print_r($value);
}


mysqli_close($conn);*/