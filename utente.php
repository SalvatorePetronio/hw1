<?php

    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location: login.php");
        exit;
    }
    
        
        $conn = mysqli_connect('localhost', 'root', '', 'hw') or die(mysqli_error($conn));
        $user = mysqli_real_escape_string($conn, $_SESSION['user']);
        $query = "SELECT * FROM utente WHERE username = '$user'";
        $res = mysqli_query($conn, $query);
        $userinfo = mysqli_fetch_assoc($res);   

?>

<html>
    <head>
        <link rel='stylesheet' href='utentt.css'>
        <script src='utenti.js' defer></script>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
   
    </head>
    <body>
                 <nav>
                    <div class="navcontainer1">
                        <img src="Dribbble.jpg"><div><span id="nome"><?php echo $_SESSION['user']?></span><a href='index.php'>Home</a></div>
                    </div>
                    </div>
                </nav> 
                <div id="info">
                <h1>Nome utente: <?php echo $_SESSION['user']?></h1>
               
             
                <label >Password: <input type="password" <?php echo "value=".$_SESSION['pass'] ?>></label>

             
                </div>
        <img id="sfondo" src="Sfondo.jpg">
    </body>
</html>