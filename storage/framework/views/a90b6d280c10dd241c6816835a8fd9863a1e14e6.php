<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Products'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/nouislider/nouislider.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/gridjs/gridjs.min.css">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Ecommerce <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>Protudos <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-3">


        </div>
        <div class="col-lg-12">

            <div class="row mb-3">
                <div class="col-xl-4 col-sm-6">
                    <div class="mt-2">
                        <h5>Estoque</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-3">
                    <form class="mt-4 mt-sm-0 float-sm-end d-sm-flex align-items-center">
                        <div class="search-box me-2">
                            <div class="position-relative">
                                <input type="text" class="form-control border-0" placeholder="Search...">
                                <i class="bx bx-search-alt search-icon"></i>
                            </div>
                        </div>
                        <ul class="nav nav-pills product-view-nav justify-content-end mt-3 mt-sm-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><i class="bx bx-grid-alt"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bx bx-list-ul"></i></a>
                            </li>
                        </ul>


                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-sm-6">
                    <div class="card">
                        <div class="card-body">

                            <div class="product-img position-relative">
                                <img src="<?php echo e(URL::asset('assets/images/product/img-1.png')); ?>" alt="" class="img-fluid mx-auto d-block">
                            </div>
                            <div class="d-flex justify-content-between align-items-end mt-4">
                                <div>
                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Half sleeve T-shirt </a></h5>
                                    <h5 class="my-0"><span class="text-muted me-2"><del>$500</del></span> <b>$450</b></h5>
                                </div>
                                <p class="text-muted mb-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="product-img position-relative">
                                <img src="<?php echo e(URL::asset('assets/images/product/img-2.png')); ?>" alt="" class="img-fluid mx-auto d-block">
                            </div>
                            <div class="d-flex justify-content-between align-items-end mt-4">
                                <div>
                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Light blue T-shirt</a></h5>
                                    <h5 class="my-0"><span class="text-muted me-2"><del>$240</del></span> <b>$225</b></h5>
                                </div>
                                <p class="text-muted mb-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="pricing-badge">
                                <span class="badge text-white bg-primary">- 20 %</span>
                            </div>
                            <div class="product-img position-relative">
                                <img src="<?php echo e(URL::asset('assets/images/product/img-3.png')); ?>" alt="" class="img-fluid mx-auto d-block">
                            </div>
                            <div class="d-flex justify-content-between align-items-end mt-4">
                                <div>
                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Black Color T-shirt</a></h5>
                                    <h5 class="my-0"><span class="text-muted me-2"><del>$175</del></span> <b>$152</b></h5>
                                </div>
                                <p class="text-muted mb-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="product-img position-relative">
                                <img src="<?php echo e(URL::asset('assets/images/product/img-4.png')); ?>" alt="" class="img-fluid mx-auto d-block">
                            </div>
                            <div class="d-flex justify-content-between align-items-end mt-4">
                                <div>
                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Hoodie (Blue)</a></h5>
                                    <h5 class="my-0"><span class="text-muted me-2"><del>$150</del></span> <b>$145</b></h5>
                                </div>
                                <p class="text-muted mb-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="pricing-badge">
                                <span class="badge text-white bg-primary">- 22 %</span>
                            </div>
                            <div class="product-img position-relative">
                                <img src="<?php echo e(URL::asset('assets/images/product/img-5.png')); ?>" alt="" class="img-fluid mx-auto d-block">
                            </div>
                            <div class="d-flex justify-content-between align-items-end mt-4">
                                <div>
                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Half sleeve T-Shirt</a></h5>
                                    <h5 class="my-0"><span class="text-muted me-2"><del>$145</del></span> <b>$138</b></h5>
                                </div>
                                <p class="text-muted mb-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star"></i>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="pricing-badge">
                                <span class="badge text-white bg-primary">- 28 %</span>
                            </div>
                            <div class="product-img position-relative">
                                <img src="<?php echo e(URL::asset('assets/images/product/img-6.png')); ?>" alt="" class="img-fluid mx-auto d-block">
                            </div>
                            <div class="d-flex justify-content-between align-items-end mt-4">
                                <div>
                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Green color T-shirt</a></h5>
                                    <h5 class="my-0"><span class="text-muted me-2"><del>$138</del></span> <b>$135</b></h5>
                                </div>


                                <p class="text-muted mb-0">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star"></i>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                        <li class="page-item disabled">
                            <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link">1</a>
                        </li>
                        <li class="page-item active">
                            <a href="javascript: void(0);" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link">5</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/nouislider/nouislider.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/wnumb/wnumb.min.js')); ?>"></script>
    <script src="assets/libs/gridjs/gridjs.js"></script>
    <script src="https://unpkg.com/gridjs/plugins/selection/dist/selection.umd.js"></script>


    <script src="<?php echo e(URL::asset('assets/js/pages/ecommerce-product-list.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Dason-Laravel_v1.0.0\almo_go\resources\views/produtosEstoque/index.blade.php ENDPATH**/ ?>