"use strict";

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
};

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("nav-active");
};

addEventOnElements(navTogglers, "click", toggleNavbar);

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
});

const accordions = document.querySelectorAll("[data-accordion]");

let lastActiveAccordion = accordions[0];

const initAccordion = function (currentAccordion) {
  const accordionBtn = currentAccordion.querySelector("[data-accordion-btn]");

  const expandAccordion = function () {
    if (lastActiveAccordion && lastActiveAccordion !== currentAccordion) {
      lastActiveAccordion.classList.remove("expanded");
    }

    currentAccordion.classList.toggle("expanded");

    lastActiveAccordion = currentAccordion;
  };

  accordionBtn.addEventListener("click", expandAccordion);
};

for (let i = 0, len = accordions.length; i < len; i++) {
  initAccordion(accordions[i]);
}

const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;

  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);

  input.addEventListener("blur", blurFunc);
});

const formSubmit = document.getElementById("contact-form");

formSubmit.addEventListener("submit", function (event) {
  event.preventDefault();

  const formData = new FormData(event.target);

  const username = formData.get("username").trim();

  const email = formData.get("email").trim();

  const phone = formData.get("phone").trim();

  const message = formData.get("message").trim();

  if (!username || !email || !phone || !message) {
    alert("Please fill out all fields!");
  } else {
    console.log({
      username: username,
      email: email,
      phone: phone,
      message: message,
    });

    alert("Form has been sent successfully!");
  }
});
