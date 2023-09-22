
<?php $__env->startSection('content'); ?>


	
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">liste des dons</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
							<tr>
								<th>Nom</th>
								<th>Localité</th> 
								<th>groupe</th>
								<th>numero</th>
								<th>date</th>
								<th>action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Nom</th>
								<th>Localité</th> 
								<th>groupe</th>
								<th>numero</th>
								<th>date</th>
								<th>action</th>
							</tr>
						</tfoot>
						<tbody>
							<?php $__currentLoopData = $dons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($item->nom); ?></td>
								<td><?php echo e($item->location); ?></td>
								<td><?php echo e($item->groupe); ?></td>
								<td><?php echo e($item->numero); ?></td>
								<td><?php echo e($item->created_at); ?></td>
								<td>								
									<a href="tel: <?php echo e($item->numero); ?> ">
										<button class="btn btn-success">Accepter</button>
									</a>
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
<?php echo $__env->make('dashfinder.foot2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bloodfinder\resources\views/dashfinder/showdons.blade.php ENDPATH**/ ?>