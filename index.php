<?php include('includes/header.php');?>
<body class="home blog">
      <div id="wrapper">
        <header>
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="logo">
                  <a href="#"><img src="img/new_logo-1.png" alt=""></a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <div class="header-top">
                  <div class="box-search">
                    <input class="" placeholder="Keyword..." type="text">
                    <span><button type="submit"><i class="fa fa-search"></i></button></span>
                  </div>
                  <div class="setting">
                    <a class="setting-icon"><i class="fa fa-heart-o"></i></a>
                    <a class="setting-icon"><i class="fa fa-clock-o"></i></a>
                    <a class="setting-icon"><i class="fa fa-user-o"></i></a>
                  </div>
                  <div class="language">
                    <ul>
                      <li><a href="#"><img src="img/vn.png" alt=""></a></li>
                      <li><a href="#"><img src="img/gb.png" alt=""></a></li>
                      <li><a href="#"><img src="img/jp.png" alt=""></a></li>
                    </ul>
                  </div>
                </div><!--end header-top-->
                <div class="menu-top">
                  <ul>
                    <li class="active-menu">
                      <a href="#">Home</a>
                    </li>
                    <li>
                      <a href="#">About us</a>
                    </li>
                    <li>
                      <a href="#">Apartment for rent</a>
                    </li>
                    <li>
                      <a href="#">House for rent</a>
                    </li>
                    <li>
                      <a href="#">Office for rent</a>
                    </li>
                    <li>
                      <a href="#">Investment</a>
                    </li>
                    <li>
                      <a href="#">News</a>
                    </li>
                    <li>
                      <a href="#">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </header>
        <div class="header-mb">
          <div class="logo">
            <a href="#"><img src="img/new_logo-1.png" alt=""></a>
          </div>
          <div class="menu-mb">
            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#menu-mobile">
              <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="menu-mobile" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="close-modal">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-content">
                <ul>
                    <li class="active-menu">
                      <a href="#">Home</a>
                    </li>
                    <li>
                      <a href="#">About us</a>
                    </li>
                    <li>
                      <a href="#">Apartment for rent</a>
                    </li>
                    <li>
                      <a href="#">House for rent</a>
                      <ul class="sub-menu-mb">
                        <li class="active-menu">
                          <a href="#"><span><i class="fa fa-angle-right"></i></span>Where to stay</a>
                        </li>
                        <li>
                          <a href="#"><span><i class="fa fa-angle-right"></i></span>Where to go</a>
                        </li>
                        <li>
                          <a href="#"><span><i class="fa fa-angle-right"></i></span>Where to eat</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Office for rent</a>
                    </li>
                    <li>
                      <a href="#">Investment</a>
                    </li>
                    <li>
                      <a href="#">News</a>
                    </li>
                    <li>
                      <a href="#">Contact Us</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div><!--end header-mobile -->
        <div class="content">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/slider1-1-1.jpg" alt="">
              </div>

              <div class="item">
                <img src="img/slider2-1.jpg" alt="">
              </div>
            
              <div class="item">
                <img src="img/slider3-1.jpg" alt="">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div><!--end slide-->
          <div class="container">
            <div class="top-search">
              <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                 <div class="data-map">
                  <a href=""><img src="img/Capture.PNG" alt=""></a>
                </div>
               </div> 
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="item-search">
                  <div class="item-image">
                    <a href=""><img src="img/house-for-rent-1.png" alt=""></a>
                  </div>
                  <div class="item-sub">
                    <span>
                      <a href="">Dự án đầu tư</a>
                    </span>
                  </div>
                </div>
                <div class="item-search">
                  <div class="item-image">
                    <a href=""><img src="img/house.png" alt=""></a>
                  </div>
                  <div class="item-sub">
                    <span>
                      <a href="">Dự án đầu tư</a>
                    </span>
                  </div>
                </div>
                <div class="item-search">
                  <div class="item-image">
                    <a href=""><img src="img/blueprint.png" alt=""></a>
                  </div>
                  <div class="item-sub">
                    <span>
                      <a href="">Dự án đầu tư</a>
                    </span>
                  </div>
                </div>
               </div> 
              </div>   
            </div><!--end top-search-->
          </div><!--end container-->
          <div class="search-property">
            <div class="container">
              <h3>Search Property</h3>
              <form action="">
                <div class="row">
                  <div class="main-search">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <input type="text" placeholder="Enter the name...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <select name="type-of-pro" id="">
                        <option value="">Nhà</option>
                        <option value="">Căn hộ</option>
                        <option value="">Chung cư</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="plus-search">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                          <select name="district" id="">
                            <option value="">Nhà</option>
                            <option value="">Căn hộ</option>
                            <option value="">Chung cư</option>
                          </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                          <select name="street" id="">
                            <option value="">Nhà</option>
                            <option value="">Căn hộ</option>
                            <option value="">Chung cư</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                          <input class="inSearch" type="submit" value="Search">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                          <a href=""><i class="fa fa-external-link"></i>Advenced Search</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
             </form> 
            </div>
          </div><!--end search-property-->  
          <div class="latest-project">
            <div class="container">
              <h3>Latest Project</h3>
              <div class="row">
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <div class="tabviews">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Cho thuê</a></li>
                      <li><a data-toggle="tab" href="#menu2">Bán</a></li>
                      <li><a data-toggle="tab" href="#menu3">Dự án đầu tư</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                        <div class="category-tab">
                          <a href="#">Nhà cho thuê</a>
                        </div>
                        <div class="category-tab">
                          <a href="#">Căn hộ cho thuê</a>
                        </div>
                        <div class="category-tab">
                          <a href="#">Văn phòng cho thuê</a>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>H24_Nhà nguyên căng 3 tầng ngay chân cầu Tuyên Sơn</h4>
                              <div class="item-img"><img src="img/20180117_121331-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>H24_Nhà nguyên căng 3 tầng ngay chân cầu Tuyên Sơn</h4>
                              <div class="item-img"><img src="img/24910038_1628170700562351_6387464798128604070_n-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>H24_Nhà nguyên căng 3 tầng ngay chân cầu Tuyên Sơn</h4>
                              <div class="item-img"><img src="img/26133543_10155117404296981_382599597_n-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>H24_Nhà nguyên căng 3 tầng ngay chân cầu Tuyên Sơn</h4>
                              <div class="item-img"><img src="img/khach_2bdr-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/P1030772-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/P1030753-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/P1030783-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/20180117_121331-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/P1030772-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="load-more">
                          <a href="#">Xem thêm</a>
                        </div>
                      </div>
                      <div id="menu2" class="tab-pane fade">
                        <div class="category-tab">
                          <a href="#">Nhà cho thuê</a>
                        </div>
                        <div class="category-tab">
                          <a href="#">Căn hộ cho thuê</a>
                        </div>
                        <div class="category-tab">
                          <a href="#">Văn phòng cho thuê</a>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>H24_Nhà nguyên căng 3 tầng ngay chân cầu Tuyên Sơn</h4>
                              <div class="item-img"><img src="img/20180117_121331-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>H24_Nhà nguyên căng 3 tầng ngay chân cầu Tuyên Sơn</h4>
                              <div class="item-img"><img src="img/24910038_1628170700562351_6387464798128604070_n-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>H24_Nhà nguyên căng 3 tầng ngay chân cầu Tuyên Sơn</h4>
                              <div class="item-img"><img src="img/26133543_10155117404296981_382599597_n-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>H24_Nhà nguyên căng 3 tầng ngay chân cầu Tuyên Sơn</h4>
                              <div class="item-img"><img src="img/khach_2bdr-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/P1030772-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/P1030753-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/P1030783-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/20180117_121331-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/P1030772-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="load-more">
                          <a href="#">Xem thêm</a>
                        </div>
                      </div>
                      <div id="menu3" class="tab-pane fade">
                        <div class="row">
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>H24_Nhà nguyên căng 3 tầng ngay chân cầu Tuyên Sơn</h4>
                              <div class="item-img"><img src="img/20180117_121331-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>H24_Nhà nguyên căng 3 tầng ngay chân cầu Tuyên Sơn</h4>
                              <div class="item-img"><img src="img/24910038_1628170700562351_6387464798128604070_n-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>H24_Nhà nguyên căng 3 tầng ngay chân cầu Tuyên Sơn</h4>
                              <div class="item-img"><img src="img/26133543_10155117404296981_382599597_n-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>H24_Nhà nguyên căng 3 tầng ngay chân cầu Tuyên Sơn</h4>
                              <div class="item-img"><img src="img/khach_2bdr-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/P1030772-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/P1030753-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/P1030783-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/20180117_121331-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 real-project">
                            <div class="project-item">
                              <h4>Tên dự án</h4>
                              <div class="item-img"><img src="img/P1030772-230x150.jpg" alt=""></div>
                              <div class="item-details">
                                <p><span><i class="fa fa-map-marker"></i>Truong Chi Cuong street, Cam Le district, Da Nang</span></p>
                                <p><span><i class="fa fa-train"></i>Supermarket / Bus station / School / Hospital</span></p>
                                <p class="item-quality"><span><i class="fa fa-jpy"></i><b>500$</b></span></p>
                                <p class="item-infobasic"><span><i class="fa fa-area-chart"></i>600m</span></p>
                                <p class="item-infobasic-right">
                                  <span><i class="fa fa-bed"></i>1</span>
                                  <span><i class="fa fa-bath"></i>1</span>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="load-more">
                          <a href="#">Xem thêm</a>
                        </div>
                      </div>
                    </div><!--end tab-content-->
                    <div class="culture">
                      <div class="culture-header">
                        <h4>Culture</h4>
                      </div>
                      <div class="culture-content">
                        <div class="culture-items">
                          <a href="">
                            <div class="widget-key-img">
                              <img src="img/tong-quan-ve-da-nang-110x70.jpg" alt="">
                            </div>
                            <div class="widget-key-content">
                              <h4>Overview about Danang city you need to know.</h4>
                              <p>Danang is one of the five cities under the Central Government, and the largest...</p>
                            </div>
                            <div class="clear"></div>
                          </a>
                        </div><!--end culture-items-->
                        <div class="culture-items">
                          <a href="">
                            <div class="widget-key-img">
                              <img src="img/dac-san-lam-qua-da-nang3-110x70.jpg" alt="">
                            </div>
                            <div class="widget-key-content">
                              <h4>Top delicious specialties favoured by tourists in Da Nang</h4>
                              <p>Da Nang is well known not only for being a worth living city, friendly...</p>
                            </div>
                            <div class="clear"></div>
                          </a>
                        </div><!--end culture-items-->
                        <div class="culture-items">
                          <a href="">
                            <div class="widget-key-img">
                              <img src="img/dac-san-lam-qua-da-nang3-110x70.jpg" alt="">
                            </div>
                            <div class="widget-key-content">
                              <h4>Lantern Festival in Hoi An will make you fall in love</h4>
                              <p>Lantern Festival in Hoi An will make you fall in love</p>
                            </div>
                            <div class="clear"></div>
                          </a>
                        </div><!--end culture-items-->
                        <div class="culture-items">
                          <a href="">
                            <div class="widget-key-img">
                              <img src="img/ganh-hang-rong-pho-co-hoi-an-110x70.jpg" alt="">
                            </div>
                            <div class="widget-key-content">
                              <h4>The beauty of street vendors in the heart of Hoi An ancient town</h4>
                              <p>Next to Hoai River with ancient features Hoi An ancient town becomes a famous...</p>
                            </div>
                            <div class="clear"></div>
                          </a>
                        </div><!--end culture-items-->
                        <div class="culture-items">
                          <a href="">
                            <div class="widget-key-img">
                              <img src="img/cho-dem-helio-da-nang1-110x70.jpg" alt="">
                            </div>
                            <div class="widget-key-content">
                              <h4>Go to the Da Nang Helio night market to  enjoy the super-cheap snack, super delicious  </h4>
                              <p>Helio Danang night market is only open  at the weekend, however,  it becomes an...</p>
                            </div>
                            <div class="clear"></div>
                          </a>
                        </div><!--end culture-items-->
                        <div class="culture-items">
                          <a href="">
                            <div class="widget-key-img">
                              <img src="img/con-nguoi-da-nang-than-thien-110x70.jpg" alt="">
                            </div>
                            <div class="widget-key-content">
                              <h4>Danang people are good, enthusiastic guides for visitors</h4>
                              <p>When we go to any city to travel, we tend to worry about the...</p>
                            </div>
                            <div class="clear"></div>
                          </a>
                        </div><!--end culture-items-->
                      </div><!--end culture-content-->
                      <div class="culture-loadmore">
                        <a href="">Load more</a>
                      </div>
                    </div><!--end culture-->
                    <div class="cusine">
                      <div class="cusine-header">
                        <h4>Cusine</h4>
                      </div><!--end cusine-header-->
                      <div class="cusine-content">
                        <div class="row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="cusine-item-left">
                              <a href="">
                                <div class="widget-cusine-img">
                                  <img src="img/món-chay-ngon1-400x200.jpg" alt="">
                                </div>
                                <div class="widget-cusine-content">
                                  <h4>Top 5 Vegan restaurants in Da Nang city</h4>
                                  <p>Da Nang cuisine is familiar with the specialty such as Quang noodle, fish noodle, spring roll with slices pork,…...</p>
                                </div>
                                <div class="clear"></div>
                              </a>
                            </div><!--end cusine-item-left-->
                          </div><!--end col-xs-12 col-sm-6 col-md-6 col-lg-6-->
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="cusine-item-right">
                              <a href="">
                                <div class="widget-cusine-img">
                                  <img src="img/quan-hai-san-tai-da-nang-gia-re2-110x70.jpg" alt="">
                                </div>
                                <div class="widget-cusine-content">
                                  <h4>Top 10 seafood restaurants in Danang are famous fresh, good price</h4>
                                  <p>Da Nang is a natural gift for the long coastline, white thousand and of...</p>
                                </div>
                                <div class="clear"></div>
                              </a>
                            </div>
                            <div class="cusine-item-right">
                              <a href="">
                                <div class="widget-cusine-img">
                                  <img src="img/khu-pho-am-thu-da-nang5-110x70.jpg" alt="">
                                </div>
                                <div class="widget-cusine-content">
                                  <h4>Come to danang, do not forget visit these Danang’s street foods</h4>
                                  <p>After a long time of exploring,haing out to check  in the famous places in...</p>
                                </div>
                                <div class="clear"></div>
                              </a>
                            </div>
                            <div class="cusine-item-right">
                              <a href="">
                                <div class="widget-cusine-img">
                                  <img src="img/dac-san-lam-qua-da-nang3-110x70 (1).jpg" alt="">
                                </div>
                                <div class="widget-cusine-content">
                                  <h4>Top delicious specialties favoured by tourists in Da Nang</h4>
                                  <p>Da Nang is well known not only for being a worth living city, friendly...</p>
                                </div>
                                <div class="clear"></div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div><!--end cusine-content-->
                      <div class="culture-loadmore">
                        <a href="">Load more</a>
                      </div>
                    </div><!--end cusine-->
                    <div class="culture">
                      <div class="culture-header">
                        <h4>Culture</h4>
                      </div>
                      <div class="culture-content">
                        <div class="culture-items">
                          <a href="">
                            <div class="widget-key-img">
                              <img src="img/tong-quan-ve-da-nang-110x70.jpg" alt="">
                            </div>
                            <div class="widget-key-content">
                              <h4>Overview about Danang city you need to know.</h4>
                              <p>Danang is one of the five cities under the Central Government, and the largest...</p>
                            </div>
                            <div class="clear"></div>
                          </a>
                        </div><!--end culture-items-->
                        <div class="culture-items">
                          <a href="">
                            <div class="widget-key-img">
                              <img src="img/dac-san-lam-qua-da-nang3-110x70.jpg" alt="">
                            </div>
                            <div class="widget-key-content">
                              <h4>Top delicious specialties favoured by tourists in Da Nang</h4>
                              <p>Da Nang is well known not only for being a worth living city, friendly...</p>
                            </div>
                            <div class="clear"></div>
                          </a>
                        </div><!--end culture-items-->
                        <div class="culture-items">
                          <a href="">
                            <div class="widget-key-img">
                              <img src="img/dac-san-lam-qua-da-nang3-110x70.jpg" alt="">
                            </div>
                            <div class="widget-key-content">
                              <h4>Lantern Festival in Hoi An will make you fall in love</h4>
                              <p>Lantern Festival in Hoi An will make you fall in love</p>
                            </div>
                            <div class="clear"></div>
                          </a>
                        </div><!--end culture-items-->
                        <div class="culture-items">
                          <a href="">
                            <div class="widget-key-img">
                              <img src="img/ganh-hang-rong-pho-co-hoi-an-110x70.jpg" alt="">
                            </div>
                            <div class="widget-key-content">
                              <h4>The beauty of street vendors in the heart of Hoi An ancient town</h4>
                              <p>Next to Hoai River with ancient features Hoi An ancient town becomes a famous...</p>
                            </div>
                            <div class="clear"></div>
                          </a>
                        </div><!--end culture-items-->
                        <div class="culture-items">
                          <a href="">
                            <div class="widget-key-img">
                              <img src="img/cho-dem-helio-da-nang1-110x70.jpg" alt="">
                            </div>
                            <div class="widget-key-content">
                              <h4>Go to the Da Nang Helio night market to  enjoy the super-cheap snack, super delicious  </h4>
                              <p>Helio Danang night market is only open  at the weekend, however,  it becomes an...</p>
                            </div>
                            <div class="clear"></div>
                          </a>
                        </div><!--end culture-items-->
                        <div class="culture-items">
                          <a href="">
                            <div class="widget-key-img">
                              <img src="img/con-nguoi-da-nang-than-thien-110x70.jpg" alt="">
                            </div>
                            <div class="widget-key-content">
                              <h4>Danang people are good, enthusiastic guides for visitors</h4>
                              <p>When we go to any city to travel, we tend to worry about the...</p>
                            </div>
                            <div class="clear"></div>
                          </a>
                        </div><!--end culture-items-->
                      </div><!--end culture-content-->
                      <div class="culture-loadmore">
                        <a href="">Load more</a>
                      </div>
                    </div>

                    <div class="cusine">
                      <div class="cusine-header">
                        <h4>Da Nang news</h4>
                      </div><!--end cusine-header-->
                      <div class="cusine-content">
                        <div class="row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="cusine-item-left">
                              <a href="">
                                <div class="widget-cusine-img">
                                  <img src="img/livingroomkitchen-400x200.jpg" alt="">
                                </div>
                                <div class="widget-cusine-content">
                                  <h4>Cheap apartment for rent in Nguyen Tat Thanh street in Da Nang city with only $340</h4>
                                  <p>At the end of the year, the time of travel is very suitable for tourists in Da Nang. Da...</p>
                                </div>
                                <div class="clear"></div>
                              </a>
                            </div><!--end cusine-item-left-->
                          </div><!--end col-xs-12 col-sm-6 col-md-6 col-lg-6-->
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="cusine-item-right">
                              <a href="">
                                <div class="widget-cusine-img">
                                  <img src="img/phong-phia-sau-110x70.jpg" alt="">
                                </div>
                                <div class="widget-cusine-content">
                                  <h4>Apartment for rent in Da Nang near the beach, near the school, price only $ 550</h4>
                                  <p>Do you come to Da Nang togo business, travel or live? Do you go...</p>
                                </div>
                                <div class="clear"></div>
                              </a>
                            </div>
                            <div class="cusine-item-right">
                              <a href="">
                                <div class="widget-cusine-img">
                                  <img src="img/23192962_888564767961264_197568351_n-110x70.jpg" alt="">
                                </div>
                                <div class="widget-cusine-content">
                                  <h4>HOUSE FOR RENT WITH GARDEN IN THE WATERE COCONUT FOREST IN CAM THANH – HOI AN</h4>
                                  <p>You come to Da Nang city for travel but it is crowded for you?...</p>
                                </div>
                                <div class="clear"></div>
                              </a>
                            </div>
                            <div class="cusine-item-right">
                              <a href="">
                                <div class="widget-cusine-img">
                                  <img src="img/IMG_0620-110x70.jpg" alt="">
                                </div>
                                <div class="widget-cusine-content">
                                  <h4>Luxury apartment for rent at price of only $ 230 in the Da Nang city centre</h4>
                                  <p>Da Nang is  developing in tourism,that  the luxury apartment for rent is  increasing is...</p>
                                </div>
                                <div class="clear"></div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div><!--end cusine-content-->
                      <div class="culture-loadmore">
                        <a href="">Load more</a>
                      </div>
                    </div><!--end cusine-->
                  </div>
                </div><!--end col-md-9-->
                <?php include('includes/widget.php');?>
              </div>
            </div>
          </div>

<?php include('includes/footer.php');?>