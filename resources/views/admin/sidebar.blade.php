<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

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

                    <li class="nav-item {{ request()->routeIs('admin.story.index') ? 'active' : '' }} ">
                        <a href="{{ route('admin.story.index') }}">
                            <i class="bbi bi-person-plus-fill"></i>
                            <p>Projects</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('admin.client.index') ? 'active' : '' }} ">
                        <a href="{{ route('admin.client.index') }}">
                            <i class="bbi bi-person-plus-fill"></i>
                            <p>Clients</p>
                        </a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('admin.savol.index') ? 'active' : '' }} ">
                        <a href="{{ route('admin.savol.index') }}">
                            <i class="bbi bi-person-plus-fill"></i>
                            <p>Savollar</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('admin.javob.index') ? 'active' : '' }} ">
                        <a href="{{ route('admin.javob.index') }}">
                            <i class="bbi bi-person-plus-fill"></i>
                            <p>Javoblar</p>
                        </a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</div>


