<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title ?></title>
	<meta name="description" content="E-SAKIP Sistem Informasi Akuntabilitas Kinerja Instalasi Pemerinta">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/Sakip/img/small-logo.png') ?>"/>
	<link rel="stylesheet" href="<?php echo base_url("assets/public/bootstrap/css/bootstrap.min.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/Sakip/css/main.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/public/font-awesome/css/font-awesome.min.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/public/dist/css/AdminLTE.min.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/Sakip/css/style-login.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/public/dist/css/animate.css"); ?>">

	<link async href="http://fonts.googleapis.com/css?family=Passero%20One" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>

	  <script src="<?php echo base_url("assets/public/plugins/jQuery/jquery-2.2.3.min.js"); ?>"></script>
	  <script src="<?php echo base_url("assets/public/bootstrap/js/bootstrap.min.js"); ?>"></script>
	  <script type="text/javascript"> 
	      var current_url = '<?php echo current_url(); ?>';
	  </script>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Archivo+Black|Nunito');


		.blue-bg {
			background: #2B6BAF;
		}
		.white {
			color: white;
			font-size: 1.2em;
			text-shadow: 1px 0px 1px black;
		}
		.login-logo { margin-bottom:5px; }
		.enjoy-css {
		  -webkit-box-sizing: content-box;
		  -moz-box-sizing: content-box;
		  box-sizing: content-box;
		  cursor: pointer;
		  border: none;
		  font: normal 2em/normal "arial", Helvetica, sans-serif;
		  color: rgba(255,255,255,1);
		  text-align: center;
		  -o-text-overflow: clip;
		  text-overflow: clip;
		  text-shadow: 0 1px 0 rgb(204,204,204) , 0 2px 0 rgb(201,201,201) , 0 3px 0 rgb(187,187,187) , 0 4px 0 rgb(185,185,185) , 0 5px 0 rgb(170,170,170) , 0 6px 1px rgba(0,0,0,0.0980392) , 0 0 5px rgba(0,0,0,0.0980392) , 0 1px 3px rgba(0,0,0,0.298039) , 0 3px 5px rgba(0,0,0,0.2) , 0 5px 10px rgba(0,0,0,0.247059) , 0 10px 10px rgba(0,0,0,0.2) , 0 20px 20px rgba(0,0,0,0.14902) ;
		  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
		  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
		  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
		  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
		}

		.enjoy-css:hover {
		  color: #EEB715;
		  text-shadow: 0 1px 0 rgba(255,255,255,1) , 0 2px 0 rgba(255,255,255,1) , 0 3px 0 rgba(255,255,255,1) , 0 4px 0 rgba(255,255,255,1) , 0 5px 0 rgba(255,255,255,1) , 0 6px 1px rgba(0,0,0,0.0980392) , 0 0 5px rgba(0,0,0,0.0980392) , 0 1px 3px rgba(0,0,0,0.298039) , 0 3px 5px rgba(0,0,0,0.2) , 0 -5px 10px rgba(0,0,0,0.247059) , 0 -7px 10px rgba(0,0,0,0.2) , 0 -15px 20px rgba(0,0,0,0.14902) ;
		  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
		  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
		  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
		  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
		}

		.shadow {
    		box-shadow: 2px 1px 10px black;
		}

		.text-shadow {
    		text-shadow: 2px 1px 2px  black;
		}

		.arial {
			font-family: arial;
			font-weight: normal;

		}
		.tebal {
			font-weight: bold;
			font-size: 24px;
		}
/*		.arrow-up {
         width: 0; 
         height: 0; 
         margin:0px 0px 0px 45%; 
         border-left: 10px solid transparent;
         border-right: 10px solid transparent;
         border-bottom: 5px solid white;
         margin-bottom: -18px;
         }*/
		div.border{
			border-left: 3pt solid #EEB715;
			border-right: 3pt solid #EEB715;
		}

	</style>
</head>
<body>

	<div class="container">
		<div class="col-md-4 col-md-offset-4 box-login" style="margin-top: 20px;">
	      	<?php  
	      	/**
	      	 * undocumented class variable
	      	 *
	      	 * @var string
	      	 **/
	      	if( $this->input->get('action') != 'lostpassword') :
	      	?>
	      	
		     <div class="login-logo">
	            <img width="100%" src="<?php echo base_url("assets/Sakip/img/logo.png"); ?>" alt="Logo Sistem">
	         </div>
	      	<!-- <div class="arrow-up"></div> -->
	      	<div class=" box-body border blue-bg shadow animated <?php if($this->session->flashdata('alert')) echo "shake"; ?>">
	      	<div class="box-alert"><?php echo $this->session->flashdata('alert'); ?></div>
	      	<h4 class="text-center arial tebal" style="padding-bottom: 10px;">Silahkan Login</h4>
	      		<form action="<?php echo current_url(); ?>" method="POST" role="form">
					<?php echo form_hidden('from_url', $this->input->get('from_url')); ?>
	      			<div class="form-group">
	      				<label for="username" class="arial">Username / E-Mail :</label>
	      				<input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control input-md" autofocus="true" placeholder="Username / E-Mail">
	      				<p class="help-block"><?php echo form_error('username', '<small class="text-danger">', '</small>'); ?></p>
	      			</div>
	      			<div class="form-group">
	      				<label for="password" class="arial">Password :</label>
	      				<input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control input-md" placeholder="Password">
	      				<p class="help-block"><?php echo form_error('password', '<small class="text-danger">', '</small>'); ?></p>
	      			</div>
	      			<button type="submit" class="btn btn-warning btn-block">Masuk</button>
	      			<br>
	      		</form>
	      		<div class="social-auth-links text-center">
	      			<p><a href="<?php echo base_url(); ?>" class="arial">Kembali ke halaman utama</a></p>
	      		<b><div  id="demo"></div></b>
	      		</div>
	      	</div>
	      
	      	<?php else : ?>
	      	<div class="box-alert">
	      		<?php if($this->session->flashdata('alert') == FALSE) : ?>
	      		<div class="alert alert-info">
	      			Silahkan masukkan alamat email Anda. Anda akan menerima sebuah tautan untuk membuat password baru melalui email.
	      		</div>
	      		<?php else : 
	      			echo $this->session->flashdata('alert');
	      		endif;
	      		?>
	      	</div>
	      	<div class="box-body animated ">
	      		<form action="<?php echo base_url("login_skpd/forgot"); ?>" method="POST" role="form">
	      			<div class="form-group">
	      				<label for="">E-Mail :</label>
	      				<input type="email" name="email" class="form-control input-lg" autofocus="true" required="required">
	      			</div>
	      			<button type="submit" class="btn btn-primary btn-block">Dapatkan password baru</button>
		      		<div class="social-auth-links text-left" style="margin-top: 20px;">
		      			<a href="<?php echo current_url(); ?>" class="arial">Kembali ke login</a>
		      		</div>
	      		</form>
	      	</div>
	      	
	      	<?php endif; ?>
		</div>
	</div>

<div class="modal animated fadeIn " id="modal-kontak" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title"><i class="fa fa-info-circle"></i> Kontak Kami!</h3>
                <span> </span>    
            </div>
            <div class="modal-body">
				<p>
					<b>Untuk info lebih lanjut dapat menghubungi Kami di :</b>
				</p>
				<p>
					Telepon : (0718) 7362017
				</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>

            </div>
        </div>
    </div>
</div>

</body>
</html>
<?php  