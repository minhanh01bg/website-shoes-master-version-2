$("#edit-info").click(()=>{
  let id = $("#content-id").val();
  var form_data = new FormData();
  form_data.append('id', id);
  form_data.append('name', $("#content-name").val());
  form_data.append('email', $("#content-email").val());
  form_data.append('phone', $("#content-phone").val());
  form_data.append('address', $("#content-address").val());
  form_data.append('birth', $("#content-birth").val());
  $.ajax({
    url: "/php/api/post/UpdateU.php",
    type: "post",
    data: form_data,
    dataType: "json",
    contentType: false,
    processData: false,
    success: function (response) {
      console.log(response);
      var form = new FormData();
      form.append("files[]", document.getElementById("uploadfile").files[0]);
      form.append('id', id);
      $.ajax({
        url: "/php/api/post/update_imgU.php",
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