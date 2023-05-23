<?php
require_once "./config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- panggil css external -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $namasys; ?></title>
</head>

<body>
  <div>
    <br>
    <h1><?= $$kedai; ?></h1>
    <h3><?= $motto; ?></h3>
    <h5><?= $lain2; ?></h5>
  </div>
  <?php include 'utility.php' ?>
</body>

</html>