<x-guest-layout>
    <div id="modal-login" class="modal show">
        <button class="close-btn" onclick="window.location='/'">&times;</button>
        <h2>Вход</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="example@gmail.com" required autofocus>

            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" placeholder="Ваш пароль" required minlength="6">

            <button type="submit">Войти</button>
        </form>

        <div class="help-link">
            <a href="{{ route('password.request') }}">Забыли пароль?</a>
        </div>
    </div>
</x-guest-layout>
