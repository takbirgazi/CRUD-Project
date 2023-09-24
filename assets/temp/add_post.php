<?php
include_once('functions.php');
$insert = new Crudproject();
if(isset($_POST['submit'])){
	$msg = $insert->insert_post($_POST);
}


?>
<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create post</h1>
    		<?php if(isset($msg)){ echo $msg;}?>
    		<form action="" method="POST">
    		    
    		    <div class="form-group">
    		        <label for="title">Title</label>
    		        <input type="text" class="form-control" name="title" required/>
    		    </div>
    		    
    		    <div class="form-group my-2">
    		        <label for="desc">Description</label>
    		        <textarea rows="5" class="form-control" name="desc" required ></textarea>
    		    </div>
    		    
    		    <div class="form-group my-4">
                    <input type="submit" name="submit" value="Create" class="btn btn-primary">
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>