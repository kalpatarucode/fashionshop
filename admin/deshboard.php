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
                <h1>hello fashion shop</h1>
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