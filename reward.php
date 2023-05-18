<html>
    <head>
        
        <title>Viva Las Vegas</title>
        <script src="jquery-3.6.4.min.js"></script>
        <link rel="icon" type="image/x-icon" href="img/favicon.ico">
        <link rel="stylesheet" href="stylesReward.css">
    </head>
    <body>
        <div id="third">
            <?php
            session_start();

            echo '<p>',$_SESSION['third'],'</p>';
            if($_SESSION['third'] == $_SESSION['player1']){
                echo '<p>',$_SESSION['score1'],'</p>';
            }
            else if($_SESSION['third'] == $_SESSION['player2']){
                echo '<p>',$_SESSION['score2'],'</p>';
            }
            else if($_SESSION['third'] == $_SESSION['player3']){
                echo '<p>',$_SESSION['score3'],'</p>';
            }


            
            

            

            
            ?>
            <img src="img/medal3.png">
        </div>
        <div id="first">
        <?php
            

            echo '<p>',$_SESSION['first'],'</p>';
            if($_SESSION['first'] == $_SESSION['player1']){
                echo '<p>',$_SESSION['score1'],'</p>';
            }
            else if($_SESSION['first'] == $_SESSION['player2']){
                echo '<p>',$_SESSION['score2'],'</p>';
            }
            else if($_SESSION['first'] == $_SESSION['player3']){
                echo '<p>',$_SESSION['score3'],'</p>';
            }
            ?>
            <img src="img/medal1.png">
        </div>
        <div id="second">
        <?php
            

            echo '<p>',$_SESSION['second'],'</p>';
            if($_SESSION['second'] == $_SESSION['player1']){
                echo '<p>',$_SESSION['score1'],'</p>';
            }
            else if($_SESSION['second'] == $_SESSION['player2']){
                echo '<p>',$_SESSION['score2'],'</p>';
            }
            else if($_SESSION['second'] == $_SESSION['player3']){
                echo '<p>',$_SESSION['score3'],'</p>';
            }
            ?>
            <img src="img/medal2.png">
        </div>
    </body>
</html>
