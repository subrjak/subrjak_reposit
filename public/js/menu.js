document.addEventListener('DOMContentLoaded', function () {
    const burgerBtn = document.getElementById('burger-btn');
    const burgerMenu = document.getElementById('burger-menu');

    burgerBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      burgerMenu.classList.toggle('active');
    });
    document.addEventListener('click', function (e) {
      const isClickInsideMenu = burgerMenu.contains(e.target);
      const isClickOnButton = burgerBtn.contains(e.target);

      if (!isClickInsideMenu && !isClickOnButton) {
        burgerMenu.classList.remove('active');
      }
    });
  });

  //Переключение темы
  document.addEventListener('DOMContentLoaded', function () {
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;
    if (localStorage.getItem('theme') === 'dark') {
      body.classList.add('dark-theme');
    }
    themeToggle.addEventListener('click', function () {
      body.classList.toggle('dark-theme');
      if (body.classList.contains('dark-theme')) {
        localStorage.setItem('theme', 'dark');
      } else {
        localStorage.setItem('theme', 'light');
      }
    });
  });
