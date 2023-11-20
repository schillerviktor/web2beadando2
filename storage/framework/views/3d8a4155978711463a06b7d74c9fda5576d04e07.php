<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NB1 - Nemzeti Bajnokság 1.</title>

    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/product.css')); ?>" rel="stylesheet">
</head>

<body>

<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="site-container" class="container">
    <div class="row">
        <?php if (! empty(trim($__env->yieldContent('sidebar')))): ?>
            <div class="col-md-9">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <aside class="col-md-3">
                <?php echo $__env->yieldContent('sidebar'); ?>
            </aside>
        <?php else: ?>
            <div class="col-md-12">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\resources\views/layout-main.blade.php ENDPATH**/ ?>