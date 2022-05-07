function displayProduct() {
  $.getJSON("/php/api/post/R_product.php", {}, function (data) {
    $("#container-content-product-nike-0").html("");
    // console.log(data);
    let x = 0, cnt = 0;
    for (let i = 0; i < data.data.length; i++) {
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
                    <span class="add-to-cart addtocart">Thêm vào giỏ</span>
                    <span class="add-to-cart buy-product">Mua Ngay</span>
                  </div>
                </div>
              </div>
            </div>`);
      cnt += 1;
    }
    x = 0;
    cnt = 0;
    $("#container-content-product-adidas-0").html("");
    for (let i = 0; i < data.data.length; i++) {
      if (data.data[i].category == "adidas") {
        if (cnt % 5 == 0) {
          $("#adidas-product").append(`
                <div class="contain-product-item" id="container-content-product-adidas-${i}"></div>`);
          x = i;
        }
        let img = data.data[i].image;
        let str = "#container-content-product-adidas-" + x;
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
                    <span class="add-to-cart addtocart">Thêm vào giỏ</span>
                    <span class="add-to-cart buy-product">Mua Ngay</span>
                  </div>
                </div>
              </div>
            </div>`);
        cnt += 1;
      }
    }
    x = 0;
    cnt = 0;
    // for (let i = 0; i < data.data.length; i++) {
    //   if (data.data[i].category == "special") {
    //     // if (cnt % 5 == 0) {
    //     //   $("#special-product").append(`
    //     //         <div class="contain-product-item" id="container-content-product-special-${i}"></div>`);
    //     //   x = i;
    //     // }
    //     let img = data.data[i].image;
    //     // let str = "#container-content-product-special-" + x;
    //     $("#product-carousel").append(`
    //     <div class="contain-merchandise">
    //       <div class="content-img">
    //         <img src="image/product/${decodeURI(img)}" alt="">
    //       </div>
    //       <div class="info-special">
    //         <div class="special-name">
    //           <span>${data.data[i].name}</span>
    //         </div>
    //         <div class="special-btn">
    //           <span>Mua ngay</span>
    //         </div>
    //       </div>
    //     </div>`);
    //     cnt += 1;
    //   }
    // }
    
    let myBtn = document.querySelectorAll('.addtocart');
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
window.onload = displayProduct;

