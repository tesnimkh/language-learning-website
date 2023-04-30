<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome</title>
  <link rel="stylesheet" href="mystyle.css">
</head>

<div class="jombotron">
  <header>
    <a class="elem1" href="Helloworld.php">Navbar</a>
    <a class="elem2" href="Helloworld.php">Home</a>
    <a class="elem3" href="about.php">About</a>
    <a class="elem4" href="Contact.html">Contact</a>
    <a href="logout.php">Log Out</a>
  </header>
  <?php 
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
      echo $_SESSION['name'];}
    else{
        header("Location: Helloworld.php");
        exit();}?>
</div>
<body>
  <div class = "jombotron">
  <div class="text">
    <h1>Numbers</h1>
      <p> One: واحد/wahed<br>
          Two: أثنين/thnin<br>
          Three: تلأثه/thlatha<br>
          Four: أربعة/arba<br>
          Five: خمسة/khamsa<br>
          Six:  ستّة/sitta<br>
          Seven: سبعة/sabaa<br>
          Eight: ثمنسة/thmania<br>
          Nine: تسعة/tesaa<br>
          Ten: عشرة/achra<br>
      </p>
  </div>
  </div>
  
  </div>
  </body>
<html>