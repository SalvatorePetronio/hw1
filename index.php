
 <?php
    session_start();
    ?> 

<html>
<head>
<title> Dribble </title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mona+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="index5.css"/>
<script src="album_list.js" defer></script>
<script src="index3.js" defer></script>
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav id="nave">
   
    <div id="flex-container">
        <div class="immagine">
            <img src="Dribbble.jpg" ></div>
        <div class="flex-item">Explore</div>
        <div class="flex-item">Hire a Design</div>
        <div class="flex-item">Find job</div>
        <div class="flex-item">Blog</div>
         <?php  if(isset($_SESSION['user']))
                                  echo '<a class="flex-item" href="Preferiti.php">Preferiti </a>';
                           ?>
                            <?php  if(isset($_SESSION['user']))
                                  echo '<a class="flex-item" href="Salvati.php">Salvati</a>';
                           ?>
    </div>
        <div id="flex-container2">
             <?php  if(isset($_SESSION['user']))
                                  echo '<a class="flex-item" href="utente.php"> '.$_SESSION['user'].'</a><a href="logout.php" id="logout"> Logout</a>';
                                else echo ' <a href="login.php" id="logout"> Login</a>';
                          ?>
          
        </div>
</nav>
<header>
    <div id="presentazione">
        <h1>Discover the world's</br> top designers</h1>
        <p>Explore work from the most talented and accomplished designers</br> ready to take on your next project</p>        
    </div>
</header>
<div id="container3">
    <form id="boxricerca">
                        <input type="text" id="domandabox" value="Search for high quality photos"></span> 
                        <div id="divbox">
                            <a>Shots</a>
                            <button id="immagine1" type="submit">
                                <img src="lens.png">
                            </button>
                        </div>
                        
                    </form>
</div>

</div>

<div id="container4">
    <div id="box">trending searches</div>
    <div class="box1">landing page </div>
    <div class="box1">e-commerce  </div>
    <div class="box1">mobile app </div>
    <div class="box1">logo design </div>
    <div class="box1"> dashboard </div>
    <div class="box1">  icons </div>
</div>

<div id="container5">
        
    <div class="box3">Discover</div>
    <div class="box3">Animation</div>
    <div class="box3">Branding</div>
    <div class="box3">Illustration</div>
    <div class="box3">Mobile</div>
    <div class="box3">Print</div>
    <div class="box3">Product Design</div>
    <div class="box3">Typography</div>
    
</div>
    
<section>
    <div id="main" 
    data-message="l'unico utilizzo di 'data-*'">
    </div>
</section>
<section id="vista_album">
   

</section> 

<div id="API">
    <div>
        <form id="f">
         <button type="submit">Genera</button>
        </form>
        <div id="main2"></div>
    </div>
     <div id="main3">

    </div>
</div> 
<footer id="footer">
    
        <div class="immagine">
            <img src="Dribbble.jpg" >
        </div>
      <div id="footer2">
        <div class="flex-item">For designers </div>
        <div class="flex-item">Hire talent</div>
        <div class="flex-item">Inspiration</div>
        <div class="flex-item"> Advertising</div>
        <div class="flex-item">Blog</div>
        <div class="flex-item"> Aboutt</div>
        <div class="flex-item">Careers</div>
        <div class="flex-item">Support</div>
    </div>
        
    
</footer>

</body>

</html>