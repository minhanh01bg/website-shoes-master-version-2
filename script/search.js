function search() {
    let search = $("#input-search").val();
    console.log(search);
    $.getJSON("/php/api/post/R_product.php", {}, function (data) {

        $("#all-content-product").html("");


        let html = `<div class="special-product" id="nike-product">
        <div class="special-product-header-title">
          <span class="header-title" id="nike">Sản phẩm bạn tìm</span>
        </div>
        <div class="contain-product-item" id="container-content-product-nike-0">
          <!-- items -->
        </div>
      </div>`;
        $("#all-content-product").append(html);
        $("#container-content-product-nike-0").html("");
        let x = 0, cnt = 0;
        for (let i = 0; i < data.data.length; i++) {
            // console.log(search.search(data.data[i].name));
            // console.log(data.data[i].name);
            if (search != data.data[i].name) {
                continue;
            }
            if (data.data[i].category == "adidas") {
                continue;
            }
            if (cnt % 5 == 0) {
                $("#nike-product").append(`
                  <div class="contain-product-item" id="container-content-product-nike-${i}"></div>`);
                x = i;
            }
            let img = data.data[i].image;
            let str = "#container-content-product-nike-" + x;
            $(str).append(`
              <div class="merchandise-item">
                <div class="merchandise-title" id="merchandise-id">${data.data[i].id}</div>
                <div class="merchandise-infos">
                  <div class="merchandise-img">
                    <img src="/php/api/post/uploads/${decodeURI(img)}" alt="">
                  </div>
                  <div class="merchandise-info">
                    <span class="name-merchandise">
                      ${data.data[i].name} </span>
                    <span class="merchandise-price">
                    ${data.data[i].price} &#8363;
                    </span>
                    <div class="merchandise-size">
                      <span class="add-to-cart">Thêm vào giỏ</span>
                    </div>
                  </div>
                </div>
              </div>`);
            cnt += 1;
        }
        let myBtn = document.querySelectorAll('.add-to-cart');
        for (let i = 0; i < myBtn.length; i++) {
            myBtn[i].addEventListener('click', function (event) {
                let ev = event.target.parentElement.parentElement.parentElement.parentElement.firstElementChild;
                ev = ev.textContent;
                console.log(ev);
                let id_user = $("#id-user").val();
                $.getJSON("/php/api/post/R_single_product.php", { id: ev }, function (data) {
                    console.log(data);
                    $.getJSON("/php/api/post/Add_cart.php", {
                        user_id: id_user,
                        pid: data['id'],
                        name: data['name'],
                        price: data['price'],
                        object: data['object'],
                        image: data['image'],
                        category: data['category'],
                    }, function (data) {
                        console.log(data);
                    })
                })
            });
        }
    })
}
