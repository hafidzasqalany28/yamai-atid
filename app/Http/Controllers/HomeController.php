<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Mengambil semua data dari tabel entitas
        $entitasData = Entity::all();

        // Memisahkan data berdasarkan tipe (Flora atau Fauna)
        $faunaData = $entitasData->where('type', 'Fauna');
        $floraData = $entitasData->where('type', 'Flora');

        // Hitung jumlah data Fauna dan Flora
        $faunaCount = $faunaData->count();
        $floraCount = $floraData->count();

        // Menghitung jumlah total Fauna dan Flora
        $totalQuantity = $entitasData->sum('quantity');
        $totalVisitors = User::count(); // Gantilah dengan jumlah pengunjung yang sesungguhnya

        return view('home', compact('faunaData', 'floraData', 'faunaCount', 'floraCount', 'totalQuantity', 'totalVisitors'));
    }
}
