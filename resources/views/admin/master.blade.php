<!DOCTYPE html>
<html class="loading" lang="fa" data-textdirection="rtl">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords"
          content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="Barat Hadian">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{url("backend")}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{url("backend")}}/app-assets/images/ico/favicon.ico">
    <link href='{{url("backend")}}/app-assets/css-rtl/Vazir-FD.css' rel='stylesheet' type='text/css'>

    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{url("backend")}}/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{url("backend")}}/app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("backend")}}/app-assets/css-rtl/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{url("backend")}}/app-assets/css-rtl/core/colors/palette-switch.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("backend")}}/app-assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css"
          href="{{url("backend")}}/app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{url("backend")}}/app-assets/css-rtl/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("backend")}}/app-assets/css-rtl/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("backend")}}/app-assets/css-rtl/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("backend")}}/app-assets/css-rtl/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("backend")}}/app-assets/css-rtl/custom-rtl.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{url("backend")}}/app-assets/css-rtl/core/menu/menu-types/horizontal-menu.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{url("backend")}}/app-assets/css-rtl/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{url("backend")}}/app-assets/css-rtl/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("backend")}}/app-assets/css-rtl/pages/gap-application.css">
    <link rel="stylesheet" type="text/css"
          href="{{url("backend")}}/app-assets/css-rtl/pages/dashboard-analytics.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url("backend")}}/assets/css/style-rtl.css">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{url("backend")}}/app-assets/vendors/css/forms/selects/select2.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{url("backend")}}/app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{url("backend")}}/app-assets/css-rtl/plugins/file-uploaders/dropzone.min.css">

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu"
      data-color="bg-gradient-x-purple-blue" data-col="2-columns">

<!-- BEGIN: Header-->
<!-- fixed-top-->
<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                                  href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="index.html">
                    <h3 class="brand-text">سوکنا</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                                              data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
        </ul>
    </div>

</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div
    class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow"
    role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content" data-menu="menu-container">
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item"><a class=" nav-link" href="{{url("admin")}}"><i
                        class="ft-home"></i><span>صفحه اصلی</span></a>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                                                                  data-toggle="dropdown"><i class="ft-layers"></i><span>مدیریت کارگران</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/add/station")}}"
                                            data-toggle="dropdown">افزودن ایستگاه</a></li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/stations")}}"
                                            data-toggle="dropdown">لیست ایستگاه ها</a></li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/add/worker")}}"
                                            data-toggle="dropdown">افزودن کارگر</a></li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/workers")}}"
                                            data-toggle="dropdown">لیست کارگران</a></li>
                    </div>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{url("admin/slider")}}"><i class="ft-monitor"></i><span>کارفرمایان</span></a>
            </li>
            {{---------------------------------------------------------------------------------------------}}
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                                                                  data-toggle="dropdown"><i class="ft-layout"></i><span>گزارش درخواست ها</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">

                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/invoices")}}"
                                            data-toggle="dropdown">فاکتورها</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/paid/invoices")}}"
                                            data-toggle="dropdown">فاکتورهای پرداخت شده</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/unpaid/invoices")}}"
                                            data-toggle="dropdown">فاکتورهای پرداخت نشده</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/requests")}}"
                                            data-toggle="dropdown">درخواست های تسویه</a>
                        </li>
                    </div>
                </ul>
            </li>
            {{---------------------------------------------------------------------------------------------}}
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                                                                  data-toggle="dropdown"><i class="ft-layout"></i><span>گزارش سفارش ها</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">

                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/orders")}}"
                                            data-toggle="dropdown">سفارش ها</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/posted/orders")}}"
                                            data-toggle="dropdown">سفارش های ارسال شده</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/unPosted/orders")}}"
                                            data-toggle="dropdown">سفارش های ارسال نشده</a>
                        </li>
                    </div>
                </ul>
            </li>
            {{---------------------------------------------------------------------------------------------}}
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                                                                  data-toggle="dropdown"><i class="ft-layout"></i><span>گزارش مهارت ها</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">

                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/skillLists")}}"
                                            data-toggle="dropdown">مدیریت مهارت ها</a>
                        </li>
                    </div>
                </ul>
            </li>
            {{---------------------------------------------------------------------------------------------}}
            <li class="nav-item"><a class="nav-link" href="{{url("admin/register")}}"><i class="ft-user-plus"></i><span>ایجاد مدیر جدید</span></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{url("admin/logout")}}"><i
                        class="ft-log-out"></i><span>خروج</span></a></li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        @yield("content")
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Customizer-->

<!-- End: Customizer-->


<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
            class="float-md-left d-block d-md-inline-block">2019  &copy; کپی رایت: تمامی حقوق این قالب محفوظ است. طراحی و توسعه توسط <a
                class="text-bold-800 grey darken-2" href="https://www.rtl-theme.com/author/barat/" target="_blank">Barat Hadian</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
            <li class="list-inline-item"><a class="my-1" href="https://www.rtl-theme.com/author/barat/" target="_blank">
                    قالب های بیشتر</a></li>
            <li class="list-inline-item"><a class="my-1" href="https://www.rtl-theme.com/user-profile/barat/"
                                            target="_blank"> پشتیبانی</a></li>
        </ul>
    </div>
</footer>
<!-- END: Footer-->
<style>
    .paddingtop15px {
        padding-top: 15px
    }
</style>

<!-- BEGIN: Vendor JS-->
<script src="{{url("backend")}}/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="{{url("backend")}}/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="{{url("backend")}}/app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script type="text/javascript" src="{{url("backend")}}/app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="{{url("backend")}}/app-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
<script src="{{url("backend")}}/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"
        type="text/javascript"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{url("backend")}}/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
<script src="{{url("backend")}}/app-assets/js/core/app.min.js" type="text/javascript"></script>
<script src="{{url("backend")}}/app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
<script src="{{url("backend")}}/app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{url("backend")}}/app-assets/js/scripts/pages/dashboard-analytics.min.js" type="text/javascript"></script>
<!-- END: Page JS-->
<script src="{{url("backend")}}/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
<script src="{{url("backend")}}/app-assets/js/scripts/forms/select/form-select2.min.js" type="text/javascript"></script>
<script src="{{url("backend")}}/app-assets/vendors/js/tables/datatable/datatables.min.js"
        type="text/javascript"></script>
<script src="{{url("backend")}}/app-assets/js/scripts/tables/datatables/datatable-basic.min.js"
        type="text/javascript"></script>
<script src="{{url("backend")}}/app-assets/vendors/js/extensions/dropzone.min.js" type="text/javascript"></script>
<script src="{{url("backend")}}/app-assets/js/scripts/extensions/dropzone.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="{{url("datepicker")}}/css/persianDatepicker-default.css"/>
<script src="{{url("datepicker")}}/js/jquery.min.js"></script>
<script src="{{url("datepicker")}}/js/persianDatepicker.min.js"></script>
<script>
    $("#elementId, .elementClass").persianDatepicker();
</script>
</body>
<!-- END: Body-->
</html>
