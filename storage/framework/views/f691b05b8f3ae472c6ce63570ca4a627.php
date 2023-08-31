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
  <link rel="stylesheet" href="frontend/sign-in">


  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="frontend/css/style.css">
</head>
<body class="b1">
    
    <div class="row justify-content-center c1">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">

                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image b2"></div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header text-center bg-danger text-white"><?php echo e(__('Connexion')); ?></div>
                
                                <div class="p-5">
                                    <form method="POST" action="<?php echo e(route('login')); ?>">
                                        <?php echo csrf_field(); ?>
                
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Adresse e-mail')); ?></label>
                
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                
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
                                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mot de passe')); ?></label>
                
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                
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
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                
                                                    <label class="form-check-label" for="remember">
                                                        <?php echo e(__('Se souvenir de moi')); ?>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <a class="btn btn-link"  href="<?php echo e(URL::to('register')); ?>">
                                                        <?php echo e(__('je n\'ai pas de compte')); ?>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="form-group row mb-0">
                                            <div class="w-100 btn btn-lg btn-danger">
                                                <button type="submit" class="btn btn-primary">
                                                    <?php echo e(__('Connexion')); ?>

                                                </button>
                
                                                <?php if(Route::has('password.request')): ?>
                                                    <a class="btn btn-link" style="color: white" href="<?php echo e(route('password.request')); ?>">
                                                        <?php echo e(__('Mot de passe oublié ?')); ?>

                                                    </a>
                                                <?php endif; ?>
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
</html><?php /**PATH C:\wamp64\www\bloodfinder\resources\views/auth/login.blade.php ENDPATH**/ ?>