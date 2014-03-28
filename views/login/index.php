<?php require('views/header.php'); ?>

<h1>Login</h1>

<form action="/login/run" method="post">

	<label>Login</label>
    <input type="tet" name="login"><br>
    
    <label>Password</label>
    <input type="password" name="password">
    
    <label></label>
    <input type="submit" value="Login">

</form>

<?php require('views/footer.php'); ?>