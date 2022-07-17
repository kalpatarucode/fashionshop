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
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Dashboard</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="input-group m-b-0">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <p class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x col-amber"></i></p>
                            <span>Total Revenue</span>
                            <h3 class="m-b-10">$<span class="number count-to" data-from="0" data-to="2078"
                                    data-speed="2000" data-fresh-interval="700">2078</span></h3>
                            <small class="text-muted">27% lower growth</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <p class="m-b-20"><i class="zmdi zmdi-assignment zmdi-hc-3x col-blue"></i></p>
                            <span>Total Orders</span>
                            <h3 class="m-b-10 number count-to" data-from="0" data-to="865" data-speed="2000"
                                data-fresh-interval="700">865</h3>
                            <small class="text-muted">88% lower growth</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <p class="m-b-20"><i class="zmdi zmdi-shopping-basket zmdi-hc-3x"></i></p>
                            <span>Total Sales</span>
                            <h3 class="m-b-10 number count-to" data-from="0" data-to="3502" data-speed="2000"
                                data-fresh-interval="700">3502</h3>
                            <small class="text-muted">38% lower growth</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <p class="m-b-20"><i class="zmdi zmdi-account-box zmdi-hc-3x col-green"></i></p>
                            <span>New Employees</span>
                            <h3 class="m-b-10 number count-to" data-from="0" data-to="78" data-speed="2000"
                                data-fresh-interval="700">78</h3>
                            <small class="text-muted">78% lower growth</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card visitors-map">
                        <div class="header">
                            <h2><strong>Visit</strong> & Sales Statistics</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body m-b-10">
                            <div id="m_area_chart"></div>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-8 col-md-12">
                                    <div id="world-map-markers2" class="m-b-10"></div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0">
                                            <tbody>
                                                <tr>
                                                    <th><i class="zmdi zmdi-circle col-cyan"></i></th>
                                                    <td>USA</td>
                                                    <td><span>862 Records</span></td>
                                                    <td><span>35% <i class="zmdi zmdi-caret-up"></i></span></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="zmdi zmdi-circle"></i></th>
                                                    <td>Canada</td>
                                                    <td><span>451 Records</span></td>
                                                    <td><span>15% <i class="zmdi zmdi-caret-up"></i></span></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="zmdi zmdi-circle text-warning"></i></th>
                                                    <td>India</td>
                                                    <td><span>502 Records</span></td>
                                                    <td><span>20% <i class="zmdi zmdi-caret-down"></i></span></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="zmdi zmdi-circle text-info"></i></th>
                                                    <td>Australia</td>
                                                    <td><span>502 Records</span></td>
                                                    <td><span>20% <i class="zmdi zmdi-caret-up"></i></span></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="zmdi zmdi-circle text-danger"></i></th>
                                                    <td>UK</td>
                                                    <td><span>237 Records</span></td>
                                                    <td><span>10% <i class="zmdi zmdi-caret-up"></i></span></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="zmdi zmdi-circle"></i></th>
                                                    <td>France</td>
                                                    <td><span>237 Records</span></td>
                                                    <td><span>10% <i class="zmdi zmdi-caret-down"></i></span></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="zmdi zmdi-circle"></i></th>
                                                    <td>Germany</td>
                                                    <td><span>237 Records</span></td>
                                                    <td><span>10% <i class="zmdi zmdi-caret-up"></i></span></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="zmdi zmdi-circle"></i></th>
                                                    <td>China</td>
                                                    <td><span>237 Records</span></td>
                                                    <td><span>10% <i class="zmdi zmdi-caret-down"></i></span></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="zmdi zmdi-circle col-purple"></i></th>
                                                    <td>USE</td>
                                                    <td><span>237 Records</span></td>
                                                    <td><span>10% <i class="zmdi zmdi-caret-down"></i></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Campaign</strong> Performance</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a href="javascript:void(0);" class="boxs-close">Deletee</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body m-b-10">
                            <div class="progress-container l-black">
                                <span class="progress-badge">Facebook Campaign</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 68%;">
                                        <span class="progress-value">68%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body m-b-10">
                            <div class="progress-container progress-info">
                                <span class="progress-badge">Google AdSense</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 91%;">
                                        <span class="progress-value">91%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body m-b-20">
                            <div class="progress-container progress-warning">
                                <span class="progress-badge">LinkedIn Campaign</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 35%;">
                                        <span class="progress-value">35%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body align-center">
                            <div class="row">
                                <div class="col-4">
                                    <h4 class="margin-0">60%</h4>
                                    <p>Monthly</p>
                                </div>
                                <div class="col-4">
                                    <h4 class="margin-0">20%</h4>
                                    <p>Weekly</p>
                                </div>
                                <div class="col-4">
                                    <h4 class="margin-0">30%</h4>
                                    <p>Daily</p>
                                </div>
                            </div>
                            <div class="sparkline-pie">6,1,3</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Browser</strong> Usage</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a role="button" class="boxs-close">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="doughnut">
                                <canvas id="canvas" height="200"></canvas>
                                <canvas id="tooltip-canvas" width="150" height="100"></canvas>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 m-t-20">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <small>Page Views</small>
                                                <h5 class="m-b-0">32,211</h5>
                                            </td>
                                            <td>
                                                <div class="sparkline m-t-10" data-type="bar" data-width="97%"
                                                    data-height="30px" data-bar-Width="3" data-bar-Spacing="7"
                                                    data-bar-Color="#2b314a">2,3,5,6,9,8,7,8,7</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Site Visitors</small>
                                                <h5 class="m-b-0">2,516</h5>
                                            </td>
                                            <td>
                                                <div class="sparkline m-t-10" data-type="bar" data-width="97%"
                                                    data-height="30px" data-bar-Width="3" data-bar-Spacing="7"
                                                    data-bar-Color="#2b314a">8,5,3,2,2,3,5,6,4</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Total Clicks</small>
                                                <h5 class="m-b-0">4,536</h5>
                                            </td>
                                            <td>
                                                <div class="sparkline m-t-10" data-type="bar" data-width="97%"
                                                    data-height="30px" data-bar-Width="3" data-bar-Spacing="7"
                                                    data-bar-Color="#2b314a">6,5,4,6,5,1,8,4,2</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Total Returns</small>
                                                <h5 class="m-b-0">516</h5>
                                            </td>
                                            <td>
                                                <div class="sparkline m-t-10" data-type="bar" data-width="97%"
                                                    data-height="30px" data-bar-Width="3" data-bar-Spacing="7"
                                                    data-bar-Color="#2b314a">8,2,3,5,6,4,5,7,5</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Site</strong> Traffic</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a role="button" class="boxs-close">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body m-b-10">
                            <h5 class="m-b-0 number count-to" data-from="0" data-to="2651" data-speed="2000"
                                data-fresh-interval="700">2651</h5>
                            <p class="text-muted">Direct <span class="float-right">48%</span></p>
                            <div class="progress m-b-20">
                                <div class="progress-bar l-dark" role="progressbar" aria-valuenow="48" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 48%;"></div>
                            </div>

                            <h5 class="m-b-0 number count-to" data-from="0" data-to="251" data-speed="2000"
                                data-fresh-interval="700">251</h5>
                            <p class="text-muted">Referrals <span class="float-right">18%</span></p>
                            <div class="progress m-b-20">
                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="18"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 18%;"></div>
                            </div>

                            <h5 class="m-b-0 number count-to" data-from="0" data-to="941" data-speed="2000"
                                data-fresh-interval="700">941</h5>
                            <p class="text-muted">Search Engines <span class="float-right">67%</span></p>
                            <div class="progress">
                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="67"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 67%;"></div>
                            </div>
                        </div>
                        <div class="body">
                            <p class="m-b-10">Page View <small class="float-right">3,665</small></p>
                            <div id="sparkline14"></div>
                            <p class="m-b-10 m-t-30">Bounce Rate <small class="float-right">2,925</small></p>
                            <div id="sparkline15"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Application</strong> Sales <small>Members Preformance / Monthly Status</small>
                            </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a href="javascript:void(0);" class="boxs-close">Deletee</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body sales_report">
                            <div class="table-responsive">
                                <table class="table m-b-0 table-hover">
                                    <thead>
                                        <tr>
                                            <th>Application</th>
                                            <th>Team</th>
                                            <th>Change</th>
                                            <th>Sales</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6>Alpino 4.1</h6>
                                                <span>WrapTheme To By Again</span>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="sparkline text-left" data-type="line" data-width="8em"
                                                    data-height="20px" data-line-Width="1.5" data-line-Color="#00c5dc"
                                                    data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                                            </td>
                                            <td>11,200</td>
                                            <td>$83</td>
                                            <td><strong>$22,520</strong></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>Compass 2.0</h6>
                                                <span>WrapTheme To By Again</span>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="sparkline text-left" data-type="line" data-width="8em"
                                                    data-height="20px" data-line-Width="1.5" data-line-Color="#f4516c"
                                                    data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                                            </td>
                                            <td>11,200</td>
                                            <td>$66</td>
                                            <td><strong>$13,205</strong></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>Nexa 1.1</h6>
                                                <span>WrapTheme To By Again</span>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="sparkline text-left" data-type="line" data-width="8em"
                                                    data-height="20px" data-line-Width="1.5" data-line-Color="#31db3d"
                                                    data-fill-Color="transparent">7,3,2,1,5,4,6,8</div>
                                            </td>
                                            <td>12,080</td>
                                            <td>$93</td>
                                            <td><strong>$17,700</strong></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>Oreo 2.2</h6>
                                                <span>ThemeMakker To By Again</span>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar9.jpg" alt="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="sparkline text-left" data-type="line" data-width="8em"
                                                    data-height="20px" data-line-Width="1.5" data-line-Color="#2d342e"
                                                    data-fill-Color="transparent">3,1,2,5,4,6,2,3</div>
                                            </td>
                                            <td>18,200</td>
                                            <td>$178</td>
                                            <td><strong>$17,700</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Follow</strong> Us <small>Description text here...</small></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a class="boxs-close">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <ul class="follow_us list-unstyled">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Chris Fox</span>
                                                <span class="message">Designer, Blogger</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Joge Lucky</span>
                                                <span class="message">Java Developer</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Isabella</span>
                                                <span class="message">CEO, Thememakker</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Folisise Chosielie</span>
                                                <span class="message">Art director, Movie Cut</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Alexander</span>
                                                <span class="message">Writter, Mag Editor</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Traffic</strong> this month <small>7% higher than last Month</small></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a class="boxs-close">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body m-b-10">
                            <div class="row">
                                <div class="col-5 col-md-5 text-center">
                                    <input type="text" class="knob" value="86" data-width="50" data-height="50"
                                        data-thickness="0.2" data-fgColor="#e5678f">
                                </div>
                                <div class="col-7 col-md-7">
                                    <h3 class="m-b-0">78.02 Gb</h3>
                                </div>
                            </div>
                        </div>
                        <div class="body l-coral overflowhidden">
                            <p class="m-b-0">Outbound Bandwidth</p>
                            <h3>340</h3>
                            <div class="sparkline" data-type="line" data-spot-Radius="4"
                                data-highlight-Spot-Color="#fff" data-highlight-Line-Color="#222"
                                data-min-Spot-Color="#fff" data-max-Spot-Color="#fff" data-spot-Color="#fff"
                                data-offset="90" data-width="100%" data-height="135px" data-line-Width="2"
                                data-line-Color="#fff" data-fill-Color="transparent">2,3,5,6,4,5,1,2,3,2,5</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Invoice</strong></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a class="boxs-close">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                                    <address>
                                        <strong>ThemeMakker Inc.</strong> <small
                                            class="float-right">13/04/2018</small><br>
                                        795 Folsom Ave, Suite 546<br>
                                        San Francisco, CA 54656<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-34636
                                    </address>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Item</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>COMPASS 2.0</td>
                                            <td>$930</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>OREO 2.2</td>
                                            <td>$525</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><strong>$1455</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-warning btn-icon btn-icon-mini btn-round"><i
                                            class="zmdi zmdi-print"></i></button>
                                    <button class="btn btn-primary btn-round">Pay Now</button>
                                </div>
                            </div>
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