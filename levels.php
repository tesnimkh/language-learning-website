<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="mystyle.css">
    <div class = "jombotron">
    <header>
    <a class="elem1">Navbar</a>
    <a class="elem2" href="Helloworld.php">Home</a>
    <a class="elem3" href="about.php">About</a>
    <a class="elem4" href="Contact.html">Contact</a>
    <a href="logout.php">Log Out</a>
    </header>
    Glad to see you,
    <?php 
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
      echo $_SESSION['name'];}
    else{
        header("Location: Helloworld.php");
        exit();}?>
    </div>
  </head>
 
  <body>
  <div class = "jombotron"> 
  <a href="link" target="blank">
    <img class="img" src="pictures\pic1.jpg" onclick="location.href= '1.php';" style="cursor: pointer;" width=300px height=300px/></a> 
    <img class="img" src="pictures\pic2.jpg" onclick="location.href= '2.php';" style="cursor: pointer;" width=300px height=300px/></a>
    <img class="img" src="pictures\pic3.jpg" onclick="location.href= '3.php';" style="cursor: pointer;" width=300px height=300px/></a>
    <img class="img" src="pictures\pic4.jpg" onclick="location.href= '4.php';" style="cursor: pointer;" width=300px height=300px/></a>
    <img class="img" src="pictures\pic5.jpg" onclick="location.href= '5.php';" style="cursor: pointer;" width=300px height=300px/></a>
    <img class="img" src="pictures\pic6.jpg" onclick="location.href= '6.php';" style="cursor: pointer;" width=300px height=300px/></a>
    <img class="img" src="pictures\pic7.jpg" onclick="location.href= '7.php';" style="cursor: pointer;" width=300px height=300px/></a>
    <img class="img" src="pictures\pic8.jpg" onclick="location.href= '8.php';" style="cursor: pointer;" width=300px height=300px/></a>
    <img class="img" src="pictures\pic9.jpg" onclick="location.href= '9.php';" style="cursor: pointer;" width=300px height=300px/></a>
  </div>
  </body>
</html>