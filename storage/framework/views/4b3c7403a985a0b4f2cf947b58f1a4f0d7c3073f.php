<?php $__env->startSection('content'); ?>
<h1>Comparando imagens</h1><b><br></b>
<form action="<?php echo e(route('check')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <input type="file" name="target_image" accept="image/*" />
    <button type="submit">Comparar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\almo_go\resources\views/cartCheckout/checkout.blade.php ENDPATH**/ ?>