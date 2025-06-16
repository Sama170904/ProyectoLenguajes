@extends('layouts.app')

@section('title', 'Ingresar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card bg-dark text-light mt-5 shadow-lg">
                <div class="card-header bg-secondary text-white">
                    <h4 class="mb-0">Iniciar sesión</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input id="email" type="email"
                                   class="form-control bg-dark text-light border-light @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <div class="invalid-feedback bg-danger text-white px-2 rounded">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input id="password" type="password"
                                   class="form-control bg-dark text-light border-light @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback bg-danger text-white px-2 rounded">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" name="remember" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Recordarme</label>
                        </div>

                        <button type="submit" class="btn btn-outline-info w-100">Ingresar</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>¿No tienes cuenta? <a href="{{ route('register') }}" class="text-info">Regístrate aquí</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


