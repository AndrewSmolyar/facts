<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> 
    <link href="test.css" rel="stylesheet">
    <script src="jquery.js"></script>
</head>
<body>
<form action="/send-pic.php" method="post" id="myForm">
    <input type="text" name="about"><br><br>
    <input type="file" name="send-picture">
    <input type="submit" value="send">
</form>
<div id="result"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $('#myForm').submit(function(e){
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: 'send-pic.php',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(){
        alert('Данные успешно отправлены!');
        document.getElementById("myForm").reset();
      }
    });
  });
});
</script>
</body>
</html>