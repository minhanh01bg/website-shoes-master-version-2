function getDataProduct() {
    $.getJSON("/php/api/post/R_orders.php", {}, function (data) {
        console.log(data.data);
        let body = document.querySelector('.table-border-bottom-0');
        let html_button_edit=`<td>
        <div class="dropdown">
          <button type="button" class="btn p-0 dropdown-toggle
            hide-arrow" data-bs-toggle="dropdown">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item"
              href="javascript:void(0);"><i class="bx
                bx-edit-alt me-1"></i> Edit</a>
            <a class="dropdown-item"
              href="javascript:void(0);"><i class="bx bx-trash
                me-1"></i> Delete</a>
          </div>
        </div>
      </td>`;
        for(let i = 0; i < data.data.length; i++) {
            body.innerHTML+=`<tr></tr>`;
            let row = document.getElementById("content-products").lastElementChild;
            row.innerHTML += `<td>${data.data[i]['id']}</td>`;
            row.innerHTML += `<td>${data.data[i]['name']}</td>`;
            row.innerHTML += `<td>${data.data[i]['number']}</td>`;
            row.innerHTML += `<td>${data.data[i]['email']}</td>`;
            row.innerHTML += `<td>${data.data[i]['method']}</td>`;
            row.innerHTML += `<td>${data.data[i]['address']}</td>`;
            row.innerHTML += `<td>${data.data[i]['total_products']}</td>`;
            row.innerHTML += `<td>${data.data[i]['total_price']}</td>`;
            row.innerHTML += `<td>${data.data[i]['placed_on']}</td>`;
            row.innerHTML += `<td>${data.data[i]['payment_status']}</td>`;
            
            row.innerHTML += html_button_edit;
            // row.innerHTML += `<td>${}</td>`;
            // row.innerHTML += `<td>${}</td>`;
            
        }
    });
}
window.onload = getDataProduct;