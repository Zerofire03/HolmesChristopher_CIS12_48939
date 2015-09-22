<!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Savings For-Loop</title>
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
			 * Purpose: Logical Operators
			 * Date: 09/21/15
			 */
		?>
	</head>
	<body>
		<?php
			//Declare Variables
			$nYears = 50; //Number of years in table
			$iRate = 0.05; //Interest rate to start with
			$principle = 100; //Initial balance in dollars
			$numInt = 6; //Number of interest rates to calculate
			$iRates = array($numInt); //Single dimension array to store interest rates
			$prinArray = array($nYears); //Two dimentional array to store calculated values
			
			//Fill array with interest rates
			for($i=0; $i< 6; $i++)
			{
				$iRates[$i]=$iRate+($i/100);
			}
			
			//Calculate values and store in 2 dimensional array
			for($i=0; $i<$nYears; $i++)
			{
				$prinArray[$i] = array($numInt);
				for($j=0; $j<$numInt; $j++)
				{
					if($i==0)
					{
						$prinArray[$i][$j] = $principle*(1+$iRates[$j]);
					}
					else
					{
						$prinArray[$i][$j] = $prinArray[$i-1][$j]*(1+$iRates[$j]);
					}
				}
			}
			
			//Create headings in table
			echo '<table width="700" border="1">';
			echo '<tr>';
			echo "<th>Years</th>";
			foreach($iRates as &$value)
			{
				echo '<th>'.($value*100).'% Savings</th>';
			}
			
			//Fill the table by using a for loop row by row on a 2 dimensional array
			
			for($i=0; $i<$nYears; $i++)
			{
				echo '<tr>';
				echo '<td>'.($i+1).'</td>';
				for($j=0; $j<$numInt; $j++)
				{
					echo '<td>'.number_format(($prinArray[$i][$j]),2).'</td>';
				}
				echo '</tr>';
			}
			
			
			
			echo '</tr>';
			echo '</table>';
		
		
		
		
		
		?>		
	</body>
</html>