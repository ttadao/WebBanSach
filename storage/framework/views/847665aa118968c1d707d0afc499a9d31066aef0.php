<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
	<title><?php echo e(config('app.name', 'Laravel')); ?></title>
	<link href="<?php echo e(asset('public/css/app.css')); ?>" type="text/css" rel="stylesheet" />
	<link href="<?php echo e(asset('public/css/custom.css')); ?>" type="text/css" rel="stylesheet" />
</head>
<body>
    <div class="container">
		<nav class="navbar navbar-expand-lg navbar-light" style="background:#00bfff;">
			<a class="navbar-brand" href="<?php echo e(url('/')); ?>">
				<?php echo e(config('app.name', 'Laravel')); ?>

			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Điều hướng">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<?php if(Auth::guest()): ?>
						<li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Đăng nhập</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('register')); ?>">Đăng ký</a></li>
					<?php else: ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#tongquan" id="navbarQuanLy" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý</a>
							<div class="dropdown-menu" aria-labelledby="navbarQuanLy">
								<a class="dropdown-item" href="<?php echo e(url('/chude')); ?>">Quản lý chủ đề</a>
								<a class="dropdown-item" href="#">Quản lý bài viết</a>
								<a class="dropdown-item" href="#">Quản lý người dùng</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#tongquan" id="navbarTaiKhoan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?></a>
							<div class="dropdown-menu" aria-labelledby="navbarTaiKhoan">
								<a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng xuất</a>
								<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="post" style="display: none;"><?php echo e(csrf_field()); ?></form>
								<a class="dropdown-item" href="<?php echo e(url('/nguoidung/doimatkhau')); ?>"><i class="fa fa-key" aria-hidden="true"></i> Đổi mật khẩu</a>
							</div>
						</li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
		
        <?php echo $__env->yieldContent('content'); ?>
		
		<hr />
		<footer class="footer"><p>&copy; <?php echo e(@date("Y")); ?> <?php echo e(config('app.name', 'Laravel')); ?></p></footer>
    </div>
	
    <script src="<?php echo e(asset('public/js/popper.min.js')); ?>" type="text/javascript"></script>
	<script src="<?php echo e(asset('public/js/app.js')); ?>" type="text/javascript"></script>
</body>
</html>
