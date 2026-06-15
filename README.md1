<!DOCTYPE html>
<html lang="so">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WARIYE SOMALIA — Warka Maanta</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800;900&family=Source+Sans+3:wght@400;600;700&family=Oswald:wght@600;700&display=swap');

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --cas: #CC0000;
    --madow: #0A0A0A;
    --cad: #FFFFFF;
    --cirro: #F4F4F4;
    --xariiq: #E0E0E0;
    --text-muted: #555;
    --dahab: #B8860B;
  }

  body {
    font-family: 'Source Sans 3', sans-serif;
    background: var(--cad);
    color: var(--madow);
    font-size: 15px;
    line-height: 1.5;
  }

  /* ── TICKER ── */
  .ticker-wrap {
    background: var(--cas);
    color: var(--cad);
    font-family: 'Oswald', sans-serif;
    font-size: 13px;
    letter-spacing: .06em;
    overflow: hidden;
    white-space: nowrap;
    padding: 7px 0;
  }
  .ticker-inner {
    display: inline-block;
    animation: ticker 30s linear infinite;
  }
  .ticker-inner span { margin-right: 80px; }
  @keyframes ticker { from { transform: translateX(100vw); } to { transform: translateX(-100%); } }

  /* ── MASTHEAD ── */
  .masthead {
    border-bottom: 4px solid var(--madow);
    padding: 18px 0 12px;
    text-align: center;
    background: var(--cad);
  }
  .masthead-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px 10px;
    border-bottom: 1px solid var(--xariiq);
    font-size: 12px;
    color: var(--text-muted);
  }
  .masthead-logo {
    font-family: 'Playfair Display', serif;
    font-size: clamp(36px, 6vw, 72px);
    font-weight: 900;
    letter-spacing: -1px;
    line-height: 1;
    color: var(--madow);
    text-decoration: none;
    display: block;
    margin: 10px 0 4px;
  }
  .masthead-tagline {
    font-family: 'Oswald', sans-serif;
    font-size: 11px;
    letter-spacing: .25em;
    text-transform: uppercase;
    color: var(--cas);
    margin-bottom: 12px;
  }

  /* ── NAV ── */
  nav {
    background: var(--madow);
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 0;
  }
  nav a {
    font-family: 'Oswald', sans-serif;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--cad);
    text-decoration: none;
    padding: 11px 18px;
    transition: background .15s;
  }
  nav a:hover, nav a.active { background: var(--cas); }

  /* ── CONTAINER ── */
  .container { max-width: 1200px; margin: 0 auto; padding: 0 16px; }

  /* ── SECTION LABEL ── */
  .section-label {
    font-family: 'Oswald', sans-serif;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .2em;
    text-transform: uppercase;
    color: var(--cas);
    border-bottom: 2px solid var(--cas);
    padding-bottom: 4px;
    margin: 28px 0 16px;
    display: inline-block;
  }

  /* ── HERO GRID ── */
  .hero-section { margin-top: 20px; }
  .hero-grid {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    grid-template-rows: auto auto;
    gap: 2px;
    background: var(--madow);
  }
  .hero-main {
    grid-row: 1 / 3;
    position: relative;
    overflow: hidden;
  }
  .hero-main img, .card-img { width: 100%; height: 100%; object-fit: cover; display: block; }
  .hero-main { height: 480px; }
  .hero-sub { height: 234px; overflow: hidden; position: relative; }

  /* image placeholders with Somali photography feel */
  /* Real Unsplash photos — Somalia / Africa / Ocean themed */
  .img-mogadishu-1 {
    background: url('https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?w=900&auto=format&fit=crop') center/cover no-repeat;
  }
  .img-mogadishu-2 {
    background: url('https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=700&auto=format&fit=crop') center/cover no-repeat;
  }
  .img-mogadishu-3 {
    background: url('https://images.unsplash.com/photo-1559128010-7c1ad6e1b6a5?w=700&auto=format&fit=crop') center/cover no-repeat;
  }
  .img-mogadishu-4 {
    background: url('https://images.unsplash.com/photo-1504275107627-0c2ba7a43dba?w=700&auto=format&fit=crop') center/cover no-repeat;
  }
  .img-mogadishu-5 {
    background: url('https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=700&auto=format&fit=crop') center/cover no-repeat;
  }
  .img-mogadishu-6 {
    background: url('https://images.unsplash.com/photo-1489749798305-4fea3ae63d43?w=700&auto=format&fit=crop') center/cover no-repeat;
  }

  .card-svg {
    width: 100%; height: 100%;
    position: absolute; top: 0; left: 0;
    display: flex; align-items: center; justify-content: center;
  }
  .card-svg svg { opacity: .18; width: 60px; height: 60px; fill: white; }

  .card-overlay {
    position: absolute;
    bottom: 0; left: 0; right: 0;
    background: linear-gradient(transparent, rgba(0,0,0,.82));
    padding: 40px 14px 14px;
    color: var(--cad);
  }
  .card-tag {
    display: inline-block;
    background: var(--cas);
    font-family: 'Oswald', sans-serif;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .18em;
    text-transform: uppercase;
    padding: 2px 8px;
    margin-bottom: 6px;
  }
  .card-title {
    font-family: 'Playfair Display', serif;
    font-size: 22px;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 4px;
  }
  .hero-main .card-title { font-size: clamp(22px, 3vw, 34px); }
  .card-meta { font-size: 11px; opacity: .75; letter-spacing: .04em; }

  /* ── MAIN CONTENT LAYOUT ── */
  .content-area {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 30px;
    margin-top: 24px;
  }

  /* ── ARTICLE CARDS ── */
  .article-list { display: flex; flex-direction: column; gap: 0; }
  .article-card {
    display: grid;
    grid-template-columns: 160px 1fr;
    gap: 14px;
    padding: 16px 0;
    border-bottom: 1px solid var(--xariiq);
    cursor: pointer;
    transition: background .12s;
  }
  .article-card:hover { background: var(--cirro); margin: 0 -8px; padding: 16px 8px; }
  .article-card-img {
    width: 160px;
    height: 108px;
    flex-shrink: 0;
    position: relative;
    overflow: hidden;
  }
  .article-card-img .card-svg svg { width: 36px; height: 36px; }
  .article-card-body {}
  .article-card .card-tag { font-size: 9px; }
  .article-card-title {
    font-family: 'Playfair Display', serif;
    font-size: 17px;
    font-weight: 700;
    line-height: 1.3;
    margin: 5px 0 6px;
  }
  .article-card-excerpt { font-size: 13px; color: var(--text-muted); line-height: 1.4; }
  .article-card-meta { font-size: 11px; color: #999; margin-top: 6px; }

  /* ── SIDEBAR ── */
  .sidebar {}
  .sidebar-widget { margin-bottom: 28px; }
  .sidebar-widget-title {
    font-family: 'Oswald', sans-serif;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: .15em;
    text-transform: uppercase;
    background: var(--madow);
    color: var(--cad);
    padding: 8px 12px;
    margin-bottom: 0;
  }

  /* Most Read */
  .most-read-list { border: 1px solid var(--xariiq); border-top: none; }
  .most-read-item {
    display: flex;
    gap: 10px;
    padding: 10px 12px;
    border-bottom: 1px solid var(--xariiq);
    align-items: flex-start;
  }
  .most-read-num {
    font-family: 'Oswald', sans-serif;
    font-size: 28px;
    font-weight: 700;
    color: var(--xariiq);
    line-height: 1;
    min-width: 32px;
  }
  .most-read-text { font-size: 13px; font-weight: 600; line-height: 1.35; }

  /* Mini photo grid */
  .photo-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2px;
    background: var(--madow);
  }
  .photo-grid-item {
    height: 100px;
    position: relative;
    overflow: hidden;
    cursor: pointer;
  }
  .photo-grid-item .card-overlay { padding: 16px 8px 8px; }
  .photo-grid-item .card-title { font-size: 12px; }

  /* Weather */
  .weather-widget {
    border: 1px solid var(--xariiq);
    padding: 14px;
  }
  .weather-city {
    font-family: 'Oswald', sans-serif;
    font-size: 13px;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--text-muted);
  }
  .weather-temp { font-size: 40px; font-weight: 700; line-height: 1; }
  .weather-desc { font-size: 13px; color: var(--text-muted); margin-top: 4px; }
  .weather-row { display: flex; gap: 20px; margin-top: 10px; font-size: 12px; color: var(--text-muted); }

  /* ── FEATURE STRIP (magazine feel) ── */
  .feature-strip {
    background: var(--madow);
    color: var(--cad);
    margin-top: 30px;
    padding: 24px 0;
  }
  .feature-strip-inner {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0;
  }
  .feature-strip-item {
    padding: 0 20px;
    border-right: 1px solid rgba(255,255,255,.12);
  }
  .feature-strip-item:last-child { border-right: none; }
  .feature-strip-item .card-tag { background: var(--dahab); }
  .feature-strip-title {
    font-family: 'Playfair Display', serif;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.3;
    margin: 6px 0 8px;
  }
  .feature-strip-img {
    width: 100%;
    height: 90px;
    object-fit: cover;
    margin-bottom: 10px;
    position: relative;
    overflow: hidden;
  }

  /* ── FOOTER ── */
  footer {
    background: var(--madow);
    color: rgba(255,255,255,.6);
    margin-top: 40px;
    padding: 30px 0 20px;
    font-size: 12px;
  }
  .footer-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 16px;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 30px;
    margin-bottom: 20px;
  }
  .footer-logo {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    font-weight: 900;
    color: var(--cad);
    margin-bottom: 8px;
  }
  .footer-links { list-style: none; }
  .footer-links li { margin-bottom: 6px; }
  .footer-links a { color: rgba(255,255,255,.6); text-decoration: none; }
  .footer-links a:hover { color: var(--cas); }
  .footer-head {
    font-family: 'Oswald', sans-serif;
    font-size: 11px;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: var(--cad);
    margin-bottom: 10px;
  }
  .footer-bottom {
    border-top: 1px solid rgba(255,255,255,.1);
    padding-top: 14px;
    text-align: center;
    font-size: 11px;
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 900px) {
    .hero-grid { grid-template-columns: 1fr 1fr; }
    .hero-main { grid-row: 1; grid-column: 1 / 3; height: 320px; }
    .content-area { grid-template-columns: 1fr; }
    .feature-strip-inner { grid-template-columns: 1fr 1fr; }
    .footer-inner { grid-template-columns: 1fr 1fr; }
  }
  @media (max-width: 600px) {
    .hero-grid { grid-template-columns: 1fr; }
    .hero-main { grid-column: 1; height: 260px; }
    .hero-sub { height: 180px; }
    .article-card { grid-template-columns: 110px 1fr; }
    .article-card-img { width: 110px; height: 80px; }
    .feature-strip-inner { grid-template-columns: 1fr; }
    .footer-inner { grid-template-columns: 1fr; }
  }
</style>
</head>
<body>

<!-- BREAKING NEWS TICKER -->
<div class="ticker-wrap">
  <div class="ticker-inner">
    <span>🔴 WARIYE SOMALIA — Warka Caalamka iyo Soomaaliya</span>
    <span>📍 Muqdisho: Madaxweyne Xasan Sheekh oo la kulmay Ganacsato Talyaaniga · Cirro oo gaaray Israel</span>
    <span>⚽ Kubadda Cagta: Kooxda Soomaaliya waxay galantay heer cusub</span>
    <span>💰 Dhaqaalaha: Shillingka Soomaaliyeed wuxuu xoojiyay maalin kasta</span>
    <span>🌊 Badda Hindiya: Sahaminta cusub ee badda waxay soo jeedinaysaa macdan muhiim ah</span>
    <span>🎓 Waxbarashada: Jaamacadda Muqdisho waxay furantay qaybaha cusub</span>
  </div>
</div>

<!-- MASTHEAD -->
<header class="masthead">
  <div class="masthead-top container">
    <span>Isniinta, 15 Juun 2026</span>
    <span>Muqdisho · Hargeysa · Kismaayo · Caalamka</span>
    <span>Lacag La'aan · Xorta u Akhri</span>
  </div>
  <a class="masthead-logo" href="#">WARIYE SOMALIA</a>
  <div class="masthead-tagline">Warka Runta ah · Degdegga ah · Soomaaliyeed</div>
</header>

<!-- NAV -->
<nav>
  <a href="#" class="active">Guriga</a>
  <a href="#">Xogta Muqdisho</a>
  <a href="#">Siyaasadda</a>
  <a href="#">Dhaqaalaha</a>
  <a href="#">Caafimaadka</a>
  <a href="#">Kubadda Cagta</a>
  <a href="#">Fanka</a>
  <a href="#">Caalamka</a>
  <a href="#">Sawirro</a>
</nav>

<!-- HERO -->
<div class="container">
  <div class="hero-section">
    <div class="hero-grid">

      <!-- Main Hero -->
      <div class="hero-main img-mogadishu-1">
<div class="card-overlay">
          <div class="card-tag">⚡ Degdeg</div>
          <div class="card-title">Madaxweyne Xasan Sheekh oo la kulmay Ganacsato iyo Maalgashadayaal ka socda Talyaaniga</div>
          <div class="card-meta">Jowhar · 14 Juun 2026 · Muqdisho</div>
        </div>
      </div>

      <!-- Sub 1 -->
      <div class="hero-sub img-mogadishu-2">
<div class="card-overlay">
          <div class="card-tag">Siyaasadda</div>
          <div class="card-title">Madaxweynaha Somaliland Cirro oo gaaray Israel — Booqasho Taariikhiga ah</div>
          <div class="card-meta">Jowhar · 14 Juun 2026</div>
        </div>
      </div>

      <!-- Sub 2 -->
      <div class="hero-sub img-mogadishu-3">
<div class="card-overlay">
          <div class="card-tag">Caalamka</div>
          <div class="card-title">Trump: "Heshiiska Mareykanka iyo Iran waxaa la saxiixi doonaa Axada"</div>
          <div class="card-meta">Jowhar · 14 Juun 2026</div>
        </div>
      </div>

    </div>
  </div>

  <!-- MAIN + SIDEBAR -->
  <div class="content-area">

    <!-- ARTICLES -->
    <main>
      <div class="section-label">Wararka Manta</div>
      <div class="article-list">

        <!-- Article 1 — Jowhar real news -->
        <div class="article-card">
          <div class="article-card-img img-mogadishu-4"></div>
          <div class="article-card-body">
            <div class="card-tag">Siyaasadda</div>
            <div class="article-card-title">Xarunta Kennedy oo Magaca Trump ka saartay sharaftiisa iyo aqoonsigiisa</div>
            <div class="article-card-excerpt">Kahor waaberigii Washington, shaqaaluhu waxay si aamusnaan ah u bilaabeen inay magaca Madaxweynaha Mareykanka Donald Trump ka saaraan Xarunta Kennedy.</div>
            <div class="article-card-meta">🕐 Jowhar · 14 Juun 2026 · Caalamka</div>
          </div>
        </div>

        <!-- Article 2 -->
        <div class="article-card">
          <div class="article-card-img img-mogadishu-5"></div>
          <div class="article-card-body">
            <div class="card-tag">⚽ Ciyaaraha</div>
            <div class="article-card-title">Garsoore Cumar Cartan oo la siinayo Mushaarkiisa Koobka Adduunka</div>
            <div class="article-card-excerpt">Garsoore Cumar Cartan oo loo diiday inuu galo dalka Mareykanka si uu u dhex dhexaadiyo Koobka Adduunka, ayaa la siin doonaa lacagtiisa oo dhan.</div>
            <div class="article-card-meta">🕐 Jowhar · 14 Juun 2026 · Ciyaaraha</div>
          </div>
        </div>

        <!-- Article 3 -->
        <div class="article-card">
          <div class="article-card-img img-mogadishu-6"></div>
          <div class="article-card-body">
            <div class="card-tag">Muqdisho</div>
            <div class="article-card-title">Warbaahinta, Fanaaniin iyo Marti Sharaf — Xaflad Sagootin ah oo Villa Hirshabelle</div>
            <div class="article-card-excerpt">Xaflad sagootin oo weyn ah ayaa lagu qabtay Villa Hirshabelle kaas oo ay ka soo qeybgaleen warbaahinta, fanaaniinta, iyo marti sharaf badan.</div>
            <div class="article-card-meta">🕐 Jowhar · 14 Juun 2026 · Muqdisho</div>
          </div>
        </div>

        <!-- Article 4 -->
        <div class="article-card">
          <div class="article-card-img img-mogadishu-1"></div>
          <div class="article-card-body">
            <div class="card-tag">Caalamka</div>
            <div class="article-card-title">Mark Carney: Iran Ayaa Ugu Muhiimsan Ajendaha G7</div>
            <div class="article-card-excerpt">Ra'iisul Wasaaraha Canada Mark Carney ayaa sheegay in Iran ay tahay mawduuca ugu weyn ee la wadaagayo hoggaamiyeyaasha G7 kulankoodii ugu dambeeyay.</div>
            <div class="article-card-meta">🕐 Jowhar · 14 Juun 2026 · Caalamka</div>
          </div>
        </div>

        <!-- Article 5 -->
        <div class="article-card">
          <div class="article-card-img img-mogadishu-2"></div>
          <div class="article-card-body">
            <div class="card-tag">Siyaasadda</div>
            <div class="article-card-title">Trump: Heshiiska Mareykanka iyo Iran Saxiixid Axada</div>
            <div class="article-card-excerpt">Madaxweynaha Mareykanka Donald Trump ayaa xaqiijiyay in heshiis xasaasi ah oo u dhaxeeya Mareykanka iyo Iran lagu saxiixin doono Axada.</div>
            <div class="article-card-meta">🕐 Jowhar · 14 Juun 2026 · Siyaasadda</div>
          </div>
        </div>

      </div>
    </main>

    <!-- SIDEBAR -->
    <aside class="sidebar">

      <!-- Weather -->
      <div class="sidebar-widget">
        <div class="sidebar-widget-title">☀ Cimilada — Muqdisho</div>
        <div class="weather-widget">
          <div class="weather-city">Muqdisho, Soomaaliya</div>
          <div class="weather-temp">31°C</div>
          <div class="weather-desc">Qoraxda wanaagsan, dabaysha badda</div>
          <div class="weather-row">
            <span>💧 Roobka: 12%</span>
            <span>💨 Dabaysha: 18 km/h</span>
          </div>
        </div>
      </div>

      <!-- Most Read -->
      <div class="sidebar-widget">
        <div class="sidebar-widget-title">🔥 Ugu Badan La Akhriyay</div>
        <div class="most-read-list">
          <div class="most-read-item">
            <div class="most-read-num">1</div>
            <div class="most-read-text">Madaxweyne Xasan Sheekh oo la kulmay Ganacsato Talyaaniga</div>
          </div>
          <div class="most-read-item">
            <div class="most-read-num">2</div>
            <div class="most-read-text">Cirro oo gaaray Israel — Booqasho Taariikhiga ah</div>
          </div>
          <div class="most-read-item">
            <div class="most-read-num">3</div>
            <div class="most-read-text">Garsoore Cartan: Koobka Adduunka iyo Mushaarka</div>
          </div>
          <div class="most-read-item">
            <div class="most-read-num">4</div>
            <div class="most-read-text">Trump iyo Iran: Heshiis Axada la saxiixin doona</div>
          </div>
          <div class="most-read-item">
            <div class="most-read-num">5</div>
            <div class="most-read-text">Kennedy Center oo Magaca Trump ka saaray</div>
          </div>
        </div>
      </div>

      <!-- Photo Grid -->
      <div class="sidebar-widget">
        <div class="sidebar-widget-title">📸 Sawirrada Maanta</div>
        <div class="photo-grid">
          <div class="photo-grid-item img-mogadishu-3">
            <div class="card-overlay">
              <div class="card-title">Xeebta Liido Muqdisho</div>
            </div>
          </div>
          <div class="photo-grid-item img-mogadishu-4">
            <div class="card-overlay">
              <div class="card-title">Suuqa Bakaaraha</div>
            </div>
          </div>
          <div class="photo-grid-item img-mogadishu-5">
            <div class="card-overlay">
              <div class="card-title">Masaajidka Raas Dhuure</div>
            </div>
          </div>
          <div class="photo-grid-item img-mogadishu-6">
            <div class="card-overlay">
              <div class="card-title">Xarunta Waxbarashada</div>
            </div>
          </div>
        </div>
      </div>

    </aside>
  </div>
</div>

<!-- FEATURE STRIP (Magazine style) -->
<div class="feature-strip">
  <div class="container">
    <div class="feature-strip-inner">

      <div class="feature-strip-item">
        <div class="feature-strip-img img-mogadishu-1" style="position:relative;border-radius:2px;overflow:hidden;">
          
        </div>
        <div class="card-tag">Gaar</div>
        <div class="feature-strip-title">Soomaalida Adduunka: Xusuus & Horumarka</div>
      </div>

      <div class="feature-strip-item">
        <div class="feature-strip-img img-mogadishu-2" style="position:relative;border-radius:2px;overflow:hidden;">
          
        </div>
        <div class="card-tag">Kulanka</div>
        <div class="feature-strip-title">Hooyooyinka Somali: Nolol & Murti</div>
      </div>

      <div class="feature-strip-item">
        <div class="feature-strip-img img-mogadishu-3" style="position:relative;border-radius:2px;overflow:hidden;">
          
        </div>
        <div class="card-tag">Sayniska</div>
        <div class="feature-strip-title">Qiiradda Teknoolajiyadda: AI iyo Soomaaliya</div>
      </div>

      <div class="feature-strip-item">
        <div class="feature-strip-img img-mogadishu-4" style="position:relative;border-radius:2px;overflow:hidden;">
          
        </div>
        <div class="card-tag">Dalxiiska</div>
        <div class="feature-strip-title">Meelaha Quruxda Badan ee Soomaaliya</div>
      </div>

    </div>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div>
      <div class="footer-logo">WARIYE</div>
      <p>Wariye Somalia waa xafiis wariye madax-bannaan oo ku xidhan runta, xaqiiqda, iyo xornimada saxaafadda Soomaaliyeed.</p>
    </div>
    <div>
      <div class="footer-head">Mawduucyada</div>
      <ul class="footer-links">
        <li><a href="#">Muqdisho</a></li>
        <li><a href="#">Siyaasadda Qaranka</a></li>
        <li><a href="#">Dhaqaalaha</a></li>
        <li><a href="#">Caafimaadka</a></li>
        <li><a href="#">Kubadda Cagta</a></li>
        <li><a href="#">Fanka Soomaaliyeed</a></li>
      </ul>
    </div>
    <div>
      <div class="footer-head">Xiriir</div>
      <ul class="footer-links">
        <li><a href="#">wariyelive@gmail.com</a></li>
        <li><a href="#">+252 61 000 0000</a></li>
        <li><a href="#">Xarunta Wariye, Muqdisho</a></li>
        <li style="margin-top:12px"><a href="#">Twitter / X</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Telegram</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom container">
    © 2026 Wariye Somalia. Xuquuqda oo dhan way xafidan yihiin. · Warka Runta ah · Soomaaliya Horumarsanaan
  </div>
</footer>

</body>
</html>
