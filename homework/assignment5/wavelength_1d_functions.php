<!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Wavelength One Dimensional Array with Functions</title>
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
			 * Purpose: One Dimensional Array Using Functions
			 * Date: 09/28/15
			 */			
		?>
	</head>
	<body>
		<?php
		//Include function file
		include 'assignment5Functions.php';
		
		//Declare variables
		$nRows=16; //Number of rows in the table
		$iWave=3; //Starting wavelength. Exponent only
		$wavelength = array($nRows); //Array to store wavelengths
		$band = array($nRows); //Array to store band		
		
		//Fill Arrays		
		fill1DTable($wavelength, $band, $iWave, $nRows);			
		
		//Create headings in table
		echo '<table width="300" border="1">';
		echo '<tr><th>Row Number</th><th>Wavelength</th><th>Band</th></tr>';
		
		
		//Build Table
		display1DTable($wavelength, $band);
		
		echo '</table>';
		?>
	</body>
</html>