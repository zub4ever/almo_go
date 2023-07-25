<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('check')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div id="camera-container">
            <video id="camera-preview" autoplay playsinline></video>
            <canvas id="captured-image" style="display: none;"></canvas>
            <button type="button" id="take-photo">Tirar Foto</button>
        </div>

        <input type="hidden" name="target_image" id="target-image-input">
        <button type="submit" id="submit-btn" style="display: none;">Enviar</button>
    </form>







<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\almo_go\resources\views/cartCheckout/checkout.blade.php ENDPATH**/ ?>