<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Koleksi Buku - <?php echo $__env->yieldContent('title'); ?></title>

    
    <link rel="stylesheet" href="<?php echo e(asset('vendors/mdi/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/css/vendor.bundle.base.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    
    <?php echo $__env->yieldContent('style_page'); ?>
</head>

<body>
<div class="container-scroller">

    
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid page-body-wrapper">

        
        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="main-panel">
            <div class="content-wrapper">

                
                <?php echo $__env->yieldContent('content'); ?>

            </div>

            
            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>


<script src="<?php echo e(asset('vendors/js/vendor.bundle.base.js')); ?>"></script>
<script src="<?php echo e(asset('js/off-canvas.js')); ?>"></script>
<script src="<?php echo e(asset('js/hoverable-collapse.js')); ?>"></script>
<script src="<?php echo e(asset('js/misc.js')); ?>"></script>


<?php echo $__env->yieldContent('js_page'); ?>

</body>
</html><?php /**PATH C:\src\koleksi-buku\resources\views/layouts/app.blade.php ENDPATH**/ ?>