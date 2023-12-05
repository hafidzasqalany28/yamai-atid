<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Http\Request;

class FloraController extends Controller
{
    public function index()
    {
        $floraData = Entity::where('type', 'Flora')->get();

        $groupedFlora = $floraData->groupBy('english_translation');

        return view('our-flora', compact('groupedFlora'));
    }

    public function show($id)
    {
        // Mendapatkan data Flora berdasarkan ID
        $flora = Entity::findOrFail($id);

        return view('flora-show', compact('flora'));
    }
}
