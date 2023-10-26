<?php

namespace App\Http\Controllers;

use App\Models\Barcode;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BarcodeController extends Controller
{
    public function index()
    {
        $barcodes = Barcode::all();
        return view('admin.barcodes.index', compact('barcodes'));
    }
}
