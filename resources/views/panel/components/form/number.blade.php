<div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label">{{ $title }}</label>
    <div class="col-lg-9 col-xl-6">
        <input class="form-control form-control-lg form-control-solid" type="number" name="{{ $name }}" value="{{ old($name) ?? $value }}" />
    </div>
</div>
