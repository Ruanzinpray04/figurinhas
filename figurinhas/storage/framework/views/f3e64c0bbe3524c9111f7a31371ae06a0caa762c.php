

<?php $__env->startSection('container'); ?>
<a class="btn btn-success mt-2 mb-2" href="/figurinhas/fcreate">Nova Figurinha</a>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Naturalidade</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $figurinhas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $figurinha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($figurinha->nome); ?></td>
                <td><?php echo e($figurinha->dtnasc); ?></td>
                <td><?php echo e($figurinha->naturalidade); ?></td>
                <td>
                    <a class="btn btn-warning" href="/figurinhas/<?php echo e($figurinha->ID); ?>/fedit">Editar</a>
                    <a class="btn btn-info" href="/figurinhas/<?php echo e($figurinha->ID); ?>/fshow">Ver</a>
                    <a class="btn btn-danger" href="/figurinhas/<?php echo e($figurinha->ID); ?>/fdestroy">Remover</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\figurinhas\resources\views/figurinhas/index.blade.php ENDPATH**/ ?>