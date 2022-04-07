<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')
    </head>
    <body class="antialiased">
        @include('layouts.navbar')

        <form style="width:20%" method="POST" action="#" enctype="multipart/form-data" class="login">
            @csrf
            @method('PUT')
            <h1>Edit</h1>

            <div class="image-upload">
                <label for="file-input">
                    <img class="avatar-big" src="img/img_avatar.png" alt="username">
                    <i class="fas fa-edit"></i>
                </label>
                <input id="file-input" name="profilePhoto" type="file" accept="image/*" />
            </div>

            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="name" class="@error('name') is-invalid @enderror" name="name" value="" required autocomplete="name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <br>
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <br>
            <label for="description">{{ __('Description') }}</label>
            <textarea id="description" type="text" class="@error('description') is-invalid @enderror" name="description" value="" autocomplete="description"></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <br>
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" readonly class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Submit changes
                        </button>
                    </div>
                </div>
            </form>
<!-- Deja crear, editar y eliminar usuarios. Hay que pulir un poco funcionalidades y diseños.-->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>

                </div>
            </div>
        </div>
    </body>
</html>