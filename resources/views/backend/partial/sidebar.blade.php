<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- === Sideber Start === -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                @can('dashboard')
                <li>
                    <a href="{{ route('home') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboards</span>
                    </a>
                </li>
                @endcan

                @can('user_list')
                <li>
                    <a href="{{ route('userlist.index') }}"><i class="bx bxs-user"></i>
                        <span>Users List</span>
                    </a>
                </li>
                @endcan

                @can('university')
                    <li>
                        <a href="{{ route('university.index') }}"><i class="bx bxs-graduation"></i>
                            <span>University</span>
                        </a>
                    </li>
                @endcan

                @can('file')
                    <li>
                        <a href="{{ route('file.index') }}"><i class="bx bxs-file"></i>
                            <span>Files</span>
                        </a>
                    </li>
                @endcan

                @can('settings')
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-gear"></i>
                        <span>Setting</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li ><a href="{{ route('authority.index') }}"><i class="dripicons-forward"></i>Authority Users</a></li>
                        <li ><a href="{{ route('permissions.index') }}"><i class="dripicons-forward"></i>Permissions</a></li>
                        <li ><a href="{{ route('roles.index') }}"><i class="dripicons-forward"></i>Roles</a></li>
                    </ul>
                </li>
                @endcan
            </ul>
        </div>
        <!-- === End Sideber === -->
    </div>
</div>
