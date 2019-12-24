<?php include "includes/header.php" ?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

  <!-- Top Menu Items -->
  <?php include "includes/top-menubar.php" ?>        

  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
  <?php include "includes/side-menubar.php" ?>

</nav>

<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
      <h1 class="page-header">
        Post Categories
        <small></small>
      </h1>

      <?php 
        if(isset($_POST['add-category-submit'])) {
          $new_cat_title = $_POST['category-title'];
          create_category($mysqli, $new_cat_title);
        }
      ?>

      <!-- Add a new category -->
      <div class="col-lg-6">
        <form class="form" action="categories.php" method="post">
          <div class="form-group">
            <label for="category-title" class=""> New Category </label>
            <input name="category-title" type="text" class="form-control" id="category-title" placeholder="New Category">
          </div>
          <button name="add-category-submit" type="submit" class="btn btn-primary mb-2">Add</button>
        </form>       
      </div>

      <!-- List of all the categories -->
      <div class="col-lg-6">
        <table class="table table-bordered table-dark table-hover">
          <thead>
            <tr>
              <th class="col-lg-1">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">

                </div>
              </th>
              <th class="col-lg-2" scope="col">ID</th>
              <th scope="col">Category Title</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $cats = get_all_categories($mysqli);
            foreach($cats as $category) {
            ?>
            <tr>
              <td>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                </div>
              </td>
              <th scope="row"><?php echo $category['id'] ?></th>
              <td><?php echo $category['title'] ?></td>
            </tr>
            <?php
            }            
            ?>
          </tbody>
        </table>        
      </div>      
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include "includes/footer.php" ?>