<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class SettingController extends Controller
{
    public function index(Setting $setting)
    {
        return view('setting.index', [
            'page' => 'Data Setting',
            'setting' => $setting->first(),
        ]);
    }

    public function update(Request $request, Setting $setting)
    {   
        $navigation = $request->navigation;

        $navigation = array_filter($navigation, function ($e) {
            return !is_null($e);
        });

        $navigation = array_values($navigation);

        $navigation = implode(',', $request->navigation);

        $validatedData = $request->validate([
            'headline' => 'required|max:255',
            'description' => 'required|max:255',
            'button_label' => 'required',
            'navigation_button' => 'required',
        ]);

        $validatedData['navigation'] = $navigation;

        $settingUpdate = $setting->first();
        if ($settingUpdate->update($validatedData)) {
            return redirect('/setting')->with('success', 'Successfully edit data header section!');
        };

        return redirect('/setting')->with('failed', 'Failed edit data header section!');
    }
}
