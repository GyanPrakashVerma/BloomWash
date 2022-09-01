<!-- Side-Nav-->
<style>
    .fixed .main-header-top,
    .fixed .main-sidebar,
    .fixed .left-side {
        position: absolute;
    }
    
    .main-sidebar .sidebar ul li a:hover {
        background-color: #051c84;
        color: #fff;
    }
    .active a i{
        color: #fff;

    }
    .active a span{
        color: #fff;
    }
</style>
<aside class="main-sidebar hidden-print">
    <section class="sidebar" id="sidebar-scroll">
        <!-- Sidebar Menu-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="waves-effect waves-dark text-light" href="{{ route('dash') }}">
                    <i class="icon-speedometer"></i><span > Dashboard</span>
                </a>
            </li>
            <li {{ Request::is('admin/ourteam') ? 'active' : '' }}><a class="waves-effect waves-dark" href="#"><i class="fa-solid fa-indian-rupee-sign"></i><span>
                        Products</span><i class="icon-arrow-down"></i></a>
                <ul class="treeview-menu">
                    <li {{ Request::is('admin/ourteam') ? 'active' : '' }}><a class="waves-effect waves-dark"
                            href="{{ route('product.index') }}"> <i class="icon-arrow-right"></i>Product Pricing</a></li>

                    <li {{ Request::is('admin/banner/1/edit') ? 'active' : '' }}><a class="waves-effect waves-dark"
                            href="{{'/admin/banner/1/edit'}}"><i class="icon-arrow-right"></i> Package Pricing</a></li>

                </ul>
            </li>
            {{-- <li {{ Request::is('admin/ourteam') ? 'active' : '' }}><a class="waves-effect waves-dark"
                    href="{{ route('ourteam.index') }}"><i class="fa-solid fa-people-group"></i><span>
                        Our Team</span></a></li> --}}
            <li {{ Request::is('admin/enquiries') ? 'active' : '' }}><a class="waves-effect waves-dark"
                    href="{{ route('enquiries.index') }}"><i class="fa-solid fa-calendar-check"></i><span>
                        Contacts</span></a></li>
            <li {{ Request::is('admin/subscribe') ? 'active' : '' }}><a class="waves-effect waves-dark"
                    href="{{ route('subscribe.index') }}"><i class="fa-solid fa-user-check"></i><span>
                        Subscribe</span></a></li>
            <li {{ Request::is('/admin/feedback') ? 'active' : '' }}><a class="waves-effect waves-dark"
                    href="{{ route('feedback.index') }}"><i class="fa-solid fa-message"></i><span>
                        Feedbacks</span></a></li>
            <li {{ Request::is('admin/service') ? 'active' : '' }}><a class="waves-effect waves-dark"
                    href="{{ route('service.index') }}"><i class="fa-brands fa-servicestack"></i><span>
                        Services</span></a></li>
            {{-- <li  {{Request::is('admin/ourteam')? 'active' : "";}}><a class="waves-effect waves-dark" href="{{ route('blog.list') }}"><i
                        class="fa-solid fa-blog"></i><span>
                        Blog</span></a></li> --}}
            <li {{ Request::is('admin/gallery') ? 'active' : '' }}><a class="waves-effect waves-dark"
                    href="{{ route('gallery.index') }}"><i class="fa-solid fa-camera"></i><span>
                        Gallery</span></a></li>
            {{-- <li {{ Request::is('admin/gallery') ? 'active' : '' }}><a class="waves-effect waves-dark" href="#"><i class="fa-solid fa-stethoscope"></i><span>
                        Consultant</span></a></li> --}}
            <li {{ Request::is('admin/setting/1/edit') ? 'active' : '' }}><a class="waves-effect waves-dark"
                    href="{{ '/admin/setting/1/edit' }}"><i class="fa-solid fa-screwdriver-wrench"></i><span>
                        Settings </span> </a>
            </li>

        </ul>
    </section>
</aside>
