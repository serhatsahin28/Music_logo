<?php 



$baglanti = new mysqli("localhost", "root", "", "bootstrap");

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}









?>