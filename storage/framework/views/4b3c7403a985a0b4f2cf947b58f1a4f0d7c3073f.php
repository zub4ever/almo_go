
<h1>Compare Images</h1>
<form action="<?php echo e(route('check')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="file" name="image1">
    <input type="file" name="image2">
    <input type="submit" value="Compare">
</form>

<?php /**PATH C:\xampp\htdocs\almo_go\resources\views/cartCheckout/checkout.blade.php ENDPATH**/ ?>