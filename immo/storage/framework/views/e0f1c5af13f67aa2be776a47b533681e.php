<?php $__env->startSection('title', $property->exists ? "Editer un bien" : "Créer un bien"); ?>



<?php $__env->startSection('content'); ?>
    <h1><?php echo $__env->yieldContent('title'); ?></h1>

    <form action="<?php echo e(route($property->exists ? 'admin.property.update' : 'admin.property.store' , $property)); ?>" method="post">

    <?php echo csrf_field(); ?>
    <?php echo method_field($property->exists ? 'post ' : 'put'); ?>

    <?php echo $__env->make('shared.input', ['label' => 'Titre' , 'name' => 'tile' , 'value' => $property->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div>
        <button class="btn btn-primary">
            <?php if($property->exists): ?>
                Modifier
            <?php else: ?>
                Créer
            <?php endif; ?>
        </button>
    </div>


    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marinos/Bureau/marinos/immo/resources/views/admin/properties/form.blade.php ENDPATH**/ ?>