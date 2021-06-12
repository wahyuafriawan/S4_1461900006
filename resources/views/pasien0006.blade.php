<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Rumah Sakit</title>
<style>
table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 1px solid #ddd;
}
thead {
background-color: #f2f2f2;
}
th, td {
text-align: left;
padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
padding: 8px 16px ;
text-decoration: none;
}
</style>
</head>

<h1>Data Pasien</h1>


<body>
    <div style="overflow-x:auto;">
        <a class="tambah" href="{{route('pasien0006.create')}}">Tambah Data</a>

        <a href="{{url('kamar0006/')}}">Data Kamar & Dokter</a>
        <br>
        <a href="{{url('pasien_import0006')}}">  Import Data Pasien</a>
        <br></br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($pasien as $psn)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$psn->nama_pasien}}</td>
                    <td>{{$psn->alamat}}</td>
                    <td>
                        <a href="{{url('pasien0006/' . $psn->id . "/edit")}}">Edit</a>
                        |
                        <form action="{{url ('pasien0006/' . $psn->id)}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>