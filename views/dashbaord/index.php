<?php require('views/header.php'); ?>

Dashboard logged in only

<form id="randomInsert" action="<?php echo URL; ?>dashboard/xhrInsert/" method="post">

	<label>Text</label>
    <input type="tet" name="text"><br>
    
    
    <label></label>
    <input type="submit" value="Submit">

</form>


<div id="listInserts">

</div>
<?php require('views/footer.php'); ?>