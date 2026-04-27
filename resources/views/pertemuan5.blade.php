<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dell - Pertemuan 5</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CDN (menggantikan vendor lokal) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
      /* Warna & style dasar dari template Arsha */
      :root {
        --color-primary: #106eea;
        --color-primary-dark: #0d58be;
      }

      body { font-family: 'Open Sans', sans-serif; }

      #header {
        background: #37517e;
        padding: 15px 0;
      }

      .sitename { color: #fff; font-size: 1.5rem; font-weight: 700; margin: 0; }

      .navmenu ul { list-style: none; margin: 0; padding: 0; display: flex; gap: 20px; }
      .navmenu ul li a { color: rgba(255,255,255,0.7); text-decoration: none; font-weight: 600; font-size: 0.9rem; transition: 0.3s; }
      .navmenu ul li a:hover, .navmenu ul li a.active { color: #fff; }

      #hero {
        background: linear-gradient(135deg, #37517e 0%, #1a3a5c 100%);
        min-height: 80vh;
        display: flex;
        align-items: center;
        color: white;
        padding: 80px 0;
      }

      #hero h1 { font-size: 2.2rem; font-weight: 700; line-height: 1.3; margin-bottom: 20px; }
      #hero p { font-size: 1rem; color: rgba(255,255,255,0.8); }

      .btn-get-started {
        display: inline-block;
        background: var(--color-primary);
        color: #fff;
        padding: 12px 30px;
        border-radius: 4px;
        font-weight: 600;
        text-decoration: none;
        margin-right: 15px;
        transition: 0.3s;
      }

      .btn-get-started:hover { background: var(--color-primary-dark); color: #fff; text-decoration: none; }

      .btn-watch-video {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
      }

      .btn-watch-video:hover { color: rgba(255,255,255,0.8); text-decoration: none; }
      .btn-watch-video i { font-size: 1.5rem; }

      #why-us {
        background: #f3f5fa;
        padding: 60px 0;
      }

      #why-us h3 { font-size: 1.3rem; font-weight: 700; color: #37517e; margin-bottom: 15px; }
      #why-us p { color: #444; line-height: 1.7; }

      .hero-img img { max-width: 100%; border-radius: 8px; }

      .animated {
        animation: up-down 2s ease-in-out infinite alternate-reverse both;
      }

      @keyframes up-down {
        0% { transform: translateY(10px); }
        100% { transform: translateY(-10px); }
      }
    </style>
</head>

<body>
    <header id="header" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="#hero" class="d-flex align-items-center text-decoration-none">
                <h1 class="sitename">Dell</h1>
            </a>
            <nav class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#why-us">Feature</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main" style="padding-top: 70px;">

        <!-- Hero Section -->
        <section id="hero">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1>Technology built for you, your vision, your ambition and your story.</h1>
                        <p></p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#why-us" class="btn-get-started">Get Started</a>
                            <a href="https://visitstore.bio/dell?tab=ig" target="_blank" class="btn-watch-video">
                                <i class="bi bi-play-circle"></i>
                                <span>Visit Store</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img text-center">
                        {{-- Gambar laptop Dell (gunakan gambar dari unsplash karena asset lokal tidak tersedia) --}}
                        <img src="https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=700&q=80&auto=format&fit=crop"
                             class="img-fluid animated" alt="Dell Laptop" style="border-radius: 12px;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Us Section -->
        <section id="why-us">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-7 d-flex flex-column justify-content-center">
                        <div class="content px-xl-5">
                            <h3><span>"The XPS 14 is back and better than ever." - </span><strong>@zdnet_official</strong></h3>
                            <p>
                                XPS 14 reflects our renewed focus on thoughtful design and real world performance.
                                From a refined chassis to efficiency driven hardware choices, ZDNet highlights why
                                this generation represents a true return to form.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 text-center">
                        <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=600&q=80&auto=format&fit=crop"
                             class="img-fluid" alt="Dell XPS" style="border-radius: 8px;">
                    </div>
                </div>
            </div>
        </section>

    </main>

    <div class="container text-center py-4">
        <a href="{{ url('/') }}">← Kembali ke Home</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
