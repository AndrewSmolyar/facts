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

// про "добавить картинку"

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

