<?php
$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];
$cinsiyet = $_POST['cinsiyet'];
$il = $_POST['il'];
$mesaj = $_POST['mesaj'];
$abone = isset($_POST['abone']) ? "Evet" : "Hayır";

echo "<body style='background-color:#121417; color:#e0e0e0; font-family:sans-serif; padding:40px'>";
echo "<h2>İletişim Formu Verileri</h2>";
echo "<p><strong>Ad:</strong> $ad</p>";
echo "<p><strong>Soyad:</strong> $soyad</p>";
echo "<p><strong>Telefon:</strong> $telefon</p>";
echo "<p><strong>E-Posta:</strong> $email</p>";
echo "<p><strong>Cinsiyet:</strong> $cinsiyet</p>";
echo "<p><strong>İl:</strong> $il</p>";
echo "<p><strong>Mesaj:</strong><br>$mesaj</p>";
echo "<p><strong>Abonelik:</strong> $abone</p>";
echo "<a href='iletisim.html' style='color:#66b2ff;'>Geri dön</a>";
echo "</body>";
?>
