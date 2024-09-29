<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold">{{ $settings['site_name'] }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
        </li>

        <!-- Messages -->
        <li class="menu-item {{ request()->is('admin/messages*') ? 'active' : '' }}">
            <a href="{{ route('admin.messages.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-message-dots"></i>
                <div data-i18n="Messages">Messages</div>
                @if($unopenedMessagesCount > 0)
                <div class="badge bg-primary rounded-pill ms-auto">{{ $unopenedMessagesCount }}</div>
                @endif
            </a>
        </li>


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="User Management">User Management</span>
        </li>

            <!-- Users -->
    <li class="menu-item {{ request()->is('admin/users*') ? 'active' : '' }}">
        <a href="{{ route('admin.users.index') }}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-users"></i>
            <div data-i18n="Users">Users</div>
        </a>
    </li>

    <li class="menu-item {{ request()->is('admin/vendors*') ? 'active' : '' }}">
        <a href="{{ route('admin.vendors.index') }}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-home"></i>
            <div data-i18n="Vendors">Vendors</div>
        </a>
    </li>






        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="App Settings">App Settings</span>
        </li>

        <!-- Settings -->
        <li class="menu-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
            <a href="{{ route('admin.settings.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Settings">Settings</div>
            </a>
        </li>







        </ul>
</aside>
