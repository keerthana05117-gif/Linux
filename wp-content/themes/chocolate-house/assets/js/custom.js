// Slider Section
jQuery(document).ready(function($) {
  const chocolate_house_section = $('.slider-sections');
  const chocolate_house_owl = chocolate_house_section.find('.owl-carousel').owlCarousel({
    loop: true,
    margin: 15,
    nav: false,
    dots: false,
    rtl: false,
    items: 1,
    // autoplay: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
  });

  // Custom navigation
  chocolate_house_section.find('.custom-next').click(() => 
    chocolate_house_owl.trigger('next.owl.carousel')
  );
  chocolate_house_section.find('.custom-prev').click(() => 
    chocolate_house_owl.trigger('prev.owl.carousel')
  );

  // Custom dots (thumbnails)
  const chocolate_house_dots = chocolate_house_section.find('.custom-dots').empty();
  chocolate_house_section.find('.owl-item:not(.cloned)').each(function(i) {
    const img = $(this).find('img').attr('src');
    if (img) chocolate_house_dots.append(
      `<button class="dot" data-index="${i}"><img src="${img}" alt="thumb-${i}"></button>`
    );
  });

  chocolate_house_dots.on('click', '.dot', function() {
    chocolate_house_owl.trigger('to.owl.carousel', [$(this).data('index'), 300]);
  });

  // Slide count
  const chocolate_house_count = chocolate_house_section.find('.slide-count');
  const chocolate_house_total = chocolate_house_section.find('.owl-item:not(.cloned)').length;
  const chocolate_house_pad = n => (n < 10 ? '0' + n : n);
  chocolate_house_count.html(`<span class="current-slide">01</span> / <span class="total-slide">${chocolate_house_pad(chocolate_house_total)}</span>`);

  // Update on change
  chocolate_house_owl.on('changed.owl.carousel', function(e) {
    const index = (e.item.index - e.relatedTarget._clones.length / 2 + e.item.count) % e.item.count;
    chocolate_house_dots.find('.dot').removeClass('active').eq(index).addClass('active');
    chocolate_house_count.find('.current-slide').text(chocolate_house_pad(index + 1));
  });

  // Set first active
  chocolate_house_dots.find('.dot').eq(0).addClass('active');
});

jQuery(document).ready(function () {
  var chocolate_house_swiper_testimonials = new Swiper(".testimonial-swiper-slider.mySwiper", {
    slidesPerView: 3,
      spaceBetween: 50,
      speed: 1000,
      autoplay: {
        delay: 3000,
        disableOnPoppinsaction: false,
      },
      navigation: {
        nextEl: ".testimonial-swiper-button-next",
        prevEl: ".testimonial-swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView: 2,
        },
        1023: {
          slidesPerView: 3,
        }
    },
  });
});

// Dark Mode
document.addEventListener("DOMContentLoaded", function () {
  const chocolate_house_toggles = document.querySelectorAll("#theme-toggle");
  if (!chocolate_house_toggles.length) return;

  // --- Load mode from PHP/DB ---
  const savedTheme = chocolate_house_ajax.theme || "light";
  chocolate_house_applyTheme(savedTheme);

  chocolate_house_toggles.forEach(toggle => {
    const chocolate_house_imgs = toggle.querySelectorAll("img");
    if (chocolate_house_imgs.length >= 2) {
      chocolate_house_imgs[0].classList.add("light-icon");
      chocolate_house_imgs[1].classList.add("dark-icon");
    }

    const chocolate_house_link = toggle.querySelector("a");
    (chocolate_house_link || toggle).addEventListener("click", function (e) {
      e.preventDefault();

      const newMode = document.body.classList.contains("dark-mode") ? "light" : "dark";
      chocolate_house_applyTheme(newMode);

      // Save to DB via AJAX
      jQuery.post(chocolate_house_ajax.ajax_url, {
        action: "save_theme_option",
        nonce: chocolate_house_ajax.nonce,
        mode: newMode
      }).done(res => {
        console.log("Mode saved:", res);
      }).fail(err => {
        console.warn("Save failed:", err);
      });
    });
  });

  // --- Helper to apply mode ---
  function chocolate_house_applyTheme(mode) {
    if (mode === "dark") {
      document.body.classList.add("dark-mode");
    } else {
      document.body.classList.remove("dark-mode");
    }
    chocolate_house_updateIcons(mode);
  }

  // --- Icon visibility ---
  function chocolate_house_updateIcons(mode) {
    const isDark = mode === "dark";
    document.querySelectorAll(".light-icon").forEach(img => {
      img.style.display = isDark ? "none" : "inline";
    });
    document.querySelectorAll(".dark-icon").forEach(img => {
      img.style.display = isDark ? "inline" : "none";
    });
  }
});
