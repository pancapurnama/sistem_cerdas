<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\SymptomCreateRequest;

class SymptomController extends Controller
{
    public function index()
    {

        $symptom = Symptom::all();
        return view('symptom', ['symptomList' => $symptom]);
    }

    // public function show($slug)
    // {
    //     $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->where('slug', $slug)->first();
    //     return view('student-detail', ['student' => $student]);
    // }

    public function create()
    {
        return view('symptom-add');
    }

    public function store(SymptomCreateRequest $request)
    {

        $symptom = Symptom::create($request->all());

        if ($symptom) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new data success');
        }
        return redirect('/symptoms');
    }

    public function edit($id)
    {
        $symptom = Symptom::findOrFail($id);

        return view('symptom-edit', ['symptom' => $symptom]);
    }

    public function update(Request $request, $id)
    {
        $symptom = Symptom::findOrFail($id);
        $SymptomUpdate = $symptom->update($request->all());
        if ($SymptomUpdate) {
            Session::flash('status', 'success');
            Session::flash('message', 'Update data success');
        }
        return redirect('/symptoms');
    }

    public function delete($id)
    {
        $symptom = Symptom::findOrFail($id);
        return view('symptom-delete', ['symptom' => $symptom]);
    }

    public function destroy($id)
    {
        // $deleteStudent = DB::table('students')->where('id', $id)->delete();
        $deleteSymptom = Symptom::findOrFail($id)->delete();
        if ($deleteSymptom) {
            Session::flash('status', 'success');
            Session::flash('message', 'Delete data success');
        }
        return redirect('/symptoms');
    }
}
