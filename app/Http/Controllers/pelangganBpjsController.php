<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Models\pelangganModel;

class pelangganBpjsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = pelangganModel::where('jenis_transaksi', 'BPJS')->get();
        $pelangganLengkap = pelangganModel::where('jenis_transaksi', 'BPJS')->get();

        //simpan tanggal dari $pelanggan dengan format tanggal bulan tahun menggunakan carbon
        $tanggal = $pelangganLengkap->pluck('transaksi_date')->map(function ($item) {
            return Carbon::parse($item)->format('d F Y');
        });

        //menghitung jumlah data pelanggan Umum
        $jumlahUmum = pelangganModel::where('jenis_transaksi', 'Umum')->count();

        //menghitung jumlah data pelanggan BPJS
        $jumlahBpjs = pelangganModel::where('jenis_transaksi', 'BPJS')->count();

        return view('pages.pelanggan.bpjs', compact('pelanggan', 'tanggal', 'jumlahUmum', 'jumlahBpjs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = pelangganModel::findorfail($id);
        $data->update($request->all());

        return redirect()->route('admin.pelangganbpjs.index')->with('success', 'Data Pelanggan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete data pelanggan
        pelangganModel::destroy($id);

        //return dengan sweet alert dan kembali ke halaman sebelumnya
        return redirect()->back()->with('success', 'Data Pelanggan Berhasil Dihapus');
    }
}
