<!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Wavelength 2 Dimensional Array Using Functions</title>
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
			 * Purpose: 2 Dimensional Array Using Functions
			 * Date: 09/28/15
			 */
		?>
	</head>
	<body>
		<?php
		//Include function file
		include 'assignment5Functions.php';

		

		//Declare Variables
		$nRows = 16; //Number of rows in table
		$nColumns = 3; //Number of columns
		$frequency = 3; //Frequency to start with		
		$tableArray = array();
		
		//Fill table using function
		$tableArray = fill2DTable($nRows, $nColumns, $frequency);
		
				
		//Create headings in table
		echo '<table width="300" border="1">';
		echo '<tr>';
		echo "<th>Row Number</th>";
		echo "<th>Wavelength</th>";
		echo "<th>Band</th>";
		
		//Display table using function
		display2DTable($tableArray);
		
		echo '</tr>';
		echo '</table>';
		
		?>
	</body>
</html>