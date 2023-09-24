<?php
include_once('functions.php');
$myobject = new Crudproject();
if(isset($_GET['sl'])){
    $sl= $_GET['sl'];
	$data = $myobject->fiend_post($sl);
}
if(isset($_POST['submit'])){
    $update = $myobject->myobject_post($_POST);
}


?>
<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create post</h1>
    		<?php if(isset($update)){ echo $update;}?>
    		<form action="" method="POST">
    		    
    		    <div class="form-group">
    		        <label for="title">Title</label>
    		        <input type="text" class="form-control" value="<?php echo $data['post_title']?>" name="title" required/>
    		    </div>
    		    
    		    <div class="form-group my-2">
                    <input type="hidden" name="postid" value="<?php echo $data['id']?>">
    		        <label for="desc">Description</label>
    		        <textarea rows="5" class="form-control" name="desc" required ><?php echo $data['post_desc']?></textarea>
    		    </div>
    		    
    		    <div class="form-group my-4">
                    <input type="submit" name="submit" value="Update" class="btn btn-primary">
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>