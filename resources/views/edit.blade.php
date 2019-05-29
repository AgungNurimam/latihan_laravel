<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai">Kembali</a>
	
	<br/>
	<br/>
	
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" name="nama" value="{{$p->pegawai_id}}" required="required"> <br>
		Jabatan <input type="text" name="jabatan" value="{{$p->pegawai_jabatan}}" required="required"><br>
		Umur <input type="number" name="umur" value="{{$p->pegawai_umur}}" required="required"><br>
		Alamat <textarea name="alamat" value="{{$p->pegawai_alamat}}" required="required"></textarea><br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

 
</body>
</html>