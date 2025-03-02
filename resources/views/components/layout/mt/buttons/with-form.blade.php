@php
    $id = uniqid();
@endphp
<form method="post" action="{{ $action }}" id='{{ $id }}-form' class="d-none">
    @csrf
    @method($method??"put")
</form>

<a href="javascript:void(0)"
    class="btn btn-icon btn-primary me-2 mb-2 btn-sm rounded"
    onclick="document.querySelector('#{{ $id }}-form').submit()"
    data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $title }}">
    {{ $icon }}
</a>
