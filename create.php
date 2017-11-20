<?php

$new_data = ($_POST);

//TODO
//check if all parameters are provided

//reading data
$existing_data = json_decode(file_get_contents('data/bakery-data.json'));
$existing_data = objectToArray($existing_data);

updateData($existing_data,$new_data);
file_put_contents('data/bakery-data.json',json_encode($existing_data));



function objectToArray(stdClass $obj) : array
{
	$obj = (array) $obj;

	foreach ($obj as $key => &$value) 
	{		

		if (gettype($value) == 'object')
		{
			$value = objectToArray($value);
		}

	}

	return $obj;
}

function updateData(&$existing_data,$new_data)
{

	if (isset($existing_data[$new_data['Data']])) 
	{

		if (isset($existing_data[$new_data['Data']][$new_data['product']]))
		{
			echo 'ERROR';
		}
		
		else
		{
		$existing_data = createNewProduct($existing_data,$new_data);
		}
	}
	else
	{
		$existing_data[$new_data['Data']] = [];
		$existing_data = createNewProduct($existing_data,$new_data);
	}


}

function createNewProduct ($existing_data,$new_data)
{
	$existing_data[$new_data['Data']][$new_data['product']] = 
	[
		(int)$new_data["vl"],
		(int)$new_data["pg"],
		(int)$new_data["pr"],
		(int)$new_data["sg"],
		(int)$new_data["gl"]
	];
	return $existing_data;
}