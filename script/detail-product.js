window.onload = function() {
    let id = $("#id-product").val();
    $.getJSON("/php/api/post/R_single_product.php",{id:id},function (product){
        $(".container-details-product").html("");
        let img= `
        <div class="content-image">
            <div class="box-double-image">
                <div class="item-image">
                    <img src="/php//api/post/uploads/${decodeURI(product.image)}" alt="">
                </div>
            </div>
        </div>`;
        $(".container-details-product").append(img);
        let info=
        `
        <div class="content-informations">
            <div class="info-name">
                <span>${product.name}</span>
            </div>
            <div class="info-gender">
                <span>Giới tính: ${product.object}</span>
            </div>
            <div class="info-color">
                <span>Màu: ${product.color}</span>
            </div>
            <div class="info-price">
                <span>${product.price} đ</span>
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
                ${product.details}
            </div>
        </div>
        `;
        $(".container-details-product").append(info);
    })
}