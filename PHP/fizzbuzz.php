<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FizzBuzz in PHP</title>
	<link rel="stylesheet" type="text/css" href="fizzbuzz.css">
</head>
<body>
	<h1>FizzBuzz In PHP:</h1>
	<ol>
		<?php 

			for ($n = 1; $n <= 100; $n++) 
			{ 
				if ($n % 15 == 0)
					echo "<li>FizzBuzz </li>";
				else if ($n % 3 == 0)
					echo "<li>Fizz </li>";
				else if ($n % 5 == 0)
					echo "<li>Buzz </li>";
				else 
					echo "<li>----</li>";
			}

		?>
	</ol>
</body>
</html>






