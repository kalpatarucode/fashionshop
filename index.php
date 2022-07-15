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
        <?php include("slider.php"); ?>
        <!--end slider section-->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">

                <!-- main category start-->
                <?php include("category.php"); ?>
                <!-- main category end-->

                <!--start support info-->
                
                <!--end support info-->

            </div>
        </div>
        <!--end page wrapper -->
        <!--start footer section-->
        <?php include("footer.php"); ?>
        <!--end footer section-->
        
       
        <!--Start Back To Top Button-->
         <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
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