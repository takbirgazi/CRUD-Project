<!-- Header File Inlcude -->
<?php
include_once('assets/temp/header.php');
?>
    <main class="body_padding">
        <div class="container-fullwidth">
            <div class="row my-4">
                <div class="col-md-3">
                    <div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a class="text-decoration-none" href="?id=home">Home</a></li>
                            <li class="list-group-item"><a class="text-decoration-none" href="?id=add_post">Add Post</a></li>
                            <li class="list-group-item"><a class="text-decoration-none" href="?id=manage_post">Manage Post</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                <!-- conditonal Section  -->
                    <?php 
                        if(isset($_GET['id'])){
                            if($_GET['id']=='add_post'){
                                include_once("assets/temp/add_post.php");
                            }elseif($_GET['id']=='manage_post'){
                                include_once("assets/temp/manage_post.php");
                            }elseif($_GET['id']=='home'){
                                include_once("assets/temp/all_post.php");
                            }elseif($_GET['id']=='edit'){
                                include_once("assets/temp/edit_post.php");
                            }elseif($_GET['id']=='delete'){
                                include_once("assets/temp/manage_post.php");
                            }
                        }else{
                            include_once("assets/temp/all_post.php");
                        }
                        // include_once("assets/temp/add_post.php");
                        // include_once("assets/temp/all_post.php");
                        // include_once("assets/temp/manage_post.php");
                    ?>

                </div>
            </div>
        </div>
    </main>

    <!-- Footer File Include  -->
<?php
include_once('assets/temp/footer.php');
?>