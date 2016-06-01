@extends('layouts.app')

@section('content')

    <h1>Cadastrar Cliente</h1>

    {{ Form::open(['route' => ['customers.store'], 'method' => 'POST']) }}

    @include('customers._form', ['buttonText' => 'Save'])

    {{ Form::close() }}

@stop