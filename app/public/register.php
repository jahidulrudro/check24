<?php
require('layouts/header.php');
require('../Inc/bootstrap.php');

use App\Controller\AuthController;

if (isset($_POST['register']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

    $message = AuthController::register($_POST);
}

?>
<main role="main" class="mt-5">
    <div class="container">
        <div id="message">
            <p class="alert alert-info">
                <?php
                if (isset($message) && !empty($message)) {
                    echo $message;
                }
                ?>
            </p>

        </div>
        <form class="" method="POST">
            <div class="form-group">
                <label>
                    Full Name
                </label>
                <input type="text" name="fullName" class="form-control" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <label>
                    Email
                </label>
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <lable>Password</lable>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <lable>Confirm Password</lable>
                <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password"
                       required>
            </div>
            <div class="form-group">
                <button type="submit" name="register" class="btn btn-info">Login</button>
            </div>
        </form>
        <p class="text-center">Already Have account Please login <a href="register.php">here</a></p>
    </div>

</main>
<?php
require('layouts/footer.php');
?>
