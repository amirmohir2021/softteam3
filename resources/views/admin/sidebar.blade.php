<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <p>Пользователь</p>
                    </a>
                </li>

                @if(\Illuminate\Support\Facades\Auth::user()->id == 1)
                    <li class="nav-item {{ request()->routeIs('admin.ourportfolio.index') ? 'active' : '' }} ">
                        <a href="{{ route('admin.ourportfolio.index') }}">
                            <i class="bi bi-window-stack"></i>
                            <p>Our Portfolio</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('admin.select.index') ? 'active' : '' }} ">
                        <a href="{{ route('admin.select.index') }}">
                            <i class="bi bi-window-stack"></i>
                            <p>Toifasini tanlash</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('admin.team.index') ? 'active' : '' }} ">
                        <a href="{{ route('admin.team.index') }}">
                            <i class="bbi bi-person-plus-fill"></i>
                            <p>Jamoa A'zosi</p>
                        </a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('admin.contact.index') ? 'active' : '' }} ">
                        <a href="{{ route('admin.contact.index') }}">
                            <i class="bbi bi-person-plus-fill"></i>
                            <p>Contact Person</p>
                        </a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('admin.servisec.index') ? 'active' : '' }} ">
                        <a href="{{ route('admin.servisec.index') }}">
                            <i class="bbi bi-person-plus-fill"></i>
                            <p>Xizmatlar</p>
                        </a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</div>


