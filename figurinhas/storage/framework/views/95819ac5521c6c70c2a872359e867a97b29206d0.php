<!DOCTYPE html>
<html lang="pt-BR">
<?php echo $__env->make('base.header', ['title' => 'Teste'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <div class="container">
        <?php echo $__env->yieldContent('container'); ?>
    </div>

    <?php echo $__env->make('base.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\figurinhas\resources\views/base/index.blade.php ENDPATH**/ ?>