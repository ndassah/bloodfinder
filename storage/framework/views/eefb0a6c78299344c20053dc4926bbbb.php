<?php $__env->startSection('contenu'); ?>


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Nos services</span>
          <h1 class="text-capitalize mb-5 text-lg">Ce que nous faisons</h1>

        <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="<?php echo e(URL::to('index')); ?>" class="text-white">Accueil</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our services</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section service-2">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5 mb-lg-0">
					<img src="frontend/images/azure-productions-49uTalO3xa8-unsplash.jpg" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Dons de sang</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5 mb-lg-0">
					<img src="frontend/images/national-cancer-institute-L8tWZT4CcVQ-unsplash.jpg" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Recherche de donneurs</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5 mb-lg-0">
					<img src="frontend/images/nguy-n-hi-p-maYeMl3xCrY-unsplash.jpg" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Demande de dons de sang</h4>
						<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section cta-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg">Nous sommes heureux de vous offrir la possibilitée <span class="title-color">d'avoir une bonne santé</span></h2>
					<a href="<?php echo e(URL::to('demande')); ?>" class="btn btn-main-2 btn-round-full">faire une demande<i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bloodfinder\bloodfinder\resources\views/client/service.blade.php ENDPATH**/ ?>