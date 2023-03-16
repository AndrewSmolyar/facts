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
// Получаем запись HTML-формы
$fact_name = $_POST['idfact'];

// Экранируем специальные символы
$fact_name = mysqli_real_escape_string($conn, $fact_name);

// Формируем SQL-запрос для вставки записи в таблицу facts
$sql = "INSERT INTO fact.fact (idfact) VALUES ('$fact_name')";

// Выполняем SQL-запрос
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
// Закрываем подключение
mysqli_close($conn);
?>