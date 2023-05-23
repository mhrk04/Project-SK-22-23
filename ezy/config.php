<?php
// connect to database

$con = mysqli_connect("localhost", "root", "", "pilihan");

// bila connect database fail

if (mysqli_connect_errno()) {
  echo "Pangkalan data tidak terhubung!: " . mysqli_connect_error();
}

// tetapan sistem

$namasys = "SISTEM KEDAI KOMPUTER ZIQ";
$kedai = "KEDAI KOMPUTER ZIQ";
$motto = "SYURGA KOMPUTER ANDA";
$lain2 = "PUCHONG, SELANGOR";
