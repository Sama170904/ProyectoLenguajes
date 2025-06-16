@extends('layouts.app')

@section('title', 'Registrarse')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card bg-dark text-light mt-5 shadow-lg">
                <div class="card-header bg-secondary text-white">
                    <h4 class="mb-0">Crear Cuenta</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input id="name" type="text"
                                   class="form-control bg-dark text-light border-light @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <div class="invalid-feedback bg-danger text-white px-2 rounded">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input id="email" type="email"
                                   class="form-control bg-dark text-light border-light @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback bg-danger text-white px-2 rounded">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input id="password" type="password"
                                   class="form-control bg-dark text-light border-light @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="new-password">
                            @error('password')
                                <div class="invalid-feedback bg-danger text-white px-2 rounded">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                            <input id="password_confirmation" type="password"
                                   class="form-control bg-dark text-light border-light"
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <button type="submit" class="btn btn-outline-success w-100">Registrarse</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-success">Inicia sesión</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

