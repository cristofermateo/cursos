@extends('home')
@section('content')
<div
    class="row justify-content-center align-items-center g-2"
>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h3>LISTA DE CLIENTES</h3>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
    Nuevo
  </button>
        <br>

<div
    class="table-responsive">
    <br>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)


            <tr class="">
                <td scope="row">{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->correo }}</td>
                <td>
                    <button type="button" class="btn btn-succes" data-toggle="modal" data-target="#edit{{ $cliente->id }}">
                        Nuevo
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $cliente->id }}">
                            Nuevo
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('cliente.create')


    </div>
    <div class="col-md-2"></div>
</div>

@endsection
