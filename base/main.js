(function () {
  const MOBILE_BREAKPOINT = 1024;

  function setupMobileMenu() {
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');
    if (!toggle || !menu) return;

    function setMenuState(isOpen) {
      menu.classList.toggle('hidden', !isOpen);
      toggle.setAttribute('aria-expanded', String(isOpen));
    }

    toggle.addEventListener('click', function () {
      const isOpen = toggle.getAttribute('aria-expanded') === 'true';
      setMenuState(!isOpen);
    });

    menu.querySelectorAll('a[href^="#"]').forEach(function (link) {
      link.addEventListener('click', function () {
        setMenuState(false);
      });
    });

    window.addEventListener('resize', function () {
      if (window.innerWidth >= MOBILE_BREAKPOINT) {
        setMenuState(false);
      }
    });
  }

  function setupFaqAccordion() {
    const faqSection = document.getElementById('faq');
    if (!faqSection) return;

    const blocks = faqSection.querySelectorAll('.bg-white.rounded-xl.border');
    blocks.forEach(function (block, index) {
      const button = block.querySelector('button');
      const content = block.querySelector('div.px-8.pb-6');
      if (!button || !content) return;

      if (index !== 0) {
        content.classList.add('hidden');
      }

      button.addEventListener('click', function () {
        content.classList.toggle('hidden');
      });
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    setupMobileMenu();
    setupFaqAccordion();
  });
})();
