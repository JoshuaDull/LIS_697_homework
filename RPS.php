<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>ROCK, PAPER, SCISSORS</h1>
<form method="POST" action="RPS.php">
<input type="radio" name="choice" value="Rock" checked> Rock
<input type="radio" name="choice" value="Paper"> Paper
<input type="radio" name="choice" value="Scissors"> Scissors
<input type="submit" name="submit" value="SHOOT">
</form>
<?php
if (isset($_POST['choice'])) {
	$choice = $_POST['choice'];
	echo "You = " . $choice;
	$computer_choice = mt_rand(0,2);
	$look_up = array("Rock", "Paper", "Scissors");
	$computer = $look_up[$computer_choice];
	echo "<br>Computer = " . $computer;
	if ($choice == $computer) {
		echo "<p>It's a damn TIE!!</p>";
	} elseif ((($choice == 'Rock') && ($computer == 'Scissors')) || (($choice == 'Paper')&&($computer == 'Rock')) || (($choice == 'Scissors') && ($computer == 'Paper'))) {
		echo "<p>You fucking win!!!</p>";
	} else {
		echo "<p>You Fucking lost!!</p>";
	}
	} 
?>
</body>
</html>