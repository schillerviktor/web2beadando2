<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Játékos szerkesztése</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="<?php echo e(route('players.index')); ?>"> Vissza</a>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Hiba!</strong><br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('players.update',$player->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vezetéknév:</strong>
                    <input type="text" name="vezeteknev" value="<?php echo e($player->vezeteknev); ?>" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Utónév:</strong>
                    <input type="text" name="utonev" value="<?php echo e($player->utonev); ?>" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Mezszám:</strong>
                    <input type="number" name="mezszam" value="<?php echo e($player->mezszam); ?>" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Klub:</strong>
                    <select name="klubid" id="klubid" class="form-control form-control-md">
                        <?php $__currentLoopData = $clubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($club->id); ?>" <?php if($club->id == $player->klubid): ?> selected="selected" <?php endif; ?>>
                                <?php echo e($club->csapatnev); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <strong>Poszt:</strong>
                    <select name="posztid" id="posztid" class="form-control form-control-md">
                        <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($position->id); ?>" <?php if($position->id == $player->posztid): ?> selected="selected" <?php endif; ?>>
                                <?php echo e($position->nev); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <strong>Érték:</strong>
                    <input type="number" name="ertek" value="<?php echo e($player->ertek); ?>" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Születési dátum:</strong>
                    <input type="date" name="szulido" value="<?php echo e($player->szulido); ?>" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Nemzetiség:</strong>
                    <select name="nationality" id="nationality" class="form-control form-control-md">
                        <option value="1" <?php if($player->magyar == 1): ?> selected="selected" <?php endif; ?>>
                            Magyar
                        </option>
                        <option value="2" <?php if($player->kulfoldi == 1): ?> selected="selected" <?php endif; ?>>
                            Külföldi
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Módosít</button>
            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/customers/vh-69315/web/home/resources/views/players/edit.blade.php ENDPATH**/ ?>