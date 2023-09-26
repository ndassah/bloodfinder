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
                        <div class="col-lg-5 d-none d-lg-block bg-register-image b3"></div>
                        <div class="col-lg-7">
                            <div class="card-header text-center bg-danger text-white "><?php echo e(__('Inscription')); ?></div>
    
                            <div class="card-body">
                                <form method="POST" action="<?php echo e(route('hopitale.store')); ?>">
                                    <?php echo csrf_field(); ?>
            
                                    <div class="form-group row">
                                        <label for="nom" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nom')); ?></label>
            
                                        <div class="col-md-6">
                                            <input  type="text" class="form-control rounded <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nom" value="<?php echo e(old('nom')); ?>" required autocomplete="nom">
            
                                            <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Adresse e-mail')); ?></label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control rounded <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
            
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="matricule" class="col-md-4 col-form-label text-md-right"><?php echo e(__('numero immatriculation')); ?></label>
            
                                        <div class="col-md-6">
                                            <input id="matricule" type="text" class="form-control rounded <?php $__errorArgs = ['matrcule'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="matricule" value="<?php echo e(old('matricule')); ?>" required autocomplete="matricule">
            
                                            <?php $__errorArgs = ['matricule'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="classification" class="col-md-4 col-form-label text-md-right"><?php echo e(__('classification')); ?></label>
            
                                        <div class="col-md-6">
                                            <select id="classification" class="form-control rounded <?php $__errorArgs = ['classification'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="classification" required>
                                                <option value="district">District</option>
                                                <option value="regional">Regional</option>
                                                <option value="spécialisé">Specialisé</option>
                                                <option value="universitaires">Universitaires</option>
                                                <option value="centrale">Centrale</option>
                                                <option value="gériatrique">Gériatrique</option>
                                            </select>
            
                                            <?php $__errorArgs = ['classification'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mot de passe')); ?></label>
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">
            
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('confirmation Mot de passe')); ?></label>
            
                                        <div class="col-md-6">
                                            <input id="password_confirmation" type="password" class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password_confirmation" required autocomplete="password_confirmation">
            
                                            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Téléphone')); ?></label>
            
                                        <div class="col-md-6">
                                            <input type="tel" class="form-control rounded <?php $__errorArgs = ['numero'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="numero" value="<?php echo e(old('numero')); ?>" required autocomplete="numero">
            
                                            <?php $__errorArgs = ['numero'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="location" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Localité')); ?></label>
                                        <div class="col-md-6">
                                            <input id="location" type="text" class="form-control rounded <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="location" value="<?php echo e(old('location')); ?>" required autocomplete="location">
            
                                            <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
        
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-danger">
                                                <?php echo e(__('S\'inscrire')); ?>

                                            </button>
                                        </div>
                                    </div>
                                   
                                       <div class="row">
                                        <div class="col mb-2">
                                            <div class="form-check">
                                                <a class="btn btn-link"  href="<?php echo e(URL::to('inscription')); ?>">
                                                    <?php echo e(__('s\'inscrire en tant que particulier')); ?>

                                                </a>
                                            </div>
                                        </div>
                                        <div class="col mb-2">
                                            <div class="form-check">
                                                <a class="btn btn-link"  href="<?php echo e(URL::to('login')); ?>">
                                                    <?php echo e(__('j\'ai déjà un compte')); ?>

                                                </a>
                                            </div>
                                        </div>
                                       </div>
                                   
                                   
                                </form>
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
</html><?php /**PATH C:\wamp64\www\bloodfinder\resources\views/hopital/register2.blade.php ENDPATH**/ ?>