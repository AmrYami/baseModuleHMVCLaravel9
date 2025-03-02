@php
    $page = __('sidebar.Roles');
    $breadcrumb = [
        [
            "title" => __('sidebar.Roles'),
        ]
    ];
@endphp
@extends('dashboard.mt.main')
@can('create-users-role')
    @section('toolbar-actions')
    <a href="{{route('roles.create')}}" class="btn btn-primary btn-sm">
        <i class="ki-duotone ki-plus fs-1"></i>
        @lang("roles.New Role")
    </a>
    @endsection
@endcan
@section('content')
<x-layout.mt.table.basic-card :id='"users"'>
    <x-slot:thead>
        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase">
            <th>@lang('roles.Name')</th>
            @canany(['edit-users-role','delete-users-role'])
            <th>@lang('common.Actions')</th>
            @endcanany
        </tr>
    </x-slot:thead>
    <x-slot:tbody>
        @foreach ($roles as $role)
        <tr>
                <td>
                    {{ $role->name }}
                </td>
                @canany(['edit-users-role','delete-users-role'])
                <td>
                    @if($role->id != 1)

                    @can('edit-users-role')
                    <x-layout.mt.buttons.basic
                        :url="route('roles.edit', [$role->id])"
                        :title="__('common.Edit')">
                        <x-slot:icon>
                            <i class="ki-duotone ki-feather">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </x-slot:icon>
                    </x-layout.mt.buttons.basic>
                    @endcan
                    @can("delete-users-role")
                    <x-layout.mt.buttons.with-alert :action="route('roles.destroy', [$role->id])"/>
                    @endcan

                    @endif
                </td>
                @endcanany
            </tr>
        @endforeach
    </x-slot:tbody>
</x-layout.mt.table.basic-card>
@endsection

