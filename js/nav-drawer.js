"use strict";
(() => {
  // _resources/js/nav-drawer.js
  window.addEventListener("load", () => {
    const nav = document.querySelector("nav");
    const burgerTemplate = document.querySelector("#burger-template");
    if (!nav || !burgerTemplate) {
      return;
    }
    const list = nav.querySelector("ul");
    if (!list) {
      return;
    }
    const burgerClone = burgerTemplate.content.cloneNode(true);
    const button = burgerClone.querySelector("button");
    if (!button) {
      return;
    }
    button.addEventListener("click", () => {
      const isOpen = button.getAttribute("aria-expanded") === "false";
      button.setAttribute("aria-expanded", String(isOpen));
    });
    const disableMenu = () => {
      button.setAttribute("aria-expanded", "false");
      button.focus();
    };
    nav.addEventListener("keyup", (e) => {
      if (e.code === "Escape") {
        disableMenu();
      }
    });
    document.addEventListener("click", (e) => {
      if (!nav.contains(e.target)) {
        disableMenu();
      }
    });
    nav.insertBefore(burgerClone, list);
  });
})();
