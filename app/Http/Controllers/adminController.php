<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use Illuminate\Routing\Controller;

class adminController extends Controller
{
    public function index()
    {
        $totalBerita = Berita::count(); // Menghitung jumlah berita dari model
        $totalGaleri = Galeri::count(); // Menghitung jumlah galeri dari model

        // Menghitung persentase
        $totalData = $totalBerita + $totalGaleri;
        $percentageBerita = ($totalBerita / $totalData) * 100;
        $percentageGaleri = ($totalGaleri / $totalData) * 100;

        return view('admin.index', compact('totalBerita', 'totalGaleri', 'percentageBerita', 'percentageGaleri'));
    }
}
