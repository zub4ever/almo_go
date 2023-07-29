<?php $__env->startSection('content'); ?>

    <!-- Conteúdo da página de compra finalizada -->
    <?php if($result): ?>
        <div class="text-center mt-5">
            <div class="alert alert-success">
                Similaridade: <?php echo e($result[0]['Similarity']); ?>

            </div>
            <p class="mt-3">Biometria facial aprovada, compra efetivada...</p>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        // Redirecionar para a rota "logout" após 3 segundos
        setTimeout(function() {
            document.getElementById('logout-form').submit();
        }, 6000);// Aqui voce coloca o tempo que desejar
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\almo_go\resources\views/cartCheckout/comprafinalizada.blade.php ENDPATH**/ ?>