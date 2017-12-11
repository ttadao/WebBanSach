<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Loại sách</div>
				<div class="card-body">
					<p><a class="btn btn-primary" href="<?php echo e(url('/loaisach/them')); ?>" role="button">Thêm loại sách</a></p>
					<table class="table table-bordered table-hover table-sm table-responsive">
						<thead>
							<tr>
								<th width="8%">#</th>
								<th width="76%">Tên loại sách</th>
								<th width="8%">Sửa</th>
								<th width="8%">Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php  $count = 1;  ?>
							<?php $__currentLoopData = $loaisach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($count++); ?></td>
									<td><?php echo e($value->TenLoai); ?></td>
									<td class="text-center"><a href="<?php echo e(url('/loaisach/sua/' . $value->MaLoai)); ?>" class="btn btn-warning btn-sm" style="width:50px;">Sửa</a></td>
									<td class="text-center"><a onclick="return confirm('Bạn có muốn xóa loại sách <?php echo e($value->TenLoai); ?>?')" href="<?php echo e(url('/loaisach/xoa/' . $value->MaLoai)); ?>" class="btn btn-danger btn-sm" style="width:50px;">Xóa</a></td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>