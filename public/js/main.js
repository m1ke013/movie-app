// MAIN JS FOR XMOVIES

document.getElementById("user").addEventListener("click", function() {
    document.getElementById("md-login").style.display = "block";
    document.getElementById("md-login").style.opacity = "1";
});

document.getElementsByClassName("close-Btn")[0].addEventListener("click", function() {
    document.getElementById("md-login").style.display = "none";
});

document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    // Perform login logic here
    // You can retrieve the entered username and password using:
    // var username = document.getElementById("username").value;
    // var password = document.getElementById("password").value;
    // Example: check if the username is "admin" and the password is "password"
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username === "admin" && password === "password") {
        alert("Login successful!");
        document.getElementById("md-login").style.display = "none";
    } else {
        alert("Invalid username or password. Please try again.");
    }
});

// IMAGE SWIPER
    window.onload = function() {
      var swiper = new Swiper('.swiper-container', {
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          768: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          1024: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
        },
        pagination: {
          el: '.swiper-pagination'
        },
        slidesPerView: 1,
        spaceBetween: 0
      });

      var swiperSlides = Array.from(swiper.slides);

      swiperSlides.forEach(function(slide) {
        openFullscreenSliderHandler(slide);
        closeFullscreenSliderHandler(slide);
      });

      function openFullscreenSliderHandler(slide) {
        var slideImage = slide.querySelector('img');

        slideImage.addEventListener('click', function() {
          var slideNumber = slide.dataset.swiperSlideIndex;
          openFullscreenSwiper(slideNumber);
        });
      }

      function openFullscreenSwiper(slideNumber) {
        swiper.el.classList.add('fullscreen');
        swiper.params.slidesPerView = 1;
        swiper.update();
        swiper.slideToLoop(parseInt(slideNumber, 10), 0);
      }

      function closeFullscreenSliderHandler(slide) {
        var slideNumber = slide.dataset.swiperSlideIndex;
        var backdrop = document.createElement('div');
        var closeButton = document.createElement('div');

        slide.appendChild(backdrop);
        slide.appendChild(closeButton);
        backdrop.classList.add('backdrop');
        closeButton.classList.add('close-button');
        closeButton.innerHTML = 'x';

        backdrop.addEventListener('click', function() {
          closeFullscreenSwiper(slideNumber);
        });

        closeButton.addEventListener('click', function() {
          closeFullscreenSwiper(slideNumber);
        });
      }

      function closeFullscreenSwiper(slideNumber) {
        swiper.el.classList.remove('fullscreen');
        swiper.params.slidesPerView = 1;
        swiper.update();
        swiper.slideToLoop(parseInt(slideNumber, 10), 0);
      }
    }

    // const swiper = new Swiper('.swiper', {
    //   autoplay: {
    //     delay: 5000,
    //   },
    //  });