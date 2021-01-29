<div class="col-md-4">


<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <form action="search.php"method="post">
    <div class="input-group">
        <input name="search" type="text" class="form-control">
        <span class="input-group-btn">
            <button name="submit" value ='submit' class="btn btn-default" type="submit">
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
    </div>
    </form>
    <!-- /.input-group -->
</div>

<!-- Login -->
<div class="well">
    <h4>LOGIN</h4>
    <form action="include/login.php"method="post">
    <div class="form-group">
        <input name="username" type="text" class="form-control"placeholder="Enter_User_Name">
    </div>

    <div class="form-group">
        <input name="password" type="password" class="form-control"placeholder="Enter_Password">
        </br>
        <span class="input-group-btn">
        <center><button class='btn btn-primary'  type='submit' name='login'>Submit</button></center>
        
        </span>
    </div>
    
    </form>
    <!-- /.input-group -->
</div>






<!-- Blog Categories Well -->
<div class="well">
        <?php
                $query= "SELECT * FROM  categories";
                $select_categories_sidebar = mysqli_query($connection,$query);               
        ?>

    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-unstyled">
            <?php
            while($row = mysqli_fetch_assoc( $select_categories_sidebar)){
                $cat_title = $row['cat_title'];
                $cat_id = $row['cat_id'];
                echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
            }
            ?>
             
            </ul>
        </div>


   
    </div>
    <!-- /.row -->
</div>


<!-- Side Widget Well -->
<?php include "widget.php"; ?>

</div>