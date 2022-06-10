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
        <link rel="stylesheet" href="css/product.css" />
        <link rel="stylesheet" href="css/slider-top-in-week.css">
        <link rel="stylesheet" href="css/user.css">
        <link rel="stylesheet" href="css/details.css">
        <!-- icons ---------------------------------->
        <link rel="stylesheet"
            href="fontawesome-free-6.0.0-web\fontawesome-free-6.0.0-web\css\all.min.css"
            />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap"
            rel="stylesheet" />
        <link rel="shortcut icon" href="image/logo.png" />
        <link rel="stylesheet" href="css/custom-select.css">
        <!-- font google -->
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
            rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <!--Owl  carousel ---------------   ------- ------------------------------>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="crossorigin="anonymous"
            referrerpolicy="no-referrer" />
        <!-- box icons----------------------------------------------- -->
        <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
            rel="stylesheet" />
        <!--  -->
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap"
            rel="stylesheet">

        <link
            href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap"
            rel="stylesheet">

        <link
            href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="css/yourlikes.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/rep-index.css">
    </head>

    <body>
        <?php @include "header.php"; ?>
        <input type="hidden" id="id-product" value="<?php echo $_GET['id_product']; ?>">
        <div class="container-details-product">
            <div class="content-image">
                <div class="box-double-image">
                    <div class="item-image">
                        <img
                            src="image/details/a96a1b62-d6b4-4c91-b1db-ae68863243af.webp"
                            alt="">
                    </div>
                    <!-- <div class="item-image">
                        <img
                            src="image/details/2.webp"
                            alt="">
                    </div> -->
                </div>
                <!-- <div class="box-double-image">
                    <div class="item-image">
                        <img
                            src="image/details/3.webp"
                            alt="">
                    </div>
                    <div class="item-image">
                        <img
                            src="image/details/4.webp"
                            alt="">
                    </div>
                </div>
                <div class="box-double-image">
                    <div class="item-image">
                        <img
                            src="image/details/5.webp"
                            alt="">
                    </div>
                    <div class="item-image">
                        <img
                            src="image/details/6.webp"
                            alt="">
                    </div>
                </div>
                <div class="box-double-image">
                    <div class="item-image">
                        <img
                            src="image/details/7.webp"
                            alt="">
                    </div>
                    <div class="item-image">
                        <img
                            src="image/details/8.webp"
                            alt="">
                    </div>
                </div> -->
            </div>
            <div class="content-informations">
                <div class="info-name">
                    <span>Nike Air Force 1 '07 Craft</span>
                </div>
                <div class="info-gender">
                    <span>Giày nam</span>
                </div>
                <div class="info-color">
                    <span>Màu: Trắng</span>
                </div>
                <div class="info-price">
                    <span>3.500.000 đ</span>
                </div>

                <div class="custom-select" style="width:200px;">
                    <select>
                        <option value="0">Chọn size:</option>
                        <option value="1">39</option>
                        <option value="2">40</option>
                        <option value="3">41</option>
                        <option value="4">42</option>
                        <option value="5">43</option>
                        <option value="6">44</option>
                    </select>
                </div>
                <div class="btn-dt">
                    <span class="add-to-cart">Thêm vào giỏ</span>
                    <span class="add-to-cart">Thêm vào danh sách yêu thích</span>
                </div>
                <div class="details-info">
                    Huyền thoại tiếp tục tồn tại trong Nike Air Force 1 '07
                    Craft — một phiên bản hiện đại trên AF-1 mang tính biểu
                    tượng với các chi tiết mới như đồ họa mới trên lưỡi và gót
                    giày. Da thuộc, da lộn được chải và đường khâu lộ ra ở mặt
                    trên tạo thêm độ sâu và kết cấu trong khi lớp lót sang trọng
                    mới tạo cảm giác mềm mại và thoải mái. Hình dạng được thiết
                    kế lại của nó trở lại nguồn gốc OG, thêm phong cách di sản.
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php @include "footer.php" ?>
        <!-- end footer------------------------------------------------ -->
        <!-- jquery -->
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- owl carousel------------------------------------------------------->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="crossorigin="anonymous"
            referrerpolicy="no-referrer"></script>

        <!-- script -->
        <!-- <script src="script/getDataProduct.js"></script> -->
        <!-- <script src="script/script.js"></script> -->
        <script src="script/redirect.js"></script>
        <script src="script/detail-product.js"></script>
    </body>
</html>