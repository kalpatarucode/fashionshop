<?php
session_start();
include('dbconnect.php');
/* if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ } */
	
if(isset($_POST['submit']))
{
    $id='';
	$category=$_POST['category'];
	$sub_category=$_POST['subcategory'];
	$pname=$_POST['pname'];
	$pcompany=$_POST['pcompany'];
	$price=$_POST['price'];
	$discount=$_POST['discount'];
	$pdiscription=$_POST['pdiscription'];
	$pcharge=$_POST['pcharge'];
	//$productavailability=$_POST['productAvailability'];
	$pimg1=$_FILES["pimg1"]["name"];
	$pimg2=$_FILES["pimg2"]["name"];
	$pimg3=$_FILES["pimg3"]["name"];
//for getting product id
$query=mysqli_query($db,"select max(id) as id from products");
	$result=mysqli_fetch_array($query);
	 $productid=$result['id']+1;
	$dir="products/$productid";
if(!is_dir($dir)){
		mkdir("products/".$productid);
	}

	move_uploaded_file($_FILES["pimg1"]["tmp_name"],"products/$productid/".$_FILES["pimg1"]["name"]);
	move_uploaded_file($_FILES["pimg2"]["tmp_name"],"products/$productid/".$_FILES["pimg2"]["name"]);
	move_uploaded_file($_FILES["pimg3"]["tmp_name"],"products/$productid/".$_FILES["pimg3"]["name"]);
$sql=mysqli_query($db,"insert into products(category,sub_category,pname,pcompany,price,pdiscount,pdescription,pimg1,pimg2,pimg3,shippingcharge) values('$category','$sub_category','$pname','$pcompany','$price','$discount','$pdiscription','$pimg1','$pimg2','$pimg3','$pcharge')");
$_SESSION['msg']="Product Inserted Successfully !!";

} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>deshboard</title>
    <!-- css start -->
    <?php include("css.php"); ?>
    <!-- css end-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    function getSubcat(val) {
        $.ajax({
            type: "POST",
            url: "get_subcategory.php",
            data: 'cat_id=' + val,
            success: function(data) {
                $("#subcategory").html(data);
            }
        });
    }

  
    </script>
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
            <div class=" card row">

                <form class="form-control" name="products" method="post" enctype="multipart/form-data">
                    <div class="row p-2 m-1">
                        <div class="col-sm-6">
                            <div class="input-group input-group-static mb-4">
                                <label class="form-label" for="basicinput">Category :</label>

                                <select name="category" class="form-control text-center "
                                    onChange="getSubcat(this.value);" required>
                                    <option value="">Select Category</option>
                                    <?php $query=mysqli_query($db,"select * from category");
                                            while($row=mysqli_fetch_array($query))
                                            {?>

                                    <option value="<?php echo $row['id'];?>"><?php echo $row['category_name'];?>
                                    </option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group input-group-static mb-4">
                                <label class="form-label" for="basicinput">Sub Category :</label>

                                <select name="subcategory" id="subcategory"
                                    class="form-control text-center border-primary " required>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row p-1 m-1 ">
                        <div class="col-sm-6">
                            <div class="input-group input-group-outline my-3 ">
                                <label class="form-label" for="basicinput">Product Name</label>

                                <input type="text" name="pname" class="form-control  text-center " required>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group input-group-outline my-3 ">
                                <label class="form-label" for="basicinput">Product Company</label>

                                <input type="text" name="pcompany" class="form-control" required>

                            </div>
                        </div>
                    </div>
                    <div class="row p-2 m-1">
                        <div class="col-sm-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label" for="basicinput">Product Price</label>

                                <input type="text" name="price" class="form-control" required>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group input-group-outline my-3 border-primary">
                                <label class="form-label" for="basicinput">Discount</label>

                                <input type="text" name="discount" class="form-control" required>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label" for="basicinput">Product Shipping Charge</label>

                                <input type="text" name="pcharge" class="form-control " required>

                            </div>
                        </div>
                    </div>
                    <div class="row p-2 m-1">

                        <div class="input-group input-group-outline my-3">
                            <label class="form-label" for="basicinput"></label>

                            <textarea name="pdiscription" rows="6" placeholder="Product Description"
                                class="form-control  border border-primary "></textarea>

                        </div>
                    </div>






                    <div class="row p-2 m-1">
                        <div class="col-sm-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label" for="basicinput">image 1</label>

                                <input type="file" name="pimg1" id="productimage1" value="" class="form-control"
                                    required>

                            </div>
                        </div>
                        <div class="col-sm-4">


                            <div class="input-group input-group-outline my-3">
                                <label class="form-label" for="basicinput">Image 2</label>

                                <input type="file" name="pimg2" class="form-control" required>

                            </div>
                        </div>
                        <div class="col-sm-4">


                            <div class="input-group input-group-outline my-3">
                                <label class="form-label" for="basicinput">Image 3</label>

                                <input type="file" name="pimg3" class="form-control">

                            </div>
                        </div>
                    </div>
                    <div class="row p-2 m-1">
                        <div class="input-group input-group-outline my-3 text-center">

                            <button type="submit" name="submit" class="btn btn-primary">Insert</button>

                        </div>
                    </div>
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
    <script>
    $(document).ready(function() {
        $('#category-dropdown').on('change', function() {
            var category_id = this.value;
            $.ajax({
                url: "get_subcategory.php",
                type: "POST",
                data: {
                    category_id: category_id
                },
                cache: false,
                success: function(result) {
                    $("#sub-category-dropdown").html(result);
                }
            });
        });
    });
    </script>
</body>

</html>