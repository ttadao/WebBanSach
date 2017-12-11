<?php $__env->startSection('content'); ?>
	<div class="row justify-content-center">
		<div class="col-12 col-md-auto">
			<div class="card">
				<div class="card-header">Khôi phục mật khẩu</div>
				<div class="card-body">
					<?php if(session('status')): ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<?php echo e(session('status')); ?>

						</div>
					<?php endif; ?>
					<form role="form" method="post" action="<?php echo e(route('password.email')); ?>">
						<?php echo e(csrf_field()); ?>

						<div class="form-group">
							<label for="email">Địa chỉ email đã đăng ký</label>
							<input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" id="email" name="email" value="<?php echo e(old('email')); ?>" required />
							<?php if($errors->has('email')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('email')); ?></strong></div>
							<?php endif; ?>
						</div>
						
						<button type="submit" class="btn btn-primary">Gởi email khôi phục</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>