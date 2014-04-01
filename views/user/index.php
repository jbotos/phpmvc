<?php require('views/header.php'); ?>
 
<div class="row">
	 
	<article class="col-xs-12 col-sm-8">
        <h1>Current Users</h1>
        <div class="table-responsive">
            <table class="table table-striped">
            <tr>
                <th>User</th>
                <th>Role</th>
                <th></th>
            </tr>
                <?php foreach($this->userList as $key => $value)  { ?> 
                <tr>
                    <td><?php echo $value["login"]; ?></td>
                    <td><?php echo $value["role"]; ?></td> 
                    <td><a href="/user/edit/<?php echo $value["id"]; ?>">Edit</a> <a href="/user/delete/<?php echo $value["id"]; ?>">Delete</a></td> 
                </tr>
                <?php } ?>
            
            </table>
        </div>
	</article><!-- close col 12 -->
    
    
    <aside class="col-xs-12 col-sm-4">
        <div class="well">
            <h2>New User</h2>
            
            <?php
			if(Session::get('error')):
				echo '<div class="error">';			  
				foreach(Session::get('error') as $error) {
					echo '<p>' . $error . '</p>';		
				}
				echo '</div>';
			endif;
			?>
      
            <form role="form" action="<?php echo URL . 'user/save'?>" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Ex. jbotos">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              
              <div class="form-group">
                <label for="role">Role</label>
                <select name="role" class="form-control">
                    <option value="default">Default</option> 
                    <option value="admin">Admin</option>
                </select> 
              </div>
               
              <button type="submit" class="btn btn-default">Create User</button>
            </form>
		</div>
    </aside>
    
</div><!-- close row -->
<?php require('views/footer.php'); ?>