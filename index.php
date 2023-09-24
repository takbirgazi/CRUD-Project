<!-- Header File Inlcude -->
<?php
include_once('assets/temp/header.php');
include_once('assets/temp/functions.php');
$config = new Crudproject();

if(isset($_POST['submit'])){
    $msg = $config->usr_login($_POST);
}
?>
    <main class="body_padding">
        <div class="login_form">
        <h4>Log in</h4>
            <form action="" method="post">
                <?php if(isset($msg)){echo $msg; } ?>
                <div class="input">
                    <label for="usr_name">User Name</label>
                    <input name="usr_name" type="text">
                </div>
                <div class="input">
                    <label for="usr_email">Email</label>
                    <input name="usr_email" type="text">
                </div>
                <div class="input">
                    <label for="usr_pwd">Password</label>
                    <input name="usr_pwd" type="password">
                </div>
                <div class="input">
                    <input name="submit" type="submit" value="Log In"> 
                </div>
            </form>
        </div>
    </main>
    <!-- Footer File Include  -->
<?php
include_once('assets/temp/footer.php');
?>