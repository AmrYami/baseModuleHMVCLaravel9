<!--begin::Input group-->
<div class="form-floating">
    <select class="form-select select2" placeholder=" {{ $label }}" name="{{ $name }}" @isset($required) required @endisset >
        <option> @lang('common.Please Select') {{ $label }}</option>
        @foreach ($options as $key => $option)
        <option value='{{$key}}'>{{ $option }}</option>
        @endforeach
    </select>
    <label>
        {{ $label }}
        @isset($required)
            <span class="text-danger">*</span>
        @endisset 
    </label>
</div>
<!--end::Input group-->