<?php
session_start();
if(!isset($_SESSION["login"])){
echo "Hatalı giriş yaptınız.";
}else{
echo "Giriş işlemi başarılıdır Hoş geldiniz B201210063 <br>";
echo "<a href=anasayfa.html>Siteye Giriş Yapmak İçin Tıklayınız</a> ";
echo "<a href=logout.php>Çıkış Yap</a>";
}
?>