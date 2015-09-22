<!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Truth Table</title>
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
	</head>
	<body>
		<?php
			/*
			 * Author: Christopher Holmes
			 * Class: CIS 12
			 * Purpose: Logical Operators
			 * Date: 09/21/15
			 */
		?>
		
			<table width="700" border="1">
				<tbody>
				
					<!-- Headings for Table -->				
					<tr>
						<td>X</td>
						<td>Y</td>
						<td>!X</td>
						<td>!Y</td>
						<td>X&&Y</td>
						<td>X||Y</td>
						<td>X^Y</td>
						<td>X^Y^Y</td>
						<td>X^Y^X</td>
						<td>!(X&&Y)</td>
						<td>!X||!Y</td>
						<td>!(X||Y)</td>
						<td>!X&&!Y</td>
					</tr>
					
					<!-- First Row -->
					<tr>
						<?php
						$x=true;
						$y=true;
						echo "<td>".($x?"T":"F")."</td>";
						echo "<td>".($y?"T":"F")."</td>";
						echo "<td>".(!$x?"T":"F")."</td>";
						echo "<td>".(!$y?"T":"F")."</td>";
						echo "<td>".($x&&$y?"T":"F")."</td>";
						echo "<td>".($x||$y?"T":"F")."</td>";
						echo "<td>".($x^$y?"T":"F")."</td>";
						echo "<td>".($x^$y^$y?"T":"F")."</td>";
						echo "<td>".($x^$y^$x?"T":"F")."</td>";
						echo "<td>".(!($x&&$y)?"T":"F")."</td>";
						echo "<td>".((!$x)||(!$y)?"T":"F")."</td>";
						echo "<td>".(!($x||$y)?"T":"F")."</td>";
						echo "<td>".((!$x)&&(!$y)?"T":"F")."</td>";
						
						?>						
					</tr>	
					
					<!-- Second Row -->
					<tr>
						<?php
						$x=true;
						$y=false;
						echo "<td>".($x?"T":"F")."</td>";
						echo "<td>".($y?"T":"F")."</td>";
						echo "<td>".(!$x?"T":"F")."</td>";
						echo "<td>".(!$y?"T":"F")."</td>";
						echo "<td>".($x&&$y?"T":"F")."</td>";
						echo "<td>".($x||$y?"T":"F")."</td>";
						echo "<td>".($x^$y?"T":"F")."</td>";
						echo "<td>".($x^$y^$y?"T":"F")."</td>";
						echo "<td>".($x^$y^$x?"T":"F")."</td>";
						echo "<td>".(!($x&&$y)?"T":"F")."</td>";
						echo "<td>".((!$x)||(!$y)?"T":"F")."</td>";
						echo "<td>".(!($x||$y)?"T":"F")."</td>";
						echo "<td>".((!$x)&&(!$y)?"T":"F")."</td>";						
						?>						
					</tr>
					
					<!-- Third Row -->
					<tr>
						<?php
						$x=false;
						$y=true;
						echo "<td>".($x?"T":"F")."</td>";
						echo "<td>".($y?"T":"F")."</td>";
						echo "<td>".(!$x?"T":"F")."</td>";
						echo "<td>".(!$y?"T":"F")."</td>";
						echo "<td>".($x&&$y?"T":"F")."</td>";
						echo "<td>".($x||$y?"T":"F")."</td>";
						echo "<td>".($x^$y?"T":"F")."</td>";
						echo "<td>".($x^$y^$y?"T":"F")."</td>";
						echo "<td>".($x^$y^$x?"T":"F")."</td>";
						echo "<td>".(!($x&&$y)?"T":"F")."</td>";
						echo "<td>".((!$x)||(!$y)?"T":"F")."</td>";
						echo "<td>".(!($x||$y)?"T":"F")."</td>";
						echo "<td>".((!$x)&&(!$y)?"T":"F")."</td>";				
						?>						
					</tr>	
					
					<!-- Fourth Row -->
					<tr>
						<?php
						$x=false;
						$y=false;
						echo "<td>".($x?"T":"F")."</td>";
						echo "<td>".($y?"T":"F")."</td>";
						echo "<td>".(!$x?"T":"F")."</td>";
						echo "<td>".(!$y?"T":"F")."</td>";
						echo "<td>".($x&&$y?"T":"F")."</td>";
						echo "<td>".($x||$y?"T":"F")."</td>";
						echo "<td>".($x^$y?"T":"F")."</td>";
						echo "<td>".($x^$y^$y?"T":"F")."</td>";
						echo "<td>".($x^$y^$x?"T":"F")."</td>";
						echo "<td>".(!($x&&$y)?"T":"F")."</td>";
						echo "<td>".((!$x)||(!$y)?"T":"F")."</td>";
						echo "<td>".(!($x||$y)?"T":"F")."</td>";
						echo "<td>".((!$x)&&(!$y)?"T":"F")."</td>";				
						?>						
					</tr>				
			</tbody>
		</table>			
	</body>
</html>
			 