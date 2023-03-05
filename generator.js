const facts = [
  { text: 'В среднем дети смеются около 400 раз в день, взрослые смеются около 15 раз в день.' , image: 'images/image1.jpeg' },
  { text: "66% людей целуются с закрытыми глазами. Остальные любят наблюдать за эмоциональной реакцией своего партнёра на поцелуй." , image: 'images/image2.jpeg'},
  { text: "40% влюблённых, которые были отвергнуты своими избранниками, впадают в клиническую депрессию.", image: 'images/image3.jpeg'},
  { text: "Около 80% пользователей Живого Журнала зарегистрированы в Америке.", image: 'images/image4.jpeg'},
  { text: "В среднем в своей жизни каждый человек целуется 20 160 минут, или 14 дней.", image: 'images/image5.jpeg'},
  { text: "Двое из пяти человек женятся на своей первой любви.", image: 'images/image6.jpeg'},
  { text: "Женщины справляются с парковкой автомобиля лучше, чем мужчины.", image: 'images/image7.jpeg'},
  { text: "90% женщин и 75% мужчин моют руки после посещения общественного туалета.", image: 'images/image8.jpeg'},
  { text: "65% людей при поцелуях наклоняют голову вправо.", image: 'images/image9.jpeg'},
  { text: "В среднем человек с 20 до 70 лет тратит около 600 часов или 25 дней, занимаясь сексом.", image: 'images/image10.jpeg'},
  { text: "Если жительница Гавайских островов кладёт цветы за правое ухо, она сообщает тем самым, что доступна. Чем больше цветов, тем сильнее её желание.", image: 'images/picture.jpg'},
];


function changeText() {
    var fact = document.getElementById("textincard");
    var image = document.querySelector(".image");
  var randomIndex = Math.floor(Math.random() * facts.length); // получить случайный индекс от 0 до длины массива - 1
  localStorage.setItem("currentFactIndex", randomIndex);
  var randomFact = facts[randomIndex]; // получить элемент по этому индексу
fact.innerHTML = randomFact.text;
image.src = randomFact.image;
};

window.onload = function () {
  var currentFactIndex = localStorage.getItem("currentFactIndex"); // Получение индекса из локального хранилища
  if (currentFactIndex !== null) {
    var fact = document.getElementById("textincard");
    var image = document.querySelector(".image");
    var currentFact = facts[currentFactIndex];
    fact.innerHTML = currentFact.text;
    image.src = currentFact.image;
  }
};

window.onload = function () {
  changeText(); // Вызов функции changeText при загрузке страницы
};