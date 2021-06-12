<h1>Tambah Data Pasien</h1>

<a href="{{url('dokter0006/')}}">Next</a>
<br></br>


<form action="{{route('pasien0006.store')}}" method="post">
    @csrf
    Nama Pasien : <input type="text" name="nama_pasien">
    Alamat Pasien : <input type="text" name="alamat">
    <button type="submit">Simpan</button>
</form>