        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('trangchu')}}" class="site_title">
                <img src="source/image/logo/logo.png" style="margin-left: 11%;width: 61%" alt="">
              </a>
            </div>

            <div class="clearfix"></div>

            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="source/image/blog/avatar_admin.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Tổng quan</h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="{{route('addanhmuc')}}"><i class="fa fa-tasks"></i> Danh mục </a>
                  </li>
                  <li>
                    <a href="{{route('adtintuc')}}"><i class="fa fa-newspaper-o"></i> Tin tức </a>
                  </li>
                  <li>
                    <a href="{{route('adcapnhattintuc')}}"><i class="fa fa-newspaper-o"></i> Cập nhật tin tức </a>
                  </li>
                  <li>
                    <a href="{{route('adsanpham')}}"><i class="fa fa-dropbox"></i> Sản phẩm </a>
                  </li>
                  <li>
                    <a href="{{route('adcapnhatsp')}}"><i class="fa fa-upload"></i> Cập nhật sản phẩm </a>
                  </li>
                  <li>
                    <a href="{{route('addonhang')}}"><i class="fa fa-shopping-cart"></i> Đơn hàng </a>
                  </li>
                  <li>
                    <a href="{{route('adthanhvien')}}"><i class="fa fa-users"></i> Thành  viên </a>
                  </li>
                </ul>
              </div>
            </div>


            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen" controls id="myvideo">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('addangnhap')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>


        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="source/image/blog/avatar_admin.jpg" alt=""> Admin
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href=""><i class="fa fa-user pull-right"></i> Hồ sơ </a>
                      <a class="dropdown-item"  href=""><i class="fa fa-gear  pull-right"></i> Cài đặt </a>
                      <a class="dropdown-item"  href=""><i class="fa fa-question  pull-right"></i>Trợ giúp</a>
                      <a class="dropdown-item"  href=""><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a>
                    </div>
                  </li>
  
                  <!-- <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li> -->
                </ul>
              </nav>
            </div>
          </div>
