<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Http\Request;

class FloraController extends Controller
{
    public function index()
    {
        $floraData = Entity::where('type', 'Flora')->get();
        return view('our-flora', compact('floraData'));
    }

    public function show($id)
    {
        $flora = Entity::findOrFail($id);
        return view('flora-show', compact('flora'));
    }
}
