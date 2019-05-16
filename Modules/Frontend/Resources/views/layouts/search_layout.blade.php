<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="{{ asset('Modules/Frontend/Resources/assets/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('Modules/Frontend/Resources/assets/fontawesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('Modules/Frontend/Resources/assets/fontawesome/css/solid.css') }}" rel="stylesheet">
    <link href="{{ asset('Modules/Frontend/Resources/assets/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Modules/Frontend/Resources/assets/css/frontend.css') }}">

    <style>
        ::-webkit-scrollbar {
            width: 5px;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
        }
        .inform_text {
            font-size: 1.6rem;
        }
    </style>
</head>
<body>
<header>
    <div class="search__header">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 search-col-3-fix ">
                <a href="{{ route('home') }}"><img src="{{ asset('Modules/Frontend/Resources/assets/images/logo.png') }}" alt="logo search"></a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 no-padding col-main-result-search">
                <div class="search-page__form">
                    @include('frontend::search.search_form')
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 d-block d-xs-none d-sm-none d-md-none">
                <div class="search_header__info">
                    <div class="search_header__info-img">
                        <img src="{{ asset('Modules/Frontend/Resources/assets/images/user_default_48x48.png') }}" alt="img user">
                    </div>
                    <div class="search_header__info-name">
                        Tài khoản
                        <i class="la la-angle-down"></i>
                        <ul class="hover_dropdown d-none">
                            <li><a href="">Người tìm việc</a></li>
                            <li><a href="">Nhà tuyển dụng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main id="search_main">
    <div class="row">
        <div class="col-6 col-sm-12 col-md-12 col-lg-12 search-col-3-fix d-block d-xs-none d-sm-none d-md-none">
            <aside class="search_left">
                <h1>Tuyển dụng, tìm việc làm mới nhất hiện nay</h1>
                <div class="search_left__jobs_group">
                    <h2 class="title">Loại việc làm</h2>
                    <div class="search_left__list">
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>

                    </div>
                </div>

                <div class="search_left__jobs_group">
                    <h2 class="title">Loại việc làm</h2>
                    <div class="search_left__list">
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>

                        <a href="" class="see-more">Xem thêm <i class="la la-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="search_left__jobs_group">
                    <h2 class="title">Loại việc làm</h2>
                    <div class="search_left__list">
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>

                        <a href="" class="see-more">Xem thêm <i class="la la-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="search_left__jobs_group">
                    <h2 class="title">Loại việc làm</h2>
                    <div class="search_left__list">
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>
                        <a href="" class="search_left__link">
                            <span>Toàn thời gian cố định</span>
                            <span class="search_left__count">4542</span>
                        </a>

                        <a href="" class="see-more">Xem thêm <i class="la la-arrow-circle-right"></i></a>
                    </div>
                </div>
            </aside>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 no-padding col-main-result-search">
            <div class="search__list-result">


                @yield('content')

            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
            <div class="search__email">
                <h4>Nhận việc làm mới mỗi ngày đầu tiên</h4>
                <p class="search__email-text">Tuyển dụng, tìm việc làm tại bất cứ đâu</p>
                <form action="" class="register_email_form">
                    <input type="text" placeholder="Email của tôi">
                    <button>Nhận đăng ký việc làm</button>
                </form>
            </div>
        </div>
    </div>
</main>

<footer id="footer_search_job">
    <div class="menu_footer">
        <a href="">Trang chủ - </a>
        <a href="">Việc làm mới nhất - </a>
        <a href="">Tìm việc làm -   </a>
        <a href="">Khu công nghiệp tuyển dụng -  </a>
        <a href="">CV đẹp - </a>
        <a href="">Giới thiệu </a>
    </div>
    <p>Copyright 2018 - Bản quyền thuộc về 123Job.vn</p>
</footer>
</body>
</html>