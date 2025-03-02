@php
    $id = uniqid();
@endphp
<form method="post" action="{{ $action }}" id='{{ $id }}-form'>
    @csrf
    @method($method??"delete")
</form>


<!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="javascript:void(0)"
            onclick="salert(this, '{{ $id }}')" 
            class="menu-link px-3">
            @isset($icon)
                {{$icon}}
                
            @else
                <i class="ki-duotone ki-trash">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    <span class="path5"></span>
                </i>

            @endif
            {{$title ?? __("common.Delete")}}
        </a>
    </div>
<!--end::Menu item-->