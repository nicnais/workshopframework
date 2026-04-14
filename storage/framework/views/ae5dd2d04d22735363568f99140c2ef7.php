<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('style_page'); ?>
<style>
    .welcome-card {
        border-left: 4px solid #7B46F5;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card welcome-card">
            <div class="card-body">
                <h4 class="card-title">Dashboard</h4>
                <p class="mb-1">
                    Selamat datang, <strong><?php echo e(session('user_data.name') ?? Auth::user()->name); ?></strong>!
                </p>
                <p class="mb-0 text-muted">
                    Login sebagai: <?php echo e(session('user_data.email') ?? Auth::user()->email); ?>

                </p>
            </div>
        </div>
    </div>

    
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
                <h4 class="font-weight-normal mb-3">Total Kategori</h4>
                <h2 class="mb-5"><?php echo e(\App\Models\Kategori::count()); ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-6 grid-margin stretch-card">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <h4 class="font-weight-normal mb-3">Total Buku</h4>
                <h2 class="mb-5"><?php echo e(\App\Models\Buku::count()); ?></h2>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js_page'); ?>
<script>
    // dashboard specific scripts
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\src\koleksi-buku\resources\views/home.blade.php ENDPATH**/ ?>