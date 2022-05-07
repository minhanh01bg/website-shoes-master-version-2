function getDataUser() {
    $.getJSON("/php/api/post/R_user.php", {}, function (data) {
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
          if(data.data[i]['user_type'] === 'admin'){
            continue;
          }
            body.innerHTML+=`<tr></tr>`;
            let row = document.getElementById("content-products").lastElementChild;
            row.innerHTML += `<td>${i+1}</td>`;
            row.innerHTML += `<td>${data.data[i]['address']}</td>`;
            row.innerHTML += `<td>${data.data[i]['name']}</td>`;
            row.innerHTML += `<td>${data.data[i]['email']}</td>`;
            row.innerHTML += `<td>${data.data[i]['birth']}</td>`;
            // row.innerHTML += html_button_edit;
        }
    });
}
window.onload = getDataUser;