// Main Hamburger & Nav

const hamburger = document.getElementById("hamburger");
const navigation = document.getElementById("navigation");

hamburger.addEventListener("click", () => {
	hamburger.classList.toggle("active");
	navigation.classList.toggle("show");
});