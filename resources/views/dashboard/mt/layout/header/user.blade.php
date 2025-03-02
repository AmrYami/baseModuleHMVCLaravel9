<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
    <!--begin::Menu wrapper-->
    <div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
        <img src="{{ asset('mt/assets/media/avatars/300-3.jpg') }}" class="rounded-3" alt="user" />
    </div>
    <!--begin::User account menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
        data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center px-3">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                    <img alt="Logo" src="{{ asset('mt/assets/media/avatars/300-3.jpg') }}" />
                </div>
                <!--end::Avatar-->
                <!--begin::Username-->
                <div class="d-flex flex-column">
                    <div class="fw-bold d-flex align-items-center fs-5">Robert Fox
                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                    </div>
                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">robert@kt.com</a>
                </div>
                <!--end::Username-->
            </div>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a href="{{ route('my_profile') }}" class="menu-link px-5">@lang('common.My Profile')</a>
        </div>
        <!--end::Menu item-->
        {{--  <!--begin::Menu item-->
        <div class="menu-item px-5 my-1">
            <a href="account/settings.html" class="menu-link px-5">Account Settings</a>
        </div>
        <!--end::Menu item-->  --}}
        <x-layout.mt.table.buttons.dropdown-action-form
            :action="route('logout')"
            :method="'post'"
            :classes="'px-5'"
            :linkClasses="'px-5'"
            :title="__('common.Sign Out')" />
    </div>
    <!--end::User account menu-->
    <!--end::Menu wrapper-->
</div>
