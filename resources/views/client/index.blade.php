@extends('layout.foot')

@section('contenu')
<!-- Slider Start -->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing ">solution sanitaire</span>
					<h1 class="mb-3 mt-3">Votre partenaire sanitaire de confiance</h1>
					
					<p class="mb-4 pr-5">faire des dons de sang pour venir en aide aux hopitaux.</p>
					<!--<div class="btn-container ">
						<a href="{{URL::to('publication')}}"  class="btn btn-main-2 btn-icon btn-round-full">faire un dons<i class="icofont-simple-right ml-2  "></i></a>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>24 Heures de service</span>
						<h4 class="mb-3">Publication d'annonces</h4>
						<p class="mb-4">vous pouvez publier des annonces sur bloodfinder quelque soit votre localitée</p>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>Timing</span>
						<h4 class="mb-3">horaires & localites</h4>
						<ul class="w-hours list-unstyled">
		                    <li class="d-flex justify-content-between">jours: <span>7/7</span></li>
		                    <li class="d-flex justify-content-between">DLA-YDE-BAF</li>
							<li class="d-flex justify-content-between">heures: <span>24/24</span></li>

		                </ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Cas urgent</span>
						<h4 class="mb-3">119</h4>
						<p>optenez toute l'aide nécessaire en cas d'urgence. notre service d'urgence vous repondra. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
				<div class="about-img">
					<img src="frontend/images/banner1.jpg" alt="" class="img-fluid">
					<img src="frontend/images/nguy-n-hi-p-maYeMl3xCrY-unsplash.jpg" alt="" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="frontend/images/edouard-tamba-lFQa4NIEisI-unsplash.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color">Dons de sang <br>& recherches de donneurs</h2>
					<p class="mt-4 mb-5">nous proposons le meilleur Services de recherches, d'offre et de demande de dons de sang au Cameroun. </p>

					<a href="{{URL::to('service')}}" class="btn btn-main-2 btn-round-full btn-icon">Services<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3">220</span>M+
						<p>Population camerounaise</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3">5</span>M+
						<p>Population en besoin de sang</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3">100</span>k+
						<p>Dons de sang</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-globe"></i>
						<span class="h3">4,9</span>M+
						<p>quantitee non fournie</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Nos objectifs</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Nous avons des objectifs tres claire à atteindre et espérons les atteindre grace à vous.</p>
				</div>
			</div>
		</div>

		<div class="row">
			

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-heart-beat-alt text-lg"></i>
						<h4 class="mt-3 mb-3">aides</h4>
					</div>
					<div class="content">
						<p class="mb-4">Venir en aide aux famille grace aux dons de sang.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-crutch text-lg"></i>
						<h4 class="mt-3 mb-3">Dons de sang</h4>
					</div>

					<div class="content">
						<p class="mb-4">faciliter les dons de sang aux malade dans toutes les regions.</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-dna-alt-1 text-lg"></i>
						<h4 class="mt-3 mb-3">recherches de donneurs</h4>
					</div>
					<div class="content">
						<p class="mb-4">rechercher les donneurs dans l'ensemble du territoire nationale.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection