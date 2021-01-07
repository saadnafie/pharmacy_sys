<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.print.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >

@if(App::isLocale('ar')) 
<style>
body{
    direction:rtl;
}
.all-content-wrapper{
        margin-left: unset;
        margin-right: 245px;
}
.header-top-area {
    left: 0px !important;
    right: 245px !important;
}
.mini-navbar .header-top-area {
left:0 !important;
right: 80px !important;
    }
    .mini-navbar .all-content-wrapper {
            margin-left: 0px;
            margin-right: 75px;
    }

    .message-menu .mCSB_outside+.mCSB_scrollTools, .notification-menu .mCSB_outside+.mCSB_scrollTools, .left-custom-menu-adp-wrap .mCSB_outside+.mCSB_scrollTools {
    left: 0px;
    right:unset;
    margin: 0px 0px;
}
.breadcome-list{
    margin-top:50px;
}
.comment-scrollbar, .timeline-scrollbar, .messages-scrollbar, .project-list-scrollbar {
    height: 100%;
}

#sidebar {
    min-width: 240px;
}
th,td{
	text-align:right;
}
.col-md-3,.col-md-4,.col-md-6,.col-sm-4{
	float:right;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    vertical-align: middle;
}
.panel-body a{
    color:white;
}
.header-top-area {
    background: #420605;
}

.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9,.col-md-3,.col-md-4,.col-md-6,.col-sm-4,.col-sm-2,.col-sm-1,.col-sm-3 {
    float: right;
}
.header-right-info .navbar-nav {
     float: left; 
    padding: 17px 0px;
}
@media (max-width: 990px){
    .all-content-wrapper{
    margin-left: 0px;
    margin-right: 0px;
}
.header-top-area {
    left: 0px !important;
     right: 0px !important; 
}


.logo-pro {
      display:none;
    }
    .header-advance-area{
        top:0px;
    }
    .col-md-3,.col-md-4,.col-md-6,.col-sm-4,.col-sm-2{
    float:right;
    width:100%;
}
}

.breadcome-list {
     margin-top: 20px; 
}
</style>
@endif

</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{url('dashboard')}}"><img class="main-logo" src="{{url('img/client_logo.jpeg')}}" alt="" width="250px"/></a>
                <strong><a href="{{url('dashboard')}}"><img src="{{url('img/client_logo.jpeg')}}" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
  
                        <li>
                            <a title="Landing Page" href="{{url('dashboard')}}" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">{{ __('adminpanel.dashboard') }}</span></a>
                        </li>
                     
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">إدارة المبيعات</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{url('managebill')}}"><span class="mini-sub-pro">إدارة الفواتير</span></a></li>
                                <li><a title="Add Courses" href="{{url('returnbill')}}"><span class="mini-sub-pro">إرجاع الفواتير</span></a></li>
                                <li><a title="Edit Courses" href="{{url('pricelist')}}"><span class="mini-sub-pro">عروض الاسعار</span></a></li>
								<li><a title="Edit Courses" href="{{url('pointofsale')}}"><span class="mini-sub-pro">نقاط البيع</span></a></li>
								<li><a title="Edit Courses" href="{{url('managepointofsale')}}"><span class="mini-sub-pro">ادارة نقاط البيع</span></a></li>
                            </ul>
                        </li>
                  
						
						<li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">إدارة المشتريات</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{url('purchasemanagebill')}}"><span class="mini-sub-pro">إدارة الفواتير</span></a></li>
                                <li><a title="Add Courses" href="{{url('purchasereturnbill')}}"><span class="mini-sub-pro">إرجاع الفواتير</span></a></li>
                                <li><a title="Edit Courses" href="{{url('purchaserequest')}}"><span class="mini-sub-pro">طلبات الشراء</span></a></li>
                            </ul>
                        </li>
						
						<li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">إدارة العملاء</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{url('customerlist')}}"><span class="mini-sub-pro">قائمة العملاء</span></a></li>
                            </ul>
                        </li>
						
						<li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">إدارة الموردين</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{url('supplierlist')}}"><span class="mini-sub-pro">قائمة الموردين</span></a></li>
                            </ul>
                        </li>
						
						<li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">إدارة المخازن</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{url('productservice')}}"><span class="mini-sub-pro">المنتجات والخدمات</span></a></li>
                                <li><a title="Add Courses" href="{{url('storemanage')}}"><span class="mini-sub-pro">ادارة المستودع</span></a></li>
                                <li><a title="Edit Courses" href="#"><span class="mini-sub-pro">ادارة الجرد</span></a></li>
								<li><a title="Edit Courses" href="#"><span class="mini-sub-pro">اعدادت المخازن</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">شركات التأمين</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{url('insurancecompanylist')}}"><span class="mini-sub-pro">تعريف وادارة الشركات</span></a></li>
                                
                            </ul>
                        </li>
						
						
						<li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span><span class="mini-click-non"> إدارة شؤون الموظفين</span></a>
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <li><a  href="{{url('manageemployee')}}"><span class="mini-sub-pro">إدارة الموظفين</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">الهيكل التنظيمي</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">الحضور والانصراف</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">ادارة المرتبات</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">اعدادات الموظفين</span></a></li>
                            </ul>
                        </li>

                   
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span><span class="mini-click-non">{{ __('adminpanel.finance') }}</span></a>
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <li><a title="Lock" href="{{url('treasurybanklist')}}"><span class="mini-sub-pro">{{ __('adminpanel.bank_account_safe') }}</span></a></li>
                                <li><a title="Password Recovery" href="{{url('dailyentrylist')}}"><span class="mini-sub-pro">{{ __('adminpanel.daily_movements') }}</span></a></li>
                                <li><a title="404 Page" href="{{url('accountstree')}}"><span class="mini-sub-pro">{{ __('adminpanel.accounts_tree') }}</span></a></li>
                                <li><a title="500 Page" href="#"><span class="mini-sub-pro">{{ __('adminpanel.assets') }}</span></a></li>
                                <li><a title="500 Page" href="#"><span class="mini-sub-pro">{{ __('adminpanel.cost_centers') }}</span></a></li>
                                <li><a title="500 Page" href="#"><span class="mini-sub-pro">{{ __('adminpanel.General_accounts_settings') }}</span></a></li>
                            </ul>
                        </li>
                       
					   
					   
						
						<li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span><span class="mini-click-non"> التقارير</span></a>
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <li><a  href="#"><span class="mini-sub-pro">المبيعات</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">تقارير المشتريات</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">تقارير المحاسبة العامه</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">تقارير الـ SMS</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">تقارير المرتبات</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">تقارير الحضور</span></a></li>
								<li><a  href="#"><span class="mini-sub-pro">تقارير العملاء</span></a></li>
								<li><a  href="#"><span class="mini-sub-pro">تقارير المخزون</span></a></li>
								<li><a  href="#"><span class="mini-sub-pro">سجل النشاطات للحساب</span></a></li>
                            </ul>
                        </li>
						
						<li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span><span class="mini-click-non"> الفروع</span></a>
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <li><a  href="#"><span class="mini-sub-pro">ادارة الفروع</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">أضف فرع</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">اعدادات الفروع</span></a></li>
                            </ul>
                        </li>
						
						<li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span><span class="mini-click-non"> الإعدادات</span></a>
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <li><a  href="#"><span class="mini-sub-pro">معلومات الحساب</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">إعدادات الحساب</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">إعدادات الـ SMTP</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">خيارات الدفع</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">إعدادات الـ SMS</span></a></li>
                                <li><a  href="#"><span class="mini-sub-pro">إعدادات الضرائب</span></a></li>
                            </ul>
                        </li>
						
						
                       <li>
                            <a title="Landing Page" href="{{ route('logout') }}" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('adminpanel.logout') }}</span></a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                        </li>
                        <li><br><br><br></li>
                        
                    </ul>
                </nav>
            </div>

        </nav>

    </div>
    <!-- End Left menu area -->
    
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-danger navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <!--<ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                </li>
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="#" class="dropdown-item">Documentation</a>
                                                        <a href="#" class="dropdown-item">Expert Backend</a>
                                                        <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                        <a href="#" class="dropdown-item">Contact Support</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                                </li>
                                            </ul>-->
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <!--
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>-->
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="img/product/pro4.jpg" alt="" />
															<span class="admin-name">مدير الموقع</span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>{{ __('adminpanel.settings') }}</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>{{ __('adminpanel.logout') }}</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                              
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                     
                                        <li><a href="events.html">Dashboard</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="all-professors.html">All Professors</a>
                                                </li>
                                                <li><a href="add-professor.html">Add Professor</a>
                                                </li>
                                                <li><a href="edit-professor.html">Edit Professor</a>
                                                </li>
                                                <li><a href="professor-profile.html">Professor Profile</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="all-courses.html">All Courses</a>
                                                </li>
                                                <li><a href="add-course.html">Add Course</a>
                                                </li>
                                                <li><a href="edit-course.html">Edit Course</a>
                                                </li>
                                                <li><a href="course-profile.html">Courses Info</a>
                                                </li>
                                                <li><a href="course-payment.html">Courses Payment</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
        </div>   


@if (Session::has('success'))
        <div class="alert alert-success text-center" style="margin-bottom: 0px;margin-top:60px;" id="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <p>{{ Session::get('success') }}</p>
        </div>
      @endif
    <script type="text/javascript">
        setTimeout(function () {
            $('#alert').alert('close');
        }, 2000);
    </script>

@yield('content')



        <!-- jquery
        ============================================ -->
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{asset('js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{asset('js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="{{asset('js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{asset('js/morrisjs/raphael-min.js')}}"></script>
    <!--<script src="{{asset('js/morrisjs/morris.js')}}"></script>
    <script src="{{asset('js/morrisjs/morris-active.js')}}"></script>-->
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{asset('js/sparkline/sparkline-active.js')}}"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="{{asset('js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/calendar/fullcalendar-active.js')}}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{asset('js/main.js')}}"></script>
    <!-- tawk chat JS
        ============================================ -->
    <!--<script src="js/tawk-chat.js"></script>-->
</body>

</html>
