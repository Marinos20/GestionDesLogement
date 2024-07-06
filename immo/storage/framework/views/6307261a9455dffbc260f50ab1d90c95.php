<?php $__env->startSection('title' , 'Tous les biens'); ?>


<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between align-items-center">
        <h1><?php echo $__env->yieldContent('title'); ?></h1>
        <a href="<?php echo e(route('admin.property.create')); ?>" class="btn btn-primary">Ajouter un bien</a>
    </div>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Surface</th>
                <th>Prix</th>
                <th>Ville</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($property->title); ?></td>
                    <td><?php echo e($property->surface); ?>m2</td>
                    <td><?php echo e(number_format( $property->prie, thousands_separator: ' '  )); ?></td>
                    <td><?php echo e($property->city); ?></td>
                    <td>

                    </td>
                </tr>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php echo e($properties->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marinos/Bureau/marinos/immo/resources/views/admin/properties/index.blade.php ENDPATH**/ ?>