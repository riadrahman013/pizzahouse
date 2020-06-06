<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
      <?php echo $__env->yieldContent('content'); ?>

      <footer>
        Copyright 2020 Pizza House
      </footer>
    </body>
</html>
<?php /**PATH C:\xampp\pizzahouse\resources\views/layouts/layout.blade.php ENDPATH**/ ?>