<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function index(Request $request)
    {
        if($request->bulan>0){
            $bulan = $request->bulan;
        } else {
            $bulan = date('m');
        }
        if($request->tahun>0){
            $tahun = $request->tahun;
        } else {
            $tahun = date('Y');
        }
        $nama = ['Ghifari', 'Rizki', 'Rama', 'Amel'];
        $tglahir=tanggalAkhir($bulan,$tahun);
        // return $tglahir;
        return view('shift',compact('bulan','tahun','tglahir','nama'));
    }

    public function calculate(Request $request)
    {
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        $nama = ['Ghifari', 'Rizki', 'Rama', 'Amel'];

        $hariPerBulan = [
            1 => 31,
            2 => 28,
            3 => 31,
            4 => 30,
            5 => 31,
            6 => 30,
            7 => 31,
            8 => 31,
            9 => 30,
            10 => 31,
            11 => 30,
            12 => 31,
        ];

        function isKabisat($tahun)
        {
            return ($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0);
        }

        // Perhitungan hari di bulan februari
        if ($bulan == 2 && isKabisat($tahun)) {
            $jumlahHari = 29;
        } else {
            $jumlahHari = $hariPerBulan[$bulan];
        }

        return view('shift', compact('jumlahHari', 'bulan', 'tahun', 'nama'));
    }
}
