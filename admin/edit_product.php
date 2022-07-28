<?php
session_start();
include('dbconnect.php');
/* if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ } */
$pid=intval($_GET['id']);// product id	
if(isset($_POST['submit']))
{
    
	$category=$_POST['category'];
	$sub_category=$_POST['sub_category'];
	$pname=$_POST['pname'];
	$pcompany=$_POST['pcompany'];
	$price=$_POST['price'];
	$discount=$_POST['discount'];
	$pdiscription=$_POST['pdiscription'];
	$pcharge=$_POST['pcharge'];
	
//for getting product id
$sql=mysqli_query(

    $db,"update  products set 
    category='$category',
    sub_category='$sub_category',
    pname='$pname',
    pcompany='$pcompany',
    price='$price',
    pdescription='$pdiscription',
    shippingcharge='$pcharge',
    pdiscount='$discount' 
    where id='$pid' "
);
$_SESSION['msg']="Product Updated Successfully !!";
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

    function selectCountry(val) {
        $("#search-box").val(val);
        $("#suggesstion-box").hide();
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

                    <?php 

                    $query=mysqli_query(
                        $db,"select products.*,
                        category.category_name as category_name,
                        category.id as category_id,
                        sub_category.name as sub_category,
                        sub_category.id as subcatid
                        from products 
                        join category on category.id=products.category 
                        join sub_category on sub_category.id=products.sub_category 
                        where products.id='$pid'"
                    );
                    $cnt=1;
                    while($row=mysqli_fetch_array($query))
                    {
                    


                    ?>
                    <div class="row p-2 m-1">
                        <div class="col-sm-6">
                            <div class="input-group input-group-static mb-4">
                                <label class="form-label" for="basicinput">Category :</label>

                                <select name="category" class="form-control text-center"
                                    onChange="getSubcat(this.value);" required>
                                    <option value="<?php echo htmlentities($row['category_id']);?>">
                                        <?php echo htmlentities($row['category_name']);?></option>
                                    <?php   while($rw=mysqli_fetch_array($query))
												{
													if($row['category_name']==$rw['category_name'])
													{
														continue;
													}
													else{ 
													?>
                                    <option value="<?php echo $rw['id'];?>"><?php echo $rw['category_name'];?>
                                    </option>
                                    <?php  } } ?>
                                </select>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group input-group-static mb-4">
                                <label class="form-label" for="basicinput">Sub Category :</label>

                                <select name="sub_category" id="subcategory"
                                    class="form-control text-center border-primary " required>
                                    <option value="<?php echo htmlentities($row['subcatid']);?>">
                                        <?php echo htmlentities($row['sub_category']);?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row p-1 m-1 ">
                        <div class="col-sm-6">
                            <div class="input-group input-group-outline my-3 ">
                                <label class="form-label" for="basicinput">Product Name</label>

                                <input type="text" name="productname" class="form-control  text-center "
                                    value="<?php echo htmlentities($row['pname']);?>" required>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group input-group-outline my-3 ">
                                <label class="form-label" for="basicinput">Product Company</label>

                                <input type="text" name="pcompany" value="<?php echo htmlentities($row['pcompany']);?>"
                                    class="form-control text-center" required>

                            </div>
                        </div>
                    </div>
                    <div class="row p-2 m-1">
                        <div class="col-sm-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label" for="basicinput">Product Price</label>

                                <input type="text" name="price" value="<?php echo htmlentities($row['price']);?>"
                                    class="form-control text-center" required>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group input-group-outline my-3 border-primary">
                                <label class="form-label" for="basicinput">Discount</label>

                                <input type="text" name="discount" value="<?php echo htmlentities($row['pdiscount']);?>"
                                    class="form-control text-center" required>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label" for="basicinput">Shipping Charge</label>

                                <input type="text" value="<?php echo htmlentities($row['shippingcharge']);?>"
                                    name="pcharge" class="form-control text-center " required>

                            </div>
                        </div>
                    </div>
                    <div class="row p-2 m-1">

                        <div class="input-group input-group-outline my-3">
                            <label class="form-label" for="basicinput"></label>

                            <textarea name="pdiscription" <?php echo htmlentities($row['pdescription']);?> rows="6"
                                placeholder="Product Description"
                                class="form-control  border border-primary "></textarea>

                        </div>
                    </div>






                    <div class="row p-2 m-1">
                        <div class="col-sm-4 text-center">
                            <div class="card" data-animation="true">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="products/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['pimg1']);?>"
                                            width="300" height="100" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-lg">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;products/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['pimg1']);?>&quot;);">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <div class="d-flex mt-n6 mx-auto">

                                        <a href="update_img1.php?id=<?php echo $row['id'];?>"><i
                                                class="material-icons btn btn-success opacity-10">edit</i></a>
                                    </div>
                                    <h5 class="font-weight-normal mt-3">
                                        <a href="javascript:;">Image 1</a>
                                    </h5>
                                </div>

                            </div>
                        </div>


                        <div class="col-sm-4 text-center">
                            <div class="card" data-animation="true">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="products/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['pimg2']);?>"
                                            width="300" height="100" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-lg">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;products/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['pimg2']);?>&quot;);">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <div class="d-flex mt-n6 mx-auto">
                                       
                                        <a href="update_img2.php?id=<?php echo $row['id'];?>"><i
                                                class="material-icons btn btn-success opacity-10">edit</i></a>
                                    </div>
                                    <h5 class="font-weight-normal mt-3">
                                        <a href="javascript:;">Image 2</a>
                                    </h5>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="card" data-animation="true">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="products/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['pimg3']);?>"
                                            width="300" height="100" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-lg">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;products/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['pimg3']);?>&quot;);">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <div class="d-flex mt-n6 mx-auto">
                                       
                                    <a href="update_img3.php?id=<?php echo $row['id'];?>"><i
                                                class="material-icons btn btn-success opacity-10">edit</i></a>
                                    </div>
                                    <h5 class="font-weight-normal mt-3">
                                        <a href="javascript:;">Image 3</a>
                                    </h5>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
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