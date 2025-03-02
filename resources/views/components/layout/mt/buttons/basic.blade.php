<a href="{{ $url }}" class="btn btn-icon btn-{{ $color??'primary' }} me-2 mb-2 btn-sm rounded"
    data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $title ?? __('common.Show') }}">
    @isset($icon)
        {{$icon}}
    @else
    <i class="ki-duotone ki-eye fs-1">
        <span class="path1"></span>
        <span class="path2"></span>
        <span class="path3"></span>
    </i>
    @endif
</a>
