<?php
require('layouts/header.php');

use App\Controller\AuthController;

if(isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = AuthController::login($_POST);
}

?>
<main role="main" class="mt-5">
    <div class="container">
        <div id="message">

                <?php
                if (isset($message) && !empty($message)) {
                    echo " <p class='alert alert-info'>" .$message."</p>";
                }
                ?>


        </div>

        <form class="" method="POST" action="">
            <div class="form-group">
                <label>
                    Email
                </label>
                <input type="text" name="email" class="form-control" placeholder="Your email">
            </div>
            <div class="form-group">
                <lable>Password</lable>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" name="login" class="btn btn-info">Login</button>
            </div>
        </form>
        <p class="text-center">Does not have account yet? Please register <a href="register.php">here</a> </p>
    </div>

</main>

<?php
require('layouts/footer.php');
?>