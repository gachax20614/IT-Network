'use strict';

  const nav = document.querySelector(".nav");
  document.addEventListener("click",(e) => {
    if(e.target.closest(".nav_toggle")) {
      nav.classList.contains("show") ? nav.classList.remove("show") : nav.classList.add("show");
    } else {
      nav.classList.remove("show");
    }
  });
  const nav_toggle = document.querySelector(".nav_toggle");
  document.addEventListener("click",(e) => {
    if(e.target.closest(".nav_toggle")) {
      nav_toggle.classList.contains("show") ? nav_toggle.classList.remove("show") : nav_toggle.classList.add("show");
    } else {
      nav_toggle.classList.remove("show");
    }
  });