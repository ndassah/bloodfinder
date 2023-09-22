

<?php $__env->startSection('contenu'); ?>

    <div>
    </div> 
    <div class="container">
        <h1>Profile de <?php echo e($hopitales->nom); ?></h1>

        <p><b>Nom:</b> <?php echo e($hopitales->nom); ?></p>
        <p><b>Localite:</b> <?php echo e($hopitales->location); ?></p>
        <p><b>email:</b> <?php echo e($hopitales->email); ?></p>
        <p><b>Immatriculation:</b> <?php echo e($hopitales->matricule); ?></p>
        <p><b>numero:</b> <?php echo e($hopitales->numero); ?></p>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.foot3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bloodfinder\resources\views/client/detailHopital.blade.php ENDPATH**/ ?>