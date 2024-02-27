<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurss;

class KurssController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'nosaukums' => 'required|max:256', //
            'teksts' => 'required', //
            'banera_adrese' => 'required', //
            'cilveku_skaits' => 'required|integer', //
        ]);
        return response()->json(Kurss::create($validated));
    }

    public function index() {
        return response() ->json(Kurss::all());
    }
}
