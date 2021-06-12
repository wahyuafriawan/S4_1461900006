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

<h1>Data Kamar </h1>


<body>
    <div style="overflow-x:auto;">
    <a href="{{url('pasien0006/')}}">Kembali ke Data Pasien</a>
        <br></br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kamar</th>
                    <th>Pasien</th>
                    <th>Nama Dokter</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($kamar as $kmr)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$kmr->id}}</td>
                    <td>{{$kmr->nama_pasien}}</td>
                    <td>{{$kmr->nama}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>