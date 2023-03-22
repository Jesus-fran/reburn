@extends('index')

@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <br><br><br>
            <h5>Panel de administración</h5>
            <br>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-3">
            <div class="card">
                <img class="card-img-top img-fluid " src="{{ asset('assets/images/img-log1.avif') }}" alt="">
                <div class="card-body">
                    <div class="col-12 text-center">
                        <a class="btn btn-primary" href="/logs" role="button" aria-disabled="true">Logs de errores y advertencias</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img-top img-fluid " src="{{ asset('assets/images/img-log2.avif') }}" alt="">
                <div class="card-body">
                    <div class="col-12 text-center">
                        <a class="btn btn-primary" href="{{ route('logs-accesos') }}" role="button" aria-disabled="true">Logs de accesos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img-top img-fluid " src="{{ asset('assets/images/img-logo3.avif') }}" alt="">
                <div class="card-body">
                    <div class="col-12 text-center">
                        <a class="btn btn-primary" href="{{ route('logs-registros') }}" role="button" aria-disabled="true">Logs de registros</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
