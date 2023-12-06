
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('admin.dashboard.index') }}" class="waves-effect">
                        <i class="dripicons-meter"></i> <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.transaksi.create') }}" class="waves-effect">
                        <i class="ion ion-md-basket"></i> <span> Transaksi Baru </span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-people"></i><span> Pelanggan <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.pelangganumum.index') }}">Umum</a></li>
                        <li><a href="{{ route('admin.pelangganbpjs.index') }}">BPJS</a></li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
