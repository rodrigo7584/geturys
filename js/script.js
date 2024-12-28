window.addEventListener('load', function () {
  // Cria o container
  const infoContainer = document.createElement('div')
  infoContainer.id = 'resolution-container'

  // Cria os elementos de texto
  const resolutionElement = document.createElement('p')
  const containerSizeElement = document.createElement('p')

  // Função para atualizar os valores
  function updateInfo() {
    // Obtém a largura e altura da tela
    const width = window.innerWidth
    const height = window.innerHeight
    resolutionElement.textContent = `TW:${width}px`

    // Obtém o tamanho do primeiro elemento com a classe .container
    const container = document.querySelector('.container')
    if (container) {
      const containerWidth = container.offsetWidth
      const containerHeight = container.offsetHeight
      containerSizeElement.textContent = `CW:${containerWidth}px`
    } else {
      containerSizeElement.textContent = 'Container não encontrado.'
    }
  }

  // Atualiza ao carregar
  updateInfo()

  // Anexa os elementos no container
  infoContainer.appendChild(resolutionElement)
  infoContainer.appendChild(containerSizeElement)

  // Insere o container após a tag body
  document.body.insertAdjacentElement('afterbegin', infoContainer)

  // Atualiza os valores quando a janela for redimensionada
  window.addEventListener('resize', updateInfo)
})

const swiperNewCollection = new Swiper('.swiper-new-collection .swiper', {
  loop: true,
  slidesPerView: 3,
  spaceBetween: 25,
  navigation: {
    nextEl: '.swiper-new-collection .button-next',
    prevEl: '.swiper-new-collection .button-prev'
  }
})

const swiperWhoWeAre = new Swiper('.swiper-who-we-are .swiper', {
  loop: true,
  slidesPerView: 'auto',
  spaceBetween: 25,
  navigation: {
    nextEl: '.swiper-who-we-are .button-prev',
    prevEl: '.swiper-who-we-are .button-next'
  }
})
