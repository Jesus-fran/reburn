@extends('index')

@section('content')
    <form method="post" action="{{ route('registrar-usuario') }}" class="container w-25">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="col-12 text-center">
            <img class="img-fluid mt-4" src="{{ asset('assets/images/features-first-icon3.png') }}" alt=""
                width="72" height="57">
        </div>
        <h1 class="h3 mb-3 fw-normal">Registrarme</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Juan Perez"
                required="required" autofocus>
            <label for="floatingEmail">Nombre</label>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Correo electrónico</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username"
                required="required" autofocus>
            <label for="floatingName">Nombre de usuario</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password"
                required="required">
            <label for="floatingPassword">Contraseña</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation"
                value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirmar contraseña</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarme</button>

        {{-- @include('auth.partials.copy') --}}
    </form>
@endsection
