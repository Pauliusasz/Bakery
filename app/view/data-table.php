<?php

$days = $rows = [];
$keys = '';

foreach ($products as $value) 
{
	if (!isset($rows[$value['id']])) 
	{
		$rows[$value['id']] = '<td>'. $value['name']. '</td>';
	}
}
foreach ($productsHistory as $value) 
{
		if (!isset($days[$value['date']])) {	

		$days[$value['date']] .= $value['date'];
		$keys .= "<th>VL</th> <th>PG</th> <th>PR</th> <th>SG</th> <th>GL</th>";
		}
			
			// if(!isset($rows[$value['product_id']]))	
			// 	{
			// 		$rows[$value['product_id']] = '<td>'.$value['product_id'].'</td>';
			// 	}

/*		foreach ($products_names as $key => $name) 
		{


			if (isset($value[$key])) 
			{
				foreach ($value[$key] as $amount)
				{

					$rows[$key] .= "<td>$amount</td>";

				}
			}	
			else
			{
				$rows[$key] .="<td></td> <td></td> <td></td> <td></td> <td></td>";
			}


		}*/


	}
?>



<table>
	<thead>
		<tr>
		
			<th rowspan="2">Pavadinimas</th>
			<?php

			foreach ($days as $date)
			{

				echo '<th colspan="5">'.$date.'</th>';

			}

			?>
		</tr>
		<tr>
			<?php
				echo $keys;
			?>
		</tr>
	</thead>
	<tbody>
			<tr>
			<?php
			foreach ($rows as $row) 
			{
				echo '<tr>'.$row.'</tr>';
			}
			
			?>
			</tr>
	</tbody>
</table>	



<?php

//var_dump($data);

$html = '';

$html .= '<table>';
$html .= '<thead>';

$html .= '</thead>';
$html .= '</table>';

echo $html;

return;