<?php $__env->startSection('content'); ?>
	<div class="row" xmlns="http://www.w3.org/1999/html">
			<div class="card col-6">
				<div class="container">
					<img class="mw-100 mh-100" src="<?php echo e(url('public/image/' . $sach->AnhBia)); ?>" alt="Max-width 100%">
				</div>
			</div>
			<div class="card col-6">
				<div class="card-header h1"><?php echo e($sach->TenSach); ?></div>
				<div class="card-body">
					<p class="font-italic"><?php echo e($sach->TomTat); ?></p>
					<p class="h2 font-weight-bold text-danger"><?php echo e($sach->DonGia); ?> đ <span class="text-secondary h6"> Đã có VAT</span> </p>
					<button type="button" class="btn btn-outline-secondary">Thêm vào giỏ hàng</button>
				</div>
			</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>