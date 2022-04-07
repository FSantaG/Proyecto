<form method="POST" action="{{ route('login') }}" class="login">
    <h1>Login</h1>
    @csrf

    <label for="email">{{ __('Email Address') }}</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    <br>
    <label for="password">{{ __('Password') }}</label>
    <input id="password" type="password" name="password" required autocomplete="current-password">
        @error('password')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div>
            <div>
                <button type="submit" class="btn">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
</form>