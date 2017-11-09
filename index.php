<!DOCTYPE html>
<html>
<head>
	<title>Bakery</title>
	<link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>

<table>
	
	<thead>
		<tr>
		
			<th rowspan="2">Pavadinimas</th>
			<th colspan="5">2017-11-09</th>
			<th colspan="5">2017-11-10</th>

		</tr>
		<tr>
			<th>VL</th> <!-- Vakarykštis likutis -->
			<th>PG</th> <!--Pagaminta-->
			<th>PR</th> <!--Parduota-->
			<th>SG</th> <!--Sugadinta-->
			<th>GL</th> <!--Galutinis likutis-->
			<th>VL</th> <!-- Vakarykštis likutis -->
			<th>PG</th> <!--Pagaminta-->
			<th>PR</th> <!--Parduota-->
			<th>SG</th> <!--Sugadinta-->
			<th>GL</th> <!--Galutinis likutis-->
		</tr>

	</thead>

	<tbody>
		<tr>			
			<td>Aguoninė</td>
			<td>5</td>
			<td>20</td>
			<td>19</td>
			<td>4</td>
			<td>2</td>
			<td>5</td>
			<td>20</td>
			<td>19</td>
			<td>4</td>
			<td>2</td>
		</tr>
		<tr>
			
			<td>Varškės</td>
			<td>1</td>
			<td>25</td>
			<td>17</td>
			<td>0</td>
			<td>7</td>
			<td>1</td>
			<td>25</td>
			<td>17</td>
			<td>0</td>
			<td>7</td>
		</tr>
		<tr>
			
			<td>Duona balta</td>
			<td>9</td>
			<td>16</td>
			<td>10</td>
			<td>3</td>
			<td>12</td>
			<td>9</td>
			<td>16</td>
			<td>10</td>
			<td>3</td>
			<td>12</td>
		</tr>
		<tr>
			
			<td>Duona juoda</td>
			<td>0</td>
			<td>25</td>
			<td>19</td>
			<td>1</td>
			<td>6</td>
			<td>0</td>
			<td>25</td>
			<td>19</td>
			<td>1</td>
			<td>6</td>
		</tr>
		<tr>
			
			<td>Duona ruginė</td>
			<td>3</td>
			<td>15</td>
			<td>17</td>
			<td>1</td>
			<td>0</td>
			<td>3</td>
			<td>15</td>
			<td>17</td>
			<td>1</td>
			<td>0</td>
		</tr>
	</tbody>

</table>

<script type="text/javascript">

//OPTION - I unsorted
var _arrayOfObjects =
[{
	"date" : "2017-11-09",
	"product" : "Aguoninė",
	"data" : [5,20,19,4,2]
},
{
	"date" : "2017-11-09",
	"product" : "Varškės",
	"data" : [1,25,17,0,7]
}
]

//OPTION - II sort by date
var _objectByDay =
{
	"2017-11-09" :
	[
		{
			"product" : "Aguoninė",
			"data" : [5,20,19,4,2]
		},
		{
			"product" : "Varškės",
			"data" : [1,25,17,0,7]
		}

	]
}

//OPTION - III sort by product

var _objectByProduct =
{

	"Aguoninė" :
	[
		{
			"date" : "2017-11-09",
			"data" : [5,20,19,4,2]
		}
	]

}

console.log(_arrayOfObjects);
console.log(_objectByDay);
console.log(_objectByProduct)

//OPTION - IV optimized by date

// var _optimizedDate =
// {
// 	"2017-11-09" :		
// 	{
// 		"Aguoninė" : [5,20,19,4,2]
// 		"Varškės" : [1,25,17,0,7]
// 	}
// }

//OPTION - V optimized by product

// var _optimizedByProduct =
// {
// 	"Aguoninė" :		
// 	{
// 		"2017-11-09" : [5,20,19,4,2]
// 	}
// }

//OPTION FINAL

// var _products =
// {
// 	"1": "Varškės"
// }

// var _FinalByProduct =
// {
// 	"1" :		
// 	{
// 		"2017-11-09" : [5,20,19,4,2]
// 	}
// }


//OPTION DABASE
var _products =
{
	"p-1" : "Varškės su cinamonu",
}

var _productsAmountKey =
{
	"VL" : "Likutis pradžiai",
	"PG" : "Pagaminta",
}

var _products_history =
[
	{
		"date" : "2017-11-09",
		"product_id" : "p-1",
		"key_id" : "VL",
		"amount" : 3 
	}
]



</script>

</body>
</html>