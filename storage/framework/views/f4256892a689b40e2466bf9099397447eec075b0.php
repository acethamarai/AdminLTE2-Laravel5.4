<?php $__env->startSection('content'); ?>
<div class='row'>
  <div class="col-md-7">
	<div class="box">
            <div class="box-header">
              <h3 class="box-title">List of Subscriber</h3>
            </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>ID</th>
                  <th>Mobile No.</th>
                  <th>Name</th>
                  <th>Balance</th>
                  <th>Status</th>  
                  <th>Status</th>  
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $subscriber; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
                  <td><?php echo e($val->id); ?></td>
				  <td><?php echo e($val->mob_no); ?></td>
                  <td><?php echo e($val->name); ?></td>
                  <td><?php echo e($val->balance); ?></td>
                  <td><?php if($val->status==1): ?> <?php echo e('Success'); ?> <?php else: ?> <?php echo e('Deleted'); ?> <?php endif; ?></td>
                  <td><a href="#" class="btn btn-info">Edit</a> <a href="#" class="btn btn-warning">Delete</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                
              </table>
		</div> 
	</div>
	<div class="col-md-5">
		<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create a Subscriber</h3>
            </div>
            <!-- /.box-header -->
			<?php if( Session::has('success') ): ?>
            <div class="alert alert-success">
                <button type="button" class="close fui-cross" data-dismiss="alert"></button>
                <?php echo e(Session::get('success')); ?>

            </div>
            <?php endif; ?>
            <?php if( Session::has('error') ): ?>
            <div class="alert alert-error">
                <button type="button" class="close fui-cross" data-dismiss="alert"></button>
                <?php echo e(Session::get('error')); ?>

            </div>
            <?php endif; ?>
            <!-- form start -->
            	<form class="" role="form" method="POST" action="<?php echo e(url('subscriber')); ?>" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile No.</label>
                  <input type="number" class="form-control" name="mob_no" id="mobile" placeholder="Subscriber Mobile No.">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Subscriber Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Balance</label>
                  <input type="text" class="form-control" name="balance" id="balance" placeholder="Balance">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
	</div>
</div>			
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>