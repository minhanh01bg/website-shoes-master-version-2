var scroll = 0;
window.onscroll = () => {
    var current = document.documentElement.scrollTop;
    if (current >= 695) {
        $(".navigation").css({
            "color": "white",
            "background-color":"white",
            "transition": ".3s ease-in-out",
            "z-index": "1000"
        });
    }
    if (current < 695) {
        $(".navigation").css({
            "color": "rgb(230, 79, 105)",
            "background":"none"
        });
    }
    // console.log(current);
    if (current < scroll) {
        scroll = current;
        $("#nav").css({
            "top": "0",
            "transition": ".3s ease-in-out",
        });

    } else if (current > scroll) {
        $("#nav").css({
            "top": "-90px"
        });
        $("#content-user").css({ "display": "none", "z-index": "0", "width": "0px" });
        scroll = current;
    }
    // 
    var winScroll =
        document.body.scrollTop || document.documentElement.scrollTop;
    var height =
        document.documentElement.scrollHeight -
        document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
    if (current) {
        // top up scroll
        $("#icon-top-up").css({
            "visibility": "visible",
            "opacity": "1",
            "z-index": "900",
            "transform": "translateY(-10px)"
        })
    } else {
        // top up scroll
        $("#icon-top-up").css({
            "visibility": "hidden",
            "opacity": "0",
            "z-index": "0",
            "transform": "translateY(-50px)"
        })
    }
};
// clicked top up scroll
$("#icon-top-up").click(function () {
    $("html, body").animate({
        scrollTop: 0
    }, 100, () => {
        window.location.hash = 0;
    })
})
$("#glow").click(function () {
    $("html, body").animate({
        scrollTop: 0
    }, 100, () => {
        window.location.hash = 0;
    })
});

function displayInfo() {
    let display = document.getElementById("content-user").style.display;
    if (display == "none") {
        $("#content-user").css({
            "display": "flex",
            "z-index": "1100", "width": "250px",
            // "transform": "translateX(0px)",
            // "transition": "all ease 0.2s"
        });
    }
    else {
        $("#content-user").css({ "display": "none", "z-index": "0", "width": "0px" });
    }
}
// redirect
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
    location.href = "cart.html";
}
function redirectHome() {
    location.href = "index.html";
}
function redirectNam() {
    location.href = "nam.php";
}
function redirectNu() {
    location.href = "nu.php";
}
function redirectDetails(){
    location.href="details-product.html";
}
// end redirect

