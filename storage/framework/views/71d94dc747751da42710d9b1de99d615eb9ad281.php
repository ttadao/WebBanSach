<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Thêm sách mới</div>
				<div class="card-body">
                    <form action="<?php echo e(url('/sach/them')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
							<label for="TenSach">Tên sách <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control<?php echo e($errors->has('TenSach') ? ' is-invalid' : ''); ?>" id="TenSach" name="TenSach" value="<?php echo e(old('TenSach')); ?>" placeholder="" required />
							<?php if($errors->has('TenSach')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('TenSach')); ?></strong></div>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="MaLoai"> Loại sách <span class="text-danger font-weight-bold">*</span></label>
							<select class="form-control<?php echo e($errors->has('MaLoai') ? ' is-invalid' : ''); ?>" id="MaLoai" name="MaLoai" required>
								<option value="">-- Chọn loại sách --</option>
								<?php $__currentLoopData = $loaisach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($value->MaLoai); ?>"><?php echo e($value->TenLoai); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
							<?php if($errors->has('MaLoai')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('MaLoai')); ?></strong></div>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="TomTat">Tóm tắt <span class="text-danger font-weight-bold">*</span></label>
							<textarea class="form-control<?php echo e($errors->has('TomTat') ? ' is-invalid' : ''); ?>" id="TomTat" name="TomTat" placeholder="" required></textarea>
							<?php if($errors->has('TomTat')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('TomTat')); ?></strong></div>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="NXB"> Nhà xuất bản<span class="text-danger font-weight-bold">*</span></label>
							<select class="form-control<?php echo e($errors->has('NXB') ? ' is-invalid' : ''); ?>" id="NXB" name="NXB" required>
								<option value="">-- Chọn nhà xuất bản --</option>
								<?php $__currentLoopData = $nxb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($value->MaNXB); ?>"><?php echo e($value->TenNXB); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
							<?php if($errors->has('NXB')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('NXB')); ?></strong></div>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="SoLuong">Số lượng <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control<?php echo e($errors->has('SoLuong') ? ' is-invalid' : ''); ?>" id="SoLuong" name="SoLuong" value="<?php echo e(old('SoLuong')); ?>" placeholder="" required />
							<?php if($errors->has('SoLuong')): ?>
								<div class="invalid-feedback"><strong><?php echo e($errors->first('SoLuong')); ?></strong></div>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="DonGia">Đơn giá <span class="text-danger font-weight-bold">*</span></label>
							<div class="row">
								<input type="text" class=" col-8 form-control<?php echo e($errors->has('DonGia') ? ' is-invalid' : ''); ?>" id="DonGia" name="DonGia" value="<?php echo e(old('DonGia')); ?>" placeholder="" required />
								<?php if($errors->has('DonGia')): ?>
									<div class="invalid-feedback"><strong><?php echo e($errors->first('DonGia')); ?></strong></div>
								<?php endif; ?>
								<span class="input-group-addon col-1">đồng</span>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group">
								<label for="AnhBia">Chọn ảnh</label>
								<input type="file" class="form-control-file" id="AnhBia" value="<?php echo e($anhbia); ?>">
                                <?php if($errors->has('AnhBia')): ?>
                                    <div class="invalid-feedback"><strong><?php echo e($errors->first('AnhBia')); ?></strong></div>
                                <?php endif; ?>
                            </div>
						</div>
						<button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>