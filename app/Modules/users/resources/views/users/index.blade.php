@php
    $page = __('sidebar.Users');
    $breadcrumb = [
        [
            "title" => __('sidebar.Users'),
        ]
    ];
@endphp
@extends('dashboard.mt.main')

@section('toolbar-actions')
<a href="{{route('users.create')}}" class="btn btn-primary btn-sm">
    <i class="ki-duotone ki-plus fs-1"></i>
    @lang("common.New User")
</a>
@endsection
@section("page-name", trans("setup.Users"))
@section('content')
<x-layout.mt.table.basic-card :id='"users"'>
    <x-slot:thead>
        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase">
            <th>@lang('users.Name')</th>
            <th>@lang('users.Email')</th>
            <th>@lang('users.Mobile')</th>
            <th>@lang('users.Role')</th>
            @canany(['edit-users','block-users', 'delete-users'])
            <th>@lang('common.Actions')</th>
            @endcanany
        </tr>
    </x-slot:thead>
    <x-slot:tbody>
        @foreach ($users as $user)
        <tr>
                <td>
                    {{ $user->name }}
                </td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->mobile }}</td>
                <td>{{ implode(',', $user->roles->pluck('name')->toArray()) }}</td>
                @canany(['edit-users','block-users', 'delete-users'])
                <td>
                    @if($user->id != 1)
                    <x-layout.mt.table.buttons.dopdown-actions>
                        <x-slot:buttons>

                            <x-layout.mt.table.buttons.dropdown-action-basic :url="route('users.show', $user->id)"/>

                            @can('edit-users')
                            <x-layout.mt.table.buttons.dropdown-action-basic
                                :url="route('users.edit', $user->id)"
                                :title="__('common.Edit')">
                                <x-slot:icon>
                                    <i class="ki-duotone ki-feather">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </x-slot:icon>
                            </x-layout.mt.table.buttons.dropdown-action-basic>
                            @endcan
                            @can('edit-doctor')
                            <x-layout.mt.table.buttons.dropdown-action-basic
                                :url="route('doctor.edit', $user->id)"
                                :title="__('users.Edit Doctor')">
                                <x-slot:icon>
                                    <i class="ki-duotone ki-feather">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </x-slot:icon>
                            </x-layout.mt.table.buttons.dropdown-action-basic>
                            @endcan
                            @can("delete-users")
                            <x-layout.mt.table.buttons.dropdown-action-alert :action="route('users.destroy', $user->id)"/>
                            @if($user->freeze == 0)
                            <x-layout.mt.table.buttons.dropdown-action-alert
                                :action="route('users.freeze', $user->id)"
                                :method="'put'"
                                :title="__('common.Freeze')">
                                <x-slot:icon>
                                <i class="ki-duotone ki-lock">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </x-slot:icon>
                            </x-layout.mt.table.buttons.dropdown-action-alert>
                            @else
                            <x-layout.mt.table.buttons.dropdown-action-alert
                                :action="route('users.un_freeze', $user->id)"
                                :method="'put'"
                                :title="__('common.Un Freeze')">
                                <x-slot:icon>
                                    <i class="ki-duotone ki-lock-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </x-slot:icon>
                            </x-layout.mt.table.buttons.dropdown-action-alert>
                            @endif
                            @endcan
                        </x-slot:buttons>
                    </x-layout.mt.table.buttons.dopdown-actions>
                    @endif
                </td>
                @endcanany
            </tr>
        @endforeach
    </x-slot:tbody>
</x-layout.mt.table.basic-card>
@endsection
