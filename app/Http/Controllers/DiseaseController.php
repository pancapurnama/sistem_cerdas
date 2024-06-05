<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\DiseaseCreateRequest;

class DiseaseController extends Controller
{
    public function index()
    {

        $disease = Disease::all();
        return view('disease', ['diseaseList' => $disease]);
    }

    // public function show($slug)
    // {
    //     $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->where('slug', $slug)->first();
    //     return view('student-detail', ['student' => $student]);
    // }

    public function create()
    {
        return view('disease-add');
    }

    public function store(DiseaseCreateRequest $request)
    {

        $disease = Disease::create($request->all());

        if ($disease) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new data success');
        }
        return redirect('/diseases');
    }

    public function edit($id)
    {
        $disease = Disease::findOrFail($id);

        return view('disease-edit', ['disease' => $disease]);
    }

    public function update(Request $request, $id)
    {
        $disease = Disease::findOrFail($id);
        $DiseaseUpdate = $disease->update($request->all());
        if ($DiseaseUpdate) {
            Session::flash('status', 'success');
            Session::flash('message', 'Update data success');
        }
        return redirect('/diseases');
    }

    public function delete($id)
    {
        $disease = Disease::findOrFail($id);
        return view('disease-delete', ['disease' => $disease]);
    }

    public function destroy($id)
    {
        // $deleteStudent = DB::table('students')->where('id', $id)->delete();
        $deleteDisease = Disease::findOrFail($id)->delete();
        if ($deleteDisease) {
            Session::flash('status', 'success');
            Session::flash('message', 'Delete data success');
        }
        return redirect('/diseases');
    }
}
