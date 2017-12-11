<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Sửa chủ đề</div>
				<div class="card-body">
                    <form action="<?php echo e(url('/chude/sua')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($chude->id); ?>" />
						<div class="form-group">
							<label for="ten_chu_de">Tên chủ đề <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control<?php echo e($errors->has('ten_chu_de') ? ' is-invalid' : ''); ?>" id="ten_chu_de" name="ten_chu_de" value="<?php echo e($chude->ten_chu_de); ?>" placeholder="" required />
							<?php if($errors->has('ten_chu_de')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('ten_chu_de')); ?></strong></div>
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