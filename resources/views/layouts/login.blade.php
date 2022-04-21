<form method="POST" action="{{ route('login') }}" class="login">
    <h1>Iniciar Sesión</h1>
    @csrf

    <label for="email">{{ __('Email') }}</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    <br>
    <label for="password">{{ __('Contraseña') }}</label>
    <input id="password" type="password" name="password" required autocomplete="current-password">
        @error('password')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div>
            <div>
                <button type="submit" class="btn">
                    {{ __('Iniciar Sesión') }}
                </button>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('He olvidado la contraseña') }}
                    </a>
                @endif
            </div>
        </div>
</form>