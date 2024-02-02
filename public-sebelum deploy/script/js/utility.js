///////////////////////////////////////
////////// Landing Page
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
  rootMargin: "-200px 0px",
});

allSections.forEach(function (section) {
  sectionObserver.observe(section);
  section.classList.add("section--hidden");
});

// ///////////////////////////////////////
//////// Login Register
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

///////////////////////////////////////
//////// Application
// logout button
const containerUserProfile = document.getElementById("user-profile");
const btnLogout = document.getElementById("logout-button");

containerUserProfile?.addEventListener("click", function () {
  btnLogout?.classList.toggle("hidden");
});

// overview CVE
const containerOverviewCVE = document.getElementById("CVE--overview");
const containerOverviewReport = document.getElementById("finding--overview");
const btnCloseOverview = document.getElementById("btn--closeOverview");

btnCloseOverview?.addEventListener("click", function () {
  containerOverviewCVE?.classList.remove("translate-x-0");
  containerOverviewCVE?.classList.add("translate-x-[100%]");
  containerOverviewReport?.classList.remove("translate-x-0");
  containerOverviewReport?.classList.add("translate-x-[100%]");
});

/////////// clicked anywhere
document.addEventListener("click", function (e) {
  if (!containerUserProfile?.contains(e.target)) {
    btnLogout?.classList.add("hidden");
  }
});
