"use strict";

// preLoader
window.addEventListener("load", () => {
  const preLoader = document.querySelector(".preLoader");
  preLoader.className += " gone";

  const body = document.querySelector("body");
  body.classList.add("body-loaded");
});

// mask, closeIcon
const sideBarMask = document.querySelector(".sidebar + .mask");
const formMask = document.querySelector(".consultation + .mask");
const sideBarCloseIcon = document.querySelector(".sidebar .closeIcon");
const formCloseIcon = document.querySelector(".consultation .closeIcon");

// hamburger
const aside = document.querySelector("aside");
const hamburger = document.getElementById("hamburger");

// consultation btn
const consultation = document.querySelector(".consultation");
const topBarToggleConsultation = document.querySelector(
  "#topBarToggleConsultation"
);
const sideBarToggleConsultation = document.querySelector(
  "#sideBarToggleConsultation"
);

const sidebarToggle = (clickedElement, toggledElement, classToBeAdded) => {
  clickedElement.addEventListener("click", () => {
    toggledElement.classList.toggle(classToBeAdded);
  });
};

sidebarToggle(hamburger, aside, "sidebar-triggered");
sidebarToggle(sideBarToggleConsultation, aside, "sidebar-triggered");
sidebarToggle(topBarToggleConsultation, consultation, "pulled");
sidebarToggle(sideBarToggleConsultation, consultation, "pulled");

sidebarToggle(sideBarMask, aside, "sidebar-triggered");
sidebarToggle(formMask, consultation, "pulled");

sidebarToggle(sideBarCloseIcon, aside, "sidebar-triggered");
sidebarToggle(formCloseIcon, consultation, "pulled");

// Google re-Captcha
grecaptcha.ready(function () {
  grecaptcha
    .execute("6Lfr1IAgAAAAAHUVL_6PUm4minu5v8SHMCpUhWXS", {
      action: "submit",
    })
    .then(function (token) {
      var response = document.getElementById("g-token");
      response.value = token;
    });
});
