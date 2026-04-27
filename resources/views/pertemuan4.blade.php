<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select a Plan - 5026241039</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    * { box-sizing: border-box; }

    body {
      background-color: #f0f0f0;
      font-family: 'Lato', sans-serif;
      min-height: 100vh;
      padding: 60px 20px;
    }

    .hero-section {
      background-color: #ffffff;
      text-align: center;
      margin-bottom: 40px;
      border-radius: 4px;
      overflow: hidden;
    }

    .hero-banner {
      width: 100%;
      height: 220px;
      object-fit: cover;
      object-position: center 50%;
      display: block;
    }

    .hero-text { padding: 50px 40px 56px; }

    .hero-section h1 {
      font-family: 'Montserrat', sans-serif;
      font-weight: 400;
      font-size: 2.4rem;
      color: #3a3a3a;
      margin-bottom: 18px;
      letter-spacing: 0.5px;
    }

    .hero-section p {
      font-size: 0.9rem;
      color: #5c7080;
      line-height: 1.7;
      max-width: 400px;
      margin: 0 auto;
    }

    .pricing-wrapper { max-width: 900px; margin: 0 auto; }

    .pricing-card {
      background-color: #ffffff;
      border: none;
      border-radius: 4px;
      overflow: visible;
      position: relative;
      padding-bottom: 30px;
      margin-bottom: 20px;
    }

    .pricing-card .card-header-bar {
      padding: 14px 20px;
      text-align: center;
      font-family: 'Montserrat', sans-serif;
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: #ffffff;
      border-radius: 4px 4px 0 0;
    }

    .card-header-personal { background-color: #f5c518; }
    .card-header-pro { background-color: #6ecb98; }
    .card-header-business { background-color: #f5c518; }

    .card-img-wrap { width: 100%; height: 150px; overflow: hidden; }
    .card-img-wrap img { width: 100%; height: 100%; object-fit: cover; object-position: center; display: block; }

    .popular-badge { position: absolute; top: -34px; left: 0; right: 0; text-align: center; z-index: 5; }
    .popular-badge span {
      background-color: #6ecb98;
      color: #ffffff;
      font-family: 'Montserrat', sans-serif;
      font-size: 0.65rem;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      padding: 6px 30px;
      border-radius: 3px 3px 0 0;
      display: inline-block;
    }

    .price-block { text-align: center; padding: 30px 20px 24px; border-bottom: 1px solid #e8f0f5; }
    .price-block .currency { font-family: 'Montserrat', sans-serif; font-size: 1rem; font-weight: 500; color: #6ecb98; vertical-align: top; margin-top: 14px; display: inline-block; line-height: 1; }
    .price-block .amount { font-family: 'Montserrat', sans-serif; font-size: 4rem; font-weight: 300; color: #2d3e50; line-height: 1; display: inline-block; }
    .price-block .period { font-family: 'Montserrat', sans-serif; font-size: 0.75rem; font-weight: 600; color: #f5c518; vertical-align: bottom; margin-bottom: 8px; display: inline-block; }

    .feature-list { padding: 0; margin: 0; list-style: none; }
    .feature-list li { text-align: center; padding: 14px 20px; font-size: 0.82rem; color: #4a6278; border-bottom: 1px solid #edf4f9; }
    .feature-list li span.highlight { font-weight: 700; color: #2d3e50; }

    .cta-wrapper { padding: 24px 24px 0; text-align: center; }

    .btn-your-plan {
      display: block; width: 100%; padding: 12px;
      background-color: #ddeef8; color: #2980b9;
      font-family: 'Montserrat', sans-serif; font-size: 0.68rem; font-weight: 700;
      letter-spacing: 2px; text-transform: uppercase;
      border: 2px solid #2980b9; border-radius: 3px; cursor: default;
    }

    .btn-upgrade {
      display: block; width: 100%; padding: 12px;
      background-color: #f5c518; color: #ffffff;
      font-family: 'Montserrat', sans-serif; font-size: 0.68rem; font-weight: 700;
      letter-spacing: 2px; text-transform: uppercase;
      border: none; border-radius: 3px; cursor: pointer;
      transition: background-color 0.2s ease; text-decoration: none;
    }

    .btn-upgrade:hover { background-color: #e0b300; color: #ffffff; text-decoration: none; }

    .col-side { padding-top: 34px; }
    .col-professional { padding-top: 0; }
    .pricing-card.card-pro { box-shadow: 0 6px 30px rgba(0,0,0,0.12); }

    @media (max-width: 767px) {
      body { padding: 30px 15px; }
      .hero-section h1 { font-size: 1.8rem; }
      .col-side { padding-top: 0; }
      .col-professional { padding-top: 44px; }
    }
  </style>
</head>

<body>

  <div class="container-fluid" style="max-width: 1100px; margin: 0 auto;">

    <div class="row">
      <div class="col-12">
        <div class="hero-section">
          <img class="hero-banner"
            src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=1200&q=80&auto=format&fit=crop"
            alt="CloudNest Platform">
          <div class="hero-text">
            <h1>Select a plan.</h1>
            <p>
              Temukan paket yang paling sesuai dengan kebutuhan Anda.
              Mulai dari paket personal hingga enterprise — semua tersedia
              dengan harga terbaik dan fitur lengkap.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row pricing-wrapper justify-content-center mx-auto align-items-start">

      <!-- PERSONAL -->
      <div class="col-md-4 col-sm-12 mb-4 col-side">
        <div class="pricing-card">
          <div class="card-header-bar card-header-personal">Personal</div>
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=600&q=80&auto=format&fit=crop" alt="Personal Plan">
          </div>
          <div class="price-block">
            <span class="currency">$</span>
            <span class="amount">50</span>
            <span class="period">/MO</span>
          </div>
          <ul class="feature-list">
            <li><span class="highlight">Free</span> akses artikel dasar</li>
            <li><span class="highlight">Unlimited</span> penyimpanan cloud</li>
            <li><span class="highlight">Unlimited</span> bandwidth transfer</li>
            <li><span class="highlight">2x</span> backup harian otomatis</li>
            <li><span class="highlight">100x</span> permintaan API per hari</li>
          </ul>
          <div class="cta-wrapper">
            <button class="btn-your-plan">Your Plan</button>
          </div>
        </div>
      </div>

      <!-- PROFESSIONAL (Popular) -->
      <div class="col-md-4 col-sm-12 mb-4 col-professional">
        <div class="pricing-card card-pro" style="position: relative;">
          <div class="popular-badge"><span>Popular</span></div>
          <div class="card-header-bar card-header-pro">Professional</div>
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80&auto=format&fit=crop" alt="Professional Plan">
          </div>
          <div class="price-block">
            <span class="currency">$</span>
            <span class="amount">100</span>
            <span class="period">/MO</span>
          </div>
          <ul class="feature-list">
            <li><span class="highlight">Free</span> akses semua artikel premium</li>
            <li><span class="highlight">Unlimited</span> penyimpanan cloud</li>
            <li><span class="highlight">Unlimited</span> bandwidth transfer</li>
            <li><span class="highlight">2x</span> backup harian otomatis</li>
            <li><span class="highlight">100x</span> permintaan API per hari</li>
          </ul>
          <div class="cta-wrapper">
            <a href="#" class="btn-upgrade">Upgrade</a>
          </div>
        </div>
      </div>

      <!-- BUSINESS -->
      <div class="col-md-4 col-sm-12 mb-4 col-side">
        <div class="pricing-card">
          <div class="card-header-bar card-header-business">Business</div>
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80&auto=format&fit=crop" alt="Business Plan">
          </div>
          <div class="price-block">
            <span class="currency">$</span>
            <span class="amount">225</span>
            <span class="period">/MO</span>
          </div>
          <ul class="feature-list">
            <li><span class="highlight">Free</span> akses semua fitur enterprise</li>
            <li><span class="highlight">Unlimited</span> penyimpanan cloud</li>
            <li><span class="highlight">Unlimited</span> bandwidth transfer</li>
            <li><span class="highlight">2x</span> backup harian otomatis</li>
            <li><span class="highlight">100x</span> permintaan API per hari</li>
          </ul>
          <div class="cta-wrapper">
            <a href="#" class="btn-upgrade">Upgrade</a>
          </div>
        </div>
      </div>

    </div>

    <div style="text-align: center; margin-top: 32px; padding: 20px 0; font-size: 0.85rem; color: #4a6278;">
      Semua paket sudah termasuk <strong>SSL gratis</strong> &amp; <strong>support 24/7</strong>.
      &nbsp;|&nbsp;
      Butuh paket custom? <a href="#" style="color: #6ecb98; font-weight: 600; text-decoration: none;">Hubungi tim kami &rarr;</a>
    </div>

    <p class="text-center mt-3"><a href="{{ url('/') }}">← Kembali ke Home</a></p>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
