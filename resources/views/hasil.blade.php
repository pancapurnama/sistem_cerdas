@extends ('layouts.mainlayout')
@section('title', 'Hasil')
@section('content')

<h1>Hasil Konsultasi </h1>

<h2>Daftar Gejala</h2>
<table class="table table-primary table-striped">
   <tr>
       <th>No.</th>
       <th>Gejala</th>
       
   </tr>
   @foreach($gejala as $data)
   <tr>
       <td>{{$loop->iteration}}</td>
       <td>{{$data->gejala->name}}</td>
       
   @endforeach
</table>
   @if ($hasil->code == 'P009')
   <h3>Pasien {{Auth::user()->name}} tidak terdeteksi</h3> 
   @else
   <h3>Pasien {{Auth::user()->name}} terdiagnosa terkena penyakit {{$hasil->name}}</h3> 
   @endif

   


@endsection