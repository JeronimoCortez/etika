<?php
// ── FOOTER ACF fields ────────────────────────────────────────────
$footer_descripcion    = get_field( 'footer_descripcion',    'option' );
$footer_serv_titulo    = get_field( 'footer_serv_titulo',    'option' );
$footer_serv_links     = get_field( 'footer_serv_links',     'option' );
$footer_prod_titulo    = get_field( 'footer_prod_titulo',    'option' );
$footer_prod_links     = get_field( 'footer_prod_links',     'option' );
$footer_cont_titulo    = get_field( 'footer_cont_titulo',    'option' );
$footer_telefono       = get_field( 'footer_telefono',       'option' );
$footer_email          = get_field( 'footer_email',          'option' );
$footer_direccion      = get_field( 'footer_direccion',      'option' );
$footer_horario        = get_field( 'footer_horario',        'option' );
$footer_copyright      = get_field( 'footer_copyright',      'option' );
$footer_url_privacidad = get_field( 'footer_url_privacidad', 'option' );
$footer_url_terminos   = get_field( 'footer_url_terminos',   'option' );
$footer_whatsapp_url   = get_field( 'footer_whatsapp_url',   'option' );

// ── Fallbacks ────────────────────────────────────────────────────
$footer_serv_defaults = [
  [ 'texto' => 'Alquiler de equipamiento',    'url' => '#servicios' ],
  [ 'texto' => 'Venta de equipamiento',       'url' => '#servicios' ],
  [ 'texto' => 'Urgencias y entrega express', 'url' => '#servicios' ],
  [ 'texto' => 'Gestión de obra social',      'url' => '#obras-sociales' ],
];
$footer_prod_defaults = [
  [ 'texto' => 'Concentradores de oxígeno', 'url' => '#productos' ],
  [ 'texto' => 'CPAP y Auto CPAP',          'url' => '#productos' ],
  [ 'texto' => 'Camas ortopédicas',         'url' => '#productos' ],
  [ 'texto' => 'Sillas de ruedas',          'url' => '#productos' ],
];

$serv_links = $footer_serv_links ?: $footer_serv_defaults;
$prod_links = $footer_prod_links ?: $footer_prod_defaults;
?>

<footer id="footer" class="w-full bg-navy text-white">
  <div class="max-w-7xl mx-auto px-6 py-14">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">

      <!-- Brand -->
      <div class="space-y-4">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3">
          <svg width="32" height="32" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="36" height="36" rx="9" fill="#005C8F"/>
            <rect x="15.5" y="9" width="5" height="18" rx="2.5" fill="white"/>
            <rect x="9" y="15.5" width="18" height="5" rx="2.5" fill="white"/>
          </svg>
          <div class="flex flex-col leading-none">
            <span class="text-base font-bold tracking-[0.12em]">ETICA</span>
            <span class="text-[10px] text-white/50 uppercase tracking-[0.14em] mt-0.5">Equipamiento Médico</span>
          </div>
        </a>
        <p class="text-white/60 text-sm leading-relaxed">
          <?php echo esc_html( $footer_descripcion ?: 'Líderes en alquiler y venta de equipamiento médico de alta complejidad. Habilitados por ANMAT. ISO 9001.' ); ?>
        </p>
      </div>

      <!-- Servicios -->
      <div>
        <h4 class="font-semibold text-sm tracking-wide mb-4">
          <?php echo esc_html( $footer_serv_titulo ?: 'Servicios' ); ?>
        </h4>
        <ul class="space-y-2.5">
          <?php foreach ( $serv_links as $link ) : ?>
          <li>
            <a href="<?php echo esc_url( $link['url'] ); ?>" class="text-white/60 text-sm hover:text-white transition-colors">
              <?php echo esc_html( $link['texto'] ); ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Productos -->
      <div>
        <h4 class="font-semibold text-sm tracking-wide mb-4">
          <?php echo esc_html( $footer_prod_titulo ?: 'Productos' ); ?>
        </h4>
        <ul class="space-y-2.5">
          <?php foreach ( $prod_links as $link ) : ?>
          <li>
            <a href="<?php echo esc_url( $link['url'] ); ?>" class="text-white/60 text-sm hover:text-white transition-colors">
              <?php echo esc_html( $link['texto'] ); ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Contacto -->
      <div>
        <h4 class="font-semibold text-sm tracking-wide mb-4">
          <?php echo esc_html( $footer_cont_titulo ?: 'Contacto' ); ?>
        </h4>
        <ul class="space-y-2.5">
          <li class="text-white/60 text-sm"><?php echo esc_html( $footer_telefono  ?: '0800-555-ETICA (38422)' ); ?></li>
          <li class="text-white/60 text-sm"><?php echo esc_html( $footer_email     ?: 'info@eticamedica.com.ar' ); ?></li>
          <li class="text-white/60 text-sm"><?php echo esc_html( $footer_direccion ?: 'Av. Corrientes 1234, CABA' ); ?></li>
          <li class="text-white/60 text-sm"><?php echo esc_html( $footer_horario   ?: 'Lun–Vie 8:00–20:00 hs' ); ?></li>
        </ul>
      </div>

    </div>

    <!-- Barra inferior -->
    <div class="border-t border-white/10 pt-6 flex flex-col sm:flex-row items-center justify-between gap-4">
      <p class="text-white/40 text-xs">
        <?php echo esc_html( $footer_copyright ?: '© 2025 ETICA Equipamiento Médico. Habilitación ANMAT vigente. Todos los derechos reservados.' ); ?>
      </p>
      <div class="flex items-center gap-5">
        <a href="<?php echo esc_url( $footer_url_privacidad ?: '#' ); ?>" class="text-white/40 text-xs hover:text-white/70 transition-colors">Política de privacidad</a>
        <a href="<?php echo esc_url( $footer_url_terminos   ?: '#' ); ?>" class="text-white/40 text-xs hover:text-white/70 transition-colors">Términos de uso</a>
      </div>
    </div>
  </div>
</footer>


<!-- ══════════════════════════════════════════
     WHATSAPP FLOATING BUTTON
══════════════════════════════════════════ -->
<a
  id="floating-whatsapp"
  href="<?php echo esc_url( $footer_whatsapp_url ?: 'https://wa.me/5491112345678' ); ?>"
  target="_blank"
  rel="noopener noreferrer"
  class="fixed bottom-6 right-6 z-50 flex items-center gap-3 bg-[#25D366] text-white rounded-full px-5 py-3.5 font-semibold text-sm shadow-lg"
  aria-label="Contactar por WhatsApp"
>
  <i class="fa-brands fa-whatsapp text-xl"></i>
  <span class="hidden sm:inline">Hablar por WhatsApp</span>
</a>

<?php wp_footer(); ?>

<script>
  // ── Hero parallax ──────────────────────────────────
  const heroImg = document.querySelector('#hero img');
  if (heroImg) {
    window.addEventListener('scroll', () => {
      heroImg.style.transform = `translateY(${window.scrollY * -0.15}px)`;
    }, { passive: true });
  }

  // ── Scroll reveal ───────────────────────────────────
  const revealObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          revealObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12 }
  );
  document.querySelectorAll('.reveal').forEach((el) => revealObserver.observe(el));

  // ── Header shrink on scroll ─────────────────────────
  const header = document.getElementById('header');
  window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 20);
  }, { passive: true });

  // ── Premium button classes ──────────────────────────
  document.querySelectorAll('a, button').forEach(el => {
    const cls = [...el.classList];
    if (cls.includes('bg-brand') || el.style.background?.includes('#25D366')) {
      el.classList.add('btn-primary');
    } else if (
      cls.includes('border') ||
      cls.some(c => c.startsWith('bg-navy')) ||
      cls.some(c => c.startsWith('bg-white'))
    ) {
      if (el.tagName === 'A' || el.tagName === 'BUTTON') {
        el.classList.add('btn-ghost');
      }
    }
  });

  // ── FAQ accordion ───────────────────────────────────
  document.querySelectorAll('.faq-item').forEach((item, index) => {
    const btn    = item.querySelector('button');
    const answer = item.querySelector('.faq-answer');
    if (!btn || !answer) return;

    if (index === 0) {
      answer.classList.add('open');
      item.classList.add('faq-open');
    }

    btn.addEventListener('click', () => {
      const isOpen = item.classList.contains('faq-open');
      document.querySelectorAll('.faq-item').forEach((i) => {
        i.classList.remove('faq-open');
        const a = i.querySelector('.faq-answer');
        if (a) a.classList.remove('open');
      });
      if (!isOpen) {
        item.classList.add('faq-open');
        answer.classList.add('open');
      }
    });
  });
</script>
</body>
</html>