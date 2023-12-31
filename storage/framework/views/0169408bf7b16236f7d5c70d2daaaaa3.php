<?php $__env->startSection('contenu'); ?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Contact Us</span>
          <h1 class="text-capitalize mb-5 text-lg">Faite le en un clique</h1>

          <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="<?php echo e(URL::to('indexDonneurs')); ?>" class="text-white">Accueil</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Contactez nous</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->

<section class="section contact-info pb-0">
    <div class="container">
         <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5>Contactez nous</h5>
                     <a href="tel:+237694914695">+237694914695</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <h5>Email</h5>
                    <a href="mailto:mohamedtariq150@mail.com">mohamedtariq150@mail.com</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <h5>Localisation</h5>
                     Douala,Cameroun
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Contactez nous</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5">en cas de probleme contactez nous par email</p>
                </div>
            </div>
        </div>
       
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.foot0', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bloodfinder\resources\views/client/contact3.blade.php ENDPATH**/ ?>