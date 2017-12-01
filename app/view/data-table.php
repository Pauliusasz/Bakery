<?php

$days = $rows = [];
$keys = '';

foreach ($products as $value) 
{
	if (!isset($rows[$value['id']])) 
	{
		$rows[$value['id']] = [];
		$rows[$value['id']]['name'] = '<td>'. $value['name']. '</td>';
	}
}

// print_r($rows);
// die();
foreach ($productsHistory as $value) 
{
		if (!isset($days[$value['date']])) 
		{	
			$days[$value['date']] =$value['date'];
			$keys .= "<th>VL</th> <th>PG</th> <th>PR</th> <th>SG</th> <th>GL</th>";
			

			foreach ($rows as &$product) 
			{
				$product[$value['date']] = "<td></td> <td></td> <td></td> <td></td> <td></td>";
			}
		}
/*		$rows[$value['product_id']] .= '<td>'. $value['initial'] .'</td>';
		$rows[$value['product_id']] .= '<td>'. $value['produced'] .'</td>';
		$rows[$value['product_id']] .= '<td>'. $value['sold'] .'</td>';
		$rows[$value['product_id']] .= '<td>'. $value['damaged'] .'</td>';
		$rows[$value['product_id']] .= '<td>'. $value['closed'] .'</td>';
*/

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
			foreach ($rows as $data) 
			{
				echo '<tr>';
				foreach ($data as $key => $value) 
				{

					echo $value;
	
				}
				echo '</tr>';
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