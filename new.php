<!DOCTYPE html>
<html>
<head>
	<title>Nauji duomenys</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>

	<form method="POST" action="create.php">


		<div>Data 				 :</div> <input type="date" name="Data"> <br>
		
		<div>Prekė :</div>
		<select name = "product">
			<option value = "P-1">Aguoninė</option>
			<option value = "P-2">Varškės</option>
		</select>

		<div>Vakarykštis likutis :</div> <input type="number" name="vl"> <br>
		<div>Pagaminta           :</div> <input type="number" name="pg"> <br>
		<div>Parduota            :</div> <input type="number" name="pr"> <br>
		<div>Sugadinta           :</div> <input type="number" name="sg"> <br>
		<div>Galutinis likutis   :</div> <input type="number" name="gl"> <br>

		<input type="Submit" value="Išsaugoti duomenis">
	</form>

</body>
</html>