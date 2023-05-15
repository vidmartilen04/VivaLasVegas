<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
	<link rel="icon" type="image/ico" href="img/favicon.ico">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="styleGame.css">
	<title>Viva Las Vegas</title>
</head>
<body>
	<div id=head>
	<h1 id="title">VIVA LAS VEGAS</h1>
	</div>
	<div id="body">
		<br>
		<div id="title">
			<p id="titleR">ROUND 1/X</p>
		</div>
		<div id="players">
		<div id="player1">
			<?php 
				$rounds = $_POST['roundsN'];

				//Player 1
				$a = rand(1,6);
				$b = rand(1,6);
				$c = rand(1,6);

				//Player 2
				$d = rand(1,6);
				$e = rand(1,6);
				$f = rand(1,6);

				//Player 3
				$g = rand(1,6);
				$h = rand(1,6);
				$i = rand(1,6);

			 	$totalP1=$totalP1+$a+$b+$c;
			 	$totalP2=$totalP2+$d+$e+$f;
			 	$totalP3=$totalP3+$g+$h+$i;

				

			?>
			<p>Player 1</p>
			<div class="diceAnimation">
			<img src="img/dicee.gif">
			<img src="img/dicee.gif">
			<img src="img/dicee.gif">
			</div>

			<div class="diceResult" style="display: none;">
				<img src="img/d<?php echo $a;?>.png">
				<img src="img/d<?php echo $b;?>.png">
				<img src="img/d<?php echo $c;?>.png">
			</div>
			

			<p class="total">Total: <?php echo $totalP1; ?></p>
			

		</div>
		<div id="player2">
			<p>Player 2</p>
			<div class="diceAnimation">
			<img src="img/dicee.gif">
			<img src="img/dicee.gif">
			<img src="img/dicee.gif">
			</div>

			<div class="diceResult" style="display: none;">
				<img src="img/d<?php echo $d;?>.png">
				<img src="img/d<?php echo $e;?>.png">
				<img src="img/d<?php echo $f;?>.png">
			</div>
		

			<p class="total">Total: <?php echo $totalP2; ?></p>
			
		</div>
		<div id="player3">
			<p>Player 3</p>
			<div class="diceAnimation">
			<img src="img/dicee.gif">
			<img src="img/dicee.gif">
			<img src="img/dicee.gif">
			</div>

			<div class="diceResult" style="display: none;">
				<img src="img/d<?php echo $g;?>.png">
				<img src="img/d<?php echo $h;?>.png">
				<img src="img/d<?php echo $i;?>.png">
			</div>
			

			<p class="total">Total: <?php echo $totalP3; ?></p>
			
		</div>
	</div>
	<div id="batton">
		<form action="game.php">
			<center><input id="buttonR" type="submit" name="Confirm Players" value="Reroll"></center>
		</form>
	</div>
	</div>
	<script>
			jQuery(document).ready(function (){ setTimeout("jQuery('.diceAnimation').hide();",1500 );});
			jQuery(document).ready(function (){ setTimeout("jQuery('.diceResult').show();",1500 );});
			jQuery(document).ready(function (){ setTimeout("jQuery('.total').show();",1500 );});

		</script>
</body>
</html>