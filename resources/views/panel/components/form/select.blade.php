<?php
if (empty($disabled)) {
    $disabled = '';
}
if (empty($dataName)) {
    $dataName = 'name';
}
?>
<div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label">{{ $title }}</label>
    <div class="col-lg-9 col-xl-6">
        <div class="dropdown bootstrap-select form-control">
            <select name="{{ $name }}" class="form-control selectpicker" {{$disabled}}>
                @foreach($values as $myvalue)
                    <option value="{{$myvalue['id']}}" <?php if ($myvalue[$dataName] == $value) {
                        echo "selected";
                    }?>>{{$myvalue[$dataName]}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
