function getDataProduct() {
  $.getJSON("/php/api/post/R_product.php", {}, function (data) {
    console.log(data.data);
    let body = document.querySelector('.table-border-bottom-0');
    let html_button_edit = `<td>
        <div class="dropdown">
          <button type="button" class="btn p-0 dropdown-toggle
            hide-arrow" data-bs-toggle="dropdown">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item edit-product-btn"
              href="javascript:void(0);"><i class="bx
                bx-edit-alt me-1"></i> Edit</a>
            <a class="dropdown-item delete-btn"
              href="javascript:void(0);"><i class="bx bx-trash
                me-1"></i> Delete</a>
          </div>
        </div>
      </td>`;
    // table
    for (let i = 0; i < data.data.length; i++) {
      body.innerHTML += `<tr></tr>`;
      let row = document.getElementById("content-products").lastElementChild;
      row.innerHTML += `<td>${data.data[i]['id']}</td>`;
      row.innerHTML += `<td>${data.data[i]['name']}</td>`;
      // row.innerHTML += `<td>${data.data[i]['details']}</td>`;
      row.innerHTML += `<td>${data.data[i]['price']}</td>`;
      // row.innerHTML += `<td>${data.data[i]['status']}</td>`;
      row.innerHTML += html_button_edit;
    }
    // edit product
    let myButton = document.querySelectorAll(".edit-product-btn");
    for (let i = 0; i < myButton.length; i++) {
      myButton[i].addEventListener("click", function (e) {
        let id_more = e.target.parentElement.parentElement.parentElement.parentElement.firstChild;
        // console.log(id_more);
        let valueId = id_more.textContent;
        for (let i = 0; i < data.data.length; i++) {
          if (data.data[i].id == valueId) {
            // console.log(data.data[i]);
            $("#basic-icon-default-name-edit").val(data.data[i].name);
            $("#basic-icon-default-detail-edit").val(data.data[i].details);
            $("#basic-icon-default-price-edit").val(data.data[i].price);
            $("#object-edit").val(data.data[i].object);
            $("#category-edit").val(data.data[i].category);
            document.getElementById("viewImage").innerHTML = "";
            $("#viewImage").append('<img src="/php/api/post/uploads/' +
              data.data[i]['image'] +
              '" width="150px;" height="200px">');
            break;
          }
        }

        $("#basic-icon-default-id-edit").val(id_more.textContent);
        if ($("#modal-edit").css("display") == "none") {
          $("#modal-edit").css({
            "display": "block",
            "position": "absolute",
            "z-index": "100",
            "right": "100px"
          });
        }
        else {
          $("#modal-edit").css({
            "display": "none",
          });
        }
      })
    }
    // delete product
    let myButtonDele = document.querySelectorAll(".delete-btn");
    for (let i = 0; i < myButtonDele.length; i++) {
      myButtonDele[i].addEventListener("click", function (e) {
        let id_more = e.target.parentElement.parentElement.parentElement.parentElement.firstChild;
        let valueId = id_more.textContent;
        for (let i = 0; i < data.data.length; i++) {
          if (data.data[i].id == valueId) {
            // console.log(data.data[i]);
            $.getJSON("/php/api/post/delete_product.php", { id: data.data[i].id }, function (response) {
              console.log(response);
            });
            location.href = "/manage_product.php";
            break;
          }
        }
      })
    }
  });
}
window.onload = getDataProduct;

$("#btn-add-product").click(function () {
  if ($("#modal-add").css("display") == "none") {
    $("#modal-add").css({
      "display": "block",
      "position": "absolute",
      "z-index": "100",
      "right": "100px"
    });
  }
  else {
    $("#modal-add").css({
      "display": "none",
    });
  }
});

$("#btn-close").click(() => {
  if ($("#modal-add").css("display") == "none") {
    $("#modal-add").css({
      "display": "block",
      "position": "absolute",
      "z-index": "100",
      "right": "100px"
    });
  }
  else {
    $("#modal-add").css({
      "display": "none",
    });
  }
});
$("#btn-close-edit").click(() => {
  if ($("#modal-edit").css("display") == "none") {
    $("#modal-edit").css({
      "display": "block",
      "position": "absolute",
      "z-index": "100",
      "right": "100px"
    });
  }
  else {
    $("#modal-edit").css({
      "display": "none",
    });
  }

})
$("#btn-save").click(() => {
  let id = $("#basic-icon-default-id").val();
  var form_data = new FormData();
  form_data.append('id', id);
  form_data.append('name', $("#basic-icon-default-name").val());
  form_data.append('details', $("#basic-icon-default-detail").val());
  form_data.append('price', $("#basic-icon-default-price").val());
  form_data.append('object', $("#object").val());
  form_data.append('category', $("#category").val());
  form_data.append('brand',$("#content-brand").val());
  form_data.append('color',$("#content-color").val());
  
  $.ajax({
    url: "/php/api/post/Add_product.php",
    type: "post",
    data: form_data,
    dataType: "json",
    contentType: false,
    processData: false,
    success: function (response) {
      console.log(response);
      var form = new FormData();
      form.append("files[]", document.getElementById("formFile").files[0]);
      form.append('id', id);
      $.ajax({
        url: "/php/api/post/update_imgP.php",
        type: "post",
        data: form,
        dataType: "json",
        contentType: false,
        processData: false,
        success: function (response) {
          console.log(response);
        }
      });
    }
  });
});
$("#btn-save-edit").click(function () {
  $.getJSON("/php/api/post/save_product.php", {
    id: $("#basic-icon-default-id-edit").val(),
    name: $("#basic-icon-default-name-edit").val(),
    details: $("#basic-icon-default-detail-edit").val(),
    price: $("#basic-icon-default-price-edit").val(),
    object: $("#object-edit").val(),
    category: $("#category-edit").val(),
    brand: $("#brand-edit").val(),
    color: $("#color-edit").val()
  }, function (data) {
    console.log(data);
    var form = new FormData();
    form.append("files[]", document.getElementById("formFile-edit").files[0]);
    form.append('id', $("#basic-icon-default-id-edit").val());
    $.ajax({
      url: "/php/api/post/update_imgP.php",
      type: "post",
      data: form,
      dataType: "json",
      contentType: false,
      processData: false,
      success: function (response) {
        location.href="/manage_product.php";
      }
    });
  });
  
});