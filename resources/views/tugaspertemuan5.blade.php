<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Glad2Glow | Linktree</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      min-height: 100vh;
      background-color: #ac8baa;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      font-family: 'Segoe UI', Arial, sans-serif;
      padding: 24px 12px 60px;
    }

    .linktree-card {
      background: #efc2ed;
      border-radius: 24px;
      width: 100%;
      max-width: 480px;
      padding: 24px 20px 36px;
      box-shadow: 0 8px 40px rgba(180, 80, 160, 0.12);
    }

    .top-bar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }

    .icon-btn {
      width: 40px; height: 40px; border-radius: 50%;
      border: 1.5px solid rgba(160, 120, 190, 0.35);
      background: rgba(255, 255, 255, 0.65);
      display: flex; align-items: center; justify-content: center; cursor: pointer;
    }

    .profile-section { display: flex; flex-direction: column; align-items: center; margin-bottom: 26px; }

    .avatar-wrapper {
      width: 82px; height: 82px; border-radius: 50%; overflow: hidden; margin-bottom: 12px;
      background: linear-gradient(135deg, #c8b8f0 0%, #e0c8ec 50%, #f0d8cc 100%);
      display: flex; align-items: center; justify-content: center;
    }

    .avatar-wrapper img { width: 100%; height: 100%; object-fit: cover; }
    .avatar-text { font-size: 11px; font-weight: 600; color: #8a72aa; }
    .profile-name { font-size: 19px; font-weight: 700; color: #ffffff; letter-spacing: 0.3px; }

    .link-list { display: flex; flex-direction: column; gap: 11px; }

    .link-item {
      background: rgba(255, 255, 255, 0.82);
      border: 1px solid rgba(210, 180, 230, 0.45);
      border-radius: 14px;
      display: flex; align-items: center;
      padding: 10px 14px;
      text-decoration: none; color: #6b6b6b;
      transition: background 0.15s, transform 0.1s;
    }

    .link-item:hover { background: rgba(255,255,255,0.96); transform: translateY(-1px); text-decoration: none; color: #6b6b6b; }

    .link-icon {
      width: 44px; height: 44px; border-radius: 10px; flex-shrink: 0;
      display: flex; align-items: center; justify-content: center;
      overflow: hidden; background: #fff;
    }

    .link-icon img { width: 40px; height: 40px; object-fit: contain; border-radius: 8px; }

    .link-label { flex: 1; text-align: center; font-size: 14.5px; font-weight: 400; color: #6b6b6b; letter-spacing: 0.1px; }
    .link-dots { width: 44px; font-size: 17px; color: #ccc; cursor: pointer; line-height: 1; text-align: right; flex-shrink: 0; }

    .join-btn-wrapper { display: flex; justify-content: center; margin-top: 36px; }

    .join-btn {
      background: #f2f2f2; border: 1.5px solid #d8d8d8; border-radius: 999px;
      padding: 11px 26px; font-size: 13.5px; font-weight: 500; color: #333;
      cursor: pointer; text-decoration: none; transition: background 0.15s;
    }

    .join-btn:hover { background: #e8e8e8; text-decoration: none; color: #333; }

    .footer-links { margin-top: 18px; text-align: center; font-size: 11.5px; color: #111111; }
    .footer-links a { color: #111111; text-decoration: none; margin: 0 4px; }
    .footer-links a:hover { text-decoration: underline; }

    .back-link { display: block; text-align: center; margin-top: 20px; font-size: 13px; color: #7a5a8a; }
    .back-link:hover { color: #5a3a6a; }
  </style>
</head>

<body>

  <div class="linktree-card">

    <!-- Top bar -->
    <div class="top-bar">
      <div class="icon-btn">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
          <line x1="12" y1="2" x2="12" y2="22" stroke="#7a5a8a" stroke-width="2.5" stroke-linecap="round"/>
          <line x1="2.34" y1="7" x2="21.66" y2="17" stroke="#7a5a8a" stroke-width="2.5" stroke-linecap="round"/>
          <line x1="21.66" y1="7" x2="2.34" y2="17" stroke="#7a5a8a" stroke-width="2.5" stroke-linecap="round"/>
        </svg>
      </div>
      <div class="icon-btn">
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none">
          <path d="M4 12v8a2 2 0 002 2h12a2 2 0 002-2v-8" stroke="#7a5a8a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <polyline points="16 6 12 2 8 6" stroke="#7a5a8a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <line x1="12" y1="2" x2="12" y2="15" stroke="#7a5a8a" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </div>
    </div>

    <!-- Profile -->
    <div class="profile-section">
      <div class="avatar-wrapper">
        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/mlogo/GLO-70051-c6735635-3221-47f3-9024-d9f2539f5e33.png"
          alt="Glad2Glow"
          onerror="this.style.display='none'; this.parentElement.innerHTML='<span class=\'avatar-text\'>Glad2Glow</span>'" />
      </div>
      <div class="profile-name">Glad2Glow</div>
    </div>

    <!-- Links -->
    <div class="link-list">

      <a href="#" class="link-item">
        <div class="link-icon">
          <img src="https://1.bp.blogspot.com/-2RvHz7nVs24/X4KITePNisI/AAAAAAAAHP0/ijvRhufAIEsmEJKcvAtV2FCPn12c6gm7wCLcBGAsYHQ/s649/ikon-tokopedia.png" alt="Tokopedia"
            onerror="this.onerror=null; this.src=''; this.parentElement.style.background='#42b549'; this.parentElement.innerHTML='<span style=\'color:white;font-weight:700;font-size:11px;\'>Toped</span>';" />
        </div>
        <span class="link-label">Shop at Tokopedia</span>
        <span class="link-dots">⋮</span>
      </a>

      <a href="#" class="link-item">
        <div class="link-icon">
          <img src="https://tse4.mm.bing.net/th/id/OIP.sAWZFwNIC_l9VDGnOzAjhwHaBz?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Sociolla"
            onerror="this.onerror=null; this.parentElement.style.background='#fff'; this.parentElement.innerHTML='<span style=\'color:#c84b8a;font-weight:700;font-size:11px;font-family:Georgia,serif;\'>sociolla</span>';" />
        </div>
        <span class="link-label">Shop at Sociolla</span>
        <span class="link-dots">⋮</span>
      </a>

      <a href="#" class="link-item">
        <div class="link-icon">
          <img src="https://freepnglogo.com/images/all_img/1701498708lazada-png-logo.png" alt="Lazada"
            onerror="this.onerror=null; this.parentElement.style.background='#0f146d'; this.parentElement.innerHTML='<span style=\'color:white;font-weight:900;font-size:12px;\'>Laz</span>';" />
        </div>
        <span class="link-label">Shop at Lazada</span>
        <span class="link-dots">⋮</span>
      </a>

      <a href="#" class="link-item">
        <div class="link-icon">
          <img src="https://www.nesabamedia.com/wp-content/uploads/2021/11/Blibli-APK-Logo-1.png" alt="Blibli"
            onerror="this.onerror=null; this.parentElement.style.background='#0095da'; this.parentElement.innerHTML='<span style=\'color:white;font-weight:700;font-size:11px;\'>Blibli</span>';" />
        </div>
        <span class="link-label">Shop at Blibli</span>
        <span class="link-dots">⋮</span>
      </a>

      <a href="#" class="link-item">
        <div class="link-icon">
          <img src="https://th.bing.com/th/id/R.6287255214805d04b927ee0c53c88f64?rik=Hajf3OR9ipXMdQ&riu=http%3a%2f%2ffreelogopng.com%2fimages%2fall_img%2f1656180674shopee-logo-transparent.png&ehk=9Uim1JMb9bW6YMwQi6SDKsI56jFiz6E4jvDwKPNcx8M%3d&risl=&pid=ImgRaw&r=0"
            alt="Shopee"
            onerror="this.onerror=null; this.parentElement.style.background='#ee4d2d'; this.parentElement.innerHTML='<span style=\'color:white;font-weight:700;font-size:13px;\'>S</span>';" />
        </div>
        <span class="link-label">Shop at Shopee Indonesia</span>
        <span class="link-dots">⋮</span>
      </a>

      <a href="#" class="link-item">
        <div class="link-icon">
          <img src="https://th.bing.com/th/id/R.6287255214805d04b927ee0c53c88f64?rik=Hajf3OR9ipXMdQ&riu=http%3a%2f%2ffreelogopng.com%2fimages%2fall_img%2f1656180674shopee-logo-transparent.png&ehk=9Uim1JMb9bW6YMwQi6SDKsI56jFiz6E4jvDwKPNcx8M%3d&risl=&pid=ImgRaw&r=0"
            alt="Shopee"
            onerror="this.onerror=null; this.parentElement.style.background='#ee4d2d'; this.parentElement.innerHTML='<span style=\'color:white;font-weight:700;font-size:13px;\'>S</span>';" />
        </div>
        <span class="link-label">Shop at Shopee Malaysia</span>
        <span class="link-dots">⋮</span>
      </a>

    </div>

    <div class="join-btn-wrapper">
      <a href="https://linktr.ee" target="_blank" class="join-btn">
        Join glad2glowofficial on Linktree
      </a>
    </div>

    <div class="footer-links">
      <a href="#">Cookie Preferences</a> •
      <a href="#">Report</a> •
      <a href="#">Privacy</a> •
      <a href="#">Explore</a>
    </div>

    <a href="{{ url('/') }}" class="back-link">← Kembali ke Home</a>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
