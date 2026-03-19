<?php
$asset_uri = get_stylesheet_directory_uri() . '/assets/etica';
get_header();

// ── HERO
$hero_imagen       = get_field('imagen_hero');
$hero_informacion  = get_field('informacion');
$hero_titulo       = get_field('titulo');
$hero_descripcion  = get_field('descripcion');
$hero_cta_texto    = get_field('cta_hero');
$hero_telefono     = get_field('telefono');
$hero_beneficios   = get_field('beneficios'); // Group: texto_1, texto_2, texto_3, texto_4

// ── METRICS
$met_stat_1_numero   = get_field('met_stat_1_numero');
$met_stat_1_label    = get_field('met_stat_1_label');
$met_stat_1_desc     = get_field('met_stat_1_desc');
$met_stat_2_numero   = get_field('met_stat_2_numero');
$met_stat_2_label    = get_field('met_stat_2_label');
$met_stat_2_desc     = get_field('met_stat_2_desc');
$met_stat_3_numero   = get_field('met_stat_3_numero');
$met_stat_3_label    = get_field('met_stat_3_label');
$met_stat_3_desc     = get_field('met_stat_3_desc');
$met_stat_4_numero   = get_field('met_stat_4_numero');
$met_stat_4_label    = get_field('met_stat_4_label');
$met_stat_4_desc     = get_field('met_stat_4_desc');
$met_logos_titulo    = get_field('met_logos_titulo');

// ── INSTITUCIONAL
$inst_badge                    = get_field('inst_badge');
$inst_titulo_1                 = get_field('inst_titulo_1');
$inst_titulo_2                 = get_field('inst_titulo_2');
$inst_titulo_3                 = get_field('inst_titulo_3');
$inst_parrafo_1                = get_field('inst_parrafo_1');
$inst_parrafo_2                = get_field('inst_parrafo_2');
$inst_imagen                   = get_field('inst_imagen');
$inst_badge_flotante_titulo    = get_field('inst_badge_flotante_titulo');
$inst_badge_flotante_subtitulo = get_field('inst_badge_flotante_subtitulo');
$inst_anios                    = get_field('inst_anios');
$inst_credenciales             = get_field('inst_credenciales'); // Repeater: icono, titulo, descripcion

// ── SERVICIOS
$serv_badge        = get_field('serv_badge');
$serv_titulo       = get_field('serv_titulo');
$serv_subtitulo    = get_field('serv_subtitulo');
$serv_items        = get_field('serv_items'); // Repeater: numero, badge_texto, badge_color, titulo, descripcion, lista (Repeater: item), cta_texto, cta_url, imagen

// ── PRODUCTOS
$prod_badge        = get_field('prod_badge');
$prod_titulo       = get_field('prod_titulo');
$prod_subtitulo    = get_field('prod_subtitulo');
$prod_cta_texto    = get_field('prod_cta_texto');
$prod_items        = get_field('prod_items'); // Repeater: imagen, badge_texto, badge_estilo, titulo, specs, cta_texto

// ── OBRAS SOCIALES
$os_badge          = get_field('os_badge');
$os_titulo         = get_field('os_titulo');
$os_subtitulo      = get_field('os_subtitulo');
$os_cta_texto      = get_field('os_cta_texto');
$os_pasos          = get_field('os_pasos'); // Repeater: titulo, descripcion

// ── PROCESO
$proc_imagen_fondo = get_field('proc_imagen_fondo');
$proc_badge        = get_field('proc_badge');
$proc_titulo       = get_field('proc_titulo');
$proc_subtitulo    = get_field('proc_subtitulo');
$proc_telefono     = get_field('proc_telefono');
$proc_pasos        = get_field('proc_pasos'); // Repeater: icono, titulo, descripcion, tiempo

// ── TESTIMONIOS
$test_badge        = get_field('test_badge');
$test_titulo       = get_field('test_titulo');
$test_subtitulo    = get_field('test_subtitulo');
$test_items        = get_field('test_items'); // Repeater: texto, nombre, iniciales, ciudad, producto

// ── CONTACTO
$cont_badge              = get_field('cont_badge');
$cont_titulo             = get_field('cont_titulo');
$cont_subtitulo          = get_field('cont_subtitulo');
$cont_whatsapp_url       = get_field('cont_whatsapp_url');
$cont_whatsapp_titulo    = get_field('cont_whatsapp_titulo');
$cont_whatsapp_subtitulo = get_field('cont_whatsapp_subtitulo');
$cont_telefono           = get_field('cont_telefono');
$cont_telefono_horario   = get_field('cont_telefono_horario');
$cont_email              = get_field('cont_email');
$cont_direccion          = get_field('cont_direccion');
$cont_direccion_detalle  = get_field('cont_direccion_detalle');
$cont_form_titulo        = get_field('cont_form_titulo');
$cont_form_subtitulo     = get_field('cont_form_subtitulo');

// ── FAQ
$faq_badge     = get_field('faq_badge');
$faq_titulo    = get_field('faq_titulo');
$faq_subtitulo = get_field('faq_subtitulo');
$faq_items     = get_field('faq_items'); // Repeater: pregunta, respuesta
?>


  <!-- ══════════════════════════════════════════
       HERO
  ══════════════════════════════════════════ -->
  <section id="hero" class="relative overflow-hidden flex items-center">
    <img
      src="<?php echo esc_url( $hero_imagen ? $hero_imagen['url'] : $asset_uri . '/hero-new.png' ); ?>"
      alt=""
      class="absolute inset-0 w-full object-cover will-change-transform"
      style="object-position: 68% center; height: 120%; top: -10%;"
    />
    <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(11,31,46,0.55) 0%, transparent 35%);"></div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 py-20 pb-32">
      <div class="max-w-2xl space-y-7">

        <div class="inline-flex items-center gap-2 reveal">
          <span class="inline-flex items-center gap-2 bg-navy/10 border border-navy/20 text-navy text-xs font-medium tracking-wider uppercase px-4 py-2 rounded-full">
            <i class="fa-solid fa-shield-halved text-brand"></i>
            <?php echo esc_html( $hero_informacion ?: 'Habilitados por ANMAT &nbsp;·&nbsp; ISO 9001 &nbsp;·&nbsp; +45 Obras Sociales' ); ?>
          </span>
        </div>

        <h1 class="font-display text-navy leading-[1.05] reveal reveal-d1" style="font-size: clamp(2.6rem, 5.5vw, 4.8rem);">
          <?php echo wp_kses_post( $hero_titulo ?: 'El equipamiento médico que necesita su familia, <span class="text-brand font-display">hoy en su casa.</span>' ); ?>
        </h1>

        <p class="text-ink-muted text-lg leading-relaxed max-w-xl reveal reveal-d2">
          <?php echo wp_kses_post( $hero_descripcion ?: 'Alquiler y venta de alta complejidad con cobertura de obra social. Gestionamos todos los trámites. Entrega en <strong class="text-navy font-semibold">24 horas en AMBA</strong>.' ); ?>
        </p>

        <div class="flex flex-wrap gap-3 reveal reveal-d3">
          <a href="#contacto" class="inline-flex items-center gap-2 px-7 py-3.5 bg-brand text-white rounded-md font-semibold text-sm hover:bg-brand-dark transition-colors">
            <?php echo esc_html( $hero_cta_texto ?: 'Solicitar equipamiento' ); ?>
            <i class="fa-solid fa-arrow-right text-xs"></i>
          </a>
          <a href="tel:<?php echo esc_attr( $hero_telefono ?: '08005553842' ); ?>" class="inline-flex items-center gap-2 px-7 py-3.5 bg-navy/8 border border-navy/20 text-navy rounded-md font-medium text-sm hover:bg-navy/15 transition-colors">
            <i class="fa-solid fa-phone text-brand"></i>
            <?php echo esc_html( $hero_telefono ?: '0800-555-ETICA' ); ?>
          </a>
        </div>
      </div>
    </div>

    <div class="absolute bottom-0 left-0 right-0 z-10" style="background: rgba(255,255,255,0.75); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border-top: 1px solid rgba(11,31,46,0.08);">
      <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
          <div class="flex items-center gap-2.5 text-ink">
            <i class="fa-solid fa-certificate text-brand text-sm flex-shrink-0"></i>
            <span class="text-xs font-medium"><?php echo esc_html( $hero_beneficios['texto_1'] ?? 'Habilitación ANMAT' ); ?></span>
          </div>
          <div class="flex items-center gap-2.5 text-ink">
            <i class="fa-solid fa-award text-brand text-sm flex-shrink-0"></i>
            <span class="text-xs font-medium"><?php echo esc_html( $hero_beneficios['texto_2'] ?? 'Certificación ISO 9001' ); ?></span>
          </div>
          <div class="flex items-center gap-2.5 text-ink">
            <i class="fa-solid fa-truck text-brand text-sm flex-shrink-0"></i>
            <span class="text-xs font-medium"><?php echo esc_html( $hero_beneficios['texto_3'] ?? 'Entrega en 24 horas' ); ?></span>
          </div>
          <div class="flex items-center gap-2.5 text-ink">
            <i class="fa-solid fa-map-location-dot text-brand text-sm flex-shrink-0"></i>
            <span class="text-xs font-medium"><?php echo esc_html( $hero_beneficios['texto_4'] ?? '23 provincias cubiertas' ); ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ══════════════════════════════════════════
       METRICS
  ══════════════════════════════════════════ -->
  <section id="metrics" class="w-full bg-white border-b border-edge pattern-dots">
    <div class="max-w-7xl mx-auto px-6 py-14">
      <div class="grid grid-cols-2 lg:grid-cols-4 divide-y lg:divide-y-0 lg:divide-x divide-edge">

        <div class="text-center px-6 py-8 reveal">
          <div class="metric-val text-5xl sm:text-6xl font-bold text-brand mb-2">
            <?php echo esc_html( $met_stat_1_numero ?: '15+' ); ?>
          </div>
          <div class="text-sm font-semibold text-ink mb-1"><?php echo esc_html( $met_stat_1_label ?: 'Años de experiencia' ); ?></div>
          <div class="text-xs text-ink-muted"><?php echo esc_html( $met_stat_1_desc ?: 'En equipamiento médico de alta complejidad' ); ?></div>
        </div>

        <div class="text-center px-6 py-8 reveal reveal-d1">
          <div class="metric-val text-5xl sm:text-6xl font-bold text-brand mb-2">
            <?php echo esc_html( $met_stat_2_numero ?: '12K+' ); ?>
          </div>
          <div class="text-sm font-semibold text-ink mb-1"><?php echo esc_html( $met_stat_2_label ?: 'Pacientes asistidos' ); ?></div>
          <div class="text-xs text-ink-muted"><?php echo esc_html( $met_stat_2_desc ?: 'Con resultados y seguimiento satisfactorio' ); ?></div>
        </div>

        <div class="text-center px-6 py-8 reveal reveal-d2">
          <div class="metric-val text-5xl sm:text-6xl font-bold text-brand mb-2">
            <?php echo esc_html( $met_stat_3_numero ?: '45+' ); ?>
          </div>
          <div class="text-sm font-semibold text-ink mb-1"><?php echo esc_html( $met_stat_3_label ?: 'Obras sociales' ); ?></div>
          <div class="text-xs text-ink-muted"><?php echo esc_html( $met_stat_3_desc ?: 'Convenios activos con las principales prepagas' ); ?></div>
        </div>

        <div class="text-center px-6 py-8 reveal reveal-d3">
          <div class="metric-val text-5xl sm:text-6xl font-bold text-brand mb-2">
            <?php echo esc_html( $met_stat_4_numero ?: '23' ); ?>
          </div>
          <div class="text-sm font-semibold text-ink mb-1"><?php echo esc_html( $met_stat_4_label ?: 'Provincias cubiertas' ); ?></div>
          <div class="text-xs text-ink-muted"><?php echo esc_html( $met_stat_4_desc ?: 'Cobertura y entrega directa en todo el país' ); ?></div>
        </div>

      </div>

      <div class="border-t border-edge mt-2 pt-10">
        <p class="text-center text-xs font-semibold tracking-widest text-ink-muted uppercase mb-7">
          <?php echo esc_html( $met_logos_titulo ?: 'Convenios activos con las principales obras sociales' ); ?>
        </p>
        <div class="marquee-fade-wrap marquee-wrap overflow-hidden max-w-3xl mx-auto">
          <div class="marquee-track marquee-track-slow flex items-center gap-10 w-max">
            <img src="<?php echo esc_url( $asset_uri ); ?>/osde-logo.webp"          alt="OSDE"          class="h-8 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
            <img src="<?php echo esc_url( $asset_uri ); ?>/swiss-medical-logo.webp" alt="Swiss Medical" class="h-8 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
            <img src="<?php echo esc_url( $asset_uri ); ?>/galeno-logo.webp"        alt="Galeno"        class="h-8 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
            <img src="<?php echo esc_url( $asset_uri ); ?>/medife-logo.webp"        alt="Medifé"        class="h-8 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
            <img src="<?php echo esc_url( $asset_uri ); ?>/ioma-logo.webp"          alt="IOMA"          class="h-8 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
            <img src="<?php echo esc_url( $asset_uri ); ?>/pami-logo.webp"          alt="PAMI"          class="h-8 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
            <img src="<?php echo esc_url( $asset_uri ); ?>/osde-logo.webp"          alt="OSDE"          class="h-8 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
            <img src="<?php echo esc_url( $asset_uri ); ?>/swiss-medical-logo.webp" alt="Swiss Medical" class="h-8 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
            <img src="<?php echo esc_url( $asset_uri ); ?>/galeno-logo.webp"        alt="Galeno"        class="h-8 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
            <img src="<?php echo esc_url( $asset_uri ); ?>/medife-logo.webp"        alt="Medifé"        class="h-8 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
            <img src="<?php echo esc_url( $asset_uri ); ?>/ioma-logo.webp"          alt="IOMA"          class="h-8 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
            <img src="<?php echo esc_url( $asset_uri ); ?>/pami-logo.webp"          alt="PAMI"          class="h-8 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ══════════════════════════════════════════
       INSTITUCIONAL / ABOUT
  ══════════════════════════════════════════ -->
  <section id="institucional" class="w-full bg-surface py-24 pattern-grid">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

        <div class="space-y-7 reveal">
          <div>
            <span class="inline-block text-xs font-semibold tracking-widest text-brand uppercase mb-4">
              <?php echo esc_html( $inst_badge ?: 'Quiénes somos' ); ?>
            </span>
            <h2 class="font-display text-4xl sm:text-5xl text-ink leading-tight">
              <?php echo esc_html( $inst_titulo_1 ?: 'Más que proveedores,' ); ?><br/>
              <?php echo esc_html( $inst_titulo_2 ?: 'somos aliados' ); ?><br/>
              <?php echo esc_html( $inst_titulo_3 ?: 'en salud.' ); ?>
            </h2>
          </div>

          <p class="text-ink-muted leading-relaxed text-lg">
            <?php echo esc_html( $inst_parrafo_1 ?: 'Durante más de 15 años, ETICA ha sido el socio de confianza de instituciones médicas, profesionales de la salud y familias en todo el país. Nuestra misión es garantizar acceso a tecnología médica de vanguardia con el respaldo de un equipo altamente capacitado.' ); ?>
          </p>

          <p class="text-ink-muted leading-relaxed">
            <?php echo esc_html( $inst_parrafo_2 ?: 'Cada equipo que entregamos cumple con los más altos estándares de calidad y seguridad. Trabajamos bajo estrictas normativas de ANMAT y mantenemos certificaciones internacionales que avalan nuestro compromiso con la excelencia.' ); ?>
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
            <?php if ( $inst_credenciales ) : foreach ( $inst_credenciales as $cred ) : ?>
            <div class="bg-white rounded-xl p-5 border border-edge">
              <div class="w-10 h-10 bg-brand-light rounded-lg flex items-center justify-center mb-3">
                <i class="fa-solid <?php echo esc_attr( $cred['icono'] ?: 'fa-certificate' ); ?> text-brand"></i>
              </div>
              <h3 class="font-semibold text-ink mb-1"><?php echo esc_html( $cred['titulo'] ); ?></h3>
              <p class="text-sm text-ink-muted leading-relaxed"><?php echo esc_html( $cred['descripcion'] ); ?></p>
            </div>
            <?php endforeach; else : ?>
            <div class="bg-white rounded-xl p-5 border border-edge">
              <div class="w-10 h-10 bg-brand-light rounded-lg flex items-center justify-center mb-3">
                <i class="fa-solid fa-certificate text-brand"></i>
              </div>
              <h3 class="font-semibold text-ink mb-1">Certificaciones</h3>
              <p class="text-sm text-ink-muted leading-relaxed">Habilitación ANMAT, ISO 9001 y certificaciones de fabricantes internacionales.</p>
            </div>
            <div class="bg-white rounded-xl p-5 border border-edge">
              <div class="w-10 h-10 bg-brand-light rounded-lg flex items-center justify-center mb-3">
                <i class="fa-solid fa-user-doctor text-brand"></i>
              </div>
              <h3 class="font-semibold text-ink mb-1">Equipo experto</h3>
              <p class="text-sm text-ink-muted leading-relaxed">Biomédicos certificados y técnicos especializados con formación continua.</p>
            </div>
            <?php endif; ?>
          </div>
        </div>

        <div class="relative reveal reveal-d1">
          <div class="rounded-2xl overflow-hidden">
            <img
              src="<?php echo esc_url( $inst_imagen ? $inst_imagen['url'] : $asset_uri . '/frente_etika.webp' ); ?>"
              alt="<?php echo esc_attr( $inst_imagen ? $inst_imagen['alt'] : 'Instalaciones ETICA Equipamiento Médico' ); ?>"
              class="w-full h-[520px] object-cover object-center"
            />
          </div>
          <div class="absolute -bottom-5 -left-5 sm:bottom-8 sm:left-8 bg-white rounded-xl shadow-lg px-5 py-4 border border-edge">
            <div class="flex items-center gap-3">
              <div class="w-11 h-11 bg-brand rounded-full flex items-center justify-center flex-shrink-0">
                <i class="fa-solid fa-shield-halved text-white"></i>
              </div>
              <div>
                <p class="font-semibold text-ink text-sm"><?php echo esc_html( $inst_badge_flotante_titulo ?: 'Garantía total' ); ?></p>
                <p class="text-xs text-ink-muted"><?php echo esc_html( $inst_badge_flotante_subtitulo ?: 'En cada equipo y servicio' ); ?></p>
              </div>
            </div>
          </div>
          <div class="absolute top-6 right-6 bg-navy text-white rounded-xl px-5 py-3 text-center">
            <div class="font-display text-3xl font-bold leading-none"><?php echo esc_html( $inst_anios ?: '15' ); ?></div>
            <div class="text-xs text-white/70 mt-0.5 tracking-wide">años</div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ══════════════════════════════════════════
       SERVICIOS
  ══════════════════════════════════════════ -->
  <section id="servicios" class="w-full bg-white py-24">
    <div class="max-w-7xl mx-auto px-6">

      <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-16 reveal">
        <div>
          <span class="inline-block text-xs font-semibold tracking-widest text-brand uppercase mb-4">
            <?php echo esc_html( $serv_badge ?: 'Nuestros servicios' ); ?>
          </span>
          <h2 class="text-3xl sm:text-4xl font-bold text-ink max-w-md">
            <?php echo esc_html( $serv_titulo ?: 'Soluciones claras para cada situación' ); ?>
          </h2>
        </div>
        <p class="text-ink-muted leading-relaxed max-w-sm lg:text-right text-sm">
          <?php echo esc_html( $serv_subtitulo ?: 'Acompañamos a pacientes, familias e instituciones con opciones simples, ágiles y con cobertura de obra social.' ); ?>
        </p>
      </div>

      <div class="divide-y divide-edge">
        <?php if ( $serv_items ) :
          $serv_order_map = [ 'order-2 lg:order-1', 'order-1', 'order-2 lg:order-1' ];
          $serv_img_order = [ 'order-1 lg:order-2', 'order-1', 'order-1 lg:order-2' ];
          foreach ( $serv_items as $i => $serv ) :
            $is_left = ( $i % 2 === 0 );
        ?>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center py-16 reveal">
          <div class="space-y-6 <?php echo $is_left ? 'order-2 lg:order-1' : ''; ?>">
            <div class="flex items-center gap-5">
              <span class="font-display leading-none select-none" style="font-size:5.5rem; color: #EEF4FA;"><?php echo esc_html( $serv['numero'] ); ?></span>
              <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-semibold tracking-widest uppercase <?php echo esc_attr( $serv['badge_color'] ?: 'bg-brand-light text-brand' ); ?>">
                <?php echo esc_html( $serv['badge_texto'] ); ?>
              </span>
            </div>
            <h3 class="text-2xl font-bold text-ink"><?php echo esc_html( $serv['titulo'] ); ?></h3>
            <p class="text-ink-muted leading-relaxed"><?php echo esc_html( $serv['descripcion'] ); ?></p>
            <?php if ( $serv['lista'] ) : ?>
            <ul class="space-y-3">
              <?php foreach ( $serv['lista'] as $li ) : ?>
              <li class="flex items-center gap-3 text-sm text-ink-muted">
                <span class="w-5 h-5 rounded-full bg-brand-light flex items-center justify-center flex-shrink-0">
                  <i class="fa-solid fa-check text-brand" style="font-size:9px;"></i>
                </span>
                <?php echo esc_html( $li['item'] ); ?>
              </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <a href="<?php echo esc_url( $serv['cta_url'] ?: '#contacto' ); ?>" class="inline-flex items-center gap-2 text-brand font-semibold text-sm hover:text-brand-dark transition-colors service-cta">
              <?php echo esc_html( $serv['cta_texto'] ?: 'Consultar disponibilidad' ); ?> <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
          </div>
          <div class="<?php echo $is_left ? 'order-1 lg:order-2' : ''; ?> service-img-wrap rounded-2xl overflow-hidden h-80 lg:h-[420px]">
            <img src="<?php echo esc_url( $serv['imagen'] ? $serv['imagen']['url'] : '' ); ?>" alt="<?php echo esc_attr( $serv['titulo'] ); ?>" class="service-img w-full h-full object-cover object-center" />
          </div>
        </div>
        <?php endforeach; else : ?>

        <!-- Fallback estático -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center py-16 reveal">
          <div class="space-y-6 order-2 lg:order-1">
            <div class="flex items-center gap-5">
              <span class="font-display leading-none select-none" style="font-size:5.5rem; color: #EEF4FA;">01</span>
              <span class="inline-flex items-center px-3 py-1.5 rounded-full bg-brand-light text-brand text-xs font-semibold tracking-widest uppercase">Alquiler</span>
            </div>
            <h3 class="text-2xl font-bold text-ink">Alquiler de equipamiento</h3>
            <p class="text-ink-muted leading-relaxed">Ideal para recuperación post-operatoria, acompañamiento diario o necesidades temporales. Entrega rápida con instalación incluida.</p>
            <ul class="space-y-3">
              <li class="flex items-center gap-3 text-sm text-ink-muted"><span class="w-5 h-5 rounded-full bg-brand-light flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-check text-brand" style="font-size:9px;"></i></span>Entrega en 24 horas en AMBA</li>
              <li class="flex items-center gap-3 text-sm text-ink-muted"><span class="w-5 h-5 rounded-full bg-brand-light flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-check text-brand" style="font-size:9px;"></i></span>Instalación y capacitación sin cargo</li>
              <li class="flex items-center gap-3 text-sm text-ink-muted"><span class="w-5 h-5 rounded-full bg-brand-light flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-check text-brand" style="font-size:9px;"></i></span>Retiro incluido al finalizar</li>
            </ul>
            <a href="#contacto" class="inline-flex items-center gap-2 text-brand font-semibold text-sm hover:text-brand-dark transition-colors service-cta">Consultar disponibilidad <i class="fa-solid fa-arrow-right text-xs"></i></a>
          </div>
          <div class="order-1 lg:order-2 service-img-wrap rounded-2xl overflow-hidden h-80 lg:h-[420px]">
            <img src="<?php echo esc_url( $asset_uri ); ?>/servicio_alquiler.webp" alt="Alquiler" class="service-img w-full h-full object-cover object-center" />
          </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center py-16 reveal">
          <div class="service-img-wrap rounded-2xl overflow-hidden h-80 lg:h-[420px]">
            <img src="<?php echo esc_url( $asset_uri ); ?>/servicio_venta.webp" alt="Venta" class="service-img w-full h-full object-cover object-center" />
          </div>
          <div class="space-y-6">
            <div class="flex items-center gap-5">
              <span class="font-display leading-none select-none" style="font-size:5.5rem; color: #EEF4FA;">02</span>
              <span class="inline-flex items-center px-3 py-1.5 rounded-full bg-navy/8 text-navy text-xs font-semibold tracking-widest uppercase">Venta</span>
            </div>
            <h3 class="text-2xl font-bold text-ink">Venta de equipamiento</h3>
            <p class="text-ink-muted leading-relaxed">Equipos nuevos y certificados de las mejores marcas internacionales para el hogar o instituciones médicas.</p>
            <ul class="space-y-3">
              <li class="flex items-center gap-3 text-sm text-ink-muted"><span class="w-5 h-5 rounded-full bg-brand-light flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-check text-brand" style="font-size:9px;"></i></span>Marcas certificadas con garantía del fabricante</li>
              <li class="flex items-center gap-3 text-sm text-ink-muted"><span class="w-5 h-5 rounded-full bg-brand-light flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-check text-brand" style="font-size:9px;"></i></span>Asesoramiento personalizado</li>
              <li class="flex items-center gap-3 text-sm text-ink-muted"><span class="w-5 h-5 rounded-full bg-brand-light flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-check text-brand" style="font-size:9px;"></i></span>Financiación disponible en cuotas</li>
            </ul>
            <a href="#contacto" class="inline-flex items-center gap-2 text-brand font-semibold text-sm hover:text-brand-dark transition-colors service-cta">Consultar disponibilidad <i class="fa-solid fa-arrow-right text-xs"></i></a>
          </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center py-16 reveal">
          <div class="space-y-6 order-2 lg:order-1">
            <div class="flex items-center gap-5">
              <span class="font-display leading-none select-none" style="font-size:5.5rem; color: #EEF4FA;">03</span>
              <span class="inline-flex items-center px-3 py-1.5 rounded-full bg-red-50 text-red-600 text-xs font-semibold tracking-widest uppercase">Urgencias</span>
            </div>
            <h3 class="text-2xl font-bold text-ink">Respuesta rápida para urgencias</h3>
            <p class="text-ink-muted leading-relaxed">Si lo necesita hoy, coordinamos la entrega en el menor tiempo posible. Porque hay situaciones que no pueden esperar.</p>
            <ul class="space-y-3">
              <li class="flex items-center gap-3 text-sm text-ink-muted"><span class="w-5 h-5 rounded-full bg-brand-light flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-check text-brand" style="font-size:9px;"></i></span>Atención inmediata por WhatsApp o teléfono</li>
              <li class="flex items-center gap-3 text-sm text-ink-muted"><span class="w-5 h-5 rounded-full bg-brand-light flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-check text-brand" style="font-size:9px;"></i></span>Coordinación express de entrega</li>
              <li class="flex items-center gap-3 text-sm text-ink-muted"><span class="w-5 h-5 rounded-full bg-brand-light flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-check text-brand" style="font-size:9px;"></i></span>Cobertura de obra social gestionada en el momento</li>
            </ul>
            <a href="#contacto" class="inline-flex items-center gap-2 text-brand font-semibold text-sm hover:text-brand-dark transition-colors service-cta">Contactar ahora <i class="fa-solid fa-arrow-right text-xs"></i></a>
          </div>
          <div class="order-1 lg:order-2 service-img-wrap rounded-2xl overflow-hidden h-80 lg:h-[420px]">
            <img src="<?php echo esc_url( $asset_uri ); ?>/servicio_urgencias.webp" alt="Urgencias" class="service-img w-full h-full object-cover object-center" />
          </div>
        </div>

        <?php endif; ?>
      </div>
    </div>
  </section>


  <!-- ══════════════════════════════════════════
       PRODUCTOS
  ══════════════════════════════════════════ -->
  <section id="productos" class="w-full bg-surface py-24 pattern-dots">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4 reveal">
        <div>
          <span class="inline-block text-xs font-semibold tracking-widest text-brand uppercase mb-4">
            <?php echo esc_html( $prod_badge ?: 'Catálogo' ); ?>
          </span>
          <h2 class="text-3xl sm:text-4xl font-bold text-ink mb-2">
            <?php echo esc_html( $prod_titulo ?: 'Productos destacados' ); ?>
          </h2>
          <p class="text-ink-muted"><?php echo esc_html( $prod_subtitulo ?: 'Equipamiento médico certificado de las mejores marcas' ); ?></p>
        </div>
        <a href="#contacto" class="inline-flex items-center gap-2 text-sm font-semibold text-brand hover:text-brand-dark transition-colors flex-shrink-0">
          <?php echo esc_html( $prod_cta_texto ?: 'Ver catálogo completo' ); ?> <i class="fa-solid fa-arrow-right text-xs"></i>
        </a>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        <?php
        $prod_delays = [ '', 'reveal-d1', 'reveal-d2', 'reveal-d3' ];
        if ( $prod_items ) :
          foreach ( $prod_items as $pi => $prod ) :
            $delay = $prod_delays[ $pi % 4 ] ?? '';
            $badge_style = $prod['badge_estilo'] === 'popular'
              ? 'bg-white text-ink border border-edge'
              : 'bg-brand text-white';
        ?>
        <div class="product-card bg-white rounded-2xl overflow-hidden border border-edge reveal <?php echo esc_attr( $delay ); ?>">
          <div class="relative overflow-hidden h-56">
            <img
              src="<?php echo esc_url( $prod['imagen'] ? $prod['imagen']['url'] : '' ); ?>"
              alt="<?php echo esc_attr( $prod['titulo'] ); ?>"
              class="product-img w-full h-full object-cover object-center"
            />
            <?php if ( $prod['badge_texto'] ) : ?>
            <span class="absolute top-3 right-3 text-xs font-semibold px-3 py-1 rounded-full <?php echo esc_attr( $badge_style ); ?>">
              <?php echo esc_html( $prod['badge_texto'] ); ?>
            </span>
            <?php endif; ?>
          </div>
          <div class="p-5">
            <h3 class="font-bold text-ink mb-1"><?php echo esc_html( $prod['titulo'] ); ?></h3>
            <p class="text-xs text-ink-muted mb-4"><?php echo esc_html( $prod['specs'] ); ?></p>
            <div class="flex items-center justify-between">
              <span class="text-xs text-ink-muted">Alquiler / Venta</span>
              <a href="#contacto" class="inline-flex items-center gap-1 text-xs font-semibold text-brand hover:text-brand-dark transition-colors">
                <?php echo esc_html( $prod['cta_texto'] ?: 'Consultar precio' ); ?> <i class="fa-solid fa-arrow-right text-xs"></i>
              </a>
            </div>
          </div>
        </div>
        <?php endforeach; else : ?>

        <!-- Fallback estático -->
        <div class="product-card bg-white rounded-2xl overflow-hidden border border-edge reveal">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo esc_url( $asset_uri ); ?>/concentrador_oxigeno.webp" alt="Concentrador de Oxígeno" class="product-img w-full h-full object-cover object-center" />
            <span class="absolute top-3 right-3 bg-brand text-white text-xs font-semibold px-3 py-1 rounded-full">Disponible</span>
          </div>
          <div class="p-5">
            <h3 class="font-bold text-ink mb-1">Concentrador de Oxígeno</h3>
            <p class="text-xs text-ink-muted mb-4">10 litros/min · Tecnología alemana</p>
            <div class="flex items-center justify-between">
              <span class="text-xs text-ink-muted">Alquiler / Venta</span>
              <a href="#contacto" class="inline-flex items-center gap-1 text-xs font-semibold text-brand hover:text-brand-dark transition-colors">Consultar precio <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
        </div>
        <div class="product-card bg-white rounded-2xl overflow-hidden border border-edge reveal reveal-d1">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo esc_url( $asset_uri ); ?>/AutoCPAP.webp" alt="CPAP" class="product-img w-full h-full object-cover object-center" />
            <span class="absolute top-3 right-3 bg-white text-ink text-xs font-semibold px-3 py-1 rounded-full border border-edge">Popular</span>
          </div>
          <div class="p-5">
            <h3 class="font-bold text-ink mb-1">CPAP / Auto CPAP</h3>
            <p class="text-xs text-ink-muted mb-4">Con humidificador · Conectividad WiFi</p>
            <div class="flex items-center justify-between">
              <span class="text-xs text-ink-muted">Alquiler / Venta</span>
              <a href="#contacto" class="inline-flex items-center gap-1 text-xs font-semibold text-brand hover:text-brand-dark transition-colors">Consultar precio <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
        </div>
        <div class="product-card bg-white rounded-2xl overflow-hidden border border-edge reveal reveal-d2">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo esc_url( $asset_uri ); ?>/cama-ortopedica.webp" alt="Cama Ortopédica" class="product-img w-full h-full object-cover object-center" />
          </div>
          <div class="p-5">
            <h3 class="font-bold text-ink mb-1">Cama Ortopédica</h3>
            <p class="text-xs text-ink-muted mb-4">Eléctrica · 3 posiciones regulables</p>
            <div class="flex items-center justify-between">
              <span class="text-xs text-ink-muted">Alquiler / Venta</span>
              <a href="#contacto" class="inline-flex items-center gap-1 text-xs font-semibold text-brand hover:text-brand-dark transition-colors">Consultar precio <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
        </div>
        <div class="product-card bg-white rounded-2xl overflow-hidden border border-edge reveal reveal-d3">
          <div class="relative overflow-hidden h-56">
            <img src="<?php echo esc_url( $asset_uri ); ?>/silla_ruedas.webp" alt="Silla de Ruedas" class="product-img w-full h-full object-cover object-center" />
          </div>
          <div class="p-5">
            <h3 class="font-bold text-ink mb-1">Silla de Ruedas</h3>
            <p class="text-xs text-ink-muted mb-4">Plegable · Aluminio reforzado</p>
            <div class="flex items-center justify-between">
              <span class="text-xs text-ink-muted">Alquiler / Venta</span>
              <a href="#contacto" class="inline-flex items-center gap-1 text-xs font-semibold text-brand hover:text-brand-dark transition-colors">Consultar precio <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
        </div>

        <?php endif; ?>
      </div>
    </div>
  </section>


  <!-- ══════════════════════════════════════════
       OBRAS SOCIALES
  ══════════════════════════════════════════ -->
  <section id="obras-sociales" class="w-full bg-white py-24 pattern-grid">
    <div class="max-w-7xl mx-auto px-6">

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-start mb-14">

        <div class="reveal">
          <span class="inline-block text-xs font-semibold tracking-widest text-brand uppercase mb-5">
            <?php echo esc_html( $os_badge ?: 'Cobertura' ); ?>
          </span>
          <h2 class="font-display text-4xl sm:text-5xl text-ink leading-tight mb-6">
            <?php echo esc_html( $os_titulo ?: 'Trabajamos con su obra social' ); ?>
          </h2>
          <p class="text-ink-muted text-lg leading-relaxed mb-8">
            <?php echo esc_html( $os_subtitulo ?: 'Nos encargamos de toda la gestión. Usted solo avisa que necesita el equipo — nosotros hacemos el resto.' ); ?>
          </p>
          <a href="#contacto" class="inline-flex items-center gap-2 px-6 py-3 bg-brand text-white rounded-md font-semibold text-sm hover:bg-brand-dark transition-colors">
            <?php echo esc_html( $os_cta_texto ?: 'Verificar mi cobertura' ); ?>
            <i class="fa-solid fa-arrow-right text-xs"></i>
          </a>
        </div>

        <div class="divide-y divide-edge reveal reveal-d1">
          <?php
          $os_defaults = [
            [ 'titulo' => 'Sin papelerío',            'descripcion' => 'Nos ocupamos de toda la documentación y autorizaciones necesarias. Usted solo nos dice qué necesita.' ],
            [ 'titulo' => 'Entrega en 24–48 horas',   'descripcion' => 'Una vez autorizado, el equipo está en su casa al día siguiente hábil. Sin demoras innecesarias.' ],
            [ 'titulo' => 'Le explicamos su cobertura','descripcion' => 'Antes de cualquier trámite, le decimos exactamente qué cubre su plan y cuánto abona usted.' ],
          ];
          $os_list = $os_pasos ?: $os_defaults;
          foreach ( $os_list as $oi => $paso ) :
            $pad = $oi === 0 ? 'pb-8' : ( $oi === count($os_list)-1 ? 'pt-8' : 'py-8' );
          ?>
          <div class="flex items-start gap-6 <?php echo $pad; ?>">
            <span class="font-display text-5xl leading-none flex-shrink-0 mt-1" style="color: #D4E2EF;"><?php echo str_pad( $oi + 1, 2, '0', STR_PAD_LEFT ); ?></span>
            <div>
              <h3 class="font-bold text-ink mb-2"><?php echo esc_html( $paso['titulo'] ); ?></h3>
              <p class="text-sm text-ink-muted leading-relaxed"><?php echo esc_html( $paso['descripcion'] ); ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="marquee-wrap overflow-hidden py-4">
        <div class="marquee-track flex items-center gap-16 w-max">
          <img src="<?php echo esc_url( $asset_uri ); ?>/osde-logo.webp"          alt="OSDE"          class="h-10 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
          <img src="<?php echo esc_url( $asset_uri ); ?>/swiss-medical-logo.webp" alt="Swiss Medical" class="h-10 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
          <img src="<?php echo esc_url( $asset_uri ); ?>/galeno-logo.webp"        alt="Galeno"        class="h-10 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
          <img src="<?php echo esc_url( $asset_uri ); ?>/medife-logo.webp"        alt="Medifé"        class="h-10 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
          <img src="<?php echo esc_url( $asset_uri ); ?>/ioma-logo.webp"          alt="IOMA"          class="h-10 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
          <img src="<?php echo esc_url( $asset_uri ); ?>/pami-logo.webp"          alt="PAMI"          class="h-10 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
          <img src="<?php echo esc_url( $asset_uri ); ?>/osde-logo.webp"          alt="OSDE"          class="h-10 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
          <img src="<?php echo esc_url( $asset_uri ); ?>/swiss-medical-logo.webp" alt="Swiss Medical" class="h-10 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
          <img src="<?php echo esc_url( $asset_uri ); ?>/galeno-logo.webp"        alt="Galeno"        class="h-10 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
          <img src="<?php echo esc_url( $asset_uri ); ?>/medife-logo.webp"        alt="Medifé"        class="h-10 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
          <img src="<?php echo esc_url( $asset_uri ); ?>/ioma-logo.webp"          alt="IOMA"          class="h-10 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
          <img src="<?php echo esc_url( $asset_uri ); ?>/pami-logo.webp"          alt="PAMI"          class="h-10 object-contain opacity-60 hover:opacity-100 transition-opacity flex-shrink-0" />
        </div>
      </div>
    </div>
  </section>


  <!-- ══════════════════════════════════════════
       PROCESO
  ══════════════════════════════════════════ -->
<?php
$proc_imagen_fondo = get_field('proc_imagen_fondo');
?>

  <!-- ══════════════════════════════════════════
       PROCESO
  ══════════════════════════════════════════ -->
  <section id="proceso" class="relative overflow-hidden text-white py-24">
    <!-- Background image -->
    <?php if ( $proc_imagen_fondo ) : ?>
    <img
      src="<?php echo esc_url( $proc_imagen_fondo['url'] ); ?>"
      alt=""
      class="absolute inset-0 w-full h-full object-cover"
      style="object-position: center center;"
    />
    <?php else : ?>
    <img
      src="/assets/images/Gemini_Generated_Image_muickkmuickkmuic.png"
      alt=""
      class="absolute inset-0 w-full h-full object-cover"
      style="object-position: center center;"
    />
    <?php endif; ?>

    <div class="relative z-10 max-w-7xl mx-auto px-6">

      <div class="text-center mb-14 reveal">
        <span class="inline-block text-xs font-semibold tracking-widest text-accent uppercase mb-4">
          <?php echo esc_html( $proc_badge ?: 'Cómo funciona' ); ?>
        </span>
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
          <?php echo esc_html( $proc_titulo ?: 'Proceso simple y transparente' ); ?>
        </h2>
        <p class="text-white/60 text-lg max-w-xl mx-auto">
          <?php echo esc_html( $proc_subtitulo ?: 'Desde su consulta hasta la entrega del equipo, lo acompañamos en cada paso.' ); ?>
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <?php
        $proc_delays   = [ '', 'reveal-d1', 'reveal-d2', 'reveal-d3' ];
        $proc_defaults = [
          [ 'icono' => 'fa-headset',      'titulo' => 'Consulta inicial', 'descripcion' => 'Contáctenos por teléfono, WhatsApp o formulario. Analizamos su necesidad y lo asesoramos sin compromiso.', 'tiempo' => 'Mismo día' ],
          [ 'icono' => 'fa-file-invoice', 'titulo' => 'Cotización',       'descripcion' => 'Recibe una propuesta detallada con todas las opciones, coberturas y planes de pago disponibles.',          'tiempo' => '24 horas' ],
          [ 'icono' => 'fa-handshake',    'titulo' => 'Gestión',          'descripcion' => 'Gestionamos autorizaciones y toda la documentación con su obra social o prepaga.',                         'tiempo' => '24–48 horas' ],
          [ 'icono' => 'fa-truck-medical','titulo' => 'Entrega',          'descripcion' => 'Instalamos, configuramos y capacitamos para el uso correcto del equipo en su domicilio.',                  'tiempo' => 'Día pactado' ],
        ];
        $proc_list = $proc_pasos ?: $proc_defaults;
        foreach ( $proc_list as $pi => $paso ) :
          $delay     = $proc_delays[ $pi % 4 ] ?? '';
          $num_label = str_pad( $pi + 1, 2, '0', STR_PAD_LEFT );
          $is_last   = ( $pi === count($proc_list) - 1 );
        ?>
        <div class="process-card rounded-2xl reveal <?php echo esc_attr( $delay ); ?>"
             <?php if ( $is_last ) echo 'style="border-color: rgba(0,168,204,0.22) !important;"'; ?>>
          <div class="process-bg-number" <?php if ( $is_last ) echo 'style="color: rgba(0,168,204,0.06);"'; ?>>
            <?php echo esc_html( $num_label ); ?>
          </div>
          <div class="relative z-10 p-7">
            <div class="process-accent-line mb-6"></div>
            <div class="w-11 h-11 rounded-xl flex items-center justify-center mb-5"
                 style="background: rgba(0,168,204,<?php echo $is_last ? '0.18' : '0.12'; ?>); border: 1px solid rgba(0,168,204,<?php echo $is_last ? '0.30' : '0.22'; ?>);">
              <i class="fa-solid <?php echo esc_attr( $paso['icono'] ); ?> text-accent"></i>
            </div>
            <span class="text-xs font-semibold tracking-widest text-accent uppercase">Paso <?php echo esc_html( $num_label ); ?></span>
            <h3 class="font-bold text-white text-lg mt-1.5 mb-2.5"><?php echo esc_html( $paso['titulo'] ); ?></h3>
            <p class="text-white/55 text-sm leading-relaxed mb-6"><?php echo esc_html( $paso['descripcion'] ); ?></p>
            <div class="flex items-center gap-1.5">
              <i class="fa-regular fa-clock text-accent/60 text-xs"></i>
              <span class="text-xs text-white/35 font-medium"><?php echo esc_html( $paso['tiempo'] ); ?></span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <p class="text-center text-white/35 text-sm mt-10 reveal">
        ¿Dudas sobre el proceso?
        <a href="tel:<?php echo esc_attr( $proc_telefono ?: '08005553842' ); ?>" class="text-accent hover:text-white/90 transition-colors font-medium ml-1">
          Llámenos al <?php echo esc_html( $proc_telefono ?: '0800-555-ETICA' ); ?>
        </a>
      </p>
    </div>
  </section>


  <!-- ══════════════════════════════════════════
       TESTIMONIOS
  ══════════════════════════════════════════ -->
  <section id="testimonios" class="w-full bg-surface py-24 pattern-grid">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-14 reveal">
        <span class="inline-block text-xs font-semibold tracking-widest text-brand uppercase mb-4">
          <?php echo esc_html( $test_badge ?: 'Testimonios' ); ?>
        </span>
        <h2 class="font-display text-3xl sm:text-4xl text-ink mb-4">
          <?php echo esc_html( $test_titulo ?: 'Lo que dicen nuestros pacientes' ); ?>
        </h2>
        <p class="text-ink-muted max-w-xl mx-auto">
          <?php echo esc_html( $test_subtitulo ?: 'Más de 12.000 familias confiaron en ETICA para el cuidado de sus seres queridos.' ); ?>
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php
        $test_delays   = [ '', 'reveal-d1', 'reveal-d2' ];
        $test_defaults = [
          [ 'texto' => 'Llamé un martes por la tarde y al miércoles a la mañana ya tenía el concentrador de oxígeno instalado en casa de mi papá. La atención fue impecable, nos explicaron todo con paciencia.', 'nombre' => 'María González',   'iniciales' => 'MG', 'ciudad' => 'Buenos Aires', 'producto' => 'Concentrador de Oxígeno' ],
          [ 'texto' => 'Mi obra social cubre el alquiler del CPAP y ETICA gestionó todo. Ni me enteré del trámite. En tres días tenía el equipo y una sesión de capacitación de uso. Excelente servicio.',    'nombre' => 'Roberto Fernández', 'iniciales' => 'RF', 'ciudad' => 'Córdoba',       'producto' => 'CPAP Auto con humidificador' ],
          [ 'texto' => 'Le dieron el alta a mi mamá y en el hospital me recomendaron ETICA. Alquilamos la cama ortopédica y la silla de ruedas. Llegaron puntuales, los chicos instalaron todo y nos enseñaron a usarla.', 'nombre' => 'Ana Martínez', 'iniciales' => 'AM', 'ciudad' => 'Rosario', 'producto' => 'Cama ortopédica + Silla de ruedas' ],
        ];
        $test_list = $test_items ?: $test_defaults;
        foreach ( $test_list as $ti => $test ) :
          $delay = $test_delays[ $ti % 3 ] ?? '';
        ?>
        <div class="testimonial-card bg-white rounded-2xl p-7 border border-edge reveal <?php echo esc_attr( $delay ); ?>">
          <div class="flex items-center gap-1 mb-4">
            <?php for ( $s = 0; $s < 5; $s++ ) : ?>
            <i class="fa-solid fa-star text-amber-400 text-sm"></i>
            <?php endfor; ?>
          </div>
          <p class="text-ink-muted text-sm leading-relaxed mb-6">
            "<?php echo esc_html( $test['texto'] ); ?>"
          </p>
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-brand-light rounded-full flex items-center justify-center flex-shrink-0">
              <span class="text-brand font-bold text-sm"><?php echo esc_html( $test['iniciales'] ); ?></span>
            </div>
            <div>
              <p class="font-semibold text-ink text-sm"><?php echo esc_html( $test['nombre'] ); ?></p>
              <p class="text-xs text-ink-muted"><?php echo esc_html( $test['ciudad'] ); ?> · <?php echo esc_html( $test['producto'] ); ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


  <!-- ══════════════════════════════════════════
       CONTACTO
  ══════════════════════════════════════════ -->
  <section id="contacto" class="w-full bg-white py-24">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

        <div class="space-y-8 reveal">
          <div>
            <span class="inline-block text-xs font-semibold tracking-widest text-brand uppercase mb-4">
              <?php echo esc_html( $cont_badge ?: 'Contacto' ); ?>
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold text-ink mb-4">
              <?php echo wp_kses_post( $cont_titulo ?: 'Necesita equipamiento médico.<br/>Nosotros lo resolvemos.' ); ?>
            </h2>
            <p class="text-ink-muted text-lg leading-relaxed">
              <?php echo esc_html( $cont_subtitulo ?: 'Nuestro equipo está disponible para responder todas sus consultas. Respondemos en menos de 2 horas en horario comercial.' ); ?>
            </p>
          </div>

          <a href="<?php echo esc_url( $cont_whatsapp_url ?: 'https://wa.me/5491112345678?text=Hola%20ETICA%2C%20quiero%20información%20sobre%20equipamiento%20médico.' ); ?>"
             class="flex items-center gap-4 p-5 bg-[#25D366]/10 border border-[#25D366]/30 rounded-xl hover:bg-[#25D366]/15 transition-colors group">
            <div class="w-12 h-12 bg-[#25D366] rounded-full flex items-center justify-center flex-shrink-0">
              <i class="fa-brands fa-whatsapp text-white text-2xl"></i>
            </div>
            <div>
              <p class="font-bold text-ink"><?php echo esc_html( $cont_whatsapp_titulo ?: 'Escribir por WhatsApp' ); ?></p>
              <p class="text-sm text-ink-muted"><?php echo esc_html( $cont_whatsapp_subtitulo ?: 'La forma más rápida · Respuesta inmediata' ); ?></p>
            </div>
            <i class="fa-solid fa-arrow-right text-brand ml-auto group-hover:translate-x-1 transition-transform"></i>
          </a>

          <div class="space-y-5">
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 bg-surface rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                <i class="fa-solid fa-phone text-brand text-sm"></i>
              </div>
              <div>
                <p class="font-semibold text-ink text-sm mb-0.5">Línea principal</p>
                <p class="text-ink-muted text-sm"><?php echo esc_html( $cont_telefono ?: '0800-555-ETICA (38422)' ); ?></p>
                <p class="text-xs text-ink-muted mt-0.5"><?php echo esc_html( $cont_telefono_horario ?: 'Lunes a Viernes 8:00 – 20:00 hs · Sábados 9:00 – 13:00 hs' ); ?></p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 bg-surface rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                <i class="fa-solid fa-envelope text-brand text-sm"></i>
              </div>
              <div>
                <p class="font-semibold text-ink text-sm mb-0.5">Correo electrónico</p>
                <p class="text-ink-muted text-sm"><?php echo esc_html( $cont_email ?: 'info@eticamedica.com.ar' ); ?></p>
                <p class="text-xs text-ink-muted mt-0.5">Respuesta en 24 horas hábiles</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 bg-surface rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                <i class="fa-solid fa-location-dot text-brand text-sm"></i>
              </div>
              <div>
                <p class="font-semibold text-ink text-sm mb-0.5">Oficina central</p>
                <p class="text-ink-muted text-sm"><?php echo esc_html( $cont_direccion ?: 'Av. Corrientes 1234, CABA' ); ?></p>
                <p class="text-xs text-ink-muted mt-0.5"><?php echo esc_html( $cont_direccion_detalle ?: 'Buenos Aires, Argentina (C1043AAZ)' ); ?></p>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-surface rounded-2xl p-8 border border-edge reveal reveal-d1">
          <h3 class="text-xl font-bold text-ink mb-1"><?php echo esc_html( $cont_form_titulo ?: 'Envíenos su consulta' ); ?></h3>
          <p class="text-sm text-ink-muted mb-7"><?php echo esc_html( $cont_form_subtitulo ?: 'Completá el formulario y lo contactamos a la brevedad.' ); ?></p>
          <form class="space-y-5">
            <div>
              <label class="block text-sm font-medium text-ink mb-1.5">Nombre completo *</label>
              <input type="text" placeholder="Juan Pérez" class="w-full px-4 py-3 border border-edge bg-white rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-brand/30 focus:border-brand transition-colors" />
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-ink mb-1.5">Teléfono *</label>
                <input type="tel" placeholder="11 1234-5678" class="w-full px-4 py-3 border border-edge bg-white rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-brand/30 focus:border-brand transition-colors" />
              </div>
              <div>
                <label class="block text-sm font-medium text-ink mb-1.5">Email</label>
                <input type="email" placeholder="juan@email.com" class="w-full px-4 py-3 border border-edge bg-white rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-brand/30 focus:border-brand transition-colors" />
              </div>
            </div>
            <div>
              <label class="block text-sm font-medium text-ink mb-1.5">¿Qué necesita? *</label>
              <select class="w-full px-4 py-3 border border-edge bg-white rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-brand/30 focus:border-brand transition-colors text-ink-muted">
                <option value="">Seleccione una opción</option>
                <option>Alquiler de equipamiento</option>
                <option>Compra de equipamiento</option>
                <option>Consulta sobre obra social</option>
                <option>Urgencia — necesito el equipo hoy</option>
                <option>Información general</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-medium text-ink mb-1.5">Mensaje</label>
              <textarea rows="4" placeholder="Cuéntenos cómo podemos ayudarlo..." class="w-full px-4 py-3 border border-edge bg-white rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-brand/30 focus:border-brand transition-colors resize-none"></textarea>
            </div>
            <div class="flex items-start gap-3">
              <input type="checkbox" id="privacy" class="mt-0.5 accent-brand" />
              <label for="privacy" class="text-xs text-ink-muted leading-relaxed">
                Acepto la <a href="#" class="text-brand underline hover:text-brand-dark">política de privacidad</a> y autorizo el uso de mis datos para ser contactado.
              </label>
            </div>
            <button type="submit" class="w-full py-3.5 bg-brand text-white rounded-lg font-semibold text-sm hover:bg-brand-dark transition-colors">Enviar consulta</button>
          </form>
        </div>

      </div>
    </div>
  </section>


  <!-- ══════════════════════════════════════════
       FAQ
  ══════════════════════════════════════════ -->
  <section id="faq" class="w-full bg-surface py-24">
    <div class="max-w-4xl mx-auto px-6">
      <div class="text-center mb-12 reveal">
        <span class="inline-block text-xs font-semibold tracking-widest text-brand uppercase mb-4">
          <?php echo esc_html( $faq_badge ?: 'Preguntas frecuentes' ); ?>
        </span>
        <h2 class="text-3xl sm:text-4xl font-bold text-ink mb-4">
          <?php echo esc_html( $faq_titulo ?: 'Resolvemos sus dudas' ); ?>
        </h2>
        <p class="text-ink-muted max-w-xl mx-auto">
          <?php echo esc_html( $faq_subtitulo ?: 'Las preguntas más comunes de nuestros pacientes y sus familias.' ); ?>
        </p>
      </div>

      <div class="space-y-3">
        <?php
        $faq_defaults = [
          [ 'pregunta' => '¿Cuánto tiempo demora la entrega del equipo?',                      'respuesta' => 'En Capital Federal y Gran Buenos Aires la entrega se realiza en 24 horas hábiles. Para el interior del país, el tiempo es de 48 a 72 horas según la localidad. En casos urgentes contamos con servicio express — contáctenos directamente por WhatsApp.' ],
          [ 'pregunta' => '¿Qué documentación necesito para alquilar un equipo?',              'respuesta' => 'En general se requiere prescripción médica, DNI del paciente y credencial de obra social (si aplica). Nuestro equipo lo guía en cada caso y se encarga de gestionar las autorizaciones necesarias. Para compras privadas, solo se necesita el DNI y la forma de pago.' ],
          [ 'pregunta' => '¿Mi obra social cubre el alquiler de equipos?',                     'respuesta' => 'La mayoría de las obras sociales y prepagas cubre total o parcialmente el alquiler de equipamiento médico de alta complejidad (concentradores, CPAP, camas ortopédicas, etc.). Tenemos convenio con más de 45 obras sociales. Contáctenos para verificar su cobertura específica.' ],
          [ 'pregunta' => '¿Puedo devolver el equipo antes de que termine el contrato?',       'respuesta' => 'Sí. Nuestros contratos son flexibles. Puede devolver el equipo cuando ya no lo necesite, coordinando el retiro con nuestro equipo. Solo se abona el período efectivamente utilizado. El retiro no tiene costo adicional en AMBA.' ],
          [ 'pregunta' => '¿Qué garantía tienen los equipos?',                                 'respuesta' => 'Todos los equipos en venta cuentan con garantía del fabricante (mínimo 12 meses) y garantía adicional de ETICA. Los equipos de alquiler son revisados y sanitizados antes de cada entrega, con respaldo técnico durante todo el período de uso. Si un equipo presenta problemas, lo reemplazamos sin cargo.' ],
        ];
        $faq_list = $faq_items ?: $faq_defaults;
        foreach ( $faq_list as $fi => $faq ) :
        ?>
        <div class="faq-item bg-white rounded-xl border border-edge overflow-hidden reveal">
          <button class="w-full px-7 py-5 flex items-center justify-between text-left hover:bg-surface transition-colors">
            <span class="font-semibold text-ink pr-4"><?php echo esc_html( $faq['pregunta'] ); ?></span>
            <i class="fa-solid fa-chevron-down faq-chevron text-ink-muted text-sm"></i>
          </button>
          <div class="faq-answer">
            <p class="px-7 pb-5 text-sm text-ink-muted leading-relaxed"><?php echo esc_html( $faq['respuesta'] ); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


<?php get_footer(); ?>