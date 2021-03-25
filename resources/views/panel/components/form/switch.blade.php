<div class="form-group row">
    <label class="col-3 col-form-label">{{ $title }}</label>
    <div class="col-3">
        <span class="switch switch-outline switch-icon switch-{{ $color }}">
           <label>
            <input type="checkbox" {{ old($name) ? 'checked' : ($value ? 'checked' : '') }} name="{{ $name }}" />
            <span></span>
           </label>
        </span>
    </div>
</div>
