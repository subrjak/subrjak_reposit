<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petro Furniture</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/main.css">
    <script defer src="js/menu.js"></script>
</head>

<body>
    <header class="header">
        <div class="header_logo">
            <img src="images/logo.png" alt="Logo">
            <p class="logo_text">Petro<br>Furniture</p>
        </div>
        <div class="header_poisk">
            <button id="burger-btn" class="menu" aria-label="Открыть меню">
                <img src="images/Burger menu.png" alt="">
            </button>
            <input type="text" placeholder="Название товара">
        </div>
        <!--Меню категорий-->
        <nav id="burger-menu" class="burger-menu">
            <div class="menu-grid">
                <div class="menu-item active">
                    <img src="./images/Korpus.svg" alt="Корпусная мебель">
                    <p>Корпусная мебель</p>
                </div>
                <div class="menu-item">
                    <img src="./images/Spal.svg" alt="Мебель для спальни">
                    <p>Мебель для спальни</p>
                </div>
                <div class="menu-item">
                    <img src="./images/Kitchen.svg" alt="Мебель для кухни">
                    <p>Мебель для кухни</p>
                </div>
                <div class="menu-item">
                    <img src="./images/Gostin.svg" alt="Гостиные">
                    <p>Гостиные</p>
                </div>
                <div class="menu-item">
                    <img src="./images/Office.svg" alt="Офисная мебель">
                    <p>Офисная мебель</p>
                </div>
                <div class="menu-item">
                    <img src="./images/Prihozh.svg" alt="Мебель для прихожей">
                    <p>Мебель для прихожей</p>
                </div>
            </div>
        </nav>
        <!--Переключение темы-->
        <div class="header_action">
            <button id="theme-toggle" aria-label="Переключить тему" class="theme-toggle">
                <img src="./images/tema.png" alt="" width="50px" height="50px">
            </button>
            <img src="./images/Karzina.png" alt="cart">
            <!--Регистрация-->
            <div class="log_reg">
                <button id="btn-register">Регистрация</button>
                <button id="btn-login">Вход</button>
            </div>
            <div id="overlay" class="modal-overlay">
                <div id="modal-register" class="modal">
                    <button class="close-btn" data-close>&times;</button>
                    <h2>Регистрация</h2>
                    <form id="form-register">
                        <label for="reg-email">Email</label>
                        <input type="email" id="reg-email" placeholder="example@gmail.com" required>
                        <label for="reg-password">Пароль</label>
                        <input type="password" id="reg-password" placeholder="Минимальная длина 6 символов"
                            minlength="6" required>
                        <button type="submit">Регистрация</button>
                        <p>Уже есть аккаунт? <a href="#" id="toLogin">Войти</a></p>
                    </form>
                </div>
                <!--Вход-->
                <div id="modal-login" class="modal">
                    <button class="close-btn" data-close>&times;</button>
                    <h2>Вход</h2>
                    <form id="form-login">
                        <label for="login-email">Email</label>
                        <input type="email" id="login-email" placeholder="example@gmail.com" required>
                        <label for="login-password">Пароль</label>
                        <input type="password" id="login-password" placeholder="Ваш пароль" minlength="6" required>
                        <button type="submit">Войти</button>
                    </form>
                    <div class="help-link">
                        <a href="#">Забыли пароль?</a>
                        <p>Нет аккаунта? <a href="#" id="toRegister">Зарегистрироваться</a></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Основной блок-->
    <main class="main">
        <div class="text_content">
            <div class="welcome_text">Добро пожаловать на сайт нашего салона</div>
            <div class="company">Petro Furniture</div>
        </div>
        <div class="main_content">
            <div class="info">
                <img src="./images/Rassrochka.svg" alt="">
                <img src="./images/Sertifikat.png" alt="">
                <p class="info_text">Разрабатывай свой<br>
                    собственный<br>
                    дизайн</p>
                <img src="./images/Design.png" alt="">
                <p class="comand_work_text">Работа с лучшими<br>
                    мебельными<br>
                    фирмами</p>
                <img src="./images/Comand_work.png" alt="">
            </div>
            <div class="design">
                <img src="./images/divan_main.png" alt="" class="design_img">
                <div class="design-text">
                    <p class="design_p">
                        Благодаря конфигуратору, который есть на нашем сайте, вы можете настроить выбранный
                        вами товар так, как пожелает ваша душа. Цвет, материал обивки, материал конструкции - всё для
                        вашего
                        комфорта!
                    </p>
                    <div class="swatch-container">
                        <div class="swatch" style="background-color: #C2B280;" title="Бежевый"></div>
                        <div class="swatch" style="background-color: #8B5E3C;" title="Коричневый"></div>
                        <div class="swatch" style="background-color: #B22222;" title="Красный"></div>
                        <div class="swatch" style="background-color: #2E8B57;" title="Зелёный"></div>
                    </div>
                </div>
                <div class="comments">
                    <div class="Olga">
                        <div>
                            <div>⭐⭐⭐⭐☆</div>
                            <strong>Шикарный диван</strong><br>
                            Очень мягкий, удобный, ребёнку понравился<br>
                            <em>Ольга</em>
                        </div>
                    </div>
                    <div class="Ekat">
                        <div>
                            <div>⭐⭐⭐⭐⭐</div>
                            <strong>Качество супер</strong><br>
                            Понравился материал, приятный на ощупь<br>
                            <em>Екатерина</em>
                        </div>
                    </div>
                    <div class="Mariya">
                        <div>
                            <div>⭐⭐⭐☆☆</div>
                            <strong>Товар хороший, но доставка долгая</strong><br>
                            Понравился сам диван, но ехал долго<br>
                            <em>Мария</em>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="js/reg_log.js"></script>

</html>