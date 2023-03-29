<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8"> <!-- ВОТ КОММЕНТАРИЙ!!! -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ПО ФАКТУ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> 
    <link href="fact.css" rel="stylesheet">
    <link rel="stylesheet" title="theme" href="#">
    <link rel=“stylesheet” href=“CustomLinkColor.css”>
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
            var responseImage = document.getElementsByClassName('image')[0];
            var elements = document.getElementsByClassName('about-fact-text')[0];
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    var response = this.responseText.split(";");
                        console.log(response);
                    var text = response[0];
                    var image = response[1];
                        console.log(text);
                        console.log(image);
                    elements.innerHTML = text;
                    responseImage.src = image;
                    }
            };
            xhttp.open('GET', 'test.php', true);
            xhttp.send();
        }
    </script>
    <div class="background-white"></div>
    <div class="background"></div>
    <div class="theme">
        <img class="theme-light change-theme" src="images/light.svg" data-theme="light">
        <img class="change-theme" src="images/dark.svg" data="images/dark.scg" data-theme="dark">
    </div>
    <div class="more">
        <div class="more-text">
            больше
            <img class="arrow-more" src="images/arrow-more.svg">
        </div>
        <div class="links-under-more">
            <div class="setup-text"><a class="liked-text" href="fact-liked.html">понравилось</a></div>
            <div class="setup-text"><a class="main-text">главная</a></div>
            <div class="setup-text"><a class="new-fact" href="new-fact.html">свой факт</a></div>
        </div>
    </div>
    <div class="main-phrase">
        <h1>ПО ФАКТУ</h1>
        <h3>просто интересные факты</h3>
    </div>
    <div class="start-button" class="start-button">
        <a href="#card" class="lets-go">ЛЕТС ГОУ</a>
    </div>
    <p><a name="card" class="yacor"></a></p>
    <div class="info-card">
        <div class="card-for-image">
        <img class="image" src="<?php echo "$image"; ?>" alt="оу... тут была красивая картинка">
        </div>
        <div class="card-for-text">
            <hr class="line line-up">
            <hr class="line line-down">
            <div class="text-block"> 
            <p class="about-fact-text"><?php echo "$text"; ?></p><br>
            </div>
        </div>        
    </div>
    <div class="buttons-under-card">
        <div class="button-option">
            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <div class="tablo">
                <div class="not-right">Это неверный факт</div>
                <div class="middle"></div>
                <div class="proof">Мне нужны пруфы</div>
            </div>
        </div>
        <div class="button-unlike">
            <p class="text-on-button">НЕ ИНТЕРЕСНО</p>
        </div>
        <div class="">
            <button class="button-more" name="change" onclick="myFunction()"><p class="text-on-button-more">ЕЩЕ</p></button>
            
            
            
        </div>
        <div class="button-like">
            <p class="text-on-button">ИНТЕРЕСНО</p>
        </div>
    </div>
    <a class="telegram-link" target="_blank" href="https://t.me/closeptember">T.ME/CLOSEPTEMBER</a>
    <script src="fact.js"></script>
    <script src="generator.js"></script>
</body>

</html>