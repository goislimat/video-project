@extends('layouts.app')

@section('content')

    <h2>Cliente: {{ $customer->name }}</h2>
    <h4>{{ $customer->document_type }}: {{ $customer->document_number }}</h4>
    <h4>{{ $customer->phone }}</h4>
    <h5>{{ $customer->email }}</h5>

    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('customers.edit', [$customer->id]) }}" class="btn btn-warning">Edit</a>
        </div>

        <div class="col-md-2">
            {{ Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'DELETE', 'class' => 'col-md-2 form-delete']) }}
                <button class="btn btn-danger">Delete</button>
            {{ Form::close() }}
        </div>
    </div>

@stop