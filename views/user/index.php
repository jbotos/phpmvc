<?php require('views/header.php'); ?>

<h1>Current Users</h1>

<form method="post" action="<?php echo URL . 'user/create'?>">
	<label>Login</label><input type="text" name="login"><br>
    <label>Password</label><input type="text" name="password"><br>
    <label>Role</label>
    	<select name="role">
       		<option value="default">Default</option> 
            <option value="admin">Admin</option>
        </select><br>
    <label></label><input type="submit" value="Submit">
</form>


<table>
<tr>
	<td>User</td>
    <td>Role</td>
</tr>
	<?php foreach($this->userList as $key => $value)  { ?> 
    <tr>
        <td><?php echo $value["login"]; ?></td>
        <td><?php echo $value["role"]; ?></td> 
        <td><a href="/user/edit/<?php echo $value["id"]; ?>">Edit</a> <a href="/user/delete/<?php echo $value["id"]; ?>">Delete</a></td> 
    </tr>
    <?php } ?>

</table>
<?php require('views/footer.php'); ?>