document.addEventListener("DOMContentLoaded", () => {
	const navbar = document.querySelector(".navbar"); // Or your specific selector
	const scrollThreshold = 100; // Trigger on any scroll

	window.addEventListener("scroll", () => {
		if (window.scrollY > scrollThreshold) {
			navbar.classList.add("scrolled");
		} else {
			navbar.classList.remove("scrolled");
		}
	});
});
