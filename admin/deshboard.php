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
                            <div id="m_area_chart"></div>
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