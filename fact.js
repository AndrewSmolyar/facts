const themeSwitchers = document.querySelectorAll('.change-theme');

themeSwitchers.forEach(switcher => {
    switcher.addEventListener('click', function() {
        applyTheme(this.dataset.theme);
        localStorage.setItem('theme', this.dataset.theme)
    });
});

function applyTheme(themeName) {
    let themeUrl = `theme-${themeName}.css`;
    document.querySelector('[title="theme"]').setAttribute('href', themeUrl);
}

let activeTheme = localStorage.getItem('theme');

if(activeTheme === null) {
    applyTheme('light');
} else {
    applyTheme(activeTheme);
}

var inputFile = document.getElementById('add-file'); // получить input
var fileDiv = document.getElementById('add-file-div'); // получить див #add-file-div
var fileNameDiv = document.getElementById('file'); // получить див #file
var fileNameText = document.getElementById('file-text'); // получить текст #file-text

inputFile.onchange = function() { // добавить обработчик события 'onchange' для input
  var file = inputFile.files[0]; // получить выбранный файл
  if (file) { // если файл выбран
    fileNameText.textContent = file.name; // установить текст #file-text равным имени файла
    fileDiv.style.display = 'none'; // скрыть див #add-file-div
    fileNameDiv.style.display = 'flex'; // показать див #file
  }
};

var crossImg = document.querySelector('.cross');
crossImg.addEventListener('click', function() {
  inputFile.value = ''; // очистить значение input
  fileNameDiv.style.display = 'none'; // скрыть див #file
  fileDiv.style.display = 'flex'; // показать див #add-file-div
});

// получить все теги по классу .tag
var tags = document.querySelectorAll('.tag');
// перебрать все теги и добавить им обработчик события click
for (var i = 0; i < tags.length; i++) {
    tags[i].addEventListener('click', function() {
        // получить элемент изображения внутри тега по классу .tag-svg
        var img = this.querySelector('.tag-svg');
        // если изображение есть, то проверить его источник
        if (img) {
            // если источник равен плюсу, то заменить его на галочку
            if (img.src.endsWith('images/plus.svg')) {
                img.src = 'images/check.svg';
            } else {
                // иначе заменить его на плюс
                img.src = 'images/plus.svg';
            }
        }
    });
}
