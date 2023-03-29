<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "fact";

// Создаем подключение к базе данных
$conn = mysqli_connect($servername, $username, $password, "fact");

// Проверяем подключение
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
    $result = mysqli_query($conn, "SELECT about FROM fact.fact ORDER BY RAND() LIMIT 1");
      while($row = mysqli_fetch_assoc($result)){
        $fact = $row['about'];
          echo "$fact";
}}
        ?>