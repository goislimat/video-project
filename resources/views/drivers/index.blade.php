@extends('layouts.app')

@section('content')

    <h1>Lista de Motoristas</h1>

    <div class="text-right">
        <a href="{{ route('drivers.create') }}" class="btn btn-primary">Novo</a>
    </div>

    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
        </tr>
        </thead>
        <tbody>
        @foreach($drivers as $driver)
            <tr>
                <td><a href="{{ route('drivers.show', [$driver->id]) }}">{{ $driver->name }}</a></td>
                <td>{{ $driver->cpf }}</td>
                <td>{{ $driver->phone }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop