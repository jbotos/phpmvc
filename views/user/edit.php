<?php require('views/header.php'); ?>

 
<div class="row">



	<article class="col-xs-12">
   
        <h1>Edit User: <?php echo $this->user["login"];?></h1>
         
        <form class="form-horizontal" role="form" action="<?php echo URL . 'user/save/' . $this->user["id"];?>" method="post">
          <div class="form-group">
            <label for="username" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="username" name="login" value="<?php echo $this->user["login"];?>">
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="password" name="password">
            </div>
          </div>
          <div class="form-group">
          	<label for="role" class="col-sm-2 control-label">Role</label>
            <div class="col-sm-5">
                <select id="role" name="role" class="form-control">
                    <option value="default" <?php if($this->user["role"] == 'default') echo 'selected'; ?>>Default</option> 
                    <option value="admin" <?php if($this->user["role"] == 'admin') echo 'selected'; ?>>Admin</option>
                    <option value="owner" <?php if($this->user["role"] == 'owner') echo 'selected'; ?>>Owner</option>
                </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Update User</button>
            </div>
          </div>
        </form>
    
	</article><!-- close col 12 -->
 
</div><!-- close row -->




 
<?php require('views/footer.php'); ?>