
    $(function () {

      /* ── Preloader ── */
      $(window).on('load', function () {
        setTimeout(function () { $('#preloader').addClass('hide'); }, 400);
      });

      /* ── AOS ── */
      AOS.init({ duration: 800, once: true, offset: 60 });

      /* ── Tahun footer ── */
      $('#year').text(new Date().getFullYear());

      /* ── Navbar scroll ── */
      $(window).on('scroll', function () {
        if ($(this).scrollTop() > 60) {
          $('#navbar').addClass('scrolled');
          $('#backToTop').addClass('show');
        } else {
          $('#navbar').removeClass('scrolled');
          $('#backToTop').removeClass('show');
        }

        // Active nav link
        $('section[id]').each(function () {
          var top = $(this).offset().top - 100;
          var bot = top + $(this).outerHeight();
          var id  = $(this).attr('id');
          if ($(window).scrollTop() >= top && $(window).scrollTop() < bot) {
            $('.nav-links a').removeClass('active');
            $('.nav-links a[href="#' + id + '"]').addClass('active');
          }
        });
      });

      /* ── Smooth scroll ── */
      $('a[href^="#"]').on('click', function (e) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
          e.preventDefault();
          $('html, body').animate({ scrollTop: target.offset().top - 70 }, 600, 'swing');
          $('#mobileMenu').removeClass('open');
        }
      });

      /* ── Back to top ── */
      $('#backToTop').on('click', function () {
        $('html, body').animate({ scrollTop: 0 }, 500);
      });

      /* ── Mobile menu ── */
      $('#hamburger').on('click', function () { $('#mobileMenu').addClass('open'); });
      $('#mobileClose').on('click', function () { $('#mobileMenu').removeClass('open'); });

      /* ── Counter ── */
      function runCounters() {
        $('.counter').each(function () {
          var $el     = $(this);
          var target  = parseInt($el.data('target'));
          var duration = 2000;
          var step    = Math.ceil(duration / target);
          var current = 0;
          var timer   = setInterval(function () {
            current += Math.ceil(target / 80);
            if (current >= target) { current = target; clearInterval(timer); }
            $el.text(current + ($el.data('target') >= 98 ? '%' : '+'));
          }, step);
        });
      }

      // Jalankan counter saat hero terlihat
      var counterDone = false;
      $(window).on('scroll', function () {
        if (!counterDone && $(window).scrollTop() < 200) {
          counterDone = true;
          setTimeout(runCounters, 600);
        }
      });
      // Langsung jalankan saat load
      setTimeout(runCounters, 1000);

      /* ── Swiper properti ── */
      var propSwiper = new Swiper('.swiper-property', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: {
          nextEl: '#propNext',
          prevEl: '#propPrev',
        },
        breakpoints: {
          576: { slidesPerView: 1 },
          768: { slidesPerView: 2 },
          1024: { slidesPerView: 3 },
        },
        autoplay: { delay: 4000, disableOnInteraction: false },
      });

      /* ── Search ── */
      $('#btnSearch').on('click', function () {
        var q = $('#searchInput').val().trim();
        if (q) {
          alert('Mencari: "' + q + '"\nFitur ini akan terhubung ke halaman listing properti.');
        } else {
          $('#searchInput').focus();
        }
      });
      $('#searchInput').on('keypress', function (e) {
        if (e.which === 13) $('#btnSearch').trigger('click');
      });

    });
