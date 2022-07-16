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

    <body>
        <main class="main-content  mt-0">
            <div class="page-header align-items-start min-vh-100"
                style="background-image: url('/fashionshop/img/loginbg.jpg');">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container my-auto">
                    <div class="row">
                        <div class="col-lg-4 col-md-8 col-12 mx-auto">
                            <div class="card z-index-0 fadeIn3 fadeInBottom">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                                        <div class="row mt-3 text-center ">
                                            <h5 class="text-white">welcome To Fashionshop</h5>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="auth.php" method="POST"  class="text-start">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="form-check form-switch d-flex align-items-center mb-3">
                                            <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                                            <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember
                                                me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"  class="btn bg-gradient-primary w-100 my-4 mb-2">Sign                                         in</button>
                                        </div>
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <!-- script start-->
        <?php include("script.php"); ?>
        <!-- script end-->
    </body>

    </html>