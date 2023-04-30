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
        <h1>Basic Expressions</h1>
        <p> Hello!--------عسّلامة!----------Aasslema!<br>
            Bye!--------بسّلامة----------Besslema!<br>
            yes --------- أي---------------ey    <br>
            no ------------لا--------------le    <br>
          thank you------شكرا----------chokran <br>
          please -------من فضلك------men fadhlek<br>
        Excuse me-------سامحنـي-------Samahni<br>
        </p>

  </div>
  </div>
  </body>
<html>
