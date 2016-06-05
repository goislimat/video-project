@extends('layouts.app')

@section('content')

    <h1>Lsita de Serviços</h1>

    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>Motorista</th>
            <th>Cliente</th>
            <th>Tipo de Serviço</th>
            <th>Último Pagamento</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jobs as $job)
            <tr>
                <td>{{ $job->driver->name }}</td>
                <td>{{ $job->customer->name }}</td>
                <td>{{ $job->type }}</td>
                <td>{{ $job->last_payment }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop