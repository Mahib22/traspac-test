<table>
    <thead>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Eselon</th>
            <th>Tempat Tugas</th>
            <th>Agama</th>
            <th>No HP</th>
            <th>NPWP</th>
            <th>Golongan</th>
            <th>Jabatan</th>
            <th>Unit Kerja</th>
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
                <td>{{ $item->eselon }}</td>
                <td>{{ $item->tempat_tugas }}</td>
                <td>{{ $item->agama }}</td>
                <td>{{ $item->no_hp }}</td>
                <td>{{ $item->npwp }}</td>
                <td>{{ $item->golongan->name }}</td>
                <td>{{ $item->jabatan->name }}</td>
                <td>{{ $item->unitKerja->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
