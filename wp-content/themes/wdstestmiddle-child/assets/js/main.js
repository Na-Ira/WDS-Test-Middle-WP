(function() {
  'use strict';

/*
========== Loader =========================
*/

// loader page
let wrapload = document.querySelector(".loading");

//fade out effect
const fadeOut = function (el) {
  el.classList.add("load-hide");
  el.classList.remove("load-show");
};

const loadder = function () {
  setTimeout(() => {
    fadeOut(wrapload);
  }, 1000);
};
// window load
window.addEventListener("load", () => {
  //load animation page
  loadder();
});

/*
========== NavBar =========================
*/
window.addEventListener("DOMContentLoaded", () => {
  // Navbar shrink function
  var navbarShrink = function () {
    const navbarCollapsible = document.body.querySelector(".navbar-top");
    if (!navbarCollapsible) {
      return;
    }
    if (window.scrollY === 0) {
      navbarCollapsible.classList.remove("navbar-shrink");
    } else {
      navbarCollapsible.classList.add("navbar-shrink");
    }
  };

  // Shrink the navbar
  navbarShrink();

  // Shrink the navbar when page is scrolled
  document.addEventListener("scroll", navbarShrink);

  // Activate Bootstrap scrollspy on the main nav element
  const mainNav = document.body.querySelector("#mainNav");
  if (mainNav) {
    new bootstrap.ScrollSpy(document.body, {
      target: "#mainNav",
      offset: 74,
    });
  }


  // Add bg-mob class to navbar
  const navButton = document.querySelector(".navbar-toggler");
  const header = document.querySelector(".navbar-top");

  navButton.addEventListener("click", () => {
    header.classList.toggle("bg-mob");
  });

  // Hide the collapsible responsive navigation bar 
  // when you click on a link (except dropdown menus)
  const hum = document.querySelector(".ham");
  document
    .querySelectorAll(".navbar-collapse .nav-link:not(.dropdown-toggle)")
    .forEach((itm) => {
      itm.addEventListener("click", () => {
        document.querySelector(".navbar-toggler").click();
        hum.classList.remove("active");
        itm.classList.remove("active");
      });
    });
});

/*
========== Top Menu ===========================
** Used for the open/closed submenu on depth > 2 
** Bootstrap Navwalker 
*/
document.addEventListener("DOMContentLoaded", function(){
        

  // Prevent closing from click inside dropdown
document.querySelectorAll('.dropdown-menu').forEach(function(element){
  element.addEventListener('click', function (e) {
    e.stopPropagation();
  });
});


// make it as accordion for smaller screens
if (window.innerWidth < 992) {

  // close all inner dropdowns when parent is closed
  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
    everydropdown.addEventListener('hidden.bs.dropdown', function () {
      // after dropdown is hidden, then find all submenus
        this.querySelectorAll('.submenu-dropdown').forEach(function(everysubmenu){
          // hide every submenu as well
          everysubmenu.style.display = 'none';
        });
    });
  });
  
  document.querySelectorAll('.dropdown-menu a').forEach(function(element){
    element.addEventListener('click', function (e) {

        let nextEl = this.nextElementSibling;
        if(nextEl && nextEl.classList.contains('submenu-dropdown')) {	
          // prevent opening link if link needs to open dropdown
          e.preventDefault();
          console.log(nextEl);
          if(nextEl.style.display == 'block'){
            nextEl.style.display = 'none';
          } else {
            nextEl.style.display = 'block';
          }

        }
    });
  });
}
// end if innerWidth

}); 
// DOMContentLoaded  end

/*
====== Testimonials slider  =======================
*/



AOS.init();

})();