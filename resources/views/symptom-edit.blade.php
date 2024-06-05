@extends ('layouts.mainlayout')
@section('title', 'Edit Symptom')
@section('content')

<div class="mt-5 col-5 m-auto">
    <form action="/symptom/{{$symptom->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="code">Code</label>
            <input type="text" class="form-control" name="code" id="code" value="{{$symptom->code}}" required>
        </div>
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$symptom->name}}" required>
        </div>
        
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>
</div>
@endsection