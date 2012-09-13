<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Aplikacija za kreiranje momcadi i rezervaciju terena</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url();?>public/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/css/cupertino/jquery-ui-1.8.22.custom.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="<?php echo base_url();?>public/css/bootstrap-responsive.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-ui-1.8.22.custom.min.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url();?>public/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>public/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>public/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>public/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>public/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Aplikacija za kreiranje momcadi i rezervaciju terena</a>
          <div class="btn-group pull-right">
		  <?php if(!$this->tank_auth->is_logged_in()): ?>
            <a class="btn dropdown-toggle" href="<?php echo base_url("auth/login");?>">
				<i class="icon-user"></i> Prijava
			</a>
			<?php else: ?>
			<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
			  <i class="icon-user"></i> Bok, <?php echo $this->session->userdata['username']; ?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url("user/podaci");?>">Profile</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo base_url();?>auth/logout">Odjava</a></li>
            </ul>
			<?php endif; ?>
          </div>

        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span">

			<div class="tabbable tabs-left">
			  <ul class="nav nav-tabs">
				<li <?php if(uri_string() == "home/index") echo "class='active'" ?>><a href="<?php echo base_url("home/index");?>">Početna</a></li>
				<?php if(!$this->tank_auth->is_logged_in()):?>
				<li <?php if(uri_string() == "auth/register") echo "class='active'" ?>><a href="<?php echo base_url("auth/register");?>">Registracija</a></li>
				<?php endif;?>
				<li><a href="#">&nbsp;</a></li>
				<li <?php if(uri_string() == "user/podaci") echo "class='active'" ?>><a href="<?php echo base_url("user/podaci");?>">Moji podaci</a></li>
				<li <?php if(uri_string() == "user/prijave") echo "class='active'" ?>><a href="<?php echo base_url("user/prijave");?>">Moje prijave</a></li>
				<li><a href="#">&nbsp;</a></li>
				<li <?php if(uri_string() == "sportovi/kosarka") echo "class='active'" ?>><a href="<?php echo base_url("sportovi/kosarka");?>">Košarka</a></li>
				<li <?php if(uri_string() == "sportovi/nogomet") echo "class='active'" ?>><a href="<?php echo base_url("sportovi/nogomet");?>">Nogomet</a></li>
				<li <?php if(uri_string() == "sportovi/odbojka") echo "class='active'" ?>><a href="<?php echo base_url("sportovi/odbojka");?>">Odbojka</a></li>
			  </ul>
			  <div class="tab-content">
				<?php echo $content_for_layout ?>
			  </div>
			</div>

        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

	<script type="text/javascript" src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
  </body>
</html>
