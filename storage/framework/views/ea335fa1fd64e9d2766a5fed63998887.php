<?php $__env->startSection('contenu'); ?>
	
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Liste des annonces</span>
          <h1 class="text-capitalize mb-5 text-lg">dons</h1>

           <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="<?php echo e(URL::to('indexHopitaux')); ?>" class="text-white">Accueil</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">dons</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- portfolio -->
<section class="section doctors">
	<div class="container">
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
									<button class="btn btn-success">Accepter</button>
								</td>
							 </tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
		
	  </div>
	</div>
   
  </section>
  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.foot3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bloodfinder\resources\views/client/dons.blade.php ENDPATH**/ ?>