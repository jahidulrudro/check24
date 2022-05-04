<?php
require('layouts/header.php');

use App\Controller\BlogController;

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

    $message = BlogController::newPost($_POST);
}

?>
<main role="main">
<div class="container mt-5">
    <div id="message">

        <?php
        if (isset($message) && !empty($message)) {
            echo " <p class='alert alert-info'>" .$message."</p>";
        }
        ?>


    </div>
    <form action="" method="POST">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" placeholder="Blog Title">
        </div>
        <div class="form-group">
            <label>Link Zum bild</label>
            <input type="url" class="form-control" name="imageUrl">
        </div>
        <div class="form-group">
            <label>Text</label>
            <textarea id="editor" class="form-control" name="postText" cols="10" rows="10"></textarea>
        </div>
        <input type="hidden" name="authorId" value="<?php echo $_SESSION['id']; ?>">
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-info">Absenden</button>
        </div>
    </form>
</div>
</main>

<?php
require('layouts/footer.php');
?>
