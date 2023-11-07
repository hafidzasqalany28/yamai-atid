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

        $faunaData = Entity::with('barcodes')
            ->where('type', 'fauna')
            ->paginate(5);

        $floraData = Entity::with('barcodes')
            ->where('type', 'flora')
            ->paginate(5);

        return view('admin.dashboard', compact('faunaCount', 'floraCount', 'totalVisitors', 'totalQuantity', 'faunaData', 'floraData'));
    }
}
