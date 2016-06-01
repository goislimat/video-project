@inject('documents', 'App\Http\Utils\Document')

<!-- Name Input Text -->
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {{ Form::label('name', 'Name:', ['class' => 'control-label']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}

    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

<!-- Email Input Email -->
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    {{ Form::label('email', 'Email:', ['class' => 'control-label']) }}
    {{ Form::email('email', null, ['class' => 'form-control']) }}

    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

<!-- Phone Input Text -->
<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
    {{ Form::label('phone', 'Phone:', ['class' => 'control-label']) }}
    {{ Form::text('phone', null, ['class' => 'form-control', 'required']) }}

    @if ($errors->has('phone'))
        <span class="help-block">
            <strong>{{ $errors->first('phone') }}</strong>
        </span>
    @endif
</div>

<!-- Document type Select Field -->
<div class="form-group {{ $errors->has('document_type') ? 'has-error' : '' }}">
    {{ Form::label('document_type', 'Document type:', ['class' => 'control-label']) }}
    {{ Form::select('document_type', $documents::all(), null, ['class' => 'form-control']) }}

    @if ($errors->has('document_type'))
        <span class="help-block">
            <strong>{{ $errors->first('document_type') }}</strong>
        </span>
    @endif
</div>

<!-- Document_number Input Text -->
<div class="form-group">
    {{ Form::label('document_number', 'Document_number:', ['class' => 'control-label']) }}
    {{ Form::text('document_number', null, ['class' => 'form-control']) }}
</div>

<!-- Submit Button -->
<div class="form-group text-right">
    <button class="btn btn-primary">{{ $buttonText }}</button>
</div>