<?php $__env->startSection('title'); ?>Ecommerce <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/nouislider/nouislider.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/gridjs/gridjs.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
            font-size: 17px;
        }

        #myVideo {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #f1f1f1;
        }

        .content h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #fff;
        }

        .content .btn-start {
            font-size: 24px;
            padding: 15px 30px;
            border: none;
            background-color: #00BFFF;
            color: #fff;
            cursor: pointer;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <video autoplay muted loop id="myVideo">
        <source src="videos/WELCOME.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="content">
        <h1>Bem Vindo a Almo Go</h1>
        <a class="btn-start" href="<?php echo e(route('nova.ordem')); ?>">Iniciar</a>

    </div>

    <script>
        var video = document.getElementById("myVideo");
        var btn = document.querySelector(".btn-start");

        btn.addEventListener("click", function() {
            // Lógica para o botão "Iniciar"
        });
    </script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/js/pages/ecommerce-product-list.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\almo_go\resources\views/cartCheckout/welcome.blade.php ENDPATH**/ ?>