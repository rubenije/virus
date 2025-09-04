<?php 
  $time = date("His");
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VIRUS — Mutvndo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.min.css?<?php echo $time; ?>" rel="stylesheet">

  <style>
    :root{
      --virus-red:#c90a2b;
      --virus-black:#111;
    }
    body{
      font-family: system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif;
      color:#111;
      min-height:100dvh;
      padding-bottom:110px; /* espacio para footer fijo */
      overflow-x:hidden;
      background:#fff;
    }
    /* Header/Corner ribbon */
    .virus-header{
      position:relative;
      height:110px;
    }
    .virus-header .corner-bg{
      position:absolute;
      top:0; right:0;
      width:min(560px, 60vw);
      height:110px;
      background:url("assets/images/header.png") no-repeat right top / cover;
      pointer-events:none;
    }
    .virus-topbar{
      position:absolute;
      top:12px; right:18px;
      display:flex; align-items:center; gap:10px;
      color:#fff; font-size:.9rem;
    }
    .virus-topbar a{ display:inline-flex; align-items:center; }
    .virus-topbar img{ width:28px; height:28px; margin-left:6px; }

    /* Logo + menú */
    .virus-nav{
      margin-top:18px;
    }
    .virus-logo{
      max-width:260px;
      height:auto;
    }
    .virus-tabs{
      display:flex; justify-content:center; gap:14px;
      margin-top:18px;
      flex-wrap:wrap;
    }
    .virus-tab{
      border:2px solid var(--virus-red);
      border-radius:999px;
      padding:.35rem 1.1rem;
      text-transform:uppercase;
      font-weight:700; letter-spacing:.5px;
      color:var(--virus-red);
      background:#fff;
    }
    .virus-tab.active{ 
      background:var(--virus-red); 
      color:#fff;
    }

    /* Hero */
    .hero{
      text-align:center;
      margin-top:28px;
    }
    .hero h2{
      font-weight:700; font-size:1.8rem; margin-bottom:8px;
    }
    .mut-title{
      font-weight:800;
      font-size:clamp(2.2rem, 6vw, 4rem);
      letter-spacing:2px;
      color:var(--virus-red);
      line-height:1.05;
    }
    .mut-title .alt{
      color:#000;
    }
    .hero p{
      max-width:520px; margin:14px auto 0; color:#444; font-size:1.05rem;
    }

    /* CTAs */
    .cta-wrap{
      margin-top:36px;
      display:flex; justify-content:center; gap:14px; flex-wrap:wrap;
    }
    .cta-wrap img{
      height:44px; width:auto;
    }
    .agenda{
      text-align:center; margin-top:22px;
    }
    .agenda h3{ font-weight:800; font-size:2rem; margin:0; letter-spacing:.5px;}
    .agenda small{ display:block; color:#555; margin-top:2px; }

    /* Footer fijo */
    .virus-footer{
      position:fixed;
      left:0; right:0; bottom:0;
      z-index:1030;
      background:#fff;
      border-top:1px solid #eee;
    }
    .virus-footer .shape{
      height:60px;
      background:url("assets/images/footer.png") no-repeat left bottom / cover;
    }
    .virus-footer .info{
      display:flex; align-items:center; justify-content:center;
      gap:14px; padding:8px 12px 10px;
      font-size:.9rem; color:#777; text-align:center; flex-wrap:wrap;
    }
    .virus-footer .pin{ width:16px; height:16px; }

    /* Mobile tweaks */
    @media (max-width:576px){
      .virus-header{ height:90px; }
      .virus-header .corner-bg{ height:90px; }
      .virus-topbar{ font-size:.8rem; top:8px; right:10px; }
      .virus-logo{ max-width:200px; }
      .virus-tabs{ gap:8px; }
      .hero p{ padding:0 16px; }
      .virus-footer .info{ padding:6px 8px 12px; }
    }
  </style>
</head>
<body>

  <!-- Header con cinta roja y redes -->
  <header class="virus-header">
    <div class="corner-bg"></div>
    <div class="virus-topbar">
      <span>Sígueme y <strong>contágiate</strong></span>
      <a href="#" aria-label="LinkedIn">
        <img src="assets/images/ico-linkedin.png" alt="LinkedIn">
      </a>
      <a href="#" aria-label="Instagram">
        <img src="assets/images/ico-instagram.png" alt="Instagram">
      </a>
    </div>
  </header>

  <!-- Logo + menú -->
  <div class="container virus-nav text-center">
    <img class="virus-logo" src="assets/images/logo-virus.png" alt="VIRUS — Ideas que contagian"><br/>
    <img class="menu-servicios" src="assets/images/menu-servicios.png" alt="Servicios">
  </div>

  <!-- Hero -->
  <main class="container hero">
    <h2>Nuestra web está</h2>
    <img class="mut-title" src="assets/images/txt-mutando.gif" alt="Mutvndo">
    <p>Pronto la verás renovada, fresca y más viral que nunca.</p>

    <section class="agenda">
      <h3>AGENDA</h3>
      <small>TU PRIMERA DOSIS</small>
    </section>

    <div class="cta-wrap">
      <a href="#" aria-label="Búscanos">
        <img src="assets/images/btn-buscanos.png" alt="Búscanos">
      </a>
      <a href="#" aria-label="Conversemos por WhatsApp">
        <img src="assets/images/btn-wsp.png" alt="Conversemos">
      </a>
      <a href="#" aria-label="Escríbenos">
        <img src="assets/images/btn-mail.png" alt="Escríbenos">
      </a>
    </div>

    <div class="mt-4">
      <a href="#" class="btn btn-link text-decoration-none fw-bold" style="color:var(--virus-red);">
        CONTÁCTANOS
      </a>
    </div>
  </main>

  <!-- Footer fijo -->
  <footer class="virus-footer">
    <div class="shape"></div>
    <div class="info">
      <img class="pin" src="assets/images/ico-gps.png" alt="">
      <span>Virus Publicidad · Coyancura 2241, oficina 92 · +56 9 9559 4250 · Santiago, Chile</span>
      <span class="d-none d-sm-inline">·</span>
      <span>Horario: Lunes 8:00–17:30 · Martes 9:00–18:30 · Miércoles 9:00–18:30 · Jueves 9:00–18:30 · Viernes 8:00–15:30</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>