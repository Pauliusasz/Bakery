<!DOCTYPE html>
<html>
<head>
	<title>Nauji duomenys</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>

	<form method="POST" action="create.php">


		<div>Data 				 :</div> <input type="date" name="date"> <br>
		
		<div>Prekė :</div>
		<select name = "product_id">
			<?php

				@include_once('app/database.php');

				$query = "SELECT `id`, `name` FROM `bakery_products` WHERE `deleted_at` IS NULL ORDER BY `name` ASC ";
				$result = db_query($query);
				foreach ($result as $value) 
				{
					echo '<option value = '.$value['id'].'>'.$value['name'].'</option>';
				}
				


			?>

		</select>

		<div>Vakarykštis likutis :</div> <input type="number" name="initial"> <br>
		<div>Pagaminta           :</div> <input type="number" name="produced"> <br>
		<div>Parduota            :</div> <input type="number" name="damaged"> <br>
		<div>Sugadinta           :</div> <input type="number" name="sold"> <br>
		<div>Galutinis likutis   :</div> <input type="number" name="closed"> <br>

		<input type="Submit" value="Išsaugoti duomenis">
	</form>

</body>
</html>