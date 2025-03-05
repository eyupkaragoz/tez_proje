<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ustam.com</title>
  <link rel="" href="logo.png" type="icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body>
  <?php include("navbar.php") ?>
  <!-- slider başlangıç   -->
  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="asd.jpg" class="d-block w-100 img-fluid c-img" alt="...">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <p class="mt-5 fs-3 text-uppercase">Ustam.com</p>
          <h1 class="display-1 fw-bolder text-capitalize">Yenilikçi bir buluşma
          </h1>
          <button class="btn btn-primary px-4 py-2 fs-5 mt-5">İşinizi oluşturun</button>
        </div>
      </div>
      <div class="carousel-item active c-item">
        <img src="asd.jpg" class="d-block w-100 img-fluid c-img" alt="...">
      </div>
      <div class="carousel-item active c-item">
        <img src="asd.jpg" class="d-block w-100 img-fluid c-img" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- slider bitiş   -->

  <!-- slider bitiş   -->
  <div id="hakkimizda" class="misyon">
    <div class="misyon_alan">
      <h1 class="misyon_baslik">Neyi Amaçlıyoruz</h1>
      <h5>Lorem ipsum dolor sit amet.</h5>
      <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h5>
      <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consectetur voluptates recusandae tempore
        exercitationem distinctio doloremque perspiciatis aut minima quibusdam iusto voluptate reiciendis nulla commodi,
        non nesciunt, harum ducimus sed.</h5>
    </div>
  </div>
  <!-- slider bitiş   -->


  <!-- kartlar başlangıç   -->
  <div class="kart ">
    <section>
      <div class="card">
        <div class="image mt-2 ">
          <img src="60111.jpg" alt="User">
        </div>
        <div class="card-content">
          <div class="media-icons">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-github"></i>
          </div>
          <div class="name-profession">
            <span class="name">Someone Name</span>
            <span class="profession">Web Developer</span>
          </div>
          <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <div class="button">
            <button class="aboutMe">Başvur</button>
          </div>
        </div>
      </div>
    </section>
  </div>


  <!-- kartlar bitiş   -->

  <?php include("footer.php") ?>






















  <script src="js/bootstrap.min.js"></script>
</body>

</html>