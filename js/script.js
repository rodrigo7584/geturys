/*
RESOLUTION
*/
window.addEventListener('load', function () {
  const infoContainer = document.createElement('div')
  infoContainer.id = 'resolution-container'

  const resolutionElement = document.createElement('p')
  const containerSizeElement = document.createElement('p')

  function updateInfo() {
    const width = window.innerWidth
    const height = window.innerHeight
    resolutionElement.textContent = `TW:${width}px`

    const container = document.querySelector('.container')
    if (container) {
      const containerWidth = container.offsetWidth
      const containerHeight = container.offsetHeight
      containerSizeElement.textContent = `CW:${containerWidth}px`
    } else {
      containerSizeElement.textContent = 'Container não encontrado.'
    }
  }
  updateInfo()

  infoContainer.appendChild(resolutionElement)
  infoContainer.appendChild(containerSizeElement)

  document.body.insertAdjacentElement('afterbegin', infoContainer)
  window.addEventListener('resize', updateInfo)
})
/*
END RESOLUTION
*/

/*
SWIPERS
*/
const swiperNewCollection = new Swiper('.swiper-new-collection .swiper', {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 25,
  navigation: {
    nextEl: '.swiper-new-collection .button-next',
    prevEl: '.swiper-new-collection .button-prev'
  },
  breakpoints: {
    577: {
      slidesPerView: 2
    },
    768: {
      slidesPerView: 3
    }
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

const swiperTestimonials = new Swiper('.swiper-testimonials .swiper', {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 25,
  navigation: {
    nextEl: '.swiper-testimonials .button-next',
    prevEl: '.swiper-testimonials .button-prev'
  },
  breakpoints: {
    769: {
      slidesPerView: 2
    },
    2001: {
      slidesPerView: 3
    }
  }
})

const swiperListHero = new Swiper('.swiper-list-hero .swiper', {
  loop: true,
  slidesPerView: 1
})

var swiperProductDetailsThumbs = new Swiper('.swiper-product-details .swiper-thumbs .swiper', {
  spaceBetween: 15,
  slidesPerView: 4,
  freeMode: true,
  direction: 'vertical',
  watchSlidesProgress: true
})

var swiperProductDetailsPhotos = new Swiper('.swiper-product-details .swiper-photos .swiper', {
  // allowTouchMove: false,
  thumbs: {
    swiper: swiperProductDetailsThumbs
  },
  navigation: {
    nextEl: '.swiper-product-details .swiper-thumbs .button-prev',
    prevEl: '.swiper-product-details .swiper-thumbs .button-next'
  }
})

var swiperListTypes = new Swiper('.swiper-list-types .swiper', {
  slidesPerView: 'auto',
  spaceBetween: 20,
  breakpoints: {
    769: {
      slidesPerView: 6
    }
  }
})
const swiperForHer = new Swiper('.swiper-for-her .swiper', {
  loop: false,
  slidesPerView: 1,
  navigation: {
    nextEl: '.swiper-for-her .button-next',
    prevEl: '.swiper-for-her .button-prev'
  },
  breakpoints: {
    577: {
      slidesPerView: 2
    },
    768: {
      slidesPerView: 4
    }
  }
})
/*
END SWIPERS
*/

/*
SELLER PARTNER SECTION CONTROL
*/
const sellerPartnerSection = document.querySelector('[data-seller-partner-selected]')

function initSellerPartner() {
  if (sellerPartnerSection) {
    const btns = sellerPartnerSection.querySelectorAll('[data-seller-partner]')
    btns.forEach(btn => {
      btn.addEventListener('click', () => {
        const selectedValue = btn.getAttribute('data-seller-partner')
        sellerPartnerSection.setAttribute('data-seller-partner-selected', selectedValue)
      })
    })
  }
}
initSellerPartner()
/*
END SELLER PARTNER SECTION CONTROL
*/

/*
ACCORDION 
*/
const accordion = document.querySelectorAll('.accordion')
function initAccordion() {
  if (accordion) {
    accordion.forEach(item => {
      const question = item.querySelector('.question')
      const answer = item.querySelector('.answer')

      answer.style.maxHeight = 0

      question.addEventListener('click', () => {
        if (item.classList.contains('open')) {
          answer.style.maxHeight = 0
          item.classList.remove('open')
        } else {
          answer.style.maxHeight = answer.querySelector('.content').scrollHeight + 'px'
          item.classList.add('open')
        }
      })
    })
  }
}
initAccordion()
/*
END ACCORDION 
*/

/* 
MODAL 
*/
document.addEventListener('DOMContentLoaded', function () {
  const openButtons = document.querySelectorAll('[data-btn-modal]')
  const closeButtons = document.querySelectorAll('[data-close-modal]')
  const modals = document.querySelectorAll('dialog')

  openButtons.forEach(button => {
    button.addEventListener('click', () => {
      const modalName = button.getAttribute('data-btn-modal')
      const targetModal = document.querySelector(`dialog[data-modal="${modalName}"]`)

      modals.forEach(modal => {
        if (modal.open) {
          modal.close()
        }
      })

      if (targetModal) {
        targetModal.showModal()
      }
    })
  })

  closeButtons.forEach(button => {
    button.addEventListener('click', () => {
      const modal = button.closest('dialog')
      if (modal) {
        modal.close()
      }
    })
  })

  modals.forEach(dialog => {
    dialog.addEventListener('click', e => {
      const dialogDimensions = dialog.getBoundingClientRect()
      if (
        e.clientX < dialogDimensions.left ||
        e.clientX > dialogDimensions.right ||
        e.clientY < dialogDimensions.top ||
        e.clientY > dialogDimensions.bottom
      ) {
        dialog.close()
      }
    })
  })
})
/*
END MODAL 
*/
