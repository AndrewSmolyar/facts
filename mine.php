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
<?php
ob_start();
include "test.php";
ob_end_clean();
?>
<script>
        function myFunction() {
            var responseImage = document.getElementsByClassName('pic')[0];
            var elements = document.getElementsByClassName('about-fact-text')[0];
            var idfact = document.getElementsByClassName('id')[0];
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
        var response = this.responseText.split(" | ");
        console.log(response);
        var id = response [0]
        var text = response[1];
        var image = response[2];
        console.log(id);
        console.log(text);
        console.log(image);
        idfact.innerHTML = id;
        elements.innerHTML = text;
        responseImage.src = image;
    }
            };
            xhttp.open('GET', 'test.php', true);
            xhttp.send();
        }
    </script>
<button class="change" name="change" onclick="myFunction()">change</button>
    <p class="id"><?php echo "$id"; ?></p><br>
    <p class="about-fact-text"><?php echo "$text"; ?></p><br>
    
    <img class="pic" src="<?php echo "$image"; ?>" alt="My Image">
</body>
</html>