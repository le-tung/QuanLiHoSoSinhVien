<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
<div class="page-header text-center">
  <h1>Đăng nhập<small></small></h1>
</div>

<div class="container">
    <div class="row" style="padding-bottom: 50px;">
        <div class="col-md-4"></div>
        <div class="col-md-4 mx-auto">
            <form action="<?= base_url() ?>index.php/userController/login" method="POST" role="form" class=" mx-auto">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="username">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="password">
                </div>

                <button type="submit" class="btn btn-success" name="btn-login">Đăng nhập</button>
                <button type="reset" class="btn btn-default">Nhập lại</button>
            </form>
        </div>
    </div>
</div>
<?php 


//
// viet code vao day
//
include('layout/footer.php');
 ?>