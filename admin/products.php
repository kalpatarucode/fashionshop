<?php
session_start();
include('dbconnect.php');

if(isset($_GET['del']))
		  {
		          mysqli_query($db,"delete from products where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Product deleted !!";
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
            <div class="row m-1 p-2 text-center">
                    <div class="col-sm-10">
                        <h3>Products</h3>
                    </div>
                    <div class="col-sm-2">
                        <a href="add_product.php" class="btn btn-info"><i
                                class="material-icons opacity-10">add</i>ADD Product</a>
                    </div>
                </div>
            <div class=" card row m-1">
                
                <div class=" table-responsive p-1 m-2">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Category </th>
                                <th>Subcategory</th>
                                <th>Company Name</th>
                                <th>Price</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $query=mysqli_query($db,"select products.*,category.category_name,sub_category.name from products join category on category.id=products.category join sub_category on sub_category.id=products.sub_category");
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($query))
                                    {
                                    ?>
                            <tr>
                                <td><?php echo htmlentities($cnt);?></td>
                                <td><?php echo htmlentities($row['pname']);?></td>
                                <td><?php echo htmlentities($row['category_name']);?></td>
                                <td> <?php echo htmlentities($row['name']);?></td>
                                <td><?php echo htmlentities($row['pcompany']);?></td>
                                <td><?php echo htmlentities($row['price']);?></td>
                                <td>
                                    <a href="edit_product.php?id=<?php echo $row['id']?>"><i
                                            class="material-icons btn btn-success opacity-10">edit</i></a>
                                    <a href="products.php?id=<?php echo $row['id']?>&del=delete"
                                        onClick="return confirm('Are you sure you want to delete?')"><i
                                            class="material-icons btn btn-danger opacity-10">delete</i></a>
                                </td>
                            </tr>
                            <?php $cnt=$cnt+1; } ?>

                    </table>
                </div>
                <!-- Contain End -->
            </div>
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