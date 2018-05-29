<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/app.css">
</head>
<body>
    
<div class="containter">
    <div class="row">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url() ?>index.php/userController/home">
                        <i class="fa fa-graduation-cap"></i>&nbsp;Quản lí hồ sơ sinh viên
                    </a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href=""><i class="fa fa-home"></i> &nbsp;Home</a></li>
                        <!-- <li><a href="#">Link</a></li> -->
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Từ khóa ...">
                        </div>
                        <button type="submit" class="btn btn-success">&nbsp;<i class="fa fa-search"></i>&nbsp;</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        
                        <!--  -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Users
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><i class="fa fa-user"></i> &nbsp;them</a>
                                    <a href="#"><i class="fa fa-user"></i> &nbsp;Sua</a>
                                    <a href="#"><i class="fa fa-user"></i> &nbsp;Xoa</a>
                                </li>

                            </ul>
                        </li>
                        <!--  -->

                        <?php if (isset($_SESSION['username'])): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i> &nbsp;<?= $_SESSION['username'] ?> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><i class="fa fa-user"></i> &nbsp;Thông tin cá nhân</a>
                                </li>
                                <?php if (isset($_SESSION['username'])) {
                                    if ($_SESSION['username'] != '') { ?>
                                        <li>
                                            <a href="<?= base_url() ?>index.php/userController/logout">
                                                <i class="fa fa-arrow-circle-right"></i>&nbsp;Đăng xuất
                                            </a>
                                        </li>
                                        <?php
                                    } else {
                                        ?>
                                        <li><a href="<?= base_url() ?>index.php/userController/login">Đăng nhập</a></li>
                                        <?php
                                    }
                                } ?>

                            </ul>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </div>
</div>