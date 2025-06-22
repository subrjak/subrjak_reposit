<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petro Furniture</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
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
        </div>
    </header>
    <!--Основной блок-->
    <main class="main">
        <div class = "layouts">
            <div class="main_content">
                <section class="features">
                    <div class="features__grid">
                        <div class="feature-card">
                            <img src="./images/create-mebel.jpg" alt="Индивидуальный дизайн" class="feature-card__icon">
                            <h3 class="feature-card__heading">Индивидуальный дизайн</h3>
                            <p class="feature-card__text">
                                Настройте цвет, форму и материалы под свой интерьер.
                            </p>
                        </div>
                        <div class="feature-card">
                            <img src="./images/garantiya.png" alt="Высокое качество" class="feature-card__icon">
                            <h3 class="feature-card__heading">Высокое качество</h3>
                            <p class="feature-card__text">
                                Экологичные и долговечные материалы от ведущих поставщиков.
                            </p>
                        </div>
                        <div class="feature-card">
                            <img src="./images/dostavka.png" alt="Быстрая доставка" class="feature-card__icon">
                            <h3 class="feature-card__heading">Быстрая доставка</h3>
                            <p class="feature-card__text">
                                Сборка и доставка по всей стране за 3–5 рабочих дней.
                            </p>
                        </div>
                        <div class="feature-card">
                            <img src="./images/servise.png" alt="Гарантия и сервис" class="feature-card__icon">
                            <h3 class="feature-card__heading">Гарантия и сервис</h3>
                            <p class="feature-card__text">
                                2 года гарантии и круглосуточная поддержка клиентов.
                            </p>
                        </div>
                    </div>
                </section>
                <div class="design">
                    <img src="./images/divan_main.png" alt="" class="design_img">
                    <div class="design-text">
                        <p class="design_p">
                            Благодаря конфигуратору, который есть на нашем сайте, вы можете настроить выбранный
                            вами товар так, как пожелает ваша душа. Цвет, материал обивки, материал конструкции - всё
                            для
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

    <script defer src="{{ asset('js/reg_log.js') }}"></script>
    <script defer src="{{ asset('js/menu.js') }}"></script>
</body>

</html>
