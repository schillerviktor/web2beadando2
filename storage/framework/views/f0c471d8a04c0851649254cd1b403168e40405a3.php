<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left mb-4">
                <h2>Játékosok</h2>
            </div>
            <?php if(Gate::check('isAdmin')): ?>
                <div class="float-right">
                    <a class="btn btn-success" href="<?php echo e(route('players.create')); ?>"> Új játékos hozzáadása</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success mt-3">
            <p class="mb-0"><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>Vezetéknév</th>
            <th>Keresztnév</th>
            <th>Mez</th>
            <th>Születési idő</th>
        </tr>
        <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->index + 1); ?></td>
                <td><?php echo e($player->vezeteknev); ?></td>
                <td><?php echo e($player->utonev); ?></td>
                <td><?php echo e($player->mezszam); ?></td>
                <td><?php echo e($player->szulido); ?></td>
                <?php if(Gate::check('isAdmin')): ?>
                <td>
                    <form action="<?php echo e(route('players.destroy',$player->id)); ?>" method="POST" class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('players.edit',$player->id)); ?>">Szerkeszt</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Töröl</button>
                    </form>
                </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/customers/vh-69315/web/home/resources/views/players/index.blade.php ENDPATH**/ ?>