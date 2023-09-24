<?php
include_once('functions.php');
$show = new Crudproject();
$row = $show->show_post();

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
                        <li class="list-group-item"><a class="text-decoration-none" href="#">View</a></li>
                    </ul>
                </td>
            </tr>
            <?php }?>

        </tbody>
        <!--Table body-->


    </table>
        <!--Table-->
</div>