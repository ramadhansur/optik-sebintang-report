@extends('master')

@section('title')
Pelanggan BPJS
@endsection

@section('content')

<div class="content">

    <div class="container-fluid">
        <div class="page-title-box">

            <div class="row align-items-center ">
                <div class="col-md-8">
                    <div class="page-title-box">
                        <h4 class="page-title">Pelanggan BPJS</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Halaman Data Pelanggan BPJS</li>
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
                                <h5 class="font-16">Pelanggan Umum</h5>
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
                                <h5 class="font-16">Pelanggan BPJS</h5>
                                <h4 class="text-success pt-1 mb-0">2,480</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end top-Contant -->


        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">Pelanggan Umum</h4>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No. Hp</th>
                                        <th scope="col">Ukuran</th>
                                        <th scope="col">Lensa</th>
                                        <th scope="col">Frame</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col" class="col-3">keterangan</th>
                                        <th scope="col" class="col-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <b>1.</b>
                                        </td>
                                        <td>April, 25</td>
                                        <td>Philip Smead</td>
                                        <td>Malang</td>
                                        <td>081358445612</td>
                                        <td>R/L : +125</td>
                                        <td>Sv cr mc</td>
                                        <td>P.6318</td>
                                        <td>Rp. 100.000</td>
                                        <td>sfsdfsafasdf asfasdfadsfasdfasd asdfasdfasdfasdfasdfasd asdfasdfasdfsdfasdfas asdf asdfasdfasdfasd asdf ad fdfasdfasdf</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-center">Detail</a>
                                            <a href="#" class="btn btn-success btn-sm">Ubah</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b>1.</b>
                                        </td>
                                        <td>April, 25</td>
                                        <td>Philip Smead</td>
                                        <td>Malang</td>
                                        <td>081358445612</td>
                                        <td>R/L : +125</td>
                                        <td>Sv cr mc</td>
                                        <td>P.6318</td>
                                        <td>Rp. 100.000</td>
                                        <td>-</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-center">Detail</a>
                                            <a href="#" class="btn btn-success btn-sm">Ubah</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b>1.</b>
                                        </td>
                                        <td>April, 25</td>
                                        <td>Philip Smead</td>
                                        <td>Malang</td>
                                        <td>081358445612</td>
                                        <td>R/L : +125</td>
                                        <td>Sv cr mc</td>
                                        <td>P.6318</td>
                                        <td>Rp. 100.000</td>
                                        <td>-</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-center">Detail</a>
                                            <a href="#" class="btn btn-success btn-sm">Ubah</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b>1.</b>
                                        </td>
                                        <td>April, 25</td>
                                        <td>Philip Smead</td>
                                        <td>Malang</td>
                                        <td>081358445612</td>
                                        <td>R/L : +125</td>
                                        <td>Sv cr mc</td>
                                        <td>P.6318</td>
                                        <td>Rp. 100.000</td>
                                        <td>-</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-center">Detail</a>
                                            <a href="#" class="btn btn-success btn-sm">Ubah</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>

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

<!-- Modal -->
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Center modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                </p>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


@endsection
