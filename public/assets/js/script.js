
$(function () {


	const scrollers = document.querySelectorAll(".scroller");
	addAnimation();
	// If a user hasn't opted in for recuded motion, then we add the animation
	// if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {

	// }

	function addAnimation() {
		// alert();
		scrollers.forEach((scroller) => {
			// add data-animated="true" to every `.scroller` on the page
			scroller.setAttribute("data-animated", true);

			// Make an array from the elements within `.scroller-inner`
			const scrollerInner = scroller.querySelector(".scroller__inner");
			const scrollerContent = Array.from(scrollerInner.children);

			// For each item in the array, clone it
			// add aria-hidden to it
			// add it into the `.scroller-inner`
			scrollerContent.forEach((item) => {
				const duplicatedItem = item.cloneNode(true);
				duplicatedItem.setAttribute("aria-hidden", true);
				scrollerInner.appendChild(duplicatedItem);
			});
		});
	}

	setTimeout(function () {
		$("#quick-message").slideDown(300, function () {
			$(this).slideUp();
		});
	}, 3000);



	$("body").on("click", "[data-toggle='animate-section']", function (e) {

		e.preventDefault();
		let section = $(this).attr("data-target");
		$("html,body").animate(
			{
				scrollTop: $(section).offset().top - 200,
			},
			1000
		);
	});


});



document.addEventListener("DOMContentLoaded", function (event) {
	animation_text_1("#text-anim");
});

function animation_text_1(element) {
	//  check if element exist
	if (document.querySelector(element) == null) return;

	var newText = "";
	var theText = document.querySelector(element);
	//   theText.style.opacity = 1;
	var words = theText.innerText.split(" ");

	for (var i = 0; i < words.length; i++) {
		newText += "<div>";
		if (i > 0) {
			newText += " "; // Add space between words
		}
		newText += words[i];
		newText += "</div>";
	}

	theText.innerHTML = newText;

	gsap.fromTo(
		element + " div",
		{ opacity: 0, y: 0, x: 0 },
		{
			duration: 2,
			opacity: 1,
			y: 0,

			delay: 1,

			// x:20,
			stagger: 0.1,
			ease: "power2.out",
		}
	);
}



function toggleMenu() {
	const overlay2 = document.querySelector(".overlay-2-menu");

	if (overlay2.style.display === "none") {
		overlay2.style.display = "flex";
		animateMenuItems();
		toggleBurgerIcon(true);
	} else {
		overlay2.style.display = "none";
		toggleBurgerIcon(false);
	}
}

function animateMenuItems() { }

function toggleBurgerIcon(isCloseIcon) {
	const burgerBars = document.querySelectorAll(".burger-bar");

	if (isCloseIcon) {
		burgerBars.forEach((bar) => {
			// bar.style.backgroundColor = '#fff'; // Set the color to white
		});

		burgerBars[0].style.transform = "rotate(-45deg) translate(-5px, 6px)";
		burgerBars[1].style.opacity = "0";
		burgerBars[2].style.transform = "rotate(45deg) translate(-5px, -6px)";
	} else {
		burgerBars.forEach((bar) => {
			bar.style.backgroundColor = "#ccc"; // Set the color back to original
		});

		burgerBars[0].style.transform = "none";
		burgerBars[1].style.opacity = "1";
		burgerBars[2].style.transform = "none";
	}
}
animateMenuItems();

$(function () {
	$("body").on("click", ".copy-button", function (e) {
		e.preventDefault();
		var $this = $(this);
		// Get the attribute value
		var attrValue = $(this).attr("data-content");

		$this.find("i").addClass("fi-rr-check").removeClass("fi-rr-copy");

		// Check if the Clipboard API is available
		if (navigator.clipboard) {
			// Use the Clipboard API to copy the value
			navigator.clipboard
				.writeText(attrValue)
				.then(function () {
					// alert('Attribute value copied to clipboard: ' + attrValue);
				})
				.catch(function (err) {
					console.error("Could not copy text: ", err);
				});
		} else {
			// Fallback for browsers that do not support the Clipboard API
			var $tempInput = $("<input>");
			$("body").append($tempInput);
			$tempInput.val(attrValue).select();
			try {
				document.execCommand("copy");
				// alert('Attribute value copied to clipboard: ' + attrValue);
			} catch (err) {
				console.error("Fallback: Oops, unable to copy", err);
			}
			$tempInput.remove();
		}

		setTimeout(function () {
			// alert('Attribute value copied to clipboard: ' + attrValue);
			$this.find("i").addClass("fi-rr-copy").removeClass("fi-rr-check");
		}, 2000);
	});
});
