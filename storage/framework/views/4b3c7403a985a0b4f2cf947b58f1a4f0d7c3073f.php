
<h1>Compare Images</h1><b><br></b>
<form action="<?php echo e(route('check')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input type="file" name="source_image" />
    <input type="file" name="target_image" />
    <button type="submit">Compare</button>
</form>
<?php /**PATH C:\xampp\htdocs\almo_go\resources\views/cartCheckout/checkout.blade.php ENDPATH**/ ?>