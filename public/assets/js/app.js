"use strict"; // fix lenis in safari

if (Webflow.env("editor") === undefined) {
  const lenis = new Lenis({
    lerp: 0.1,
    wheelMultiplier: 0.7,
    infinite: false,
    gestureOrientation: "vertical",
    normalizeWheel: false,
    smoothTouch: false,
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);

  $("[data-lenis-start]").on("click", function () {
    lenis.start();
  });
  $("[data-lenis-stop]").on("click", function () {
    lenis.stop();
  });
  $("[data-lenis-toggle]").on("click", function () {
    $(this).toggleClass("stop-scroll");
    if ($(this).hasClass("stop-scroll")) {
      lenis.stop();
    } else {
      lenis.start();
    }
  });

  function connectToScrollTrigger() {
    lenis.on("scroll", ScrollTrigger.update);
    gsap.ticker.add((time) => {
      lenis.raf(time * 1000);
    });
  }
  // Uncomment this if using GSAP ScrollTrigger
  connectToScrollTrigger();
}

//   Vimeo Player: Script

// $("[vimeo-player='true'] [vimeo-embed='true']").each(function () {
//   var player = new Vimeo.Player(this);

//   // Open lightbox with autoplay
//   $(this)
//     .closest("[vimeo-player='true']")
//     .find("[vimeo-open=true]")
//     .click(function () {
//       player.setCurrentTime(0);
//       player.setMuted(false);
//       player.play();
//     });

//   // Close lightbox when open modal is set
//   $(this)
//     .closest("[vimeo-player='true']")
//     .find("[vimeo-close=true]")
//     .click(function () {
//       player.setMuted(true);
//       player.pause();
//     });

//   // Play button within lightbox
//   $(this)
//     .closest("[vimeo-player='true']")
//     .find("[vimeo-play=true]")
//     .click(function () {
//       player.play();
//     });

//   // Pause button within lightbox
//   $(this)
//     .closest("[vimeo-player='true']")
//     .find("[vimeo-pause=true]")
//     .click(function () {
//       player.pause();
//     });

//   $(this)
//     .closest("[vimeo-player='true']")
//     .find("[vimeo-toggle=true]")
//     .click(function () {
//       player.getPaused().then(function (paused) {
//         if (paused) {
//           player.play();
//         } else {
//           player.pause();
//         }
//       });
//     });
// });

// Functie om de Escape-toetsdetectie af te handelen
function handleEscapeKey(event) {
  if (event.key === "Escape" || event.keyCode === 27) {
    $("[vimeo-player='true'] [vimeo-close=true]").click();
  }
}

// Event listener toevoegen om te luisteren naar keydown-events
$(document).on("keydown", handleEscapeKey);

//   GSAP scrollTrigger: text & span stagger

window.addEventListener("DOMContentLoaded", () => {
  function setupScrollTrigger(element, animation, triggerStart) {
    ScrollTrigger.create({
      trigger: element,
      start: triggerStart,
      onEnter: () => animation.play(),
      once: true, // Zorgt ervoor dat de animatie slechts één keer afspeelt
    });
  }

  function splitText() {
    new SplitType("[gsap-textscroll-split]", { types: "lines, words, chars" });
    // Zorg ervoor dat de elementen zichtbaar zijn na het splitsen.
    $("[gsap-textscroll-split]").css("visibility", "visible");
  }

  // Cache de window breedte
  let windowWidth = $(window).innerWidth();

  // Initialisatie van de SplitType functie
  splitText();

  // Resize event om SplitType opnieuw te initialiseren bij venstergrootte wijzigingen
  window.addEventListener("resize", () => {
    if (windowWidth !== $(window).innerWidth()) {
      windowWidth = $(window).innerWidth();
      splitText();
      ScrollTrigger.refresh();
    }
  });

  const triggerStart = "top 85%";

  $("[gsap-textscroll-title], [gsap-textscroll-paragraph]").each(function () {
    const $this = $(this);
    const inViewport = $this.isInViewport() ? 0.4 : 0;
    const animation = gsap.timeline({ paused: true, delay: inViewport });

    const animationProps = $this.is("[gsap-textscroll-title]")
      ? {
          yPercent: 100,
          duration: 0.7,
          ease: "power4.out",
          stagger: { amount: 0.3 },
        }
      : {
          yPercent: 100,
          opacity: 0,
          duration: 1,
          ease: "power4.out",
          stagger: { amount: 0.5 },
        };

    animation.from($this.find(".char"), animationProps);
    setupScrollTrigger($this, animation, triggerStart);

    if (inViewport) animation.play();
  });

  $(".span-wrapper").each(function (index) {
    $(".span-element").eq(index).appendTo(this);
  });

  $(".span-element").each(function () {
    const $this = $(this);
    const inViewport = $this.isInViewport() ? 0.4 : 0;
    const animation = gsap.timeline({ paused: true, delay: inViewport });

    animation.fromTo(
      $this,
      {
        scaleX: 0,
        transformOrigin: "left",
      },
      {
        scaleX: 1.05,
        ease: "back.out(1)",
        duration: 0.7,
      }
    );

    setupScrollTrigger($this, animation, "top 85%");

    if (inViewport) animation.play();
  });
});

// Helper functie om de viewport status te checken
$.fn.isInViewport = function () {
  const elementTop = $(this).offset().top;
  const elementBottom = elementTop + $(this).outerHeight();
  const viewportTop = $(window).scrollTop();
  const viewportBottom = viewportTop + $(window).height();
  return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(document).on("click", "a", function (e) {
  var $this = $(this);
  var pageTransition = $this.attr("page-transition");

  // Check als de transitie genegeerd moet worden
  if (pageTransition === "ignore") {
    return false;
  }

  // Check voor dezelfde host en afwezigheid van '#'
  if (
    this.host !== window.location.host ||
    $this.attr("href").indexOf("#") !== -1
  ) {
    return true; // Geen interne link, dus geen page transition.
  }

  e.preventDefault();

  var moduleURL = $this.attr("href");
  var transitionTime = $this.data("page-transition-time") || 1000; // Gebruik van .data() voor data attributen

  $('[page-transition="component"]').trigger("click"); // Veranderd naar trigger voor consistentie
  $(document).trigger("page-transition");

  // Gebruik van setTimeout om de redirect te vertragen
  setTimeout(function () {
    window.location = moduleURL;
  }, transitionTime);
});

// Verwijder oude event handlers om dubbele bindingen te voorkomen
$(window)
  .off("pageshow")
  .on("pageshow", function (event) {
    if (event.originalEvent.persisted) {
      window.location.reload();
    }
  });
var Webflow = Webflow || [];
Webflow.push(function () {
  if (Webflow.env("editor")) document.body.style.cursor = "auto";
  else {
    var e = document.querySelector(
        '.cursor-item[custom-cursor-item="internal-link"]'
      ),
      t = document.querySelector('[custom-cursor-main="true"]');
    if (e && t)
      document.querySelectorAll("a[href]").forEach(function (s) {
        var r = s.getAttribute("href");
        (r.startsWith("/") || r.startsWith(window.location.origin)) &&
          (s.addEventListener("mouseover", function () {
            e.classList.add("is-internal-link"), t.classList.add("is-hidden");
          }),
          s.addEventListener("mouseout", function () {
            e.classList.remove("is-internal-link"),
              t.classList.remove("is-hidden");
          }));
      });
    document.querySelectorAll("[custom-cursor-trigger]").forEach(function (e) {
      var s = e.getAttribute("custom-cursor-trigger"),
        r = document.querySelector(`.cursor-item[custom-cursor-item="${s}"]`);
      r &&
        t &&
        (e.addEventListener("mouseover", function () {
          r.classList.add(`is-${s}`), t.classList.add("is-hidden");
        }),
        e.addEventListener("mouseout", function () {
          r.classList.remove(`is-${s}`), t.classList.remove("is-hidden");
        }));
    });
  }
});
