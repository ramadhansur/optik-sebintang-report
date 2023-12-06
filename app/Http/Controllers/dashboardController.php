<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Models\pelangganModel;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelangganTerbaru = pelangganModel::latest()->take(5)->get();

        //menghitung jumlah semua data pelanggan
        $jumlahPelanggan = pelangganModel::count();

        //menghitung jumlah bulan ini
        $bulanIni = pelangganModel::whereMonth('transaksi_date', date('m'))->count();

        return view('pages.dashboard', compact('pelangganTerbaru', 'jumlahPelanggan', 'bulanIni'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
