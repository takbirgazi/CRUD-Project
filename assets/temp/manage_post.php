
<?php
include_once('functions.php');
$myobj = new Crudproject();
$row = $myobj->show_post();

// Delete Lojic
if(isset($_GET['id'])){
    if($_GET['id']=='delete'){
        $id= $_GET['sl'];
        $myobj->delete_post($id);
    }
}

?>



<div class="table-responsive ">
        <!--Table-->
    <table class="table table-striped">

        <!--Table head-->
        <thead>
            <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
            </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
            <?php 
                while($data = mysqli_fetch_assoc($row)){
            ?>
            <tr>
                <th scope="row"><?php echo $data['id'];?></th>
                <td><?php echo $data['post_title'];?></td>
                <td><?php echo $data['post_desc'];?></td>
                <td>  
                    <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a class="text-decoration-none" href="?id=edit&&sl=<?php echo $data['id'];?>">Edit</a></li>
                            <li class="list-group-item"><a onclick="return confirm('Are you sure?');" class="text-decoration-none text-danger" href="?id=delete&&sl=<?php echo $data['id'];?>">Delete</a></li>
                    </ul>
                </td>
            </tr>
            <?php }?>
        </tbody>
        <!--Table body-->


    </table>
        <!--Table-->
</div>