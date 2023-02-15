"use strict";

// _resources/js/app.js
window.addEventListener("load", function() {
  const cards = [...document.querySelectorAll(".card")];
  cards.forEach((card) => {
    card.style.cursor = "pointer";
    let down, up, link = card.querySelector("a");
    card.onmousedown = () => down = +/* @__PURE__ */ new Date();
    card.onmouseup = () => {
      up = +/* @__PURE__ */ new Date();
      if (up - down < 200) {
        link.click();
      }
    };
  });
  const nav = document.querySelector("nav");
  const list = nav.querySelector("ul");
  const burgerClone = document.querySelector("#burger-template").content.cloneNode(true);
  const svg = nav.querySelector("svg");
  const button = burgerClone.querySelector("button");
  button.addEventListener("click", (e) => {
    const isOpen = button.getAttribute("aria-expanded") === "false";
    button.setAttribute("aria-expanded", isOpen);
  });
  const disableMenu = () => {
    button.setAttribute("aria-expanded", false);
    button.focus();
  };
  nav.addEventListener("keyup", (e) => {
    if (e.code === "Escape") {
      disableMenu();
    }
  });
  document.addEventListener("click", (e) => {
    const isClickInsideElement = nav.contains(e.target);
    if (!isClickInsideElement) {
      disableMenu();
    }
  });
  nav.insertBefore(burgerClone, list);
});
