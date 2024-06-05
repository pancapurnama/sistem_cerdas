<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index()
    {
        $hasil = Hasil::with(['disease', 'user'])->get();
        return view('pasiens', ['hasil' => $hasil]);
    }
}
