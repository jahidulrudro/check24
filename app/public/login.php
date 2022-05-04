<?php
require('layouts/header.php');
require('../Inc/bootstrap.php');

use App\Controller\AuthController;

if(isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    AuthController::login($_POST);
}

?>
<main role="main" class="mt-5">
    <div class="container">
        <form class="" method="POST" action="">
            <div class="form-group">
                <label>
                    Username
                </label>
                <input type="text" name="username" class="form-control" placeholder="User name">
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