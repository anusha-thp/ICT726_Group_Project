const allSideMenu = document.querySelectorAll("#sidebar .side-menu.top li a");

allSideMenu.forEach((item) => {
  const li = item.parentElement;

  item.addEventListener("click", function () {
    allSideMenu.forEach((i) => {
      i.parentElement.classList.remove("active");
    });
    li.classList.add("active");
  });
});

// TOGGLE SIDEBAR
const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
  sidebar.classList.toggle("hide");
});

const searchButton = document.querySelector(
  "#content nav form .form-input button"
);
const searchButtonIcon = document.querySelector(
  "#content nav form .form-input button .bx"
);
const searchForm = document.querySelector("#content nav form");

searchButton.addEventListener("click", function (e) {
  if (window.innerWidth < 576) {
    e.preventDefault();
    searchForm.classList.toggle("show");
    if (searchForm.classList.contains("show")) {
      searchButtonIcon.classList.replace("bx-search", "bx-x");
    } else {
      searchButtonIcon.classList.replace("bx-x", "bx-search");
    }
  }
});

if (window.innerWidth < 768) {
  sidebar.classList.add("hide");
} else if (window.innerWidth > 576) {
  searchButtonIcon.classList.replace("bx-x", "bx-search");
  searchForm.classList.remove("show");
}

window.addEventListener("resize", function () {
  if (this.innerWidth > 576) {
    searchButtonIcon.classList.replace("bx-x", "bx-search");
    searchForm.classList.remove("show");
  }
});

const switchMode = document.getElementById("switch-mode");

switchMode.addEventListener("change", function () {
  if (this.checked) {
    document.body.classList.add("dark");
  } else {
    document.body.classList.remove("dark");
  }
});

const stepMenuOne = document.querySelector(".formRecipe-step-menu1");
const stepMenuTwo = document.querySelector(".formRecipe-step-menu2");
const stepMenuThree = document.querySelector(".formRecipe-step-menu3");

const stepOne = document.querySelector(".formRecipe-form-step-1");
const stepTwo = document.querySelector(".formRecipe-form-step-2");
const stepThree = document.querySelector(".formRecipe-form-step-3");

const formSubmitBtn = document.querySelector(".formRecipe-btn");
const formBackBtn = document.querySelector(".formRecipe-back-btn");

formSubmitBtn.addEventListener("click", function (event) {
  event.preventDefault();
  if (stepMenuOne.className == "formRecipe-step-menu1 active") {
    event.preventDefault();

    stepMenuOne.classList.remove("active");
    stepMenuTwo.classList.add("active");

    stepOne.classList.remove("active");
    stepTwo.classList.add("active");

    formBackBtn.classList.add("active");
    formBackBtn.addEventListener("click", function (event) {
      event.preventDefault();

      stepMenuOne.classList.add("active");
      stepMenuTwo.classList.remove("active");

      stepOne.classList.add("active");
      stepTwo.classList.remove("active");

      formBackBtn.classList.remove("active");
    });
  } else if (stepMenuTwo.className == "formRecipe-step-menu2 active") {
    event.preventDefault();

    stepMenuTwo.classList.remove("active");
    stepMenuThree.classList.add("active");

    stepTwo.classList.remove("active");
    stepThree.classList.add("active");

    formBackBtn.classList.remove("active");
    formSubmitBtn.textContent = "Submit";
  } else if (stepMenuThree.className == "formRecipe-step-menu3 active") {
    document.querySelector("form").submit();
  }
});
