<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Images</title>
</head>
<body>
    <h1> LA FRASE ES ........ </h1>
    <p><?php echo e($data['storage']->url($data['image_name'])); ?></p>
    <img src="<?php echo e($data['storage']->url($data['image_name'])); ?>" alt="">

    <h5>Ip del server:  <?php echo e($data['ip']); ?> </h5>
</body>
</html><?php /**PATH /home/tdnavarrom/projects/LumenLaravelDocker/resources/views/image/index.blade.php ENDPATH**/ ?>