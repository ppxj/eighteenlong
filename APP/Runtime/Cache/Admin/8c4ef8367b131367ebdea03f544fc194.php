<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>FlatApp - Premium, Responsive and Flat Bootstrap Admin Dashboard Template</title>

        <meta name="description" content="FlatApp is a Premium, Responsive and Flat Bootstrap Admin Dashboard Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="../Public/img/favicon.ico">
        <link rel="apple-touch-icon" href="../Public/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="../Public/img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../Public/img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../Public/img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../Public/img/apple-touch-icon-precomposed.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- The roboto font is included from Google Web Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic">

        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="../Public/css/bootstrap.css">

        <!-- Related styles of various icon packs and javascript plugins -->
        <link rel="stylesheet" href="../Public/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="../Public/css/main.css">

        <!-- Load a specific file here from css/themes/ folder to alter the default theme of all the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements (must included last) -->
        <link rel="stylesheet" href="../Public/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (Browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it) -->
        <script src="../Public/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <!-- Body -->
    <!-- In the PHP version you can set the following options from the config file -->
    <!-- Add the class .hide-side-content to <body> to hide side content by default -->
    <body>
        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from the config file -->
        <!-- Add the class .full-width for a full width page -->
        <div id="page-container" class="full-width">
            <!-- Header -->
            <!-- In the PHP version you can set the following options from the config file -->
            <!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively -->
            <!-- If you add the class .navbar-fixed-top remember to add the class .header-fixed-top to <body> element! -->
            <!-- If you add the class .navbar-fixed-bottom remember to add the class .header-fixed-bottom to <body> element! -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-top"> -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-bottom"> -->
            <header class="navbar navbar-inverse">
                <!-- Navbar Inner -->
                <div class="navbar-inner">
                    <!-- div#row-fluid -->
                    <div class="row-fluid">
                        <!-- Sidebar Toggle Buttons (Desktop & Tablet) -->
                        <div class="span4 hidden-phone">
                            <ul class="nav pull-left">
                                <!-- Desktop Button (Visible only on desktop resolutions) -->
                                <li class="visible-desktop">
                                    <a href="javascript:void(0)" id="toggle-side-content">
                                        <i class="icon-reorder"></i>
                                    </a>
                                </li>
                                <!-- END Desktop Button -->

                                <!-- Tablet Button -->
                                <li class="visible-tablet">
                                    <!-- It is set to open and close the left sidebar on tablets. The class .nav-collapse was added to aside#page-sidebar -->
                                    <a href="javascript:void(0)" data-toggle="collapse" data-target=".nav-collapse">
                                        <i class="icon-reorder"></i>
                                    </a>
                                </li>
                                <!-- END Tablet Button -->

                                <!-- Divider -->
                                <li class="divider-vertical remove-margin"></li>
                            </ul>
                        </div>
                        <!-- END Sidebar Toggle Buttons -->

                        <!-- Brand and Search Section -->
                        <div class="span4 text-center">
                            <!-- Top search -->
                            <form id="top-search" class="pull-left" action="page_ready_search_results.html" method="post">
                                <input type="text" id="search-term" name="search-term" placeholder="Search..">
                            </form>
                            <!-- END Top search -->

                            <!-- Logo -->
                            <a href="index.html" class="brand">
                                <img src="../Public/img/template/logo.png" alt="logo">
                            </a>
                            <!-- END Logo -->

                            <!-- Loading Indicator, Used for demostrating how loading of notifications could happen, check main.js - uiDemo() -->
                            <div id="loading" class="hide"><i class="icon-spinner icon-spin"></i></div>
                        </div>
                        <!-- END Brand and Search Section -->

                        <!-- Header Nav Section -->
                        <div id="header-nav-section" class="span4 clearfix">
                            <!-- Header Nav -->
                            <ul class="nav pull-right">
                                <!-- Theme Options, functionality initialized at main.js - templateOptions() -->
                                <li class="dropdown dropdown-theme-options">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Theme Options</a>
                                    <ul class="dropdown-menu">
                                        <!-- Page Options -->
                                        <li class="theme-extra visible-desktop">
                                            <label for="theme-page-full">
                                                <input type="checkbox" id="theme-page-full" name="theme-page-full" class="input-themed">
                                                Full width page
                                            </label>
                                        </li>
                                        <!-- END Page Options -->

                                        <!-- Divider -->
                                        <li class="divider visible-desktop"></li>

                                        <!-- Sidebar Options -->
                                        <li class="theme-extra visible-desktop">
                                            <label for="theme-sidebar-sticky">
                                                <input type="checkbox" id="theme-sidebar-sticky" name="theme-sidebar-sticky" class="input-themed">
                                                Sticky Sidebar
                                            </label>
                                        </li>
                                        <!-- END Sidebar Options -->

                                        <!-- Divider -->
                                        <li class="divider visible-desktop"></li>

                                        <!-- Header Options -->
                                        <li class="theme-extra visible-desktop">
                                            <label for="theme-header-top">
                                                <input type="checkbox" id="theme-header-top" name="theme-header-top" class="input-themed">
                                                Top fixed header
                                            </label>
                                            <label for="theme-header-bottom">
                                                <input type="checkbox" id="theme-header-bottom" name="theme-header-bottom" class="input-themed">
                                                Bottom fixed header
                                            </label>
                                        </li>
                                        <!-- END Header Options -->

                                        <!-- Divider -->
                                        <li class="divider visible-desktop"></li>

                                        <!-- Color Themes -->
                                        <li>
                                            <ul class="theme-colors clearfix">
                                                <li class="active">
                                                    <a href="javascript:void(0)" class="img-circle themed-background-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-amethyst themed-border-amethyst" data-theme="../Public/css/themes/amethyst.css" data-toggle="tooltip" title="Amethyst"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-army themed-border-army" data-theme="../Public/css/themes/army.css" data-toggle="tooltip" title="Army"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-asphalt themed-border-asphalt" data-theme="../Public/css/themes/asphalt.css" data-toggle="tooltip" title="Asphalt"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-autumn themed-border-autumn" data-theme="../Public/css/themes/autumn.css" data-toggle="tooltip" title="Autumn"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-cherry themed-border-cherry" data-theme="../Public/css/themes/cherry.css" data-toggle="tooltip" title="Cherry"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-city themed-border-city" data-theme="../Public/css/themes/city.css" data-toggle="tooltip" title="City"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-dawn themed-border-dawn" data-theme="../Public/css/themes/dawn.css" data-toggle="tooltip" title="Dawn"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-deepsea themed-border-deepsea" data-theme="../Public/css/themes/deepsea.css" data-toggle="tooltip" title="Deepsea"></a>
                                                </li>
                                                <li><a href="javascript:void(0)" class="img-circle themed-background-diamond themed-border-diamond" data-theme="../Public/css/themes/diamond.css" data-toggle="tooltip" title="Diamond"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-fire themed-border-fire" data-theme="../Public/css/themes/fire.css" data-toggle="tooltip" title="Fire"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-grass themed-border-grass" data-theme="../Public/css/themes/grass.css" data-toggle="tooltip" title="Grass"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-leaf themed-border-leaf" data-theme="../Public/css/themes/leaf.css" data-toggle="tooltip" title="Leaf"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-night themed-border-night" data-theme="../Public/css/themes/night.css" data-toggle="tooltip" title="Night"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-ocean themed-border-ocean" data-theme="../Public/css/themes/ocean.css" data-toggle="tooltip" title="Ocean"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-oil themed-border-oil" data-theme="../Public/css/themes/oil.css" data-toggle="tooltip" title="Oil"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-stone themed-border-stone" data-theme="../Public/css/themes/stone.css" data-toggle="tooltip" title="Stone"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-sun themed-border-sun" data-theme="../Public/css/themes/sun.css" data-toggle="tooltip" title="Sun"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-tulip themed-border-tulip" data-theme="../Public/css/themes/tulip.css" data-toggle="tooltip" title="Tulip"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-wood themed-border-wood" data-theme="../Public/css/themes/wood.css" data-toggle="tooltip" title="Wood"></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END Color Themes -->
                                    </ul>
                                </li>
                                <!-- END Theme Options -->

                                <!-- Divider -->
                                <li class="divider-vertical remove-margin"></li>

                                <!-- Notifications -->
                                <li class="dropdown dropdown-notifications">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-warning-sign"></i>
                                        <span class="badge badge-neutral">4</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="alert">
                                                <i class="icon-bell"></i> <strong>App</strong> Please pay attention!
                                            </div>
                                            <div class="alert alert-error">
                                                <i class="icon-bell-alt"></i> <strong>App</strong> There was an error!
                                            </div>
                                            <div class="alert alert-info">
                                                <i class="icon-bolt"></i> <strong>App</strong> Info message!
                                            </div>
                                            <div class="alert alert-success">
                                                <i class="icon-bullhorn"></i> <strong>App</strong> Service restarted!
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="icon-warning-sign pull-right"></i>Notification Center</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END Notifications -->

                                <!-- Messages -->
                                <li class="dropdown dropdown-messages">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-envelope-alt"></i>
                                        <span class="badge badge-neutral display-none"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="media">
                                                <a class="pull-left" href="javascript:void(0)" data-toggle="tooltip" title="Newbie">
                                                    <img src="../Public/img/placeholders/image_64x64_dark.png" alt="fakeimg" class="img-circle">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading clearfix"><span class="label label-success">1 min ago</span><a href="javascript:void(0)">Username</a></h5>
                                                    <div class="media">Lorem ipsum dolor sit amet, consectetur..</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <div class="media">
                                                <a class="pull-left" href="javascript:void(0)" data-toggle="tooltip" title="Pro">
                                                    <img src="../Public/img/placeholders/image_64x64_dark.png" alt="fakeimg" class="img-circle">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading clearfix"><span class="label label-success">2 hours ago</span><a href="javascript:void(0)">Username</a></h5>
                                                    <div class="media">Lorem ipsum dolor sit amet, consectetur..</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <div class="media">
                                                <a class="pull-left" href="javascript:void(0)" data-toggle="tooltip" title="VIP">
                                                    <img src="../Public/img/placeholders/image_64x64_dark.png" alt="fakeimg" class="img-circle">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading clearfix"><a href="javascript:void(0)">Username</a><span class="label label-success">3 days ago</span></h5>
                                                    <div class="media">Lorem ipsum dolor sit amet, consectetur..</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="page_comp_inbox.html"><i class="icon-envelope-alt pull-right"></i>Message Center</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END Messages -->
                            </ul>
                            <!-- END Header Nav -->

                            <!-- Mobile Navigation, Shows up on mobile -->
                            <ul class="nav pull-left visible-phone">
                                <li>
                                    <!-- It is set to open and close the main navigation on mobiles. The class .nav-collapse was added to aside#page-sidebar -->
                                    <a href="javascript:void(0)" data-toggle="collapse" data-target=".nav-collapse">
                                        <i class="icon-reorder"></i>
                                    </a>
                                </li>
                                <li class="divider-vertical remove-margin"></li>
                            </ul>
                            <!-- END Mobile Navigation, Shows up on mobile -->
                        </div>
                        <!-- END Header Nav Section -->
                    </div>
                    <!-- END div#row-fluid -->
                </div>
                <!-- END Navbar Inner -->
            </header>
            <!-- END Header -->
            <!-- Left Sidebardd -->
            <!-- In the PHP version you can set the following options from the config file -->
            <!-- Add the class .sticky for a sticky sidebar -->
            <!-- Left Sidebar a-->
			<!--  Left Sidebar  -->
<aside id="page-sidebar" class="nav-collapse collapse">
                <!--
                Wrapper for scrolling functionality
                Used only if the .sticky class added above. You can remove it and you will have a sticky sidebar
                without scrolling enabled when you set the sidebar to be sticky
            -->
            <div class="side-scrollable">
                <!-- Mini Profile -->
                <div class="mini-profile">
                    <div class="mini-profile-options">
                        <a href="javascript:void(0)" class="badge badge-info loading-on" data-toggle="tooltip" data-placement="right" title="" data-original-title="Refresh">
                            <i class="icon-refresh"></i>
                        </a>
                        <a href="page_ready_shopping_cart.html" class="badge badge-warning" data-toggle="tooltip" data-placement="right" title="" data-original-title="6 Products">
                            <i class="glyphicon-shopping_cart"></i>
                        </a>
                        <!-- Modal div is at the bottom of the page before including javascript code, we use .enable-tooltip class for the tooltip because data-toggle is used for modal -->
                        <a href="#modal-user-account" class="badge badge-success enable-tooltip" role="button" data-toggle="modal" data-placement="right" title="" data-original-title="Settings">
                            <i class="glyphicon-cogwheel"></i>
                            </a>
                        <a href="<?php echo U(GROUP_NAME.'/Login/logout');?>" class="badge badge-important" data-toggle="tooltip" data-placement="right" title="" data-original-title="Log out">
                            <i class="icon-signout"></i>
                        </a>
                    </div>
                    <a href="page_ready_user_profile.html">
                        <img src="/eighteenlong/APP/Modules/Admin/Tpl/Public/img/template/avatar2@2x.jpg" alt="Avatar" class="img-circle" width="120" height="120">
                    </a>
                </div>
                <!-- END Mini Profile -->

                <!-- Sidebar Tabs -->
                <div class="sidebar-tabs-con">
                    <ul class="sidebar-tabs" data-toggle="tabs">
                        <li class="active">
                            <a href="#side-tab-menu"><i class="glyphicon-list"></i></a>
                        </li>
                        <li>
                            <a href="#side-tab-extra"><i class="glyphicon-user"></i></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="side-tab-menu">
                            <!-- Primary Navigation -->
                            <nav id="primary-nav">
                                <ul>
                                    <li>
                                        <a href="index.html" class=" active"><i class="glyphicon-display"></i>Dashboard</a>
                                    </li>                                        z
                                    <!-- 系统管理 -->
                                    <li>
                                        <a href="#" class="menu-link"><i class="icon-cogs"></i>系统管理<span>555</span></a>
                                        <ul>  
                                                  <!-- 总后台用户管理                             -->
                                            <li>
                                                <a href="#" class="submenu-link">总后台用户管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/adminuser');?>"><i class="icon-list"></i>总后台用户列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/AdminuserWork');?>">在职人员</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/AdminuserDimission');?>">离职人员</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/addAdminuser');?>"><i class="icon-edit"></i>添加总后台用户</a>
                                                    </li> 
                                                </ul>
                                            </li>
                                            <!-- 权限动作管理 -->
                                            <li>
                                                <a href="#" class="submenu-link">权限动作管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/adminaction');?>" ><i class="icon-list"></i>权限动作列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/addadminaction');?>"><i class="icon-edit"></i>添加权限动作</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- 权限模块管理 -->
                                            <li>
                                                <a href="#" class="submenu-link">权限模块管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/adminModule');?>" ><i class="icon-list"></i>权限模块列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/');?>"><i class="icon-edit"></i>添加权限模块</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        <!-- 权限角色管理 -->
                                            <li>
                                                <a href="#" class="submenu-link">权限角色管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <!-- <a href="<?php echo U(GROUP_NAME.'/Adminrole/index');?>" ><i class="icon-list"></i>权限角色列表</a> -->
                                                        <a href="javascript:void(0)" data-name="<?php echo U(GROUP_NAME.'/System/index');?>" id="click"><i class="icon-list"></i>权限角色列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/adminrole');?>"><i class="icon-edit"></i>添加权限角色</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- 省份管理 -->
                                            <li>
                                                <a href="#" class="submenu-link">省份管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/index');?>" ><i class="icon-list"></i>省份列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/province');?>"><i class="icon-edit"></i>添加省份</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        <!-- 城市管理 -->
                                            <li>
                                            
                                                <a href="#" class="submenu-link">城市管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/index');?>" ><i class="icon-list"></i>城市列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/city');?>"><i class="icon-edit"></i>添加城市</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        <!-- 区县管理 -->
                                            <li>
                                                <a href="#" class="submenu-link">区县管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/index');?>" ><i class="icon-list"></i>区县列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/district');?>"><i class="icon-edit"></i>添加区县</a>
                                                    </li>
                                                </ul>
                                            </li>
                                             <!-- 房屋类型管理 -->
                                            <li>
                                                <a href="#" class="submenu-link">房屋类型管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/index');?>" ><i class="icon-list"></i>房屋类型列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/categoryapartment');?>"><i class="icon-edit"></i>添加房屋类型</a>
                                                    </li>
                                                </ul>
                                            </li>
                                             <!-- 造价预算管理 -->
                                            <li>
                                                <a href="#" class="submenu-link">造价预算管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/index');?>" ><i class="icon-list"></i>造价预算列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/categorycost');?>"><i class="icon-edit"></i>添加造价预算</a>
                                                    </li>
                                                </ul>
                                            </li>
                                             <!-- 设计风格管理 -->
                                            <li>
                                                <a href="#" class="submenu-link">设计风格管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/index');?>" ><i class="icon-list"></i>设计风格列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/categorystyle');?>"><i class="icon-edit"></i>添加设计风格</a>
                                                    </li>
                                                </ul>
                                            </li>
                                             <!-- 设计专长管理 -->
                                            <li>
                                                <a href="#" class="submenu-link">设计专长管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/index');?>" ><i class="icon-list"></i>设计专长列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/System/categoryexpertise');?>"><i class="icon-edit"></i>添加设计专长</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="page_ready_blank.html">Blank</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- end 系统管理 -->

                                    <!-- 内容发布 -->
                                    <li>
                                        <a href="#" class="menu-link"><i class="icon-folder-open"></i>内容发布<span>555</span></a>
                                        <ul>                                        
                                            <li>
                                                <a href="#" class="submenu-link">文章管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/Publisher/sitearticle');?>" ><i class="icon-list"></i>文章列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/Publisher/addsitearticle');?>"><i class="icon-edit"></i>发表文章</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="submenu-link">效果图管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/Publisher/sitecase');?>"><i class="icon-list"></i>效果图列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/Publisher/addsitecase');?>"><i class="icon-edit"></i>发布效果图</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="page_ready_blank.html">Blank</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- end 内容发布 -->
                                    <!-- 网站管理 -->
                                    <li>
                                        <a href="#" class="menu-link"><i class="icon-folder-open"></i>网站管理<span>555</span></a>
                                        <ul>                                        
                                            <li>
                                                <a href="#" class="submenu-link">业主评论管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/index');?>" ><i class="icon-list"></i>业主评论列表</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="submenu-link">企业管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/index');?>" ><i class="icon-list"></i>企业列表</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#" class="submenu-link">设计师管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/index');?>" ><i class="icon-list"></i>设计师列表</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#" class="submenu-link">案例管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/index');?>" ><i class="icon-list"></i>案例列表</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#" class="submenu-link">工地管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/index');?>" ><i class="icon-list"></i>工地列表</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#" class="submenu-link">资讯管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/index');?>" ><i class="icon-list"></i>资讯列表</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#" class="submenu-link">优惠管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/index');?>" ><i class="icon-list"></i>优惠列表</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="submenu-link">友情链接管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/index');?>" ><i class="icon-list"></i>友情链接列表</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#" class="submenu-link">分站负责人管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/index');?>" ><i class="icon-list"></i>分站负责人列表</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="submenu-link">分站横幅管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/index');?>" ><i class="icon-list"></i>分站横幅列表</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#" class="submenu-link">分站首页管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/index');?>" ><i class="icon-list"></i>分站首页列表</a>
                                                    </li>

                                                </ul>
                                            </li>




                                        </ul>
                                    </li>
                                    <!-- end 网站管理 -->

                                    <!-- 装修管家 -->
                                    <li>
                                        <a href="#" class="menu-link"><i class="icon-folder-open"></i>装修管家<span>555</span></a>
                                        <ul>                                        
                                            <li>
                                                <a href="#" class="submenu-link">分单管理<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/index');?>" ><i class="icon-list"></i>订单列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/work');?>"><i class="icon-edit"></i>发表文章</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="page_ready_blank.html">Blank</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- end 装修管家 -->

                                    <!-- 电销电话 -->
                                    <li>
                                        <a href="#" class="menu-link"><i class="icon-folder-open"></i>电销电话<span>555</span></a>
                                        <ul>                                        
                                            <li>
                                                <a href="#" class="submenu-link">我的订单<span>555</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/index');?>" ><i class="icon-list"></i>订单列表</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo U(GROUP_NAME.'/User/work');?>"><i class="icon-edit"></i>添加订单</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="page_ready_blank.html">Blank</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- end 电销电话 -->

                                    <!-- 修改密码 -->
                                    <li>
                                        <a href="#" class="menu-link"><i class="icon-folder-open"></i>修改密码<span>555</span></a>

                                    </li>
                                    <!-- end 修改密码 -->

                                    <!-- 注销登录 -->
                                    <li>
                                        <a href="#" class="menu-link"><i class="icon-folder-open"></i>修改密码<span>555</span></a>

                                    </li>
                                    <!-- end注销登录 -->

                                    <!-- 内容发布 -->

                                    <!-- end 内容发布 -->
                                    <li>
                                        <a href="#" class="menu-link"><i class="glyphicon-vector_path_curve"></i>User Interface<span>9</span></a>
                                        <ul>
                                            <li>
                                                <a href="page_ui_blocks.html">Blocks</a>
                                            </li>
                                            <li>
                                                <a href="page_ui_grid.html">Grid</a>
                                            </li>
                                            <li>
                                                <a href="page_ui_typography.html">Typography</a>
                                            </li>
                                            <li>
                                                <a href="page_ui_navigation.html">Navigation</a>
                                            </li>
                                            <li>
                                                <a href="page_ui_tabs_accordions.html">Tabs &amp; Accordions</a>
                                            </li>
                                            <li>
                                                <a href="page_ui_buttons_dropdowns.html">Buttons &amp; Dropdowns</a>
                                            </li>
                                            <li>
                                                <a href="page_ui_progress_bars.html">Progress Bars</a>
                                            </li>
                                            <li>
                                                <a href="page_ui_carousel.html">Carousel</a>
                                            </li>
                                            <li>
                                                <a href="page_ui_extras.html">Extras</a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li>
                                        <a href="#" class="menu-link"><i class="glyphicon-table"></i>Tables<span>3</span></a>
                                        <ul>
                                            <li>
                                                <a href="page_tables_static.html">Static</a>
                                            </li>
                                            <li>
                                                <a href="page_tables_dynamic.html">Dynamic</a>
                                            </li>
                                            <li>
                                                <a href="page_tables_editable.html">Editable</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-link"><i class="glyphicon-more_windows"></i>Forms<span>7</span></a>
                                        <ul>
                                            <li>
                                                <a href="page_forms_general.html">General</a>
                                            </li>
                                            <li>
                                                <a href="page_forms_layouts_styles.html">Layouts &amp; Styles</a>
                                            </li>
                                            <li>
                                                <a href="page_forms_pickers_grid.html">Pickers &amp; Grid</a>
                                            </li>
                                            <li>
                                                <a href="page_forms_textareas_wysiwyg.html">Textareas &amp; WYSIWYG</a>
                                            </li>
                                            <li>
                                                <a href="page_forms_upload_dropzone.html">File Upload &amp; Dropzone</a>
                                            </li>
                                            <li>
                                                <a href="page_forms_validation.html">Validation</a>
                                            </li>
                                            <li>
                                                <a href="page_forms_wizard.html">Wizard</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-link"><i class="glyphicon-fire"></i>Components<span>10</span></a>
                                        <ul>
                                            <li>
                                                <a href="page_comp_inbox.html">Inbox</a>
                                            </li>
                                            <li>
                                                <a href="page_comp_chat.html">Chat</a>
                                            </li>
                                            <li>
                                                <a href="page_comp_timeline.html">Timeline</a>
                                            </li>
                                            <li>
                                                <a href="page_comp_tiles.html">Tiles</a>
                                            </li>
                                            <li>
                                                <a href="page_comp_gallery.html">Gallery</a>
                                            </li>
                                            <li>
                                                <a href="page_comp_charts.html">Charts</a>
                                            </li>
                                            <li>
                                                <a href="page_comp_calendar.html">Calendar</a>
                                            </li>
                                            <li>
                                                <a href="#" class="submenu-link">Maps<span>2</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="page_comp_vector_maps.html">Vector Maps</a>
                                                    </li>
                                                    <li>
                                                        <a href="page_comp_google_maps.html">Google Maps</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="page_comp_syntax_highlighting.html">Syntax Highlighting</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-link"><i class="glyphicon-pizza"></i>Icon Packs<span>1</span></a>
                                        <ul>
                                            <li>
                                                <a href="page_icons_glyphicons_pro.html">Glyphicons Pro</a>
                                            </li>
                                            <li>
                                                <a href="page_icons_glyphicons_halflings_pro.html">Glyphicons Halflings Pro</a>
                                            </li>
                                            <li>
                                                <a href="page_icons_fontawesome.html">FontAwesome</a>
                                            </li>
                                            <li>
                                                <a href="page_icons_gemicon.html">Gemicon</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-link"><i class="glyphicon-certificate"></i>Ready UI<span>12</span></a>
                                        <ul>
                                            <li>
                                                <a href="page_ready_search_results.html">Search Results</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_user_profile.html">User Profile</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_pricing_tables.html">Pricing Tables</a>
                                            </li>
                                            <li>
                                                <a href="#" class="submenu-link">e-Shop<span>3</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="page_ready_product.html">Product</a>
                                                    </li>
                                                    <li>
                                                        <a href="page_ready_products_list.html">Products List</a>
                                                    </li>
                                                    <li>
                                                        <a href="page_ready_shopping_cart.html">Shopping Cart</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="page_ready_invoice.html">Invoice</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_article.html">Article</a>
                                            </li>
                                            <li>
                                                <a href="page_ready_faq.html">FAQ</a>
                                            </li>
                                            <li>
                                                <a href="#" class="submenu-link">Errors<span>2</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="page_ready_errors.html">In-Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="page_ready_standalone_error.html">Standalone</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="page_ready_blank.html">Blank</a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li>
                                        <a href="page_landing.html"><i class="glyphicon-leaf"></i>Landing Page</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo U(GROUP_NAME.'/Login/loginout');?>"><i class="glyphicon-power"></i>退出登录</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo U(GROUP_NAME.'/Login/loginout');?>"><i class="glyphicon-power"></i>Login Page</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- END Primary Navigation -->
                        </div>
                        <div class="tab-pane tab-pane-side" id="side-tab-extra">
                            <h5><i class="icon-briefcase pull-right"></i>Balance</h5>
                            <div class="side-stat text-center text-info"><strong>$25.230,<small>00</small></strong></div>

                            <h5><i class="icon-dollar pull-right"></i>Earnings (today)</h5>
                            <div class="side-stat text-center text-info"><strong>$1.752,<small>00</small></strong></div>

                            <h5><i class="icon-shopping-cart pull-right"></i>Sales (today)</h5>
                            <div class="side-stat text-center text-info"><strong>368</strong></div>

                            <h5><i class="icon-shopping-cart pull-right"></i>Sales (this month)</h5>
                            <div class="side-stat text-center text-success"><strong>+38%</strong></div>

                            <h5><i class="icon-ticket pull-right"></i>Open Tickets</h5>
                            <div class="side-stat text-center text-warning"><strong>23</strong></div>

                            <h5><i class="icon-bug pull-right"></i>Bugs to fix</h5>
                            <div class="side-stat text-center text-error"><strong>1</strong> (important)</div>
                            <div class="side-stat text-center text-warning"><strong>3</strong> (normal)</div>
                        </div>
                    </div>
                </div>
                <!-- END Sidebar Tabs -->
            </div>
            <!-- END Wrapper for scrolling functionality -->
        </aside>
 <!-- END Left Sidebar
            <!-- END Left Sidebar cc-->
            <!-- Pre Page Content -->
				<!-- Pre Page Content -->
	<div id="pre-page-content">
	<h1><i class="glyphicon-dashboard themed-color"></i>现在在使用的是十八龙企业后台管理<br><small>Welcome <strong>
	<?php echo ($_SESSION['admname']); ?></strong></small></h1>
	</div>
	<!-- END Pre Page Content -->
            <!-- END Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
                <!-- Breadcrumb -->
                <!-- You can have the breadcrumb stick on scrolling just by adding the following attributes with their values (data-spy="affix" data-offset-top="250") -->
                <!-- You can try it on other elements too :-), the sticky position and style can be adjusted in the css/main.css with .affix class -->
                <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="index.html"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">系统管理</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="">在职人员</a></li>
                </ul>
                <!-- END Breadcrumb -->

                <div class="block block-themed">
                    <!-- Two Column Form Title -->
                    <div class="block-title">
                        <h4>Two Column Form <small>Put it in the grid!</small></h4>
                    </div>
                    <!-- END Two Column Form Title -->

                    <!-- Two Column Form Content -->
                    <div class="block-content">
                        <form action="<?php echo U(GROUP_NAME.'/Adminuser/add');?>" method="post" class="form-inline" >
                            <!-- div.row-fluid -->
                            <div class="row-fluid">
                                <!-- 1st Column -->
                                <div class="span6">
                                    <div class="control-group">
                                        <label class="control-label" for="columns-text">用户名</label>
                                        <div class="controls">
                                            <input type="text" id="columns-text" name="UserName" >
                                            <span class="help-block">Your username must be unique..</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="columns-password">密码</label>
                                        <div class="controls">
                                            <input type="password" id="columns-password" name="PassWord">
                                            <span class="help-block">..and your password hard to guess!</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="columns-password">确认密码</label>
                                        <div class="controls">
                                            <input type="password" id="columns-password" name="ConfirmPassWord">
                                            <span class="help-block">..and your password hard to guess!</span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- END 1st Column -->

                            </div>
                            <!-- END div.row-fluid -->
                            <div class="form-actions">
                                <button type="reset" class="btn btn-danger"><i class="icon-repeat"></i> 重置</button>
                                <button type="submit" class="btn btn-success"><i class="icon-ok"></i> 提交</button>
                            </div>
                        </form>
                    </div>
                    <!-- END Two Column Form Content -->
                </div>

                <!-- Dynamic Tables in the Grid -->
                <h4 class="page-header">在职人员<small>在职人员</small></h4>

                <!-- Dynamic Tables in the Grid Content -->

                <!-- div.row-fluid -->



                </div>
                <!-- END div.row-fluid -->
                <!-- END Dynamic Tables in the Grid -->
            </div>
            <!-- END Page Content -->

  <!-- Footer -->
            <!-- Footer -->
            <footer>
                <div class="pull-right">
                    Crafted with <i class="icon-heart"></i> by <strong><a href="http://goo.gl/vNS3I" target="_blank">哈哈哈</a></strong>
                </div>
                <div class="pull-left">
                    <span id="year-copy"></span> &copy; <strong><a href="http://goo.gl/mssAH" target="_blank">FlatApp 1.2.1</a></strong>
                </div>
            </footer>
            <!-- END Footer -->
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->



 <!-- Scroll to top link, check main.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="icon-chevron-up"></i></a>

        <!-- User Modal Account, appears when clicking on 'User Settings' link found on user dropdown menu (header, top right) -->
        <div id="modal-user-account" class="modal hide fade">
            <!-- Modal Body -->
            <div class="modal-body remove-padding">
                <!-- Modal Tabs -->
                <div class="block-tabs">
                    <div class="block-options">
                        <a href="javascript:void(0)" class="btn btn-danger" data-dismiss="modal"><i class="icon-remove"></i></a>
                    </div>
                    <ul class="nav nav-tabs" data-toggle="tabs">
                        <li class="active"><a href="#modal-user-account-account"><i class="icon-cog"></i> Account</a></li>
                        <li><a href="#modal-user-account-profile"><i class="icon-user"></i> Profile</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- Account Tab Content -->
                        <div class="tab-pane active" id="modal-user-account-account">
                            <form action="index.html" method="post" class="form-horizontal" onsubmit="return false;">
                                <div class="control-group">
                                    <label class="control-label" for="modal-account-username">Username</label>
                                    <div class="controls">
                                        <input type="text" id="modal-account-username" name="modal-account-username" value="admin" class="disabled" disabled>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="modal-account-email">Email</label>
                                    <div class="controls">
                                        <input type="text" id="modal-account-email" name="modal-account-email" value="admin@exampleapp.com">
                                    </div>
                                </div>
                                <h4 class="sub-header">Change Password</h4>
                                <div class="control-group">
                                    <label class="control-label" for="modal-account-pass">Current Password</label>
                                    <div class="controls">
                                        <input type="password" id="modal-account-pass" name="modal-account-pass">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="modal-account-newpass">New Password</label>
                                    <div class="controls">
                                        <input type="password" id="modal-account-newpass" name="modal-account-newpass">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="modal-account-newrepass">Retype New Password</label>
                                    <div class="controls">
                                        <input type="password" id="modal-account-newrepass" name="modal-account-newrepass">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- END Account Tab Content -->

                        <!-- Profile Tab Content -->
                        <div class="tab-pane" id="modal-user-account-profile">
                            <form action="index.html" method="post" class="form-horizontal" onsubmit="return false;">
                                <div class="control-group">
                                    <label class="control-label" for="modal-profile-name">Name</label>
                                    <div class="controls">
                                        <input type="text" id="modal-profile-name" name="modal-profile-name" value="John Doe">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="modal-profile-gender">Gender</label>
                                    <div class="controls">
                                        <select id="modal-profile-gender" name="modal-profile-name">
                                            <option value="m">Male</option>
                                            <option value="f">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="modal-profile-birthdate">Birthdate</label>
                                    <div class="controls">
                                        <div class="input-append">
                                            <input type="text" id="modal-profile-birthdate" name="modal-profile-birthdate" class="input-small input-datepicker">
                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="modal-profile-skills">Skills</label>
                                    <div class="controls">
                                        <select id="modal-profile-skills" name="modal-profile-skills" class="select-chosen" multiple>
                                            <option value="html" selected>html</option>
                                            <option value="css" selected>css</option>
                                            <option value="javascript">javascript</option>
                                            <option value="php">php</option>
                                            <option value="mysql">mysql</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="modal-profile-bio">Bio</label>
                                    <div class="controls">
                                        <textarea id="modal-profile-bio" name="modal-profile-bio" class="textarea-elastic" rows="3">Bio Information..</textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- END Profile Tab Content -->
                    </div>
                </div>
                <!-- END Modal Tabs -->
            </div>
            <!-- END Modal Body -->

            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal"><i class="icon-save"></i> Save</button>
            </div>
            <!-- END Modal footer -->
        </div>
        <!-- END User Modal Settings -->

        <!-- Excanvas for Flot (Charts plugin) support on IE8 -->
        <!--[if lte IE 8]><script src="../Public/js/helpers/excanvas.min.js"></script><![endif]-->

        <!-- Get Jquery library from Google ... -->
        <script src="http://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
        <!-- ... but if something goes wrong get Jquery from local file -->
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="../Public/js/vendor/bootstrap.min.js"></script>

        <!--
        Include Google Maps API for global use.
        If you don't want to use  Google Maps API globally, just remove this line and the gmaps.js plugin from js/plugins.js (you can put it in a seperate file)
        Then iclude them both in the pages you would like to use the google maps functionality
        -->
        <script type="text/javascript" src="#"></script>

        <!-- Jquery plugins and custom javascript code -->
        <script src="../Public/js/plugins.js"></script>
        <script src="../Public/js/main.js"></script>
       
        <script type="text/javascript" src="../Public/js/menu.js"></script>

        <!-- Javascript code only for this page -->
        <script>
            $(function() {
                /* Initialize Datatables */
                $('#example-datatables').dataTable({"aoColumnDefs": [{"bSortable": false, "aTargets": [4]}]});
                $('#example-datatables2').dataTable();
                $('#example-datatables3').dataTable();
            });
        </script>
    </body>
</html>