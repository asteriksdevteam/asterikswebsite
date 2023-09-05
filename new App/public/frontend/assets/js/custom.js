   // on scroll 

   $(window).scroll(function() 
   {  
       var scroll = $(window).scrollTop();
   
       if (scroll >= 10) {
           $(".desktopmenu").addClass("scrolled");
       } else {
           $(".desktopmenu").removeClass("scrolled");
       }
   });

   $('.toggle').click(function()
      {
          $('.collapse-menu').toggle();
      });
  

   $(".clientlogos").owlCarousel({

    loop: true,
      autoplay: true,
      autoplayTimeout: 2000,
      margin:20,
      responsive: {
        0: {
          items: 3, 
        },
        600: {
          items: 2, 
        },
        1000: {
          items: 4,
        },
      },
    });

$(".awards-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    margin: 20,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });


// awards carousel

$(".partner-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    margin: 20,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });

  // testimonial

  $(".testimonialcarousel ").owlCarousel({
    loop: false,
    autoplay: false,
    autoplayTimeout: 5000,
    margin:20,
    nav:true,
    dots:false,
    responsive: {
        0: {
            items: 1, 
        },
        600: {
            items: 1, 
        },
        1000: {
            items: 1,
        },
    },
  });

    // countup js

    const duration = 3000;

    const counters = [
    { id: "counter1", startValue: 0, endValue: counter1 },
    { id: "counter2", startValue: 0, endValue: counter2},
    { id: "counter3", startValue: 0, endValue: counter3 },
    { id: "counter4", startValue: 0, endValue: counter4},
    ];

    function updateCounter(counterElement, currentValue) {
    counterElement.textContent = Math.round(currentValue);
    }

    function countUp(timestamp, start, end, counterElement) {
    const currentTime = Math.min(timestamp - start, duration);
    const progress = currentTime / duration;

    const currentValue = start + progress * (end - start);
    updateCounter(counterElement, currentValue);

    if (currentTime < duration) {
        requestAnimationFrame((newTimestamp) => countUp(newTimestamp, start, end, counterElement));
    }
    }

    function startCountUp() {
    const startTimestamp = performance.now();
    counters.forEach((counter) => {
        const counterElement = document.getElementById(counter.id);
        countUp(startTimestamp, counter.startValue, counter.endValue, counterElement);
    });
    }

    startCountUp();

      
 