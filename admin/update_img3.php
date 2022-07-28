<?php
session_start();
include('dbconnect.php');
/*if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{} */
$pid=intval($_GET['id']);// product id
if(isset($_POST['submit']))
{
	$pname=$_POST['pname'];
	$pimg3=$_FILES["pimg3"]["name"];
//$dir="productimages";
//unlink($dir.'/'.$pimage);


	move_uploaded_file($_FILES["pimg3"]["tmp_name"],"products/$pid/".$_FILES["pimg3"]["name"]);
	$sql=mysqli_query($db,"update  products set pimg3='$pimg3' where id='$pid' ");
$_SESSION['msg']="Product Image Updated Successfully !!";
header("location: /fashionshop/admin/edit_product.php?id=$pid");

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
            <div class="row p-2 m-1">
                <form class="form-horizontal row-fluid" name="insertproduct" method="post"
                    enctype="multipart/form-data">

                    <?php 

											$query=mysqli_query($db,"select pname,pimg3 from products where id='$pid'");
											$cnt=1;
											while($row=mysqli_fetch_array($query))
											{
											


											?>



                    <div class=" card ">

                        <div class="input-group input-group-outline my-3">
                            <label class="form-label" for="basicinput">Product Name</label>

                            <input type="text" name="pname" readonly value="<?php echo htmlentities($row['pname']);?>"
                                class="form-control text-center" required>
                        </div>

                        <!-- Card image -->
                        <div class="card-header">
                            <img class="border-radius-lg"
                                src="products/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['pimg3']);?>"
                                width="200" height="100" alt="Image placeholder">

                            <!-- Card body -->
                            <div class="card-body">
                                <h4 class="font-weight-normal mt-3">image 1</h4>

                                <input type="file" name="pimg3" id="pimg3" value="" class="input-group input-group-outline" required>
                            </div>


                            <button type="submit" name="submit" class="btn btn-primary">Update</button>

                        </div>
                    </div>
            </div>
        </div>




        <?php } ?>


        </form>
        <div class="card mt-4">

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