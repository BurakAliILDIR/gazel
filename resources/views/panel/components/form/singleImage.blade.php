<div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label">{{ $title }}</label>
    <div class="col-lg-9 col-xl-6">
        <div class="symbol symbol-lg-90">
            <img style="max-width:{{ $image_width ?? 90 }}px;" src="{{ $value }}" alt="{{ $name }}" />
        </div>
        <br>
        <div class="image-input image-input-empty image-input-outline" id="{{ $name }}">
            <input type="file" name="{{ $name }}" accept=".png, .jpg, .jpeg" />
            @if($note)
                <br>
                <small>{{ $note }}</small>
            @endif
        </div>
    </div>
</div>
