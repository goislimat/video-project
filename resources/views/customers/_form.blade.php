@inject('documents', 'App\Http\Utils\Document')

<!-- Name Input Text -->
<div class="form-group">
    {{ Form::label('name', 'Name:', ['class' => 'control-label']) }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<!-- Email Input Email -->
<div class="form-group">
    {{ Form::label('email', 'Email:', ['class' => 'control-label']) }}
    {{ Form::email('email', null, ['class' => 'form-control']) }}
</div>

<!-- Phone Input Text -->
<div class="form-group">
    {{ Form::label('phone', 'Phone:', ['class' => 'control-label']) }}
    {{ Form::text('phone', null, ['class' => 'form-control']) }}
</div>

<!-- Document type Select Field -->
<div class="form-group">
    {{ Form::label('document_type', 'Document type:', ['class' => 'control-label']) }}
    {{ Form::select('document_type', $documents::all(), null, ['class' => 'form-control']) }}
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