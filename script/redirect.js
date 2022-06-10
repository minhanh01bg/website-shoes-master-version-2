function redirectLogin() {
    location.href = "index.php";
}
function redirectDashboard() {
    location.href = "dashboard.php";
}
function redirectInfor() {
    location.href = "inforuser.php";
}
function redirectCart() {
    location.href = "cart.php";
}
function redirectHome() {
    location.href = "view.php";
}
function redirectNam() {
    location.href = "male.php";
}
function redirectNu() {
    location.href = "female.php";
}
function redirectDetails(){
    location.href="details-product.php";
}
function redirectList(){
    location.href="yourlikes.php";
}
function  redirectPayment(){
    location.href = "payment.php";
}

function redirectNew(){
    location.href = "new.php";
}
$("#menubtn").click(function () {
    if($(".navigation").css("display")=="none"){
        $(".navigation").show();
    }
    else{
        $(".navigation").hide();
    }
});
