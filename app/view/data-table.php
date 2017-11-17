<?php

$days = $keys = '';
$rows = [];

foreach ($data as $key => $value) {
					
		$days .= "<th colspan=\"5\">$key</th>";
		$keys .= "<th>VL</th> <th>PG</th> <th>PR</th> <th>SG</th> <th>GL</th>";

		foreach ($value as $name => $data) 
		{

			if(!isset($rows[$name]))	
				{
					$rows[$name] = "<td>$name</td>";
				}
			foreach ($data as $amount) 
			{
				$rows[$name] .= ("<td>$amount</td>");
			}

		}
	}
?>



<table>
	<thead>
		<tr>
		
			<th rowspan="2">Pavadinimas</th>
			<?php
				echo $days;
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
				echo "<tr>$row</tr>";
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