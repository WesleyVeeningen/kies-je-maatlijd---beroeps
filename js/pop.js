const openFormBtn = document.getElementById("open-form-btn");
const popupForm = document.getElementById("popup-form");
const closeBtn = document.getElementsByClassName("close")[0];

openFormBtn.addEventListener("click", () => {
  popupForm.style.display = "block";
});

closeBtn.addEventListener("click", () => {
  popupForm.style.display = "none";
});

window.addEventListener("click", (event) => {
  if (event.target == popupForm) {
    popupForm.style.display = "none";
  }
});
