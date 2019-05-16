<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>

    <link href="{{ asset('Modules/Frontend/Resources/assets/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('Modules/Frontend/Resources/assets/fontawesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('Modules/Frontend/Resources/assets/fontawesome/css/solid.css') }}" rel="stylesheet">
    <link href="{{ asset('Modules/Frontend/Resources/assets/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Modules/Frontend/Resources/assets/css/frontend.css') }}">

    <style>
        .box-job-description {
            font-size: 16px;
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

<main id="content_detail">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <ul class="breadcrumb_link">
                        {!! $breadCrumbs !!}
                    </ul>
                </div>
            </div>
        </div>

        <div class="row detail__main_info">
            <div class="col-12 col-sm-12 col-md-9">
                <div class="detail__main_info-img">
                    <img src="{{ asset('storage/app/'.$item->job_image) }}" alt="image detail">
                </div>
                <div class="detail__main_info-text">
                    <h1 class="title">
                        {{ $item->job_title }}
                    </h1>
                    <p class="company_name">{{ $item->job_company_name }}</p>
                    <p>Mức lương: {{ $item->job_salary }}</p>
                    <p>Ngày hết hạn: {{ $item->job_expiration }}</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 apply_box">
                <a class="btn-apply-now"> Ứng tuyển ngay</a>
            </div>
        </div>
        <div class="row">
            <ul class="detail__list_tab">
                <li>Thông tin</li>
            </ul>
        </div>
        <div class="row job_info_tab">
            <div class="col-12 col-sm-12 col-md-8">
                <div class="box-content box-job-description">
                    {{ $item->job_detail }}
                </div>
                <div class="box-content">
                    <h2>CÁCH THỨC ỨNG TUYỂN</h2>
                    <div class="content-text ">
                        <p>Ứng viên nộp hồ sơ trực tuyến bằng cách bấm Ứng tuyển ngay dưới đây.</p>
                        <p>Xin lưu ý: Ghi rõ "Biết đến tin tuyển dụng tại 123job.vn" khi xem và nộp hồ sơ. Xin cảm ơn!</p>
                    </div>
                    <div class="box-button">
                        <a href="" class="btn-apply-now btn-apply">Ứng tuyển ngay</a>
                    </div>
                </div>

                <div class="box-job-tags">
                    <div class="job-tag">
                        <h4>Xem tất cả việc làm <b>{{ $currentCategory->cat_title }}</b>:</h4>
                        <div class="job-tags-item">
                            @foreach($relateItemsList as $relateItem)
                                @if($relateItem->id != $item->id)
                                    <h3 class="job-tag-link">
                                        <a href="{{ url('jobs/'.$relateItem->job_slug) }}">{{ $relateItem->job_title }}</a>
                                    </h3>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="box-job-share">
                    <span>Chia sẻ tin đăng đến bạn bè: </span>
                    <div class="job-share-list">
                        <a href="" class="fb_button"><i class="fab fa-facebook-f"></i> Facebook </a>
                        <a href="" class="tt_button"><i class="fab fa-twitter"></i> Twitter </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <div class="job_info_box">
                    <div class="job_info_item">
                        <div class="job_info_icon">
                            <i class="la la-group"></i>
                        </div>
                        <div class="job_info_content">
                            <span>Số lượng cần tuyển</span>
                            {{ $item->job_amount }}
                        </div>
                    </div>
                    <div class="job_info_item">
                        <div class="job_info_icon">
                            <i class="la la-certificate"></i>
                        </div>
                        <div class="job_info_content">
                            <span>Cấp bậc</span>
                            {{ $item->job_position }}
                        </div>
                    </div>
                    <div class="job_info_item">
                        <div class="job_info_icon">
                            <i class="la la-transgender"></i>
                        </div>
                        <div class="job_info_content">
                            <span>Giới tính</span>
                            Không phân biệt
                        </div>
                    </div>
                    <div class="job_info_item">
                        <div class="job_info_icon">
                            <i class="la la-suitcase"></i>
                        </div>
                        <div class="job_info_content">
                            <span>Kinh nghiệm</span>
                            {{ $item->job_experence }}
                        </div>
                    </div>
                    <div class="job_info_item">
                        <div class="job_info_icon">
                            <i class="la la-wechat"></i>
                        </div>
                        <div class="job_info_content">
                            <span>Ngôn ngữ hồ sơ</span>
                            Bất kì
                        </div>
                    </div>
                    <div class="job_info_item">
                        <div class="job_info_icon">
                            <i class="la la-briefcase"></i>
                        </div>
                        <div class="job_info_content">
                            <span>Nghành nghề</span>
                            @foreach($listCategory as $key => $listCateItem)
                            <a href="{{ url('jobs-category/'.$listCateItem->cat_slug) }}">{{ $listCateItem->cat_title }}</a>
                                @php end($listCategory) @endphp
                                @if($key == key($listCategory))
                                    {{ ',' }}
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="job_info_item">
                        <div class="job_info_icon">
                            <i class="la la-gear"></i>
                        </div>
                        <div class="job_info_content">
                            <span>Loại hình công việc</span>
                            {{ $item->job_working_form==1?'Toàn thời gian':'Bán thời gian' }}
                        </div>
                    </div>
                    <div class="job_info_item">
                        <div class="job_info_icon">
                            <i class="la la-building-o"></i>
                        </div>
                        <div class="job_info_content">
                            <span>ĐỊA ĐIỂM LÀM VIỆC</span>
                            {{ $item->job_work_local }}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row relate_jobs">
            <h3 class="relate_title">Việc làm thường được xem thêm</h3>
            <div class="col-12 col-sm-12 col-md-9 no-padding">
                <div class="row row-relate-fix">
                    <div class="col-12 col-sm-12 col-md-6 no-padding">
                        <div class="relate_jobs_item">
                            <div class="relate_jobs_item-img">
                                <a href="#"><img src="{{ asset('Modules/Frontend/Resources/assets/images/relate_job.png') }}" alt="img"></a>
                            </div>
                            <div class="relate_jobs_item-content">
                                <h3>Kiến trúc sư nội thất</h3>
                                <p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DƯỢC PHẨM BÌNH MINH</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 no-padding">
                        <div class="relate_jobs_item">
                            <div class="relate_jobs_item-img">
                                <a href="#"><img src="{{ asset('Modules/Frontend/Resources/assets/images/relate_job.png') }}" alt="img"></a>
                            </div>
                            <div class="relate_jobs_item-content">
                                <h3>Kiến trúc sư nội thất</h3>
                                <p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DƯỢC PHẨM BÌNH MINH</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 no-padding">
                        <div class="relate_jobs_item">
                            <div class="relate_jobs_item-img">
                                <a href="#"><img src="{{ asset('Modules/Frontend/Resources/assets/images/relate_job.png') }}" alt="img"></a>
                            </div>
                            <div class="relate_jobs_item-content">
                                <h3>Kiến trúc sư nội thất</h3>
                                <p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DƯỢC PHẨM BÌNH MINH</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 no-padding">
                        <div class="relate_jobs_item">
                            <div class="relate_jobs_item-img">
                                <a href="#"><img src="{{ asset('Modules/Frontend/Resources/assets/images/relate_job.png') }}" alt="img"></a>
                            </div>
                            <div class="relate_jobs_item-content">
                                <h3>Kiến trúc sư nội thất</h3>
                                <p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DƯỢC PHẨM BÌNH MINH</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 no-padding">
                        <div class="relate_jobs_item">
                            <div class="relate_jobs_item-img">
                                <a href="#"><img src="{{ asset('Modules/Frontend/Resources/assets/images/relate_job.png') }}" alt="img"></a>
                            </div>
                            <div class="relate_jobs_item-content">
                                <h3>Kiến trúc sư nội thất</h3>
                                <p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DƯỢC PHẨM BÌNH MINH</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 no-padding">
                        <div class="relate_jobs_item">
                            <div class="relate_jobs_item-img">
                                <a href="#"><img src="{{ asset('Modules/Frontend/Resources/assets/images/relate_job.png') }}" alt="img"></a>
                            </div>
                            <div class="relate_jobs_item-content">
                                <h3>Kiến trúc sư nội thất</h3>
                                <p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DƯỢC PHẨM BÌNH MINH</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="jobs--list">
        <div class="container">
            <div class="row ">

                <div class="col-12 col-sm-6 col-md-6 no-padding fix-padding">
                    <div class="jobs--box">
                        <h3 class="jobs--list-title">
                            VIỆC LÀM THEO NGÀNH NGHỀ TẠI HÀ NỘI
                        </h3>
                        <ul>
                            <li><a href="">Tuyển dụng, tìm việc Bán hàng tại Hà Nội</a></li>
                            <li><a href="">Tuyển dụng, tìm việc Bán hàng tại Đà Nẵng</a></li>
                            <li><a href="">Tuyển dụng, tìm việc Bán hàng tại Hà Nội</a></li>
                            <li><a href="">Tuyển dụng, tìm việc Bán hàng tại Hà Nội</a></li>
                            <li><a href="">Tuyển dụng, tìm việc Bán hàng tại Hà Nội</a></li>
                            <li><a href="">Tuyển dụng, tìm việc Bán hàng tại Hà Nội</a></li>
                            <li><a href="">Tuyển dụng, tìm việc Bán hàng tại Hà Nội</a></li>
                        </ul>
                        <a href="" class="jobs--list-viewmore">Xem tất cả nghành nghệ <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="jobs--box">
                        <h3 class="jobs--list-title">
                            Chức danh
                        </h3>
                        <ul>
                            <li><a href="">Tuyển dụng, tìm việc Bán hàng tại Hà Nội</a></li>
                            <li><a href="">Tuyển dụng, tìm việc Bán hàng tại Hà Nội</a></li>
                            <li><a href="">Tuyển dụng, tìm việc Bán hàng tại Hà Nội</a></li>
                            <li><a href="">Tuyển dụng, tìm việc Bán hàng tại Hà Nội</a></li>
                            <li><a href="">Tuyển dụng, tìm việc Bán hàng tại Hà Nội</a></li>
                            <li><a href="">Tuyển dụng, tìm việc Bán hàng tại Hà Nội</a></li>
                            <li><a href="">Tuyển dụng, tìm việc Bán hàng tại Hà Nội</a></li>
                        </ul>
                        <a href="" class="jobs--list-viewmore">Xem tất cả nghành nghệ <i class="fas fa-arrow-circle-right"></i></a>
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
                        <p class="address"> <i class="fas fa-map-marker-alt"></i> 102 Thái Thịnh - Đống Đa - Hà Nội</p>
                        <p class="phone"><i class="fas fa-phone"></i> 0986420994</p>
                        <p class="phone"><i class="fas fa-envelope-square"></i>  contact@123job.vn</p>
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
</body>
</html>