<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Sửa loại sách</div>
				<div class="card-body">
                    <form action="<?php echo e(url('/loaisach/sua')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($loaisach->MaLoai); ?>" />
						<div class="form-group">
							<label for="TenLoai">Tên loại sách <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control<?php echo e($errors->has('TenLoai') ? ' is-invalid' : ''); ?>" id="TenLoai" name="TenLoai" value="<?php echo e($loaisach->TenLoai); ?>" placeholder="" required />
							<?php if($errors->has('Loại sách')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('TenLoai')); ?></strong></div>
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