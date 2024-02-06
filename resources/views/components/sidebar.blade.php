<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/dashboard">Desa Batu Langkah Besar</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/dashboard">BLB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard') }}"><i class="fas fa-home"></i> <span> Dashboard
                    </span></a>
            </li>
            <li class="menu-header">Data</li>
            <li class="{{ Request::is('data_penduduk') ? 'active' : '' }}">
                <a class="nav-link" href="/data_penduduk"><i class="fas fa-people-roof">
                    </i> <span>Data Penduduk</span>
                </a>
            </li>
            <li class="menu-header">Info</li>
            <li class="{{ Request::is('beritas*') ? 'active' : '' }}">
                <a class="nav-link" href="/beritas"><i class="fas fa-newspaper">
                    </i> <span>Berita</span>
                </a>
            </li>
            <li class="{{ Request::is('kategori*') ? 'active' : '' }}">
                <a class="nav-link" href="/kategoris"><i class="fas fa-book">
                    </i> <span>Kategori</span>
                </a>
            </li>
        </ul>

        {{-- <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google
                        Maps</span></a>
                <ul class="dropdown-menu">
                    <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                    <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                    <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                    <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                    <li><a href="gmaps-marker.html">Marker</a></li>
                    <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                    <li><a href="gmaps-route.html">Route</a></li>
                    <li><a href="gmaps-simple.html">Simple</a></li>
                </ul>
            </li> --}}




        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
