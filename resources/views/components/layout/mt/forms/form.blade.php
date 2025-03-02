<form method="{{ $method ?? "post" }}" action="{{ $action }}" {{ $attributes }}>
    @csrf
    @method($method ?? 'post' )
    {{ $slot }}
    <div class="mt-5">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="ki-solid ki-like fs-1"></i>
            @lang('common.Submit')
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="ki-solid ki-dislike fs-1"></i>
            @lang('common.Reset')
        </button>
    </div>
</form>