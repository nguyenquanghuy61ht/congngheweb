var list_btn = document.querySelectorAll(".list-group-item ");
var btn_smart = document.querySelectorAll(".btn_smart ");
list_btn.forEach(function(elm,idx){
    elm.onclick=function(){
      document.querySelector(".list-responsive .active").classList.remove("active");
        list_btn[idx].classList.add("active")
    }

})
btn_smart.forEach(function (elm, idx) {
  elm.onclick = function () {
    document.querySelector(".btn-group-responsive .active").classList.remove("active");
    btn_smart[idx].classList.add("active");
  };
});