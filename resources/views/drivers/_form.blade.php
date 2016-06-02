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

<!-- Rg Input Text -->
<div class="form-group {{ $errors->has('rg') ? 'has-error' : '' }}">
    {{ Form::label('rg', 'Rg:', ['class' => 'control-label']) }}
    {{ Form::text('rg', null, ['class' => 'form-control']) }}

    @if ($errors->has('rg'))
        <span class="help-block">
            <strong>{{ $errors->first('rg') }}</strong>
        </span>
    @endif
</div>

<!-- Cpf Input Text -->
<div class="form-group {{ $errors->has('cpf') ? 'has-error' : '' }}">
    {{ Form::label('cpf', 'Cpf:', ['class' => 'control-label']) }}
    {{ Form::text('cpf', null, ['class' => 'form-control']) }}

    @if ($errors->has('cpf'))
        <span class="help-block">
            <strong>{{ $errors->first('cpf') }}</strong>
        </span>
    @endif
</div>

<!-- Salary Input Number -->
<div class="form-group">
    {{ Form::label('salary', 'Salary:', ['class' => 'control-label']) }}
    {{ Form::number('salary', null, ['class' => 'form-control']) }}
</div>

<!-- Registration_date Input Text -->
<div class="form-group {{ $errors->has('registration_date') ? 'has-error' : '' }}">
    {{ Form::label('registration_date', 'Registration_date:', ['class' => 'control-label']) }}
    {{ Form::text('registration_date', null, ['class' => 'form-control']) }}

    @if ($errors->has('registration_date'))
        <span class="help-block">
            <strong>{{ $errors->first('registration_date') }}</strong>
        </span>
    @endif
</div>

<!-- Submit Button -->
<div class="form-group text-right">
    <button class="btn btn-primary">{{ $buttonText }}</button>
</div>