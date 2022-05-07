<?php
session_start();
if (!isset($_SESSION['name'])) {
  header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VMAS</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <!-- <link rel="stylesheet" href="css/glow.css" /> -->
  <link rel="stylesheet" href="css/product.css" />
  <link rel="stylesheet" href="css/slider-top-in-week.css">
  <link rel="stylesheet" href="css/user.css">

  <!-- icons ---------------------------------->
  <link rel="stylesheet" href="fontawesome-free-6.0.0-web\fontawesome-free-6.0.0-web\css\all.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="image/logo.png" />
  <!-- font google -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!--Owl  carousel ---------------   ------- ------------------------------>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- box icons----------------------------------------------- -->
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
  <!--  -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/special-product.css">
  <link rel="stylesheet" href="css/footer.css">
</head>

<body>
  <nav id="nav">
      <div class="container">
        <div class="header">
          <div class="logo">
            <img src="image/logotest.png" alt="" />
          </div>
          <ul class="icon-nav">
            <li class="search-box">
              <div class="contain-box-input">
                <input type="text" placeholder="Tìm kiếm..." id="input-search"
                  name="input-search" />
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </li>
            <li class="quit-and-user">
              <div class="box-username">
                <div class="circle-user" onclick="displayInfo()">
                  <img
                    src="image/user/263488869_443529827145028_2047190494803940337_n.jpg">
                </div>
                <div class="box-content-user">
                  <div class="content-user" id="content-user">
                    <div onclick="redirectInfor()"><i class="fa-solid
                        fa-circle-user"></i><span>Thông tin cá nhân</span></div>
                    <div onclick="redirectDashboard()"><i class="fa-solid
                        fa-table-columns"></i><span>quản lý</span></div>
                    <div onclick="redirectCart()"><i class="fa-solid
                        fa-cart-shopping"></i><span>Giỏ hàng</span></div>
                    <div onclick="redirectLogin()"><i class="fa-solid
                        fa-right-from-bracket"></i><span>Thoát</span></div>
                  </div>
                </div>
              </div>
            </li>
            <li id="menubtn">
              <i class="fa-solid fa-bars"></i>
            </li>
          </ul>
        </div>
        <div class="sticky">
          <div class="navigation">
            <ul>
              <li class="glow nav-content" id="glow" onclick="redirectHome()">Trang
                chủ</li>
              <div class="th">
                <li class="th-hover abc">Thương hiệu</li>
                <div class="list-th">
                  <a href="view.php#nike" style="text-decoration:none;">
                    <li class="abc-one" onclick="load_nike()">Nike</li>
                  </a>
                  <a href="view.php#adidas" style="text-decoration:none;">
                    <li class="abc-two">Adidas</li>
                  </a>
                </div>
              </div>
              <li class="nav-content male" onclick="redirectNam()">Nam</li>
              <li class="nav-content female" onclick="redirectNu()">Nữ</li>
              <li class="nav-content list-love" onclick="redirectList()">Danh
                sách yêu thích</li>
              <li class="nav-content news">Tin tức</li>
              <li class="nav-content-search" style="display: none;">Tìm kiếm</li>
              <li class="nav-content-account" style="display: none;">Tài khoản</li>
            </ul>
          </div>
        </div>
        <div class="progress-container">
          <div class="progress-bar" id="myBar"></div>
        </div>
        <div class="women">
          <ul></ul>
        </div>
      </div>

    </nav>
  
    <input type="hidden" value="<?php echo $_SESSION["id"]; ?>" id="id-user">
  <div class="hero-section">
    <div class="hero-slide">
      <div class="owl-carousel carousel-nav-center" id="hero-carousel">
        <!-- slide 1--- -->
        <div class="hero-slide-item">
          <img src="image/18-182080_shoes-4k.jpg" alt="" />
          <div class="overlay"></div>
          <div class="hero-slide-iteam-content">
            <div class="item-content-wrapper">
              <div class="item-content-title">Nike</div>
              <div class="item-infos top-down delay-2">
                <div class="item-info">
                  <img src="image/50percent.png" alt="" />
                </div>
              </div>
              <div class="item-content top-down delay-4">
                Giảm giá lên đến 50%
              </div>
              <div class="item-date top-down delay-6">
                21 - 27/03
              </div>
              <!-- <div class="item-button top-down delay-8">
                <button>BUY</button>
              </div> -->
            </div>
          </div>
        </div>

        <!-- slide 2--- -->
        <div class="hero-slide-item">
          <img src="image/in-shoes-wallpaper.jpg" alt="" />
          <div class="overlay"></div>
          <div class="hero-slide-iteam-content">
            <div class="item-content-wrapper">
              <div class="item-content-title">New</div>
              <div class="item-infos top-down delay-2">
                <div class="item-info logo-vmashunter">
                  <img src="image/vmashunter.png" alt="" />
                </div>
              </div>
              <div class="item-content top-down delay-4">
                Giảm giá lên đến 50%
              </div>
              <div class="item-date top-down delay-6">
                21 - 27/03
              </div>
              <!-- <div class="item-button top-down delay-8">
                <button>BUY</button>
              </div> -->
            </div>
          </div>
        </div>
        <!-- slide 3--- -->
        <div class="hero-slide-item">
          <img src="image/1085299.jpg" alt="" />
          <div class="overlay"></div>
          <div class="hero-slide-iteam-content">
            <div class="item-content-wrapper">
              <div class="item-content-title">
                ULTRABOOST 22
              </div>
              <div class="item-infos top-down delay-2">
                <div class="item-info logo-vmashunter">
                  <img src="image/vmashunter.png" alt="" />
                </div>
              </div>
              <div class="item-content top-down delay-4">
                Hoàn trả năng lượng tối cao kết hợp với cải thiện độ ôm 360°.
              </div>
              <div class="item-date top-down delay-6">
                Làm chủ năng lượng và gặt hái những điều không thể.
              </div>
              <!-- <div class="item-button top-down delay-8">
                <button>BUY</button>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- top up and message with server ------------------------>
  <div class="top-up">
    <span class="material-icons-outlined" id="icon-top-up">navigation</span>
    <div class="message-with-system">
      <a href="#"><span class="material-icons-outlined icon-chat">chat</span></a>
    </div>
  </div>
  <!-- end top up -->
  <!-- product ------------------------>
  <div class="all-content-product" id="all-content-product">

    <div class="special-product" id="nike-product">
      <div class="special-product-header-title">
        <span class="header-title" id="nike">Nike</span>
      </div>
      <div class="contain-product-item" id="container-content-product-nike-0">
        <!-- items -->
        <div class="merchandise-item">
          <div class="merchandise-title" id="merchandise-id">1</div>
          <div class="merchandise-infos">
            <div class="merchandise-img">
              <img src="image/product/00397ebb40e68eb8d7f7.jpg" alt="" onclick="redirectDetails()">
            </div>
            <div class="merchandise-info">
              <span class="name-merchandise">
                jordan </span>
              <span class="merchandise-price">
                1,000,000 &#8363;
              </span>
              <div class="merchandise-size">
                <span class="add-to-cart">Thêm vào giỏ</span>
                <span class="add-to-cart buy-product">Mua Ngay</span>
              </div>
            </div>
          </div>
        </div>
        <div class="merchandise-item">
          <div class="merchandise-title" id="merchandise-id">1</div>
          <div class="merchandise-infos">
            <div class="merchandise-img">
              <img src="image/product/053bb6b988e446ba1ff5.jpg" alt="" onclick="redirectDetails()">
            </div>
            <div class="merchandise-info">
              <span class="name-merchandise">
                jordan </span>
              <span class="merchandise-price">
                1,000,000 &#8363;
              </span>
              <div class="merchandise-size">
                <span class="add-to-cart">Thêm vào giỏ</span>
                <span class="add-to-cart buy-product">Mua Ngay</span>
              </div>
            </div>
          </div>
        </div>
        <div class="merchandise-item">
          <div class="merchandise-title" id="merchandise-id">1</div>
          <div class="merchandise-infos">
            <div class="merchandise-img">
              <img src="image/product/1559c020fe7d3023696c.jpg" alt="" onclick="redirectDetails()">
            </div>
            <div class="merchandise-info">
              <span class="name-merchandise">
                jordan </span>
              <span class="merchandise-price">
                1,000,000 &#8363;
              </span>
              <div class="merchandise-size">
                <span class="add-to-cart">Thêm vào giỏ</span>
                <span class="add-to-cart buy-product">Mua Ngay</span>
              </div>
            </div>
          </div>
        </div>
        <div class="merchandise-item">
          <div class="merchandise-title" id="merchandise-id">1</div>
          <div class="merchandise-infos">
            <div class="merchandise-img">
              <img src="image/product/1985d807e65a2804714b.jpg" alt="" onclick="redirectDetails()">
            </div>
            <div class="merchandise-info">
              <span class="name-merchandise">
                jordan </span>
              <span class="merchandise-price">
                1,000,000 &#8363;
              </span>
              <div class="merchandise-size">
                <span class="add-to-cart">Thêm vào giỏ</span>
                <span class="add-to-cart buy-product">Mua Ngay</span>
              </div>
            </div>
          </div>
        </div>
        <div class="merchandise-item">
          <div class="merchandise-title" id="merchandise-id">1</div>
          <div class="merchandise-infos">
            <div class="merchandise-img">
              <img src="image/product/188e6df653ab9df5c4ba.jpg" alt="" onclick="redirectDetails()">
            </div>
            <div class="merchandise-info">
              <span class="name-merchandise">
                jordan </span>
              <span class="merchandise-price">
                1,000,000 &#8363;
              </span>
              <div class="merchandise-size">
                <span class="add-to-cart">Thêm vào giỏ</span>
                <span class="add-to-cart buy-product">Mua Ngay</span>
              </div>
            </div>
          </div>
        </div>
        <div class="merchandise-item">
          <div class="merchandise-title" id="merchandise-id">1</div>
          <div class="merchandise-infos">
            <div class="merchandise-img">
              <img src="image/product/1f9172e94cb482eadba5.jpg" alt="" onclick="redirectDetails()">
            </div>
            <div class="merchandise-info">
              <span class="name-merchandise">
                jordan </span>
              <span class="merchandise-price">
                1,000,000 &#8363;
              </span>
              <div class="merchandise-size">
                <span class="add-to-cart">Thêm vào giỏ</span>
                <span class="add-to-cart buy-product">Mua Ngay</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="special-product" id="special-product">
      <div class="special-product-header-title">
        <span class="header-title" id="special">Top sản phẩm trong tuần</span>
      </div>
      <div class="contain-product-item owl-carousel" id="product-carousel">
        <!-- items -->
        <div class="contain-merchandise">
          <div class="content-img">
            <img src="image/product/053bb6b988e446ba1ff5.jpg" alt="">
          </div>
          <div class="info-special">
            <div class="special-name">
              <span>jordan</span>
            </div>
            <div class="special-btn">
              <span>Mua ngay</span>
            </div>
          </div>
        </div>
        <!-- items -->
        <div class="contain-merchandise">
          <div class="content-img">
            <img src="image/product/00397ebb40e68eb8d7f7.jpg" alt="">
          </div>
          <div class="info-special">
            <div class="special-name">
              <span>jordan</span>
            </div>
            <div class="special-btn">
              <span>Mua ngay</span>
            </div>
          </div>
        </div>
        <!-- items -->
        <div class="contain-merchandise">
          <div class="content-img">
            <img src="image/product/0714379609cbc7959eda.jpg" alt="">
          </div>
          <div class="info-special">
            <div class="special-name">
              <span>jordan</span>
            </div>
            <div class="special-btn">
              <span>Mua ngay</span>
            </div>
          </div>
        </div>
        <!-- items -->
        <div class="contain-merchandise">
          <div class="content-img">
            <img src="image/product/08a7a3259d7853260a69.jpg" alt="">
          </div>
          <div class="info-special">
            <div class="special-name">
              <span>jordan</span>
            </div>
            <div class="special-btn">
              <span>Mua ngay</span>
            </div>
          </div>
        </div>
        <!-- items -->
        <div class="contain-merchandise">
          <div class="content-img">
            <img src="image/product/0df23f9801c5cf9b96d4.jpg" alt="">
          </div>
          <div class="info-special">
            <div class="special-name">
              <span>jordan</span>
            </div>
            <div class="special-btn">
              <span>Mua ngay</span>
            </div>
          </div>
        </div>
        <!-- items -->
        <div class="contain-merchandise">
          <div class="content-img">
            <img src="image/product/150c1a8e24d3ea8db3c2.jpg" alt="">
          </div>
          <div class="info-special">
            <div class="special-name">
              <span>jordan</span>
            </div>
            <div class="special-btn">
              <span>Mua ngay</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="special-product" id="adidas-product">
      <div class="special-product-header-title">
        <span class="header-title" id="adidas">Adidas</span>
      </div>
      <div class="contain-product-item" id="container-content-product-adidas-0">
        <!-- item 1 -->
        <div class="merchandise-item">
          <div class="merchandise-title" id="merchandise-id">1</div>
          <div class="merchandise-infos">
            <div class="merchandise-img">
              <img src="image/product/00397ebb40e68eb8d7f7.jpg" alt="" onclick="redirectDetails()">
            </div>
            <div class="merchandise-info">
              <span class="name-merchandise">
                jordan </span>
              <span class="merchandise-price">
                1,000,000 &#8363;
              </span>
              <div class="merchandise-size">
                <span class="add-to-cart">Thêm vào giỏ</span>
                <span class="add-to-cart buy-product">Mua Ngay</span>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <!-- end product ------------------------>
    </div>
  </div>
  <?php @include "footer.php" ?>
  <!-- jquery -->
  <script src="node_modules/jquery/dist/jquery.js"></script>
  <!-- owl carousel------------------------------------------------------->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- script -->
  <script src="script/displayProduct.js"></script>
  <script src="script/script.js"></script>
  <script src="script/redirect.js"></script>
</body>

</html>