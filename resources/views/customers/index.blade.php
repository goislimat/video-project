@extends('layouts.app')

@section('content')

    <h1>Lista de Clientes</h1>

    <div class="text-right">
        <a href="{{ route('customers.create') }}" class="btn btn-primary">Novo</a>
    </div>

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
                <td><a href="{{ route('customers.show', [$customer->id]) }}">{{ $customer->name }}</a></td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop