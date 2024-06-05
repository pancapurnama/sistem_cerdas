@extends ('layouts.mainlayout')
@section('title', 'Disease')
@section('content')
<h1>halaman User</h1>
<div class="my-5 d-flex justify-content-between">
    <a href="#" class="btn btn-primary">Add Data</a>
</div>

@if (Session::has('status'))
<div class="alert alert-success" role="alert">
    {{Session::get('message')}}
  </div>
@endif

<h3>User List</h3>

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
        <th>Name</th>
        <th>Email</th>
        <th>Level</th>
        <th>Action</th>
    </tr>
    @foreach($user as $data)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->level}}</td>
        <td>
            <a href="#">Edit</a>
            <a href="#">Delete</a> 
        </td>
        
    @endforeach
</table>
@endsection