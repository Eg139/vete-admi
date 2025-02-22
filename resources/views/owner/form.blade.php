
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $owner->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">owner <b>name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('email') }}</label>
    <div>
        {{ Form::text('email', $owner->email, ['class' => 'form-control' .
        ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">owner <b>email</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('phone') }}</label>
    <div>
        {{ Form::text('phone', $owner->phone, ['class' => 'form-control' .
        ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
        {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">owner <b>phone</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('address') }}</label>
    <div>
        {{ Form::text('address', $owner->address, ['class' => 'form-control' .
        ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
        {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">owner <b>address</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('dni') }}</label>
    <div>
        {{ Form::text('dni', $owner->dni, ['class' => 'form-control' .
        ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
        {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">owner <b>dni</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="/owners" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
