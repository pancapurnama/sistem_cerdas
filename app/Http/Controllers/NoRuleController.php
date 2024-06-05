<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\NoRule;
use App\Models\Disease;
use App\Models\History;
use Illuminate\Http\Request;

class NoRuleController extends Controller
{
    public function consul(Request $request)
    {
        $first_id = $request->gejala_1_id;
        $second_id = $request->gejala_2_id;
        $nomor = $request->nomor;
        $antrian = $request->no_antrian;
        if ($nomor == 1) {
            $nomor = 0;
            $antrian = $request->no_antrian + 1;
        }
        if ($second_id == 11) {
            $penyakit = $request->penyakit_id;
            $request['disease_id'] = $penyakit;
            $hasil = Hasil::create($request->all());
            return redirect('/hasil' . '/' . $penyakit . '/' . $antrian);
            // return redirect('/hasil1/' . $first_id);
        }
        // dd($second_id);

        return redirect('/consul' . '/' . $second_id . '/' . $nomor);
    }

    public function hasil($id, $no)
    {
        $hasil = Disease::findOrFail($id);
        $gejala = History::with('gejala')->where('no_antrian', $no)->get();
        // $hasil = NoRule::with('disease')->where('gejala_1_id', $id)->get();

        return view('hasil', ['hasil' => $hasil, 'gejala' => $gejala]);
    }
}
