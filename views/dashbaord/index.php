<?php require('views/header.php'); ?>


<div class="row">
 
	<article class="col-xs-12 col-sm-8">
   
        <h1>Dashboard Updates</h1>
        <div id="listInserts"></div>
    
	</article><!-- close col 12 -->
    
    
    <aside class="col-xs-12 col-sm-4">
    	
        <div class="well">
            <h2>New Update</h2> 
            <form id="randomInsert" action="<?php echo URL . 'dashboard/xhrInsert/'?>" method="post">
                <div class="form-group">
                    <label for="text">Update</label>
                    <textarea type="text" class="form-control" id="text" name="text" placeholder="Ex. The fox jumped over the wall"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Post an Update</button>
            </form>
        
		</div><!-- close well -->

    </aside>
    
</div><!-- close row -->


 
 
<?php require('views/footer.php'); ?>