<?php $__env->startSection('content'); ?>
	<div class="row justify-content-center">
		<div class="col-12 col-md-auto">
			<div class="card">
				<div class="card-header">Đăng nhập</div>
				<div class="card-body">
					<form role="form" method="post" action="<?php echo e(route('login')); ?>">
						<?php echo e(csrf_field()); ?>

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
							<div class="form-check">
								<label class="custom-control custom-checkbox form-check-label">
									<input class="custom-control-input form-check-input" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?> />
									<span class="custom-control-indicator"></span>
									<span class="custom-control-description">Duy trì đăng nhập</span>
								</label>
							</div>
						</div>
						
						<button type="submit" class="btn btn-primary">Đăng nhập</button> hoặc <a href="<?php echo e(route('password.request')); ?>">Quên mật khẩu?</a>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>