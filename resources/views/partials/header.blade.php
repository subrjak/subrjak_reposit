@extends

<header class="header">
    <div class="header_logo">
        <img src="images/logo.png" alt="Logo">
        <p class="logo_text">Petro<br>Furniture</p>
    </div>
    <form class="header_poisk">
        <input type="text" placeholder="Название товара">
        <button id="burger-btn" type="button" class="menu" aria-label="Открыть меню">
            <img src="images/Burger menu.png" alt="Меню">
        </button>
    </form>
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
            <img src="./images/tema.svg" alt="" width="50px" height="50px">
        </button>
        <img src="./images/Karzina.png" alt="cart">
        <!--Регистрация-->
        <div id="auth-container" class="log_reg">
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
                    <input type="password" id="reg-password" placeholder="Минимальная длина 6 символов" minlength="6"
                        required>
                    <button type="submit">Регистрация</button>
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
                </div>
            </div>
        </div>
        <div class="user-profile">
            <div id="profile-menu"
                style="display: none; position: absolute; top: 50px; right: 0; background: white; border: 1px solid #ccc; padding: 10px;">
                <button id="profile-cabinet-btn">Личный кабинет</button>
                <button id="logout-btn">Выйти</button>
            </div>
        </div>
    </div>
</header>