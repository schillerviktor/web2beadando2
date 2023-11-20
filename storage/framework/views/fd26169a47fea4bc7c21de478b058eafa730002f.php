<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Csapat szerkesztése</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="<?php echo e(route('table')); ?>"> Vissza</a>
            </div>
        </div>
    </div>

    <form action="<?php echo e(route('table')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Csapatnév:</strong>
                    <input type="text" name="name" value="<?php echo e($table["name"]); ?>" required class="form-control">
                </div>
                <div class="form-group">
                    <strong>Játszott meccsek:</strong>
                    <input type="number" name="played" value="<?php echo e($table["played"]); ?>" required class="form-control">
                </div>
                <div class="form-group">
                    <strong>Győzelmek száma:</strong>
                    <input type="number" name="win" value="<?php echo e($table["win"]); ?>" required class="form-control">
                </div>
                <div class="form-group">
                    <strong>Döntetlenek száma:</strong>
                    <input type="number" name="draw" value="<?php echo e($table["draw"]); ?>" required class="form-control">
                </div>
                <div class="form-group">
                    <strong>Vesztések száma:</strong>
                    <input type="number" name="defeat" value="<?php echo e($table["defeat"]); ?>" required class="form-control">
                </div>
                <div class="form-group">
                    <strong>Gólok:</strong>
                    <input type="number" name="goals" value="<?php echo e($table["goals"]); ?>" required class="form-control">
                </div>
                <div class="form-group">
                    <strong>Pontok:</strong>
                    <input type="number" name="points" value="<?php echo e($table["points"]); ?>" required class="form-control">
                </div>
                <input type="hidden" name="id" value="<?php echo e($table["id"]); ?>">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Mentés</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/customers/vh-69315/web/home/resources/views/players/table/edit.blade.php ENDPATH**/ ?>