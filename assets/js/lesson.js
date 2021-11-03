var btn_tab = document.querySelectorAll(".accordion-body1");
btn_tab[0].onclick=function(){
     document.querySelector(".about-page").classList.remove("show");
    document.querySelector(".about-page").classList.add("hide");
      document.querySelector(".box-info").classList.remove("hide");
      document.querySelector(".table-subject").classList.remove("hide");
    document.querySelector(".box-info").classList.add("show");
     document.querySelector(".table-subject").classList.add("show");
      
    
}
btn_tab[1].onclick=function(){
     document.querySelector(".box-info").classList.remove("show");
     document.querySelector(".table-subject").classList.remove("show");
     document.querySelector(".box-info").classList.add("hide");
     document.querySelector(".table-subject").classList.add("hide");
         document.querySelector(".about-page").classList.remove("hide");
     document.querySelector(".about-page").classList.add("show");

}