<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-nowrap">
                        <thead class="table-light">
                        <tr>
                            <th>Produto</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th colspan="2">Total</th>
                        </tr>
                        </thead>
                        
                    </table>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <a href="<?php echo e(url('ecommerce-products')); ?>" class="btn btn-secondary">
                            <i class="mdi mdi-arrow-left me-1"></i> Continue Shopping </a>
                    </div> <!-- end col -->
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-2 mt-sm-0">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cameraModal">
                                Checkout
                            </button>


                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div>
        </div>
    </div>

</div>


<?php /**PATH C:\xampp\htdocs\almo_go\resources\views/cartCheckout/form.blade.php ENDPATH**/ ?>