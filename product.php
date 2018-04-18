<?php include('includes/header.php');?>
<body class="home blog">
      <div id="wrapper">
        <header>
          <div class="top-header">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="top-left pull-left">
                    <a href="#">Trang chủ</a>
                  </div>
                  <div class="top-right pull-right">
                    <ul class="account">
                      <li class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-user"></i>
                          <span class="account">Tài khoản</span>
                          <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">Đăng nhập</a>
                          <a class="dropdown-item" href="#">Đăng xuất</a>
                        </div>
                      </li>
                      <li>
                        <a href="">
                          <i class="fa fa-heart"></i>
                          <span class="favorite">Yeu thích</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> 
          </div><!--top-header-->
          <div class="center-header">
            <div class="container">
              <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mobile-style">
                  <div class="logo-header">
                    <a href=""><img src="img/logo.png" alt=""></a>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mobile-style push-desktop">
                  <div class="box-cart pull-right">
                    <a href="" class="cart-top">
                      <span>Giỏ hàng</span>
                      <br>
                      <span>0 Sản phẩm - 0d</span>
                    </a>                    
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mobile-style push-desktop">
                  <div class="box-search">
                    <form action="" method="get" role="form">
                      <select name="product-cat" id="product-cat">
                        <option value="1">Danh mục</option>
                        <option value="1">Laptop</option>
                        <option value="1">Quần áo nam</option>
                        <option value="1">Quần áo nữ</option>
                      </select>
                      <input type="text" placeholder="Từ khóa...">
                      <button>Tìm kiếm</button>
                      <div class="clear"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div><!--center-header-->
          <div class="clear"></div>
          <div class="menu-top">
            <div class="container">
              <div class="menu-mobile">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="pull-left">Menu</div>
                    <div class="pull-right click-menu">
                      <span></span>
                    </div>
                  </div>
                </div>                
              </div>
              <div class="main-menu" id="main-menu">
                <ul>
                  <li class="active-menu">
                    <a href="#">Trang chủ</a>
                  </li>
                  <li>
                    <a href="#">Giới thiệu</a>
                  </li>
                  <li>
                    <a href="#">Sản phẩm</a>
                    <ul class="sub-menu">
                      <li>
                        <a href="#">Laptop</a>
                      </li>
                      <li>
                        <a href="#">Quần áo nam</a>
                      </li>
                      <li>
                        <a href="#">Quấn áo nữ</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Tin tức</a>
                  </li>
                  <li>
                    <a href="#">Khuyến mãi</a>
                  </li>
                  <li>
                    <a href="#">Tuyển dụng</a>
                  </li>
                  <li>
                    <a href="#">Liên hệ</a>
                  </li>
                </ul>
              </div>              
            </div>
          </div><!--menu-header-->
        </header>
        <div class="clear"></div>
        <div class="content">
          <div class="top-content">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                  <div class="box-category">
                    <ul class="top-content-menu">
                      <li id="active-menu-content">
                        <span><i class="fa fa-list"></i>Danh mục sản phẩm</span>
                      </li>
                      <li>
                        <a href=""><i class="fa fa-mobile"></i>Điện thoại</a>
                      </li>
                      <li>
                        <a href=""><i class="fa fa-clock-o"></i>Đồng hồ</a>
                        <span class="down-menu" ><i class="fa fa-sort-down"></i></span>
                        <ul class="sub-menu-content" id="sub-menu-content">
                          <li>
                            <a href="#">Iphone</a>
                          </li>
                          <li>
                            <a href="#">Sony</a>
                          </li>
                          <li>
                            <a href="#">Samsung</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href=""><i class="fa fa-laptop"></i>Laptop</a>
                      </li>
                      <li>
                        <a href=""><i class="fa fa-desktop"></i>Màn hình</a>
                      </li>
                      <li>
                        <a href=""><i class="fa fa-fire"></i>Mỹ phẩm</a>
                      </li>
                      <li>
                        <a href=""><i class="fa fa-male"></i>Thời trang nam</a>
                      </li>
                      <li>
                        <a href=""><i class="fa fa-female"></i>Thời trang nữ</a>
                      </li>
                      <li>
                        <a href=""><i class="fa fa-shopping-bag"></i>Túi xách</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
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
                        <img src="img/banner.jpg" alt="">
                      </div>
                      <div class="item">
                        <img src="img/banner2.jpg" alt="">
                      </div>
                      <div class="item">
                        <img src="img/banner3.jpg" alt="">
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
                </div>                
              </div>
            </div>
          </div><!--end top-content -->
          <div class="tab-product">
            <div class="container">
              <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">Mới nhất</a></li>
                <li><a data-toggle="pill" href="#menu1">Nổi bật</a></li>
              </ul>
              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <span class="new-post-text">Mới</span>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <span class="new-post-text">Mới</span>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <span class="new-post-text">Mới</span>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <span class="new-post-text">Mới</span>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <span class="new-post-text">Mới</span>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <span class="new-post-text">Mới</span>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <span class="new-post-text">Mới</span>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <span class="new-post-text">Mới</span>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <span class="new-post-text">Mới</span>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <span class="new-post-text">Mới</span>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="clear"></div>
                </div>
                <div id="menu1" class="tab-pane fade">
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="clear"></div>
                </div>
              </div>
            </div>
          </div><!--end tab-new-post -->
          <div class="tab-product">
            <div class="container">
              <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">Laptop</a></li>
              </ul>
              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="clear"></div>
                </div>
              </div>
            </div>
          </div><!--end tab-laptop -->
          <div class="tab-product">
            <div class="container">
              <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">Quần áo Nam</a></li>
              </ul>
              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="clear"></div>
                </div>
              </div>
            </div>
          </div><!--end tab-male -->
          <div class="bot-content">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                  <div class="news">
                    <ul class="nav nav-pills">
                      <li class="active"><a data-toggle="pill" href="#home">Tin tức</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="news-one">
                              <a href=""><img src="img/nokia-6-treasure-tag-2-15179774412072055854573.jpg" alt=""></a>
                              <a class="news-title">Q4/2017: HMD Global bán được 21,5 triệu máy Nokia, 17,3 triệu chiếc</a>
                              <div class="meta">
                                <span>Ngày đăng: 05/04/2018</span>
                                <span>Lượt xem: 84</span>
                              </div>
                              <p class="news-content">HMD Global (công ty sở hữu thương hiệu Nokia) đã có một quý kinh doanh cuối cùng trong năm 2017 vô cùng khởi sắc. Theo dữ liệu từ hãng...</p>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="news-other">
                              <div class="pull-left">
                                <a href=""><img src="img/nokia-6-treasure-tag-2-15179774412072055854573.jpg" alt=""></a>
                              </div>
                              <div class="pull-right">
                                <a class="news-title">Q4/2017: HMD Global bán được 21,5 triệu máy Nokia, 17,3 triệu chiếc</a>
                                <div class="meta">
                                  <span>Ngày đăng: 05/04/2018</span>
                                  <span>Lượt xem: 84</span>
                                </div>
                              </div>
                            </div>
                            <div class="news-other">
                              <div class="pull-left">
                                <a href=""><img src="img/nokia-6-treasure-tag-2-15179774412072055854573.jpg" alt=""></a>
                              </div>
                              <div class="pull-right">
                                <a class="news-title">Q4/2017: HMD Global bán được 21,5 triệu máy Nokia, 17,3 triệu chiếc</a>
                                <div class="meta">
                                  <span>Ngày đăng: 05/04/2018</span>
                                  <span>Lượt xem: 84</span>
                                </div>
                              </div>
                            </div>
                            <div class="news-other">
                              <div class="pull-left">
                                <a href=""><img src="img/nokia-6-treasure-tag-2-15179774412072055854573.jpg" alt=""></a>
                              </div>
                              <div class="pull-right">
                                <a class="news-title">Q4/2017: HMD Global bán được 21,5 triệu máy Nokia, 17,3 triệu chiếc</a>
                                <div class="meta">
                                  <span>Ngày đăng: 05/04/2018</span>
                                  <span>Lượt xem: 84</span>
                                </div>
                              </div>
                            </div>                                                        
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!--end news-->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                  <div class="evaluate">
                    <ul class="nav nav-pills">
                      <li class="active"><a data-toggle="pill" href="#home">Đánh giá khách hàng</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <div class="evaluate-item">
                                <p class="comment-txt">
                                  "Rất nhiều khách hàng hỏi thiết kế web để làm gì, thay vì trả lời câu hỏi đó chúng tôi 
                                  đi sâu vào phân tích cho khách hàng của mình những lợi ích mà một..."                        
                                </p>
                                <div class="rating">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>
                                <div class="member">
                                  <img src="img/123.png" alt="">
                                  <h3>Vinh</h3>
                                </div>
                              </div>
                            </div>
                            <div class="item">
                              <div class="evaluate-item">
                                <p class="comment-txt">
                                  "Rất nhiều khách hàng hỏi thiết kế web để làm gì, thay vì trả lời câu hỏi đó chúng tôi 
                                  đi sâu vào phân tích cho khách hàng của mình những lợi ích mà một..."                        
                                </p>
                                <div class="rating">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>
                                <div class="member">
                                  <img src="img/123.png" alt="">
                                  <h3>Vinh</h3>
                                </div>
                              </div>
                            </div>
                            <div class="item">
                              <div class="evaluate-item">
                                <p class="comment-txt">
                                  "Rất nhiều khách hàng hỏi thiết kế web để làm gì, thay vì trả lời câu hỏi đó chúng tôi 
                                  đi sâu vào phân tích cho khách hàng của mình những lợi ích mà một..."                        
                                </p>
                                <div class="rating">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>
                                <div class="member">
                                  <img src="img/123.png" alt="">
                                  <h3>Vinh</h3>
                                </div>
                              </div>
                            </div>                          
                          </div>                    
                        </div><!--end slide-->
                      </div>
                    </div>
                  </div><!--end evaluate-->
                </div>                
              </div>
            </div>
          </div><!--end bot-content -->
          <div class="other-content">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 mobile-style">
                  <div class="int-email">
                    <i class="fa fa-envelope"></i>
                    <p>
                      <span>
                      Đăng kí nhận email
                      </span>
                      Nhập email để được thông báo sớm nhất
                    </p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mobile-style">
                  <div class="box-subscribe">
                    <form action="" method="get" role="form">
                      <input type="text" placeholder="Email...">
                      <button>Đăng kí</button>
                      <div class="clear"></div>
                    </form>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mobile-style">
                  <div class="social-content">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>                    
          </div><!--end other-content-->
        </div><!--end content -->
        <div class="clear"></div>

<?php include('includes/footer.php');?>