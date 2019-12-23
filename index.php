<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>

            <?php
                $get_posts_query = "SELECT * FROM posts";
                if($posts = $mysqli->query($get_posts_query)) {
                    while($post = $posts->fetch_assoc()) {
            ?>
                        <!-- Each Blog Post -->
                        <h2>
                            <a href='#'><?php echo $post['title'] ?></a>
                        </h2>
                        <p class='lead'>
                            by <a href='index.php'><?php echo $post['author']?></a>
                        </p>
                        <p><span class='glyphicon glyphicon-time'></span> Posted on <?php echo $post['date']?></p>
                        <hr>
                        <img class='img-responsive' src='<?php echo $post['image'] ?>' alt=''>
                        <hr>
                        <p><?php echo $post['content']?></p>
                        <a class='btn btn-primary' href='#'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>
                        <hr>  
            
            <?php
                    }
                }
            
            ?>
            
            
            <!-- First Blog Post -->
<!--
            <h2>
                <a href="#">Blog Post Title</a>
            </h2>
            <p class="lead">
                by <a href="index.php">Start Bootstrap</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
            <hr>
            <img class="img-responsive" src="http://placehold.it/900x300" alt="">
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
-->

            
        </div>

    <!-- Blog Sidebar Widgets Column -->
    <?php include "includes/sidebar.php"; ?>

    </div>
    <!-- /.row -->

    <hr>
<?php include "includes/footer.php"; ?>