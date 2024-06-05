@extends ('layouts.mainlayout')
@section('title', 'Symptom')
@section('content')
<h1>Ini halaman Student</h1>
<div class="my-5 d-flex justify-content-between">
    <a href="symptom-add" class="btn btn-primary">Add Data</a>
</div>

@if (Session::has('status'))
<div class="alert alert-success" role="alert">
    {{Session::get('message')}}
  </div>
@endif

<h3>Disease List</h3>

<div class="my-3 col-12 col-sm-8 col-md-5">
    <form action="" method="get">
        <div class="input-group mb-3">
              <input type="text" class="form-control" name="keyword"  placeholder="keyword">
              <button class="input-group-text btn btn-primary">Search</button>
          </div>
    </form>
</div>
<table class="table table-primary table-striped">
    <tr>
        <th>No.</th>
        <th>Code</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach($symptomList as $data)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data->code}}</td>
        <td>{{$data->name}}</td>
        <td>
            <a href="/symptom-edit/{{$data->id}}">Edit</a>
            <a href="/symptom-delete/{{$data->id}}">Delete</a> 
        </td>
        
    @endforeach
</table>
@endsection