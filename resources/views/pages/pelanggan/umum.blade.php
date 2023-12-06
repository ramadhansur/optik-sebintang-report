@extends('master')

@section('title')
Pelanggan Umum
@endsection

@section('content')

<div class="content">

    <div class="container-fluid">
        <div class="page-title-box">

            <div class="row align-items-center ">
                <div class="col-md-8">
                    <div class="page-title-box">
                        <h4 class="page-title">Pelanggan Umum</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Halaman Data Pelanggan Umum</li>
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
                                <h4 class="text-primary pt-1 mb-0">{{ $jumlahUmum }}</h4>
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
                                <h4 class="text-success pt-1 mb-0">{{ $jumlahBpjs }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end top-Contant -->


        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Data Pelanggan Umum</h4>
                        <p class="sub-title"></p>

                        <div class="row">
                            <div class="col-sm-11">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Jenis</th>
                                            <th>Alamat</th>
                                            <th>No. Hp</th>
                                            <th>Ukuran</th>
                                            <th>Lensa</th>
                                            <th>Frame</th>
                                            <th>Harga</th>
                                            <th>keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($pelanggan as $pu => $pelumum)
                                        @php
                                            $harga = $pelumum->harga;
                                            $harga = number_format($harga, 0, ',', '.');
                                        @endphp
                                            <tr>
                                                <td>
                                                    <b>{{ $no++ }}</b>
                                                </td>
                                                @if (Str::length($pelumum->nama) > 15)
                                                    <td>
                                                        {{Str::limit($pelumum->nama, 15, "...");}}
                                                    </td>
                                                @else
                                                    <td>{{ $pelumum->nama }}</td>
                                                @endif
                                                <td>{{ date('d-F-Y', strtotime($pelumum->transaksi_date)) }}</td>
                                                <td>{{ $pelumum->jenis_transaksi }}</td>
                                                <td>
                                                    @if ($pelumum->alamat == null)
                                                        -
                                                    @else
                                                        {{ $pelumum->alamat }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($pelumum->no_hp == null)
                                                        -
                                                    @else
                                                        {{ $pelumum->no_hp }}
                                                    @endif
                                                </td>
                                                <td>{{ $pelumum->ukuran }}</td>
                                                <td>{{ $pelumum->lensa }}</td>
                                                <td>{{ $pelumum->frame }}</td>
                                                <td>Rp.{{ $harga }}</td>
                                                <td>
                                                    @if ($pelumum->keterangan == null)
                                                        -
                                                    @else
                                                        {{ $pelumum->keterangan }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalShow{{ $pelumum->id }}">Detail</a>
                                                    <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalEdit{{ $pelumum->id }}">Ubah</a>
                                                    <a href="pelangganumum/delete/" class="btn btn-danger btn-sm" id="delete" data-id="{{ $pelumum->id }}" data-name="{{ $pelumum->nama }}">Hapus</a>
                                                </td>
                                            </tr>

                                            <!-- Modal edit -->
                                            <div class="modal fade bs-example-modal-center" id="modalEdit{{ $pelumum->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0">Ubah Data Pelanggan</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ url('admin/pelangganumum/update', $pelumum->id) }}" method="post">
                                                                @csrf
                                                                <label for="">Nama</label>
                                                                <input type="text" class="form-control" name="nama" id="nama" value="{{ $pelumum->nama }}" required>
                                                                <label for="">Tanggal Transaksi</label>
                                                                <input type="date" class="form-control" name="transaksi_date" id="transaksi_date" value="{{ $pelumum->transaksi_date }}" required>
                                                                <label for="">Jenis</label>
                                                                <input type="text" class="form-control" name="jenis_transaksi" id="jenis" value="{{ $pelumum->jenis_transaksi }}" readonly>
                                                                <label for="">Alamat</label>
                                                                <textarea class="form-control" name="alamat" id="alamat">{{ $pelumum->alamat }}</textarea>
                                                                <label for="">No. Hp</label>
                                                                <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{ $pelumum->no_hp }}">
                                                                <label for="">Ukuran</label>
                                                                <input type="text" class="form-control" name="ukuran" id="ukuran" value="{{ $pelumum->ukuran }}" required>
                                                                <label for="">Lensa</label>
                                                                <input type="text" class="form-control" name="lensa" id="lensa" value="{{ $pelumum->lensa }}" required>
                                                                <label for="">Frame</label>
                                                                <input type="text" class="form-control" name="frame" id="frame" value="{{ $pelumum->frame }}" required>
                                                                <label for="">Harga</label>
                                                                <input type="number" class="form-control" name="harga" id="harga" value="{{ $pelumum->harga }}" required>
                                                                <label for="">Keterangan</label>
                                                                <textarea class="form-control" name="keterangan" id="keterangan">{{ $pelumum->keterangan }}</textarea>

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

                                            <!-- Modal show -->
                                            <div class="modal fade bs-example-modal-center" id="modalShow{{ $pelumum->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0">Detail Pelanggan</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <label for="">Nama</label>
                                                            <input type="text" class="form-control" id="nama" value="{{ $pelumum->nama }}" readonly>
                                                            <label for="">Tanggal</label>
                                                            <input type="text" class="form-control" id="tanggal" value="{{ $pelumum->transaksi_date }}" readonly>
                                                            <label for="">Jenis</label>
                                                            <input type="text" class="form-control" id="jenis" value="{{ $pelumum->jenis_transaksi }}" readonly>
                                                            <label for="">Alamat</label>
                                                            @if ($pelumum->alamat == null)
                                                                <textarea class="form-control" id="alamat" readonly>-</textarea>
                                                            @else
                                                                <textarea class="form-control" id="alamat" readonly>{{ $pelumum->alamat }}</textarea>
                                                            @endif
                                                            <label for="">No. Hp</label>
                                                            @if ($pelumum->no_hp == null)
                                                                <input type="text" class="form-control" id="no_hp" value="-" readonly>
                                                            @else
                                                                <input type="text" class="form-control" id="no_hp" value="{{ $pelumum->no_hp }}" readonly>
                                                            @endif
                                                            <label for="">Ukuran</label>
                                                            <input type="text" class="form-control" id="ukuran" value="{{ $pelumum->ukuran }}" readonly>
                                                            <label for="">Lensa</label>
                                                            <input type="text" class="form-control" id="lensa" value="{{ $pelumum->lensa }}" readonly>
                                                            <label for="">Frame</label>
                                                            <input type="text" class="form-control" id="frame" value="{{ $pelumum->frame }}" readonly>
                                                            <label for="">Harga</label>
                                                            <input type="text" class="form-control" id="harga" value="{{ $pelumum->harga }}" readonly>
                                                            <label for="">Keterangan</label>
                                                            @if ($pelumum->keterangan == null)
                                                                <textarea class="form-control" id="keterangan" readonly>-</textarea>
                                                            @else
                                                                <textarea class="form-control" id="keterangan" readonly>{{ $pelumum->keterangan }}</textarea>
                                                            @endif

                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
    <!-- container-fluid -->
</div>

<!-- Modal show -->
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
                <label for="">Nama</label>
                <input type="text" class="form-control" id="nama" readonly>
                <label for="">Tanggal</label>
                <input type="text" class="form-control" id="tanggal" readonly>
                <label for="">Jenis</label>
                <input type="text" class="form-control" id="jenis" readonly>
                <label for="">Alamat</label>
                <textarea class="form-control" id="alamat" readonly></textarea>
                <label for="">No. Hp</label>
                <input type="text" class="form-control" id="no_hp" readonly>
                <label for="">Ukuran</label>
                <input type="text" class="form-control" id="ukuran" readonly>
                <label for="">Lensa</label>
                <input type="text" class="form-control" id="lensa" readonly>
                <label for="">Frame</label>
                <input type="text" class="form-control" id="frame" readonly>
                <label for="">Harga</label>
                <input type="text" class="form-control" id="harga" readonly>
                <label for="">Keterangan</label>
                <textarea class="form-control" id="keterangan" readonly></textarea>

                <hr>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


@endsection
