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
            <div class="row">
                <form method="POST">
                    <label>Name of sub category:</label>
                    <input class=" input-group-outline " type="text" name="name" required>
                    <label>Select a Category</label>
                    <select name="category">
                        <?php
				// use a while loop to fetch data
				// from the $all_categories variable
				// and individually display as an option
				while ($category = mysqli_fetch_array(
						$categoryes,MYSQLI_ASSOC)):;
			?>
                        <option  value="<?php echo $category["id"];
					// The value we usually set is the primary key
				?>">
                            <?php echo $category["category_name"];
						// To show the category name to the user
					?>
                        </option>
                        <?php
				endwhile;
				// While loop must be terminated
			?>
                    </select>
                    
                    
                    <input  type="submit" value="submit" class="btn bg-gradient-primary" name="submit">
                </form>
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