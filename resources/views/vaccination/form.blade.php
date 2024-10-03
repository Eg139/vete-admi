
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('pet_id') }}</label>
    <div>
        {{ Form::text('pet_id', $vaccination->pet_id, ['class' => 'form-control' .
        ($errors->has('pet_id') ? ' is-invalid' : ''), 'placeholder' => 'Pet Id']) }}
        {!! $errors->first('pet_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">vaccination <b>pet_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('vaccine_name') }}</label>
    <div>
        {{ Form::text('vaccine_name', $vaccination->vaccine_name, ['class' => 'form-control' .
        ($errors->has('vaccine_name') ? ' is-invalid' : ''), 'placeholder' => 'Vaccine Name']) }}
        {!! $errors->first('vaccine_name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">vaccination <b>vaccine_name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('vaccination_date') }}</label>
    <div>
        {{ Form::text('vaccination_date', $vaccination->vaccination_date, ['class' => 'form-control' .
        ($errors->has('vaccination_date') ? ' is-invalid' : ''), 'placeholder' => 'Vaccination Date']) }}
        {!! $errors->first('vaccination_date', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">vaccination <b>vaccination_date</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('expiration_date') }}</label>
    <div>
        {{ Form::text('expiration_date', $vaccination->expiration_date, ['class' => 'form-control' .
        ($errors->has('expiration_date') ? ' is-invalid' : ''), 'placeholder' => 'Expiration Date']) }}
        {!! $errors->first('expiration_date', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">vaccination <b>expiration_date</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('notes') }}</label>
    <div>
        {{ Form::text('notes', $vaccination->notes, ['class' => 'form-control' .
        ($errors->has('notes') ? ' is-invalid' : ''), 'placeholder' => 'Notes']) }}
        {!! $errors->first('notes', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">vaccination <b>notes</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
