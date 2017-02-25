<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>CSIS 279 Homework 01</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
</head>
<body>
<div class="header">
	<div class="name">
		<h1>Shaina Read</h1>
	</div>
	
	<div class="moveRight">
		<h2>CSIS 279 | Web Database Programming | Spring 2017</h2>
		<h3>Homework 01</h3>
	</div>
</div>

<div class="main">
	<?php
		// defines dice with constant 6 sides
		define("SIDE", 6); 
		$TotalDice = 2;
		$Rolls=6;
		$DiceResults = array();
		
		// gives us the number of times to roll total
		$TotalRolls = $Rolls * $TotalDice;
		
		// increments each side of die
		$Ones = 0;
		$Twos = 0;
		$Threes = 0;
		$Fours = 0;
		$Fives = 0;
		$Sixes = 0;
			
			// roll die based on number of rolls and die
			for ($Count=0; $Count < $TotalRolls; $Count++) {
				
				// gives die result of random 1-6 and stores in an array
				$DiceResults[$Count]=rand(1,SIDE);
				//echo "$DiceResults[$Count]<br>";
				
				if ($DiceResults[$Count] == 1) {
					$Ones++;
				} else if ($DiceResults[$Count] == 2) {
					$Twos++;
				} else if ($DiceResults[$Count] == 3) {
					$Threes++;
				} else if ($DiceResults[$Count] == 4) {
					$Fours++;		
				} else if ($DiceResults[$Count] == 5) {
					$Fives++;
				} else {
					$Sixes++;
				}
					
					// stores percentages
					$onesPer = round((($Ones/$TotalRolls) * 100),2);
					$twosPer = round((($Twos/$TotalRolls) * 100),2);
					$threesPer = round((($Threes/$TotalRolls) * 100),2);
					$foursPer = round((($Fours/$TotalRolls) * 100),2);
					$fivesPer = round((($Fives/$TotalRolls) * 100),2);
					$sixesPer = round((($Sixes/$TotalRolls) * 100),2);
					
					// stores the first occurance of side rolled
					$firstOne = array_search(1,$DiceResults);
					$firstOne = $firstOne + 1;
					$secOne = array_search(2,$DiceResults);
					$secOne = $secOne + 1;
					$thirdOne = array_search(3,$DiceResults);
					$thirdOne = $thirdOne + 1;
					$fourthOne = array_search(4,$DiceResults);
					$fourthOne = $fourthOne + 1;
					$fifthOne = array_search(5,$DiceResults);
					$fifthOne = $fifthOne + 1;
					$sixthOne = array_search(6,$DiceResults);
					$sixthOne = $sixthOne + 1;
					
					// stores the last occurance of side rolled
					$makeLast = array_reverse($DiceResults); // reverses the array
					$lastOne = array_search(1,$makeLast);
					$lastOne = 12- $lastOne; // counts backwards from 12 to find last instance side rolled
					$lastTwo = array_search(2,$makeLast);
					$lastTwo = 12 - $lastTwo;
					$lastThree = array_search(3,$makeLast);
					$lastThree = 12 - $lastThree;
					$lastFour = array_search(4,$makeLast);
					$lastFour = 12 - $lastFour;
					$lastFive = array_search(5,$makeLast);
					$lastFive = 12 - $lastFive;
					$lastSix = array_search(6,$makeLast);
					$lastSix = 12 - $lastSix;

									
			}
			
			// print total rolls
			echo "<p>TOTAL ROLLS: $TotalRolls</p>";
			
			// print table
			echo "<table>";

			echo "<tr>";
			echo "<th>Die Stats</th>";
			echo "<th>Ones</th>";
			echo "<th>Twos</th>";
			echo "<th>Threes</th>";
			echo "<th>Fours</th>";
			echo "<th>Fives</th>";
			echo "<th>Sixes</th>";
			echo "</tr>";
				
			echo "<tr>";
			echo "<th>Totals</th>";
			echo "<td>".$Ones."</td>";
			echo "<td>".$Twos."</td>";
			echo "<td>".$Threes."</td>";
			echo "<td>".$Fours."</td>";
			echo "<td>".$Fives."</td>";
			echo "<td>".$Sixes."</td>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<th>First Roll</th>";
			echo "<td>".$firstOne."</td>";
			echo "<td>".$secOne."</td>";
			echo "<td>".$thirdOne."</td>";
			echo "<td>".$fourthOne."</td>";
			echo "<td>".$fifthOne."</td>";
			echo "<td>".$sixthOne."</td>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<th>Last Roll</th>";
			echo "<td>".$lastOne."</td>";
			echo "<td>".$lastTwo."</td>";
			echo "<td>".$lastThree."</td>";
			echo "<td>".$lastFour."</td>";
			echo "<td>".$lastFive."</td>";
			echo "<td>".$lastSix."</td>";
			echo "</tr>";
			
			
			echo "<tr>";
			echo "<th>Percentage</th>";
			echo "<td>".$onesPer."% </td>";
			echo "<td>".$twosPer."% </td>";
			echo "<td>".$threesPer."% </td>";
			echo "<td>".$foursPer."% </td>";
			echo "<td>".$fivesPer."% </td>";
			echo "<td>".$sixesPer."% </td>";
			echo "</tr>";
			
			echo "</table>";
	?>
</div>

<div class="footer">
	
</div>

</body>
</html>