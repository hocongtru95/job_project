@extends('frontend::layouts.search_layout')
@section('title', 'Tìm kiếm việc làm')

@section('content')
    <div class="search__option">
        <p class="tips_text">Mẹo: Nhập tên thành phố, quận huyện của bạn vào ô <strong>"địa điểm"</strong> để hiển thị việc làm tại đó.</p>
        <div class="search__option--info">
            <div class="search__option--view">
                Hiển thị <strong>1</strong> - <strong>15</strong> trên <strong>133460</strong> việc
            </div>
            <div class="search__option--fillter">Lọc: <a href="" class="selected">Tất cả</a> | <a href="">Việc làm mới</a></div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="jobs_list">
        @forelse($result as $item)
            <div class="jobs_list__item">
            <div class="jobs_list__item-img">
                <a href="#"><img src="{{ asset('storage/app/'.$item->job_image) }}" alt="{{ $item->job_title }}"></a>
            </div>
            <div class="jobs_list__item-text">
                <div class="jobs_list__item-title">
                    <a href="{{ url('jobs/'.$item->job_slug) }}">{{ $item->job_title }}</a>
                </div>
                <div class="jobs_list__item-company">{{ $item->job_company_name }}</div>
                <div class="jobs_list__item-info">
                    <div class="jobs_list__item--address">
                        <i class="la la-map-marker"></i>
                        Làm việc tại: {{ $item->job_work_local }}
                    </div>
                    <div class="jobs_list__item--salary">
                        <i class="la la-money"></i>
                        Mức lương: {{ $item->job_salary }}
                    </div>
                    <div class="jobs_list__item--time">
                        <i class="la la-clock-o"></i>
                        Thời gian: {{ $item->job_working_form==0?'Bán thời gian':'Toàn thời gian' }}
                    </div>
                </div>
                <p class="jobs_list__item--description">
                    {{ $item->job_description }}
                </p>
                <div class="jobs_list__item--readmore">
                    <span>45 phút trước</span>
                    <a href="#">Xem thêm...</a>
                    <div class="more_info_search_result d-none">
                        <h4>Xem tìm kiếm tương tự:</h4>
                        <ul>
                            <li>
                                <a href="" class="link_more">Việc làm tại Hà Nội</a>
                                <a href="" class="link_more">Việc làm tại Công Ty Cổ Phần Quốc Tế Sơn Hà</a>
                            </li>
                        </ul>
                        <span class="close_info_more">
                            <i class="fas fa-times"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        @empty
            <p class="inform_text">Không có kết quả nào với từ khóa: {{ $key_word }}</p>
        @endforelse
    </div>

    <div class="jobs_list__pagination">
        {{ $result->links() }}
    </div>
@endsection