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
    <!-- <link rel="stylesheet" href="css/styleforcart.css" type="text/css" /> -->
    <!-- <link rel="stylesheet" href="css/glow.css" /> -->
    <link rel="stylesheet" href="css/product.css" />
    <link rel="stylesheet" href="css/slider-top-in-week.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- icons ---------------------------------->
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web\fontawesome-free-6.0.0-web\css\all.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- fav icon -------------------------------->
    <!-- <link
            rel="shortcut icon"
            href="/image/bilibili_tv.ico"
            type="image/x-icon"
        /> -->
    <!-- font word -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="image/logo.png" />
    <!-- font google -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Owl  carousel ---------------   ------- ------------------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- box icons----------------------------------------------- -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/rep-index.css">
</head>

<body>
    <?php @include "header.php"; ?>
    <input type="hidden" id="id-single" value="<?php echo $_SESSION['id']; ?>">
    <div class="top-up">
        <span class="material-icons-outlined" id="icon-top-up">
            navigation
        </span>
        <div class="message-with-system">
            <span class="material-icons-outlined icon-chat"> chat </span>
        </div>
    </div>
    <!-- end top up -->
    <!-- cart  -->
    <!-- <div class="line-black"></div> -->
    <div class="content-cart-title">
        <span class="title-cart">Đơn hàng</span>
    </div>
    <div class="container-ctn-product">
        <div class="container-product-item" id="container-product-item">
            <div class="name-and-address">
                <div class="title-content">
                    <span class="content">Nhập tên và địa chỉ của bạn</span>
                </div>
                <div class="form-name">
                    <input type="text" placeholder="First name" class="form-control" id="first-name">
                    <input type="text" placeholder="Last name" class="form-control" id="last-name">
                    <input type="text" placeholder="Address" class="form-control" id="address">
                    <div class="form-postal">
                        <input type="text" placeholder="Mã bưu điện" class="form-postal-info">
                        <input type="text" placeholder="Thành phố" class="form-postal-info">
                    </div>
                    <input type="text" placeholder="Việt nam" readonly class="form-control">
                </div>
                <div class="title-content">
                    <span class="content">Thông tin liên hệ của bạn</span>
                </div>
                <div class="form-your-contact">
                    <input type="text" placeholder="email" id="email"class="form-control">
                    <input type="text" placeholder="Số điện thoại" id="phone" class="form-control">
                </div>
                <div class="title-content">
                    <span class="content">Mã khuyến mãi</span>
                </div>
                <div class="form-discount">
                    <input type="text" placeholder="Mã khuyến mãi" class="form-control">
                </div>
                <div class="title-content">
                    <span class="content">Bạn muốn thanh toán như thế nào?</span>
                </div>
                <div class="form-credit-payment">
                    <select name="" id="payment-method" style="font-size:23px;margin:10px 0px;">
                        <option value="Thẻ tín dụng hoặc thẻ ghi nợ">Thẻ tín dụng hoặc thẻ ghi nợ</option>
                        <option value="paypal">paypal</option>
                        <option value="Thanh toán khi nhận hàng" selected>Thanh toán khi nhận hàng</option>
                    </select>
                </div>
                <div class="title-content">
                    <span class="content">Điền vào thanh toán chi tiết:</span>
                </div>
                <div class="form-credit-payment">
                    <input type="text" placeholder="Tên trên thẻ" class="form-control">
                    <input type="text" placeholder="Số thẻ" class="form-control">
                    <input type="date" placeholder="ngày tạo" class="form-control">
                    <input type="text" placeholder="CVV" class="form-control">
                </div>
                <div class="btn-payment">
                    <span onclick="onclickPayment()">Xác nhận thanh toán</span>
                </div>
            </div>
        </div>
        <div class="form-info-total-and-btn">
            <div class="contain-summary">
                <span class="summary">Summary</span>
            </div>
            <div class="total-price">
                <span>Tổng giá: <span id="all-price"></span> &#8363;</span>
            </div>
            <div class="price-ship">
                <span>Phí vận chuyển: 30.000 &#8363;</span>
            </div>
            <div class="line-black"></div>
            <div class="total-all">
                <span>Tổng: <span id="sum-price"></span> &#8363;</span>
                <input type="hidden" name="" id="total-products">
            </div>
            <div class="line-black"></div>
            <span class="content">Sản phẩm</span>
            <div class="product-order-payment">
                <!-- <div class="product-item">
                        <div class="content-img-item">
                            <img src="image/product/00397ebb40e68eb8d7f7.jpg"
                                alt="">
                        </div>
                        <div class="content-info-item">
                            <div class="content-name content">
                                <span>Nike Air Force 1 '07</span>
                            </div>
                            <div class="content-category">
                                <span>Giới tính:Nam</span>
                            </div>
                            <div class="content-quantity">
                                <span for="quantity">Số lượng:1</span>
                            </div>
                            <div class="content-category">
                                <span for="size">Size:43</span>
                            </div>

                            <div class="content-price">
                                <label for="price">Giá:</label>
                                <span class="price" id="price">3,500,000 &#8363;</span>
                            </div>
                        </div>

                    </div> -->
            </div>
        </div>
    </div>
    <!-- cart -->
    <!-- footer -->
    <?php @include "footer.php" ?>
    <!-- end footer------------------------------------------------ -->
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- owl carousel------------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--  -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <!-- script -->
    <script src="script/hoverfor-cart.js"></script>
    <script src="script/payment.js"></script>
    <script src="script/redirect.js"></script>
</body>

</html>