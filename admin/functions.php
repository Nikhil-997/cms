<?php
function confirm($result)
{
    global $connection;
    if(!$result)
    {
        die('query_fail' .mysqli_error($connection));
    }
}


function insert_categories()
{
    global $connection;
    if(isset($_POST['submit']))
                        {
                           $cat_title=$_POST['cat_title'];
                           if($cat_title == "" || empty($cat_title))
                           {
                               echo "This field should not be empty";
                           }
                           else
                           {
                               $query = "INSERT INTO categories(cat_title) ";
                               $query .= "VALUES('$cat_title')";

                               $create_catagory_query = mysqli_query($connection,$query);
                               if(!$create_catagory_query)
                               {
                                   die('query_faied' .mysqli_error($connection));
                               }
                           }
                        }
}

function findallcategory()
{
            global $connection;
            $query= "SELECT * FROM  categories";
            $select_categories= mysqli_query($connection,$query); 

            while($row = mysqli_fetch_assoc($select_categories)){
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];
            echo "<tr><td>{$cat_id}</td>";
            echo "<td>{$cat_title}</td>";
            echo "<td><a href ='catagories.php?delete={$cat_id}'>Delete</a></td>";
            echo "<td><a href ='catagories.php?edit={$cat_id}'>Edit</a></td></tr>";
 }


}

function deletecategory()
{
    global $connection;
    if(isset($_GET['delete']))
    {
        $the_cat_id=$_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id= {$the_cat_id} ";
        $delete_query = mysqli_query($connection,$query);
        header("Location: catagories.php");
    }
}




?>