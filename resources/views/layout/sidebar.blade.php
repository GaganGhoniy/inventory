<div id="left-sidebar" class="sidebar">
        <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
        <div class="navbar-brand">
                <a href="{{route('dashboard.index')}}"><img src="{{ asset('assets/images/Logo Dakonan.png') }}" alt="Mooli Logo"
                                class="img-fluid logo"><span>{{ config('app.name') }} Dakonan Mas</span></a>
                <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i
                                class="fa fa-close"></i></button>
        </div>
        <div class="sidebar-scroll">
                <div class="user-account">
                        <div class="user_div">
                                <img src="{{ asset('assets/images/user.png') }}" class="user-photo"
                                        alt="User Profile Picture">
                        </div>
                        <div class="dropdown">
                                <span>{{ Auth::user()->getRoleNames()[0] }},</span>
                                <a href="javascript:void(0);" class="dropdown-toggle user-name"
                                        data-toggle="dropdown"><strong>{{ Auth::user()->name }}</strong></a>
                                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                                        <li><a href="{{route('users.profile')}}"><i class="fa fa-user"></i>My
                                                        Profile</a></li>
                                        {{-- <li><a href="{{route('apps.inbox')}}"><i
                                                                class="fa fa-envelope"></i>Messages</a>
                                        </li>
                                        <li><a href="{{route('pages.settings')}}"><i class="fa fa-gear"></i>Settings</a>
                                        </li> --}}
                                        <li class="divider"></li>
                                        <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                        class="icon-menu"><i class="fa fa-power-off"></i>Log Out</a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                {{ csrf_field() }}
                                        </form>
                                </ul>
                        </div>
                </div>
                <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu animation-li-delay">
                                <li class="header">Main</li>
                                <li class="{{ Request::segment(1) === 'dashboard' ? 'active' : null }}"><a
                                                href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>
                                                <span>Beranda</span></a>
                                </li>
                                @hasanyrole('root admin|super admin|Karyawan Divisi Gudang')
                                <li class="{{ Request::segment(1) === 'users' ? 'active' : null }}">
                                        <a href="#uiElements" class="has-arrow"><i
                                                        class="fa fa-diamond"></i><span>Kelola Administrasi</span></a>
                                        <ul>
                                                <li class="{{ Request::segment(2) === 'user' ? 'active' : null }}"><a
                                                                href="{{route('users.user')}}">Pengguna</a></li>
                                                <li class="{{ Request::segment(2) === 'role' ? 'active' : null }}"><a
                                                                href="{{route('users.role')}}">Peran</a></li>
                                        </ul>
                                </li>
                                @endhasanyrole
                                @hasanyrole('root admin|super admin|Karyawan Divisi Gudang|Kepala Divisi Gudang')
                                <li class="{{ Request::segment(1) === 'master' ? 'active' : null }}">
                                        <a href="#uiElements" class="has-arrow"><i class="fa fa-diamond"></i><span>Data
                                                        Master</span></a>
                                        <ul>
                                                <li class="{{ Request::segment(2) === 'kategori' ? 'active' : null }}">
                                                        <a href="{{route('master.kategori')}}">Kategori</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'merk' ? 'active' : null }}"><a
                                                                href="{{route('master.merk')}}">Merk Barang</a></li>
                                                <li class="{{ Request::segment(2) === 'supliyer' ? 'active' : null }}">
                                                        <a href="{{route('master.supliyer')}}">Data Supplier</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'barang' ? 'active' : null }}"><a
                                                                href="{{route('master.barang')}}">Data Barang</a></li>
                                        </ul>
                                </li>
                                @endhasanyrole
                                @hasanyrole('root admin|super admin|Kepala Divisi Gudang|Divisi Logistik|Karyawan Divisi Gudang|Divisi Marketing|Divisi Administrasi')
                                <li class="{{ Request::segment(1) === 'transaksi' ? 'active' : null }}">
                                        <a href="#uiElements" class="has-arrow"><i
                                                        class="fa fa-diamond"></i><span>Transaksi</span></a>
                                        <ul>
                                                @hasanyrole('root admin|super admin|Kepala Divisi Gudang|Karyawan Divisi Gudang|Divisi Marketing|Divisi Logistik|Divisi Administrasi')
                                                <li class="{{ Request::segment(2) === 'masuk' ? 'active' : null }}"><a
                                                                href="{{route('transaksi.masuk')}}">Barang Masuk</a>
                                                </li>
                                                @endhasanyrole
                                                @hasanyrole('root admin|super admin|Kepala Divisi Gudang|Divisi Logistik|Karyawan Divisi Gudang|Divisi Marketing|Divisi Administrasi')
                                                <li class="{{ Request::segment(2) === 'keluar' ? 'active' : null }}"><a
                                                                href="{{route('transaksi.keluar')}}">Barang Keluar</a>
                                                </li>
                                                @endhasanyrole
                                        </ul>
                                </li>
                                @endhasanyrole
                                @hasanyrole('root admin|super admin|Kepala Divisi Gudang|Karyawan Divisi Gudang|Divisi Marketing|Divisi Administrasi')
                                <li class="{{ Request::segment(1) === 'laporan' ? 'active' : null }}">
                                        <a href="#uiElements" class="has-arrow"><i
                                                        class="fa fa-diamond"></i><span>Laporan Transaksi</span></a>
                                        <ul>@hasanyrole('root admin|super admin|Kepala Divisi Gudang|Karyawan Divisi Gudang|Divisi Marketing|Divisi Administrasi')
                                                <li class="{{ Request::segment(2) === 'masuk' ? 'active' : null }}"><a
                                                                href="{{route('laporan.masuk')}}">Laporan Barang
                                                                Masuk</a>
                                                </li>
                                                @endhasanyrole
                                                @hasanyrole('root admin|super admin|Kepala Divisi Gudang|Divisi Administrasi|Divisi Marketing|Karyawan Divisi Gudang')
                                                <li class="{{ Request::segment(2) === 'keluar' ? 'active' : null }}"><a
                                                                href="{{route('laporan.keluar')}}">Laporan Barang
                                                                Keluar</a>
                                                </li>
                                                @endhasanyrole
                                                @hasanyrole('root admin|super admin|Kepala Divisi Gudang|Karyawan Divisi Gudang|Divisi Marketing|Divisi Administrasi')
                                                <li class="{{ Request::segment(2) === 'transaksi' ? 'active' : null }}">
                                                        <a href="{{route('laporan.transaksi')}}">Laporan Transaksi
                                                                Barang</a>
                                                </li>

                                                <li
                                                        class="{{ Request::segment(2) === 'persediaan' ? 'active' : null }}">
                                                        <a href="{{route('laporan.persediaan')}}">Laporan Persediaan
                                                                Barang</a>
                                                </li>

                                                <li class="{{ Request::segment(2) === 'restok' ? 'active' : null }}">
                                                        <a href="{{route('laporan.restok')}}">Laporan Barang Re-Stok
                                                        </a>
                                                </li>
                                                @endhasanyrole
                                        </ul>
                                </li>
                                @endhasanyrole

                                {{-- @include('layout.side') --}}
                        </ul>
                </nav>
        </div>
</div>