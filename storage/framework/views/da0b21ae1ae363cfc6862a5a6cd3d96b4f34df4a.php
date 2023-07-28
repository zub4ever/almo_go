<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <button type="button" class="btn btn-default waves-effect waves-light" onclick="redirectToURL('/ecommerce/neworder/checkout')">
                                    <img src="<?php echo e(URL::asset('images/WiresPayFace.png')); ?>" alt="Imagem 1">

                                </button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <button type="button" class="btn btn-default waves-effect waves-light"  disabled  onclick="redirectToURL('URL_DO_DESTINO_2')">
                                    <img src="<?php echo e(URL::asset('images/cart.png')); ?>" alt="Imagem 2">

                                </button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <button type="button" class="btn btn-default waves-effect waves-light"  disabled onclick="redirectToURL('URL_DO_DESTINO_3')">
                                    <img src="<?php echo e(URL::asset('images/pix.png')); ?>" alt="Imagem 3">

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function redirectToURL(url) {
            window.location.href = url;
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\almo_go\resources\views/cartCheckout/opcaopagamento.blade.php ENDPATH**/ ?>