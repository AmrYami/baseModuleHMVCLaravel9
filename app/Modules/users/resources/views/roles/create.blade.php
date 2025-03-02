@php
    $page = __('sidebar.Roles');
    $breadcrumb = [
        [
            "title" => __('sidebar.Roles'),
            "url" => route('roles.index')
        ],
        [
            "title" => __('sidebar.New Role'),
        ],
    ];
@endphp
@extends('dashboard.mt.main')

@section('content')
<x-layout.mt.cards.basic :title="__('roles.Create New Role')">
    <x-slot:toolbar>
        <x-layout.mt.buttons.back :url='route("roles.index")'/>
    </x-slot:toolbar>
    <x-layout.mt.forms.form :action="route('roles.store')" >
        @include('users::roles.fields')
    </x-layout.mt.forms.form>
</x-layout.mt.cards.basic>
@endsection
