<!-- resources/views/buku/index.blade.php -->
<h1>Daftar Buku</h1>
<ul>
<?php $__currentLoopData = $daftarBuku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li>
<a href="<?php echo e(route('buku.show', $buku['id'])); ?>">
<?php echo e($buku['judul']); ?>

</a>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\laragon\www\pbo-laravel\resources\views/buku/index.blade.php ENDPATH**/ ?>