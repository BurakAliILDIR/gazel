@if ($errors->any())
    <div class="mb-5">
        @foreach ($errors->all() as $error)
            <div class="alert alert-custom alert-light-danger fade show mb-1" style="padding: 0 15px 0 15px; margin: 0;" role="alert">
                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                <div class="alert-text">{{ $error }}</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
@endif
