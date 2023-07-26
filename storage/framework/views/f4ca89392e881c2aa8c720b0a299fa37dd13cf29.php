<!DOCTYPE html>
<html>
<head>
    <title>Dados Recebidos da API</title>
</head>
<body>
<h1>Dados Recebidos:</h1>
<ul>
    <li>
        <strong>IP do Leitor:</strong> <?php echo e($data['reading_reader_ip']); ?><br>
        <strong>EPC Hexadecimal:</strong> <?php echo e($data['reading_epc_hex']); ?><br>
        <strong>MAC do Leitor:</strong> <?php echo e($data['reading_reader_mac']); ?><br>
        <strong>Antena:</strong> <?php echo e($data['reading_antenna']); ?><br>
        <strong>Tipo de Movimento:</strong> <?php echo e($data['reading_movement_type']); ?><br>
        <strong>Data de Criação:</strong> <?php echo e($data['reading_created_at']); ?><br>
    </li>
</ul>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\almo_go\resources\views/cartCheckout/data.blade.php ENDPATH**/ ?>