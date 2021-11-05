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

  //xu ly edit tailieu
   $("#form_update_tailieu").on("submit", function (e) {
     e.preventDefault();
     $.ajax({
       url: "http://localhost:7855/BTL/admin/processer_admin/ajax_upload_tailieu.php",
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
         $("#preview1").attr("src", data);
         $("#empty_res").val("");
         $("#empty_res_pdf").val("");
         alert("Cập nhật tài liều thành công");
       },
       error: function (e) {
         $("#err").html(e).fadeIn();
       },
     });
   });
   //xu ly edit baigiang
     $("#form_update_lesson").on("submit", function (e) {
       e.preventDefault();
       $.ajax({
         url: "http://localhost:7855/BTL/admin/processer_admin/ajax_upload_lesson.php",
         type: "POST",
         data: new FormData(this),
         contentType: false,
         cache: false,
         processData: false,
         
         success: function (data) {
           $("#empty_res_slide").val("");
           $("#empty_res_bt").val("");
           $(".suc").html(data);
           alert("Cập nhật bài giảng thành công");
         },
       });
     });

})