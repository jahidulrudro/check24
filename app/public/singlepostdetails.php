<?php
require('layouts/header.php');
require('../Inc/bootstrap.php');

use App\Controller\BlogController;

$id = filter_var((int) $_GET['id'], FILTER_SANITIZE_NUMBER_INT);

if($id) {
    $singlePost = BlogController::getPostById($id);
}


?>

<main role="main">

    <div class="container mt-3 single-blog">
        <div class="row">
            <div class="date-time">
              <?php echo $singlePost['created_at']; ?>
            </div>
        </div>
        <div class="row">
            <div class="blog-title single-blog-text">
                <h3>  <?php echo $singlePost['title']; ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="">
             <img class="img img-fluid" src="<?php echo $singlePost['url'] ?>" alt="">
            </div>
        </div>
        <div class="row">
            <div class="blog-text">
                <p>
                    <?php echo $singlePost['blogtext'] ?>
                </p>

                <p>
                    <strong>Author: <?php echo BlogController::getAuthorNameById($singlePost['authorid']) ?></strong>
                </p>

            </div>

        </div>
    </div>
    <p class="text-center mt-3">Leave your comments below.</p>
    <div class="container mt-3 mb-3 single-blog">

        <form class="" action="" method="">
            <div class="form-group">
                <label>Name*</label>
                <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Mail*</label>
                <input type="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Url*</label>
                <input type="Url" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Kommentar*</label>
                <textarea class="form-control" name="comments">

                </textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info" name="">Submit</button>
            </div>
        </form>

    </div>
</main>
<?php
require('layouts/footer.php');
?>
