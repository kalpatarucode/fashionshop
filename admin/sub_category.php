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

<body class="theme-black">
    <!-- Page Loader -->
    <?php include("loader.php"); ?>
    <!-- End Page Loader -->

    <!-- overlay manu -->
    <?php include("overlay_menu.php"); ?>
    <!-- overlay manu end -->

    <!-- Overlay For Sidebars start -->
    <div class="overlay"></div>
    <!-- Overlay For Sidebars end-->

    <!-- admin mini sidebar start -->
    <?php include("admin_minisidebar.php"); ?>
    <!-- admin mini sidebar end -->

    <!-- admin sidebar menu start -->
    <aside class="right_menu">
        <!-- admin theam start -->
        <?php include("admin_theam.php"); ?>
        <!-- admin theam end  -->
        <!-- sidebar start -->
        <?php include("admin_sidebar.php"); ?>
        <!--  sidebar end -->
    </aside>
    <!-- admin  sidebar end -->

    <!-- Main Content Start -->
    <section class="content home">
        <div class="container-fluid">
            <!-- admin header  start-->
            <?php include("admin_header.php"); ?>
            <!-- admin header end-->

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Visit</strong> & Sales Statistics</h2>
                        </div>
                        <div class="body m-b-10">
                            <form method="POST">


                                <label>Name of sub category:</label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Enter Sub category name"  require/>

                                <label>Select a Category</label>
                                <select class="form-control" name="category">
                                    <option   value="">-- Please select --</option>

                                    <!--   use a while loop to fetch data
                                         from the $all_categories variable
                                         and individually display as an option -->
                                    <?php while ($category = mysqli_fetch_array($categoryes,MYSQLI_ASSOC)):;?>

                                    <option  value="<?php  echo $category["id"]; ?>">

                                        <!--show category name-->
                                        <?php echo $category["category_name"]; ?>

                                    </option>
                                    <?php endwhile; ?>


                                </select>


                        

                            <input type="submit" value="submit" class="btn bg-gradient-primary" name="submit">
                        </form>
                    </div>
                    <!-- Contain End -->

                </div>
            </div>
        </div>
        </div>

        </div>
    </section>
    <!-- Main Content end-->

    <!-- script start-->
    <?php include("script.php"); ?>
    <!-- script end-->
</body>

</html>