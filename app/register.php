<?php
require ('layouts/header.php');
?>
<main role="main" class="mt-5">
    <div class="container">
        <form class="" method="POST" action="">
            <div class="form-group">
                <label>
                    Username
                </label>
                <input type="text" name="username" class="form-control" placeholder="User name" required>
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
                <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="login" class="btn btn-info">Login</button>
            </div>
        </form>
        <p class="text-center">Already Have account Please login <a href="register.php">here</a> </p>
    </div>

</main>
<?php
require ('layouts/footer.php');
?>
