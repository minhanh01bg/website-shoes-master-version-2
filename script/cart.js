function cartDisplay() {
    $.getJSON("/php/api/post/R_single_c.php", { id: $("#id-single").val() }, function (data) {
        console.log(data);
        $("#modal-payment").html("");
        $("#modal-payment").append(`<div class="title-method-payment">Thanh toán</div>`);
        let all_price = 0;
        let total_product = "";
        let id_user_log = data.data[0].user_id;
        for (let i = 0; i < data.data.length; i++) {
            let img = data.data[i].image;

            all_price += Number(data.data[i].price);
            total_product += data.data[i].name + "(" + data.data[i].quantity + "," + data.data[i].size + "),";
            let html =
                `
            <div class="product-item">
                <div style="display:none;">${data.data[i].id}</div>
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
                        <label for="quantity">Số lượng:</label>
                        <input type="number"
                            name="quantity"
                            ng-model="quantity" id="quantity-${i}" value="${data.data[i].quantity}">
                    </div>
                    <div class="content-category">
                        <label for="size">Kích thước:</label>
                        <select class="form-select" id="category-edit-${i}">
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                        </select>
                    </div>

                    <div class="content-price">
                        <label for="price">Giá:</label>
                        <span class="price" id="price-${i}">${data.data[i].price} &#8363;</span>
                    </div>
                    <div class="add-list-love">
                        <span class="add-list">Thêm vào danh sách yêu thích</span>
                    </div>
                </div>
                <div class="btn-primary">
                    <button class="save">Cập nhật</button>
                    <button class="edit">Xóa</button>
                </div>
                <div style="display:none;">${i}</div>
            </div>
            `;
            let idSize = "#category-edit-" + i;
            let idOb = "#category-edit-ob-" + i;
            $("#container-product-item").append(html);
            $(idSize).val(data.data[i].size);
            $(idOb).text(data.data[i].object);
        }
        $("#sum-price").text(all_price);
        all_price +=30000;
        $("#sum-all-price").text(all_price);
        let btnE = document.querySelectorAll(".edit");
        for (let i = 0; i < btnE.length; i++) {
            btnE[i].addEventListener("click", function (event) {
                let ev = event.target.parentElement.parentElement.firstElementChild;
                ev = ev.textContent;
                $.getJSON("/php/api/post/delete_cart.php", { id: ev }, function (data) {
                    location.href = "/cart.php";
                })
            });
        }
        let btnUpdate = document.querySelectorAll(".save");
        for (let i = 0; i < btnUpdate.length; i++) {
            btnUpdate[i].addEventListener("click", function (event) {
                let ev = event.target.parentElement.parentElement.firstElementChild;
                ev = ev.textContent;
                let index = event.target.parentElement.parentElement.lastElementChild;
                // console.log(index.textContent);
                index = index.textContent;

                let size = "#category-edit-" + index;
                let ob = "#category-edit-ob-" + index;
                let quantity = "#quantity-" + index;
                let price = "#price-" + index;

                quantity = $(quantity).val();
                let priceOne = data.data[Number(index)].price / data.data[Number(index)].quantity;
                price = priceOne * Number(quantity);//main price
                // // console.log(price);
                ob = $(ob).val();
                size = $(size).val();
                // // console.log(ob, size);
                $.getJSON("/php/api/post/update_cart.php", {
                    id: ev,
                    price: price,
                    object: ob,
                    size: size,
                    quantity: quantity
                }, function (data) {
                    location.href = "/cart.php";
                    // console.log(data);
                });
            });
        }
        let btnWishlist = document.querySelectorAll(".add-list");
        for (let i = 0; i < btnWishlist.length; i++) {
            btnWishlist[i].addEventListener("click", function (event) {
                let ev = event.target.parentElement.parentElement.parentElement.lastElementChild;
                console.log(ev);
                console.log(data.data[Number(ev.textContent)].pid);
                $.getJSON("/php/api/post/R_single_product.php", { id: data.data[Number(ev.textContent)].pid }, function (d) {
                    console.log(d);
                    let image = d.image;

                    $.getJSON("/php/api/post/Add_wishlist.php", {
                        user_id: data.data[0].user_id,
                        pid: data.data[Number(ev.textContent)].pid,
                        price: d.price,
                        name:d.name, 
                        image:image
                    }, function (dt) {
                        console.log(dt);
                        
                    });
                })
            });
        }
        // button delete all cart
        $("#delete-all-cart").click(function (e) {
            $.getJSON("/php/api/post/delete_all_cart.php", {
                user_id: data.data[0].user_id
            },
                function (data) {
                    console.log(data);
                    location.href = "/cart.php";
                })
        });
    });
}

window.onload = cartDisplay;

