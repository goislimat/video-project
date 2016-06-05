@extends('layouts.app')

@section('content')

    <h1>Cadastrar Novo Serviço</h1>

    {{ Form::open(['route' => ['jobs.store'], 'method' => 'POST']) }}

    @inject('drivers', 'App\Repositories\DriverRepository')
    @inject('customers', 'App\Repositories\CustomerRepository')

    <!-- Driver id Select Field -->
    <div class="form-group">
        {{ Form::label('driver_id', 'Driver id:', ['class' => 'control-label']) }}
        {{ Form::select('driver_id', $drivers->lists('name', 'id'), null, ['class' => 'form-control']) }}
    </div>

    <!-- Customer id Select Field -->
    <div class="form-group">
        {{ Form::label('customer_id', 'Customer id:', ['class' => 'control-label']) }}
        {{ Form::select('customer_id', $customers->lists('name', 'id'), null, ['class' => 'form-control']) }}
    </div>

    <!-- Type Select Field -->
    <div class="form-group">
        {{ Form::label('type', 'Type:', ['class' => 'control-label']) }}
        {{ Form::select('type', [1=>'Escolar', 2=>'Viagem'], null, ['class' => 'form-control']) }}
    </div>

    <!-- School Input Text -->
    <div class="form-group">
        {{ Form::label('school', 'School:', ['class' => 'control-label']) }}
        {{ Form::text('school', null, ['class' => 'form-control']) }}
    </div>

    <!-- Started_at Input Text -->
    <div class="form-group">
        {{ Form::label('started_at', 'Started_at:', ['class' => 'control-label']) }}
        {{ Form::date('started_at', null, ['class' => 'form-control']) }}
    </div>

    <!-- Class_start_at Input Text -->
    <div class="form-group">
        {{ Form::label('class_start_at', 'Class_start_at:', ['class' => 'control-label']) }}
        {{ Form::text('class_start_at', null, ['class' => 'form-control']) }}
    </div>

    <!-- Class_finish_at Input Text -->
    <div class="form-group">
        {{ Form::label('class_finish_at', 'Class_finish_at:', ['class' => 'control-label']) }}
        {{ Form::text('class_finish_at', null, ['class' => 'form-control']) }}
    </div>

    <!-- Monthly_payment Input Text -->
    <div class="form-group">
        {{ Form::label('monthly_payment', 'Monthly_payment:', ['class' => 'control-label']) }}
        {{ Form::text('monthly_payment', null, ['class' => 'form-control']) }}
    </div>

    <!-- Submit Button -->
    <div class="form-group text-right">
        <button class="btn btn-primary">Done</button>
    </div>
    {{ Form::close() }}

@stop