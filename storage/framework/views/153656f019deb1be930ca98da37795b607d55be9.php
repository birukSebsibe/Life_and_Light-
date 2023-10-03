<!--mengambil konten yang ada difolder layout dan file main -->


<!--memanggil halaman container yang ada dihalaman utama di folder layout dan file main (yield)-->
<?php $__env->startSection('container'); ?>
    <h1>Halaman About</h1>
    <h1><?php echo e($name); ?></h1>
    <p><?php echo e($email); ?></p>
    <img src="img/<?php echo e($image); ?>" alt="<?php echo e($name); ?>" width="200">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-website\resources\views/about.blade.php ENDPATH**/ ?>