<div class="col-md-4">

  <!-- Blog Search Well -->
  <div class="well">
    <h4>Blog Search</h4>
    <form name="search-form" action="index.php" method="post">
      <div class="input-group">      
        <input name="search-key" type="text" class="form-control">
        <span class="input-group-btn">
          <button name="search-submit" class="btn btn-default" type="submit">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>      
      </div>
    </form>
    <!-- /.input-group -->
  </div>

  <!-- Blog Categories Well -->
  <div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled">
          <?php
          $query = "SELECT * FROM categories";
          if($result = $mysqli->query($query)) {
            while($row = $result->fetch_assoc()) {
              echo "<li>
                    <a href='#'>{$row['title']}</a>
                            </li>";
            }
          } 
          else {
            echo "Query Error";
          }
          ?>         
        </ul>
      </div>
      <!-- /.col-lg-6 -->      
  </div>
  <!-- /.row -->
</div>

<!-- Side Widget Well -->
<div class="well">
  <h4>Side Widget Well</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>

</div>