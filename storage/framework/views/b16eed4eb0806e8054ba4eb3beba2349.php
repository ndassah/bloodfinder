

<?php $__env->startSection('contenu'); ?>

    <div>
    </div> 
    <div class="container">
        <h1>Profile de <?php echo e($donneur->nom); ?></h1>

        <p><b>Nom:</b> <?php echo e($donneur->nom); ?></p>
        <p><b>Prenom: </b> <?php echo e($donneur->prenom); ?></p>
        <p><b>Localite:</b> <?php echo e($donneur->location); ?></p>
        <p><b>email:</b> <?php echo e($donneur->email); ?></p>
        <p><b>sexe:</b> <?php echo e($donneur->sexe); ?></p>
        <p><b>numero:</b> <?php echo e($donneur->numero); ?></p>
        <p><b>groupe sanguin: </b><?php echo e($donneur->groupe); ?></p>
        <p><b>cni: </b> <?php echo e($donneur->cni); ?></p>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bloodfinder\resources\views/client/detailDonneur.blade.php ENDPATH**/ ?>