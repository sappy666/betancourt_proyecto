<template>
   <section id="clients" class="clients">
        <section class="">
    <div class="section-header">
            <h2>Han confiado en nosotros</h2>
            <p>Conoce algunos de nuestros clientes</p>
         </div>
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/1.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/2.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/3.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/4.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/5.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/6.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/7.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/8.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/9.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/10.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/11.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/12.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/13.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/14.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/15.jpg" alt="" height="60"></div>
          <div class="col-lg-2 col-md-3 col-6 py-2 py-lg-0"><img class="d-block mx-auto partner" src="../assets/Clientes/16.jpg" alt="" height="60"></div>
        </div>
      </div>
    </section>
  </section>
</template>
<script>
import Swiper from 'swiper';

export default {
  name: 'ClientesComp',
  mounted() {
    this.initSwiper();
  },
  methods: {
    initSwiper() {
      new Swiper('.clients-slider .swiper-container', {
        speed: 400,
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
          el: '.clients-slider .swiper-pagination',
          type: 'bullets',
          clickable: true
        },
        breakpoints: {
          320: {
            slidesPerView: 2,
            spaceBetween: 40
          },
          480: {
            slidesPerView: 3,
            spaceBetween: 60
          },
          640: {
            slidesPerView: 4,
            spaceBetween: 80
          },
          992: {
            slidesPerView: 6,
            spaceBetween: 120
          }
        }
      });
    }
  }
};
</script>
<style scoped>

.clients {
  padding-top: 20px;
}

.clients img {
  opacity: 0.5;
  transition: 0.3s;
  filter: grayscale(100);
  padding-top: 10px;
}

.clients img:hover {
  filter: none;
  opacity: 1;
}

.clients .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.clients .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  background-color: #ddd;
}

.clients .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #ffc451;
}
</style>
