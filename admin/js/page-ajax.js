$(document).ready(function (e) {
  $(".js-arrow").on("click", function (e) {
    (function worker() {
      $.ajax({
        url: "dashboard.php",
        success: function (data) {
          $(".wrapp_content").html(data);
        },
      });
    })();
  });

  $(".btn_subject").on("click", function (e) {
    (function worker() {
      $.ajax({
        url: "QLMonHoc.php",
        success: function (data) {
          $(".wrapp_content").html(data);
        },
      });
    })();
  });
  $(".btn_GV").on("click", function (e) {
    (function worker() {
      $.ajax({
        url: "user.php",
        success: function (data) {
          $(".wrapp_content").html(data);
        },
      });
    })();
  });
  $(".btn_SV").on("click", function (e) {
    (function worker() {
      $.ajax({
        url: "sinhvien.php",
        success: function (data) {
          $(".wrapp_content").html(data);
        },
      });
    })();
  });
});
