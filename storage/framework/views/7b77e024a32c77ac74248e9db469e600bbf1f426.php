<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Sửa nhà xuất bản</div>
				<div class="card-body">
                    <form action="<?php echo e(url('/nhaxuatban/sua')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($nxb->MaNXB); ?>" />
						<div class="form-group">
							<label for="TenNXB">Tên nhà xuất bản <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control<?php echo e($errors->has('TenNXB') ? ' is-invalid' : ''); ?>" id="TenNXB" name="TenNXB" value="<?php echo e($nxb->TenNXB); ?>" placeholder="" required />
							<?php if($errors->has('Tên nhà xuất bản')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('TenNXB')); ?></strong></div>
							<?php endif; ?>
						</div>
						
						<button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>