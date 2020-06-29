<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    
    </head>
    <body>
        





        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/task/resources/views/layouts/app.blade.php ENDPATH**/ ?>