<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                {{-- <img src="{{ URL::Asset('build/images/users/avatar-2.jpg') }}" alt=""
                    class="avatar-md mx-auto rounded-circle">
                 --}}
                <img src="{{ url('images/user-profile') }}/{{ auth()->user()->profile_image }}" alt="Profile Image"
                    class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">
                <a href="#" class="text-body fw-medium font-size-16">{{ auth()->user()->name }}</a>
                <p class="text-muted mt-1 mb-0 font-size-13">Administrator</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <!-- <span class="badge rounded-pill bg-info float-end">2</span> -->
                        <span>Dashboard</span>
                    </a>
                    <!-- <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index">Dashboard 1</a></li>
                        <li><a href="index-2">Dashboard 2</a></li>
                    </ul> -->
                </li>

                <li>
                    <a href="{{ route('admin.settings.index') }}" class=" waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Settings</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.products.index') }}" class=" waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Products</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.product-categories.index') }}" class=" waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Product Types</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.orders.index') }}" class=" waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Orders</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.customers.index') }}" class=" waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Customers</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.customer-carts.index') }}" class=" waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Order Leads</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.promocodes.index') }}" class=" waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Promocodes</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.sizes.index') }}" class=" waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Sizes</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.categories.index') }}" class=" waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Categories</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Homepage</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.cms-pages.index') }}" class=" waves-effect">
                                <i class="mdi mdi-inbox"></i>
                                <span>CMS Pages</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.banners.index') }}" class=" waves-effect">
                                <i class="mdi mdi-inbox"></i>
                                <span>Banners</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.marquee-items.index') }}" class=" waves-effect">
                                <i class="mdi mdi-inbox"></i>
                                <span>Rotating Bar</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.testimonials.index') }}" class=" waves-effect">
                                <i class="mdi mdi-inbox"></i>
                                <span>Testimonials</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox">Inbox</a></li>
                        <li><a href="email-read">Read Email</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-calendar-check"></i>
                        <span>Tasks</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-list">Task List</a></li>
                        <li><a href="tasks-kanban">Kanban Board</a></li>
                        <li><a href="tasks-create">Create Task</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-login">Login</a></li>
                        <li><a href="pages-register">Register</a></li>
                        <li><a href="pages-recoverpw">Recover Password</a></li>
                        <li><a href="pages-lock-screen">Lock Screen</a></li>
                        <li><a href="pages-starter">Starter Page</a></li>
                        <li><a href="pages-invoice">Invoice</a></li>
                        <li><a href="pages-profile">Profile</a></li>
                        <li><a href="pages-maintenance">Maintenance</a></li>
                        <li><a href="pages-comingsoon">Coming Soon</a></li>
                        <li><a href="pages-timeline">Timeline</a></li>
                        <li><a href="pages-faqs">FAQs</a></li>
                        <li><a href="pages-pricing">Pricing</a></li>
                        <li><a href="pages-404">Error 404</a></li>
                        <li><a href="pages-500">Error 500</a></li>
                    </ul>
                </li>

                <li class="menu-title">Components</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                            <span>UI Elements</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="ui-alerts">Alerts</a></li>
                            <li><a href="ui-buttons">Buttons</a></li>
                            <li><a href="ui-cards">Cards</a></li>
                            <li><a href="ui-carousel">Carousel</a></li>
                            <li><a href="ui-dropdowns">Dropdowns</a></li>
                            <li><a href="ui-grid">Grid</a></li>
                            <li><a href="ui-images">Images</a></li>
                            <li><a href="ui-lightbox">Lightbox</a></li>
                            <li><a href="ui-modals">Modals</a></li>
                            <li><a href="ui-rangeslider">Range Slider</a></li>
                            <li><a href="ui-session-timeout">Session Timeout</a></li>
                            <li><a href="ui-progressbars">Progress Bars</a></li>
                            <li><a href="ui-sweet-alert">Sweet-Alert</a></li>
                            <li><a href="ui-tabs-accordions">Tabs & Accordions</a></li>
                            <li><a href="ui-typography">Typography</a></li>
                            <li><a href="ui-video">Video</a></li>
                            <li><a href="ui-general">General</a></li>
                            <li><a href="ui-colors">Colors</a></li>
                            <li><a href="ui-rating">Rating</a></li>
                        </ul>
                    </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-newspaper"></i>
                        <span class="badge rounded-pill bg-danger float-end">6</span>
                        <span>Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements">Form Elements</a></li>
                        <li><a href="form-validation">Form Validation</a></li>
                        <li><a href="form-advanced">Form Advanced</a></li>
                        <li><a href="form-editors">Form Editors</a></li>
                        <li><a href="form-uploads">Form File Upload</a></li>
                        <li><a href="form-xeditable">Form Xeditable</a></li>
                        <li><a href="form-repeater">Form Repeater</a></li>
                        <li><a href="form-wizard">Form Wizard</a></li>
                        <li><a href="form-mask">Form Mask</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-clipboard-list-outline"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic">Basic Tables</a></li>
                        <li><a href="tables-datatable">Data Tables</a></li>
                        <li><a href="tables-responsive">Responsive Table</a></li>
                        <li><a href="tables-editable">Editable Table</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-chart-donut"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex">Apex charts</a></li>
                        <li><a href="charts-chartjs">Chartjs Chart</a></li>
                        <li><a href="charts-flot">Flot Chart</a></li>
                        <li><a href="charts-knob">Jquery Knob Chart</a></li>
                        <li><a href="charts-sparkline">Sparkline Chart</a></li>
                    </ul>
                </li> -->

                <!-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-emoticon-happy-outline"></i>
                        <span>Icons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons">Boxicons</a></li>
                        <li><a href="icons-materialdesign">Material Design</a></li>
                        <li><a href="icons-dripicons">Dripicons</a></li>
                        <li><a href="icons-fontawesome">Font awesome</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google">Google Maps</a></li>
                        <li><a href="maps-vector">Vector Maps</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-file-tree"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
