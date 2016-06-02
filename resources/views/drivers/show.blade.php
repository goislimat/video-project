@extends('layouts.app')

@section('content')

    <h2>Motorista: {{ $driver->name }}</h2>
    <h4>RG: {{ $driver->rg }} - CPF: {{ $driver->cpf }}</h4>
    <h4>Tel: {{ $driver->phone }}</h4>
    <h5>Salário: R$ {{ $driver->salary }}</h5>

    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('drivers.edit', [$driver->id]) }}" class="btn btn-warning">Edit</a>
        </div>

        <div class="col-md-2">
            {{ Form::open(['route' => ['drivers.destroy', $driver->id], 'method' => 'DELETE', 'class' => 'col-md-2 form-delete']) }}
                <button class="btn btn-danger">Delete</button>
            {{ Form::close() }}
        </div>
    </div>

@stop