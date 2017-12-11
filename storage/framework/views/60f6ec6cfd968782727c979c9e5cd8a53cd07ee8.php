<?php $__env->startSection('content'); ?>

	<div id="slider" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" style="height: 360px;">
			<div class="carousel-item active">
				<img class="d-block w-100" src="<?php echo e(url('public/image/slider/004.gif')); ?>" alt="">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="<?php echo e(url('public/image/slider/002.jpg')); ?>" alt="">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="<?php echo e(url('public/image/slider/003.jpg')); ?>" alt="">
			</div>
		</div>
		<a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#slider" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="sanpham">
		<div class="card-deck">
			<?php $__currentLoopData = $sachIndex; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="card" style="width: 20rem;">
				<img class="card-img-top" style="height: 200px; max-width: 150px;" src="<?php echo e(url('public/image/' . $value->AnhBia)); ?>" alt="Card image cap">
				<div class="card-body">
					<h4 class="card-title"><?php echo e($value->TenSach); ?></h4>
					<p class="card-text"><?php echo e($value->TomTat); ?></p>
					<p class="h6 font-weight-bold text-danger"><?php echo e($value->DonGia); ?> đ </p>
					<button type="button" class="btn btn-outline-secondary">Thêm vào giỏ hàng</button>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>

	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>