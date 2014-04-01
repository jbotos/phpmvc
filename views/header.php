<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP MVC</title>

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' type='text/css'>
<link rel="stylesheet" href="/public/css/default.css">
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<?php // Include Javascript
		if(isset($this->js))
		{
			foreach($this->js as $js)
			{
				echo '<script type="text/javascript" src="' . URL . $js .'"></script>';	
			}
		}
	?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="<?php if(Session::get('loggedIn'))  echo "dashboard"; else echo "main";?>">
<?php Session::init(); ?>
 
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo URL; ?>">Cusotm PHP MVC</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	
			<?php if(Session::get('loggedIn') == false): ?>
            <li class="active"><a href="<?php echo URL; ?>">Home</a></li>
            <li><a href="<?php echo URL; ?>help">Help</a></li>
            <?php endif; ?>
            
            <?php if(Session::get('loggedIn') == true): ?>
            <li><a href="<?php echo URL; ?>dashboard">Dashbaord</a></li>
            <li><a href="<?php echo URL; ?>article">Articles</a></li>
				<?php if(Session::get('role') == 'owner'): ?>
                
                <li><a href="<?php echo URL; ?>user">Users</a></li>
                
                <?php endif; ?>
     			<li><a href="<?php echo URL; ?>dashboard/logout">Logout</a></li>
            <?php else: ?>
         	<li><a href="/login/">Login</a></li>
        	<?php endif; ?>
        
            <?php /*?><li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li><?php */?>
          </ul>
        </div><!--/.nav-collapse -->
        
      </div>
    </div>
    
 
<div class="container"> 
	<div class="wrap">


