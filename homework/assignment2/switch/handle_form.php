<!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Amount Earned</title>
		<style type="text/css" title="text/css" media="all">
		label
		{
			font-weight: bold;
			color: #C00;
		}
		</style>
	</head>
	<body>
		<?php
			# handle_form.php
			
			
			//Validate if hours entered
			if(!empty($_REQUEST['hours']))
			{
				$hours = $_REQUEST['hours'];
			}
			else
			{
				$hours = NULL;
				echo '<p class="error">You forgot to enter any hours worked!</p>';
			}
			
			//Validate if payrate entered
			if(!empty($_REQUEST['rate']))
			{
				$rate = $_REQUEST['rate'];
			}
			else
			{
				$rate = NULL;
				echo '<p class="error">You forgot to enter a payrate!</p>';
			}
			
			
			$ihours = (int)($hours/10);
			
			switch($ihours)
			{
				case 0:
					echo "Invalid hours entered";
					break;
				case 1:
					$amount = $hours * $rate;
					break;
				case 2:
					$amount = $hours * $rate;
					break;
				case 3:
					$amount = (20 * $rate) + (($hours - 20) * ($rate * 2));
					break;
				case 4:
					$amount = (20 * $rate) + (($hours - 20) * ($rate * 2));
					break;
				case 5:
					$amount = (20 * $rate) + (40 * ($rate * 2)) + (($hours - 40) * ($rate * 3));
					break;
				case 6:
					$amount = (20 * $rate) + (40 * ($rate * 2)) + (($hours - 40) * ($rate * 3));
					break;
				case 7:
					$amount = (20 * $rate) + (40 * ($rate * 2)) + (($hours - 40) * ($rate * 3));
					break;
				case 8:
					$amount = (20 * $rate) + (40 * ($rate * 2)) + (($hours - 40) * ($rate * 3));
					break;
				case 9:
					$amount = (20 * $rate) + (40 * ($rate * 2)) + (($hours - 40) * ($rate * 3));
					break;
				case 10:
					$amount = (20 * $rate) + (40 * ($rate * 2)) + (($hours - 40) * ($rate * 3));
					break;
				default:
					echo "Invalid hours enetered";
					break;					
			}
			
			if(!empty($amount))
			{
				echo "You're check amount will be: $$amount";
			}
			
			
		?>
	</body>
</html>