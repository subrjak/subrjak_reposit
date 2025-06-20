<x-guest-layout>
    <div id="modal-register" class="modal show">
        <button class="close-btn" onclick="window.location='/'">&times;</button>
        <h2>Регистрация</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="example@gmail.com" required autofocus>

            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" placeholder="Минимальная длина 6 символов"
                   required minlength="6">

            <label for="password_confirmation">Повторите пароль</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            <button type="submit">Регистрация</button>
        </form>
    </div>
</x-guest-layout>
