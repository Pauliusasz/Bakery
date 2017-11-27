<?php

function db_connect ()
{

	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'pk_bakery';

	$conn = mysqli_connect($servername,$username,$password,$dbname,3307);
	if (!$conn)
	{
		die("Could nor connect");
	}

	$conn ->set_charset('utf8mb4');

	return $conn;
}


function db_query(string $query)
{
	$conn = db_connect();
	$result = $conn -> query($query);
	$conn -> close();

	return $result;
}

// print_r(db_query($query));

/*
$result = $conn->query('SHOW TABLES');
foreach ($result as $key =>$value) 
{
	print_r($value);
}


mysqli_close($conn);*/