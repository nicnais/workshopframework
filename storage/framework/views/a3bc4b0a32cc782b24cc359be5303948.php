<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<div class="auth-form-light text-left py-5 px-4 px-sm-5">
    <div class="brand-logo text-center mb-4">
        <h4>Koleksi Buku</h4>
    </div>
    <h6 class="font-weight-light text-center mb-4">Silahkan login untuk melanjutkan</h6>

    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email"
                   class="form-control form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   value="<?php echo e(old('email')); ?>" placeholder="Email" required autofocus>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group mb-3">
            <label>Password</label>
            <input type="password" name="password"
                   class="form-control form-control-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   placeholder="Password" required>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="remember" class="form-check-input" id="remember"
                   <?php echo e(old('remember') ? 'checked' : ''); ?>>
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn w-100">
                LOGIN
            </button>
        </div>

        <div class="text-center mt-4">
            <a href="<?php echo e(route('register')); ?>" class="auth-link text-black">
                Belum punya akun? Daftar disini
            </a>
        </div>

        <div class="mt-3 text-center">
            <p class="text-muted">atau</p>
            <a href="<?php echo e(route('google.login')); ?>" class="btn btn-danger btn-lg w-100">
                <i class="mdi mdi-google me-2"></i> Login dengan Google
            </a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\src\koleksi-buku\resources\views/auth/login.blade.php ENDPATH**/ ?>