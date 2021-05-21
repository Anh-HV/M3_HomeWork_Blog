 <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <form class="form-inline mr-auto searchform text-muted">
                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
            </form>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
                        <span class="fe fe-grid fe-16"></span>
                    </a>
                </li>
                <li class="nav-item nav-notif">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                        <span class="fe fe-bell fe-16"></span>
                        <span class="dot dot-md bg-success"></span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar avatar-sm mt-2">

                            <img src="./app/view/Layout/assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activities</a>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light"x>
                <!-- nav bar -->
                <div class="w-100 mb-4 d-flex">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="http://localhost/DemoCase">
              
                        <img src="https://apptechplus.com/mt-content/uploads/2019/11/preview_logo-1.jpg" style= "width:80%"> 
                    </a>
                </div>  
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="http://localhost/DemoCase/">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Trang Chủ</span>
                        </a>
                    </li>
                    <span>Apps</span>
                    </p>
                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item dropdown">
                            <a href="#ListPhone" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                                <i class="fe fe-folder fe-16"></i>
                                <span class="ml-3 item-text">Sản Phẩm</span><span class="sr-only">(current)</span>
                            </a>
                            <ul class="collapse list-unstyled pl-4 w-100" id="ListPhone">
                                <li class="nav-item w-100">
                                    <a class="nav-link pl-3" href="http://localhost/DemoCase/?url=PhoneController">
                                        <span class="ml-1 item-text">Danh Sách Điện Thoại</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-3" href="http://localhost/DemoCase/?url=PhoneController/add"><span class="ml-1 item-text">Thêm Mới Điện Thoại</span></a>
                                </li>
                            </ul>
                        <li class="nav-item dropdown">
                            <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                                <i class="fe fe-book fe-16"></i>
                                <span class="ml-3 item-text">Đơn Hàng</span>
                            </a>
                            <ul class="collapse list-unstyled pl-4 w-100" id="contact">
                                <a class="nav-link pl-3" href="http://localhost/DemoCase/?url=OrderController/List"><span class="ml-1">Danh Sách Đơn Hàng</span></a>
                                <a class="nav-link pl-3" href="http://localhost/DemoCase/?url=OrderDetailController/index"><span class="ml-1">Chi Tiêt Đơn Hàng</span></a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                                <i class="fe fe-user fe-16"></i>
                                <span class="ml-3 item-text">Khách Hàng</span>
                            </a>
                            <ul class="collapse list-unstyled pl-4 w-100" id="profile">
                                <a class="nav-link pl-3" href="http://localhost/DemoCase/?url=CustomerController"><span class="ml-1">Danh Sách Khách Hàng</span></a>
        
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#fileman" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                                <i class="fe fe-folder fe-16"></i>
                                <span class="ml-3 item-text">Trang mua sắm</span>
                            </a>
                            <ul class="collapse list-unstyled pl-4 w-100" id="fileman">
                                <a class="nav-link pl-3" href="http://localhost/DemoCase/PhoneController/showPhone"><span class="ml-1">Page</span></a>
                             
                            </ul>
                        </li>               
            </nav>
        </aside>