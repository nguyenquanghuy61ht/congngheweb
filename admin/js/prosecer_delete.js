var btn_delete = document.querySelectorAll(".btn-delete");
var btn_secondary = document.querySelectorAll(".bg-cache");
var backgroud_form = document.querySelector(".backgroud__screen");
var btn_ok = document.querySelectorAll(".btn_ok");
btn_delete.forEach((element, index) => {
  element.onclick = function () {
    backgroud_form.style.display = "block";
    btn_ok[index].classList.remove("hidebt");
    btn_secondary[index].classList.remove("hidebt");
  };
});

btn_secondary.forEach((ele, indx) => {
  ele.onclick = function () {
    backgroud_form.style.display = "none";
    btn_ok[indx].classList.add("hidebt");
    btn_secondary[indx].classList.add("hidebt");
  };
});


