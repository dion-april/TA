<!DOCTYPE html>
<html>
<head>
	<title>Pegawai</title>
</head>
<body>

	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>NIP</th>
			<th>Nama_Lengkap</th>
			<th>Pangkat</th>
			<th>Jabatan</th>
			<th>Unit Organisasi</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Option</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->nip }}</td>
			<td>{{ $p->nama_lengkap }}</td>
			<td>{{ $p->pangkat }}</td>
			<td>{{ $p->jabatan }}</td>
            <td>{{ $p->unit_organisasi }}</td>
            <td>{{ $p->keterangan }}</td>
            <td>{{ $p->status }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->nip }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->nip }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>