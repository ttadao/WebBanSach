<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Thêm nhà xuất bản</div>
				<div class="card-body">
                    <form action="<?php echo e(url('/nhaxuatban/them')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
							<label for="TenNXB">Tên nhà xuất bản <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control<?php echo e($errors->has('TenNXB') ? ' is-invalid' : ''); ?>" id="TenNXB" name="TenNXB" value="<?php echo e(old('TenNXB')); ?>" placeholder="" required />
							<?php if($errors->has('TenNXB')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('TenNXB')); ?></strong></div>
							<?php endif; ?>
						</div>
						
						<button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>