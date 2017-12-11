<?php $__env->startSection('content'); ?>
	<div class="row justify-content-center">
		<div class="col-12 col-md-auto">
			<div class="card">
				<div class="card-header">Đăng ký tài khoản</div>
				<div class="card-body">
					<form role="form" method="post" action="<?php echo e(route('register')); ?>">
						<?php echo e(csrf_field()); ?>

						<div class="form-group">
							<label for="name">Họ và tên</label>
							<input type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" id="name" name="name" value="<?php echo e(old('name')); ?>" placeholder="" required />
							<?php if($errors->has('name')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('name')); ?></strong></div>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="" required />
							<?php if($errors->has('email')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('email')); ?></strong></div>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="password">Mật khẩu</label>
							<input type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" id="password" name="password" placeholder="" required />
							<?php if($errors->has('password')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('password')); ?></strong></div>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="password_confirmation">Xác nhận mật khẩu</label>
							<input type="password" class="form-control<?php echo e($errors->has('password_confirmation') ? ' is-invalid' : ''); ?>" id="password_confirmation" name="password_confirmation" placeholder="" required />
							<?php if($errors->has('password_confirmation')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('password_confirmation')); ?></strong></div>
							<?php endif; ?>
						</div>
						
						<button type="submit" class="btn btn-primary">Đăng ký</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>