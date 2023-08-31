<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bloodfinder</title>

     <!-- Favicon 
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />-->

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="frontend/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="frontend/plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="frontend/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="frontend/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="frontend/css/style.css">
</head>
<body class="b1">
    

    <div class="container c1">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image b2"></div>
                        <div  class="col-lg-7">
                            <div class="card-header text-center bg-danger text-white ">{{ __('Inscription') }}</div>
    
                            <div class="card-body">
                                <form method="POST"  action="{{ route('donneur.store') }}" >
                                    @csrf
            
                                    <div class="form-group row">
                                        <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>
            
                                        <div class="col-md-6">
                                            <input type="text" class="form-control rounded @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
            
                                            @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
            
                                        <div class="col-md-6">
                                            <input  type="text" class="form-control rounded @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom">
            
                                            @error('nom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse e-mail') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cni" class="col-md-4 col-form-label text-md-right">{{ __('numero cni') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="cni" type="text" class="form-control rounded @error('cni') is-invalid @enderror" name="cni" value="{{ old('cni') }}" required autocomplete="cni">
            
                                            @error('cni')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('confirmation Mot de passe') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
            
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>
            
                                        <div class="col-md-6">
                                            <input  type="tel" class="form-control rounded @error('numero') is-invalid @enderror" name="numero" value="{{ old('numerp') }}" required autocomplete="numero">
            
                                            @error('numero')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Localité') }}</label>
                                        <div class="col-md-6">
                                            <input id="location" type="text" class="form-control rounded @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location">
            
                                            @error('location')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Sexe') }}</label>
            
                                        <div class="col-md-6">
                                            <select id="gender" class="form-control rounded @error('sexe') is-invalid @enderror" name="sexe" required>
                                                <option value="homme">Homme</option>
                                                <option value="femme">Femme</option>
                                            </select>
            
                                            @error('sexe')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="blood_group" class="col-md-4 col-form-label text-md-right">{{ __('Groupe sanguin') }}</label>
            
                                        <div class="col-md-6">
                                            <select id="blood_group" class="form-control rounded @error('groupe') is-invalid @enderror" name="groupe" required>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
            
                                            @error('groupe')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-danger">
                                                {{ __('S\'inscrire') }}
                                            </button>
                                        </div>
                                    </div>
                                   
                                      <div class="row">
                                        <div class="col mb-2">
                                            <div class="form-check">
                                                <a class="btn btn-link" href="{{ route('register2') }}">
                                                    {{ __('s\'inscrire en tant que hopital') }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col mb-2">
                                            <div class="form-check">
                                                <a class="btn btn-link"  href="{{URL::to('login')}}">
                                                    {{ __('j\'ai déjà un compte') }}
                                                </a>
                                            </div>
                                        </div>
                                      </div>
                                          </form>   
                                          
                                          @if(session('status'))
                                          <a class="btn btn-link"  href="{{URL::to('index')}}">
                                            {{ _session('status') }}
                                          </a>
                                          @endif
                                    </div>              
                       
                                </div>
                           </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="frontend/plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="frontend/plugins/bootstrap/js/popper.js"></script>
    <script src="frontend/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="frontend/plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="frontend/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="frontend/plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="frontend/plugins/shuffle/shuffle.min.js"></script>
    <script src="frontend/plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="frontend/plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="frontend/js/script.js"></script>
    <script src="frontend/js/contact.js"></script>
</body>
</html>