<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        return view('section.index', [
            'page' => 'Data Section',
        ]);
    }

    public function create()
    {
        return view('section.create', [
            'page' => 'Creatte Section',
        ]);
    }

    public function edit()
    {
        return view('section.edit', [
            'page' => 'Edit Section',
        ]);
    }
}
