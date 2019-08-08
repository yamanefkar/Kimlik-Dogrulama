<?php 
include "kayit.php";

$site = "http://tcno.is-great.org/dorumu.php?isim=".$isim."&soyisim=".$soyad."&dogumyili=".$yil."&tcno=".$tcno;

header ("Location:$site");

 ?>