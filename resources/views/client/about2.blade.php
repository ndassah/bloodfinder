@extends('layout.foot3')

@section('contenu')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Bloofinder</span>
          <h1 class="text-capitalize mb-5 text-lg">Apropos de nous</h1>

          <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="{{URL::to('indexHopitaux')}}" class="text-white">Accueil</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Apropos de nous</a></li>
          </ul> 
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="title-color">les personnes au tours de vous prennent soin de vous</h2>
			</div>
			<div class="col-lg-8">
				<p>grace a vous, nous pouvons sauver des vies.</p>
				<img src="frontend/images/banner2.jpg" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</section>

<section class="fetaure-page ">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="frontend/images/emmanuel-ikwuegbu-ZsObS42_i_0-unsplash.jpg" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Aide des enfants drepanocytaires</h4>
					<p>Venir en aide aux enfants souffrant de maladies rares .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="frontend/images/edouard-tamba-HV_TYd3KAQA-unsplash.jpg" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Aide à la population camerounaise</h4>
					<p>Equilibrer l'offre et la demande de dons de sang dans le territoire nationale .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="frontend/images/edouard-tamba-bZnciM7XIYw-unsplash.jpg" alt="" class="img-fluid w-100">
					<h4 class="mt-3">reduction du taux de mortalite</h4>
					<p>Reduire le taux de mortalite due à l'abscence de dons de sang .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item">
					<img src="frontend/images/national-cancer-institute-L8tWZT4CcVQ-unsplash.jpg" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Aide du service médicale</h4>
					<p>Venir en aide aux services médicaux grace à nous différents donneurs .</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6">
				<div class="section-title">
					<h2 class="mb-4">Ce qu'ils disent de nous</h2>
					<div class="divider  my-4"></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6 testimonial-wrap offset-lg-6">
				<div class="testimonial-block">
					<div class="client-info ">
						<h4>Amazing service!</h4>
						<span>John Kamga</span>
					</div>
					<p>
						merci pour tout
					</p>
					<i class="icofont-quote-right"></i>
					
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>merci beaucoup</h4>
						<span>Mullar Muna</span>
					</div>
					<p>
						ils fournices un service tres rapide
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Good Support!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						je suis fier de mon pays
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Nice Environment!</h4>
						<span>Agarha Sarothi</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Modern Service!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection