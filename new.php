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
    <link rel="stylesheet" href="css/titler.css">
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
    <link rel="stylesheet" href="css/rep-index.css">
    <link rel="stylesheet" href="css/yourlikes.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php @include "header.php"; ?>
    <div class="top-up">
            <span class="material-icons-outlined" id="icon-top-up">
                navigation
            </span>
            <!-- <div class="message-with-system">
                <a href="#"><span
                        class="material-icons-outlined icon-chat">chat</span></a>
            </div> -->
    </div>
    <div class="container-news">
        <div class="info-new">
            
        </div>
        <div class="top-new">

        </div>
    </div>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-6b7c4476-cba7-4d7f-b0ef-dc55634740e3"></div>



  <?php @include "footer.php" ?>
  <!-- jquery -->
  <script src="node_modules/jquery/dist/jquery.js"></script>
  <!-- owl carousel------------------------------------------------------->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- script -->
  <!-- <script src="script/displayProduct.js"></script> -->
  <script src="script/script-two.js"></script>
  <script src="script/redirect.js"></script>
</body>
</html>