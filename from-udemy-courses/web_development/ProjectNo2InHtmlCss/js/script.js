"use strict";

document.addEventListener("DOMContentLoaded",()=>{
    const menuIcon = document.querySelector(".menu_icon"),
          menuMobile = document.querySelector(".menu_mobile"),
          block = document.querySelector(".block");
    
    document.addEventListener("click", (e)=>{
        const target = e.target;
        if(target && target.classList.contains("menu_icon") && (!target.classList.contains("menu_icon_active"))){
            menuIcon.classList.add("menu_icon_active");
            menuMobile.classList.add("active");
            setTimeout(()=>menuMobile.classList.add("active_menu"),1);
            block.classList.add("background_active");
        }else{
            menuIcon.classList.remove("menu_icon_active");
            menuMobile.classList.remove("active_menu");
            setTimeout(()=>menuMobile.classList.remove("active"),700);
            block.classList.remove("background_active");
        }
    });
         
    
    


});


