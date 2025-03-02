<x-layout.mt.cards.basic>
    <x-slot:title>
        <x-layout.mt.table.fields.basic-search :id="$id"/>
        <!--begin::Export buttons-->
			<div id="{{$id}}-dt-buttons" class="d-none"></div>
		<!--end::Export buttons-->
        {{ $title ?? ''}}
    </x-slot:title>
    <x-slot:toolbar>
        <x-layout.mt.table.buttons.export-menu
            :id="$id"
            :pdf='true'
            :excel='true'
            :csv='true'
            :copy='true'
            :print='true'/>
            {{ $toolbar ?? ''}}
    </x-slot:toolbar>
    <x-layout.mt.table.basic :id="$id">
        <x-slot:thead>
            {{ $thead ?? null }}
        </x-slot:thead>
        <x-slot:tbody>
            {{ $tbody }}
        </x-slot:tbody>
        <x-slot:tfoot>
            {{ $tfoot ?? null }}
        </x-slot:tfoot>
    </x-layout.mt.table.basic>
</x-layout.mt.cards.basic>
