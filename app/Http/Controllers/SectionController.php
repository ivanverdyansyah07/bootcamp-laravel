<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(Section $section)
    {
        return view('section.index', [
            'page' => 'Data Section',
            'sections' => $section->all(),
        ]);
    }

    public function create()
    {
        return view('section.create', [
            'page' => 'Create Section',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        Section::create($validatedData);

        return redirect('/data-section')->with('success', 'Successfully create new data section!');
    }

    public function edit()
    {
        return view('section.edit', [
            'page' => 'Edit Section',
        ]);
    }
}
