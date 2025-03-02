<x-layout.mt.sidebar.item :title="__('Dashboard')" :url="route('dashboard')">
    <x-slot:icon>
        <i class="ki-duotone ki-element-11 fs-2">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
            <span class="path4"></span>
        </i>
    </x-slot:icon>
</x-layout.mt.sidebar.item>
<x-layout.mt.sidebar.parent-item :mainTitle="__('Users')">
    <x-slot:mainIcon>
        <i class="ki-duotone ki-people fs-2">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
            <span class="path4"></span>
            <span class="path5"></span>
        </i>
    </x-slot:mainIcon>
    <x-slot:submenu>
        <x-layout.mt.sidebar.sub-item :url="route('users.create')" :title="__('sidebar.Create')" />
        <x-layout.mt.sidebar.sub-item :url="route('users.index')" :title="__('sidebar.Users')" />
    </x-slot:submenu>
</x-layout.mt.sidebar.parent-item>
<x-layout.mt.sidebar.parent-item :mainTitle="__('Roles')">
    <x-slot:mainIcon>
        <i class="ki-duotone ki-user-tick fs-2">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
        </i>
    </x-slot:mainIcon>
    <x-slot:submenu>
        <x-layout.mt.sidebar.sub-item :url="route('roles.create')" :title="__('sidebar.Create')" />
        <x-layout.mt.sidebar.sub-item :url="route('roles.index')" :title="__('sidebar.Roles')" />
    </x-slot:submenu>
</x-layout.mt.sidebar.parent-item>
