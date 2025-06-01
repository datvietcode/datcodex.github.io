
<!DOCTYPE html>
<html lang="en">
 <head>
  <style>
/* Khối chứa card chính */
.card-container {
  display: flex;
  flex-wrap: wrap;              /* Cho phép xuống dòng khi tràn */
  justify-content: flex-start;  /* Căn trái */
  align-items: flex-start;      /* Căn trên */
  gap: 20px;                    /* Khoảng cách giữa các card */
  padding: 20px;
  box-sizing: border-box;
}

/* Nút macOS */
.macos-buttons {
  position: absolute;
  top: 16px;
  left: 20px;
  display: flex;
  gap: 10px;
}
.macos-buttons .btn {
  width: 14px;
  height: 14px;
  border-radius: 50%;
}
.macos-buttons .red { background: #ff5f57; }
.macos-buttons .yellow { background: #ffbd2e; }
.macos-buttons .green { background: #28c840; }

/* Card trong suốt */
.card-glass {
  flex: 0 0 auto;  /* Không co giãn, giữ nguyên kích thước */
  width: 280px;
  border-radius: 15px;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
  color: white;
  font-family: 'Segoe UI', sans-serif;
  overflow: hidden;
  text-align: center;
  transition: transform 0.3s ease;
  padding-bottom: 20px;
  margin: 0;
   width: 280px;
  flex: 0 0 auto;               /* Không co giãn, không tự giãn rộng */
}

/* Hover hiệu ứng */
.card-glass:hover {
  transform: translateY(-5px);
}

/* Hình ảnh đầu card */
.card-glass img {
  width: 100%;
  height: 160px;
  object-fit: cover;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

/* Nội dung trong card */
.card-content {
  padding: 15px;
}

/* Tiêu đề */
.card-content h2 {
  font-size: 18px;
  margin: 10px 0;
}

/* Phiên bản */
.version-badge {
  display: inline-block;
  background: #007acc;
  padding: 4px 10px;
  border-radius: 8px;
  font-size: 13px;
  margin-bottom: 6px;
}

/* Thông tin cập nhật */
.update-info {
  font-size: 12px;
  opacity: 0.8;
  margin-top: 5px;
}

/* Trạng thái hoạt động */
.status {
  position: absolute;
  top: 10px;
  right: 10px;
  background: #00e676;
  color: #000;
  font-size: 12px;
  font-weight: bold;
  padding: 3px 8px;
  border-radius: 20px;
}

/* Nút tải xuống */
.btn.download {
  display: inline-block;
  margin-top: 12px;
  background: #00aaff;
  color: white;
  padding: 10px 20px;
  font-weight: bold;
  border-radius: 8px;
  text-decoration: none;
  transition: background 0.3s ease;
}
.btn.download:hover {
  background: #0077cc;
}


  </style>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
ĐẠT CODER
  </title>
  <link href="style.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="icon" href="favicon_io/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
 </head>
 <body>
    <div class="container">
<!-- Hamburger Menu -->
<div class="hamburger" id="hamburger">&#9776;</div>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
  <a href="/" class="menu-item"><i class="fas fa-home"></i> Home</a>
</div>
   <h1>
  ĐẠT CHANN
   </h1>
<div style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px); border-radius: 8px; padding: 4px;">
  <input
    placeholder="Tìm kiếm sản phẩm..."
    type="text"
    value=""
    style="background: transparent; border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 6px; color: white; padding: 6px 10px; outline: none;">
</div>

            <div class="filter-tags">
                <span class="filter-tag" data-filter="android"><i class="fab fa-android"></i>Android</span>
                <span class="filter-tag" data-filter="ios"><i class="fab fa-apple"></i>IOS</span>
                <span class="filter-tag" data-filter="lite"><i class="fas fa-rocket"></i>Lite</span>
                <span class="filter-tag" data-filter="pc"><i class="fab fa-windows"></i>PC</span>
                <span class="filter-tag active" data-filter="all"><i class="fas fa-globe"></i>All</span>
            </div>
           <section class="glass-card" id="android">
  <!-- Nút macOS -->
  <div class="macos-buttons">
    <div class="btn red"></div>
    <div class="btn yellow"></div>
    <div class="btn green"></div>
  </div>
<br>
  <!-- Card trưng bày -->
 <!-- Container bọc các card -->
<div class="card-container">
  <!-- Card 1 -->
  <div class="card-glass">
    <span class="status working">Working</span>
    <img alt="Fluxus" src="https://i.pinimg.com/736x/7e/ec/24/7eec2494707b5db214ac74fd9ea886c6.jpg">
    <div class="card-content">
      <h2>Triển lãm 3d</h2>
      <div class="version-info">
        <span class="version-badge">0đ</span>
        <div class="update-info">
          <i class="fas fa-sync-alt"></i>
          <span class="update-date">Updated: 01/06/2025</span>
        </div>
      </div>
      <a class="btn download" href="https://github.com/Zune-dev/Executor/releases/download/Fluxus/Fluxus-Official.apk">
        <i class="fas fa-download"></i> Download
      </a>
    </div>
  </div>

  <!-- Card 2 (copy nhiều thêm nếu muốn) -->
  <div class="card-glass">
    <span class="status working">Working</span>
    <img alt="Fluxus" src="https://i.pinimg.com/736x/7e/ec/24/7eec2494707b5db214ac74fd9ea886c6.jpg">
    <div class="card-content">
      <h2>Fluxus Official</h2>
      <div class="version-info">
        <span class="version-badge">2.667</span>
        <div class="update-info">
          <i class="fas fa-sync-alt"></i>
          <span class="update-date">Updated: 04/16/2025</span>
        </div>
      </div>
      <a class="btn download" href="https://github.com/Zune-dev/Executor/releases/download/Fluxus/Fluxus-Official.apk">
        <i class="fas fa-download"></i> Download
      </a>
    </div>
  </div>
</div>

</section>



</div>

      <section class="glass-card" id="android">
      <h3><i class="fab fa-android"></i> Android Executors</h3>
      <div class="download-container">
    <!-- Card 1 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Fluxus" src="favicon.png"/>
     <div class="card-content">
     <h2>
      Fluxus Official
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.667</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/16/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Fluxus/Fluxus-Official.apk';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 2 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Delta" src="deltax.png"/>
     <div class="card-content">
     <h2>
      Delta X Official
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.657</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/15/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/DeltaX/Delta-Android.apk';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 2.1 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Krnl" src="K.svg"/>
     <div class="card-content">
     <h2>
      Krnl Official
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.657</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/15/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Krnl/Krnl-Official.apk';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 3 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Codex" src="codex.png"/>
     <div class="card-content">
     <h2>
      Codex Official
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.667</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/15/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Codex/Codex-Official.apk';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 3.1 -->
    <div class="card disabled">
      <span class="status not-working">
       Not Working
      </span>
     <img alt="Cubix" src="cu.png"/>
     <div class="card-content">
     <h2>
      Cubix
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.661</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 03/01/2025</span>
                            </div>
                        </div>
  <a href="javascript:void(0)" class="btn download disabled">Wait Update...</a>
  <div class="disabled-message">Wait Update...</div>
    </div>
    </div>
    <!-- Card 4 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Trigon" src="tri.png"/>
     <div class="card-content">
     <h2>
      Trigon
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.667</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/15/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Trigon/Trigon.apk';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 5 -->
    <div class="card">
      <span class="status working">
      Working
      </span>
     <img alt="Evon" src="evon.png"/>
     <div class="card-content">
     <h2>
      Evon
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.667</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/16/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://evon.cc/android/dl-a/Evon.apk';"><i class="fas fa-download"></i>Download</a>
  </div>
    </div>
    <!-- Card 6 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Arceus" src="arcx.png"/>
     <div class="card-content">
     <h2>
      Arceus X Official
     </h2>
                        <div class="version-info">
                            <span class="version-badge">1.6.4</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/15/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/ArceusX/Arceus-X-NEO-Official.apk';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 7 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Vegax" src="ve.png"/>
     <div class="card-content">
     <h2>
      Vegax
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.667</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/15/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/1f0yt/community/releases/download/Vegax/Vega.X.apk';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 8 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Cryptic" src="cry.webp"/>
     <div class="card-content">
     <h2>
      Cryptic Official
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.667</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/15/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Cryptic/Cryptic-Official.apk';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 1.1 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Fluxus" src="favicon.png"/>
     <div class="card-content">
     <h2>
      Fluxus VNG
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.655</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 01/23/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Fluxus/Fluxus-VNG.apk';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 2.2 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Krnl" src="K.svg"/>
     <div class="card-content">
     <h2>
      Krnl VNG
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.667</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/17/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Krnl/Krnl-VNG.apk';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 9 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Codex" src="codex.png"/>
     <div class="card-content">
     <h2>
      Codex VNG
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.660</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 02/19/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Codex/Codex-VNG.apk';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 10 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Arceus" src="arcx.png"/>
     <div class="card-content">
     <h2>
      Arceus X VNG
     </h2>
                        <div class="version-info">
                            <span class="version-badge">1.5.4</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 02/17/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/ArceusX/Arceus-X-NEO-VNG.apk';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 10.1 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Cryptic" src="cry.webp"/>
     <div class="card-content">
     <h2>
      Cryptic VNG
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.659</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 02/17/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Cryptic/Cryptic-VNG.apk';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 11 -->
    <div class="card disabled">
      <span class="status not-working">
       Not Working
      </span>
     <img alt="Arceus" src="arad.webp"/>
     <div class="card-content">
     <h2>
      Arceus X Admin
     </h2>
                        <div class="version-info">
                            <span class="version-badge">1.1.0</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 01/22/2025</span>
                            </div>
                        </div>
  <a onclick="window.location.href='javascript:void(0)';" class="btn download disabled">Wait Update...</a>
  <div class="disabled-message">Wait Update...</div>
    </div>
   </div>
      </div>
      </section>

<video autoplay muted loop playsinline class="bg-video">
  <source src="https://cdn-cf-east.streamable.com/video/mp4/no4fzb.mp4?Expires=1746866972697&amp;Key-Pair-Id=APKAIEYUVEN4EVB2OKEQ&amp;Signature=PE8ALguGRp8MDOM217qYMOQ0xum-4XeL~~Z537yJc6SXxjkiBqZkU9x8zrIASdeOVrShgMoyRR~xm2b4BtmQzxX8V1s1afAmoIutZCjHMceH48eEFloOcN-VwObHtfWmBb5zI3ZJwwepEL~r8abdFMoj8tLVUf36BabCAwkGDTHMO7EvvcykF3Oq8RiqGoUK-3qH9TwQhf1VYO41Lz~P9tJTlDetBSMrHxCbG-Etf1eSdXZKv04LRLrVvxnKut6rk-fOt9Ic1Q7Cgf6yugy7EiytccUYT-cB2cB8ZjhyJTAXHX1HcQFnAip1uYzMU3Stxdl-mK9q32ULvhODa6100A__" type="video/mp4">
</video>

  </section>

         <section class="glass-card" id="ios">
                    <h3><i class="fab fa-apple"></i> Ios Executors</h3>
            <div class="download-container">
<!-- Card 12 -->
<div class="card disabled">
      <span class="status not-working">
      Not Working
      </span>
   <img alt="Apple" src="ap.webp"/>
 <div class="card-content">
  <h2>Appleware IOS</h2>
                        <div class="version-info">
                            <span class="version-badge">2.0.7</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 02/16/2025</span>
                            </div>
                        </div>
  <a href="javascript:void(0)" class="btn download disabled">Wait Update...</a>
  <div class="disabled-message">Wait Update...</div>
</div>
</div>
    <!-- Card 13 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Delta" src="deltax.png"/>
     <div class="card-content">
     <h2>
      Delta X IOS
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.668</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/15/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Delta/Delta-IOS.zip';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 14 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Codex" src="codex.png"/>
     <div class="card-content">
     <h2>
      Codex IOS
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.667</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/17/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Codex/Codex-IOS.ipa';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 15 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Arceus" src="arcx.png"/>
     <div class="card-content">
     <h2>
      Arceus X IOS
     </h2>
                        <div class="version-info">
                            <span class="version-badge">1.6.4</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/16/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/ArceusX/Arceus-X-NEO-IOS.ipa';"><i class="fas fa-download"></i>Download</a>
    </div>
    </div>
    <!-- Card 15.1 -->
    <div class="card">
      <span class="status working">
      Working
      </span>
     <img alt="Cryptic" src="cry.webp"/>
     <div class="card-content">
     <h2>
      Cryptic IOS
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.667</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/16/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Cryptic/Cryptic-IOS.ipa';"><i class="fas fa-download"></i> Download</a>
    </div>
   </div>
            </div>
  </section>

           <section class="glass-card" id="lite">
                    <h3><i class="fas fa-rocket"></i> Lite Executors</h3>
            <div class="download-container">
    <!-- Card 16 -->
    <div class="card disabled">
      <span class="status not-working">
       Not Working
      </span>
     <img alt="Arceus" src="arcx.png"/>
     <div class="card-content">
     <h2>
      Arceus X Lite
     </h2>
                        <div class="version-info">
                            <span class="version-badge">1.4.9</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 01/10/2025</span>
                            </div>
                        </div>
  <a onclick="window.location.href='javascript:void(0)';" class="btn download disabled">Wait Update...</a>
  <div class="disabled-message">Wait Update...</div>
    </div>
    </div>
    <!-- Card 17 -->
    <div class="card disabled">
      <span class="status not-working">
       Not Working
      </span>
     <img alt="Codex" src="codex.png"/>
     <div class="card-content">
     <h2>
      Codex Lite
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.654</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 01/10/2025</span>
                            </div>
                        </div>
  <a onclick="window.location.href='javascript:void(0)';" class="btn download disabled">Wait Update...</a>
  <div class="disabled-message">Wait Update...</div>
    </div>
    </div>
    <!-- Card 18 -->
    <div class="card disabled">
      <span class="status not-working">
       Not Working
      </span>
     <img alt="Delta" src="deltax.png"/>
     <div class="card-content">
     <h2>
      Delta X Lite
     </h2>
                        <div class="version-info">
                            <span class="version-badge">2.654</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 01/19/2025</span>
                            </div>
                        </div>
  <a onclick="window.location.href='javascript:void(0)';" class="btn download disabled">Wait Update...</a>
  <div class="disabled-message">Wait Update...</div>
    </div>
   </div>
            </div>
  </section>

         <section class="glass-card" id="pc">
                    <h3><i class="fab fa-windows"></i> Pc Executors</h3>
            <div class="download-container">
    <!-- Card 19 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Atlantis" src="Atl.png"/>
     <div class="card-content">
     <h2>
      Atlantis PC
     </h2>
                        <div class="version-info">
                            <span class="version-badge">3</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 03/13/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Atlantis/Atlantis.rar';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 20 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Xeno" src="xe.png"/>
     <div class="card-content">
     <h2>
      Xeno PC
     </h2>
                        <div class="version-info">
                            <span class="version-badge">1.1.8</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/17/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Xeno/Xeno.zip';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 23 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Swift" src="Sw.webp"/>
     <div class="card-content">
     <h2>
      Swift PC
     </h2>
                        <div class="version-info">
                            <span class="version-badge">1.2.4</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 04/18/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Swift/Swift.exe';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 21 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Nezur" src="Nezur.gif"/>
     <div class="card-content">
     <h2>
      Nezur PC
     </h2>
                        <div class="version-info">
                            <span class="version-badge">1.5</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 03/27/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Nezur/Nezur-Executor.zip';"><i class="fas fa-download"></i> Download</a>
    </div>
    </div>
    <!-- Card 22 -->
    <div class="card">
      <span class="status working">
       Working
      </span>
     <img alt="Ronix" src="X.png"/>
     <div class="card-content">
     <h2>
      Ronix PC
     </h2>
                        <div class="version-info">
                            <span class="version-badge">1</span>
                            <div class="update-info">
                                <i class="fas fa-sync-alt"></i>
                                <span class="update-date">Updated: 01/18/2025</span>
                            </div>
                        </div>
     <a class="btn download" onclick="window.location.href='https://github.com/Zune-dev/Executor/releases/download/Ronix/Ronix-Build.rar';"><i class="fas fa-download"></i> Download</a>
    </div>
   </div>
            </div>
  </section>

  </div>
<footer class="footer">
  <div class="rainbow-bar"></div>
  <div class="footer-content">
    <div class="copyright">© 2025 Lion's Community. All rights reserved.</div>
    <div class="social-links">
      <a href="https://www.facebook.com/hoangminhvu26/" target="_blank" class="social-link">
        <i class="fab fa-facebook"></i> Facebook
      </a>
      <a href="https://discord.gg/azX9JggcYD" target="_blank" class="social-link">
        <i class="fab fa-discord"></i> Discord
      </a>
    </div>
  </div>
</footer>
  <div id="updateModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Changelogs</h2>
      <h3 id="modalVersion"></h3>
      <div class="changelog-content" id="changelogContent">
      </div>
    </div>
  </div>
  <meta property="og:title" content="ĐẠT CHANN" />
  <meta property="og:description" content="© 2025 Website To Get The Executor You Want" />
  <meta property="og:image" content="https://cdn.discordapp.com/attachments/1224661891759083591/1330415097494896722/Lion.png?ex=678de51d&is=678c939d&hm=b717f8a5149c834d4e9f037fa485058f54815b35170d95803f1c0de027557c4c&" />
  <meta property="og:url" content="https://lion-executor.pages.dev/" />
  <script src="script.js">
  </script>
 </body>
</html>
