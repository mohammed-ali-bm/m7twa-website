// import { Tooltip } from 'flowbite';

// const tooltip = new Tooltip($targetEl, $triggerEl, options, instanceOptions);






const phrase = 
"نـــص الأمـــر الملكي علـــى أن تتحمـــل الدولـــة ضريبة التصرفات العقارية عما لا يزيد عن مبلغ (1،000،000)  مليون ريال من سعر شراء المسكن الأول للمواطن.";
document.addEventListener("DOMContentLoaded", () => {
    const container = document.getElementById("word-container");
    const body = document.getElementById("word-body");
    const refs = [];

    const splitWords = (phrase) => {
        const words = phrase.split(" ");
        words.forEach((word, i) => {
            const span = document.createElement("span");
            span.textContent = word + " ";
            refs.push(span);
            body.appendChild(span);
        });
    };

    const createAnimation = () => {
        gsap.registerPlugin(ScrollTrigger);
        gsap.to(refs, {
            scrollTrigger: {
                trigger: container,
                scrub: true,
                start: "top 80%",
                end: `+=${window.innerHeight / 2}`,
            },
            opacity: 1,
            ease: "none",
            stagger: 0.05
        });
    };

    splitWords(phrase);
    createAnimation();
});





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



$(function(){

  window.addEventListener('scroll', function() {
    var header = document.querySelector('.site-header');

    if (window.scrollY > 0) {
        header.classList.add('fixed');
    } else {
        header.classList.remove('fixed');
    }
});



  $("body").on("click", "[data-toggle='animate-section']", function(e) {
    
    e.preventDefault();
    let section = $(this).attr("data-target");
    $("html,body").animate({
        scrollTop: $(section).offset().top - 200
    }, 1000);

});


});



window.addEventListener('scroll', function () {
  var header = document.querySelector('.site-header');

  if (window.scrollY > 0) {
    header.classList.add('fixed');
  } else {
    header.classList.remove('fixed');
  }
});


document.addEventListener("DOMContentLoaded", function (event) {

  animation_text_1("#text-anim");
});

function animation_text_1(element) {


  //  check if element exist
  if (document.querySelector(element) == null)
    return;

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

  gsap.fromTo(element + " div", { opacity: 0, y: 0, x: 0 }, {
    duration: 2,
    opacity: 1,
    y: 0,



    delay: 1,


    // x:20,
    stagger: .1,
    ease: "power2.out"
  });
}

function initScroll() {

  const scrollUpElements = gsap.utils.toArray(".scroll-up-element");

  scrollUpElements.forEach((element) => {
    const anim = gsap.from(element, {
      y: 100,
      opacity: 1,
      duration: 0.8,
      ease: "ease-in",
      scrollTrigger: {
        trigger: element,
        start: "top bottom",
        toggleActions: "play none none reverse",
        markers: false,
        scrub: true, // Enable scrub for continuous movement
      },
    });

    // Set a higher z-index for the reveal-image elements
    gsap.set(element, {
      zIndex: 1
    });
  });

  const scrollLeftElements = gsap.utils.toArray(".scroll-left-element");

  scrollLeftElements.forEach((element) => {
    const anim = gsap.fromTo(element, {
      x: -100,
      // opacity: 0,

    }, {
      x: element.getAttribute("data-to") || 0,

      duration: 0.8,
      ease: "ease-in",
      scrollTrigger: {
        trigger: element,
        start: "top bottom",
        toggleActions: "play none none reverse",
        markers: false,
        scrub: true, // Enable scrub for continuous movement
      },
    });

    // Set a higher z-index for the reveal-image elements
    gsap.set(element, {
      zIndex: 1
    });
  });


  const footerElements = gsap.utils.toArray(".footer-sec");

  const anim = gsap.fromTo(".footer-sec", {
    x: 50,
    opacity: 0,
    // scale: .95,
  }, {
    x: 0,
    opacity: 1,
    scale: 1,
    stagger: 0.1,
    duration: 0.7,
    ease: "power1.in", // Fix the typo here

    scrollTrigger: {
      trigger: ".footer-sec",
      start: "top bottom",
      toggleActions: "play none none reverse",
      markers: false,
      scrub: false, // Enable scrub for continuous movement
    },

  });


  gsap.fromTo(".scroll-opacity", {

    opacity: 0,
    scale: .95,
  }, {

    opacity: 1,
    scale: 1,
    stagger: 0.2,
    duration: 0.3,
    ease: "power1.in", // Fix the typo here

    scrollTrigger: {
      trigger: ".scroll-opacity",
      start: "top bottom",
      toggleActions: "play none none reverse",
      markers: false,
      scrub: false, // Enable scrub for continuous movement
    },

  });



  gsap.fromTo(".news-item", {

    opacity: 0,
    scale: .95,
  }, {

    opacity: 1,
    scale: 1,
    stagger: 0.4,
    duration: 0.5,
    ease: "power1.in", // Fix the typo here

    scrollTrigger: {
      trigger: ".news-item",
      start: "top bottom",
      toggleActions: "play none none reverse",
      markers: false,
      scrub: false, // Enable scrub for continuous movement
    },

  });



  const counterUpElements = gsap.utils.toArray(".counter-up");

  counterUpElements.forEach((element) => {
    const targetCount = parseInt(element.getAttribute("data-count")) || 0;

    const counterObject = {
      count: 0,
      set count(value) {
        element.textContent = Math.ceil(value);
      },
    };

    gsap.to(counterObject, {
      count: targetCount,
      duration: 1, // Adjust the duration as needed
      ease: "power1.out", // Adjust the ease as needed
      scrollTrigger: {
        trigger: element,
        start: "top 80%", // Adjust the start position based on your preference
        toggleActions: "play none none reverse",
      },
    });
  });



  const scrollDownElements = gsap.utils.toArray(".scroll-down-element");

  scrollDownElements.forEach((element) => {
    const anim = gsap.from(element, {
      y: -1 * (parseInt(element.getAttribute("data-from")) || 100),
      opacity: parseInt(element.getAttribute("data-opacity")) || 1,
      scale: parseFloat(element.getAttribute("data-scale")) || 1,
      duration: parseFloat(element.getAttribute("data-duration")) || .8,
      ease: "ease-in",
      scrollTrigger: {
        trigger: element,
        start: "top bottom",
        toggleActions: "play none none reverse",
        markers: false,
        scrub: true, // Enable scrub for continuous movement
      },
    });

    // Set a higher z-index for the reveal-image elements
    gsap.set(element, {
      zIndex: 1
    });

  });



  const cards = gsap.utils.toArray(".guarantee-item");


  if( window.innerWidth < 580){
cards.forEach((card, index) => {
  const tween = gsap.to(card, {
    scrollTrigger: {
      trigger: card,
      start: () => `top bottom-=100`,
      end: () => `top top+=40`,
      scrub: true,
      markers: false,
      invalidateOnRefresh: true
    },
    ease: "none",
    scale: () => 1 - (cards.length - index) * 0.025
  });

  ScrollTrigger.create({
    trigger: card,
    start: "top top",
    pin: true,
    pinSpacing: false,
    markers: false,
    id: 'pin',
    end: 'max',
    invalidateOnRefresh: true,
  });
});
  }

  const scrollFadeElements = gsap.utils.toArray(".scroll-fade-only");

  scrollFadeElements.forEach((element) => {


    // Set a higher z-index for the reveal-image elements
    gsap.fromTo(element, { opacity: 0 }, {
      zIndex: 1,
      opacity: 1,
      duration: 0.4,
      scrollTrigger: {
        trigger: element,
        start: "top bottom",
        toggleActions: "play none none reverse",
        markers: false,
        scrub: true, // Enable scrub for continuous movement
      },
    });
  });

  const staP = gsap.utils.toArray(".sta-item-p");

  staP.forEach((element) => {


    // Set a higher z-index for the reveal-image elements
    gsap.fromTo(element, { opacity: 0 }, {
      zIndex: 1,
      opacity: 1,
      duration: 0.4,
      scrollTrigger: {
        trigger: element,
        start: "top bottom",
        toggleActions: "play none none reverse",
        markers: false,
        scrub: true, // Enable scrub for continuous movement
      },
    });
  });

  const staContent = gsap.utils.toArray(".sta-item-content");

  staContent.forEach((element) => {


    // Set a higher z-index for the reveal-image elements
    gsap.fromTo(element, { opacity: 0, x: -50 }, {
      opacity: 1,
      x: 0,
      delay: 0.2,

      duration: 0.4,
      scrollTrigger: {
        trigger: element,
        start: "top bottom",
        toggleActions: "play none none reverse",
        markers: false,
        scrub: true, // Enable scrub for continuous movement
      },
    });
  });




  gsap.fromTo(".scroll-fade-element", {

    y: -20,
    opacity: 0,
  }, {
    y: 0,
    opacity: 1,
    delay: 2.5,
    duration: 0.4,
    stagger: 0.2,
    // ease: "power1.in",

  });

  gsap.from(".scroll-fade-only", {

    opacity: 0,
  }, {
    y: 0,
    opacity: 1,
    //   delay: 1.7,
    duration: 0.4,
    stagger: 0.1,
    // ease: "power1.in",

  });



  const scrollDownToElements = gsap.utils.toArray(".scroll-down-to-element");

  scrollDownToElements.forEach((element) => {
    let anim = gsap.to(element, {
      y: (parseInt(element.getAttribute("data-to")) || 100),
      opacity: parseInt(element.getAttribute("data-opacity")) || 1,
      scale: parseFloat(element.getAttribute("data-scale")) || 1,
      duration: parseFloat(element.getAttribute("data-duration")) || .8,
      ease: "ease-in",
      scrollTrigger: {
        trigger: element,
        start: "top bottom",
        toggleActions: "play none none reverse",
        markers: false,
        scrub: true, // Enable scrub for continuous movement
      },
    });

  });





}




window.addEventListener("load", initScroll);



function toggleMenu() {

  const overlay2 = document.querySelector('.overlay-2-menu');

  if (overlay2.style.display === 'none') {

    overlay2.style.display = 'flex';
    animateMenuItems();
    toggleBurgerIcon(true);
  } else {

    overlay2.style.display = 'none';
    toggleBurgerIcon(false);
  }
}


function animateMenuItems() {
 
}


function toggleBurgerIcon(isCloseIcon) {
  const burgerBars = document.querySelectorAll('.burger-bar');

  if (isCloseIcon) {
    burgerBars.forEach(bar => {
      // bar.style.backgroundColor = '#fff'; // Set the color to white
    });

    burgerBars[0].style.transform = 'rotate(-45deg) translate(-5px, 6px)';
    burgerBars[1].style.opacity = '0';
    burgerBars[2].style.transform = 'rotate(45deg) translate(-5px, -6px)';
  } else {
    burgerBars.forEach(bar => {
      bar.style.backgroundColor = '#ccc'; // Set the color back to original
    });

    burgerBars[0].style.transform = 'none';
    burgerBars[1].style.opacity = '1';
    burgerBars[2].style.transform = 'none';
  }
}
animateMenuItems();


$(function () {
  $('body').on("click", ".copy-button", function (e) {
    e.preventDefault();
    var $this = $(this); 
    // Get the attribute value
    var attrValue = $(this).attr('data-content');

    $this.find('i').addClass("fi-rr-check").removeClass("fi-rr-copy")

    // Check if the Clipboard API is available
    if (navigator.clipboard) {
      // Use the Clipboard API to copy the value
      navigator.clipboard.writeText(attrValue).then(function () {
        // alert('Attribute value copied to clipboard: ' + attrValue);
      }).catch(function (err) {
        console.error('Could not copy text: ', err);
      });
    } else {
      // Fallback for browsers that do not support the Clipboard API
      var $tempInput = $('<input>');
      $('body').append($tempInput);
      $tempInput.val(attrValue).select();
      try {
        document.execCommand('copy');
        // alert('Attribute value copied to clipboard: ' + attrValue);
      } catch (err) {
        console.error('Fallback: Oops, unable to copy', err);
      }
      $tempInput.remove();
    }

    setTimeout(function () {
      // alert('Attribute value copied to clipboard: ' + attrValue);
      $this.find('i').addClass("fi-rr-copy").removeClass("fi-rr-check")

    }, 2000);
  });


});