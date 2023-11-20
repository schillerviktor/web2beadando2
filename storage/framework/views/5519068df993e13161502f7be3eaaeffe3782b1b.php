<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left mb-4">
                <h2>Tabella</h2>
            </div>
            <?php if(Gate::check('isAdmin') || Gate::check('isManager')): ?>
                <div class="float-right">
                    <a class="btn btn-success" href="<?php echo e(route('table.create')); ?>"> Új csapat hozzáadása</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped mb-5">
                <thead>
                <tr>
                    <th>Ssz.</th>
                    <th>Csapatnév</th>
                    <th>Játszott</th>
                    <th>Nyertes</th>
                    <th>Döntetlen</th>
                    <th>Vereség</th>
                    <th>Gól</th>
                    <th>Pont</th>
                    <?php if(Gate::check('isAdmin')): ?>
                        <th></th>
                    <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->index + 1); ?></td>
                        <td><?php echo e($team["name"]); ?></td>
                        <td><?php echo e($team["played"]); ?></td>
                        <td><?php echo e($team["win"]); ?></td>
                        <td><?php echo e($team["draw"]); ?></td>
                        <td><?php echo e($team["defeat"]); ?></td>
                        <td><?php echo e($team["goals"]); ?></td>
                        <td><?php echo e($team["points"]); ?></td>
                        <?php if(Gate::check('isAdmin')): ?>
                            <td>
                                <form action="<?php echo e(route('table')); ?>" method="POST" class="float-right">
                                    <a class="btn btn-primary" href="<?php echo e(route('editTable', $team["id"])); ?>">Szerkeszt</a>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <input type="hidden" name="id" value="<?php echo e($team["id"]); ?>">
                                    <button type="submit" class="btn btn-danger">Töröl</button>
                                </form>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div>
        <canvas id="myChart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const labels = <?php echo json_encode($names); ?>;
        const data = {
            labels: labels,
            datasets: [{
                label: 'Pontok eloszlása a csapatok között',
                data: <?php echo json_encode($points); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        var config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/players/table/index.blade.php ENDPATH**/ ?>