<?php 
	
?>
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
		<?php 
				session_start();

				 $_SESSION['player1'] = $_POST["Player1"];
				 $_SESSION['player2'] = $_POST["Player2"];
				 $_SESSION['player3'] = $_POST["Player3"];
				 $Rounds = $_POST["rounds"];
				 if (isset($_POST["rounds"])) {
    				$rounds = $_POST["rounds"];
				 }
				 if (isset($_POST["Dice"])) {
    				$numDice = $_POST["Dice"];
				 }
				 $a=$_POST['1'];

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
		<br>
		<div id="title">
			<p id="titleR">ROUND <?php echo $a.'/'.$Rounds; ?></p>
		</div>
		<div id="players">
		<div id="player1">
			<?php 
				if ($numDice == 1) {
					echo '<p>'.$_SESSION['player1'].'</p>
					<div class="diceAnimation">
					<img src="img/dicee.gif">
					</div>
					<div class="diceResult" style="display: none;">
					<img src="img/d'.$a.'.png">
					</div>';
					echo '<br><div class="totalLine"><div class="total">Total:</div><div class="totalResult" style="display: none;">'.($totalP1-$c-$b).'</div></div>';
				}
				if ($numDice == 2) {
					echo '<p>'.$_SESSION['player1'].'</p>
					<div class="diceAnimation">
					<img src="img/dicee.gif">
					<img src="img/dicee.gif">

					</div>
					<div class="diceResult" style="display: none;">
					<img src="img/d'.$a.'.png">
					<img src="img/d'.$b.'.png">
					</div>';
					echo '<br><div class="totalLine"><div class="total">Total:</div><div class="totalResult" style="display: none;">'.($totalP1-$c).'</div></div>';
				}
				if ($numDice == 3) {
					echo '<p>'.$_SESSION['player1'].'</p>
					<div class="diceAnimation">
					<img src="img/dicee.gif">
					<img src="img/dicee.gif">
					<img src="img/dicee.gif">
					</div>
					<div class="diceResult" style="display: none;">
					<img src="img/d'.$a.'.png">
					<img src="img/d'.$b.'.png">
					<img src="img/d'.$c.'.png">
					</div>';
					echo '<br><div class="totalLine"><div class="total">Total:</div><div class="totalResult" style="display: none;">'.$totalP1.'</div></div>';
				}

			
			?>			

		</div>
		<div id="player2">
			<?php 
			if ($numDice == 1) {
					echo '<p>'.$_SESSION['player2'].'</p>
					<div class="diceAnimation">
					<img src="img/dicee.gif">
					</div>
					<div class="diceResult" style="display: none;">
					<img src="img/d'.$d.'.png">
					</div>';
					echo '<br><div class="totalLine"><div class="total">Total:</div><div class="totalResult" style="display: none;">'.($totalP2-$f-$e).'</div></div>';
				}
				if ($numDice == 2) {
					echo '<p>'.$_SESSION['player2'].'</p>
					<div class="diceAnimation">
					<img src="img/dicee.gif">
					<img src="img/dicee.gif">

					</div>
					<div class="diceResult" style="display: none;">
					<img src="img/d'.$d.'.png">
					<img src="img/d'.$e.'.png">
					</div>';
					echo '<br><div class="totalLine"><div class="total">Total:</div><div class="totalResult" style="display: none;">'.($totalP2-$f).'</div></div>';
				}
				if ($numDice == 3) {
					echo '<p>'.$_SESSION['player2'].'</p>
					<div class="diceAnimation">
					<img src="img/dicee.gif">
					<img src="img/dicee.gif">
					<img src="img/dicee.gif">
					</div>
					<div class="diceResult" style="display: none;">
					<img src="img/d'.$d.'.png">
					<img src="img/d'.$e.'.png">
					<img src="img/d'.$f.'.png">
					</div>';
					echo '<br><div class="totalLine"><div class="total">Total:</div><div class="totalResult" style="display: none;">'.$totalP2.'</div></div>';
				}

			?>			
			
		</div>
		<div id="player3">
			<?php 
			if ($numDice == 1) {
					echo '<p>'.$_SESSION['player3'].'</p>
					<div class="diceAnimation">
					<img src="img/dicee.gif">
					</div>
					<div class="diceResult" style="display: none;">
					<img src="img/d'.$g.'.png">
					</div>';
					echo '<br><div class="totalLine"><div class="total">Total:</div><div class="totalResult" style="display: none;">'.($totalP3-$i-$h).'</div></div>';
				}
				if ($numDice == 2) {
					echo '<p>'.$_SESSION['player3'].'</p>
					<div class="diceAnimation">
					<img src="img/dicee.gif">
					<img src="img/dicee.gif">

					</div>
					<div class="diceResult" style="display: none;">
					<img src="img/d'.$g.'.png">
					<img src="img/d'.$h.'.png">
					</div>';

					echo '<br><div class="totalLine"><div class="total">Total:</div><div class="totalResult" style="display: none;">'.($totalP3-$i).'</div></div>';
				}
				if ($numDice == 3) {
					echo '<p>'.$_SESSION['player3'].'</p>
					<div class="diceAnimation">
					<img src="img/dicee.gif">
					<img src="img/dicee.gif">
					<img src="img/dicee.gif">
					</div>
					<div class="diceResult" style="display: none;">
					<img src="img/d'.$g.'.png">
					<img src="img/d'.$h.'.png">
					<img src="img/d'.$i.'.png">
					</div>';

					echo '<br><div class="totalLine"><div class="total">Total:</div><div class="totalResult" style="display: none;">'.$totalP3.'</div></div>';
				}

			?>		
	</div>
	<div id="batton">
		<form action="game.php">
			<center><input id="buttonR" type="submit" name="Reroll" value="Reroll" onclick="" style="border-radius: 5px;"></center>
		</form>
	</div>
	</div>
	<script>
			jQuery(document).ready(function (){ setTimeout("jQuery('.diceAnimation').hide();",1500 );});
			jQuery(document).ready(function (){ setTimeout("jQuery('.diceResult').show();",1500 );});
			jQuery(document).ready(function (){ setTimeout("jQuery('.totalResult').show();",1500 );});

		</script>
</body>
</html>