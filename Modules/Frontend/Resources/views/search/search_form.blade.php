<form action="{{ route('search_jobs') }}" method="get" class="header__search--form">
    <div class="form-control form-key-position">
        <input type="text" name="q" placeholder="Chức danh, công ty...">
        <i class="la la-keyboard-o"></i>
    </div>
    <div class="form-control form-key-local">
        <input type="text" name="l" placeholder="Hà Nội, Hồ Chính Minh...">
        <i class="la la-map-marker"></i>
    </div>
    <button type="submit"><i class="la la-search"></i><span class="d-none d-xs-block d-sm-block">Tìm việc ngay</span></button>
</form>