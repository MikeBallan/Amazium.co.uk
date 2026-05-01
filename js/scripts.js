const hamburger = document.getElementById("hamburger");
const navigation = document.getElementById("navigation");

if (hamburger && navigation) {
	hamburger.addEventListener("click", () => {
		const isActive = hamburger.classList.toggle("active");
		navigation.classList.toggle("show", isActive);
		document.body.classList.toggle("no-scroll", isActive);
	});
} else {
	console.warn("Hamburger or navigation not found", hamburger, navigation);
}

// Close on ESC key
document.addEventListener("keydown", (e) => {
	if (e.key === "Escape") {
		hamburger?.classList.remove("active");
		navigation?.classList.remove("show");
		document.body.classList.remove("no-scroll");
	}
});

// Nav scroll styling
function handleScroll() {
	if (!navigation) return;
	navigation.classList.toggle("navigation--active", window.scrollY > 200);
}

window.addEventListener("scroll", handleScroll);

// Run once on page load
handleScroll();