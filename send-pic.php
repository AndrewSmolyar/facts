<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$database = "fact";

// Создаем подключение к базе данных
$conn = mysqli_connect($servername, $username, $password, "fact");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } else {
    $fact_about = $_POST['about'];
    $fact_about = mysqli_real_escape_string($conn, $fact_about);
    $target_dir = "images/";
$target_file = $target_dir . basename($_FILES["send-picture"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["send-picture"]["tmp_name"]);
}
    if (move_uploaded_file($_FILES["send-picture"]["tmp_name"], $target_file)) {
        $path = "images/" . basename($_FILES["send-picture"]["name"]);
        $sql = "INSERT INTO fact.fact (picture,about) VALUES ('$path', '$fact_about')";
        mysqli_query($conn, $sql);
      }
}
?>
