<form action="<?php echo e(route('check')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <input type="file" name="image1" />
    <input type="file" name="image2" />

    <button type="submit">Compare</button>
</form>
<?php /**PATH C:\xampp\htdocs\almo_go\resources\views/cartCheckout/checkout.blade.php ENDPATH**/ ?>