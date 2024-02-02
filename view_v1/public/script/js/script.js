///////////////////////////////////////
// Reveal sections
const allSections = document.querySelectorAll(".section--transition");

const revealSection = function (entries, observer) {
  const [entry] = entries;

  if (!entry.isIntersecting) return;

  entry.target.classList.remove("section--hidden");
  observer.unobserve(entry.target);
};

const sectionObserver = new IntersectionObserver(revealSection, {
  root: null,
  threshold: 0.15,
});

allSections.forEach(function (section) {
  sectionObserver.observe(section);
  section.classList.add("section--hidden");
});

///////////////////////////////////////
// Clicked button edit
const btnRoleParent = document.querySelector(".dropdown--role ");
const btnEdit = document.querySelector(".btn--edit");

btnEdit?.addEventListener("click", function () {
  btnRoleParent?.classList.toggle("hidden");
});

// clicked anywhere besides btn--edit
document.addEventListener("click", function (e) {
  if (!btnEdit?.contains(e.target)) {
    btnRoleParent?.classList.add("hidden");
  }
});

// ///////////////////////////////////////
// // password confirmation
const emailInput = document.getElementById("email");
const registerPasswordInput = document.getElementById("register-password");
const confirmPasswordInput = document.getElementById("password_confirmation");
const registerButtton = document.getElementById("register-button");
const formRegister = document.getElementById("form-register");

const inputValidation = function (e) {
  if (
    !emailInput?.value &&
    !registerPasswordInput?.value &&
    !confirmPasswordInput?.value
  ) {
    console.log("empty");
    alert("Input must not be empty!!!");
  } else if (registerPasswordInput?.value !== confirmPasswordInput?.value) {
    console.log("not same & filled");
    alert("Passwords do not match!");
    e.preventDefault();
  } else {
    e.target.submit();
  }
};

formRegister?.addEventListener("submit", inputValidation);
