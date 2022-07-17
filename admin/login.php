    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <!-- css start -->
        <?php include("css.php"); ?>
        <!-- css end-->
    </head>

    <body background="/fashionshop/admin/assets/images/logo/bglogin4.jpg">
    <div class="authentication">
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="company_detail">
                        <h4 class="logo"><img src="/fashionshop/admin/assets/images/logo/logo.svg" alt=""> WelCome TO Fashion Shop</h4>
                        <p> Halvad Largest online Fashion Shop </p>
                        
                    </div>                    
                </div>
                <div class="col-lg-5 col-md-12 offset-lg-1">
                    <div class="card-plain">
                        <div class="header">
                            <h5>Log in</h5>
                        </div>
                        <form class="form" action="auth.php" method="POST">
                            <div class="input-group">
                                <input type="text" name="username" class="form-control" placeholder="User Name">
                                <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                            <div class="input-group">
                                <input type="password" name="password" placeholder="Password" class="form-control" />
                                <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                            </div>    
                            <div>
                            <button type="submit" name="submit" class="btn btn-primary btn-round btn-block"> SIGN IN</button>
                            </div>                 
                        </form>
                        <div class="footer">                          
                           
                            <a href="sign-up.html" class="btn btn-primary btn-simple btn-round btn-block">SIGN UP</a>
                        </div>
                        <a href="forgot-password.html" class="link">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- script start-->
        <?php include("script.php"); ?>
        <!-- script end-->
    </body>

    </html>