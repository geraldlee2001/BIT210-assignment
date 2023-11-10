/** @format */

const openModalButtons = document.querySelectorAll("[data-modal-target]");
const closeModalButtons = document.querySelectorAll("[data-close-button]");
const overlay = document.getElementById("overlay");

openModalButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const modal = document.querySelector(button.dataset.modalTarget);
    openModal(modal);
  });
});

closeModalButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const modal = button.closest(".modal");
    closeModal(modal);
  });
});

function openModal(modal) {
  if (modal == null) return;
  modal.classList.add("active");
}

function closeModal(modal) {
  if (modal == null) return;
  modal.classList.remove("active");
}

const plus = document.getElementById("plus");
const minus = document.getElementById("minus");
const num = document.querySelector(".num");
let a = parseInt(num.value);

plus.addEventListener("click", () => {
  a++;
  num.value = a;
});

minus.addEventListener("click", () => {
  if (a > 1) {
    a--;
    num.value = a;
  }
});

num.addEventListener("change", () => {
  a = parseInt(num.value);
  if (isNaN(a) || a < 1) {
    a = 1;
  }
  num.value = a;
});
