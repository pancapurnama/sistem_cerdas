@extends ('layouts.mainlayout')
@section('title', 'Add New Symtom')
@section('content')

<div class="mt-5 col-8 m-auto">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="symptom" method="POST">
        @csrf
        <div class="mb-3">
            <label for="code">Code</label>
            <input type="text" class="form-control" name="code" id="code" >
        </div>
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" >
        </div>
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </form>
</div>
@endsection