<!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Wavelength No Array</title>
		<style type="text/css" title="text/css" media="all">
		label
		{
			font-weight: bold;
			color: #C00;
		}		
		td
		{
			text-align: center;
		}
		</style>
		<?php
			/*
			 * Author: Christopher Holmes
			 * Class: CIS 12
			 * Purpose: No Array
			 * Date: 09/23/15
			 */
		?>
	</head>
	<body>
		<?php
		//Declare variables
		$nRows=16; //Number of rows in the table
		$iWave=3; //Starting wavelength. Exponent only
		
		//Create headings in table
		echo '<table width="300" border="1">';
		echo '<tr><th>Row Number</th><th>Wavelength</th><th>Band</th></tr>';
		
		//Fill table
		for($row=1; $row<=$nRows; $row++, $iWave--)
		{
			echo '<tr>';
				echo "<td>$row</td>";
				echo "<td>10^$iWave</td>";
				switch($iWave)
				{
					case 3:
					case 2:						
					case 1:						
					case 0:						
					case -1:
						echo "<td>Radio</td>";
						break;
					case -2:
					case -3:
					case -4:
						echo "<td>Microwave</td>";
						break;
					case -5:
						echo "<td>Infrared</td>";
						break;
					case -6:
					case -7:
						echo "<td>Visiable</td>";
						break;
					case -8:
					case -9:
						echo "<td>Ultraviolet</td>";
						break;
					case -10:
					case -11:
						echo "<td>X-Ray</td>";
						break;
					case -12:
						echo "<td>Gamma Ray</td>";
						break;
				}
			echo '</tr>';
		}
		echo'</table>';
		
		
		?>
	</body>
</html>