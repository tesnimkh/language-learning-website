<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome</title>
  <link rel="stylesheet" href="mystyle.css">
  <?php
  include 'connect.php';
  ?>
</head>

<div class="jombotron">
  <header>
    <a class="elem1" href="Helloworld.php">Navbar</a>
    <a class="elem2" href="Helloworld.php">Home</a>
    <a class="elem3" href="about.php">About</a>
    <a class="elem4" href="Contact.html">Contact</a>
  </header>
  <div class = "biggerDiv">
    <div class="login">
      <div class="text">
        <h1>Welcome Home</h1>
        <p>  A free, fun, easy way to learn Derja: Tunisian dialect.<br><br>Join our platform and learn how to speak like the locals !<br><br></p>

      </div>
      <button class="button1" onClick="popup(this, 'notes','signup.php')">Get started</button>
      <button class="button2" onClick="popup(this, 'notes','loginpopup.php')">I already have an account</button>
    </div>
    <SCRIPT TYPE="text/javascript">
      function popup(mylink, windowname, href){
        window.open(href, windowname, 'width=400,height=400');
      }
    </SCRIPT>
    <div>
      <img src="pictures\khamsa.png">
    </div>
    </div>
</div>

<body>
  <div class="contenue1">
      <div class="contains">
        <img src="pictures\original.jpg">
        <div class="overlay">
            <div class="textov">Sidi Bou Said, Tunis</div>
        </div>
    </div>
      <div>
        <h1>Derja</h1>
        <p>As part of a dialect continuum, Tunisian merges into Algerian Arabic and Libyan Arabic at the borders of the country. Tunisian Arabic's morphology, syntax, pronunciation, and vocabulary are considerably different from Modern Standard Arabic or Classical Arabic. Like other Maghrebi dialects, it has a vocabulary that is mostly Arabic with a significant Berber, Latin and possibly Neo-Punic substratum. However, Tunisian has also many loanwords from French, Turkish, Italian and the languages of Spain.</p>
      </div>
  </div>
  <div class="contenue2">
      <div>
        <h1>Derja</h1>
        <p>Tunisian Arabic is mostly intelligible to speakers of other Maghrebi dialects but is hard to understand or is unintelligible for speakers of Middle Eastern Arabic. Multilingualism within Tunisia and in the Tunisian diaspora makes it common for Tunisians to code-switch, mixing Tunisian with French, English, Standard Arabic or other languages in daily speech.</p>
      </div>
      <div class="contains">
        <img src="pictures\original_5.jpg">
        <div class="overlay">
            <div class="textov">Matmata, Gabes</div>
        </div>
      </div>
  </div>
</body>
<footer>
  <p>Tasnim Khlif - G8</p>
  <img src="pictures\college.png ">

</footer>
</html>