@extends ('layouts.mainlayout')
@section('title', 'consultation')
@section('content')


<div class="mt-5 d-flex justify-content-center align-items-center flex-column" >
    
    @foreach ($yesRule as $item)
    <h2>Apakah Anda Memiliki Gejala : {{$item->symptom1->name}} </h2>
    <div class="d-flex mt-5">
        <form action="/consul" method="post" style="margin-right: 10px">
            @csrf
            <input type="hidden" name="symptom_id" value="{{$item->symptom1->id}}">
            <input type="hidden" name="gejala_2_id" value="{{$item->symptom2->id}}">
            <input type="hidden" name="penyakit_id" value="{{$item->disease->id}}">
            <input type="hidden" name="nomor" value="{{$no}}" >
            
            @if ($antrian == '')
            <input type="hidden" name="no_antrian" value="1" >
            @else
            <input type="hidden" name="no_antrian" value="{{$antrian->no_antrian}}" >
            @endif
            
            <input type="hidden" name="pasien_id" value=" {{Auth::user()->id}}" >
            <button type="submit" class="btn btn-primary">Ya</button>
        </form>
        @endforeach

        @foreach ($noRule as $item)
        <form action="/consul1" method="POST" >
            @csrf
            <button type="submit" class="btn btn-danger">Tidak</button>
            <input type="hidden" name="gejala_1_id" value="{{$item->symptom1->id}}">
            <input type="hidden" name="gejala_2_id" value="{{$item->symptom2->id}}">
            <input type="hidden" name="penyakit_id" value="{{$item->disease->id}}">
            <input type="hidden" name="nomor" value="{{$no}}" >
            
            @if ($antrian == '')
            <input type="hidden" name="no_antrian" value="1" >
            @else
            <input type="hidden" name="no_antrian" value="{{$antrian->no_antrian}}" >
            @endif
            
            <input type="hidden" name="pasien_id" value=" {{Auth::user()->id}}" >
        
         </form>
         @endforeach
    </div>
    

    
</div>

@endsection