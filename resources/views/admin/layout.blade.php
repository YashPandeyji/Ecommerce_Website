<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('page_title')</title>

    <!-- Fontfaces CSS-->

   
    <link href="{{asset('admin_asset/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_asset/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    
    <link href="{{asset('admin_asset/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_asset/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('admin_asset/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    

    <!-- Vendor CSS-->
    <!-- <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all"> -->

    <!-- Main CSS-->
    <link href="{{asset('admin_asset/css/theme.css')}}" rel="stylesheet" media="all">


</head>

<body >
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="{{asset('admin_asset/images/icon/logo.png')}}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="{{url('admin/dashboard')}}">Dashboard</a>
                             
                         </li>
                         <li class="@yield('category_select')">
                            <a  href="{{url('admin/category')}}">
                            <i class="fas fa-list"></i>Category</a>
                           
                        </li>
                        <li class="@yield('coupon_select')">
                            <a href="{{url('admin/coupon')}}">
                                <i class="fas fa-tag"></i>Coupon</a>
                            
                         </li>
                         <li class="@yield('size_select')">
                            <a href="{{url('admin/size')}}">
                                <i class="fas fa-window-maximize"></i>Size</a>
                            
                         </li>
                         <li class="@yield('color_select')">
                            <a href="{{url('admin/color')}}">
                            <i class="	fa fa-pie-chart"></i>Color</a>
                            
                            <li class="@yield('product_select')">
                            <a href="{{url('admin/product')}}">
                            <i class="fa fa-product-hunt"></i>Product</a>
                        </li>
                      
                     
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="">
                    <img src="{{asset('admin_asset/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="@yield('dashboard_select')" >
                            <a href="{{url('admin/dashboard')}}"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                          
                        </li>
                        <li class="@yield('category_select')">
                            <a  href="{{url('admin/category')}}">
                            <i class="fas fa-list"></i>Category</a>
                           
                        </li>
                        <li class="@yield('coupon_select')">
                            <a href="{{url('admin/coupon')}}">
                                <i class="fas fa-tag"></i>Coupon</a>
                            
                         </li>
                         <li class="@yield('size_select')">
                            <a href="{{url('admin/size')}}">
                                <i class="fas fa-window-maximize"></i>Size</a>
                            
                         </li>
                         <li class="@yield('color_select')">
                            <a href="{{url('admin/color')}}">
                            <i class="	fa fa-pie-chart"></i>Color</a>
                            
                            <li class="@yield('product_select')">
                            <a href="{{url('admin/product')}}">
                            <i class="fa fa-product-hunt"></i>Product</a>
                        </li>
               
               
                       
                 
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{asset('admin_asset/images/icon/YP.jpg')}}" alt="Yash Pandey" />
                                        </div>
                                        <div class="content">
                                        
                                            <a class="js-acc-btn" href="#">Yash Pandey</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                            <div class="image">
                                            <img src="{{asset('admin_asset/images/icon/YP.jpg')}}" alt="Yash Pandey" />
                                        </div>
                                                <div class="content">
                                                
                                                    <h5 class="name">
                                                    
                                                        <a href="#">Yash Pandey</a>
                                                    </h5>
                                                    <span class="email">pandeyji.yash@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{url('admin/logout')}}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    @section('container')
                                @show
                                    
                         
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
         

    <!-- Jquery JS-->
   <script src="{{asset('admin_asset/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('admin_asset/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('admin_asset/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('admin_asset/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('admin_asset/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('admin_asset/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('admin_asset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('admin_asset/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('admin_asset/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('admin_asset/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('admin_asset/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('admin_asset/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('admin_asset/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('admin_asset/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->