@php
    $page = __('sidebar.Users');
    $breadcrumb = [
        [
            "title" => __('sidebar.Users'),
            "url" => route('users.index')
        ],
        [
            "title" => __('sidebar.New User'),
        ],
    ];
@endphp
@extends('dashboard.mt.main')
@section('content')
    <x-layout.mt.cards.basic :title="__('users.Create New User')">
        <x-slot:toolbar>
            <x-layout.mt.buttons.back :url='route("users.index")'/>
        </x-slot:toolbar>
        <x-layout.mt.forms.form :action="route('users.store')">
            <x-slot:attributes>
                enctype="multipart/form-data"
                autocomplete="off"
            </x-slot:attributes>
            @include('users::users.role_field')
            @include('users::users.fields')
            @include('users::users.fields_password')

        </x-layout.mt.forms.form>
    </x-layout.mt.cards.basic>
@endsection
@push('js')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let roleSelect = document.querySelector('#roleSelect');
console.log(roleSelect)
            // Ensure Select2 initializes properly
            $(roleSelect).on('change', function () {
                toggleDoctorFields(this);
            });

            function toggleDoctorFields(select) {
                const doctorFields = document.getElementById('doctorFields');
                if (select.value === 'doctor') {
                    doctorFields.style.display = 'block';
                    // Enable all disabled inputs inside the doctorFields section
                    doctorFields.querySelectorAll('input').forEach(input => input.disabled = false);
                } else {
                    doctorFields.style.display = 'none';
                    // Disable all inputs inside the doctorFields section
                    doctorFields.querySelectorAll('input').forEach(input => input.disabled = true);
                }
            }
        });
    </script>

    <script>
        document.getElementById('image-upload').addEventListener('change', function (event) {
            const reader = new FileReader();
            reader.onload = function () {
                document.getElementById('preview-container').style.backgroundImage = `url('${reader.result}')`;
            };
            reader.readAsDataURL(event.target.files[0]);
        });

        // Remove Image Preview
        document.getElementById('remove-image').addEventListener('click', function () {
            document.getElementById('preview-container').style.backgroundImage = "url('/default-profile.jpg')";
            document.getElementById('image-upload').value = ""; // Clear input
        });

    </script>
@endpush
