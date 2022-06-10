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
    <!-- <link rel="stylesheet" href="css/styleforcart.css" type="text/css" /> q -->
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
    <link rel="stylesheet" href="css/cart.css">
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
        <!-- <div class="message-with-system">
            <span class="material-icons-outlined icon-chat"> chat </span>
        </div> -->
    </div>
    <!-- end top up -->
    <!-- cart  -->
    <!-- <div class="line-black"></div> -->
    <div class="content-cart-title">
        <span class="content title-cart">Giỏ hàng</span>
    </div>
    <div class="container-ctn-product">
        <div class="container-product-item" id="container-product-item">
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
                            <label for="quantity">Số lượng:</label>
                            <input type="number"
                                name="quantity"
                                ng-model="quantity" value="1">
                        </div>
                        <div class="content-category">
                            <label for="size">Kích thước:</label>
                            <select class="form-select">
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                            </select>
                        </div>

                        <div class="content-price">
                            <label for="price">Giá:</label>
                            <span class="price" id="price">3,500,000 &#8363;</span>
                        </div>
                        <div class="add-list-love">
                            <span class="add-list">Thêm vào danh sách yêu thích</span>
                        </div>
                    </div>
                    <div class="btn-primary">
                        <button class="save">Cập nhật</button>
                        <button class="edit">Xóa</button>
                    </div>

                </div> -->

        </div>
        <div class="form-info-total-and-btn">
            <div class="contain-summary">
                <span class="summary">Summary</span>
            </div>
            <div class="total-price">
                <span>Tổng giá: <span id="sum-price"></span> &#8363;</span>
            </div>
            <div class="price-ship">
                <span>Phí vận chuyển: 30.000 &#8363;</span>
            </div>
            <div class="line-black"></div>
            <div class="total-all">
                <span>Tổng: <span id="sum-all-price"></span> &#8363;</span>
            </div>
            <div class="line-black"></div>
            <span class="payment-btn" onclick="redirectPayment()">Thanh toán</span>
            <span class="btn-payment delete-all payment-btn" id="delete-all-cart">Xóa tất cả</span>
        </div>
    </div>


    <div class="modal-payment" id="modal-payment" style="display:none;">
        <div class="title-method-payment">Thanh toán</div>
        <div class="container-content-item">
            <div class="title-payment">
                <label for="">sản phẩm:</label>
                <span>jkd;lkd;dk;kl;jakdjf</span>
            </div>
            <div class="title-payment">
                <label for="">Số lượng:</label>
                <span>341</span>
            </div>
            <div class="title-payment">
                <label for="">Giá:</label>
                <span>109893</span>
            </div>
        </div>
        <div class="total">
            <div class="total-price">
                <label for="">Tổng chi phí</label>
                <span>123128</span>
            </div>
            <div class="total-price">
                <label for="">Địa chỉ</label>
                <span>123128</span>
            </div>
            <div class="total-price">
                <label for="">Số điện thoại</label>
                <span>123128</span>
            </div>
            <div class="payment" class="option-one">
                <label for="">Phương thức thanh toán</label>
                <select class="form-select" id="payment-method">
                    <option value="Sử dụng thẻ tín dụng">Sử dụng thẻ tín
                        dụng</option>
                    <option value="thanh toán khi nhận hàng">thanh toán khi
                        nhận hàng</option>
                </select>
            </div>
        </div>
        <div class="btn-confirm">
            <button class="confirm-payment" id="confirm-payment">Xác nhận
                thanh toán</button>
            <button class="close" id="close">Đóng tab</button>
        </div>
    </div>
    <!-- cart -->
    <?php @include "footer.php" ?>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- owl carousel------------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--  -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <!-- script -->
    <!-- <script src="script/getDataProduct.js"></script> -->
    <script src="script/hoverfor-cart.js"></script>
    <script src="script/cart.js"></script>
    <!-- <script src="script/script.js"></script> -->
    <script src="script/redirect.js"></script>
</body>

</html>