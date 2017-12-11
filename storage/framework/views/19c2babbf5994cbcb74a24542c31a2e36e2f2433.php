<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Sửa thông tin sách</div>
				<div class="card-body">
                    <form action="<?php echo e(url('/sach/sua')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($sach->MaSach); ?>" />
						<div class="form-group row">
							<label for="TenLoai" class="col-3" >Tên loại sách </label>
							<input type="text" readonly class=" col-6 form-control-plaintext form-control<?php echo e($errors->has('TenLoai') ? ' is-invalid' : ''); ?>" id="TenSach" name="TenSach" value="<?php echo e($sach->TenSach); ?>" placeholder="" />
						</div>
						<div class="form-group row">
							<label for="DonGia" class="col-3">Đơn giá <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class=" col-5 form-control<?php echo e($errors->has('DonGia') ? ' is-invalid' : ''); ?>" id="DonGia" name="DonGia" value="<?php echo e($sach->DonGia); ?>" placeholder="" />
							<?php if($errors->has('Đơn giá')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('DonGia')); ?></strong></div>
							<?php endif; ?>
                            <span class="input-group-addon col-1">đồng</span>
						</div>
						<div class="form-group row">
							<label for="SoLuong" class="col-3">Số lượng <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="col-6 form-control<?php echo e($errors->has('SoLuong') ? ' is-invalid' : ''); ?>" id="SoLuong" name="SoLuong" value="<?php echo e($sach->SoLuong); ?>" placeholder="" />
							<?php if($errors->has('Số lượng')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('SoLuong')); ?></strong></div>
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