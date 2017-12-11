<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Thêm loại sách</div>
				<div class="card-body">
                    <form action="<?php echo e(url('/loaisach/them')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
							<label for="TenLoai">Loại sách <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control<?php echo e($errors->has('TenLoai') ? ' is-invalid' : ''); ?>" id="TenLoai" name="TenLoai" value="<?php echo e(old('TenLoai')); ?>" placeholder="" required />
							<?php if($errors->has('TenLoai')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('TenLoai')); ?></strong></div>
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