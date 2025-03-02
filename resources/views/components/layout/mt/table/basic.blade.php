<table class="table align-middle rounded table-row-bordered fs-6 g-5 table-striped table-hover data-table" id="{{$id}}-table">
    @isset($thead)
    <thead>
        {{ $thead}}
    </thead>
    @endisset
    <tbody class="fw-semibold text-gray-600">
        {{ $tbody }}
    </tbody>
    @isset($foot)
    <tfoot>
        {{ $tfoot}}
    </tfoot>
    @endisset

    {{ $tfoot ?? "" }}
</table>
@push("foot")
<script>
    initDataTable("{{$id}}");
</script>
@endpush