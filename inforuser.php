<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('Location: auth-login-basic.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,
                initial-scale=1.0" />
    <title>VMAS</title>
    <link rel="stylesheet" href="css/styleforcart.css" type="text/css" />
    <!-- <link rel="stylesheet" href="css/glow.css" /> -->
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/infouser.css">

    <!-- icons ---------------------------------->
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web\fontawesome-free-6.0.0-web\css\all.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
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

    <!-- box icons----------------------------------------------- -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/styleforInfoFooter.css">
    <link rel="stylesheet" href="css/footer.css">

</head>

<body>
    <?php @include "header.php"; ?>
    <div class="top-up">
        <span class="material-icons-outlined" id="icon-top-up">
            navigation
        </span>
        <div class="message-with-system">
            <span class="material-icons-outlined icon-chat">
            </span>
        </div>
    </div>
    <!-- end top up -->
    <div class="box-information">
        <div class="content-information">
            <div class="content-image">
                <img src="/php/api/post/uploads/<?php echo $_SESSION['image']; ?>" alt="">
            </div>
            <div class="content-details">
                <input type="hidden" id="content-id" value="<?php echo $_SESSION['id']; ?>">
                <div class="content-name">
                    <label for="">Tên:</label>
                    <input type="text" id="content-name" value="<?php
                                                                echo $_SESSION['name'];
                                                                ?>">
                </div>
                <div class="content-email">
                    <label for="">Email:</label>
                    <input type="text" id="content-email" value="<?php
                                                                    echo $_SESSION['email'];
                                                                    ?>">
                </div>
                <div class="content-phone">
                    <label for="">Số điện thoại:</label>
                    <input type="text" id="content-phone" value="<?php
                                                                    echo $_SESSION['phone'];
                                                                    ?>">
                </div>
                <div class="content-birth">
                    <label for="">Ngày sinh:</label>
                    <input type="date" id="content-birth" value="<?php
                                                                    echo $_SESSION['birth'];
                                                                    ?>">
                </div>
                <div class="content-address">
                    <label for="">Địa chỉ:</label>
                    <input type="text" id="content-address" value="<?php
                                                                    echo $_SESSION['address'];
                                                                    ?>">
                </div>
                <div class="containner-img">
                    <input type="file" name="uploadfile" id="uploadfile" />
                </div>
                <div class="btn">
                    <button class="edit" id="edit-info">Lưu</button>
                </div>
            </div>
        </div>
    </div>
    <?php @include "footer.php" ?>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- script -->
    <script src="script/uploadInfo.js"></script>
    <script src="script/script.js"></script>
<script src="script/redirect.js"></script>
</body>

</html>