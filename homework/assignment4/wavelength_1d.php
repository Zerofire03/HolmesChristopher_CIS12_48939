<!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Wavelength One Dimensional Array</title>
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
			 * Purpose: One Dimensional Array
			 * Date: 09/23/15
			 */
		?>
	</head>
	<body>
		<?php
		//Declare variables
		$nRows=16; //Number of rows in the table
		$iWave=3; //Starting wavelength. Exponent only
		$wavelength = array($nRows); //Array to store wavelengths
		$band = array($nRows); //Array to store band
		
		//Fill Arrays
		for($i=0; $i<=$nRows; $i++, $iWave--)
		{
			$wavelength[$i] = "10^$iWave";
			
			switch($iWave)
			{
				case 3:
				case 2:
				case 1:
				case 0:
				case -1:
					$band[$i] = "Radio";
					break;
				case -2:
				case -3:
				case -4:
					$band[$i] = "Microwave";
					break;
				case -5:
					$band[$i] = "Infrared";
					break;
				case -6:
				case -7:
					$band[$i] = "Visiable";
					break;
				case -8:
				case -9:
					$band[$i] = "Ultraviolet";
					break;
				case -10:
				case -11:
					$band[$i] = "X-Ray";
					break;
				case -12:
					$band[$i] = "Gamma Ray";
					break;
			}
		}
		
		//Create headings in table
		echo '<table width="300" border="1">';
		echo '<tr><th>Row Number</th><th>Wavelength</th><th>Band</th></tr>';
		
		
		//Build Table
		for($i=0; $i<$nRows; $i++)
		{
			echo '<tr>';
			echo '<td>'.($i+1).'</td>';
			echo "<td>$wavelength[$i]</td>";
			echo "<td>$band[$i]</td";
			echo '</tr>';
		}
		
		?>
	</body>
</html>