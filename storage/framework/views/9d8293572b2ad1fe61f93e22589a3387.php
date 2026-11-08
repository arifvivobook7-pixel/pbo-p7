<!-- resources/views/buku/show.blade.php -->
<h1>Detail Buku</h1>
<p>ID buku: <?php echo e($buku['id']); ?></p>
<p>Judul: <?php echo e($buku['judul']); ?></p>

<a href="<?php echo e(route('buku.index')); ?>">
    Kembali ke daftar
</a><?php /**PATH C:\laragon\www\pbo-laravel\resources\views/buku/show.blade.php ENDPATH**/ ?>