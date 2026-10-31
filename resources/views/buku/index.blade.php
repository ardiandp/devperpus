<h1>Daftar Buku</h1>
<a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>
<table>
	<thead>
		<tr>
			<th>Judul</th>
			<th>Penulis</th>
			<th>Penerbit</th>
			<th>Tahun Terbit</th>
            <th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		@forelse ($buku as $buku)
			<tr>
				<td>{{ $buku->judul }}</td>
				<td>{{ $buku->penulis }}</td>
				<td>{{ $buku->penerbit }}</td>
				<td>{{ $buku->tahun_terbit }}</td>
                <td>
                    <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                    </form>
                </td>
			</tr>
		@empty
			<tr>
				<td colspan="4">Belum ada data buku.</td>
			</tr>
		@endforelse
	</tbody>
</table>
