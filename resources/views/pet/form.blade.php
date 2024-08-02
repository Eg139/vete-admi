
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $pet->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pet <b>name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('type') }}</label>
    <div>
        {{ Form::text('type', $pet->type, ['class' => 'form-control' .
        ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
        {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pet <b>type</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('age') }}</label>
    <div>
        {{ Form::text('age', $pet->age, ['class' => 'form-control' .
        ($errors->has('age') ? ' is-invalid' : ''), 'placeholder' => 'Age']) }}
        {!! $errors->first('age', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pet <b>age</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('owner_id') }}</label>
    <div>
        {{ Form::select('owner_id', $owners, $pet->owner_id, ['class' => 'form-control' .
        ($errors->has('owner_id') ? ' is-invalid' : ''), 'placeholder' => 'Select Owner']) }}
        {!! $errors->first('owner_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Select the <b>owner</b> for this pet.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="/pets" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
