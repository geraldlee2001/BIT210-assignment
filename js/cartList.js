/** @format */

// @ts-nocheck

const increaseQuantity = (button) => {
  var form = button.closest(".cart-item-form");
  var currentQuantitySpan = form.querySelector(".current-quantity");

  var currentQuantity = parseInt(currentQuantitySpan.innerText);
  var newQuantity = currentQuantity + 1;

  currentQuantitySpan.innerText = newQuantity;

  // Enable the submit button and trigger the form submission
  form.querySelector('input[type="submit"]').click();
};

const decreaseQuantity = (button) => {
  var form = button.closest(".cart-item-form");
  var currentQuantitySpan = form.querySelector(".current-quantity");

  var currentQuantity = parseInt(currentQuantitySpan.innerText);
  var newQuantity = currentQuantity - 1;

  currentQuantitySpan.innerText = newQuantity;

  // Enable the submit button and trigger the form submission
  form.querySelector('input[type="submit"]').click();
};
