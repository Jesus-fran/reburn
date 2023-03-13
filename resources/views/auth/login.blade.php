@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('iniciar-sesion') }}" class="container w-25">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        <img class="img-fluid mt-4" src="{{ asset('assets/images/features-first-icon3.png') }}" alt="" width="72" height="57">
        
        <h1 class="h3 mb-3 fw-normal mt-5">Iniciar sesión</h1>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3 mt-4">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Correo o nombre de usuario</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Contraseña</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        
        @include('auth.partials.copy')
    </form>
@endsection