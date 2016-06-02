@extends('layouts.app')

@section('content')

    <h1>Cadastrar Motorista</h1>

    {{ Form::open(['route' => ['drivers.store'], 'method' => 'POST']) }}

    @include('drivers._form', ['buttonText' => 'Save'])

    {{ Form::close() }}

@stop