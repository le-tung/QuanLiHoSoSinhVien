<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
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
                    <a class="navbar-brand" href="#">Quản lí hồ sơ sinh viên</a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="">Home</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (isset($_SESSION['username'])) {
                            if ($_SESSION['username'] != '') { ?>
                                <li><a href="<?= base_url() ?>index.php/userController/logout">Đăng xuất</a></li>
                                <?php
                            } else {
                                ?>
                                <li><a href="<?= base_url() ?>index.php/userController/login">Đăng nhập</a></li>
                                <?php
                            }
                        } ?>
                        <?php if (isset($_SESSION['username'])): ?>
                            
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $_SESSION['username'] ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </div>
</div>