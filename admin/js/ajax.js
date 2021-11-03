$(document).ready(function (e) {
  $("#form_update").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: "http://localhost:7855/BTL/admin/processer_admin/ajax_upload_monhoc.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        //$("#preview").fadeOut();
        $("#err").fadeOut();
      },
      success: function (data) {
        // var el = document.getElementById("preview");
        //el.src=data;
        $("#preview").attr("src", data);
        $("#empty_res").val("");
        alert("Cập nhật thành công");
      },
      error: function (e) {
        $("#err").html(e).fadeIn();
      },
    });
  });
})