@extends('master')

@section('title')
Tansaksi Baru
@endsection

@section('content')

<div class="content">

    <div class="container-fluid">
        <div class="page-title-box">

            <div class="row align-items-center ">
                <div class="col-md-8">
                    <div class="page-title-box">
                        <h4 class="page-title">Transaksi Baru</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page-title -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Form Transaksi</h4>
                        <p class="sub-title">Tanda <span class="text-danger">*</span> wajib di isi</p>

                        <form action="{{ route('admin.transaksi.store') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Jenis Pelayanan</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_transaksi" id="flexRadioDefault1" value="Umum" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          Umum
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_transaksi" id="flexRadioDefault2" value="BPJS">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          BPJS
                                        </label>
                                      </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">tanggal transaksi <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="date" id="example-text-input" name="transaksi_date" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama Pelanggan <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="example-text-input" name="nama" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="floatingTextarea" name="alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">No Telepon</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="example-text-input" placeholder="081234567890" name="no_hp" data-parsley-type="number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Ukuran <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="example-text-input" name="ukuran" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Lensa <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="example-text-input" name="lensa" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Frame <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="example-text-input" name="frame" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">harga <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" id="example-text-input" name="harga" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="floatingTextarea" name="keterangan"></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                        Kirim
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

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
