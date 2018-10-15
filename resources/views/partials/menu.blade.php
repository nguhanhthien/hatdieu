<!-- //MENU  -->
<ul class="navmenu center">
    <li class="normal menu"><a href="{{ url('cms') }}">@lang('site.home')</a>
    <!-- MEGA MENU -->
    </li>
    <!-- MEGA MENU -->
    <li class=" normal menu"><a href="{{ url('san-pham') }}">@lang('site.product')</a></li>
    <li class=" normal menu"><a href="{{ url('blog') }}">@lang('site.blog')</a></li>
    <!-- //MEGA MENU -->
    <li class="last sale_menu"><a href="{{ url('eshop') }}">@lang('site.sale')</a></li>
    <li class="normal menu"><a href="{{ url('contacts') }}">@lang('site.contacts')</a>
    <li class="normal menu"><a href="{{ url('aboutus') }}">@lang('site.about us')</a>

    <li class="sub-menu"><a>{{$locale}}</a>
        <ul class="mega_menu megamenu_col1 clearfix">
            <li class="col">
                <ol><li><a href="{{ url('locale') }}/vi">vi</a></li></ol>
                <ol><li><a href="{{ url('locale') }}/en">en</a></li></ol>
            </li>
        </ul>
    </li>
</ul>
<!-- //MENU  -->