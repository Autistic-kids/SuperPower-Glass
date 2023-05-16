const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
var l=document.getElementById("back-btn");
var r=document.getElementById("baack-btn");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
  setTimeout(() => {l.style.left="15px"}, 1000);
  r.style.right="-200px"
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
  l.style.left="-200px"
  setTimeout(() => {r.style.right="15px"}, 1000);
});
