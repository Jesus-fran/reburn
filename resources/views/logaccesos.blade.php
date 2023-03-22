@extends('index')

@section('content')
    <br><br>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                 
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿ELiminar todos los logs?</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <a href="{{ route('clean-accesos') }}" class="btn btn-danger"></i>Eliminar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row gy-4">
        <div class="col-12 text-center">
            <h5>Logs de accesos</h5>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-2 offset-10">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-trash-fill"></i>Limpiar logs
            </button>
        </div>
        <br>
    </div>
    <div class="row">
        <div class="col-8 offset-2">
            <table class="table border table-striped ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Dirección IP</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{$num = 0}} --}}
                    @foreach ($accesos as $acceso)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ \Carbon\Carbon::parse($acceso->fechahora)->format('d-m-Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($acceso->fechahora)->toTimeString() }}</td>
                            <td>{{ $acceso->user }}</td>
                            <td>{{ $acceso->ip }}</td>
                        </tr>
                    @endforeach

                </tbody>
                @if (sizeof($accesos) == 0)
                    <caption>No hay logs registrados</caption>
                @endif
            </table>
        </div>

    </div>
@endsection
