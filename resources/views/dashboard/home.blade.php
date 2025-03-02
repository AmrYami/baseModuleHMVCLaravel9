@php
    $page = __('Dashboard');
@endphp
@extends('dashboard.mt.main')
@section('content')
    <!--begin::Row-->
    <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-12 mb-md-5 mb-xl-10">
            <x-layout.mt.cards.basic>
                {{ __('You are logged in!') }}
                <x-slot:title>
                    {{ __('Dashboard') }}
                </x-slot:title>
            </x-layout.mt.cards.basic>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
@endsection
