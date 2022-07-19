<?php
session_start();
include('dbconnect.php');



if(isset($_POST['submit']))
{
	$category=$_POST['category'];
	$subcat=$_POST['name'];
	$id=intval($_GET['id']);
$sql=mysqli_query($db,"update sub_category set category_id='$category',name='$subcat' where id='$id'");
$_SESSION['msg']="Sub-Category Updated !!";

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
            <div class="card row">
                <form method="POST">
                    <?php
                        $id=intval($_GET['id']);
                        $query=mysqli_query($db,"select category.id,category.category_name,sub_category.name from sub_category join category on category.id=sub_category.category_id where sub_category.id='$id'");
                        while($row=mysqli_fetch_array($query))
                        {
                        ?>
                    <div class="row p-2">
                    
                        <div class="col-sm-4">
                            <label class="p-1">Select a Category</label>
                            <select class="form-control border border-primary text-center" name="category" require>
                                <option value="<?php echo htmlentities($row['id']);?>">
                                    <?php echo htmlentities($catname=$row['category_name']);?></option>
                                <?php $ret=mysqli_query($db,"select * from category");
                                    while($result=mysqli_fetch_array($ret))
                                    {
                                    echo $cat=$result['category_name'];
                                    if($catname==$cat)
                                    {
                                        continue;
                                    }
                                    else{  ?>

                                <option value="<?php echo $result['id'];?>"><?php echo $result['category_name'];?>
                                </option>

                                <?php  } } ?>



                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label class="p-1">Name of sub category:</label>
                            <input type="text" class="form-control border border-primary text-center"
                                value="<?php echo  htmlentities($row['name']);?>" name="name" >

                        </div>
                       
                        <div class="col-sm-2 p-4 m-1 text-center">
                            <button type="submit" class="btn bg-gradient-primary" name="submit">Update </button>
                        </div>
                         <?php } ?> 
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
    <!-- script end-->
</body>

</html>