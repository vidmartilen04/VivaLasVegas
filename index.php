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
	<div id=head>
	<h1 id="title">VIVA LAS VEGAS</h1>
	</div>
	<div id="body">
		<br>
			<form action="game.php" method="POST">
				<div id="dForm">
				<p id="players">Players</p>	
				<label for="Player1">Player 1:</label>
				<input type="text" name="Player1" required>
				<label for="Player2">Player 2:</label required>
				<input type="text" name="Player2">
				<label for="Player3">Player 3:</label required>
				<input type="text" name="Player3">
			</div>
			<br>
			<div id="dForm">
				<p id="players">Number of dice</p>
				<label for="Player">1 dice</label>
				<input type="radio" name="Player1" value="1">
				<label for="Player">2 dice</label>
				<input type="radio" name="Player2" value="2">
				<label for="Player">3 dice</label>
				<input type="radio" name="Player3" value="3">
			</div>
			<br>
			<div id="dForm">
				<p id="players">Select number of rounds</p>
				<select name="rounds" id="roundsN">
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