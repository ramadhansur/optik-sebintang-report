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
                                <h4 class="text-primary pt-1 mb-0">{{ $jumlahPelanggan }}</h4>
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
                                <h4 class="text-danger pt-1 mb-0">{{ $bulanIni }}</h4>
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
                        <h4 class="mt-0 header-title mb-4">Pelanggan Terbaru</h4>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Jenis</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No. Hp</th>
                                        <th scope="col">Ukuran</th>
                                        <th scope="col">Lensa</th>
                                        <th scope="col">Frame</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">keterangan</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($pelangganTerbaru as $pu => $pelanggan)
                                    @php
                                        $harga = $pelanggan->harga;
                                        $harga = number_format($harga, 0, ',', '.');
                                    @endphp
                                        <tr>
                                            <td>
                                                <b>{{ $no++ }}</b>
                                            </td>
                                            @if (Str::length($pelanggan->nama) > 15)
                                                <td>
                                                    {{Str::limit($pelanggan->nama, 15, "...");}}
                                                </td>
                                            @else
                                                <td>{{ $pelanggan->nama }}</td>
                                            @endif
                                            <td>{{ date('d-F-Y', strtotime($pelanggan->transaksi_date)) }}</td>
                                            <td>{{ $pelanggan->jenis_transaksi }}</td>
                                            <td>
                                                @if ($pelanggan->alamat == null)
                                                    -
                                                @else
                                                    {{ $pelanggan->alamat }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($pelanggan->no_hp == null)
                                                    -
                                                @else
                                                    {{ $pelanggan->no_hp }}
                                                @endif
                                            </td>
                                            <td>{{ $pelanggan->ukuran }}</td>
                                            <td>{{ $pelanggan->lensa }}</td>
                                            <td>{{ $pelanggan->frame }}</td>
                                            <td>Rp.{{ $harga }}</td>
                                            <td>
                                                @if ($pelanggan->keterangan == null)
                                                    -
                                                @else
                                                    {{ $pelanggan->keterangan }}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
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
