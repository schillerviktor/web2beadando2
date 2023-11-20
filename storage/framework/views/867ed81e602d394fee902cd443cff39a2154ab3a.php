<?php $__env->startSection('content'); ?>
    <form method="post" action="<?php echo e(route('register.perform')); ?>">

        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

        <h1 class="h3 mb-3 fw-normal">Regisztráció</h1>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="E-mail cím" required="required" autofocus>
            <?php if($errors->has('email')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" placeholder="Felhasználónév" required="required" autofocus>
            <?php if($errors->has('username')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('username')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>" placeholder="Jelszó" required="required">
            <?php if($errors->has('password')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('password')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>" placeholder="Jelszó ismétlése" required="required">
            <?php if($errors->has('password_confirmation')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('password_confirmation')); ?></span>
            <?php endif; ?>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Regisztrál</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/auth/registration.blade.php ENDPATH**/ ?>