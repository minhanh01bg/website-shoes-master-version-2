function orders(){
    $.getJSON("/php/api/post/R_single_c.php", { id: $("#id-single").val() }, function (data) {
        // console.log(data);
        $("#modal-payment").html("");
        $("#modal-payment").append(`<div class="title-method-payment">Thanh toán</div>`);
        let all_price = 0;
        let total_product = "";
        for (let i = 0; i < data.data.length; i++) {
            let img = data.data[i].image;
            all_price += Number(data.data[i].price);
            total_product += data.data[i].name + "(" + data.data[i].quantity +"," +data.data[i].size+"),";
            let html=
            `
            <div class="product-item">
                <div class="content-img-item">
                    <img src="/php/api/post/uploads/${decodeURI(img)}" alt="">
                </div>
                <div class="content-info-item">
                    <div class="content-name content">
                        <span>${data.data[i].name}</span>
                    </div>
                    <div class="content-category">
                        <span>Giới tính:<span id="category-edit-ob-${i}"></span></span>
                    </div>
                    <div class="content-quantity">
                        <span for="quantity">Số lượng:
                            <span name="quantity" id="quantity-${i}">${data.data[i].quantity}</span>
                        </span>
                    </div>
                    <div class="content-category">
                        <span for="size">Size:
                            <span id="category-edit-${i}"></span>
                        </span>
                    </div>

                    <div class="content-price">
                        <label for="price">Giá:</label>
                        <span class="price" id="price-${i}">${data.data[i].price} &#8363;</span>
                    </div>
                </div>
            </div>
            `;

            let idSize = "#category-edit-" + i;
            let idOb = "#category-edit-ob-" + i;
            $(".product-order-payment").append(html);
            $(idSize).text(data.data[i].size);
            $(idOb).text(data.data[i].object);
        }
        $("#total-products").val(total_product);
        $("#all-price").text(all_price);
        all_price = all_price + 30000;
        $("#sum-price").text(all_price);
    });
}
window.onload = orders;

function onclickPayment(){
    let date = new Date();
            date = date.getFullYear().toString() + "-" + date.getMonth().toString() + "-" + date.getDay().toString();
            console.log(date);
    let method = $("#payment-method").val();
    let address=$("#address").val();
    let name=$("#first-name").val() + " " + $("#last-name").val();
    let email=$("#email").val();
    let phone=$("#phone").val();
    let all_price =$("#sum-price").text();
    let total_product=$("#total-products").val();
    let id_user_log=$("#id-single").val();
    console.log(method,address,name,email,phone,all_price,total_product,id_user_log);
    $.getJSON("/php/api/post/Add_order.php", {
        user_id: id_user_log,
        address: address,
        name: name,
        email: email,
        number: phone,
        place_on:date,
        total_price:all_price,
        total_products:total_product,
        method:method
    }, function (data) {
        // console.log(data);
        location.reload();
    });
}