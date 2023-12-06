@php
    $user = Auth::user();
@endphp
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="{{ route('admin.dashboard.index') }}" class="logo">
            <img src="{{ asset('assets/images/optik1.svg') }}" class="logo-lg" alt="" height="22">
            <img src="{{ asset('assets/images/optik2.svg') }}" class="logo-sm" alt="" height="24">
        </a>
    </div>

    <nav class="navbar-custom">
        <ul class="navbar-right list-inline float-right mb-0">

            <!-- full screen -->
            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                    <i class="fas fa-expand noti-icon"></i>
                </a>
            </li>

            <li class="dropdown notification-list list-inline-item">
                <div class="dropdown notification-list nav-pro-img">
                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                        <!-- item-->
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEditProfile{{ $user->id }}">
                            <i class="mdi mdi-account-circle"></i>
                            {{ $user->name }}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i class="mdi mdi-power text-danger"></i> Logout</a>
                    </div>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
        </ul>

    </nav>

</div>

<!-- Modal edit -->
<div class="modal fade bs-example-modal-center" id="modalEditProfile{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/user/update', $user->id ) }}" method="post">
                    @csrf
                    {{-- <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ $user->name }}" required > --}}
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="{{ $user->username }}" required>
                    <label for="">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" required>
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" id="password">
                    <small class="text-danger">* Kosongkan password jika tidak ingin merubah password</small>

                    <hr>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
