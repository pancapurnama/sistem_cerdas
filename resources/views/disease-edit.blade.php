@extends ('layouts.mainlayout')
@section('title', 'Edit Disease')
@section('content')

<div class="mt-5 col-5 m-auto">
    <form action="/disease/{{$disease->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="code">Code</label>
            <input type="text" class="form-control" name="code" id="code" value="{{$disease->code}}" required>
        </div>
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$disease->name}}" required>
        </div>
        
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>
</div>
@endsection