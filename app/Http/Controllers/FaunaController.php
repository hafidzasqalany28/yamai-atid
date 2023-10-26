<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Http\Request;

class FaunaController extends Controller
{
    public function index()
    {
        $faunaData = Entity::where('type', 'fauna')->get();
        return view('our-fauna', compact('faunaData'));
    }
    public function show($id)
    {
        $fauna = Entity::find($id);
        return view('fauna-show', compact('fauna'));
    }
}
