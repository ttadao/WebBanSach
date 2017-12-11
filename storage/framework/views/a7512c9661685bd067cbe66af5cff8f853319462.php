<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="robots" content="all,follow">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <link href="<?php echo e(asset('public/css/app.css')); ?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo e(asset('public/css/custom.admin.css')); ?>" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Bootstrap CSS
    <link rel="stylesheet" href="css/bootstrap.min.css">-->
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/css/style.default.css')); ?>" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/grasp_mobile_progress_circle-1.0.0.min.css')); ?>">

    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo e(asset('public/image/favicon.ico'); ?>">
</head>
<body>
<div class="container">

    <nav class="side-navbar">
        <div class="side-navbar-wrapper">
            <div class="main-menu">
                <ul id="side-main-menu" class="side-menu list-unstyled">
                    <li class="active"><a href="<?php echo e(url('/chude')); ?>"> <i class="icon-home"></i><span>Home</span></a></li>
                    <li> <a href="manage-room.html"><i class="icon-form"></i><span>Room Manage</span></a></li>
                    <li> <a href="manage-user.html"><i class="icon-form"></i><span>User Manage</span></a></li>                       </span></a></li>
                    <li> <a href="#"> <i class="icon-mail"></i><span>Demo</span>
                            <div class="badge badge-warning">6 New</div></a></li>
                </ul>
            </div>
            <div class="admin-menu">
                <ul id="side-admin-menu" class="side-menu list-unstyled">
                    <li> <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Dropdown</span>
                            <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
                        <ul id="pages-nav-list" class="collapse list-unstyled">
                            <li> <a href="#">Page 1</a></li>
                            <li> <a href="#">Page 2</a></li>
                            <li> <a href="#">Page 3</a></li>
                            <li> <a href="#">Page 4</a></li>
                        </ul>
                    </li>
                    <li> <a href="#"> <i class="icon-screen"> </i><span>Demo</span></a></li>
                    <li> <a href="#"> <i class="icon-flask"> </i><span>Demo</span>
                            <div class="badge badge-info">Special</div></a></li>
                    <li> <a href=""> <i class="icon-flask"> </i><span>Demo</span></a></li>
                    <li> <a href=""> <i class="icon-picture"> </i><span>Demo</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page home-page">
        <!-- navbar-->
        <header class="header">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                                <div class="brand-text hidden-sm-down"><span>Bootstrap </span><strong class="text-primary">Dashboard</strong></div></a></div>
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu">
                                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu">
                                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <section>
            <?php echo $__env->yieldContent('content'); ?>
        </section>
    </div>


    <hr />
    <footer class="footer fixed-bottom"><p>&copy; <?php echo e(@date("Y")); ?> <?php echo e(config('app.name', 'Laravel')); ?></p></footer>
</div>

    <script src="<?php echo e(asset('public/js/jquery-1.11.3.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/js/popper.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/js/app.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/js/jssor.slider-26.3.0.min.js')); ?>" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>

    <script src="<?php echo e(asset('public/js/tether.min.js'); ?>"></script>
    <script src="<?php echo e(asset('public/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.cookie.js'); ?>"> </script>
    <script src="<?php echo e(asset('public/js/grasp_mobile_progress_circle-1.0.0.min.js'); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.nicescroll.min.js'); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.validate.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="<?php echo e(asset('public/js/charts-home.js'); ?>"></script>
    <script src="<?php echo e(asset('public/js/front.js'); ?>"></script>

    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
</body>
</html>
