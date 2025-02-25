<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li style="padding: 10px;">
                <div class="dropdown profile-element">
                    <a href="{{ route('admin.dashboard') }}" target="_blank">
                        <img alt="image" src="{{ asset('backend/assets/image/logo.png') }}"
                            style="height: 50px;width: 100%;" />
                    </a>
                </div>
                <div class="logo-element">
                    <a href="{{ route('admin.dashboard') }}" target="_blank">
                        <img alt="image" src="{{ asset('backend/assets/image/small_logo.png') }}"
                            style="height: 50px;width: 100%;" />
                    </a>
                </div>
            </li>
            @can('dashboard')
                <li @if (in_array(Route::currentRouteName(), ['admin.dashboard'])) class="active" @endif>
                    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-th-large"></i> <span
                            class="nav-label">Dashboard</span></a>
                </li>
            @endcan
            <li>
                <a href="{{ route('admin.product.index') }}"><i class="fa fa-shopping-cart"></i> <span
                        class="nav-label">Product</span></a>
            </li>
            <li>
                <a href="{{ route('admin.services.index') }}"><i class="fa fa-shopping-cart"></i> <span
                        class="nav-label">Services</span></a>
            </li>
            <li>
                <a href="{{ route('admin.enquiry.index') }}"><i class="fa fa-shopping-cart"></i> <span
                        class="nav-label">Pickup Enquiry</span></a>
            </li>
            <li>
                <a href="{{ route('admin.contact.index') }}"><i class="fa fa-shopping-cart"></i> <span
                        class="nav-label">Contact Enquiry</span></a>
            </li>
            @canany(['role-list', 'staff-list'])
                <li @if (in_array(Route::currentRouteName(), [
                        'admin.roles.index',
                        'admin.roles.create',
                        'admin.roles.edit',
                        'admin.staffs.index',
                        'admin.staffs.create',
                        'admin.staffs.edit',
                    ])) class="active" @endif>
                    <a href="#"><i class="fa fa-users-cog"></i> <span class="nav-label">Staff Management</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        @can('role-list')
                            <li @if (in_array(Route::currentRouteName(), ['admin.roles.index', 'admin.roles.create', 'admin.roles.edit'])) class="active" @endif><a
                                    href="{{ route('admin.roles.index') }}">Role</a></li>
                        @endcan

                        @can('staff-list')
                            <li @if (in_array(Route::currentRouteName(), ['admin.staffs.index', 'admin.staffs.create', 'admin.staffs.edit'])) class="active" @endif><a
                                    href="{{ route('admin.staffs.index') }}">Staff</a></li>
                        @endcan
                    </ul>
                </li>
            @endcanany


        </ul>
    </div>
</nav>
