<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Entity;
use App\Models\Barcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $faunaCount = Entity::where('type', 'fauna')->count();
        $floraCount = Entity::where('type', 'flora')->count();
        $totalVisitors = User::where('role', 'pengunjung')->count();
        $totalQuantity = Entity::sum('quantity');

        $faunaData = Barcode::where('entity_type', 'Fauna')->paginate(3);

        // Ambil data Flora dari tabel barcodes
        $floraData = Barcode::where('entity_type', 'Flora')->paginate(3);

        return view('admin.dashboard', compact('faunaCount', 'floraCount', 'totalVisitors', 'totalQuantity', 'faunaData', 'floraData'));
    }
}
