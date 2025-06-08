@extends('layouts.master')


@section('content')

    <h2 class="mt-5 mx-5">All Bands</h2>

    @if (session('message'))
        <div class="alert alert-success mx-5 mt-3">{{ session('message') }}</div>
    @endif

    <div class="container-fluid mt-5 mb-5 mx-5">
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Albuns</th>
            <th>Ver/Editar</th>
            <th>Albuns</th>
            <th>Apagar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($allBands as $band)
            <tr>
                <th scope="row">{{$band->id }}</th>
                <td>{{$band->foto }}</td>
                <td>{{$band->nome }}</td>
                <td>{{$band->numero_albuns }}</td>
              <td><a href="{{ route('band.view', $band->id) }}" class="btn btn-info">Ver/Editar</a></td>
                <td><a href="" class="btn btn-info">Consultar Albuns</a></td>
                <td><a href="{{ route('band.delete', $band->id) }}" class="btn btn-danger">Apagar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
   <a class="btn btn-primary mx-5 mb-5" href="{{ route('band.add') }}">Add Band</a>

@endsection
