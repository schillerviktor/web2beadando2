<?php if((count($menu->children) > 0) AND ($menu->parent_id > 0)): ?>
    <li class="nav-item dropdown">
        <a href="<?php echo e(url($menu->slug)); ?>" class="nav-link dropdown-toggle" role="button" data-hover="dropdown">
            <?php echo e($menu->menu_title); ?>

            <?php if(count($menu->children) > 0): ?>
                <i class="fa fa-caret-right"></i>
            <?php endif; ?>
        </a>
<?php else: ?>
    <li class="nav-item <?php if($menu->parent_id === 0 && count($menu->children) > 0): ?> dropdown <?php endif; ?>">
        <a href="<?php echo e(url($menu->slug)); ?>" class="nav-link dropdown-toggle" data-hover="dropdown">
            <?php echo e($menu->menu_title); ?>

            <?php if(count($menu->children) > 0): ?>
                <i class="fa fa-caret-down"></i>
            <?php endif; ?>
        </a>
<?php endif; ?>
        <?php if(count($menu->children) > 0): ?>
            <ul class="<?php if($menu->parent_id !== 0 && (count($menu->children) > 0)): ?> submenu <?php endif; ?> dropdown-menu" aria-labelledby="dropdownBtn">
                <?php $__currentLoopData = $menu->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('layout.sub-nav', $menu, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    </li>
<?php /**PATH C:\xampp\htdocs\resources\views/layout/sub-nav.blade.php ENDPATH**/ ?>