<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/ico" href="img/favicon.ico">
	<link rel="stylesheet" href="style.css">
	<script src="sweetalert2.min.js"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">
	<title>Viva Las Vegas</title>
</head>
<body>
	<?php 
		session_start();

		$_SESSION["rounds"] = $_POST["rounds"];
	 ?>
	<div id=head>
	<h1 id="title">VIVA LAS VEGAS</h1>
	</div>
	<div id="body">
		<br>
			<form action="game.php" method="POST">
				<div id="dForm">
				<p id="players">Players</p>	
				<label for="Player1">Player 1:</label>
				<input id="p1" type="text" name="Player1" required>
				<label for="Player2">Player 2:</label required>
				<input id="p2" type="text" name="Player2">
				<label for="Player3">Player 3:</label required>
				<input id="p3" type="text" name="Player3">
			</div>
			<br>
			<div id="dForm">
				<p id="players">Number of dice</p>
				<label for="Dice">1 dice</label>
				<input type="radio" name="Dice" value="1">
				<label for="Dice">2 dice</label>
				<input type="radio" name="Dice" value="2">
				<label for="Dice">3 dice</label>
				<input type="radio" name="Dice" value="3">
			</div>
			<br>
			<div id="dForm">
				<p id="players">Select number of rounds</p>
				<select name="rounds" id="rounds">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
			</div>
			<br>
			<center><input id="button" type="submit" name="Confirm Players" value="Let's GAMBLE"></center>
			</form>
	</div>
</body>
</html>
<?php 


?>