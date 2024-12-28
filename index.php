<?php include './src/head.php'?>
<main class="home">
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="title">
            Explore o mundo <br />
            com <span>estilo e proteção!</span>
          </h1>
          <h2 class="subtitle">
            Óculos de sol exclusivos, desenhados para
            <span>acompanhar você</span> em todos os momentos
          </h2>
          <div class="box-buttons">
            <div class="btn btn-white">Ver nova coleção</div>
            <div class="btn btn-transparent">Saiba Mais</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="new-collection">
    <div class="container">
      <div class="row row-title">
        <div class="col">
          <h2 class="title-thin">Nova coleção</h2>
          <h3 class="title">Conheça nossos lançamentos</h3>
        </div>
      </div>
      <div class="row row-cards">
        <div class="swiper-new-collection">
          <div class="button-next">
            <img src="./img/arrow.svg" alt="" class="icon">
          </div>
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <?php include './src/card.php'?>
              </div>
              <div class="swiper-slide">
                <?php include './src/card.php'?>
              </div>
              <div class="swiper-slide">
                <?php include './src/card.php'?>
              </div>
              <div class="swiper-slide">
                <?php include './src/card.php'?>
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
</main>
<?php include './src/foot.php'?>