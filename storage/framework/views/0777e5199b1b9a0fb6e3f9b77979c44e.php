
<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">liste des donneurs</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Localité</th> 
                            <th>sexe</th>
                            <th>numero</th>
                            <th>Groupe sanguin</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Localité</th> 
                            <th>sexe</th>
                            <th>numero</th>
                            <th>Groupe sanguin</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $donneurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donneur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($donneur->nom); ?></td>
                            <td><?php echo e($donneur->prenom); ?></td>
                            <td><?php echo e($donneur->location); ?></td>
                            <td><?php echo e($donneur->sexe); ?></td>
                            <td><?php echo e($donneur->numero); ?></td>
                            <td><?php echo e($donneur->groupe); ?></td>
                            <td>
                                <a href="<?php echo e(route('donneur.edit',$donneur)); ?>">
                                    <button class="btn btn-success">modifier</button>
                                </a>
                                <form action="<?php echo e(route('donneur.destroy',$donneur)); ?>" method="post" style="display: inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger">supprimer</button>
                                </form>	
                            </td>
                         </tr>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashfinder.foot2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bloodfinder\resources\views/dashfinder/dashdons.blade.php ENDPATH**/ ?>