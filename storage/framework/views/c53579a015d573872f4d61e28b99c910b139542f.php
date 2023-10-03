<?php $__env->startSection('container'); ?>
    <h2><?php echo e($post->title, false); ?></h2>
    <p>By: Indie in <a href="/categories/<?php echo e($post->category->slug, false); ?>"><?php echo e($post->category->name, false); ?></a></p>
    <p><?php echo $post->body; ?></p>
    <a href="/blog">Back to Posts</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-website\resources\views/post.blade.php ENDPATH**/ ?>