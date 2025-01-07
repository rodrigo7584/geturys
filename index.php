<?php include './src/head.php'?>
<main class="home">
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="hero-title">
            Explore o mundo <br />
            com <span>estilo e proteção!</span>
          </h1>
          <h2 class="hero-subtitle">
            Óculos de sol exclusivos, desenhados para
            <span>acompanhar você</span> em todos os momentos
          </h2>
          <div class="hero-buttons">
            <div class="btn btn-white">Ver nova coleção</div>
            <div class="btn btn-transparent">Saiba Mais</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="new-collection">
    <div class="container">
      <h2 class="title-thin">Nova coleção</h2>
      <h3 class="title">Conheça nossos lançamentos</h3>
      <div class="swiper-new-collection">
        <div class="button-next">
          <img src="./img/arrow.svg" alt="" class="icon">
        </div>
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <?php include './src/product-card-slide.php'?>
            </div>
            <div class="swiper-slide">
              <?php include './src/product-card-slide.php'?>
            </div>
            <div class="swiper-slide">
              <?php include './src/product-card-slide.php'?>
            </div>
            <div class="swiper-slide">
              <?php include './src/product-card-slide.php'?>
            </div>
          </div>
        </div>
        <div class="button-prev">
          <img src="./img/arrow.svg" alt="" class="icon">
        </div>
      </div>
    </div>
  </section>
  <section class="who-we-are">
    <div class="container">
      <div class="row">
        <div class="col col-swiper">
          <div class="swiper-who-we-are">
            <div class="button-next">
              <img src="./img/arrow-2.svg" alt="" class="icon">
            </div>
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="thumb thumb-1">
                    <h2 class="title-swiper-who-we-are">
                      Proteção UV máxima
                    </h2>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="thumb thumb-2">
                    <h2 class="title-swiper-who-we-are">
                      Conforto e leveza para uso diário
                    </h2>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="thumb thumb-3">
                    <h2 class="title-swiper-who-we-are">
                      Alta durabilidade para aventuras intensas
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="button-prev">
              <img src="./img/arrow-2.svg" alt="" class="icon">
            </div>
          </div>
        </div>
        <div class="col col-text">
          <h2 class="title">
            Quem somos
          </h2>
          <p class="text">
            Somos apaixonados por transformar o simples ato de proteger os olhos em uma experiência de expressão e
            estilo.
            Nossos óculos de sol são mais do que um acessório — são o reflexo da personalidade de quem os usa, para
            aqueles que vivem cada momento com intensidade e prejuízo.
          </p>
          <p class="text">
            Cada modelo é pensado para unir sustentabilidade e inovação, utilizando materiais ecologicamente corretos e
            um
            design que desafia o comum. Queremos que cada par de óculos carregado tenha a essência de liberdade, atitude
            e
            respeito pelo planeta. Nossa missão é proteger os olhos de quem enfrenta o mundo com coragem, oferecendo uma
            visão clara, tanto do caminho à frente quanto de nossos valores: qualidade, estilo e sustentabilidade.
          </p>
          <div class="btn btn-black">Ver nova coleção</div>
        </div>
      </div>
    </div>
  </section>
  <section class="by-style">
    <div class="container-fluid">
      <div class="row row-title">
        <h2 class="title-thin">Navegue por Estilo</h2>
        <h3 class="title">Estilos exclusivos para todos</h3>
      </div>
      <div class="row row-content">
        <a href="#" class="btn btn-transparent">
          Para ela
        </a>
        <a href="#" class="btn btn-transparent">
          Para ele
        </a>
      </div>
    </div>
  </section>
  <section class="benefits">
    <div class="container">
      <div class="row">
        <h2 class="title">Benefícios ao adquirir nossos óculos</h2>
        <div class="benefits-cards">
          <div class="benefits-card">
            <div class="benefits-thumb">
              <img src="./img/beneficios-1.png" alt="" class="benefits-image">
            </div>
            <div class="benefits-content">
              <h3 class="benefits-title">
                Proteção UV Total:
              </h3>
              <p class="text">
                Ofereça segurança para os seus olhos com lentes que bloqueiam 100% dos raios UVA e UVB, proporcionando
                proteção ideal contra os danos solares.
              </p>
              <a href="#" class="btn btn-black">
                Saiba mais
              </a>
            </div>
          </div>
          <div class="benefits-card">
            <div class="benefits-thumb">
              <img src="./img/beneficios-2.png" alt="" class="benefits-image">
            </div>
            <div class="benefits-content">
              <h3 class="benefits-title">
                Conforto e leveza
                para uso diário
              </h3>
              <p class="text">
                Desfrute de óculos projetados para o máximo conforto e leveza, perfeitos para uso prolongado sem causar
                pressão ou desconforto.
              </p>
              <a href="#" class="btn btn-black">
                Saiba mais
              </a>
            </div>
          </div>
          <div class="benefits-card">
            <div class="benefits-thumb">
              <img src="./img/beneficios-3.png" alt="" class="benefits-image">
            </div>
            <div class="benefits-content">
              <h3 class="benefits-title">
                Alta durabilidade para aventuras intensas:
              </h3>
              <p class="text">
                Fabricados com materiais ultra-resistentes, nossos óculos acompanham você em todas as aventuras, sem
                comprometer a qualidade e a durabilidade.
              </p>
              <a href="#" class="btn btn-black">
                Saiba mais
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include './src/our-collection.php'?>
  <?php include './src/testimonials.php'?>
  <?php include './src/seller-partner.php'?>
  <?php include './src/newsletter-faq.php'?>
</main>
<?php include './src/foot.php'?>