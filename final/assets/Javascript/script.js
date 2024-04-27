

document.addEventListener("DOMContentLoaded", function () {
  var backToTopButton = document.querySelector(".backToTopBtn");

  
  backToTopButton.addEventListener("click", function (e) {
    e.preventDefault();

    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  window.addEventListener("scroll", function () {
    if (window.scrollY > 500) {
      backToTopButton.style.display = "block";
    } else {
      backToTopButton.style.display = "none";
    }
  });
});



document.addEventListener("DOMContentLoaded", function () {
  var darkModeButton = document.getElementById("dark-mode");
  var body = document.body;

  function updateButtonText() {
    if (body.classList.contains("dark-mode")) {
      darkModeButton.textContent = "Light Mode";
    } else {
      darkModeButton.textContent = "Dark Mode";
    }
  }

  updateButtonText();

  darkModeButton.addEventListener("click", function () {
    body.classList.toggle("dark-mode");

    updateButtonText();
  });
});


function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    { pageLanguage: "en" },
    "google_translate_element"
  );
}

document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.querySelector(".hamburger-menu");
  const overlay = document.querySelector(".overlay");

  hamburger.addEventListener("click", function (event) {
    event.stopPropagation();
    overlay.classList.toggle("show-panel");
  });

  document.addEventListener("click", function (event) {
    if (overlay.classList.contains("show-panel")) {
      overlay.classList.remove("show-panel");
    }
  });

  overlay.addEventListener("click", function (event) {
    event.stopPropagation();
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const learnMoreBtn = document.getElementById("learn-more-btn");

  const targetSection = document.querySelector(".info-block");

  learnMoreBtn.addEventListener("click", function (e) {
    e.preventDefault();

    targetSection.scrollIntoView({ behavior: "smooth", block: "start" });
  });
});

function switchAllImagesBasedOnMediaQuery() {
  const images = [
    {
      id: "abbey",
      largeSrc: "assets/Images/abbey4.jpg",
      smallSrc: "assets/Images/abbey3.jpg",
    },
    {
      id: "tower-london",
      largeSrc: "assets/Images/LondonTower.jpg",
      smallSrc: "assets/Images/LondonTower1.jpg",
    },
    {
      id: "london-eye",
      largeSrc: "assets/Images/LondonEye.jpg",
      smallSrc: "assets/Images/LondonEye1.jpg",
    },

    {
      id: "club",
      largeSrc: "assets/Images/Club.jpg",
      smallSrc: "assets/Images/Club1.jpg",
    },
    {
      id: "pub",
      largeSrc: "assets/Images/LondonPub.jpg",
      smallSrc: "assets/Images/Pub1.jpg",
    },
    {
      id: "res",
      largeSrc: "assets/Images/Restaurant.jpg",
      smallSrc: "assets/Images/Restaurant1.jpg",
    },

    {
      id: "london-cafe",
      largeSrc: "assets/Images/LondonCafe.jpg",
      smallSrc: "assets/Images/LondonCafe1.jpg",
    },
    {
      id: "london-restaurant",
      largeSrc: "assets/Images/LondonRestaurant.jpg",
      smallSrc: "assets/Images/LondonRestaurant1.jpg",
    },
    {
      id: "london-pastry",
      largeSrc: "assets/Images/LondonPastry.jpg",
      smallSrc: "assets/Images/LondonPastry1.jpg",
    },

    {
      id: "hyde",
      largeSrc: "assets/Images/HydeParkWater.jpg",
      smallSrc: "assets/Images/hyde1.jpg",
    },
    {
      id: "Richmond",
      largeSrc: "assets/Images/Richmond.jpg",
      smallSrc: "assets/Images/Richmond1.jpg",
    },
    {
      id: "Regents",
      largeSrc: "assets/Images/RegentsPark.jpg",
      smallSrc: "assets/Images/Regents1.jpg",
    },

    {
      id: "london-river",
      largeSrc: "assets/Images/LondonRiver.jpg",
      smallSrc: "assets/Images/LondonRiver1.jpg",
    },
    {
      id: "london-underground",
      largeSrc: "assets/Images/LondonUnderGround.jpg",
      smallSrc: "assets/Images/LondonUnderGround1.jpg",
    },
    {
      id: "london-bus",
      largeSrc: "assets/Images/TheLondonBus.jpg",
      smallSrc: "assets/Images/TheLondonBus1.jpg",
    },
  ];
  // new code 
  function checkAndSwitchImage() {
    images.forEach((image) => {
      const imgElement = document.getElementById(image.id);
      if (!imgElement) {
        console.warn(`Element with ID ${image.id} not found on the page.`);
        return; 
      }
      imgElement.src = window.innerWidth > 1400 ? image.largeSrc : image.smallSrc;
    });
  }
//
  window.addEventListener("load", checkAndSwitchImage);
  window.addEventListener("resize", checkAndSwitchImage);
}

switchAllImagesBasedOnMediaQuery();

//new code 


document.addEventListener('DOMContentLoaded', function() {
  const cards = document.querySelectorAll('.thecard');

  cards.forEach((card) => {
      card.style.transformStyle = 'preserve-3d'; 
      card.style.transition = 'transform 0.8s'; 
      card.dataset.flipped = 'false'; 

      card.addEventListener('click', function() {
       
          if (card.dataset.flipping === 'true') {
              return;
          }

          card.dataset.flipping = 'true'; 

        
          if (card.dataset.flipped === 'false') {
              card.style.transform = 'rotateY(180deg)';
              card.dataset.flipped = 'true';
          } else {
              card.style.transform = 'rotateY(0deg)';
              card.dataset.flipped = 'false';
          }

         
          setTimeout(() => {
              card.dataset.flipping = 'false'; 
          }, 100); 
      });
  });
});



function Form() {
  var name = document.getElementById('name').value;
  var comment = document.getElementById('comment').value;
  var isValid = true;

  if (name.trim() === '') {
      alert('Name is required.');
      isValid = false;
  }

  if (comment.trim() === '') {
      alert('Comment is required.');
      isValid = false;
  }

 

  return isValid;
}


$(document).ready(function() {

  function isInViewport(element) {
      var elementTop = $(element).offset().top;
      var elementBottom = elementTop + $(element).outerHeight();
      var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();
      return elementBottom > viewportTop && elementTop < viewportBottom;
  }

  
  function animateElements() {
      $('.animate-view').each(function() {
          if (isInViewport(this)) {
              $(this).css({
                  'opacity': 1,
                  'transform': 'translateY(0)',
                  'transition': 'all 0.5s ease-out'
              });
          }
      });
  }

  
  animateElements();

  
  $(window).on('scroll', animateElements);
});






//


