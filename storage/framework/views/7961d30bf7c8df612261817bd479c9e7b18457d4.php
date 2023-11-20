<nav class="site-header navbar navbar-expand-lg mb-5">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="main_nav">
        <ul class="navbar-nav">
            <?php echo $__env->renderEach('layout.sub-nav', $menulist, 'menu', 'empty'); ?>
        </ul>
        <div>
            <?php if(auth()->guard()->check()): ?>
                <p class="py-2 d-none d-md-inline-block m-0">
                    Bejelentkezve: <?php echo e(auth()->user()->username); ?> </p>
                <span> - </span>
                <a class="py-2 d-none d-md-inline-block" href="<?php echo e(route('logout.perform')); ?>">Kilépés</a>
            <?php endif; ?>
            <?php if(auth()->guard()->guest()): ?>
                <a class="py-2 d-none d-md-inline-block" href="<?php echo e(route('login.perform')); ?>">Belépés</a>
                /
                <a class="py-2 d-none d-md-inline-block" href="<?php echo e(route('register.perform')); ?>">Regisztráció</a>
            <?php endif; ?>
        </div>
    </div> <!-- navbar-collapse.// -->
</nav>
<?php /**PATH /var/www/customers/vh-60044/web/home/resources/views/layout/navigation.blade.php ENDPATH**/ ?>