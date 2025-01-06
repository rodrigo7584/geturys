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
  <section class="our-collection">
    <div class="container">
      <div class="row">
        <h2 class="title-thin">Navegue por Estilo</h2>
        <h3 class="title">Estilos exclusivos para todos</h3>
        <div class="cards-our-collection">
          <a href="#" class="card-our-collection card-female">
            <h4 class="card-title-our-collection">
              Feminino
            </h4>
          </a>
          <a href="#" class="card-our-collection card-bamboo">
            <h4 class="card-title-our-collection">
              Hastes de bambu
            </h4>
          </a>
          <a href="#" class="card-our-collection card-minimalist">
            <h4 class="card-title-our-collection">
              Minimalista
            </h4>
          </a>
          <a href="#" class="card-our-collection card-polarized">
            <h4 class="card-title-our-collection">
              Polarizado
            </h4>
          </a>
          <a href="#" class="card-our-collection card-fashionista">
            <h4 class="card-title-our-collection">
              Fashionista
            </h4>
          </a>
          <a href="#" class="card-our-collection card-male">
            <h4 class="card-title-our-collection">
              Masculino
            </h4>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="testimonials">
    <div class="container">
      <div class="row">
        <h2 class="title-thin">depoimentos</h2>
        <h3 class="title">O que dizem nossos clientes</h3>
        <div class="swiper-testimonials">
          <div class="button-next">
            <img src="./img/arrow.svg" alt="" class="icon">
          </div>
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card-testimonial card-testimonial-female">
                  <div class="testimonial">
                    <p class="text">
                      Comprei um par de <strong>óculos de sol femininos com haste de bambu</strong>, e estou apaixonada!
                      O acabamento é
                      perfeito, e o material sustentável me deixou muito satisfeita. Sem falar que as lentes polarizadas
                      fazem toda a diferença nos dias de sol intenso.<strong> Recomendo de olhos fechados!</strong>
                    </p>
                  </div>
                  <div class="person-data-card-testimonial">
                    <div class="thumb-card-testimonial">
                      <img src="./img/depoimento.png" alt="" class="image-thumb-card-testimonial">
                    </div>
                    <div class="person-card-testimonial">
                      <h4 class="name-card-testimonial">Barbara Costa</h4>
                      <span class="date-card-testimonial">12/10/2024</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card-testimonial card-testimonial-male">
                  <div class="testimonial">
                    <p class="text">
                      Comprei um par de <strong>óculos de sol femininos com haste de bambu</strong>, e estou apaixonada!
                      O acabamento é
                      perfeito, e o material sustentável me deixou muito satisfeita. Sem falar que as lentes polarizadas
                      fazem toda a diferença nos dias de sol intenso.<strong> Recomendo de olhos fechados!</strong>
                    </p>
                  </div>
                  <div class="person-data-card-testimonial">
                    <div class="thumb-card-testimonial">
                      <img src="./img/depoimento.png" alt="" class="image-thumb-card-testimonial">
                    </div>
                    <div class="person-card-testimonial">
                      <h4 class="name-card-testimonial">Barbara Costa</h4>
                      <span class="date-card-testimonial">12/10/2024</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card-testimonial card-testimonial-female">
                  <div class="testimonial">
                    <p class="text">
                      Comprei um par de <strong>óculos de sol femininos com haste de bambu</strong>, e estou apaixonada!
                      O acabamento é
                    </p>
                  </div>
                  <div class="person-data-card-testimonial">
                    <div class="thumb-card-testimonial">
                      <img src="./img/depoimento.png" alt="" class="image-thumb-card-testimonial">
                    </div>
                    <div class="person-card-testimonial">
                      <h4 class="name-card-testimonial">Barbara Costa</h4>
                      <span class="date-card-testimonial">12/10/2024</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card-testimonial card-testimonial-male">
                  <div class="testimonial">
                    <p class="text">
                      Comprei um par de <strong>óculos de sol femininos com haste de bambu</strong>, e estou apaixonada!
                      O acabamento é
                    </p>
                  </div>
                  <div class="person-data-card-testimonial">
                    <div class="thumb-card-testimonial">
                      <img src="./img/depoimento.png" alt="" class="image-thumb-card-testimonial">
                    </div>
                    <div class="person-card-testimonial">
                      <h4 class="name-card-testimonial">Barbara Costa</h4>
                      <span class="date-card-testimonial">12/10/2024</span>
                    </div>
                  </div>
                </div>
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
  <?php include './src/seller-partner.php'?>
  <section class="newsletter-faq">
    <div class="container">
      <div class="row">
        <div class="col col-newsletter">
          <h2 class="title">
            ASSINE NOSSA NEWSLETTER
          </h2>
          <form action="#" class="form-newsletter">
            <input type="email" placeholder="E-mail*" class="form-newsletter-input">
            <button type="submit" class="form-newsletter-btn">
              <img src="./img/arrow-3.svg" alt="" class="icon">
            </button>
          </form>
          <span class="terms">
            Ao clicar em "Assinar", você confirma que leu e entendeu nossa Política de Privacidade e que deseja
            receber a Newsletter e outras comunicação de marketing, conforme nela, conforme nela estabelecido
          </span>
          <ul class="social-list">
            <li class="social-list-item">
              <a href="#" class="social-list-link">
                <img src="./img/facebook.svg" alt="" class="icon">
              </a>
            </li>
            <li class="social-list-item">
              <a href="#" class="social-list-link">
                <img src="./img/instagram.svg" alt="" class="icon">
              </a>
            </li>
            <li class="social-list-item">
              <a href="#" class="social-list-link">
                <img src="./img/youtube.svg" alt="" class="icon">
              </a>
            </li>
            <li class="social-list-item">
              <a href="#" class="social-list-link">
                <img src="./img/tiktok.svg" alt="" class="icon">
              </a>
            </li>
          </ul>
        </div>
        <div class="col col-faq">
          <div class="accordion">
            <div class="question">
              <p class="title">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt
              </p>
              <img src="./img/arrow-2.svg" alt="" />
            </div>
            <div class="answer">
              <div class="content">
                <p class="text">
                  Nibh quisque suscipit fermentum netus nulla cras porttitor euismod nulla.
                  Orci, dictumst nec aliquet id ullamcorper venenatis.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include './src/foot.php'?>