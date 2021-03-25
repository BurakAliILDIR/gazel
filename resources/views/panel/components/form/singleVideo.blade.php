<div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label">{{ $title }}</label>
    <div class="col-lg-9 col-xl-6">
        @if($value)
            <video width="400" height="300" controls>
                <source src="{{ $value }}" type="video/mp4">
                Tarayıcınız bu özelliği desteklemiyor.
            </video>
            <br>
        @endif
        <div class="image-input image-input-empty image-input-outline" id="{{ $name }}">
            <input type="file" name="{{ $name }}" accept=".mp4" />
        </div>
    </div>
</div>
