<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TelsCup - SMK Telekomunikasi Telesandi Bekasi</title>
  <link rel="preload" as="image" href="TelsCup_Logo.png">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="../TelsCup_Logo.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="../assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oxanium:wght@600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header">

    <div class="header-top">
      <div class="container">

        <div class="countdown-text">
          Will Start On Date! <span class="span skewBg">43</span> Days
        </div>

        <div class="social-wrapper">

          <p class="social-title">Follow us on :</p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="header-bottom skewBg" data-header>
      <div class="container">

        <a href="#" class="logo">TelsCup</a>

        <nav class="navbar" data-navbar>
          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="#" class="navbar-link skewBg" data-nav-link>Home</a>
            </li>

            <li class="navbar-item">
              <a href="#registrasi" class="navbar-link skewBg" data-nav-link>Registrasi</a>
            </li>

            <li class="navbar-item">
              <a href="#live" class="navbar-link skewBg" data-nav-link>Live</a>
            </li>

            <li class="navbar-item">
              <a href="#blog" class="navbar-link skewBg" data-nav-link>News</a>
            </li>

            <li class="navbar-item">
              <a href="#contact" class="navbar-link skewBg" data-nav-link>Contact</a>
            </li>

            <li class="navbar-item">
              <a href="setting.php" class="navbar-link skewBg" data-nav-link>Setting</a>
            </li>

          </ul>
        </nav>

        <div class="header-actions">

          <button class="search-btn" aria-label="open search" data-search-toggler>
            <ion-icon name="search-outline"></ion-icon>
          </button>

          <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
            <ion-icon name="menu-outline" class="menu"></ion-icon>
            <ion-icon name="close-outline" class="close"></ion-icon>
          </button>

        </div>

      </div>
    </div>

  </header>





  <!-- 
    - #SEARCH BOX
  -->

  <div class="search-container" data-search-box>

    <div class="input-wrapper">
      <input type="search" name="search" aria-label="search" placeholder="Search here..." class="search-field">

      <button class="search-submit" aria-label="submit search" data-search-toggler>
        <ion-icon name="search-outline"></ion-icon>
      </button>

      <button class="search-close" aria-label="close search" data-search-toggler></button>
    </div>

  </div>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="home"
        style="background-image: url('../assets/images/BG_1.png')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Lobby</p>

            <h1 class="h1 hero-title">
              Tels <span class="span">Cup</span>
            </h1>

            <p class="hero-text">
              SMK Telekomunikasi Telesandi Bekasi.
            </p>

            <button class="btn skewBg" onclick="redirectToRegistrasi()">Registrasi</button>
            
            <script>
              function redirectToRegistrasi() {
                  window.location = '#registrasi';
              }
          </script>

          </div>

          <figure class="hero-banner img-holder" style="--width: 700; --height: 700;">
            <img src="../assets/images/TelsCup_Logo.png" width="700" height="700" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #BRAND
      -->

      <section class="section brand" aria-label="brand">
        <div class="container">

          <ul class="has-scrollbar">

            <li class="brand-item">
              <img src="../assets/images/brand-1.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="../assets/images/brand-2.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="../assets/images/brand-3.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

          </ul>

        </div>
      </section>





      <div class="section-wrapper">

        <section class="section latest-game" aria-label="latest game" id="registrasi">
          <div class="container">

            <p class="section-subtitle">Tournament</p>

            <h2 class="h2 section-title">
              Regist<span class="span">ration</span>
            </h2>

            <ul class="has-scrollbar">

              <li class="scrollbar-item">
                <div class="latest-game-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="../assets/images/latest-game-1.png" width="400" height="470" loading="lazy"
                      alt="White Walker Daily" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Moba</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">Mobile Legends</a>
                    </h3>

                    <p class="card-price">
                      Entry Fee : <span class="span">Rp 100.000</span>
                    </p>

                    <a href="#" class="regs">
                      Registrasi
                    </a>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="latest-game-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="../assets/images/latest-game-2.png" width="400" height="470" loading="lazy"
                      alt="Hunter Killer II" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Battle Royale</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">Free Fire</a>
                    </h3>

                    <p class="card-price">
                      Entry Fee : <span class="span">Rp 100.000</span>
                    </p>

                    <a href="#" class="regs">
                      Registrasi
                    </a>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="latest-game-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="../assets/images/latest-game-3.png" width="400" height="470" loading="lazy"
                      alt="Cyberpunk Daily" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Sport</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">Futsal</a>
                    </h3>

                    <p class="card-price">
                      Entry Fee : <span class="span">Rp 100.000</span>
                    </p>

                    <a href="#" class="regs">
                      Registrasi
                    </a>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="latest-game-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="../assets/images/latest-game-4.png" width="400" height="470" loading="lazy"
                      alt="Cyberpunk Daily" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Sport</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">Volly</a>
                    </h3>

                    <p class="card-price">
                      Entry Fee : <span class="span">Rp 100.000</span>
                    </p>

                    <a href="#" class="regs">
                      Registrasi
                    </a>

                  </div>

                </div>
              </li>

            </ul>

          </div>
        </section>





        <!-- 
          - #LIVE MATCH
        -->

        <section class="section live-match" id="live" aria-label="live match">
          <div class="container">

            <h2 class="h2 section-title">
              Watch Live <span class="span">Match</span>
            </h2> 

            <?php
  include '../koneksi.php';

  $sql = "SELECT youtube_link FROM link WHERE id=1";
  $result = $conn->query($sql);


  if ($result->num_rows > 0) {
      // Ambil baris data
      $row = $result->fetch_assoc();
      $youtubeLink = $row["youtube_link"];

      // Membuat link YouTube yang valid
      $embeddedLink = "https://www.youtube.com/embed/" . $youtubeLink;
  } else {
      echo "Tidak ada hasil ditemukan.";
  }

  ?>
            <div style="text-align: center;">
              <div class="video-container">
                  <iframe width="800" height="470" loading="lazy" src="<?php echo $embeddedLink; ?>"
                          title="YouTube video player" frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                          allowfullscreen></iframe>
              </div>
          </div>

          </div>
        </section>
        <style>
          .video-container {
              position: relative;
              padding-bottom: 56.25%;
              padding-top: 30px;
              height: 0;
              overflow: hidden;
          }
          
          .video-container iframe,  
          .video-container object,  
          .video-container embed {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
          }
      </style>
      </div>

      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <h2 class="h2 section-title">
            Latest News & <span class="span">Articles</span>
          </h2>

          <p class="section-text">
            berikut adalah seluruh informasi terbaru dari telscup
          </p>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="../assets/images/blog-1.png" width="400" height="290" loading="lazy"
                    alt="Shooter Action Video" class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">Oktober 20, 2023</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">Mobile Legends</a>
                  </h3>

                  <p class="card-text">
                    Lomba Ml adalah lomba game online yang dimana dalam lomba ini ada 5 anggota tim inti dan 1 anggota
                    yang menjadi cadangan tim
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Read More</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="../assets/images/blog-2.png" width="400" height="290" loading="lazy" alt="The Walking Dead"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">Oktober 20, 2023</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">Free Fire</a>
                  </h3>

                  <p class="card-text">
                    Lomba Fire Fire adalah lomba game online yang berisi 4 anggota menjadi tim inti dan 1 anggota
                    sebagai cadangan tim
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Read More</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="../assets/images/blog-3.png" width="400" height="290" loading="lazy"
                    alt="Defense Of The Ancients" class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">Oktober 20, 2023</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">Futsal</a>
                  </h3>

                  <p class="card-text">
                    Lomba Futsal adalah lomba olahraga yang berisi 5 orang sebagai tim inti dan 7 orang sebagai cadangan
                    tim
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Read More</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="../assets/images/blog-4.png" width="400" height="290" loading="lazy"
                    alt="Defense Of The Ancients" class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">Oktober 20, 2023</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">Volly</a>
                  </h3>

                  <p class="card-text">
                    Lomba Volly adalah lomba olahraga yang berisi 6 orang sebagai tim inti dan 8 orang sebagai cadangan
                    tim
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Read More</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="newsletter" aria-label="newsletter">
        <div class="container">

          <div class="newsletter-card">

            <h2 class="h2">
              Our <span class="span">Newsletter</span>
            </h2>

            <form action="" class="newsletter-form">

              <div class="input-wrapper skewBg">
                <input type="email" name="email_address" aria-label="email" placeholder="Enter your email..." required
                  class="email-field">

                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <button type="submit" class="btn newsletter-btn skewBg">
                <span class="span">Subscribe</span>

                <ion-icon name="paper-plane" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" id="contact">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">TelsCup</a>

          <p class="footer-text">
            
          </p>

          <ul class="contact-list">

            <li class="contact-item">
              <div class="contact-icon">
                <ion-icon name="location"></ion-icon>
              </div>

              <address class="item-text">
                Address : SMKS TELEKOMUNIKASI TELESANDI MEKARSARI RAYA JL. KH.MOCHAMMAD, Mekarsari, Kec. Tambun Selatan,
                Kab. Bekasi Prov. Jawa Barat
              </address>
            </li>

            <li class="contact-item">
              <div class="contact-icon">
                <ion-icon name="headset"></ion-icon>
              </div>

              <a href="tel:+241245654235" class="item-text">Phone : +62 822 1975 6899</a>
            </li>

            <li class="contact-item">
              <div class="contact-icon">
                <ion-icon name="mail-open"></ion-icon>
              </div>

              <a href="mailto:info@exemple.com" class="item-text">Email : admin@chllexandev.com</a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Need Help?</p>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Refund Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Affiliate</a>
          </li>

          <li>
            <a href="#" class="footer-link">Use Cases</a>
          </li>

        </ul>

        <div class="footer-wrapper">

          <div class="social-wrapper">

            <p class="footer-list-title">Follow Us</p>

            <ul class="social-list">

              <li>
                <a href="#" class="social-link" style="background-color: #3b5998">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link" style="background-color: #55acee">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link" style="background-color: #d71e18">
                  <ion-icon name="logo-pinterest"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link" style="background-color: #1565c0">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

            </ul>

          </div>

          <div class="footer-newsletter">

            <p class="footer-list-title">Newsletter Sign Up</p>

            <form action="" class="footer-newsletter">
              <input type="email" name="email_address" aria-label="email" placeholder="Enter your email" required
                class="email-field">

              <button type="submit" class="footer-btn" aria-label="submit">
                <ion-icon name="rocket"></ion-icon>
              </button>
            </form>

          </div>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 Syntax. All Right Reserved by <a href="https://syntx.id" class="copyright-link">Syntax</a>
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP2
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="../assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>