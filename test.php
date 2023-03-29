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
    $result = mysqli_query($conn, "SELECT DISTINCT about,picture FROM fact ORDER BY RAND() LIMIT 1");
// Генерируем HTML-код для каждой пары текст-изображение
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    //$id = $row["id"];
    $text = $row["about"];
    $image = $row["picture"];
    echo "$text;";
    echo "$image";
  }
}}
?>