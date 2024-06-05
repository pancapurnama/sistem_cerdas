@extends ('layouts.mainlayout')
@section('title', 'Home')
@section('content')
<h1>Penyakit Infeksi</h1>

<h2>Selamat datang User {{Auth::user()->name}} sebagai {{Auth::user()->level}}</h2>

<p>
    Penyakit infeksi merupakan satu kumpulan jenis-jenis penyakit yang mudah menyerang anak-anak yang disebabkan oleh infeksi virus, infeksi bakteri, dan infeksi parasit [1]. Penyakit infeksi merupakan salah satu masalah kesehatan yang paling utama di negara-negara berkembang termasuk Indonesia. Berdasarkan Survei Kesehatan Rumah Tangga Tahun 2007, penyebab utama kematian antara lain 28,1 % disebabkan oleh penyakit infeksi dan parasit, 18,9 % disebabkan oleh penyakit vaskuler, dan 15,7% disebabkan oleh penyakit pernapasan [2]. Hal lain yang juga menjadi pertimbangan adalah banyaknya angka kematian pada anak Indonesia yaitu lebih dari 200 anak meninggal per 100.000 angka kelahiran. Angka ini masih jauh dari MDGs (Millennium Development Goals) Negara Indonesia di tahun 2015 yaitu 102 per 100.000 kelahiran 
</p>

<p>
    Penyakit diare, demam tifoid, demam berdarah, infeksi saluran pernapasan atas (influenza, radang amandel, radang tenggorokan), radang paru-paru, dan demam yang belum diketahui penyebabnya (observasi febris) merupakan penyakit infeksi yang termasuk ke dalam 10 penyakit terbanyak rumah sakit di Indonesia. Sedangkan penyakit lainnya antara lain: dispepsi (gangguan tidak nyaman pada perut), hipertensi (darah tinggi), penyakit apendiks (usus buntu) dan gastritis (nyeri lambung) [4]. Hal ini menunjukkan bahwa penyakit infeksi harus cepat didiagnosis dan ditangani agar tidak semakin parah. Namun demikian jumlah dokter spesialis di Indonesia belum mencukupi. Terutama spesialis anak, kandungan dan kebidanan, bedah, penyakit dalam, anestesi dan rehabilitasi medik [5]. Kebutuhan dokter spesialis di tahun 2014 berjumlah 29.452, padahal ketersediaan pada tahun 2013 hanya 20.602 dokter spesialis [6].
</p>

<p>
    Permasalahan lain terjadi pada pendistribusian dokter yang tidak merata. Pusat-pusat distribusi dokter adalah di Pulau Jawa dan Bali serta di Provinsi Sumatera Utara dan Sulawesi Selatan. Menurut kepala Badan Pengembangan dan Pemberdayaan SDM Kesehatan Kementrian Kesehatan tahun 2010, Bambang Giatno, hingga tahun 2010 diperkirakan ada sekitar 1600 puskesmas yang terutama berada di daerah terpencil tidak memiliki dokter jaga akibat dari kurang pemerataan distribusi [7]. Melihat fakta tersebut diperlukan adanya sistem yang dapat membantu tenaga medis non dokter untuk mendiagnosis penyakit infeksi.
</p>


@endsection
