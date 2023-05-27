<?php
// panggil file header
include_once "./header.php";

?>

<html>
<!-- menu sign up -->
<div id="menu"><?php include "./menu1.php" ?></div>
<!-- papar isi -->
<div id="isi">

  <head>
    <center>
      <h3>SELAMAT DATANG KE <?= $kedai; ?></h3>
      <marquee behavior="alternate">Sila login untuk memilih barangan idaman anda</marquee>
    </center>
  </head>
  <?php include "welcome.php" ?>
</div>

</html>