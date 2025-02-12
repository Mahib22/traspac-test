<center>
    <h1>Daftar Pegawai</h1>
    <h2>Dinas Perhubungan Provinsi Jawa Tengah</h2>
</center>

<table>
    <thead style="background-color: blue">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Golongan</th>
            <th>Eselon</th>
            <th>Jabatan</th>
            <th>Tempat Tugas</th>
            <th>Agama</th>
            <th>Unit Kerja</th>
            <th>No HP</th>
            <th>NPWP</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pegawai as $item)
            <tr>
                <td>{{ $item->nip }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tempat_lahir }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->tgl_lahir }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->golongan->name }}</td>
                <td>{{ $item->eselon }}</td>
                <td>{{ $item->jabatan->name }}</td>
                <td>{{ $item->tempat_tugas }}</td>
                <td>{{ $item->agama }}</td>
                <td>{{ $item->unitKerja->name }}</td>
                <td>{{ $item->no_hp }}</td>
                <td>{{ $item->npwp }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
