@extends('index')

@section('content')
    <form method="post" action="{{ route('iniciar-sesion') }}" class="container w-25 mt-5">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="col-12 text-center">
            <img class="img-fluid mt-4" src="{{ asset('assets/images/features-first-icon3.png') }}" alt=""
                width="72" height="57">
        </div>

        <div class="col-12 text-center">
            <h1 class="h3 mb-3 fw-normal mt-5">Iniciar sesión</h1>
        </div>

        @if (isset($errors) && count($errors) > 0)
            <div class="alert alert-warning" role="alert">
                <ul class="list-unstyled mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if (isset($registrado))
            <div class="alert alert-warning text-center" role="alert">
                <i class="fa fa-check"></i> &nbsp Registrado! <p class="fst-italic">Ya puedes iniciar sesión</p>
            </div>
        @endif

        @if (Session::get('success', false))
            <?php $data = Session::get('success'); ?>
            @if (is_array($data))
                @foreach ($data as $msg)
                    <div class="alert alert-warning" role="alert">
                        <i class="fa fa-check"></i>
                        {{ $msg }}
                    </div>
                @endforeach
            @else
                <div class="alert alert-warning" role="alert">
                    <i class="fa fa-check"></i>
                    {{ $data }}
                </div>
            @endif
        @endif

        <div class="form-group form-floating mb-3 mt-4">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username"
                required="required" autofocus>
            <label for="floatingName">Correo electrónico</label>
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

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

        {{-- @include('auth.partials.copy') --}}
    </form>
@endsection
