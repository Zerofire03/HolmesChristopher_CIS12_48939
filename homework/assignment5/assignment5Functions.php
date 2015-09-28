<?php

	/*
	 * Author: Christopher Holmes
	 * Class: CIS 12
	 * Purpose: Functions for Assignment 6
	 * Date: 09/28/15
	 */

	//Define Functions
	
	function fill1DTable(&$waveArray, &$bandArray, $frequency, $numRows)
	{
		for($i=0; $i<=$numRows; $i++, $frequency--)
		{
			$waveArray[$i] = "10^$frequency";
	
			switch($frequency)
			{
				case 3:
				case 2:
				case 1:
				case 0:
				case -1:
					$bandArray[$i] = "Radio";
					break;
				case -2:
				case -3:
				case -4:
					$bandArray[$i] = "Microwave";
					break;
				case -5:
					$bandArray[$i] = "Infrared";
					break;
				case -6:
				case -7:
					$bandArray[$i] = "Visiable";
					break;
				case -8:
				case -9:
					$bandArray[$i] = "Ultraviolet";
					break;
				case -10:
				case -11:
					$bandArray[$i] = "X-Ray";
					break;
				case -12:
					$bandArray[$i] = "Gamma Ray";
					break;
			}
		}
	}
	
	function display1DTable($waveArray, $bandArray)
	{
		for($i=0; $i<(sizeof($waveArray,0)-1); $i++)
		{
			echo '<tr>';
			echo '<td>'.($i+1).'</td>';
			echo "<td>$waveArray[$i]</td>";
			echo "<td>$bandArray[$i]</td";
			echo '</tr>';
		}
	}

	function fill2DTable($numRows, $numCols, $frequency)
	{
		$rows = array($numRows); //Two dimentional array to store calculated values
		for($i=0; $i<$numRows; $i++)
		{
			$rows[$i]=array($numCols);
			for($j=0; $j<=$numCols; $j++)
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
		return $rows;
	}

	
	function display2DTable($array)
	{
		//Fill Table
		for($i=0; $i<sizeof($array,0); $i++)
		{
			echo '<tr>';
			for($j=0; $j<sizeof($array[$i],0); $j++)
			{
				if($j==1)
				{
					echo '<td>10^'.$array[$i][$j].'</td>';
				}
				else
				{
					echo '<td>'.$array[$i][$j].'</td>';
				}
			}
			echo '</tr>';
		}
			
	}

?>