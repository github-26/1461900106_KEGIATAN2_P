<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Mahasiswa</title>
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
<body>
        <div style="overflow-x:auto;">
        <a class="tambah" href="{{route(
        'pengirims.create')}}"> Tambah Data </a>
            <table>
                <thead>
                <tr>
                <th>No</th>
                <th>id_supplier</th>
                <th>nama_pengirim</th>
                <th>alamat_pengirim</th>
                <th>nama_instansi</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                @foreach ($pengirims as $pengirim)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$pengirim->id_supplier}}</td>
                <td>{{$pengirim->nama_pengirim}}</td>
                <td>{{$pengirim->alamat_pengirim}}</td>
                <td>{{$pengirim->nama_instansi}}</td>
                <td>
                <a href="">Edit </a>
                |
                <a href=""> Hapus</a>
                </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
</body>
