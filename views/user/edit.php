<?php require('views/header.php'); ?>

<h1>Edit User</h1>

<form method="post" action="<?php echo URL . 'user/editSave/' . $this->user["id"];?>">
	<label>Login</label><input type="text" name="login" value="<?php echo $this->user["login"];?>"><br>
    <label>Password</label><input type="text" name="password"><br>
    <label>Role</label>
    	<select name="role">
       		<option value="default" <?php if($this->user["role"] == 'default') echo 'selected'; ?>>Default</option> 
            <option value="admin" <?php if($this->user["role"] == 'admin') echo 'selected'; ?>>Admin</option>
            <option value="admin" <?php if($this->user["role"] == 'owner') echo 'selected'; ?>>Owner</option>
        </select><br>
    <label></label><input type="submit" value="Submit">
</form>
 
<?php require('views/footer.php'); ?>