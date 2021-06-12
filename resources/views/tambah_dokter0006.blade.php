<h1>Tambah Data Dokter</h1>

<a href="{{url('tambah_kamar0006/')}}">Next</a>
<br></br>


<form action="{{route('pasien0006.store')}}" method="post">
    @csrf
    Nama Dokter : <input type="text" name="nama">
    Jabatan Dokter : <input type="text" name="alamat">
    <button type="submit">Simpan</button>
</form>