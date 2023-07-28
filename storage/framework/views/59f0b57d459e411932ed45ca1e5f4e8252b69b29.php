<?php $__env->startSection('content'); ?>

    <!-- Conteúdo da página de compra finalizada -->
    <?php if($result): ?>
        <div class="alert alert-success">
            Similaridade : <?php echo e($result[0]['Similarity']); ?>

        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\almo_go\resources\views/cartCheckout/comprafinalizada.blade.php ENDPATH**/ ?>