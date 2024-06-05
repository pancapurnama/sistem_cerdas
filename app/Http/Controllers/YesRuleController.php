<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Hasil;
use App\Models\History;
use App\Models\NoRule;
use App\Models\YesRule;
use Illuminate\Http\Request;

class YesRuleController extends Controller
{
    public function index($gejala_1_id, $no)
    {
        $yesRule = YesRule::with(['disease', 'symptom1', 'symptom2'])->where('gejala_1_id', $gejala_1_id)->get();
        $noRule = NoRule::with(['disease', 'symptom1', 'symptom2'])->where('gejala_1_id', $gejala_1_id)->get();
        $antrian = History::all()->last();

        return view('consul', ['yesRule' => $yesRule, 'noRule' => $noRule, 'no' => $no, 'antrian' => $antrian]);
    }

    public function consul(Request $request)
    {
        $second_id = $request->gejala_2_id;
        $first_id = $request->gejala_1_id;
        $nomor = $request->nomor;
        $antrian = $request->no_antrian;
        if ($nomor == 1) {
            $nomor = 0;
            $antrian = $request->no_antrian + 1;
        }
        $request['no_antrian'] = $antrian;
        $histori = History::create($request->all());

        if ($second_id == 11) {
            $penyakit = $request->penyakit_id;
            $request['disease_id'] = $penyakit;
            $hasil = Hasil::create($request->all());
            return redirect('/hasil' . '/' . $penyakit . '/' . $antrian);
            // return redirect('/hasil/' . $first_id);
        }


        // dd($nomor);

        return redirect('/consul' . '/' . $second_id . '/' . $nomor);
    }

    public function hasil($id, $no)
    {
        $hasil = Disease::findOrFail($id);
        $gejala = History::with('gejala')->where('no_antrian', $no)->get();
        // $hasil = YesRule::with(['disease'])->where('gejala_1_id', $id)->get();

        return view('hasil', ['hasil' => $hasil, 'gejala' => $gejala]);
    }
}
