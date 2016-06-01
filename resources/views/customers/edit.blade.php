@extends('layouts.app')

@section('content')

    <h1>Editar Cliente</h1>

    {{ Form::model($customer, ['route' => ['customers.update', $customer->id], 'method' => 'PUT']) }}

    @include('customers._form', ['buttonText' => 'Update'])

    {{ Form::close() }}

@stop