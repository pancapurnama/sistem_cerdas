@extends ('layouts.mainlayout')
@section('title', 'Symptom Delete')
@section('content')

<div class="mt-5">
    <h2>Are you sure Delete Data : {{$symptom->name}} ({{$symptom->code}})</h2>
    <form style="display : inline-block" action="/symptom-destroy/{{$symptom->id}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    
    <a href="/diseases" class="btn btn-primary">Cancel</a>
</div>
@endsection