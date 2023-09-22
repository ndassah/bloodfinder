

<?php $__env->startSection('contenu'); ?>
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
					<p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>
					     <form id="#" class="appoinment-form" method="post"  action="<?php echo e(route('annonces.store')); ?>" >
                         <?php echo csrf_field(); ?>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select  class="form-control rounded <?php $__errorArgs = ['groupe'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="groupe" required id="exampleFormControlSelect1">
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
                                <select  class="form-control rounded <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="type" required id="exampleFormControlSelect2">
                                  <option value="dons">dons</option>                                 
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="location" id="location" type="text" class="form-control rounded <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('location')); ?>" required autocomplete="location" placeholder="location">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="nom" id="nom" type="text" class="form-control" placeholder="nom">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input id="numero" type="Number" class="form-control rounded <?php $__errorArgs = ['numero'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="numero" value="<?php echo e(old('numero')); ?>" required autocomplete="numero" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea id="message"class="form-control rounded <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="message" value="<?php echo e(old('message')); ?>" required autocomplete="message" rows="6" placeholder="Your Message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-main btn-round-full" > <?php echo e(__('publier')); ?><i class="icofont-simple-right ml-2  "></i></button>
                </form>
            </div>
			</div>
		</div>
	</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bloodfinder\resources\views/client/annonces.blade.php ENDPATH**/ ?>