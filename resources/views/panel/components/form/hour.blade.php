<div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label">{{ $title }}</label>
    <div class="col-lg-9 col-xl-6">
        <input type="text" class="form-control time" id="kt_time_input" name="{{ $name }}" placeholder="hh:mm:ss" data-mask="00:00:00" maxlength="8"
               value="{{ old($name) ?? $value }}">
            <span class="form-text text-muted">Zaman formatı:
                <code>hh:mm:ss</code>
            </span>
    </div>
</div>

