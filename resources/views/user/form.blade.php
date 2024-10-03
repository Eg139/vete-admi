<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $user->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">User <b>name</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('email') }}</label>
    <div>
        {{ Form::text('email', $user->email, ['class' => 'form-control' .
        ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">User <b>email</b> instruction.</small>
    </div>
</div>

<!-- Otros campos -->

<div class="form-group mb-3">
    <label for="roles" class="form-label">Roles</label>
    <div class="form-check">
        @foreach($roles as $role)
            <div class="form-check">
                <input id="role_{{ $role->id }}" class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->id }}"
                    {{ in_array($role->id, $userRoles) ? 'checked' : '' }}>
                <label for="role_{{ $role->id }}" class="form-check-label">
                    {{ $role->name }}
                </label>
            </div>
        @endforeach
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <!-- Redirige el botón Cancelar a la lista de usuarios -->
            <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>
