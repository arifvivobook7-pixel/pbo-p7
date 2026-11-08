<!-- resources/views/buku/show.blade.php -->
<h1>Detail Buku</h1>
<p>ID buku: {{ $buku['id'] }}</p>
<p>Judul: {{ $buku['judul'] }}</p>

<a href="{{ route('buku.index') }}">
    Kembali ke daftar
</a>