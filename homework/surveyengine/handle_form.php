<!DOCTYPE html Public "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Question Feedback</title>
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
			//Validate Question 1
			if(!empty($_REQUEST['movie']))
			{
				$movie = $_REQUEST['movie'];
			}
			else
			{
				$movie = NULL;
				echo '<p class="error">You did not answer question 1!</p>';
			}
			//Validate Question 2
			if(!empty($_REQUEST['color']))
			{
				$color = $_REQUEST['color'];
			}
			else
			{
				$color = NULL;
				echo '<p class="error">You did not answer question 2!</p>';
			}
			//Validate Question 3
			if(!empty($_REQUEST['car']))
			{
				$car = $_REQUEST['car'];
			}
			else
			{
				$car = NULL;
				echo '<p class="error">You did not answer question 3!</p>';
			}
			//Validate Question 4
			if(!empty($_REQUEST['sport']))
			{
				$sport = $_REQUEST['sport'];
			}
			else
			{
				$sport = NULL;
				echo '<p class="error">You did not answer question 4!</p>';
			}
			if ($movie && $color && $car && $sport)
			{
				echo "<p>Thank you for answering all the questions. 1- $movie 2- $color 3- $car 4- $sport</p>\n";
			}
			else
			{
				echo '<p class="error">Please go back and fill out the form again.</p>';
			}		
		?>
	</body>
</html>