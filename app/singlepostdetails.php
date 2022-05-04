<?php
require ('layouts/header.php');
?>

<main role="main">

    <div class="container mt-3 single-blog">
        <div class="row">
            <div class="date-time">

            </div>
            <div class="blog-title single-blog-text">
                <h3>My blog Title</h3>
            </div>
        </div>
        <div class="row">
            <div class="blog-image single-blog-image text-center">
             <img src="https://via.placeholder.com/900x200" alt="">
            </div>
        </div>
        <div class="row">
            <div class="blog-text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac quam sapien. Nunc risus lacus, suscipit at consequat ac, hendrerit bibendum augue. Vivamus et tellus nunc. Nulla mollis porta ante et suscipit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec nunc nulla, fermentum at dictum id, dapibus in elit. Sed eu efficitur justo, vitae hendrerit enim. Donec risus dui, hendrerit eget ex ac, consequat feugiat odio. Praesent tellus augue, cursus eget mollis ac, pretium vel tellus. Proin blandit ut erat vitae pharetra. Pellentesque tristique nisl tortor. Vivamus laoreet nisl justo, in porttitor leo rutrum ut. Ut ut nisl quis felis tincidunt blandit. Aenean non tempor sapien. Pellentesque elit felis, placerat sed congue convallis, rhoncus ac tellus. Curabitur vitae lorem sed mauris commodo efficitur. Pellentesque tempor, orci eget scelerisque egestas, sapien massa molestie felis, eu consequat mauris metus quis ante. Vestibulum ultricies nunc sed purus sollicitudin hendrerit. Sed nec volutpat dolor. In hac habitasse platea dictumst. Duis finibus erat ullamcorper nisi porttitor sodales. Curabitur dapibus, ex ut accumsan congue, mi est pellentesque lectus, vel porta diam tortor et dui. Suspendisse iaculis diam eget ultricies ornare. Vivamus eget iaculis mi. Aenean eget quam ut sem mollis condimentum. Donec nec molestie nisi.
                </p>

                <p>
                    <strong>Author: Mohammad Jahidul Alam</strong>
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
require ('layouts/footer.php');
?>
