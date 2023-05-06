<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

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

        if (Section::create($validatedData)) {
            return redirect('/data-section')->with('success', 'Successfully create new data section!');
        };

        return redirect('/data-section')->with('failed', 'Failed create new data section!');
    }

    public function edit(String $id, Section $section)
    {
        return view('section.edit', [
            'page' => 'Edit Section',
            'section' => $section->findOrFail($id),
        ]);
    }

    public function update(Request $request, Section $section, String $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        if (Section::findOrFail($id)->update($validatedData)) {
            return redirect('/data-section')->with('success', 'Successfully edit data section!');
        };

        return redirect('/data-section')->with('failed', 'Failed edit data section!');
    }

    public function destroy(String $id)
    {
        if (Section::findOrFail($id)->delete()) {
            return redirect('/data-section')->with('success', 'Successfully delete data section!');
        };

        return redirect('/data-section')->with('failed', 'Failed delete data section!');
    }
}
