// Пример: плавное прокручивание к якорям
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
  
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
  
  // Пример: отображение текущего года в подвале
  document.getElementById('currentYear').innerText = new Date().getFullYear();
  
  // Пример: валидация формы (простейшая)
  document.getElementById('myForm').addEventListener('submit', function(event) {
    var username = document.getElementById('username').value;
    if (username === "") {
      alert("Имя пользователя не может быть пустым!");
      event.preventDefault(); // Предотвратить отправку формы
    }
  });
  
  //Более простой пример динамического приветствия
  document.addEventListener('DOMContentLoaded', function() {
      alert('Приветствую тебя на нашем сайте!');
  });