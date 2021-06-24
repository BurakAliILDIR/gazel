<!DOCTYPE html>
<html>
<head>
    <title>Deneme</title>
    <link href="{{ asset('storage/panel/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('storage/panel/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="card card-custom">
    <div class="card-body">
        <div class="form-group row">
            <label class="col-form-label text-right col-lg-1 col-sm-12">Sayfa Özelleştirme</label>
            <div class="col-lg-11 col-md-11 col-sm-12">
                <div class="page_editor"></div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('storage/panel/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('storage/panel/assets/js/pages/crud/forms/editors/summernote.js') }}"></script>

<script>
    // Class definition
    const editor = function () {
        // Private functions
        const page = function () {
            $('.page_editor').summernote({
                height: 800
            });
        }

        return {
            // public functions
            init: page()
        };
    }();

    // Initialization
    jQuery(document).ready(function () {
        editor.init();
    });

</script>

</body>
</html>
