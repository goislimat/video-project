@extends('layouts.app')

@section('content')

    <h1>Lista de Clientes</h1>

    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop