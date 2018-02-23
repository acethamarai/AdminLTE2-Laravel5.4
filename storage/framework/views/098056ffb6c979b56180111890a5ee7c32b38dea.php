<?php $__env->startSection('content'); ?>
<div class='row'>
  <div class="col-md-6">
             <?php if($errors->has('mob_no')): ?>
                 <span class="help-block">
                   <strong><?php echo e($errors->first('mob_no')); ?></strong>
                 </span>
            <?php endif; ?>
			  <form role="form" id="choose_form" method="post" action="<?php echo e(route('subscribersave')); ?>" >
			  <?php echo e(csrf_field()); ?>

              <div class="form-group">
                <label>Find a Subscriber</label>
                <select class="form-control select2" name="mob_no" style="width: 100%;">
                  <option value="">Choose a Subscriber</option>
				  <?php $__currentLoopData = $subscriber; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
					<option value="<?php echo e($sub['id']); ?>" <?php if(isset($sess['id'])==$sub['id']){ echo 'selected=selected'; } ?> ><?php echo e($sub['mob_no']); ?></option>
				  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="form-group">
			  <input type="submit" value="GO" id="find_mob" />
			  </div>
              <!-- /.form-group -->
            </form>
			</div>
</div>			
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>