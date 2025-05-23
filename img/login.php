<?php
$dogruKullanici = "ilhan.dalcek@ogr.sakarya.edu.tr";
$dogruSifre = "b241210074";

if ($_POST["username"] == $dogruKullanici && $_POST["password"] == $dogruSifre) {
    $ad = explode("@", $_POST["username"])[0]; // sadece kullanıcı adını alacak
    echo "<body style='background-color:#111;color:white;font-family:sans-serif;text-align:center;margin-top:100px;'>";
    echo "<h1>Hoş geldiniz <span style='color:#0ff;'>$ad</span>, giriş başarılı!</h1>";
    echo "</body>";

   // 3 saniye bekledikten sonra anasayfaya yönlendiriliyor.
    echo "<meta http-equiv='refresh' content='3;url=index.html'>";
} else {
    // Hatalı girişte login sayfasına yönlendirecek.
    header("Location: login.html");
    exit;
}
?>
