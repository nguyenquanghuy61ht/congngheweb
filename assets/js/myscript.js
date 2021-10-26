$(document).ready(function (e) {
     $(".subject").on("click", function (e) {
        (function worker() {
          $.ajax({
            url: "Monhoc.php",
            success: function (data) {
              $("#tab-dieuhuong").html(data);
            },
          });
        })();
      });
   
      $(".info-person").on("click", function (e) {
        (function worker() {
          $.ajax({
            url: "person_Info.php",
            success: function (data) {
              $("#tab-dieuhuong").html(data);
            },
          });
        })();
      });
      $(".document").on("click", function (e) {
        (function worker() {
          $.ajax({
            url: "document.php",
            success: function (data) {
              $("#tab-dieuhuong").html(data);
            },
          });
        })();
      });
 
})
  
