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
  <iframe width="420" height="345" src="https://www.youtube.com/embed/xVg4EtbGqus"></iframe>
  <p>
  Watch Tunisian Arabic videos as it helps with getting familiar with the language
  <a href="https://www.youtube.com/watch?v=xVg4EtbGqus" target="_blank">x</a>.
  </p>
  </div>
  </body>
<html>