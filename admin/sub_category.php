<?php

	// Connect to database
	$con = mysqli_connect("localhost","root","","fashionshop");
	
	// mysqli_connect("servername","username","password","database_name")

	// Get all the categories from category table
	$sql = "SELECT * FROM `category`";
	$categoryes = mysqli_query($con,$sql);

	// The following code checks if the submit button is clicked
	// and inserts the data in the database accordingly
	if(isset($_POST['submit']))
	{
		// Store the subcategory name in a "name" variable
		$name = mysqli_real_escape_string($con,$_POST['name']);
		
		// Store the Category ID in a "id" variable
		$id = mysqli_real_escape_string($con,$_POST['category']);
		
		// Creating an insert query using SQL syntax and
		// storing it in a variable.
		$sql_insert ="INSERT INTO `sub_category`(`name`, `category_id`)
			VALUES ('$name','$id')";
		
		// The following code attempts to execute the SQL query
		// if the query executes with no errors
		// a javascript alert message is displayed
		// which says the data is inserted successfully
		if(mysqli_query($con,$sql_insert))
		{
			echo '<script>alert("Product added successfully")</script>';
		}
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
                    <div class="row p-2">
                        <div class="col-sm-3">
                            <label class="p-1">Name of sub category:</label>
                            <input type="text" class="form-control border border-primary" name="name"
                                placeholder="  enter category" require>
                        </div>
                        <div class="col-sm-4">
                            <label class="p-1">Select a Category</label>
                            <select class="form-control border border-primary" name="category" require>
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
                        <div class="col-sm-2 p-4 m-1">

                            <input type="submit" value="submit" class="btn bg-gradient-primary" name="submit">
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div class="card row">
                <div class="">
                    <h3>Sub Category</h3>
                </div>
                <div class=" table table-bordered ">
                    <table cellpadding="0" cellspacing="0" border="0"
                        class="datatable-1 table table-bordered table-striped	 display" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Sub category</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php $query=mysqli_query($con,"select sub_category.id,category.category_name,sub_category.name from sub_category join category on category.id=sub_category.category_id");
                        $cnt=1;
                            while($row=mysqli_fetch_array($query))
                                {
                                    ?>
                            <tr>
                                <td><?php echo htmlentities($cnt);?></td>
                                <td><?php echo htmlentities($row['category_name']);?></td>
                                <td><?php echo htmlentities($row['name']);?></td>
                                
                            </tr>
                            <?php $cnt=$cnt+1; } ?>

                    </table>

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