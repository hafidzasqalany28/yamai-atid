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

        // Memisahkan data berdasarkan english_translation
        $faunaData = $entitasData->where('english_translation', 'Aves')
            ->concat($entitasData->where('english_translation', 'Reptilia'))
            ->concat($entitasData->where('english_translation', 'Mamalia'))
            ->concat($entitasData->where('english_translation', 'Pisces'));

        $floraData = $entitasData->where('english_translation', 'Tumbuhan Berbunga')
            ->concat($entitasData->where('english_translation', 'Tumbuhan Berdaun Lebar'))
            ->concat($entitasData->where('english_translation', 'Tumbuhan Ciri Khusus'));

        // Ambil satu data acak dari setiap kelompok fauna dan flora
        $faunaData = $faunaData->groupBy('english_translation')->map(function ($group) {
            return $group->random(1)->first();
        });

        $floraData = $floraData->groupBy('english_translation')->map(function ($group) {
            return $group->random(1)->first();
        });

        // Hitung jumlah data Fauna dan Flora
        $faunaCount = Entity::where('type', 'fauna')->count();
        $floraCount = Entity::where('type', 'flora')->count();

        // Menghitung jumlah total Fauna dan Flora
        $totalQuantity = $entitasData->sum('quantity');
        $totalVisitors = User::count(); // Gantilah dengan jumlah pengunjung yang sesungguhnya

        return view('home', compact('faunaData', 'floraData', 'faunaCount', 'floraCount', 'totalQuantity', 'totalVisitors'));
    }
}
