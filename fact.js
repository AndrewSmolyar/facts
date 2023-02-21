const themeSwitchers = document.querySelectorAll('.change-theme');

themeSwitchers.forEach(switcher => {
    switcher.addEventListener('click', function() {
        applyTheme(this.dataset.theme);
    });
});

function applyTheme(themeName) {
    let themeUrl = `theme-${themeName}.css`;
    document.querySelector('[title="theme"]').setAttribute('href', themeUrl);
}