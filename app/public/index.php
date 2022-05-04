<?php
require('layouts/header.php');
require('../Inc/bootstrap.php');

use App\Controller\BlogController;
use App\Controller\AuthorController;

$blogPosts = BlogController::getPost();

?>


<main role="main">
    <?php if (!empty($blogPosts) && isset($blogPosts)) {
        foreach ($blogPosts as $post) {
            ?>
    <div class="container-fluid m-3 single-blog">

       <div class="row">
           <div class="col-md-9 single-blog-text">
               <div class="single-blog-header-text d-flex">
                   <p>
                    <a href="singlepostdetails.php?id=<?php echo ($post['id']);?>"> <?php echo $post['created_at']; ?> </a>
                   </p> -
                   <p> <a href="singlepostdetails.php?id=<?php echo $post['id'];?>"> <?php echo $post['title']; ?> </a></p>
               </div>
               <p>
                   <?php echo substr($post['blogtext'], 0 , 1000) .' ...' ?>
               </p>
           </div>
           <div class="col-md-3 ">
               <a href="singlepostdetails.php?id='<?php echo $post['id'];?>'"> <img class="img img-fluid single-blog-image" src="<?php echo $post['url'] ?>" alt=""></a>
           </div>
       </div>
           <br>
           <div class="single-blog-footer-text clearfix">
               <div class="pull-left">Author: <a href="#" data-toggle="modal" data-target="#exampleModal"><?php echo BlogController::getAuthorNameById($post['authorid']) ?></a> </div>
               <a href="singlepostdetails.php?id=<?php echo $post['id'];?>">  <div class="pull-right">Comments</div></a>
           </div>
       </div>

    </div>
    <?php } }?>
    <div class="container">

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

    <!-- Author Modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">All Author List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                    <?php
                    $authors = AuthorController::getAllAuthors();
                    foreach($authors as $author) {
                    ?>
                        <li><?php echo $author['fullname']; ?></li>

                     <?php  } ?>

                     <ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


</main>


<?php
require('layouts/footer.php');
?>