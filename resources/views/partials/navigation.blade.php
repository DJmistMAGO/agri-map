<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <div class="brand flex-column-auto" id="kt_brand" style="background-color: #315000">
        <a href="{{-- route('admin-dashboard') --}}" class="brand-logo text-center">
            <img alt="Logo" class="w-125px" src=" {{ asset('images/7.png') }} " />
        </a>
    </div>
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="aside-menu" data-menu-vertical="1" data-menu-scroll="1"
            data-menu-dropdown-timeout="500" style="background-color: #619114">
            <ul class="menu-nav">
                <li class="menu-item my-4 mb-10 {{ !request()->routeIs('dashboard') ?: 'menu-item-active' }}"
                    aria-haspopup="true">
                    <a href="{{ route('dashboard') }}" class="menu-link">
                        <i class="menu-icon
                        fas fa-home"></i>
                        <span class="menu-text">Home</span>
                    </a>
                </li>
                <li class="menu-item my-4 {{ !request()->routeIs('soil-param.*') ?: 'menu-item-active' }}"
                    aria-haspopup="true">
                    <a href="{{ route('soil-param.index') }}" class="menu-link">
                        <i class="menu-icon fas fa-leaf"></i>
                        <span class="menu-text text-nowrap">Soil Parameter</span>
                    </a>
                </li>
                <li class="menu-item my-4 {{ !request()->routeIs('news.*') ?: 'menu-item-active' }}"
                    aria-haspopup="true">
                    <a href="{{ route('news.index') }}" class="menu-link">
                        <i class="menu-icon far fa-newspaper"></i>
                        <span class="menu-text text-nowrap">News</span>
                    </a>
                </li>
                <li class="menu-item my-4 {{ !request()->routeIs('announcement.*') ?: 'menu-item-active' }}"
                    aria-haspopup="true">
                    <a href="{{ route('announcement.index') }}" class="menu-link">
                        <i class="menu-icon fas fa-bullhorn"></i>
                        <span class="menu-text text-nowrap">Announcement</span>
                    </a>
                </li>
                <li class="menu-item my-4 {{ !request()->routeIs('agrigal.*') ?: 'menu-item-active' }}"
                    aria-haspopup="true">
                    <a href="{{ route('agrigal.index') }}" class="menu-link">
                        <i class="menu-icon fas fa-photo-video"></i>
                        <span class="menu-text text-nowrap">Gallery</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
