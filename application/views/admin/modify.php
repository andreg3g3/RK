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
                        Modify an Event
                    </h3>
                </div>
            </div>

            <!-- DISINI NTR KAMU FOR EACH BIAR BANYAK EVENTNYA. KAMU PAKEK VALUE = SESUAI ISINYA DATABASE -->
             <?php 
            if(isset($data_event) && is_array($data_event) && count($data_event))
            {
            foreach($data_event as $key => $data): ?>
            <?php echo form_open('admin/do_modify'); ?>
            <div class="main-login main-center">
                    <form role ="form" class="form-horizontal" method="post" action="<?php echo base_url(); ?>Admin/do_modify">
                        
                        <div class="form-group">
                            <label for="name" class="cols-md-2 control-label">Event Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="l_namaEvent" id="l_namaEvent"  value="<?php  echo $data_event[$key]['Nama_Event']?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Date Event</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="date" class="form-control" name="l_tanggalEvent" id="l_tanggalEvent"  value="<?php  echo $data_event[$key]['Tanggal_Event']?>"/>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Time</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="time" class="form-control" name="l_waktu" id="l_waktu"  value="<?php  echo $data_event[$key]['Waktu']?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Detail Event</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                   <input type="text" class="form-control" name="l_detail" id="l_detail"  value="<?php  echo $data_event[$key]['Detail']?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <button id="<?php echo $data_event[$key]['ID_Event'] ?>" name="submit" type="submit" class="btn btn-warning btn-lg btn-block login-button" value="<?php echo $data_event[$key]['ID_Event'] ?>">Post It</button>
                        </div>
                    </form>
                     <?php echo form_close(); ?>
                      <?php endforeach; }?>
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