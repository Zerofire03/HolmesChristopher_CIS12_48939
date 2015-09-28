<!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Wavelength 2 Dimensional Array</title>
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
			 * Purpose: 2 Dimensional Array
			 * Date: 09/23/15
			 */
		?>
	</head>
	<body>
		<?php
		
		//Declare Variables
		$nRows = 16; //Number of rows in table
		$nColumns = 3; //Number of columns
		$frequency = 3; //Frequency to start with		
		$rows = array($nRows); //Two dimentional array to store calculated values
		
		for($i=0; $i<$nRows; $i++)
		{
			$rows[$i]=array($nColumns);
			for($j=0; $j<=$nColumns; $j++)
			{				
				switch($j)
				{
					case 0:
						$rows[$i][$j]=$i+1;
						break;				
					case 1:
						$rows[$i][$j]=$frequency;
						$frequency--;
						break;
					case 2:
						switch($rows[$i][$j-1])
						{						
							case 3:								
							case 2:
							case 1:
							case 0:
							case -1:
								$rows[$i][$j] = "Radio";
								break;
							case -2:
							case -3:
							case -4:
								$rows[$i][$j] = "Microwave";
								break;
							case -5:
								$rows[$i][$j] = "Infrared";
								break;
							case -6:
							case -7:
								$rows[$i][$j] = "Visiable";
								break;
							case -8:
							case -9:
								$rows[$i][$j] = "Ultraviolet";
								break;
							case -10:
							case -11:
								$rows[$i][$j] = "X-Ray";
								break;
							case -12:
								$rows[$i][$j] = "Gamma Ray";							
								break;
						}
					}				
				}
		}				
		
		//Create headings in table
		echo '<table width="300" border="1">';
		echo '<tr>';
		echo "<th>Row Number</th>";
		echo "<th>Wavelength</th>";
		echo "<th>Band</th>";
		
		//Fill Table
		for($i=0; $i<$nRows; $i++)
		{
			echo '<tr>';			
			for($j=0; $j<$nColumns; $j++)
			{
				if($j==1)
				{
					echo '<td>10^'.$rows[$i][$j].'</td>';
				}
				else
				{
					echo '<td>'.$rows[$i][$j].'</td>';
				}
			}
			echo '</tr>';
		}		
		echo '</tr>';
		echo '</table>';
		
		?>
	</body>
</html>