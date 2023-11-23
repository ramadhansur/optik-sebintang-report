@extends('master')

@section('title')
Dashboard
@endsection

@section('content')

<div class="content">

    <div class="container-fluid">
        <div class="page-title-box">

            <div class="row align-items-center ">
                <div class="col-md-8">
                    <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Welcome to Optik Sebintang Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page-title -->

        <!-- start top-Contant -->
        <div class="row">
            <div class="col-sm-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center p-1">
                            <div class="col-lg-11">
                                <h5 class="font-16">Semua Pelanggan</h5>
                                <h4 class="text-primary pt-1 mb-0">5000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center p-1">
                            <div class="col-lg-11">
                                <h5 class="font-16">Pelanggan Bulan ini</h5>
                                <h4 class="text-danger pt-1 mb-0">2,480</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end top-Contant -->


        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">Semua Pelanggan</h4>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">No. Hp</th>
                                        <th scope="col">Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- start 1 -->
                                    <tr>
                                        <td>
                                            <b>1.</b>
                                        </td>
                                        <td> <img src="assets/images/users/user-1.jpg" alt="" class="thumb-md rounded-circle mr-2"> Philip Smead</td>
                                        <td>April, 25</td>
                                        <td><span class="badge badge-primary">High</span></td>
                                    </tr>
                                    <!-- end 1 -->

                                    <!-- start 2 -->

                                    <tr>
                                        <td>
                                            <b>2.</b>
                                        </td>
                                        <td><img src="assets/images/users/user-2.jpg" alt="" class="thumb-md rounded-circle mr-2"> Brent Shipley</td>
                                        <td>April, 28</td>
                                        <td><span class="badge badge-danger">Low</span></td>
                                    </tr>

                                    <!-- end 2 -->

                                    <!-- start 3 -->
                                    <tr>
                                        <td>
                                            <b>3.</b>
                                        </td>
                                        <td><img src="assets/images/users/user-3.jpg" alt="" class="thumb-md rounded-circle mr-2">Kevin Ashley</td>
                                        <td>June, 12</td>
                                        <td><span class="badge badge-success">Medium</span></td>
                                    </tr>
                                    <!-- end 3 -->

                                    <!-- start 4 -->
                                    <tr>
                                        <td>
                                            <b>4.</b>
                                        </td>
                                        <td><img src="assets/images/users/user-4.jpg" alt="" class="thumb-md rounded-circle mr-2">Martin Whitmer</td>
                                        <td>June, 28</td>
                                        <td><span class="badge badge-success">Medium</span></td>
                                    </tr>
                                    <!-- end 4 -->

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">Semua Pelanggan</h4>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">No. Hp</th>
                                        <th scope="col">Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- start 1 -->
                                    <tr>
                                        <td>
                                            <b>1.</b>
                                        </td>
                                        <td> <img src="assets/images/users/user-1.jpg" alt="" class="thumb-md rounded-circle mr-2"> Philip Smead</td>
                                        <td>April, 25</td>
                                        <td><span class="badge badge-primary">High</span></td>
                                    </tr>
                                    <!-- end 1 -->

                                    <!-- start 2 -->

                                    <tr>
                                        <td>
                                            <b>2.</b>
                                        </td>
                                        <td><img src="assets/images/users/user-2.jpg" alt="" class="thumb-md rounded-circle mr-2"> Brent Shipley</td>
                                        <td>April, 28</td>
                                        <td><span class="badge badge-danger">Low</span></td>
                                    </tr>

                                    <!-- end 2 -->

                                    <!-- start 3 -->
                                    <tr>
                                        <td>
                                            <b>3.</b>
                                        </td>
                                        <td><img src="assets/images/users/user-3.jpg" alt="" class="thumb-md rounded-circle mr-2">Kevin Ashley</td>
                                        <td>June, 12</td>
                                        <td><span class="badge badge-success">Medium</span></td>
                                    </tr>
                                    <!-- end 3 -->

                                    <!-- start 4 -->
                                    <tr>
                                        <td>
                                            <b>4.</b>
                                        </td>
                                        <td><img src="assets/images/users/user-4.jpg" alt="" class="thumb-md rounded-circle mr-2">Martin Whitmer</td>
                                        <td>June, 28</td>
                                        <td><span class="badge badge-success">Medium</span></td>
                                    </tr>
                                    <!-- end 4 -->

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- container-fluid -->

</div>

@endsection
