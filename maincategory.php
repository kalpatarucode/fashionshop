<?php
session_start();
error_reporting(0);
include('admin/dbconnect.php');
$cid=intval($_GET['cid']);
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
				echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
		}else{
			$message="Product ID is invalid";
		}
	}
	
}
// COde for Wishlist
if(isset($_GET['pid']) && $_GET['action']=="wishlist" ){
	if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else
{
mysqli_query($db,"insert into wishlist(userId,productId) values('".$_SESSION['id']."','".$_GET['pid']."')");
echo "<script>alert('Product aaded in wishlist');</script>";
header('location:my-wishlist.php');

}
}?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fashion Shop</title>
    <?php include("css.php"); ?>
</head>

<body class="bg-theme bg-theme1"> <b class="screen-overlay"></b>
    <!--wrapper-->
    <div class="wrapper">

        <!--start top header wrapper-->
        <div class="header-wrapper bg-dark-1">
            <?php include("top_menu.php"); ?>
            <?php include("header.php"); ?>
            <?php include("menu.php"); ?>

        </div>
        <!--end top header wrapper-->
        <!--start slider section-->

        <!--end slider section-->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">


                <!--start breadcrumb-->
                <section class="py-3 border-bottom d-none d-md-flex">
                    <div class="container">
                        <div class="page-breadcrumb d-flex align-items-center">
                            <h3 class="breadcrumb-title pe-3">Shop Grid Left Sidebar</h3>
                            <div class="ms-auto">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0 p-0">
                                        <li class="breadcrumb-item"><a href="javascript:;"><i
                                                    class="bx bx-home-alt"></i> Home</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="javascript:;">Shop</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Shop Left Sidebar</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>
                <!--end breadcrumb-->
                <!--start shop area-->
                <section class="py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-xl-3">
                                <div class="btn-mobile-filter d-xl-none"><i class='bx bx-slider-alt'></i>
                                </div>
                                <div class="filter-sidebar d-none d-xl-flex">
                                    <div class="card rounded-0 w-100">
                                        <div class="card-body">

                                            <hr class="d-flex d-xl-none" />
                                            <div class="product-categories">
                                                <h6 class="text-uppercase mb-3">Categories</h6>
                                                <ul class="list-unstyled mb-0 categories-list">
                                                    <li><a href="javascript:;">Clothings <span
                                                                class="float-end badge rounded-pill bg-light">42</span></a>
                                                    </li>
                                                    <li><a href="javascript:;">Sunglasses <span
                                                                class="float-end badge rounded-pill bg-light">32</span></a>
                                                    </li>
                                                    <li><a href="javascript:;">Bags <span
                                                                class="float-end badge rounded-pill bg-light">17</span></a>
                                                    </li>
                                                    <li><a href="javascript:;">Watches <span
                                                                class="float-end badge rounded-pill bg-light">217</span></a>
                                                    </li>
                                                    <li><a href="javascript:;">Furniture <span
                                                                class="float-end badge rounded-pill bg-light">28</span></a>
                                                    </li>
                                                    <li><a href="javascript:;">Shoes <span
                                                                class="float-end badge rounded-pill bg-light">145</span></a>
                                                    </li>
                                                    <li><a href="javascript:;">Accessories <span
                                                                class="float-end badge rounded-pill bg-light">15</span></a>
                                                    </li>
                                                    <li><a href="javascript:;">Headphones <span
                                                                class="float-end badge rounded-pill bg-light">8</span></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-9">
                                <div class="product-wrapper">

                                    <div class="product-grid">
                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
                                            <?php
                                            $ret=mysqli_query($db,"select * from products where category='$cid'");
                                            
                                            $num=mysqli_num_rows($ret);
                                            if($num>0)
                                            {
                                            while ($row=mysqli_fetch_array($ret)) 
                                            {?>
                                            <div class="col">
                                                <div class="card rounded-0 product-card">
                                                    <div class="card-header bg-transparent border-bottom-0">
                                                        <div
                                                            class="d-flex align-items-center justify-content-end gap-3">

                                                            <a href="javascript:;">
                                                                <div class="product-wishlist"> <i
                                                                        class="bx bx-heart"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <img src="admin/products/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['pimg1']);?>"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <div class="product-info">
                                                            <a href="javascript:;">
                                                                <p class="product-catergory font-13 mb-1"> category name
                                                                </p>
                                                            </a>
                                                            <a href="javascript:;">
                                                                <h6 class="product-name mb-2">
                                                                    <?php echo htmlentities($row['pname']);?></h6>
                                                            </a>
                                                            <div class="d-flex align-items-center">
                                                                <div class="mb-1 product-price"> <span
                                                                        class="me-1 text-decoration-line-through">Rs.<?php echo htmlentities($row['pdiscount']);?> </span>
                                                                    <span class="text-white fs-5">Rs.
                                                                        <?php echo htmlentities($row['price']);?>
                                                                    </span>
                                                                </div>
                                                                <div class="cursor-pointer ms-auto"> <i
                                                                        class="bx bxs-star text-white"></i>
                                                                    <i class="bx bxs-star text-white"></i>
                                                                    <i class="bx bxs-star text-white"></i>
                                                                    <i class="bx bxs-star text-white"></i>
                                                                    <i class="bx bxs-star text-white"></i>
                                                                </div>
                                                            </div>
                                                            <div class="product-action mt-2">
                                                                <div class="d-grid gap-2">
                                                                    <a href="javascript:;"
                                                                        class="btn btn-light btn-ecomm"> <i
                                                                            class="bx bxs-cart-add"></i>Add to Cart</a>
                                                                    <a href="javascript:;"
                                                                        class="btn btn-link btn-ecomm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#QuickViewProduct"><i
                                                                            class="bx bx-zoom-in"></i>Quick View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } } else {?>
                                            
                                                <h3>No Product Found</h3>
                                            <

                                            <?php } ?>


                                        </div>
                                        <!--end row-->
                                    </div>
                                    <hr>
                                    <nav class="d-flex justify-content-between" aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="javascript:;"><i
                                                        class='bx bx-chevron-left'></i> Prev</a>
                                            </li>
                                        </ul>
                                        <ul class="pagination">
                                            <li class="page-item active d-none d-sm-block" aria-current="page"><span
                                                    class="page-link">1<span
                                                        class="visually-hidden">(current)</span></span>
                                            </li>
                                            <li class="page-item d-none d-sm-block"><a class="page-link"
                                                    href="javascript:;">2</a>
                                            </li>
                                            <li class="page-item d-none d-sm-block"><a class="page-link"
                                                    href="javascript:;">3</a>
                                            </li>
                                            <li class="page-item d-none d-sm-block"><a class="page-link"
                                                    href="javascript:;">4</a>
                                            </li>
                                            <li class="page-item d-none d-sm-block"><a class="page-link"
                                                    href="javascript:;">5</a>
                                            </li>
                                        </ul>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="javascript:;"
                                                    aria-label="Next">Next <i class='bx bx-chevron-right'></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </section>
                <!--end shop area-->
            </div>
        </div>
        <!--end page wrapper -->
        <!--start footer section-->
        <?php include("footer.php"); ?>
        <!--end footer section-->


        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <?php include("theam.php"); ?>
    <!--end switcher-->
    <!-- Js link  start-->
    <?php include("script.php"); ?>
    <!-- js link end -->
</body>

</html>