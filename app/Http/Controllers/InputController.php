<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\input;

class InputController extends Controller
{

    public function index(){
        $input = input::all();
        return view('dashboard', ['input' => $input]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'riderName' => 'required',
            'formName' => 'required',
            'rate' => 'required|integer|min:1, max:5',
            'image' => 'required|mimes:jpg,jpeg,png'
        ]);

        $image = $request->file('image');
        if ($image) {
            $imageBase64 = base64_encode(file_get_contents($image));
        } else {
            $imageBase64 = null; 
        }

        input::create([
            'riderName' => $request->riderName,
            'formName' => $request->formName,
            'rate' => $request->rate,
            'image' => $imageBase64
        ]);

        return redirect('/dashboard')->with('success', 'Henshin!');
    }
}
