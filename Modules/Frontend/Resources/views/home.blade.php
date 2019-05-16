<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link href="{{ asset('Modules/Frontend/Resources/assets/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('Modules/Frontend/Resources/assets/fontawesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('Modules/Frontend/Resources/assets/fontawesome/css/solid.css') }}" rel="stylesheet">
    <link href="{{ asset('Modules/Frontend/Resources/assets/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Modules/Frontend/Resources/assets/css/jquery.auto-complete.css') }}">
    <link rel="stylesheet" href="{{ asset('Modules/Frontend/Resources/assets/css/frontend.css') }}">

</head>
<body>
<header>
    <div class="bg_header">
        <div class="menu_mb d-none d-sm-block d-xs-block">
            <button class="nav-toggle">
                <i class="fas fa-bars"></i>
            </button>
            <a href="{{ route('home') }}" class="logo_mb"><img src="{{ asset('Modules/Frontend/Resources/assets/images/logo.png') }}" alt="logo mobile"></a>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6 d-none d-md-block d-lg-block d-xl-block">
                    <div class="header__logo">
                        <a href="#"><img src="{{ asset('Modules/Frontend/Resources/assets/images/logo.png') }}" alt="logo website"></a>
                    </div>
                </div>

                <div class="col-12 col-md-6 d-none d-md-block d-lg-block d-xl-block">
                    <nav>
                        <ul class="header__menu">
                            <li class="header__menu--item"><a href="#">CV đẹp</a></li>
                            <li class="header__menu--item"><a href="#">Tìm việc</a></li>
                            <li class="header__menu--item"><a href="#">Nghề nghiệp</a></li>
                            <li class="header__menu--item"><a href="#">Đăng nhập</a></li>
                            <li class="header__menu--item"><a href="#">Nhà tuyển dụng</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="header__search">
            <div class="header__search--box">
                <h2 class="header__search--title">TÌM CÔNG VIỆC BẠN YÊU THÍCH</h2>

                <form action="{{ route('search_jobs') }}" method="get" class="header__search--form">
                    <div class="form-control form__keyword">
                        <span class="form__title">Chức danh, kỹ năng hoặc tên công ty</span>
                        <input type="text" name="q" placeholder="Nhập chức danh, vị trí, kỹ năng, công ty...">
                        <i class="la la-keyboard-o"></i>
                    </div>
                    <div class="form-control form__local">
                        <span class="form__title">Tỉnh, thành phố hoặc quận huyện</span>
                        <input id="hero-demo" autofocus type="text" name="l" placeholder="Toàn quốc...">
                        <i class="la la-map-marker"></i>
                    </div>
                    <div class="form-control form_button">
                        <button type="submit"><i class="la la-search"></i><span class="d-none d-xs-block d-sm-block">Tìm việc ngay</span></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</header>

<main>

    <section class="home__career">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="home__career--title">NGÀNH NGHỀ PHỔ BIẾN</h3>
                    <div class="home__career--box">

                        @foreach($categoryFocus as $cateFocusItem)
                            <div class="home__career--box-item">
                                <div class="home__career--box-item-hover">
                                    <a href="{{ url('jobs-category/'.$cateFocusItem->cat_slug) }}">
                                        <img src="{{ asset('storage/app/'.$cateFocusItem->cat_image) }}" alt="{{ $cateFocusItem->cat_title }}">
                                        <p class="career_title">{{ $cateFocusItem->cat_title }}</p>
                                        <span>({{ $cateFocusItem->coutItem }} công việc)</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home__jobs">
        <div class="container">
            <div class="row">
                <h3 class="home__jobs--title">Việc làm cần tuyển</h3>
                @foreach($jobsNeedApply as $jobsItem)
                    <div class="col-12 col-md-6">
                        <div class="home__jobs--item">
                            <div class="jobs">
                                <div class="jobs__img">
                                    <a href="{{ url('jobs/'.$jobsItem->job_slug) }}"><img src="{{ asset('storage/app/'.$jobsItem->job_image) }}" alt="{{ $jobsItem->job_title }}"></a>
                                </div>
                                <div class="jobs__text">
                                    <h2 class="jobs__title"><a href="{{ url('jobs/'.$jobsItem->job_slug) }}">{{ $jobsItem->job_title }}</a></h2>
                                    <p class="jobs__company_name">{{ $jobsItem->job_company_name }}</p>
                                </div>
                                <div class="jobs__status"><span>Gấp</span></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="home__jobs--see-more">
                <a href=""><i class="la la-plus"></i>  Xem thêm việc làm mới</a>
            </div>
        </div>
    </section>

    <section class="home__news">
        <div class="container">
            <div class="row">
                <h3 class="home__news--title">Tin tức nghề nghiệp</h3>
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="home__news--item">
                        <div class="news">
                            <div class="news__img">
                                <a href="" class="fix_height"><img src="{{ asset('Modules/Frontend/Resources/assets/images/news.jpg') }}" alt="jobs news"></a>
                            </div>
                            <div class="news__text">
                                <h3 class="news__title">Sale admin là gì? Tất tần tật những thông tin cần thiết về sale admin</h3>
                                <p class="news__description">Sale là công việc có thu nhập không giới hạn với nhiều vị trí nổi bật
                                    như Sales Representative, Sales Supervisor… Một vị trí nổi ...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="home__news--item">
                        <div class="news">
                            <div class="news__img">
                                <a href="" class="fix_height"><img src="{{ asset('Modules/Frontend/Resources/assets/images/news2.jpg') }}" alt="jobs news"></a>
                            </div>
                            <div class="news__text">
                                <h3 class="news__title">Sale admin là gì? Tất tần tật những thông tin cần thiết về sale admin</h3>
                                <p class="news__description">Sale là công việc có thu nhập không giới hạn với nhiều vị trí nổi bật
                                    như Sales Representative, Sales Supervisor… Một vị trí nổi ...</p>
                            </div>

                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="home__news--item">
                        <div class="news">
                            <div class="news__img">
                                <a href="" class="fix_height"><img src="{{ asset('Modules/Frontend/Resources/assets/images/news3.jpg') }}" alt="jobs news"></a>
                            </div>
                            <div class="news__text">
                                <h3 class="news__title">Sale admin là gì? Tất tần tật những thông tin cần thiết về sale admin</h3>
                                <p class="news__description">Sale là công việc có thu nhập không giới hạn với nhiều vị trí nổi bật
                                    như Sales Representative, Sales Supervisor… Một vị trí nổi ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home__area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="home__area--title">Khu Công Nghiệp Phổ Biến Tuyển Dụng</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <ul class="home__area--list">
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <ul class="home__area--list">
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <ul class="home__area--list">
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <ul class="home__area--list">
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                        <li><a href="">Khu công nghiệp Phong Điền</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="home__jobs--list">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="home__jobs--box">
                        <h3 class="home__jobs--list-title">
                            Chức danh
                        </h3>
                        <ul>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                        </ul>
                        <a href="" class="home__jobs--list-viewmore">+ Xem thêm</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="home__jobs--box">
                        <h3 class="home__jobs--list-title">
                            Chức danh
                        </h3>
                        <ul>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                        </ul>
                        <a href="" class="home__jobs--list-viewmore">+ Xem thêm</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="home__jobs--box">
                        <h3 class="home__jobs--list-title">
                            Chức danh
                        </h3>
                        <ul>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                        </ul>
                        <a href="" class="home__jobs--list-viewmore">+ Xem thêm</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="home__jobs--box">
                        <h3 class="home__jobs--list-title">
                            Chức danh
                        </h3>
                        <ul>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                            <li><a href="">Việc làm chủ tịch HĐQT</a></li>
                        </ul>
                        <a href="" class="home__jobs--list-viewmore">+ Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="footer__mid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3">
                    <div class="footer__logo">
                        <a href="#"><img src="{{ asset('Modules/Frontend/Resources/assets/images/logo_footer.png') }}" alt="logo footer"></a>
                    </div>
                    <address>
                        <p class="address"> <i class="la la-map-marker"></i> 102 Thái Thịnh - Đống Đa - Hà Nội</p>
                        <p class="phone"><i class="la la-phone"></i> 0986420994</p>
                        <p class="phone"><i class="la la-envelope"></i>  contact@123job.vn</p>
                    </address>
                    <div class="footer__social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-invision"></i></a>
                        <a href=""><i class="fab fa-pinterest-square"></i></a>
                        <a href=""><i class="fab fa-behance"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-2 d-none d-md-block d-lg-block d-xl-block">
                    <h4 class="footer__title">Về 123job.vn</h4>
                    <ul class="footer__list">
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-2 d-none d-md-block d-lg-block d-xl-block">
                    <h4 class="footer__title">Về 123job.vn</h4>
                    <ul class="footer__list">
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-2 d-none d-md-block d-lg-block d-xl-block">
                    <h4 class="footer__title">Về 123job.vn</h4>
                    <ul class="footer__list">
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-2 d-none d-md-block d-lg-block d-xl-block">
                    <h4 class="footer__title">Về 123job.vn</h4>
                    <ul class="footer__list">
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                        <li><a href="#"> Giới thiệu</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer__info">
                        <p>Công ty Cổ phần VNP Group. Số GCNĐKDN: 0102015284, cấp ngày 21/06/2012, nơi cấp: Sở kế hoạch và đầu tư thành phố Hà Nội </p>
                        <p>Trụ sở chính: 102 Thái Thịnh Phường Trung Liệt, Quận Đống Đa, Hà Nội </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('Modules/Frontend/Resources/assets/js/jquery.3.2.1.min.js') }}"> </script>
<script src="{{ asset('Modules/Frontend/Resources/assets/js/jquery.auto-complete.min.js') }}"> </script>

<script>
    $(function() {
        $('#hero-demo').autoComplete({
            minChars: 1,
            source: function(term, suggest){
                term = term.toLowerCase();
                var choices = ['ActionScript', 'AppleScript', 'Asp', 'Assembly', 'BASIC', 'Batch', 'C', 'C++', 'CSS', 'Clojure', 'COBOL', 'ColdFusion', 'Erlang', 'Fortran', 'Groovy', 'Haskell', 'HTML', 'Java', 'JavaScript', 'Lisp', 'Perl', 'PHP', 'PowerShell', 'Python', 'Ruby', 'Scala', 'Scheme', 'SQL', 'TeX', 'XML'];
                var suggestions = [];
                for (i=0;i<choices.length;i++)
                    if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                suggest(suggestions);
            }
        });
    });
</script>

</body>
</html>