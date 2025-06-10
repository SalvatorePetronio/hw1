<?php

    session_start();
   
     if(isset($_SESSION['user'])) {
        header('Location: index.php');
        exit;
    }

    if (isset($_POST["user"]) && isset($_POST["pass"]) )
    {
       
        $conn = mysqli_connect('localhost', 'root', '', 'hw') or die(mysqli_error($conn));

        $username = mysqli_real_escape_string($conn, $_POST['user']);
      
        $query = "SELECT * FROM utente WHERE username = '".$username."'";
       
        $res = mysqli_query($conn, $query) or die(mysqli_error($conn));;
        
        if (mysqli_num_rows($res) > 0) {
           
            $entry = mysqli_fetch_assoc($res);
            if (password_verify($_POST['pass'], $entry['pass'])) {

               
                $_SESSION["user"] = $entry['username'];
                $_SESSION["pass"] = $_POST['pass'];
                header("Location: index.php");
                mysqli_free_result($res);
                mysqli_close($conn);
                exit;
            }
        }
      
        $error = "Username e/o password errati.";
    }
    else if (isset($_POST["user"]) || isset($_POST["pass"])) {
       
        $error = "Inserisci username e password.";
    }

?>

<html>
    <head>
        <link rel='stylesheet' href='login.css'>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
    </head>
    <body>
         <nav>
                    <div class="navcontainer1">
                        <img src="Dribbble.jpg"><div><a href="index.php">Home</a><a href='signup.php'>Sign up</a></div>
                    </div>
                    </div>
                </nav>
        <div id="Err">
         <?php
            if(isset($errore))
            {
                echo "<p>";
                echo "Credenziali non valide.";
                echo "</p>";
            }
            ?>
        </div>
        <main>
            <form id="logForm" method='post'>
                
                    <label>Nome utente <input type='text' name='user'></label>
                    <label>Password <input type='password' name='pass'></label>
                  <div id="but">  <button id="invia" type='submit'>Accedi</button> </div>
            </form>
        </main>
    </body>
</html>