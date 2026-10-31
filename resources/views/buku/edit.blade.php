<form action="{{ route('buku.update', $buku->id) }}" method="POST">
	@csrf
	@method('PUT')

	<div>
		<label for="judul">Judul</label>
		<input type="text" id="judul" name="judul" value="{{ old('judul', $buku->judul) }}" maxlength="255" required>
		@error('judul')
			<div>{{ $message }}</div>
		@enderror
	</div>

	<div>
		<label for="penulis">Penulis</label>
		<input type="text" id="penulis" name="penulis" value="{{ old('penulis', $buku->penulis) }}" maxlength="255" required>
		@error('penulis')
			<div>{{ $message }}</div>
		@enderror
	</div>

	<div>
		<label for="penerbit">Penerbit</label>
		<input type="text" id="penerbit" name="penerbit" value="{{ old('penerbit', $buku->penerbit) }}" maxlength="255" required>
		@error('penerbit')
			<div>{{ $message }}</div>
		@enderror
	</div>

	<div>
		<label for="tahun_terbit">Tahun Terbit</label>
		<input type="number" id="tahun_terbit" name="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}" min="1900" max="{{ date('Y') }}" required>
		@error('tahun_terbit')
			<div>{{ $message }}</div>
		@enderror
	</div>

	<button type="submit">Simpan Perubahan</button>
</form>
