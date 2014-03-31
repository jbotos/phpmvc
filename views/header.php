<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/public/css/default.css">
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<?php // Include Javascript
		if(isset($this->js))
		{
			foreach($this->js as $js)
			{
				echo '<script type="text/javascript" src="' . URL . $js .'"></script>';	
			}
		}
	?>

</head>

<body>
<?php Session::init(); ?>

<div class="wrap">

<div id="header">
	<h1>Custom PHP MVC Framework</h1>
    <ul class="nav">
    	<?php if(Session::get('loggedIn') == false): ?>
        <li><a href="/">Home</a></li>
        <li><a href="/help/">Help</a></li>
        <?php endif; ?>
        
        
        
       
        <?php if(Session::get('loggedIn') == true): ?>
        <li><a href="/dashboard/">Dashboard</a></li>
        	
            <?php if(Session::get('role') == 'owner'): ?>
            <li><a href="/user">Users</a></li>
            <?php endif; ?>
        
        <li><a href="/dashboard/logout">Logout</a></li>
        <?php else: ?>
         <li><a href="/login/">Login</a></li>
        <?php endif; ?>
    </ul>
</div>

<div id="content"> 


