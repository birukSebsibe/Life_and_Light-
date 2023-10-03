<!--  memasukan konten yang ada di halaman folder layout dan file main -->


<!-- memasukan konten dibawah ke halaman utama (yield)-->
<?php $__env->startSection('container'); ?>
    <h1>Halaman Home</h1>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-website\resources\views/home.blade.php ENDPATH**/ ?>