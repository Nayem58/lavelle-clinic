"use strict";

// preLoader
window.addEventListener("load", () => {
  const preLoader = document.querySelector(".preLoader");
  preLoader.className += " gone";

  const body = document.querySelector("body");
  body.classList.add("body-loaded");
});

// hamburger
const aside = document.querySelector("aside");
const asideMask = document.querySelector(".mask");
const closeIcon = document.querySelector(".closeIcon");
const hamburger = document.getElementById("hamburger");

const sidebarToggle = (element) => {
  element.addEventListener("click", () => {
    aside.classList.toggle("triggered");
  });
};

sidebarToggle(hamburger);
sidebarToggle(asideMask);
sidebarToggle(closeIcon);
