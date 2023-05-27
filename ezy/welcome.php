<html>

<body>
  <h3>ISTIMEWA UNTUK ANDA</h3>
  <?php
  require_once "./config.php";
  $query_rawak = "SELECT * FROM produk ORDER BY rand() LIMIT 3";
  $papar_query_rawak = mysqli_query($con, $query_rawak);
  if (mysqli_num_rows($papar_query_rawak) > 0) {
    foreach ($papar_query_rawak as $senarai_produk) {
  ?>
      <!-- papar produk -->
      <div class="card">
        <div class="gambar">
          <img src="./gambar/<?php echo $senarai_produk['gambar'] ?>" width="auto" height="120px">
        </div>
        <h4>
          <?php echo $senarai_produk['namaProduk'] ?>
        </h4>
      </div>
  <?php
    }
  } else {
    echo "Tiada produk";
  }
  ?>


</body>

</html>