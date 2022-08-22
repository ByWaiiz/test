<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/index.css">
    <title>Caht Sapna</title>
</head>
<body>  
    <div class="main">
        <div class="nav">
            <ul>
                <?php
                    ob_start();session_start();
                    if(!isset($_SESSION['id'])){
                ?>
                    <li><a href="login.php">Login</a></li>
                <?php
                    }
                ?>
                <li><a href="chat.php">Global Chat</a></li>

                <?php
                    if(isset($_SESSION['id'])){
                ?>
                    <li><a href='<?php echo 'profil.php?username='.$_SESSION['username'];?>'>Profil</a></li>
                    <li><a href="">Odjavi se</a></li>
                <?php
                    }
                ?>
            </ul>
        <div class="footer">
            <p>Footer</p>
        </div>
    </div>
</body>
</html>