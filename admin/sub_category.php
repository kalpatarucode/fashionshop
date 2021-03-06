<?php
    include("dbconnect.php");

	// Connect to database
	//$con = mysqli_connect("localhost","root","","fashionshop");
	
	// mysqli_connect("servername","username","password","database_name")

	// Get all the categories from category table
	$sql = "SELECT * FROM `category`";
	$categoryes = mysqli_query($db,$sql);

	// The following code checks if the submit button is clicked
	// and inserts the data in the database accordingly
	if(isset($_POST['submit']))
	{
		// Store the subcategory name in a "name" variable
		$name = mysqli_real_escape_string($db,$_POST['name']);
		
		// Store the Category ID in a "id" variable
		$id = mysqli_real_escape_string($db,$_POST['category']);
		
		// Creating an insert query using SQL syntax and
		// storing it in a variable.
		$sql_insert ="INSERT INTO `sub_category`(`name`, `category_id`)
			VALUES ('$name','$id')";
		
		// The following code attempts to execute the SQL query
		// if the query executes with no errors
		// a javascript alert message is displayed
		// which says the data is inserted successfully
		if(mysqli_query($db,$sql_insert))
		{
			echo '<script>alert("Product added successfully")</script>';
		}
	}
    if(isset($_GET['del']))
		  {
		          mysqli_query($db,"delete from sub_category where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="SubCategory deleted !!";
		  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>deshboard</title>
    <!-- css start -->
    <?php include("css.php"); ?>
    <!-- css end-->
</head>

<body class="g-sidenav-show  bg-gray-200">
    <!--sidebar start-->
    <?php include("admin_sidebar.php"); ?>
    <!-- sidebar end-->

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- navbar start-->
        <?php include("admin_navbar.php"); ?>
        <!-- navbar end-->

        <div class="container-fluid py-4">
            <!-- Contain Start-->
            <div class="card row">
                <form method="POST">
                    <div class="row p-2 m-2">
                        
                        <div class="col-sm-4">
                            <label class="p-1">Select a Category</label>
                            <select class="form-control border border-primary text-center" name="category" required>
                                <option value=""> -- Please select --</option>

                                <!--   use a while loop to fetch data
                                         from the $all_categories variable
                                         and individually display as an option -->
                                <?php while ($category = mysqli_fetch_array($categoryes,MYSQLI_ASSOC)):;?>

                                <option value="<?php  echo $category["id"]; ?>">

                                    <!--show category name-->
                                    <?php echo $category["category_name"]; ?>

                                </option>
                                <?php endwhile; ?>


                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label class="p-1">Name of sub category:</label>
                            <input type="text" class="form-control border border-primary text-center" name="name"
                                placeholder="  enter category" required>
                        </div>
                        <div class="col-sm-2 p-4 m-1 text-center">

                            <input type="submit" value="submit" class="btn btn-info" name="submit">
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div class="card row m-1">
                <div class="p-2 text-center">
                    <h3>Category && Subcategory</h3>
                </div>
                <div class="table table-responsive p-1 m-2">
                    <table  class="table align-items-center mb-0" >
                        <thead class="thead-dark" >
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Sub category</th>                                
                                <th>Action</th>

                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php $query=mysqli_query($db,"select sub_category.id,category.category_name,sub_category.name from sub_category join category on category.id=sub_category.category_id");
                        $cnt=1;
                            while($row=mysqli_fetch_array($query))
                                {
                                    ?>
                            <tr>
                                <td><?php echo htmlentities($cnt);?></td>
                                <td><?php echo htmlentities($row['category_name']);?></td>
                                <td><?php echo htmlentities($row['name']);?></td><td>
                                <a href="edit_sub_category.php?id=<?php echo $row['id']?>" ><i class="material-icons btn btn-success opacity-10">edit</i></a>
								<a href="sub_category.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="material-icons btn btn-danger opacity-10">delete</i></a></td>
                                </td>
                            </tr>
                            <?php $cnt=$cnt+1; } ?>

                    </table>
                </div>

             </div>
                <!-- Contain End -->

                <!-- Admin Footer Start -->
                <?php include("admin_footer.php"); ?>
                <!-- Admin Footer end -->
            </div>
            <!-- Contain End-->
    </main>
    <!-- deshboard Theam start-->
    <?php include("admin_theam.php"); ?>
    <!-- deshboard theam end -->
    <!-- script start-->
    <?php include("script.php"); ?>
    <!-- script end-->
</body>

</html>