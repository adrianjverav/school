@extends('auth.layout')

@section('title', 'Inicio de sesión')

@section('content')

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login-content card">
                        <div class="login-form">
                            <h4>{{ __('Inicio de sesión') }}</h4>
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('Correo electrónico') }}</label>
                                    <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo electrónico" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Contraseña') }}</label>
                                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="checkbox">
                                    <label class="pull-right">
                                        <p>{{ __('¿Olvidates tu contraseña?') }} <a href="{{ route('password.request') }}"> Aquí la puedes recuperar</a></p>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">
                                    {{ __('Iniciar sesión') }}
                                </button>
                                {{-- @if (Route::has('password.request'))
                                    <div class="register-link m-t-15 text-center">
                                        
                                        <p>{{ __('¿Olvidates tu contraseña?') }} <a href="{{ route('password.request') }}"> Aquí la puedes recuperar</a></p>
                                    </div>
                                @endif --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
