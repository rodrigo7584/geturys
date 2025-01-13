<?php include './src/head.php'?>
<main class="list">
  <section class="hero">
    <div class="container-fluid">
      <div class="row">
        <div class="swiper-list-hero">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="./img/hero-slide-1.png" alt="" class="list-hero-bg">
              </div>
              <div class="swiper-slide">
                <img src="./img/hero-slide-2.png" alt="" class="list-hero-bg">
              </div>
              <div class="swiper-slide">
                <img src="./img/hero-slide-3.png" alt="" class="list-hero-bg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="for-her">
    <div class="container">
      <div class="row">
        <h2 class="title-thin">NOVA COLEÇÃO</h2>
        <h3 class="title title-detail">
          Para elas
        </h3>
        <div class="swiper-for-her">
          <div class="button-next">
            <img src="./img/arrow.svg" alt="" class="icon">
          </div>
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <?php include './src/card-product.php'?>
              </div>
              <div class="swiper-slide">
                <?php include './src/card-product.php'?>
              </div>
              <div class="swiper-slide">
                <?php include './src/card-product.php'?>
              </div>
              <div class="swiper-slide">
                <?php include './src/card-product.php'?>
              </div>

            </div>
          </div>
          <div class="button-prev">
            <img src="./img/arrow.svg" alt="" class="icon">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="for-him">
    <div class="container">
      <div class="row">
        <h2 class="title-thin">NOVA COLEÇÃO</h2>
        <h3 class="title title-detail">
          Para eles
        </h3>
        <div class="cards">
          <?php include './src/card-product.php'?>
          <?php include './src/card-product.php'?>
          <?php include './src/card-product.php'?>
          <?php include './src/card-product.php'?>
        </div>
      </div>
    </div>
  </section>
  <?php include "./src/new-collection-login.php"?>
  <?php include "./src/our-collection.php"?>
  <section class="gift">
    <div class="container">
      <div class="row">
        <h2 class="title-thin">NOVA COLEÇÃO</h2>
        <h3 class="title title-detail">
          Perfeito para presentear
        </h3>
        <div class="cards">
          <?php include './src/card-product.php'?>
          <?php include './src/card-product.php'?>
          <?php include './src/card-product.php'?>
          <?php include './src/card-product.php'?>
        </div>
      </div>
    </div>
  </section>
  <section class="style">
    <div class="container">
      <div class="row">
        <h2 class="title-thin">NOVA COLEÇÃO</h2>
        <h3 class="title title-detail">
          Para quem tem estilo
        </h3>
        <div class="cards">
          <?php include './src/card-product.php'?>
          <?php include './src/card-product.php'?>
          <?php include './src/card-product.php'?>
          <?php include './src/card-product.php'?>
        </div>
      </div>
    </div>
  </section>
  <?php include './src/testimonials.php'?>
  <?php include './src/seller-partner.php'?>
  <?php include './src/newsletter-faq.php'?>
</main>
<?php include './src/foot.php'?>