<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="/public/css/default.css">
</head>

<body>
<?php Session::init(); ?>
<div id="header">
	header
    <ul>
    	<li><a href="/">Home</a></li>
        <li><a href="/help/">Help</a></li>
       
        <?php if(Session::get('loggedIn') == true): ?>
        <li><a href="/dashboard/logout">Logout</a></li>
        <?php else: ?>
         <li><a href="/login/">Login</a></li>
        <?php endif; ?>
    </ul>
</div>

<div id="content"> 


