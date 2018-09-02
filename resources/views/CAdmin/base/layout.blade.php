<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Vendor styles -->
    <link rel="stylesheet"
          href="{{ asset('CAdmin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CAdmin/vendors/bower_components/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CAdmin/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">
    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('CAdmin/css/app.min.css') }}">
</head>

<body data-sa-theme="1">
<main class="main">
    <div class="page-loader">
        <div class="page-loader__spinner">
            <svg viewBox="25 25 50 50">
                <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
            </svg>
        </div>
    </div>

    <header class="header">
        <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
            <i class="zmdi zmdi-menu"></i>
        </div>

        <div class="logo hidden-sm-down">
            <h1><a href="#">TiTar</a></h1>
        </div>

        <form class="search">
            <div class="search__inner">
                <input type="text" class="search__text" placeholder="متن جستجوی خود را وارد نمایید">
                <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
            </div>
        </form>

        <ul class="top-nav">
            <li class="hidden-xl-up"><a href="#" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a>
            </li>

            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="top-nav__notify"><i class="zmdi zmdi-email"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                    <div class="dropdown-header">
                        پیام ها

                        <div class="actions">
                            <a href="#" class="actions__item zmdi zmdi-plus"></a>
                        </div>
                    </div>

                    <div class="listview listview--hover">
                        <a href="#" class="listview__item">
                            <img src="{{ asset('CAdmin/demo/img/profile-pics/8.jpg') }}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    علی احمدی
                                    <small>12:01 بعد از ظهر</small>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <img src="{{ asset('CAdmin/demo/img/profile-pics/8.jpg') }}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    رضا حسینی
                                    <small>02:45 بعد ازظهر</small>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <img src="{{ asset('CAdmin/demo/img/profile-pics/8.jpg') }}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    محمد محمدی
                                    <small>08:21 بعد ازظهر</small>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. </p>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <img src="{{ asset('CAdmin/demo/img/profile-pics/8.jpg') }}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    محمد محمدی
                                    <small>08:43 بعد ازظهر</small>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. </p>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <img src="{{ asset('CAdmin/demo/img/profile-pics/8.jpg') }}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    محمد محمدی
                                    <small>11:32 بعد ازظهر</small>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. </p>
                            </div>
                        </a>

                        <a href="#" class="view-more">مشاهده تمام پیام ها</a>
                    </div>
                </div>
            </li>

            <li class="dropdown top-nav__notifications">
                <a href="#" data-toggle="dropdown" class="top-nav__notify">
                    <i class="zmdi zmdi-notifications"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                    <div class="dropdown-header">
                        نوتیفیکیشن

                        <div class="actions">
                            <a href="#" class="actions__item zmdi zmdi-check-all"
                               data-sa-action="notifications-clear"></a>
                        </div>
                    </div>

                    <div class="listview listview--hover">
                        <div class="listview__scroll scrollbar-inner">
                            <a href="#" class="listview__item">
                                <img src="{{ asset('CAdmin/demo/img/profile-pics/8.jpg') }}" class="listview__img"
                                     alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">دارا رضوی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="{{ asset('CAdmin/demo/img/profile-pics/8.jpg') }}" class="listview__img"
                                     alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">رضا حسینی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="{{ asset('CAdmin/demo/img/profile-pics/8.jpg') }}" class="listview__img"
                                     alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">محمد محمدی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. </p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="{{ asset('CAdmin/demo/img/profile-pics/8.jpg') }}" class="listview__img"
                                     alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">محمد محمدی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. </p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="{{ asset('CAdmin/demo/img/profile-pics/8.jpg') }}" class="listview__img"
                                     alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">محمد محمدی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. </p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="{{ asset('CAdmin/demo/img/profile-pics/8.jpg') }}" class="listview__img"
                                     alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">دارا رضوی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="{{ asset('CAdmin/demo/img/profile-pics/8.jpg') }}" class="listview__img"
                                     alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">رضا حسینی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="{{ asset('CAdmin/demo/img/profile-pics/8.jpg') }}" class="listview__img"
                                     alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">محمد محمدی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. </p>
                                </div>
                            </a>
                        </div>

                        <div class="p-1"></div>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                    <div class="dropdown-header">وظایف</div>

                    <div class="listview listview--hover">
                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">گزارش بررسی خطاهای سایت</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">اکستنشن های گوگل کروم</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">پروژه های شبکه های اجتماعی</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">ادمین بوت استرپ</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">اپلیکیشن یوتیوب</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="view-more">مشاهده تمام وظایف</a>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                    <div class="row app-shortcuts">
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-calendar"></i>
                            <small class="">تقویم</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-file-text"></i>
                            <small class="">فایل ها</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-email"></i>
                            <small class="">ایمیل</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-trending-up"></i>
                            <small class="">گزارش ها</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-view-headline"></i>
                            <small class="">خبر</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-image"></i>
                            <small class="">گالری</small>
                        </a>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item" data-sa-action="fullscreen">تمام صفحه</a>
                    <a href="#" class="dropdown-item">پاک کردن حافظه لوکال</a>
                    <a href="#" class="dropdown-item">تنظیمات</a>
                </div>
            </li>

            <li class="hidden-xs-down">
                <a href="#" class="top-nav__themes" data-sa-action="aside-open" data-sa-target=".themes"><i
                        class="zmdi zmdi-palette"></i></a>
            </li>
        </ul>

        <div class="clock hidden-md-down">
            <div class="time">
                <span class="time__hours"></span>
                <span class="time__min"></span>
                <span class="time__sec"></span>
            </div>
        </div>
    </header>

    <aside class="sidebar">
        <div class="scrollbar-inner">

            <div class="user">
                <div class="user__info" data-toggle="dropdown">
                    <img class="user__img" src="{{ asset('CAdmin/demo/img/profile-pics/8.jpg') }}" alt="">
                    <div>
                        <div class="user__name">آرش حاتمی</div>
                        <div class="user__email">info@arash-hatami.ir</div>
                    </div>
                </div>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">مشاهده پروفایل</a>
                    <a class="dropdown-item" href="#">تنظیمات</a>
                    <a class="dropdown-item" href="#">خروج</a>
                </div>
            </div>

            <ul class="navigation">
                <li class="@@indexactive"><a href="#"><i class="zmdi zmdi-home"></i> خانه</a></li>
            </ul>
        </div>
    </aside>

    <div class="themes">
        <div class="scrollbar-inner">
            <a href="#" class="themes__item active" data-sa-value="1"><img
                    src="{{ asset('CAdmin/img/bg/1.jpg') }}" alt=""></a>
            <a href="#" class="themes__item active" data-sa-value="1"><img
                    src="{{ asset('CAdmin/img/bg/1.jpg') }}" alt=""></a>
            <a href="#" class="themes__item" data-sa-value="2"><img src="{{ asset('CAdmin/img/bg/2.jpg') }}"
                                                                    alt=""></a>
            <a href="#" class="themes__item" data-sa-value="3"><img src="{{ asset('CAdmin/img/bg/3.jpg') }}"
                                                                    alt=""></a>
            <a href="#" class="themes__item" data-sa-value="4"><img src="{{ asset('CAdmin/img/bg/4.jpg') }}"
                                                                    alt=""></a>
            <a href="#" class="themes__item" data-sa-value="5"><img src="{{ asset('CAdmin/img/bg/5.jpg') }}"
                                                                    alt=""></a>
            <a href="#" class="themes__item" data-sa-value="6"><img src="{{ asset('CAdmin/img/bg/6.jpg') }}"
                                                                    alt=""></a>
            <a href="#" class="themes__item" data-sa-value="7"><img src="{{ asset('CAdmin/img/bg/7.jpg') }}"
                                                                    alt=""></a>
            <a href="#" class="themes__item" data-sa-value="8"><img src="{{ asset('CAdmin/img/bg/8.jpg') }}"
                                                                    alt=""></a>
            <a href="#" class="themes__item" data-sa-value="9"><img src="{{ asset('CAdmin/img/bg/9.jpg') }}"
                                                                    alt=""></a>
            <a href="#" class="themes__item" data-sa-value="10"><img src="{{ asset('CAdmin/img/bg/10.jpg') }}"
                                                                     alt=""></a>
        </div>
    </div>

    <section class="content">
        <div class="content__inner">
            <header class="content__title">
                <h1>تست</h1>

                <div class="actions">
                    <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
                    <a href="#" class="actions__item zmdi zmdi-check-all"></a>

                    <div class="dropdown actions__item">
                        <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item">تازه سازی</a>
                            <a href="#" class="dropdown-item">مدیریت ویجت ها</a>
                            <a href="#" class="dropdown-item">تنظیمات</a>
                        </div>
                    </div>
                </div>
            </header>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">تست</h4>
                    <h6 class="card-subtitle">تست</h6>
                </div>
            </div>

            <footer class="footer hidden-xs-down">
                {{--<p>© Super Admin Responsive. All rights reserved.</p>--}}
                <ul class="nav footer__nav">
                    <li><a class="nav-link" href="#">صفحه اصلی</a></li>
                    <li><a class="nav-link" href="#">شرکت</a></li>
                    <li><a class="nav-link" href="#">پشتیبانی</a></li>
                    <li><a class="nav-link" href="#">خبر</a></li>
                    <li><a class="nav-link" href="#">ارتباط با ما</a></li>
                </ul>
            </footer>
        </div>
    </section>
</main>
<!-- Javascript -->
<!-- Vendors -->
<script src="{{ asset('CAdmin/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('CAdmin/vendors/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('CAdmin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('CAdmin/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('CAdmin/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>
<!-- App functions and actions -->
<script src="{{ asset('CAdmin/js/app.min.js') }}"></script>
</body>
</html>
