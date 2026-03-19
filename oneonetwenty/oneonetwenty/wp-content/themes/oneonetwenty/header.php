<?php
/**
 * Header template.
 */

// ── HEADER ACF fields ────────────────────────────────────────────
$header_topbar_texto    = get_field( 'header_topbar_texto',    'option' );
$header_topbar_email    = get_field( 'header_topbar_email',    'option' );
$header_topbar_telefono = get_field( 'header_topbar_telefono', 'option' );
$header_nav_links       = get_field( 'header_nav_links',       'option' );
$header_cta_texto       = get_field( 'header_cta_texto',       'option' );
$header_cta_url         = get_field( 'header_cta_url',         'option' );

// ── Fallbacks ────────────────────────────────────────────────────
$nav_defaults = [
  [ 'texto' => 'Servicios',      'url' => '#servicios' ],
  [ 'texto' => 'Productos',      'url' => '#productos' ],
  [ 'texto' => 'Institucional',  'url' => '#institucional' ],
  [ 'texto' => 'Obras Sociales', 'url' => '#obras-sociales' ],
];
$nav_links = $header_nav_links ?: $nav_defaults;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="ETICA — Alquiler y venta de equipamiento médico de alta complejidad. Entrega en 24 horas. Convenio con más de 45 obras sociales. Habilitados por ANMAT." />
  <title>ETICA Equipamiento Médico — Alquiler y Venta | Argentina</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-ink'); ?> data-whatsapp-url="<?php echo esc_attr( $header_cta_url ?: 'https://wa.me/5491112345678?text=Hola%20ETICA%2C%20quiero%20información%20sobre%20equipamiento%20médico.' ); ?>">
<?php wp_body_open(); ?>


  <!-- ══════════════════════════════════════════
       TOP BAR
  ══════════════════════════════════════════ -->
  <div class="hidden lg:block w-full bg-navy text-white py-2 px-4">
    <div class="max-w-7xl mx-auto flex items-center justify-between text-xs tracking-wide">
      <p class="text-white/70">
        <span class="text-white font-medium"><?php echo esc_html( $header_topbar_texto ?: 'Envíos a todo el país' ); ?></span>
        &nbsp;·&nbsp; Atención profesional garantizada
      </p>
      <div class="flex items-center gap-6 text-white/80">
        <a href="mailto:<?php echo esc_attr( $header_topbar_email ?: 'info@eticamedica.com.ar' ); ?>" class="hover:text-white transition-colors">
          <i class="fa-solid fa-envelope mr-1.5"></i><?php echo esc_html( $header_topbar_email ?: 'info@eticamedica.com.ar' ); ?>
        </a>
        <span>
          <i class="fa-solid fa-phone mr-1.5"></i><?php echo esc_html( $header_topbar_telefono ?: '0800-555-ETICA (38422)' ); ?>
        </span>
      </div>
    </div>
  </div>


  <!-- ══════════════════════════════════════════
       HEADER
  ══════════════════════════════════════════ -->
  <header id="header" class="w-full bg-white/95 backdrop-blur-sm border-b border-edge sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4">
      <div class="flex items-center justify-between">

        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <rect width="36" height="36" rx="9" fill="#005C8F"/>
            <rect x="15.5" y="9" width="5" height="18" rx="2.5" fill="white"/>
            <rect x="9" y="15.5" width="18" height="5" rx="2.5" fill="white"/>
          </svg>
          <div class="flex flex-col leading-none">
            <span class="text-lg font-bold tracking-[0.12em] text-ink">ETICA</span>
            <span class="text-[10px] font-medium tracking-[0.14em] text-ink-muted uppercase mt-0.5">Equipamiento Médico</span>
          </div>
        </a>

        <!-- Nav desktop -->
        <nav class="hidden lg:flex items-center gap-8">
          <?php foreach ( $nav_links as $link ) : ?>
          <a href="<?php echo esc_attr( $link['url'] ); ?>" class="text-sm text-ink-muted hover:text-brand transition-colors font-medium">
            <?php echo esc_html( $link['texto'] ); ?>
          </a>
          <?php endforeach; ?>
        </nav>

        <!-- CTA + hamburger -->
        <div class="flex items-center gap-3">
          <a
            href="<?php echo esc_url( $header_cta_url ?: 'https://wa.me/5491112345678' ); ?>"
            class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-brand text-white rounded-md text-sm font-medium hover:bg-brand-dark transition-colors"
          >
            <i class="fa-brands fa-whatsapp"></i>
            <?php echo esc_html( $header_cta_texto ?: 'Solicitar equipamiento' ); ?>
          </a>
          <button
            id="mobile-menu-toggle"
            class="lg:hidden p-2 border border-edge rounded-md text-ink-muted"
            type="button"
            aria-expanded="false"
            aria-controls="mobile-menu"
            aria-label="Abrir menú"
          >
            <i class="fa-solid fa-bars text-lg"></i>
          </button>
        </div>
      </div>

      <!-- Mobile menu -->
      <nav id="mobile-menu" class="hidden lg:hidden border-t border-edge mt-4 pt-4 space-y-1 pb-2">
        <?php foreach ( $nav_links as $link ) : ?>
        <a href="<?php echo esc_attr( $link['url'] ); ?>" class="block text-ink-muted py-2.5 px-2 rounded-md hover:bg-surface text-sm font-medium">
          <?php echo esc_html( $link['texto'] ); ?>
        </a>
        <?php endforeach; ?>
        <a href="#contacto" class="block py-2.5 px-2 rounded-md hover:bg-surface text-sm font-medium">Contacto</a>
        <div class="pt-3 pb-1">
          <a
            href="<?php echo esc_url( $header_cta_url ?: 'https://wa.me/5491112345678' ); ?>"
            class="flex items-center justify-center gap-2 w-full py-3 bg-brand text-white rounded-md text-sm font-medium"
          >
            <i class="fa-brands fa-whatsapp"></i>
            <?php echo esc_html( $header_cta_texto ?: 'Solicitar equipamiento' ); ?>
          </a>
        </div>
      </nav>
    </div>
  </header>