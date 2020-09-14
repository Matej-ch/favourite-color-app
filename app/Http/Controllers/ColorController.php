<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = \Auth::user()->colors()->get();

        return view('colors.index',[
            'colors' => $colors
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit(Color $color)
    {

    }

    public function update(Request $request, Color $color)
    {

    }

    public function destroy(Request $request, Color $color)
    {

    }
}
