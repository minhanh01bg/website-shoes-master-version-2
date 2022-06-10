$(document).ready(() => {
    let navText = [
        "<i class = 'bx bx-chevron-left'></i>",
        "<i class = 'bx bx-chevron-right'></i>",
    ];
    $("#hero-carousel").owlCarousel({
        items: 1,
        dots: false,
        loop: true,
        nav: true,
        navText: navText,
        autoplay: true,
        autoplayHoverPause: true,
    });
    $("#product-carousel").owlCarousel({
        items: 5,
        dots: false,
        loop: true,
        // nav: true,
        // navText: navText,
        autoplay: true,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:2
            },
            768:{
                items:3
            }, 
            1024:{
                items:4
            }, 1440:{
                items:5
            }
        }
    })
});


var scroll = 0;
window.onscroll = () => {
    var current = document.documentElement.scrollTop;
    console.log(scroll);
    // set background navigation bar
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
    } 
    else {
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
// function redirectLogin() {
//     location.href = "index.php";
// }
// function redirectDashboard() {
//     location.href = "dashboard.php";
// }
// function redirectInfor() {
//     location.href = "inforuser.html";
// }
// function redirectCart() {
//     location.href = "cart.html";
// }
// function redirectHome() {
//     location.href = "index.html";
// }
// function redirectNam() {
//     location.href = "male.html";
// }
// function redirectNu() {
//     location.href = "female.html";
// }
// function redirectDetails(){
//     location.href="details-product.html";
// }
// function redirectList(){
//     location.href="yourlikes.html";
// }

// end redirect
