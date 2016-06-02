@extends('layouts.app')

@section('content')

    <h1>Editar Motorista</h1>

    {{ Form::model($driver, ['route' => ['drivers.update', $driver->id], 'method' => 'PUT']) }}

    @include('drivers._form', ['buttonText' => 'Update'])

    {{ Form::close() }}

@stop