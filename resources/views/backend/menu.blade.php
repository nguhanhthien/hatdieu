@admin
    @component('backend.link')
    @slot('link'){{ url('backend/admin') }}@endslot
    @slot('icon')icon fa fa-tachometer @endslot
    @slot('name')Thống kê @endslot
    @endcomponent
    <!-- @component('backend.link')
    @slot('link'){{ url('backend/articles') }}@endslot
    @slot('icon')icon fa fa-pencil-square-o @endslot
    @slot('name')Bài viết @endslot
    @endcomponent -->
    
    @component('backend.link')
    @slot('link'){{ url('backend/orders') }}@endslot
    @slot('icon')icon fa fa-shopping-cart @endslot
    @slot('name')Đơn hàng @endslot
    @endcomponent
    <!-- @component('backend.link')
    @slot('link'){{ url('backend/brands') }}@endslot
    @slot('icon')icon fa fa-th-large @endslot
    @slot('name')Brands @endslot
    @endcomponent -->
    @component('backend.link')
    @slot('link'){{ url('backend/category') }}@endslot
    @slot('icon')icon fa fa-list @endslot
    @slot('name')Danh mục sản phẩm @endslot
    @endcomponent

    @component('backend.link')
    @slot('link'){{ url('backend/articles') }}@endslot
    @slot('icon')icon fa fa-table @endslot
    @slot('name')Danh sách sản phẩm @endslot
    @endcomponent

    @component('backend.link')
    @slot('link'){{ url('backend/users') }}@endslot
    @slot('icon')icon fa fa-user @endslot
    @slot('name')Quản lý người dùng @endslot
    @endcomponent
    @component('backend.link')
    @slot('link'){{ url('backend/settings') }}@endslot
    @slot('icon')icon fa fa-cogs @endslot
    @slot('name')Cài đặt @endslot
    @endcomponent
@endadmin
@user
    @component('backend.link')
    @slot('link'){{ url('backend/user') }}@endslot
    @slot('icon')icon fa fa-tachometer @endslot
    @slot('name')User Dashboard @endslot
    @endcomponent
    @component('backend.link')
    @slot('link'){{ url('backend/profile') }}@endslot
    @slot('icon')icon fa fa-eye @endslot
    @slot('name')User Profile @endslot
    @endcomponent
    @component('backend.link')
    @slot('link'){{ url('backend/user-orders') }}@endslot
    @slot('icon')icon fa fa-money @endslot
    @slot('name')My Orders @endslot
    @endcomponent
@enduser