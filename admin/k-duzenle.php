<?php

session_start();

$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = '';
$DB_NAME = "users";
 
$con = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if ( mysqli_connect_errno() ) {
	exit("Bağlantı hatası.");
}
$username = $_SESSION['username']; 
$veritabani = new PDO("mysql:dbname=users;host=localhost","root","");
$sorgu4 = $veritabani->prepare("SELECT id FROM user WHERE username='$username'");
$sorgu4->bindParam(':id', $_SESSION['id']);
$sorgu4->execute();
$sonuc = $sorgu4->fetch(PDO::FETCH_ASSOC);

$id = $sonuc["id"]; 
$usernamed = $_POST['username-d'];  

      
$sql = "UPDATE user SET username='$usernamed' WHERE id = '$id'";
if (mysqli_query($con, $sql)) {
    header("Location: /admin/basarili.php");
} else {
    header("Location: /admin/basarisiz.php");
}
mysqli_close($con);

session_destroy();
 
header("Location: /admin/login.php");
          
?>  