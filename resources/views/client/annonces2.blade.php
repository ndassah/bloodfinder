@extends('layout.foot3')

@section('contenu')
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="frontend/images/national-cancer-institute-PP5nO5gcLdA-unsplash.jpg" alt="" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+237 694914695</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 " id="annonces">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Publier une annonce</h2>
					<p class="mb-4">publiez des demande ici.</p>
					     <form id="#" class="appoinment-form" method="post"  action="{{ route('annonces.store') }}" >
                         @csrf
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select  class="form-control rounded @error('groupe') is-invalid @enderror" name="groupe" required id="exampleFormControlSelect1">
                                  <option>A-</option>
                                  <option>A+</option>
                                  <option>AB-</option>
								  <option>AB+</option>
                                  <option>B-</option>
                                  <option>B+</option>
                                  <option>O-</option>
                                  <option>O+</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select  class="form-control rounded @error('type') is-invalid @enderror" name="type" required id="exampleFormControlSelect2">
                                  <option value="demande">Demande</option>
                                 
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="location" id="location" type="text" class="form-control rounded @error('location') is-invalid @enderror" value="{{ Session::get('donnee.location') ?? old('location') }}" required autocomplete="location" placeholder="location">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="nom" id="nom" type="text" class="form-control" placeholder="nom">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input id="numero" type="Number" class="form-control rounded @error('numero') is-invalid @enderror" name="numero" value="{{ Session::get('donnee.numero') ?? old('numero') }}" required autocomplete="numero" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea id="message"class="form-control rounded @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message" rows="6" placeholder="Your Message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-main btn-round-full" > {{ __('publier') }}<i class="icofont-simple-right ml-2  "></i></button>
                </form>
            </div>
			</div>
		</div>
	</div>


@endsection