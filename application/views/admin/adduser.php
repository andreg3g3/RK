<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
	
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<div class="container">
        <div class="row main">
            <div class="panel-heading">
                <div class="panel-title text-center">
                    <h3 class="title">
                        Add User DeCa
                    </h3>
                </div>
            </div>


            <?php echo form_open('admin/do_adduser'); ?>
            <div class="main-login main-center">
                    <form role ="form" class="form-horizontal" method="post" action="">
                        
                        <div class="form-group">
                            <label for="name" class="cols-md-2 control-label">NRP</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="judul_post" id="judul_post"  placeholder="Enter NRP"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="cols-md-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="judul_post" id="judul_post"  placeholder="Enter Password"/>
                                </div>
                            </div>
                        </div>


                        <div class="form-group ">
                            <button type="submit" class="btn btn-info btn-lg btn-block login-button">Add User</button>
                        </div>
                    </form>
                     <?php echo form_close(); ?>
                </div>
        </div>
    </div>

<!-- <img src="<?php echo base_url('assets/img/micr01.jpg'); ?>" style="width: 100%; height: 450px; z-index: -100; position: relative;"> -->

</body>
<footer class="text-center">
	<p>Institut Teknologi Sepuluh Nopember Surabaya</p>
	<p>Rekayasa Kebutuhan D</p>
	<p>Code with passion | Andre & Adam</p>
</footer>
</html>